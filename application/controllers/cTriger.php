<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTriger extends CI_Controller
{

	public function index()
	{
		//data transaksi
		$dt_transaksi = $this->db->query("SELECT * FROM `transaksi`")->result();
		foreach ($dt_transaksi as $key => $value) {
			$dt_produk = $this->db->query("SELECT * FROM `transaksi` JOIN detail_tran ON transaksi.id_transaksi=detail_tran.id_transaksi JOIN produk ON detail_tran.id_produk=produk.id_produk WHERE transaksi.id_transaksi='" . $value->id_transaksi . "'")->result();
			$tot = 0;
			foreach ($dt_produk as $key => $item) {
				echo $item->id_transaksi . ' ' . $item->id_produk . ' ' . $item->harga . ' ' . $item->qty . ' ' . $item->qty * $item->harga . '<br>';
				$tot += ($item->qty * $item->harga);
			}
			echo 'Total' . $tot . '<br>';
			$data = array(
				'total_transaksi' => $tot,
				'total_pembayaran' => $tot + 7000
			);
			$this->db->where('id_transaksi', $value->id_transaksi);
			$this->db->update('transaksi', $data);
		}
	}
	public function id_pelanggan()
	{
		$dt = $this->db->query("SELECT pelanggan.id_pelanggan as id_pel, transaksi.id_pelanggan as id_tr, t_id FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.t_id")->result();
		foreach ($dt as $key => $value) {
			$data = array(
				'id_pelanggan' => $value->id_pel
			);
			$this->db->where('id_pelanggan', $value->id_pel);
			$this->db->update('transaksi', $data);
		}
	}
}

/* End of file cTriger.php */
