<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_daftar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {

            $this->load->view('login_daftar');
        } else {
            $this->loginin();
        }
    }

    private function loginin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $calon_siswa = $this->db->get_where('calon_siswa', ['username' => $username])->row_array();

        if ($calon_siswa) {

            if (password_verify($password, $calon_siswa['password'])) {
            } else {

                redirect('modal');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">nis belum terdaftar!</div>');
            redirect('Login_daftar');
        }
    }
}
?>
}