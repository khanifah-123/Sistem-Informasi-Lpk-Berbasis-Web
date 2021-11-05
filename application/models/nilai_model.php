<?php
class Nilai_model extends CI_Model
{

    function join()
    {
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('ujian', 'ujian.id_ujian = nilai.id_ujian');
        $this->db->join('siswa', 'siswa.id_siswa = nilai.id_siswa');
        $this->db->join('user', 'user.id=siswa.id');
        $query = $this->db->get()->result_array();
        return $query;
    }

    function join_siswa()
    {
        $row = $this->user_model->ambil_data1($this->session->userdata['username']);
        $row = array(
            'id' => $row->id,
        );
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('ujian', 'ujian.id_ujian = nilai.id_ujian');
        $this->db->join('siswa', 'siswa.id_siswa = nilai.id_siswa');
        $this->db->join('user', 'siswa.id=user.id');
        $this->db->where('user.id', $row['id']);
        $query = $this->db->get()->result_array();
        return $query;
    }
    function nilai()
    {
        $row = $this->user_model->ambil_data($this->session->userdata['username']);
        $row = array(
            'kd_ruangan' => $row->kd_ruangan,
        );
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('ujian', 'ujian.id_ujian = nilai.id_ujian');
        $this->db->join('siswa', 'siswa.id_siswa = nilai.id_siswa');
        $this->db->join('pengajar', 'pengajar.kd_ruangan=siswa.kd_ruangan');
        $this->db->where('pengajar.kd_ruangan', $row['kd_ruangan']);
        $query = $this->db->get()->result_array();
        return $query;
    }
}
