<?php

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('template_user/header');
        $this->load->view('login');
        $this->load->view('template_user/footer');
    }
}
