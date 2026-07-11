<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function index()
	{
		$data = array(
			'pelanggan' => $this->db->query("SELECT * FROM `pelanggan`")->result()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vAnalisis', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function periode()
	{
		$data['periode'] = $this->db->query("
    SELECT
        periode,
        COUNT(id_pelanggan) AS jumlah_pelanggan,
        SUM(CASE WHEN level = 1 THEN 1 ELSE 0 END) AS lost,
        SUM(CASE WHEN level = 2 THEN 1 ELSE 0 END) AS at_risk,
        SUM(CASE WHEN level = 3 THEN 1 ELSE 0 END) AS potensial,
        SUM(CASE WHEN level = 4 THEN 1 ELSE 0 END) AS loyal,
        SUM(CASE WHEN level = 5 THEN 1 ELSE 0 END) AS champion
    FROM analisis
    GROUP BY periode
    ORDER BY periode DESC
")->result();

		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vPeriode', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function detail($periode)
	{
		$data['periode'] = $periode;

		$data['analisis'] = $this->db->query("
SELECT
    a.*,
    p.nama_pelanggan,

    CASE
        WHEN a.level = 1 THEN 'Lost'
        WHEN a.level = 2 THEN 'At Risk'
        WHEN a.level = 3 THEN 'Potensial'
        WHEN a.level = 4 THEN 'Loyal'
        WHEN a.level = 5 THEN 'Champion'
    END AS kategori

FROM analisis a
JOIN pelanggan p ON a.id_pelanggan = p.id_pelanggan
WHERE a.periode = '$periode'
ORDER BY a.level DESC
")->result();

		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vDetailPeriode', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function analisis_perbulan()
	{
		// Ambil seluruh pelanggan
		$dt_pelanggan = $this->db->query("SELECT * FROM `pelanggan`")->result();

		// Ambil seluruh periode transaksi
		$periode = $this->db->query("
        SELECT
            YEAR(tgl_transaksi) AS tahun,
            MONTH(tgl_transaksi) AS bulan
        FROM transaksi
        GROUP BY YEAR(tgl_transaksi), MONTH(tgl_transaksi)
        ORDER BY YEAR(tgl_transaksi), MONTH(tgl_transaksi)
    ")->result();

		foreach ($periode as $p) {

			// Tanggal awal dan akhir bulan
			$awal  = date('Y-m-01', strtotime($p->tahun . '-' . $p->bulan . '-01'));
			$akhir = date('Y-m-t', strtotime($awal));

			// Format periode
			$periode_db = date('Y-m', strtotime($awal));

			foreach ($dt_pelanggan as $pelanggan) {

				// ===========================
				// Frequency & Monetary
				// ===========================
				$dt_fm = $this->db->query("
                SELECT
                    COUNT(id_transaksi) AS frequency,
                    COALESCE(SUM(total_transaksi),0) AS monetary
                FROM transaksi
                WHERE id_pelanggan = '$pelanggan->id_pelanggan'
                AND tgl_transaksi BETWEEN '$awal' AND '$akhir'
            ")->row();

				// Jika tidak ada transaksi lanjut ke pelanggan berikutnya
				if ($dt_fm->frequency == 0) {
					continue;
				}

				// ===========================
				// Recency
				// ===========================
				$dt_r = $this->db->query("
                SELECT
                    DATEDIFF('$akhir', MAX(tgl_transaksi)) AS selisih_hari
                FROM transaksi
                WHERE id_pelanggan = '$pelanggan->id_pelanggan'
                AND tgl_transaksi BETWEEN '$awal' AND '$akhir'
            ")->row();

				$r = $dt_r->selisih_hari;
				$f = $dt_fm->frequency;
				$m = $dt_fm->monetary;

				// ===========================
				// Skor Recency
				// ===========================
				if ($r <= 7) {
					$sr = 5;
				} elseif ($r <= 14) {
					$sr = 4;
				} elseif ($r <= 30) {
					$sr = 3;
				} elseif ($r <= 60) {
					$sr = 2;
				} else {
					$sr = 1;
				}

				// ===========================
				// Skor Frequency
				// ===========================
				if ($f == 1) {
					$sf = 1;
				} elseif ($f <= 3) {
					$sf = 2;
				} elseif ($f <= 6) {
					$sf = 3;
				} elseif ($f <= 9) {
					$sf = 4;
				} else {
					$sf = 5;
				}

				// ===========================
				// Skor Monetary
				// ===========================
				if ($m <= 500000) {
					$sm = 1;
				} elseif ($m <= 1000000) {
					$sm = 2;
				} elseif ($m <= 1500000) {
					$sm = 3;
				} elseif ($m <= 2000000) {
					$sm = 4;
				} else {
					$sm = 5;
				}

				// ===========================
				// Total Skor
				// ===========================
				$js = $sr + $sf + $sm;

				if ($js <= 3) {
					$lm = 1;
				} elseif ($js <= 6) {
					$lm = 2;
				} elseif ($js <= 9) {
					$lm = 3;
				} elseif ($js <= 12) {
					$lm = 4;
				} else {
					$lm = 5;
				}

				// ===========================
				// Data Analisis
				// ===========================
				$data = array(
					'id_pelanggan' => $pelanggan->id_pelanggan,
					'periode'      => $periode_db,
					'recency'      => $r,
					'frequency'    => $f,
					'monetary'     => $m,
					'level'        => $lm
				);

				// ===========================
				// Cek apakah periode sudah ada
				// ===========================
				$cek = $this->db
					->where('id_pelanggan', $pelanggan->id_pelanggan)
					->where('periode', $periode_db)
					->get('analisis')
					->row();

				if ($cek) {

					$this->db->where('id_analisis', $cek->id_analisis);
					$this->db->update('analisis', $data);
				} else {

					$this->db->insert('analisis', $data);
				}

				// Debug (hapus jika sudah selesai)

				// echo "Periode : " . $periode_db . "<br>";
				// echo "Pelanggan : " . $pelanggan->id_pelanggan . "<br>";
				// echo "R : " . $r . "<br>";
				// echo "F : " . $f . "<br>";
				// echo "M : " . $m . "<br>";
				// echo "Level : " . $lm . "<br>";
				// echo "--------------------------<br>";
			}
		}
		$this->session->set_flashdata('success', 'Analisis RFM per bulan berhasil diproses.');
		redirect('Backend/cTransaksiProduk');
	}
	public function perhitungan()
	{
		$date = date('Y-m-d');
		$dt_pelanggan = $this->db->query("SELECT * FROM `pelanggan`")->result();
		foreach ($dt_pelanggan as $key => $value) {
			$dt_fm = $this->db->query("SELECT COUNT(id_transaksi) as frequency, SUM(total_transaksi) as monetary FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $value->id_pelanggan . "'")->row();
			$dt_r = $this->db->query("SELECT DATEDIFF('" . $date . "', tgl_transaksi) AS selisih_hari FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $value->id_pelanggan . "' ORDER BY tgl_transaksi DESC LIMIT 1")->row();

			if ($dt_fm->frequency != '0') {
				// echo $value->id_pelanggan . ' ' . $dt_r->selisih_hari . ' ' . $dt_fm->frequency . ' ' . $dt_fm->monetary . '<br>';
				//skoring
				//recency
				$r = $dt_r->selisih_hari;
				$f = $dt_fm->frequency;
				$m = $dt_fm->monetary;
				if ($r >= 0 && $r <= 7) {
					$sr = '5';
				} else if ($r >= 8 && $r <= 14) {
					$sr = '4';
				} else if ($r >= 15 && $r <= 30) {
					$sr = '3';
				} else if ($r >= 31 && $r <= 60) {
					$sr = '2';
				} else if ($r > 60) {
					$sr = '1';
				}

				//frequency
				if ($f == 1) {
					$sf = '1';
				} else if ($f >= 2 && $f <= 3) {
					$sf = '2';
				} else if ($f >= 4 && $f <= 6) {
					$sf = '3';
				} else if ($f >= 7 && $f <= 9) {
					$sf = '4';
				} else if ($f >= 10) {
					$sf = '5';
				}

				//monetary
				if ($m >= 0 && $m <= 500000) {
					$sm = '1';
				} else if ($m > 500000 && $m <= 1000000) {
					$sm = '2';
				} else if ($m > 1000000 && $m <= 1500000) {
					$sm = '3';
				} else if ($m > 1500000 && $m <= 2000000) {
					$sm = '4';
				} else if ($m > 2000000) {
					$sm = '5';
				}
				// echo 'Skoring R :' . $sr . '<br>';
				// echo 'Skoring F :' . $sf . '<br>';
				// echo 'Skoring M :' . $sm . '<br>';
				$js = $sr + $sf + $sm;
				if ($js >= 0 && $js <= 3) {
					$lm = '1';
				} else if ($js >= 4 && $js <= 6) {
					$lm = '2';
				} else if ($js >= 7 && $js <= 9) {
					$lm = '3';
				} else if ($js >= 10 && $js <= 12) {
					$lm = '4';
				} else if ($js >= 13 && $js <= 15) {
					$lm = '5';
				}
				// echo 'Jumlah Skor: ' . $js . '<br>';
				// echo 'Level Member: ' . $lm . '<br>';
				// echo '----------------------<br>';

				//update level member
				$data = array(
					'recency' => $r,
					'frequency' => $f,
					'monetary' => $m,
					'level_member' => $lm
				);
				$this->db->where('id_pelanggan', $value->id_pelanggan);
				$this->db->update('pelanggan', $data);
			}
		}
		// $this->session->set_flashdata('success', 'Transaksi berhasil dikonfirmasi');

		redirect('Backend/cAnalisis/analisis_perbulan');
	}
}

/* End of file cAnalisis.php */
