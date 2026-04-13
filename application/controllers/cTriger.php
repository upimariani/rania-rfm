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
}

/* End of file cTriger.php */
