<?php

class Nilai extends CI_Controller
{
    public function index()
    {
        $data['foto'] = $this->siswa_model->tampil_foto();
        $data['join_siswa'] = $this->nilai_model->join_siswa();
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('siswa/nilai', $data);
        $this->load->view('template_user/footer');
    }
}
