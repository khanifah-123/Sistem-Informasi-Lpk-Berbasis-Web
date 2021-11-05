<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $data                = array();
        $data['js']          = 'home.js';
        $data['css']         = 'home.css';
    }

    public function index()
    {

        $this->load->view('template_landingPage/header');
        $this->load->view('template_landingPage/home');
        $this->load->view('template_landingPage/footer');
    }
}
