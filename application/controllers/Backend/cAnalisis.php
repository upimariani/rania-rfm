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
	public function perhitungan()
	{
		$date = date('Y-m-d');
		$dt_pelanggan = $this->db->query("SELECT * FROM `pelanggan`")->result();
		foreach ($dt_pelanggan as $key => $value) {
			$dt_fm = $this->db->query("SELECT COUNT(id_transaksi) as frequency, SUM(total_transaksi) as monetary FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $value->id_pelanggan . "'")->row();
			$dt_r = $this->db->query("SELECT DATEDIFF('" . $date . "', tgl_transaksi) AS selisih_hari FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $value->id_pelanggan . "' GROUP BY tgl_transaksi DESC LIMIT 1")->row();

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
		$this->session->set_flashdata('success', 'Transaksi berhasil dikonfirmasi');
		redirect('Backend/cTransaksiProduk');
	}
}

/* End of file cAnalisis.php */
