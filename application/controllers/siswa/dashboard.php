<?php

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible 
            fade show" role="alert"> Anda Belum Login 
            <button type="button" class="close" data=dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('user/auth');
        }
    }

    public function index()
    {
        $data = $this->user_model->ambil_data1($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'level'    => $data->level,
        );
        $data['foto'] = $this->siswa_model->tampil_foto();
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('siswa/dashboard', $data);
        $this->load->view('template_user/footer');
    }
}
