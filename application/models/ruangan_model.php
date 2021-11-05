<?php
class Ruangan_model extends CI_Model
{
    public function tampil_semua($table)
    {
        return $this->db->get($table);
    }
    public function getr($id = null)
    {
        $this->db->from('ruangan');
        if ($id != null) {
            $this->db->where('kd_ruangan', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
    public function get()
    {
        $query = $this->db->query('select * from ruangan');
        return $query->result();
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

    function data_join2table()
    {
        $this->db->select('ruangan.*, pengajar.*');
        $this->db->from('ruangan');
        $this->db->join('pengajar', 'pengajar.kd_ruangan = ruangan.kd_ruangan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function kode()
    {
        $this->db->select('right(ruangan.kd_ruangan,1) as kd_ruangan', FALSE);
        $this->db->order_by('kd_ruangan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('ruangan');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kd_ruangan) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }

        $batas = str_pad($kode, "0", STR_PAD_LEFT);
        $kodetampil = "K-" . "0" . "0" . $batas;  //format kode
        return $kodetampil;
    }
}
