<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/vLogin');
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$query = $this->db->query("SELECT * FROM `pelanggan` WHERE username='" . $username . "' AND password='" . $password . "'")->row();
			if ($query) {

				$array = array(
					'id_pelanggan' => $query->id_pelanggan
				);

				$this->session->set_userdata($array);
				redirect('Pelanggan/cHome');
			} else {
				$this->session->set_flashdata('error', 'Username dan Password Anda Salah!');
				redirect('Pelanggan/cLogin');
			}
		}
	}
	public function logout()
	{
		$this->cart->destroy();
		$this->session->unset_userdata('id_pelanggan');
		$this->session->set_flashdata('success', 'Anda berhasil Logout!');
		redirect('Pelanggan/cLogin');
	}
	public function registrasi()
	{
		$this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor Telepon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/vRegistrasi');
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$data = array(
				'nama_pelanggan' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_member' => '1'
			);
			$this->db->insert('pelanggan', $data);
			$this->session->set_flashdata('success', 'Anda berhasil registrasi! Silahkan melakukan login!');
			redirect('Pelanggan/cLogin');
		}
	}
}

/* End of file cLogin.php */
