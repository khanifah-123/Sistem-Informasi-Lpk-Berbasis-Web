<?php
class Daftar extends CI_Controller
{

    public function tambah_siswa()
    {
        $data['identitas'] = $this->identitas_model->tampil_data('identitas')->result();
        $data['tentang_lpk'] = $this->tentang_model->tampil_data('tentang_lpk')->result();
        $data['informasi'] = $this->informasi_model->tampil_data('informasi')->result();
        $data['hubungi'] = $this->hubungi_model->tampil_data('hubungi')->result();
        $this->load->view('template_admin/header');
        $this->load->view('landing_page', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_siswa_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->tambah_siswa();
        } else {
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
            $pas_foto = $_FILES['pas_foto'];
            if ($pas_foto = '') {
            } else {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('pas_foto')) {
                    echo "Gagal Upload";
                    die();
                } else {
                    $pas_foto = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama_siswa'      => $nama_siswa,
                'alamat_lengkap'  => $alamat_lengkap,
                'tempat_lahir'    => $tempat_lahir,
                'tanggal_lahir'   => $tanggal_lahir,
                'jenis_kelamin'   => $jenis_kelamin,
                'agama'           => $agama,
                'status'          => $status,
                'no_ktp'          => $no_ktp,
                'no_hp'           => $no_hp,
                'alamat_email'    => $alamat_email,
                'nama_ayah'      => $nama_ayah,
                'nama_ibu'       => $nama_ibu,
                'jumlah_saudara' => $jumlah_saudara,
                'pilihan_pekerjaan' => $pilihan_pekerjaan,
                'tinggi_badan'   => $tinggi_badan,
                'berat_badan'    => $berat_badan,
                'pas_foto'         => $pas_foto
            );
            $this->siswa_model->insert_data($data, 'siswa');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
            role="alert"> Data Siswa Berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" 
            aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('landing_page/index');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'required', ['required' => 'Nama Wajib diisi']);
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
}
