<?php
class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function index()
    {
        $data['siswa'] = $this->siswa_model->tampil_data1('siswa')->result();
        $data['foto'] = $this->siswa_model->tampil_foto();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('admin/siswa', $data);
        $this->load->view('template_admin/footer');
    }

    public function tampil()
    {
        $row = $this->user_model->ambil_data1($this->session->userdata['username']);
        $row = array(
            'id' => $row->id,
        );
        $data['foto'] = $this->siswa_model->tampil_foto();
        $data['siswa'] = $this->db->query("select * from siswa s where s.id=$row[id]")->result();
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('siswa/detail_identitas', $data);
        $this->load->view('template_user/footer');
    }
    public function tampil_data_siswa()
    {
        $id = $this->session->userdata['id'];
        $data['foto'] = $this->siswa_model->tampil_foto();
        $data = $this->db->query("select * from siswa s where s.id=$id");
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('siswa/detail_identitas', $data);
        $this->load->view('template_user/footer');
    }
}
