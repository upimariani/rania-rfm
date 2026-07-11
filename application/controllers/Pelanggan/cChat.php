<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cChat extends CI_Controller
{

	public function index()
	{
		$id_pelanggan = $this->session->userdata('id_pelanggan');
		$this->db->select('chat.*, pelanggan.nama_pelanggan');
		$this->db->from('chat');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = chat.id_pelanggan');
		$this->db->where('chat.id_pelanggan', $id_pelanggan);
		$this->db->order_by('chat.waktu', 'ASC');

		$data['chat'] = $this->db->get()->result();

		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/vChat', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function kirim()
	{
		$data = [
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'pengirim'     => 'pelanggan',
			'pesan'        => $this->input->post('pesan'),
			'waktu'        => date('Y-m-d H:i:s')
		];

		$this->db->insert('chat', $data);

		redirect('Pelanggan/cChat');
	}
}

/* End of file cChat.php */
