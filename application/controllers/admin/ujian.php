  <?php

    class Ujian extends CI_Controller
    {
        public function index()
        {
            $data['ujian'] = $this->ujian_model->get();
            $this->template->load('template', 'admin/ujian', $data);
        }
        public function tambah_ujian()
        {
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/ujian_form');
            $this->load->view('template_admin/footer');
        }

        public function delete($id_ujian)
        {
            $where = array('id_ujian' => $id_ujian);
            $this->ruangan_model->hapus_data($where, 'ujian');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
            role="alert"> Data informasi Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" 
            aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/ujian');
        }
        public function tambah_ujian_aksi()
        {
            $this->_rules();
            if ($this->form_validation->run() == true) {
                $this->tambah_ujian();
            } else {
                $data = array(
                    'nama_ujian' => $this->input->post('nama_ujian', true),
                    'kd_ruangan' => ($this->input->post('kd_ruangan', true)),
                    'tanggal' => ($this->input->post('tanggal', true)),
                );
                $this->ujian_model->insert_data($data, 'ujian');
                $this->session->set_flashdata('pesan', ' <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Success alert preview. This alert is dismissable.
              </div>');
                redirect('admin/ujian');
            }
        }


        public function update($ujian)
        {
            $where = array('id_ujian' => $ujian);
            $data['ujian'] = $this->ujian_model->edit_data($where, 'ujian')->result();
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/ujian_update', $data);
            $this->load->view('template_admin/footer');
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
            redirect('admin/ujian');
        }

        public function _rules()
        {
            $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Username wajib diisi']);
            $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password wajib diisi']);
            $this->form_validation->set_rules('email', 'email', 'required', ['required' => 'Email wajib diisi']);
            $this->form_validation->set_rules('level', 'level', 'required', ['required' => 'level wajib diisi']);
            $this->form_validation->set_rules('blokir', 'blokir', 'required', ['required' => 'Blokir wajib diisi']);
        }
    }
