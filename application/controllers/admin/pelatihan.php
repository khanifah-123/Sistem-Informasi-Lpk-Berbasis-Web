<?php
class Pelatihan extends CI_Controller
{
    public function index()
    {
        $data['pelatihan'] = $this->pelatihan_model->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/pelatihan', $data);
        $this->load->view('template_admin/footer');
    }
}
