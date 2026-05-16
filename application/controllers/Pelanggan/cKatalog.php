<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKatalog extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mProduk');
	}


	public function index()
	{

		$data = array(
			'produk' => $this->mProduk->select()
		);

		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vKatalog', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function kategori($kategori)
	{
		$kategori = str_replace('-', ' ', $kategori);

		$data['produk'] = $this->db
			->where('kategori_produk', $kategori)
			->get('produk')
			->result();

		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vKatalog', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
}

/* End of file cKatalog.php */
