<?php

class Ujian extends CI_Controller
{
    public function index()
    {
        $data['ujian'] = $this->ujian_model->tampil_ujian_pengajar();
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/ujian', $data);
        $this->load->view('template_user/footer');
    }
    public function tambah_ujian()
    {
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $data['pengajar'] = $this->ujian_model->ambil_kd();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/ujian_form', $data);
        $this->load->view('template_user/footer');
    }
    public function tambah_ujian_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_ujian();
        } else {
            $data = array(
                'nama_ujian' => $this->input->post('nama_ujian', true),
                'kd_ruangan' => ($this->input->post('kd_ruangan', true)),
                'tanggal' => ($this->input->post('tanggal', true)),
            );
            $this->ujian_model->insert_data($data, 'ujian');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
            role="alert"> Data Ujian berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" 
            aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('pengajar/ujian');
        }
    }
    public function delete($id_ujian)
    {
        $where = array('id_ujian' => $id_ujian);
        $this->ujian_model->hapus_data($where, 'ujian');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
        role="alert"> Data Ujian Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" 
        aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('pengajar/ujian');
    }

    public function update($ujian)
    {
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $where = array('id_ujian' => $ujian);
        $data['ujian'] = $this->ujian_model->edit_data($where, 'ujian')->result();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/ujian_update', $data);
        $this->load->view('template_user/footer');
    }

    public function update_aksi()
    {

        $id_ujian = $this->input->post('id_ujian');
        $nama_ujian = $this->input->post('nama_ujian');
        $kd_ruangan = $this->input->post('kd_ruangan');
        $tanggal = $this->input->post('tanggal');

        $data = array(
            'id_ujian' => $id_ujian,
            'nama_ujian' => $nama_ujian,
            'kd_ruangan' => $kd_ruangan,
            'tanggal' => $tanggal,
        );
        $where = array(
            'id_ujian' => $id_ujian
        );
        $this->ujian_model->update_data($where, $data, 'ujian');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
        role="alert"> Data Identitas Berhasil diupdate!<button type="button" class="close" data-dismiss="alert" 
        aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('pengajar/ujian');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_ujian', 'nama_ujian', 'required', ['required' => 'Password wajib diisi']);
        $this->form_validation->set_rules('kd_ruangan', 'kd_ruangan', 'required', ['required' => 'Email wajib diisi']);
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required', ['required' => 'level wajib diisi']);
    }
}
