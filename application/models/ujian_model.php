<?php
class Ujian_model extends CI_Model
{
    public function get()
    {
        $this->db->select('ujian.*, ruangan.nama_ruangan');
        $this->db->join('ruangan', 'ruangan.kd_ruangan = ujian.kd_ruangan');
        $this->db->from('ujian');
        $query = $this->db->get();
        return $query->result();
    }
    public function tampil_ujian_siswa()
    {
        $row = $this->user_model->ambil_datas($this->session->userdata['username']);
        $row = array(
            'id' => $row->id,
        );

        $this->db->select('ujian.*,siswa.*,user.*');
        $this->db->from('siswa');
        $this->db->join('ujian', 'ujian.kd_ruangan=siswa.kd_ruangan');
        $this->db->join('ruangan', 'ruangan.kd_ruangan=ujian.kd_ruangan');
        $this->db->join('user', 'user.id=siswa.id');
        $this->db->where('siswa.id', $row['id']);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
    public function tampil_ujian()
    {
        $this->db->select('ujian.*,siswa.*,user.*');
        $this->db->from('siswa');
        $this->db->join('ujian', 'ujian.kd_ruangan=siswa.kd_ruangan');
        $this->db->join('ruangan', 'ruangan.kd_ruangan=ujian.kd_ruangan');
        $this->db->join('user', 'user.id=siswa.id');
        $query = $this->db->get()->result();
        return $query;
    }
    public function tampil_ujian_pengajar()
    {
        $row = $this->user_model->ambil_data($this->session->userdata['username']);
        $row = array(
            'kd_ruangan' => $row->kd_ruangan,
        );
        $this->db->select('ujian.*');
        $this->db->from('ujian');
        $this->db->join('ruangan', 'ruangan.kd_ruangan=ujian.kd_ruangan');
        $this->db->join('pengajar', 'pengajar.kd_ruangan=ujian.kd_ruangan');
        $this->db->where('pengajar.kd_ruangan', $row['kd_ruangan']);
        $query = $this->db->get()->result();
        return $query;
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function ambil_id_pengajar($id_ujian)
    {
        $hasil = $this->db->where('id_ujian', $id_ujian)->get('ujian');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function ambil_kd()
    {
        $row = $this->user_model->ambil_data1($this->session->userdata['username']);
        $row = array(
            'id' => $row->id,
        );
        $this->db->select('pengajar.kd_ruangan');
        $this->db->from('pengajar');
        $this->db->join('user', 'pengajar.id=user.id');
        $this->db->where('user.id', $row['id']);
        $query = $this->db->get();
        return $query->result();
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
