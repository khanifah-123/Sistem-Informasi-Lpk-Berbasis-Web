<?php

class Modul extends CI_Controller
{
    public function index()
    {
        $data['modul'] = $this->informasi_model->tampil_modul_pengajar();
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/modul', $data);
        $this->load->view('template_user/footer');
    }

    public function update($id)
    {
        $where = array('id_modul' => $id);
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $data['modul'] = $this->informasi_model->edit_data($where, 'modul')->result();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/modul_update', $data);
        $this->load->view('template_user/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_modul');
        $materi = $this->input->post('materi');
        $keterangan = $this->input->post('keterangan');
        $modul = $_FILES['userfile']['name'];
        if ($_FILES['modul']['modul'] != "") {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] =     'doc|docs|pdf';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('modul')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $upload_data = $this->upload->data();
                $modul = $upload_data['file_name'];
            }
        } else {
            $modul = $this->input->post('old');
        }

        $data = array(
            'materi' => $materi,
            'keterangan' => $keterangan,
            'modul' => $modul,
        );
        $where = array(
            'id_modul' => $id
        );
        $this->informasi_model->update_data($where, $data, 'modul');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Alert!</h4>
      Anda Berhasil Mengubah data modul
      </div>');
        redirect('pengajar/modul');
    }
    public function tambah_modul()
    {

        $data['ruangan'] = $this->pengajar_model->ambil_kd();
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/modul_form', $data);
        $this->load->view('template_user/footer');
    }
    public function tambah_modul_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == true) {
            $this->tambah_modul();
        } else {

            $id_modul = $this->input->post('id_modul');
            $kd_ruangan = $this->input->post('kd_ruangan');
            $materi = $this->input->post('materi');
            $modul = $_FILES['modul'];
            $keterangan = $this->input->post('keterangan');
            if ($modul = '') {
            } else {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'doc|docs|pdf';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('modul')) {
                    echo "Gagal Upload";
                    die();
                } else {
                    $modul = $this->upload->data('file_name');
                }
            }
            $data = array(
                'id_modul' => $id_modul,
                'kd_ruangan' => $kd_ruangan,
                'materi' => $materi,
                'modul' => $modul,
                'keterangan' => $keterangan,
            );
            $this->informasi_model->insert_data($data, 'modul');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
            role="alert"> Data Informasi berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" 
            aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('pengajar/modul');
        }
    }


    public function delete($id)
    {
        $where = array('id_modul' => $id);
        $this->informasi_model->hapus_data($where, 'modul');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
        role="alert"> Data informasi Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" 
        aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/modul');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('materi', 'materi', 'required', ['required' => 'icon wajib diisi']);
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required', ['required' => 'judul informasi wajib diisi']);
        $this->form_validation->set_rules('modul', 'modul', 'required', ['required' => 'isi informasi wajib diisi']);
    }
}
