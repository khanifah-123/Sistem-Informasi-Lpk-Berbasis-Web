<?php

class Pengajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ruangan_model', 'siswa_model', 'datatables_model');
    }
    public function index()
    {
        $this->load->model('pengajar_model');
        $data['pengajar'] = $this->pengajar_model->get()->result();
        $this->template->load('template', 'admin/pengajar', $data);
    }

    public function delete($id)
    {
        $where = array('id_pengajar' => $id);
        $this->pengajar_model->hapus_data($where, 'pengajar');
        $this->session->set_flashdata('pesan', 'Data pengajar berhasil dihapus');
        redirect('admin/pengajar');
    }
    public function tambah_ruangan($id_pengajar)
    {
        $data['id_pengajar'] = $this->pengajar_model->kode();
        $data['pengajar'] = $this->pengajar_model->ambil_id_pengajar($id_pengajar);
        $data['ruangan'] = $this->informasi_model->tampil_semua('ruangan')->result();
        $this->template->load('template', 'admin/ruangan_pengajar', $data);
    }
    public function update_ruang($id_pengajar)
    {
        $data['id_pengajar'] = $this->pengajar_model->kode();
        $data['pengajar'] = $this->pengajar_model->ambil_id_pengajar($id_pengajar);
        $data['ruangan'] = $this->informasi_model->tampil_semua('ruangan')->result();
        $this->template->load('template', 'admin/ruangan_pengajar_update', $data);
    }
    public function tambah_ruangan_aksi()
    {
        $kd_ruangan = $this->input->post('kd_ruangan');
        $id_pengajar = $this->input->post('id_pengajar');
        $data = array(
            'kd_ruangan' => $kd_ruangan,
        );
        $where = array(
            'id_pengajar' => $id_pengajar
        );
        $this->ruangan_model->update_data($where, $data, 'pengajar');
        $this->session->set_flashdata('pesan', 'Data Ruangan berhasil ditambahkan!');
        redirect('admin/pengajar/kelola');
    }
    public function detail($id)
    {
        $data['ruang'] = $this->pengajar_model->ambil_admin();
        $data['detail'] = $this->pengajar_model->tampil($id);
        $this->template->load('template', 'admin/pengajar_detail', $data);
    }
    public function tambah_pengajar()
    {
        $data['id_pengajar'] = $this->pengajar_model->kode();
        $this->template->load('template', 'admin/pengajar_form', $data);
    }
    public function kelola()
    {
        $data['pengajar'] = $this->pengajar_model->tampil_data('pengajar')->result();

        $this->template->load('template', 'admin/kelola_pengajar', $data);
    }

    public function tambah_pengajar_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_pengajar();
        } else {
            $id_pengajar = $this->input->post('id_pengajar');
            $id = $this->input->post('id');
            $nama_pengajar = $this->input->post('nama_pengajar');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $no_hp = $this->input->post('no_hp');
            $alamat_email = $this->input->post('alamat_email');
            $alamat_pengajar = $this->input->post('alamat_pengajar');

            $foto = $_FILES['foto'];
            if ($foto = '') {
            } else {
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|jpeg';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "Gagal Upload";
                    die();
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            $dataser = array(
                'username' => $this->input->post('username', true),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'alamat_email' => $this->input->post('alamat_email', true),
                'level' => $this->input->post('level', true),
                'status' => $this->input->post('status', true),

            );
            $id = $this->siswa_model->create('user', $dataser);

            $data = array(
                'id_pengajar'      => $id_pengajar,
                'id'    => $id,
                'username' => $username,
                'password' => $password,
                'nama_pengajar'      => $nama_pengajar,
                'alamat_email'    => $alamat_email,
                'tanggal_lahir'      => $tanggal_lahir,
                'no_hp'    => $no_hp,
                'alamat_pengajar'      => $alamat_pengajar,
                'foto'    => $foto

            );
            $this->pengajar_model->insert_data($data, 'pengajar');
            $this->session->set_flashdata('pesan', 'Data pengajar berhasil ditambah');
            redirect('admin/pengajar');
        }
    }
    public function update($id)
    {
        $where = array('id_pengajar' => $id);

        $data['pengajar'] = $this->db->query("select * from pengajar where id_pengajar='$id'")->result();


        $data['detail'] = $this->pengajar_model->ambil_id_pengajar($id);
        $this->template->load('template', 'admin/pengajar_update', $data);
    }

    public function update_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == true) {
            $this->tambah_pengajar();
        } else {
            $id_pengajar = $this->input->post('id_pengajar');
            $nama_pengajar = $this->input->post('nama_pengajar');
            $alamat_pengajar = $this->input->post('alamat_pengajar');
            $alamat_email = $this->input->post('alamat_email');
            $foto = $_FILES['userfile']['name'];
            if ($_FILES['foto']['foto'] != "") {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] =     'jpg|png|jpeg';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $upload_data = $this->upload->data();
                    $foto = $upload_data['file_name'];
                }
            } else {
                $foto = $this->input->post('old');
            }
        }
        $data = array(
            'id_pengajar'        => $id_pengajar,
            'nama_pengajar'      => $nama_pengajar,
            'alamat_pengajar'  => $alamat_pengajar,
            'alamat_email'    => $alamat_email,
            'foto'  => $foto,

        );
        $where = array(
            'id_pengajar' => $id_pengajar
        );

        $this->pengajar_model->update_data($where, $data, 'pengajar');
        $this->session->set_flashdata('pesan', 'Data pengajar berhasil diubah');
        redirect('admin/pengajar');
    }


    public function _rules()
    {
        $this->form_validation->set_rules('nama_pengajar', 'nama_pengajar', 'required', ['required' => 'Nama wajib diisi']);
        $this->form_validation->set_rules('alamat_email', 'alamat_email', 'required', ['required' => 'Email wajib diisi']);
        $this->form_validation->set_rules('alamat_pengajar', 'alamat_pengajar', 'required', ['required' => 'Alamat wajib diisi']);
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Alamat wajib diisi']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Email wajib diisi']);
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required', ['required' => 'Alamat wajib diisi']);
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required', ['required' => 'Email wajib diisi']);
    }
    function jaga2()
    {
        $this->load->library('datatables');
        $this->datatables->add_column('no', '$1');
        $this->datatables->select('id_siswa,nama_siswa,jenis_kelamin,alamat_lengkap');
        $this->datatables->add_column('action', anchor('admin/siswa/detail/$1', '<i class="fa fa-eye"></i>', array('class' => 'btn btn-primary btn-xs')) . " " .
            anchor('admin/siswa/update/id_siswa', '<i class="fa fa-edit"></i>', array('class' => 'btn btn-primary btn-xs')) . " " .
            anchor('admin/siswa/delete/$1', '<i class="fa fa-trash"></i>', array('class' => 'btn btn-danger btn-xs')), 'id_siswa');
        $this->datatables->from('siswa');
        return print_r($this->datatables->generate());
    }
    public function jaga()
    {
        $this->load->library('datatables');
        $this->datatables->add_column('no', '$1', 'id_pengajar');
        $this->datatables->select('id_pengajar,nama_pengajar,alamat_pengajar,alamat_email');
        $this->datatables->add_column('action', anchor('admin/pengajar/detail/$1', '<i class="fa fa-eye"></i>', array('class' => 'btn btn-primary btn-xs')) . " " .
            anchor('admin/pengajar/update/$1', '<i class="fa fa-edit"></i>', array('class' => 'btn btn-primary btn-xs')) . " " .
            anchor('admin/pengajar/delete/$1', '<i class="fa fa-trash"></i>', array('class' => 'btn btn-danger btn-xs')), 'id_pengajar');
        $this->datatables->from('pengajar as p');

        return print_r($this->datatables->generate());
    }
}
