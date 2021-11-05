<?php
class Bayar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('bayar_model');
    }
    public function index()

    {
        $data['join_siswa_bayar'] = $this->bayar_model->total()->result();
        $data['harga'] = $this->bayar_model->tampil_data('bayar')->result();
        $this->template->load('template', 'admin/bayaran', $data);
    }
    public function print($id)
    {
        $where = array('id_siswa' => $id);

        $data['bayar'] = $this->db->query("SELECT sum(bayaran.nominal) as total, bayaran.*,siswa.* from bayaran inner JOIN siswa on siswa.id_siswa=bayaran.id_siswa and bayaran.id_siswa='$id' group by bayaran.id_siswa")->result();

        $this->load->view('print_bayaran', $data);
    }
    public function delete($id)
    {

        $where = array('id_bayar' => $id);
        $this->bayar_model->hapus_data($where, 'bayaran');
        $this->session->set_flashdata('pesan', 'Data bayar berhasil dihapus');
        redirect('admin/bayar');
    }
    public function tambah_nominal()
    {
        $data['join_siswa_bayar'] = $this->bayar_model->total()->result();
        $data['harga'] = $this->bayar_model->tampil_data('bayar')->result();
        $id = $this->input->post('id_harga');
        $harga = $this->input->post('harga', true);
        $dat = array(
            'harga' => $harga
        );
        $where = array(
            'id_harga' => $id
        );
        $this->informasi_model->update_data($where, $dat, 'bayar');
        $this->template->load('template', 'admin/bayaran', $data);
    }

    public function tambah_bayar($id)
    {
        $where = array('id_siswa' => $id);

        $data['bayaran'] = $this->db->query("select id_siswa from siswa where id_siswa='$id'")->result();

        $this->template->load('template', 'admin/bayar_form', $data);
    }
    public function tambah_b()
    {
        $this->template->load('template', 'admin/tambah_bayar');
    }
    public function tambah_bayar_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_b();
        } else {
            $data = array(
                'id_bayar' => $this->input->post('id_bayar'),
                'id_siswa' => $this->input->post('id_siswa', true),
                'tanggal_byar' => $this->input->post('tanggal_byar', true),
                'nominal' => $this->input->post('nominal', true),
                'penerima' => $this->input->post('penerima', true),
            );
            if ($this->input->post('nominal') < 500000) {
                $this->session->set_flashdata('peringatan', 'Harap masukkan nominal minimal Rp. 500.000 ');
                redirect('admin/bayar/tambah_b');
            }
            $this->bayar_model->insert_data($data, 'bayaran');
            $this->session->set_flashdata('pesan', 'Data bayar berhasil ditambah');
            redirect('admin/bayar');
        }
    }
    public function _rules()
    {

        $this->form_validation->set_rules('tanggal_byar', 'tanggal_byar', 'required', ['required' => 'Password wajib diisi']);
        $this->form_validation->set_rules('nominal', 'nominal', 'required', ['required' => 'Email wajib diisi']);
        $this->form_validation->set_rules('penerima', 'penerima', 'required', ['required' => 'level wajib diisi']);
        $this->form_validation->set_rules('id_siswa', 'id_siswa', 'required', ['required' => 'Password wajib diisi']);
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('bayar');
        $this->db->like('nama_siswa', $keyword);
        $this->db->or_like('id_siswa', $keyword);
        $this->db->or_like('penerima', $keyword);
        return $this->db->get()->result();
    }
    public function detail($id)
    {
        $data['detail'] = $this->bayar_model->detail_pemb($id);
        $this->template->load('template', 'admin/bayar', $data);
    }
}
