<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awal extends CI_Controller
{

    public function index()
    {
        $data['row'] = $this->informasi_model->get();

        $this->load->view('hayoo', $data);
    }
    public function modul()
    {
        $this->load->model('informasi_model');
        $data['row'] = $this->informasi_model->get();
        $data['modul'] = $this->informasi_model->tampil_semua('modul');
        $this->load->view('nyoba', $data);
    }
    public function coba()
    {


        $this->load->view('template');
    }
}
