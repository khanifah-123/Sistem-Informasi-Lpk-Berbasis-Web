
<?php
class Pendaftar_model extends CI_MODEL
{


    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function get($id = null)
    {
        $this->db->from('pendaftar');
        if ($id != null) {
            $this->db->where('no_registrasi', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function ambil_data($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('user')->row();
    }

    public function ambil_data1($id)
    {
        $this->db->where('id_berkas', $id);
        return $this->db->get('pendaftar')->row();
    }
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
    public function tampil_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user')->row();
    }

    public function kode()
    {
        $this->db->select('right(pendaftar.no_registrasi,1) as no_registrasi', FALSE);
        $this->db->order_by('no_registrasi', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pendaftar');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->no_registrasi) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }


        $batas = str_pad($kode, "0", STR_PAD_LEFT);
        $kodetampil = "D-" . "0" . $batas; //format kode
        return $kodetampil;
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function ambil_id_pendaftar($no_registrasi)
    {
        $this->db->select('*');
        $this->db->from('berkas');
        $this->db->join('siswa', 'siswa.id_berkas = berkas.id_berkas');
        $hasil = $this->db->where('no_registrasi', $no_registrasi)->get('pendaftar');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function ambil_id_berkas1()
    {
        $this->db->select('*');
        $this->db->from('berkas');
        $this->db->join('pendaftar', 'berkas.id_berkas=pendaftar.id_berkas');
        $this->db->join('user', 'user.id=pendaftar.id');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function ambil_no_registrasi($no_registrasi)
    {
        $hasil = $this->db->where('no_registrasi', $no_registrasi)->get('pendaftar');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function ambil_id_berkas($id_berkas)
    {
        $hasil = $this->db->where('id_berkas', $id_berkas)->get('berkas');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function ambil_id_user($id)
    {
        $hasil = $this->db->where('id', $id)->get('user');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    function aksi()
    {
        $this->db->select('pendaftar.*, user.*,berkas.*');
        $this->db->from('pendaftar');
        $this->db->join('user', 'pendaftar.id = user.id');
        $this->db->join('berkas', 'berkas.id_berkas = pendaftar.id_berkas');
        $this->db->order_by('pendaftar.no_registrasi', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    function berkas($where, $table)
    {

        return $this->db->get_where($table, $where);
    }
    function join()
    {
        $this->db->select('*');
        $this->db->from('berkas');
        $this->db->join('siswa', 'siswa.id_berkas = berkas.id_berkas');
        $query = $this->db->get();
        return $query;
    }
}
?>