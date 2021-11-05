<?php

class Modul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('informasi_model');
    }

    public function index()
    {
        $data['modul'] = $this->informasi_model->tampil_modul();
        $data['foto'] = $this->siswa_model->tampil_foto();
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('siswa/modul', $data);
        $this->load->view('template_user/footer');
    }
    function download($id)
    {
        $data = $this->db->get_where('modul', ['id_modul' => $id])->row();
        force_download('assets/uploads/' . $data->modul, NULL);
    }
}
