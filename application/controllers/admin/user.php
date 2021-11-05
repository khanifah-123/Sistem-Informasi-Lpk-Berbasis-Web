<?php

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function index()
    {
        $data['user'] = $this->user_model->get()->result();

        $this->template->load('template', 'admin/v_user', $data);
    }
    public function detail($id)
    {
        $data['detail'] = $this->user_model->ambil_data($id);
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/user_detail', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_user()
    {
        $this->template->load('template', 'admin/user_form');
    }
    public function tambah_user_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_user();
        } else {
            $data = array(
                'username' => $this->input->post('username', true),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'alamat_email' => $this->input->post('alamat_email', true),
                'level' => $this->input->post('level', true),
            );
            $this->user_model->insert_data($data, 'user');
            $this->session->set_flashdata('pesan', 'Data user berhasil ditambah');
            redirect('admin/user');
        }
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->user_model->hapus_data($where, 'user');
        $this->session->set_flashdata('pesan', 'Data user berhasil dihapus');
        redirect('admin/user');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'username wajib diisi']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password wajib diisi']);
        $this->form_validation->set_rules('alamat_email', 'alamat_email', 'required', ['required' => 'Password wajib diisi']);
        $this->form_validation->set_rules('level', 'level', 'required', ['required' => 'level wajib diisi']);
    }

    public function update($id)
    {
        $where = array('id' => $id);

        $data['user'] = $this->db->query("select * from user where id='$id'")->result();
        $data['detail'] = $this->user_model->ambil_data($id);
        $this->template->load('template', 'admin/user_update', $data);
    }

    public function update_aksi()
    {


        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $alamat_email = $this->input->post('alamat_email');
        $level = $this->input->post('level');
        $status = $this->input->post('status');
        $data = array(
            'id'        => $id,
            'username'      => $username,
            'password'  => $password,
            'alamat_email'    => $alamat_email,
            'level'   => $level,
            'status'   => $status
        );
        $where = array(
            'id' => $id
        );

        $this->user_model->update_data($where, $data, 'user');
        $this->session->set_flashdata('pesan', 'Data user berhasil diubah');
        redirect('admin/user');
    }
}
