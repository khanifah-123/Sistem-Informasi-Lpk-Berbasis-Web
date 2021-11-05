<?php

class Tentang_lpk extends CI_Controller
{
    public function index()
    {
        $data['tentang_lpk'] = $this->tentang_model->tampil_data('tentang_lpk')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tentang_lpk', $data);
        $this->load->view('template_admin/footer');
    }

    public function update($id)
    {
        $where = array('id' => $id);
        $data['tentang_lpk'] = $this->tentang_model->edit_data($where, 'tentang_lpk')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tentang_update', $data);
        $this->load->view('template_admin/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id');
        $sejarah = $this->input->post('sejarah');
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');
        $data = array(
            'sejarah' => $sejarah,
            'visi' => $visi,
            'misi' => $misi,
        );
        $where = array(
            'id' => $id
        );
        $this->tentang_model->update_data($where, $data, 'tentang_lpk');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
            role="alert"> Data tentang lpk Berhasil diupdate!<button type="button" class="close" data-dismiss="alert" 
            aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/tentang_lpk');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('Sejarah', 'Sejarah', 'required', ['required' => 'Sejarah wajib diisi']);
        $this->form_validation->set_rules('visi', 'visi', 'required', ['required' => 'visi wajib diisi']);
        $this->form_validation->set_rules('misi', 'misi', 'required', ['required' => 'misi wajib diisi']);
    }
}
