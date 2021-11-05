<?php
class Informasi_model extends CI_Model
{
    public function tampil_semua($table)
    {

        return $this->db->get($table);
    }
    public function get($id = null)
    {
        $this->db->from('modul');
        if ($id != null) {
            $this->db->where('id_modul', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function ambil_kd_ruangan($kd_ruangan)
    {
        $hasil = $this->db->where('kd_ruangan', $kd_ruangan)->get('modul');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function tampil_modul()
    {
        $row = $this->user_model->ambil_datas($this->session->userdata['username']);
        $row = array(
            'id' => $row->id,
        );
        $this->db->select('modul.*');
        $this->db->from('ruangan');
        $this->db->join('siswa', 'siswa.kd_ruangan=ruangan.kd_ruangan');
        $this->db->join('modul', 'modul.kd_ruangan=ruangan.kd_ruangan');
        $this->db->join('user', 'user.id=siswa.id');
        $this->db->where('siswa.id', $row['id']);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function tampil_modul_pengajar()
    {
        $row = $this->user_model->ambil_data($this->session->userdata['username']);
        $row = array(
            'kd_ruangan' => $row->kd_ruangan,
        );
        $this->db->select('modul.*');
        $this->db->from('ruangan');
        $this->db->join('modul', 'modul.kd_ruangan=ruangan.kd_ruangan');
        $this->db->join('pengajar', 'pengajar.kd_ruangan=modul.kd_ruangan');
        $this->db->where('pengajar.kd_ruangan', $row['kd_ruangan']);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function tampil_data()
    {
        $this->db->select('modul.*,siswa.*,ruangan.*,user.*');
        $this->db->from('ruangan');
        $this->db->join('siswa', 'siswa.kd_ruangan=ruangan.kd_ruangan');
        $this->db->join('modul', 'modul.kd_ruangan=ruangan.kd_ruangan');
        $this->db->join('user', 'user.id=siswa.id');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function tampil_nilai()
    {
        $this->db->select('modul.*,siswa.*,ruangan.*,user.*');
        $this->db->from('ruangan');
        $this->db->join('siswa', 'siswa.kd_ruangan=ruangan.kd_ruangan');
        $this->db->join('modul', 'modul.kd_ruangan=ruangan.kd_ruangan');
        $this->db->join('user', 'user.id=siswa.id');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('modul');
        $this->db->like('modul', $keyword);
        $this->db->or_like('materi', $keyword);
        $this->db->or_like('keterangan', $keyword);
        return $this->db->get()->result();
    }
}
