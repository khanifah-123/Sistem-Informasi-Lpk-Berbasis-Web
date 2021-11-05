<?php

class Nilai extends CI_Controller
{
    public function index()
    {
        $data['nilai'] = $this->nilai_model->nilai();
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/nilai', $data);
        $this->load->view('template_user/footer');
    }

    public function update($id)
    {
        $where = array('id_nilai' => $id);
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $data['nilai'] = $this->informasi_model->edit_data($where, 'nilai')->result();
        $data['ujian'] = $this->ujian_model->tampil_data('ujian')->result();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('admin/informasi_update', $data);
        $this->load->view('template_user/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_modul');
        $materi = $this->input->post('materi');
        $keterangan = $this->input->post('keterangan');
        $modul = $this->input->post('modul');
        $id_ujian = $this->input->post('id_ujian');
        $data = array(
            'materi' => $materi,
            'keterangan' => $keterangan,
            'modul' => $modul,
            'id_ujian' => $id_ujian
        );
        $where = array(
            'id_modul' => $id
        );
        $this->informasi_model->update_data($where, $data, 'modul');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
            role="alert"> Data informasi Berhasil diupdate!<button type="button" class="close" data-dismiss="alert" 
            aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/informasi');
    }
    public function tambah_nilai()
    {
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $data['nilai'] = $this->informasi_model->tampil_data();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/nilai_siswa', $data);
        $this->load->view('template_user/footer');
    }
    public function tambah_nilai_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_nilai();
        } else {
            $data = array(
                'id_siswa' => $this->input->post('id_siswa', true),
                'materi' => ($this->input->post('materi', true)),
                'modul' => ($this->input->post('modul', true)),
                'keterangan' => $this->input->post('keterangan', true),
            );
            $this->informasi_model->insert_data($data, 'modul');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
            role="alert"> Data Nilai berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" 
            aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/modul');
        }
    }

    public function delete($id)
    {
        $where = array('id_nilai' => $id);
        $this->informasi_model->hapus_data($where, 'nilai');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
        role="alert"> Data informasi Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" 
        aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('pengajar/nilai');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('materi', 'materi', 'required', ['required' => 'icon wajib diisi']);
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required', ['required' => 'judul informasi wajib diisi']);
        $this->form_validation->set_rules('modul', 'modul', 'required', ['required' => 'isi informasi wajib diisi']);
    }
}
