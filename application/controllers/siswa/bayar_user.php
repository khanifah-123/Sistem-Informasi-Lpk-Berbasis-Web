<?php
class Bayar_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('bayar_model');
    }

    public function index()
    {
        $data['foto'] = $this->siswa_model->tampil_foto();
        $data['join_siswa_bayar'] = $this->bayar_model->getAllAkun();
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('siswa/bayar', $data);
        $this->load->view('template_user/footer');
    }
}
