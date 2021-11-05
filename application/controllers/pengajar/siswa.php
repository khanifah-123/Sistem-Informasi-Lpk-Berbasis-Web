<?php
class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['ruangan_model', 'siswa_model', 'ujian_model']);
    }
    public function index()
    {
        $data['siswa'] = $this->siswa_model->tampil_siswa_pengajar();

        $data['foto'] = $this->pengajar_model->tampil_foto();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/siswa', $data);
        $this->load->view('template_user/footer');
    }
    public function kelola()
    {
        $aktif = array();
        $data['siswa'] = $this->siswa_model->tampil_siswa_pengajar();
        $data['nilai'] = $this->siswa_model->tampil_siswa_nilai();
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/kelola_siswa', $data);
        $this->load->view('template_user/footer');
    }
    public function tambah_nilai($id_siswa)
    {
        $data['nilai'] = $this->siswa_model->ambil_id_siswa($id_siswa);
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $data['ujian'] = $this->ujian_model->tampil_data('ujian')->result();
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/nilai_siswa', $data);
        $this->load->view('template_user/footer');
    }
    public function tambah_nilai_aksi()
    {
        $id_siswa = $this->input->post('id_siswa');
        $nilai = $this->input->post('nilai');
        $id_ujian = $this->input->post('id_ujian');

        $data = array(

            'id_siswa'      => $id_siswa,
            'nilai' => $nilai,
            'id_ujian' => $id_ujian,
        );
        $this->siswa_model->create('nilai', $data,);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
            role="alert"> Data informasi Berhasil diupdate!<button type="button" class="close" data-dismiss="alert" 
            aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('pengajar/nilai');
    }
    public function detail($id_siswa)
    {
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $data['detail'] = $this->siswa_model->ambil_id_siswa($id_siswa);
        $this->load->view('template_user/header');
        $this->load->view('template_pengajar/sidebar', $data);
        $this->load->view('pengajar/siswa_detail', $data);
        $this->load->view('template_user/footer');
    }

    public function tambah_siswa()
    {
        $data['no_registrasi'] = $this->pendaftar_model->kode();
        $data['id_siswa'] = $this->siswa_model->kode();
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('pengajar/siswa_form', $data);
        $this->load->view('template_user/footer');
    }

    public function update($id)
    {
        $where = array('id_siswa' => $id);
        $data['foto'] = $this->pengajar_model->tampil_foto();
        $data['siswa'] = $this->db->query("select * from siswa where id_siswa='$id'")->result();
        $data['detail'] = $this->siswa_model->ambil_id_siswa($id);
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('pengajar/siswa_update', $data);
        $this->load->view('template_user/footer');
    }

    public function update_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_siswa();
        } else {
            $id_siswa = $this->input->post('id_siswa');
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
            $fc_ktp = $_FILES['userfile']['name'];
            $fc_kk = $_FILES['userfile']['name'];
            $fc_ijazah = $_FILES['userfile']['name'];
            $pas_foto = $_FILES['userfile']['name'];

            if ($fc_ktp) {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('userfile')) {
                    $userfile = $this->upload->data('file_name');
                    $this->db->set('fc_ktp', $userfile);
                } else {
                    echo "Gagal Upload";
                }
            }
            if ($fc_kk) {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|pdf';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('userfile')) {
                    $userfile = $this->upload->data('file_name');
                    $this->db->set('fc_kk', $userfile);
                } else {
                    echo "Gagal Upload";
                }
            }
            if ($fc_ijazah) {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('userfile')) {
                    $userfile = $this->upload->data('file_name');
                    $this->db->set('fc_ijazah', $userfile);
                } else {
                    echo "Gagal Upload";
                }
            }
            if ($pas_foto) {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('userfile')) {
                    $userfile = $this->upload->data('file_name');
                    $this->db->set('pas_foto', $userfile);
                } else {
                    echo "Gagal Upload";
                }
            }
            $dataus = array(
                'fc_ktp'         => $fc_ktp,
                'fc_kk'         => $fc_kk,
                'fc_ijazah'        => $fc_ijazah,

            );
            $id_berkas = $this->siswa_model->create('berkas', $dataus);

            $data = array(
                'id_siswa'      => $id_siswa,
                'id_berkas'      => $id_berkas,
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
                'fc_ktp'         => $fc_ktp,
                'fc_kk'         => $fc_kk,
                'fc_ijazah'         => $fc_ijazah,
                'pas_foto'         => $pas_foto,

            );
            $where = array(
                'id_siswa' => $id_siswa
            );

            $this->siswa_model->update_data($where, $data, 'siswa');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
                    role="alert"> Data siswa Berhasil diupdate!<button type="button" class="close" data-dismiss="alert" 
                    aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('user/siswa');
        }
    }

    public function tambah_siswa_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->tambah_siswa();
        } else {

            $id_siswa = $this->input->post('id_siswa');
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
            $fc_ktp = $_FILES['fc_ktp'];
            $fc_kk = $_FILES['fc_kk'];
            $fc_ijazah = $_FILES['fc_ijazah'];
            $pas_foto = $_FILES['pas_foto'];
            if ($fc_ktp = '') {
            } else {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('fc_ktp')) {
                    echo "Gagal Upload";
                    die();
                } else {
                    $fc_ktp = $this->upload->data('file_name');
                }
            }
            if ($fc_kk = '') {
            } else {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('fc_kk')) {
                    echo "Gagal Upload";
                    die();
                } else {
                    $fc_kk = $this->upload->data('file_name');
                }
            }
            if ($fc_ijazah = '') {
            } else {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('fc_ijazah')) {
                    echo "Gagal Upload";
                    die();
                } else {
                    $fc_ijazah = $this->upload->data('file_name');
                }
            }
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
            $dataus = array(
                'fc_ktp'         => $fc_ktp,
                'fc_kk'         => $fc_kk,
                'fc_ijazah'        => $fc_ijazah,

            );
            $id_berkas = $this->siswa_model->create('berkas', $dataus);
            $data = array(

                'id_siswa'      => $id_siswa,
                'id_berkas'     => $id_berkas,
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
            $this->siswa_model->create('siswa', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
            role="alert"> Data Siswa Berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" 
            aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/siswa');
        }
    }

    public function delete($id_nilai)
    {
        $where = array('id_nilai' => $id_nilai);
        $this->ruangan_model->hapus_data($where, 'nilai');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
        role="alert"> Data informasi Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" 
        aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('pengajar/siswa/kelola');
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
