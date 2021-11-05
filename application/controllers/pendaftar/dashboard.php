<?php

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();


        $this->load->model('pendaftar_model');

        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible 
            fade show" role="alert"> Anda Belum Login 
            <button type="button" class="close" data=dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('user/auth');
        }
    }

    public function bukti()
    {

        $data['berkas'] = $this->db->query("select * from pendaftar, berkas, user where berkas.id_berkas=pendaftar.id_berkas and user.id='pendaftar.id'")->result();

        $this->load->view('template_landingPage/header');
        $this->load->view('pendaftar/bukti', $data);
        $this->load->view('template_landingPage/footer');
    }
}
