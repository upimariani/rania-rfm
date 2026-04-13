<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCheckout extends CI_Controller
{

	public function index()
	{
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vCheckout');
		// $this->load->view('Pelanggan/Layout/footer');
	}
	public function order()
	{
		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),

			'tgl_transaksi' => date('Y-m-d'),
			'total_transaksi' => $this->cart->total(),
			'total_pembayaran' => $this->input->post('total_pembayaran'),
			'ongkir' => $this->input->post('ongkir'),
			'alamat_pengiriman' => $this->input->post('alamat') . ' Kec.' . $this->input->post('kecamatan') . ' Kota/Kab.' . $this->input->post('kota') . ' Prov.' . $this->input->post('provinsi') . ' Expedisi.' . $this->input->post('expedisi') . ' ' . $this->input->post('paket'),
			'stat_transaksi' => '0'
		);
		$this->db->insert('transaksi', $data);

		//id_transaksi
		$query = $this->db->query("SELECT MAX(id_transaksi) as id FROM `transaksi`")->row();

		//input data detail
		foreach ($this->cart->contents() as $key => $value) {
			$dt = array(
				'id_transaksi' => $query->id,
				'id_produk' => $value['id'],
				'qty' => $value['qty']
			);
			$this->db->insert('detail_tran', $dt);

			//mengurangi stok produk
			$dt_produk = $this->db->query("SELECT * FROM `produk` WHERE id_produk='" . $value['id'] . "'")->row();
			$stok_seb = $dt_produk->stok;
			$stok_set = $stok_seb - $value['qty'];

			$dt_stok = array(
				'stok' => $stok_set
			);
			$this->db->where('id_produk', $value['id']);
			$this->db->update('produk', $dt_stok);
		}
		$this->cart->destroy();
		redirect('Pelanggan/cPesananSaya');
	}
}

/* End of file cCheckout.php */
