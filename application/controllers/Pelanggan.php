<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['pelanggan'] = $this->Pelanggan_model->GetPelanggan();
        $this->slice->view('pelanggan', $data);
    }

    public function store()
    {
        $this->form_validation->set_rules('nm_pelanggan', 'nm_pelanggan', 'required');
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->Pelanggan_model->SavePelangan();
            $this->session->set_flashdata('messages', 'Tambah Pelanggan Berhasil!!');
            redirect('/','refresh');
        } else {
            $data['pelanggan'] = $this->Pelanggan_model->GetPelanggan();
            $this->session->set_flashdata('messages', 'Tambah Pelanggan Gagal!!');
            $this->slice->view('pelanggan', $data);
        }
    }
}