<?php

class Ujian extends CI_Controller
{
    public function index()
    {

        $data['ujian'] = $this->ujian_model->tampil_ujian_siswa();
        $data['foto'] = $this->siswa_model->tampil_foto();
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('siswa/ujian', $data);
        $this->load->view('template_user/footer');
    }
}
