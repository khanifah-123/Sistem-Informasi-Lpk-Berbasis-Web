<?php

class Modul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('informasi_model');
    }
    public function index()
    {
        $data['modul'] = $this->informasi_model->tampil_semua('modul')->result();
        $this->template->load('template', 'admin/modul', $data);
    }

    public function update($id)
    {
        $where = array('id_modul' => $id);
        $data['id_modul'] = $this->informasi_model->edit_data($where, 'modul')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/informasi_update', $data);
        $this->load->view('template_admin/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_modul');
        $materi = $this->input->post('materi');
        $keterangan = $this->input->post('keterangan');
        $modul = $this->input->post('modul');
        $data = array(
            'materi' => $materi,
            'keterangan' => $keterangan,
            'modul' => $modul,
        );
        $where = array(
            'id_modul' => $id
        );
        $this->informasi_model->update_data($where, $data, 'modul');
        $this->session->set_flashdata('pesan', '
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h4 class="box-title">Pesan</h4>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div> </div>
                <div class="box-body">
                Data Pengajar Berhasil diubah
                </div> 
        </div>');
        redirect('admin/informasi');
    }
    public function tambah_modul()
    {
        $data['modul'] = $this->informasi_model->tampil_data('modul')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/modul_form', $data);
        $this->load->view('template_admin/footer');
    }
    public function tambah_modul_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_modul();
        } else {
            $data = array(
                'id_modul' => $this->input->post('id_modul', true),
                'materi' => ($this->input->post('materi', true)),
                'modul' => ($this->input->post('modul', true)),
                'keterangan' => $this->input->post('keterangan', true),
            );
            $this->informasi_model->insert_data($data, 'modul');
            $this->session->set_flashdata('pesan',  '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            Success alert preview. This alert is dismissable.
          </div>');
            redirect('admin/modul');
        }
    }

    public function delete($id)
    {
        $where = array('id_modul' => $id);
        $this->informasi_model->hapus_data($where, 'modul');
        $this->session->set_flashdata('pesan', '
        <div class="box box-danger box-solid">
            <div class="box-header with-border">
                <h4 class="box-title">Pesan</h4>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div> </div>
                <div class="box-body">
                Data Pengajar Berhasil Dihapus
                </div> 
        </div>');
        redirect('admin/modul');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('materi', 'materi', 'required', ['required' => 'icon wajib diisi']);
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required', ['required' => 'judul informasi wajib diisi']);
        $this->form_validation->set_rules('modul', 'modul', 'required', ['required' => 'isi informasi wajib diisi']);
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['modul'] = $this->informasi_model->get_keyword($keyword);
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/modul', $data);
        $this->load->view('template_admin/footer');
    }
}
