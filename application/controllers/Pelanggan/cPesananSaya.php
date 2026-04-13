<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPesananSaya extends CI_Controller
{

	public function index()
	{
		$data = array(
			'pesanan_saya' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $this->session->userdata('id_pelanggan') . "'")->result()
		);
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vPesananSaya', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function detail($id_transaksi)
	{
		$data = array(
			'pesanan_saya' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE id_transaksi='" . $id_transaksi . "'")->row(),
			'produk' => $this->db->query("SELECT * FROM `transaksi` JOIN detail_tran ON transaksi.id_transaksi=detail_tran.id_transaksi JOIN produk ON produk.id_produk=detail_tran.id_produk WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->result()
		);

		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vDetailPesanan', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function bayar($id_transaksi)
	{
		$config['upload_path']          = './asset/bayar/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = '500000';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$data = array(
				'pesanan_saya' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE id_transaksi='" . $id_transaksi . "'")->row(),
				'produk' => $this->db->query("SELECT * FROM `transaksi` JOIN detail_tran ON transaksi.id_transaksi=detail_tran.id_transaksi JOIN produk ON produk.id_produk=detail_tran.id_produk WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->result()
			);

			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/vDetailPesanan', $data);
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$upload_data =  $this->upload->data();
			$data = array(
				'bukti_payment' => $upload_data['file_name'],
				'stat_transaksi' => '1'
			);
			$this->db->where('id_transaksi', $id_transaksi);
			$this->db->update('transaksi', $data);
			$this->session->set_flashdata('success', 'Pembayaran berhasil diupload!');

			redirect('Pelanggan/cPesananSaya/detail/' . $id_transaksi, 'refresh');
		}
	}
}

/* End of file cPesananSaya.php */
