<?php
class Landing_page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $data                = array();
        $data['js']          = 'landing_page.js';
        $data['css']         = 'landing_page.css';
    }

    public function index()
    {

        $this->load->view('template_admin/header');
        $this->load->view('landing_page');
        $this->load->view('template_admin/footer');
    }
    public function transferr()
    {
        $data['no_registrasi'] = $this->pendaftar_model->kode();
        $this->load->view('template_admin/header');
        $this->load->view('transfer', $data);
        $this->load->view('template_user/footer');
    }
    public function detail()
    {
        $data['detail'] = $this->user_model->tampil_userid('siswa');
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('siswa/detail_identitas', $data);
        $this->load->view('template_admin/footer');
    }
    public function tampil_data_siswa()
    {
        $data['tampil'] = $this->siswa_model->tampil_data_siswa();

        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar');
        $this->load->view('siswa/detail_identitas', $data);
        $this->load->view('template_user/footer');
    }
    public function modal()
    {
        $this->load->view('template_admin/header');
        $this->load->view('modal');
        $this->load->view('template_admin/footer');
    }
    public function kirim_pesan()
    {
        $this->_rules1();

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $pesan = $this->input->post('pesan');

            $data = array(
                'nama'      => $nama,
                'email'    => $email,
                'pesan'      => $pesan
            );
            $this->hubungi_model->insert_data($data, 'hubungi');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dissmissible fade show"
            role="alert"> Pesan Berhasil Dikirim!<button type="button" class="close" data-dismiss="alert" 
            aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('landing_page/index');
        }
    }
    public function _rules1()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'nama wajib diisi']);
        $this->form_validation->set_rules('email', 'email', 'required', ['required' => 'Email wajib diisi']);
        $this->form_validation->set_rules('pesan', 'pesan', 'required', ['required' => 'Pesan wajib diisi']);
    }


    public function tambah_pendaftar_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->transferr();
        } else {
            $cek = $this->db->query("SELECT * FROM pendaftar where no_ktp='" . $this->input->post('no_ktp') . "'")->num_rows();
            $no_registrasi = $this->input->post('no_registrasi');
            $id = $this->input->post('id');
            $id_berkas = $this->input->post('id_berkas');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama_siswa = $this->input->post('nama_siswa');
            $alamat_lengkap = $this->input->post('alamat_lengkap');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $agama = $this->input->post('agama');
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
            $bukti_pembayaran = $_FILES['bukti_pembayaran'];
            $fc_ijazah = $_FILES['fc_ijazah'];
            $pas_foto = $_FILES['pas_foto'];
            if ($fc_ktp = '') {
            } else {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|pdf';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('fc_ktp')) {
                    $this->session->set_flashdata('peringatan', ' Masukkan file KTP Anda dengan benar !');
                    redirect('landing_page/transferr');
                } else {
                    $fc_ktp = $this->upload->data('file_name');
                }
            }
            if ($fc_kk = '') {
            } else {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|pdf';

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
                $config['allowed_types'] = 'jpg|pdf';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('fc_ijazah')) {
                    $this->session->set_flashdata('peringatan', ' Masukkan file Ijazah Anda dengan benar !');
                    redirect('landing_page/transferr');
                    die();
                } else {
                    $fc_ijazah = $this->upload->data('file_name');
                }
            }
            if ($bukti_pembayaran = '') {
            } else {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|pdf';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('bukti_pembayaran')) {
                    $this->session->set_flashdata('peringatan', ' Masukkan file Bukti Pembayaran Anda dengan benar !');
                    redirect('landing_page/transferr');
                    die();
                } else {
                    $bukti_pembayaran = $this->upload->data('file_name');
                }
            }
            if ($pas_foto = '') {
            } else {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('pas_foto')) {
                    $this->session->set_flashdata('peringatan', ' Masukkan file Foto Anda dengan benar !');
                    redirect('landing_page/transferr');
                } else {
                    $pas_foto = $this->upload->data('file_name');
                }
            }
            if ($cek <= 0) {
                $dataus = array(
                    'fc_ktp'         => $fc_ktp,
                    'fc_kk'         => $fc_kk,
                    'fc_ijazah'        => $fc_ijazah,
                    'bukti_pembayaran'        => $bukti_pembayaran,

                );
                $id_berkas = $this->siswa_model->create('berkas', $dataus);
                $dataser = array(
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'alamat_email' => $this->input->post('alamat_email'),
                    'level' => $this->input->post('level'),
                    'status' => $this->input->post('status'),

                );
                $id = $this->siswa_model->create('user', $dataser);

                $data = array(
                    'no_registrasi'     => $no_registrasi,
                    'id_berkas'     => $id_berkas,
                    'id'     => $id,
                    'nama_siswa'      => $nama_siswa,
                    'username'      => $username,
                    'password'      => $password,
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
                    'pas_foto'         => $pas_foto

                );
                $this->pendaftar_model->insert_data($data, 'pendaftar');
                $this->session->set_flashdata('pesan', 'Selamat, Anda berhasil melakukkan pendaftaran!');
                redirect('landing_page/transferr');
            } else {
                $this->session->set_flashdata('peringatan', ' Anda sudah pernah mendaftar !');
                redirect('landing_page/transferr');
            }
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


    public function tambah_bukti_aksi()
    {
        $id = $this->input->post('id_berkas');
        $bukti_pembayaran = $_FILES['bukti_pembayaran'];
        if ($bukti_pembayaran = '') {
        } else {
            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'jpg|png|gif|tiff';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti_pembayaran')) {
                echo "Gagal Upload";
                die();
            } else {
                $bukti_pembayaran = $this->upload->data('file_name');
            }
        }

        $data = array(
            'bukti_pembayaran' => $bukti_pembayaran,

        );
        $where = array(
            'id_berkas' => $id
        );
        $this->informasi_model->update_data($where, $data, 'berkas');
        $this->session->set_flashdata('pesan', 'Data Anda berhasil diinput!');
        redirect('admin/informasi');
    }
    public function log()
    {
        $this->form_validation->set_rules('nis', 'nis', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {

            $this->load->view('login');
        } else {
            $this->loginin();
        }
    }

    private function loginin()
    {
        $nis = $this->input->post('nis');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['nis' => $nis])->row_array();

        if ($user) {

            if (password_verify($password, $user['password'])) {

                $data = [

                    'nis' =>  $user['nis'],
                    'level'     => $user['level']
                ];
                $this->session->set_userdata($data);
                if ($user['level'] == 'admin') {
                    redirect('admin/dashboard');
                } else {
                    redirect('user/dashboard');
                }
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('Login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">nis belum terdaftar!</div>');
            redirect('Login');
        }
    }


    public function logout()
    {

        $this->session->unset_userdata('nis');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('Login');
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/login_header');
            $this->load->view('home/registration');
            $this->load->view('templates/login_footer');
        } else {
            echo 'Data Berhasil Ditambahkan!';
        }
    }

    public function cek_login()
    {
        $data = array(
            'nis' => $this->input->post('nis', TRUE),
            'password' => md5($this->input->post('password', TRUE))
        );
        $this->load->model('login_model'); // load model_user
        $hasil = $this->login_model->cek_user($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['id'] = $sess->id;
                $sess_data['nis'] = $sess->nis;
                $sess_data['level'] = $sess->level;

                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level') == 'admin') {
                redirect('admin/dashboard');
            } elseif ($this->session->userdata('level') == 'user') {
                redirect('admin/user');
            }
        } else {
            echo "<script>alert('Gagal login: Cek nis, password!');history.go(-1);</script>";
        }
    }
}
