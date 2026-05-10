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
		$this->form_validation->set_rules(
			'nama',
			'Nama Pelanggan',
			'required|regex_match[/^[a-zA-Z\s]+$/]',
			array(
				'required' => '%s wajib diisi!',
				'regex_match' => '%s hanya boleh huruf dan spasi!'
			)
		);
		$this->form_validation->set_rules(
			'no_hp',
			'Nomor Telepon',
			'required|numeric|min_length[11]|max_length[13]',
			array(
				'required'   => '%s wajib diisi!',
				'numeric'    => '%s hanya boleh angka!',
				'min_length' => '%s minimal 11 digit!',
				'max_length' => '%s maksimal 13 digit!'
			)
		);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/vRegistrasi');
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$provinsi = $this->input->post('provinsi');
			$kota = $this->input->post('kota');
			$kecamatan = $this->input->post('kecamatan');


			$teks = $this->input->post('nama');

			$hasil = strtoupper(preg_replace('/[aiueoAIUEO\s]/', '', $teks));

			$data = array(
				'id_pelanggan' => $hasil,
				'nama_pelanggan' => $teks,
				'alamat' => $this->input->post('alamat') . ' Kec.' . $kecamatan . ' Kota/Kab. ' . $kota . ' Prov. ' . $provinsi,
				'no_hp' => $this->input->post('no_hp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_member' => '1',
				'kode_kec' => $this->input->post('id_kec')
			);
			$this->db->insert('pelanggan', $data);
			$this->session->set_flashdata('success', 'Anda berhasil registrasi! Silahkan melakukan login!');
			redirect('Pelanggan/cLogin');
		}
	}
}

/* End of file cLogin.php */
