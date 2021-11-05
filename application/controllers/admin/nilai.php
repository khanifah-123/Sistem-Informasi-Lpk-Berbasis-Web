<?php

class Nilai extends CI_Controller
{
    public function index()
    {

        $data['join_3'] = $this->nilai_model->join();
        $this->template->load('template', 'admin/nilai', $data);
    }
    public function delete($id)
    {
        $where = array('id_nilai' => $id);
        $this->informasi_model->hapus_data($where, 'nilai');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
        role="alert"> Data Nilai Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" 
        aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/nilai');
    }
}
