<?php

class Ruangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ruangan_model');
    }

    public function index()
    {

        $this->load->model('ruangan_model');
        $data['ruangan'] = $this->ruangan_model->getr();
        $this->template->load('template', 'admin/ruangan', $data);
    }

    public function update($ruangan)
    {
        $where = array('kd_ruangan' => $ruangan);
        $data['ruangan'] = $this->ruangan_model->edit_data($where, 'ruangan')->result();
        $this->template->load('template', 'admin/ruangan_update', $data);
    }

    public function update_aksi()
    {
        $kd_ruangan = $this->input->post('kd_ruangan');
        $nama_ruangan = $this->input->post('nama_ruangan');


        $data = array(
            'kd_ruangan' => $kd_ruangan,
            'nama_ruangan' => $nama_ruangan,

        );
        $where = array(
            'kd_ruangan' => $kd_ruangan
        );
        $this->ruangan_model->update_data($where, $data, 'ruangan');
        $this->session->set_flashdata('pesan', 'Data Ruangan Berhasil diupdate!');
        redirect('admin/ruangan');
    }
    public function tambah_ruangan()
    {
        $data['kd_ruangan'] = $this->ruangan_model->kode();

        $this->template->load('template', 'admin/ruangan_form', $data);
    }
    public function tambah_ruangan_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_ruangan();
        } else {
            $data = array(
                'kd_ruangan' => $this->input->post('kd_ruangan', true),
                'nama_ruangan' => ($this->input->post('nama_ruangan', true)),

            );
            $this->ruangan_model->insert_data($data, 'ruangan');
            $this->session->set_flashdata('pesan', 'Data Ruangan Berhasil Ditambahkan!');
            redirect('admin/ruangan');
        }
    }



    public function delete($kd_ruangan)
    {
        $where = array('kd_ruangan' => $kd_ruangan);
        $this->ruangan_model->hapus_data($where, 'ruangan');
        $this->session->set_flashdata('pesan', ' Data Ruangan Berhasil Dihapus!');
        redirect('admin/ruangan');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_ruangan', 'nama_ruangan', 'required', ['required' => 'icon wajib diisi']);
    }
}
