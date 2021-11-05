<?php
class Transfer extends CI_Controller
{

    public function index()
    {
        $this->load->view('template_user/header');
        $this->load->view('transfer');
        $this->load->view('template_user/footer');
    }
}
