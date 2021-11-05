<?php
class User_model extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function ambil_data($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('pengajar')->row();
    }
    public function ambil_datas($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('user')->row();
    }
    public function ambil_data1($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('user')->row();
    }
    public function ambil_status()
    {
        $this->db->select('user.status');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }
    public function tampil_userid()
    {
        $query = $this->db->query("select * from siswa where siswa.id_siswa=user.id_siswa");
        return $query->result();
    }
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
    public function tampil_datas($table)
    {
        return $this->db->get($table);
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

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function create($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $this->db->insert_id(); // return last insert id
    }
}
