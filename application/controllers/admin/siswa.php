<?php
class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['ruangan_model', 'siswa_model', 'informasi_model']);
    }
    public function index()
    {
        $data['siswa'] = $this->siswa_model->tampil_data('siswa')->result();
        $this->template->load('template', 'admin/siswa', $data);
    }
    public function kelola()
    {
        $data['siswa'] = $this->siswa_model->tampil_data('siswa')->result();
        $data['ruangan'] = $this->siswa_model->tampil_data_ruangan();
        $this->template->load('template', 'admin/kelola_siswa', $data);
    }
    public function tambah_ruangan($id_siswa)
    {
        $data['id_siswa'] = $this->siswa_model->kode();
        $data['siswa'] = $this->siswa_model->ambil_id_siswa($id_siswa);
        $data['ruangan'] = $this->informasi_model->tampil_semua('ruangan')->result();
        $this->template->load('template', 'admin/ruangan_siswa', $data);
    }
    public function tambah_ruangansiswa_aksi()
    {
        $nama_siswa = $this->input->post('nama_siswa');
        $id_siswa = $this->input->post('id_siswa');
        $kd_ruangan = $this->input->post('kd_ruangan');

        $data = array(
            'kd_ruangan' => $kd_ruangan,
            'nama_siswa' => $nama_siswa,
            'id_siswa' => $id_siswa,
        );
        $where = array(
            'id_siswa' => $id_siswa
        );
        $this->ruangan_model->update_data($where, $data, 'siswa');
        $this->session->set_flashdata('pesan', 'Data ruangan berhasil ditambahkan');
        redirect('admin/siswa/kelola');
    }
    public function detail($id_siswa)
    {
        $data['detail'] = $this->siswa_model->ambil_id_siswa($id_siswa);
        $this->template->load('template', 'admin/siswa_detail', $data);
    }
    public function tambah_siswa()
    {

        $data['id_siswa'] = $this->siswa_model->kode();
        $data['no_registrasi'] = $this->pendaftar_model->kode();
        $this->template->load('template', 'admin/siswa_form', $data);
    }

    public function update($id)
    {
        $where = array('id_siswa' => $id);

        $data['siswa'] = $this->db->query("select * from siswa where id_siswa='$id'")->result();
        $data['detail'] = $this->siswa_model->ambil_id_siswa($id);
        $this->template->load('template', 'admin/siswa_update', $data);
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
            $pas_foto = $_FILES['userfile']['name'];
            if ($_FILES['pas_foto']['pas_foto'] != "") {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] =     'jpg|png|jpeg';
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

            $data = array(
                'id_siswa'      => $id_siswa,
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

                'pas_foto'         => $pas_foto,

            );
            $where = array(
                'id_siswa' => $id_siswa
            );

            $this->siswa_model->update_data($where, $data, 'siswa');
            $this->session->set_flashdata('pesan', 'Data siswa berhasil diubah');
            redirect('admin/siswa');
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
                $config['allowed_types'] = 'jpg|png|pdf|tiff';

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
                $config['allowed_types'] = 'jpg|png|pdf|tiff';

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
                $config['allowed_types'] = 'jpg|png|pdf|tiff';

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
            $this->session->set_flashdata('pesan', 'Data siswa berhasil ditambah');
            redirect('admin/siswa');
        }
    }

    public function delete($id)
    {
        $where = array('id_siswa' => $id);
        $this->siswa_model->hapus_data($where, 'siswa');
        $this->session->set_flashdata('pesan', 'Data siswa berhasil dihapus');
        redirect('admin/siswa');
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
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['siswa'] = $this->siswa_model->get_keyword($keyword);
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/siswa', $data);
        $this->load->view('template_admin/footer');
    }

    public function jaga()
    {
        $this->load->library('datatables');
        $this->datatables->add_column('no', '$1', 'id_siswa');
        $this->datatables->select('id_siswa,nama_siswa,jenis_kelamin,alamat_lengkap');
        $this->datatables->add_column(
            'action',
            anchor('admin/siswa/detail/$1', '<i class="fa fa-eye"></i>', array('class' => 'btn btn-primary btn-sm')) . " " .
                anchor('admin/siswa/update/$1', '<i class="fa fa-edit"></i>', array('class' => 'btn btn-primary btn-sm')) . " " .
                anchor('admin/siswa/delete/$1', '<i class="fa fa-trash"></i>', array('class' => 'btn btn-danger btn-sm ', 'id' => 'btn-hapus')),
            'id_siswa'
        );
        $this->datatables->from('siswa');
        return print_r($this->datatables->generate());
    }
    public function tampil_kelasA()
    {
        $data['siswa'] = $this->db->query("SELECT * FROM siswa WHERE kd_ruangan='K-001'")->result();

        $this->template->load('template', 'admin/kelas1', $data);
    }
    public function tampil_kelasB()
    {
        $data['siswa'] = $this->db->query("SELECT * FROM siswa WHERE kd_ruangan='K-002'")->result();

        $this->template->load('template', 'admin/kelas1', $data);
    }
}
