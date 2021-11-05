<?php
class Siswa_model extends CI_MODEL
{

    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
    public function tampil_data1()
    {
        $this->db->where('id', $this->session->userdata('id'));
        $result = $this->db->get('user');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    function tampil_data_ruangan()
    {
        $this->db->select('ruangan.nama_ruangan');
        $this->db->join('ruangan', 'ruangan.kd_ruangan = siswa.kd_ruangan');
        $this->db->from('siswa');
        $query = $this->db->get();
        return $query->result();
    }
    public function tampil_foto()
    {
        $row = $this->user_model->ambil_data1($this->session->userdata['username']);
        $row = array(
            'id' => $row->id,
        );

        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('user', 'user.id = siswa.id');
        $this->db->where('user.id', $row['id']);
        $query = $this->db->get();
        return $query->result();
    }

    public function ambil_data($id)
    {
        $this->db->where('id_siswa', $id);
        return $this->db->get('siswa')->row();
    }
    public function ambil_id_siswa($id_siswa)
    {
        $hasil = $this->db->where('id_siswa', $id_siswa)->get('siswa');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function ambil_kd_ruang()
    {
        $this->db->select('*');
        $this->db->from('siswa s');
        $this->db->join('pengajar p', 's.kd_ruangan = p.kd_ruangan');
        $query = $this->db->get();
        return $query->result();
    }
    public function tampil_siswa_pengajar()
    {
        $row = $this->user_model->ambil_data($this->session->userdata['username']);
        $row = array(
            'kd_ruangan' => $row->kd_ruangan,
        );
        $this->db->select('*');
        $this->db->from('pengajar p');
        $this->db->join('siswa s', 's.kd_ruangan = p.kd_ruangan');
        $this->db->where('p.kd_ruangan', $row['kd_ruangan']);
        $query = $this->db->get();
        return $query->result();
    }
    public function tampil_siswa_nilai()
    {
        $row = $this->user_model->ambil_data($this->session->userdata['username']);
        $row = array(
            'kd_ruangan' => $row->kd_ruangan,
        );
        $this->db->select('*');
        $this->db->from('pengajar p');
        $this->db->join('siswa s', 's.kd_ruangan = p.kd_ruangan');
        $this->db->join('nilai n', 's.id_siswa = n.id_siswa');
        $this->db->where('p.kd_ruangan', $row['kd_ruangan']);
        $query = $this->db->get();
        return $query->result();
    }
    public function tampil_data_siswa()
    {
        $this->db->select('*');
        $this->db->from('siswa s');
        $this->db->join('user u', 's.id = u.id');
        $query = $this->db->get();
        return $query->result();
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function create($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function kode()
    {
        $this->db->select('RIGHT(siswa.id_siswa,1) as id_siswa', FALSE);
        $this->db->order_by('id_siswa', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('siswa');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->id_siswa) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }


        $batas = str_pad($kode, "0", STR_PAD_LEFT);
        $kodetampil = "S-" . "0" . "0" . $batas;  //format kode
        return $kodetampil;
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->like('nama_siswa', $keyword);
        $this->db->or_like('id_siswa', $keyword);
        $this->db->or_like('alamat_lengkap', $keyword);
        $this->db->or_like('alamat_email', $keyword);
        return $this->db->get()->result();
    }
}
