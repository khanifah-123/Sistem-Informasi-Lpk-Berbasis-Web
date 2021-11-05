<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data = $this->user_model->ambil_data1($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'level'    => $data->level,
        );
        $this->template->load('template', 'admin/dashboard', $data);
    }
}
