<?php
class pendaftar extends CI_Controller
{
    public function index()
    {

        $this->load->model('pendaftar_model');
        $data['pendaftar'] = $this->pendaftar_model->get()->result();
        $data['siswa'] = $this->pendaftar_model->tampil_data('siswa')->result();
        $data['user'] = $this->pendaftar_model->aksi()->result();
        $this->template->load('template', 'admin/pendaftar', $data);
    }

    public function detail($no_registrasi)
    {
        $where = array('no_registrasi' => $no_registrasi);
        $data['id_siswa'] = $this->siswa_model->kode();
        $data['pendaftar'] = $this->pendaftar_model->ambil_no_registrasi($no_registrasi);

        $this->template->load('template', 'admin/pendaftar_detail', $data);
    }

    public function detail_user($id)
    {
        $where = array('id' => $id);
        $status = ('1');
        $data = array(
            'status' => $status,
        );
        $where = array(
            'id' => $id
        );
        $this->informasi_model->update_data($where, $data, 'user');
        $this->session->set_flashdata('pesan', 'akun telah diaktifkan!');
        redirect('admin/pendaftar');
    }
    public function update_user()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $alamat_email = $this->input->post('alamat_email');
        $status = $this->input->post('status');
        $data = array(
            'username' => $username,
            'alamat_email' => $alamat_email,
            'status' => $status,
        );
        $where = array(
            'id' => $id
        );
        $this->informasi_model->update_data($where, $data, 'user');
        $this->session->set_flashdata('pesan', 'Data pendaftar Berhasil diupdate!');
        redirect('admin/pendaftar');
    }

    public function delete($id)
    {
        $where = array('no_registrasi' => $id);
        $this->pengajar_model->hapus_data($where, 'pendaftar');
        $this->session->set_flashdata('pesan', 'Data pendaftar Berhasil dihapus!');
        redirect('admin/pendaftar');
    }


    public function _rules()
    {
        $this->form_validation->set_rules('$nama_siswa', 'nama_siswa', 'required', ['required' => 'Nama Wajib diisi']);
        $this->form_validation->set_rules('alamat_lengkap', 'alamat_lengkap', 'required', ['required' => 'Alamat Wajib diisi']);
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required', ['required' => 'Tempat Lahir Wajib diisi']);
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required', ['required' => 'Tanggal Lahir Wajib diisi']);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', ['required' => 'Silahkan Pilih Jenis Kelamin']);
        $this->form_validation->set_rules('agama', 'agama', 'required', ['required' => 'agama Wajib diisi']);
        $this->form_validation->set_rules('status', 'status', 'required', ['required' => 'Silahkan pilih status']);
        $this->form_validation->set_rules('no_ktp', 'no_ktp', 'required', ['required' => 'Nama Wajib diisi']);
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required', ['required' => 'Nama Wajib diisi']);
        $this->form_validation->set_rules('alamat_email', 'alamat_email', 'required', ['required' => 'Nama Wajib diisi']);
        $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'required', ['required' => 'Nama Wajib diisi']);
        $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required', ['required' => 'Nama Wajib diisi']);
        $this->form_validation->set_rules('jumlah_saudara', 'jumlah_saudara', 'required', ['required' => 'Nama Wajib diisi']);
        $this->form_validation->set_rules('pilihan_pekerjaan', 'pilihan_pekerjaan', 'required', ['required' => 'Nama Wajib diisi']);
        $this->form_validation->set_rules('tinggi_badan', 'tinggi_badan', 'required', ['required' => 'Nama Wajib diisi']);
        $this->form_validation->set_rules('berat_badan', 'berat_badan', 'required', ['required' => 'Nama Wajib diisi']);
    }


    public function tambah_pendaftar_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == true) {
            $this->index();
        } else {
            $cek = $this->db->query("SELECT * FROM siswa where id='" . $this->input->post('id') . "'")->num_rows();

            $no_registrasi = $this->input->post('no_registrasi');
            $id_berkas = $this->input->post('id_berkas');
            $id_siswa = $this->input->post('id_siswa');
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama_siswa = $this->input->post('nama_siswa');
            $alamat_lengkap = $this->input->post('alamat_lengkap');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $agama = $this->input->post('agama');
            $status = $this->input->post('status');
            $no_ktp = $this->input->post('no_ktp');
            $no_hp = $this->input->post('no_hp');
            $alamat_email = $this->input->post('alamat_email');
            $nama_ayah = $this->input->post('nama_ayah');
            $nama_ibu = $this->input->post('nama_ibu');
            $jumlah_saudara = $this->input->post('jumlah_saudara');
            $pilihan_pekerjaan = $this->input->post('pilihan_pekerjaan');
            $tinggi_badan = $this->input->post('tinggi_badan');
            $berat_badan = $this->input->post('berat_badan');
            $pas_foto = $_FILES['userfile']['name'];
            if ($_FILES['pas_foto']['pas_foto'] != "") {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] =     'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('pas_foto')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $upload_data = $this->upload->data();
                    $pas_foto = $upload_data['file_name'];
                }
            } else {
                $pas_foto = $this->input->post('old');
            }
        }
        if ($cek <= 0) {
            $data = array(

                'id_berkas'        => $id_berkas,
                'id'               => $id,
                'id_siswa'          => $id_siswa,
                'nama_siswa'      => $nama_siswa,
                'alamat_lengkap'  => $alamat_lengkap,
                'tempat_lahir'    => $tempat_lahir,
                'tanggal_lahir'   => $tanggal_lahir,
                'jenis_kelamin'   => $jenis_kelamin,
                'agama'           => $agama,
                'no_ktp'          => $no_ktp,
                'no_hp'           => $no_hp,
                'alamat_email'    => $alamat_email,
                'nama_ayah'      => $nama_ayah,
                'nama_ibu'       => $nama_ibu,
                'jumlah_saudara' => $jumlah_saudara,
                'pilihan_pekerjaan' => $pilihan_pekerjaan,
                'tinggi_badan'   => $tinggi_badan,
                'berat_badan'    => $berat_badan,
                'pas_foto'        => $pas_foto
            );
            $this->siswa_model->create('siswa', $data);
            $this->session->set_flashdata('pesan', 'Data telah ditambahkan ke tabel siswa!');
            redirect('admin/pendaftar');
        } else {
            $this->session->set_flashdata('peringatan', 'Data sudah ada');
            redirect('admin/pendaftar');
        }
    }
}
