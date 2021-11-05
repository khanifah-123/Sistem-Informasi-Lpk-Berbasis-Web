<?php
class Pengajar_model extends CI_MODEL
{
    public function tampil_foto()
    {
        $row = $this->user_model->ambil_data1($this->session->userdata['username']);
        $row = array(
            'id' => $row->id,
        );

        $this->db->select('*');
        $this->db->from('pengajar');
        $this->db->join('user', 'user.id = pengajar.id');
        $this->db->where('user.id', $row['id']);
        $query = $this->db->get();
        return $query->result();
    }
    public function get($id = null)
    {
        $this->db->from('pengajar');
        if ($id != null) {
            $this->db->where('id_pengajar', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function tampil_semua()
    {

        $this->db->select('pengajar.*');
        $this->db->from('pengajar');
        $this->db->join('ruangan', 'ruangan.kd_ruangan = pengajar.kd_ruangan');
        $query = $this->db->get();
        return $query->result();
    }
    public function tampil_data1()
    {

        $this->db->select('ruangan.*');
        $this->db->from('pengajar');
        $this->db->join('ruangan', 'ruangan.kd_ruangan = pengajar.kd_ruangan');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_data($table)
    {

        return $this->db->get($table);
    }

    public function ambil_id_pengajar($id_pengajar)
    {
        $hasil = $this->db->where('id_pengajar', $id_pengajar)->get('pengajar');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function tampil($id)
    {
        $this->db->where('id_pengajar', $id);
        $this->db->select('pengajar.*,ruangan.nama_ruangan');
        $this->db->from('ruangan');
        $this->db->join('pengajar', 'ruangan.kd_ruangan = pengajar.kd_ruangan');
        $query = $this->db->get();
        return $query->result();
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


    public function ambil()
    {
        $row = $this->user_model->ambil_data1($this->session->userdata['username']);
        $row = array(
            'id' => $row->id,
        );
        $this->db->select('pengajar.*,ruangan.nama_ruangan');
        $this->db->from('ruangan');
        $this->db->join('pengajar', 'ruangan.kd_ruangan = pengajar.kd_ruangan');
        $this->db->join('user', 'user.id = pengajar.id');
        $this->db->where('user.id', $row['id']);
        $query = $this->db->get();
        return $query->result();
    }
    public function ambil_admin()
    {

        $this->db->select('pengajar.*,ruangan.nama_ruangan');
        $this->db->from('ruangan');
        $this->db->join('pengajar', 'ruangan.kd_ruangan = pengajar.kd_ruangan');
        $this->db->join('user', 'user.id = pengajar.id');
        $query = $this->db->get();
        return $query->result();
    }
    public function tampil_data_pengajar()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $result = $this->db->get('pengajar');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }



    public function ambil_data($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('user')->row();
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
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
        $this->db->select('RIGHT(pengajar.id_pengajar,1) as id_pengajar', FALSE);
        $this->db->order_by('id_pengajar', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pengajar');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->id_pengajar) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }

        $batas = str_pad($kode, "0", STR_PAD_LEFT);
        $kodetampil = "P-" . "0" . "0" . $batas;  //format kode
        return $kodetampil;
    }
}
