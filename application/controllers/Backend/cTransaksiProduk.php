<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksiProduk extends CI_Controller
{

	public function index()
	{
		$data = array(
			'transaksi' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan")->result()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vTransaksiProduk', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function detail($id_transaksi)
	{
		$data = array(
			'pesanan_saya' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->row(),
			'produk' => $this->db->query("SELECT * FROM `transaksi` JOIN detail_tran ON transaksi.id_transaksi=detail_tran.id_transaksi JOIN produk ON produk.id_produk=detail_tran.id_produk WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->result()
		);
		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vDetailTransaksi', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function konfirmasi($id_transaksi)
	{
		$data = array(
			'stat_transaksi' => '2'
		);
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->update('transaksi', $data);

		redirect('Backend/cAnalisis/perhitungan');
	}
}

/* End of file cTransaksiProduk.php */
