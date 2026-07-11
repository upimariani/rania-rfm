<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mChat extends CI_Model
{
	public function getPelanggan()
	{
		return $this->db
			->select('pelanggan.id_pelanggan, pelanggan.nama_pelanggan, pelanggan.id_pelanggan')
			->from('chat')
			->join('pelanggan', 'pelanggan.id_pelanggan = chat.id_pelanggan')
			->group_by('pelanggan.id_pelanggan')
			->order_by('MAX(chat.waktu)', 'DESC', FALSE)
			->get()
			->result();
	}
	public function listChat()
	{
		return $this->db->query("
            SELECT
                pelanggan.id_pelanggan,
                pelanggan.nama_pelanggan,
                MAX(chat.waktu) waktu,
                SUBSTRING_INDEX(
                    GROUP_CONCAT(chat.pesan ORDER BY chat.waktu DESC),
                    ',',1
                ) pesan

            FROM pelanggan

            JOIN chat
            ON chat.id_pelanggan=pelanggan.id_pelanggan

            GROUP BY pelanggan.id_pelanggan

            ORDER BY waktu DESC
        ")->result();
	}

	public function detailChat($id)
	{
		return $this->db
			->where('id_pelanggan', $id)
			->order_by('waktu', 'ASC')
			->get('chat')
			->result();
	}
}

/* End of file ModelName.php */
