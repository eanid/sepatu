<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_model extends CI_Model
{
    public function GetPelanggan()
    {
        $this->db->from('tabel_pelanggan');
        $data = $this->db->get();
        return $data->result_array();
    }
    public function SavePelangan()
    {
        $data = array(
            "nm_pelanggan" => $this->input->post('nm_pelanggan'),
            "no_hp" => $this->input->post('no_hp'),
            "alamat" => $this->input->post('alamat'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
        );
        $this->db->insert('tabel_pelanggan', $data);
        return $this->db->insert_id();
    }
}
