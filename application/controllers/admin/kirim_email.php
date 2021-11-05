<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kirim_email extends CI_Controller
{

    public function index()
    {

        $this->load->helper('form'); //memasukkan library helper form
        $this->template->load('template', 'admin/kirim_email/'); //memasukkan tampilan view tampilan_pengiriman.php
    }

    public function terima($id)
    {
        $where = array('no_registrasi' => $id);

        $data['email'] = $this->db->query("select alamat_email, username, password from pendaftar where no_registrasi='$id'")->result();
        $this->template->load('template', 'admin/kirim_email', $data);
    }
    public function tolak($id)
    {
        $where = array('no_registrasi' => $id);

        $data['email'] = $this->db->query("select alamat_email, username, password from pendaftar where no_registrasi='$id'")->result();
        $this->template->load('template', 'admin/kirim_email_tolak', $data);
    }

    public function prosespengiriman()
    {
        $this->load->library('email'); //panggil library email codeigniter
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'urisaranglpk@gmail.com', //alamat email gmail
            'smtp_pass' => 'kepudang2021', //password email 
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from($config['smtp_user']);
        $this->email->to($this->input->post('to'));
        $this->email->subject($this->input->post('subject'));
        $this->email->message($this->input->post('isi'));

        //proses kirim email
        if ($this->email->send()) {
            $this->session->set_flashdata('pesan', 'Email Berhasil Terkirim!');
            redirect('admin/pendaftar');
        } else {
            $this->session->set_flashdata('peringatan', 'Email Gagal Terkirim!');
            redirect('admin/pendaftar');
        }
    }
}
