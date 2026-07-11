<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cChat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mChat');
	}

	public function detail($id_pelanggan)
	{
		$data['pelanggan'] = $this->mChat->listChat();


		$data['chat'] = $this->mChat->detailChat($id_pelanggan);
		$data['id_pelanggan'] = $id_pelanggan;


		$this->load->view('Backend/Layout/header');
		$this->load->view('Backend/vChat', $data);
		$this->load->view('Backend/Layout/footer');
	}

	public function kirim()
	{
		$this->db->insert('chat', [
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'pengirim' => 'admin',
			'pesan' => $this->input->post('pesan'),
			'waktu' => date('Y-m-d H:i:s')
		]);

		redirect('Backend/vChat/detail/' . $this->input->post('id_pelanggan'));
	}
}

/* End of file cChat.php */
