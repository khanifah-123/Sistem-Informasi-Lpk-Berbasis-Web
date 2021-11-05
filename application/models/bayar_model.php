<?php
class Bayar_model extends CI_Model
{

    public function getAllAkun()
    {
        $row = $this->user_model->ambil_data1($this->session->userdata['username']);
        $row = array(
            'id' => $row->id,
        );
        $this->db->select('user.*,bayaran.*,siswa.*');
        $this->db->from('siswa');
        $this->db->join('bayaran', 'bayaran.id_siswa=siswa.id_siswa');
        $this->db->join('user', 'user.id=siswa.id');
        $this->db->where('siswa.id', $row['id']);

        $query = $this->db->get()->result_array();
        return $query;
    }
    public function printyuk()
    {
        $this->db->select('bayaran.*,siswa.nama_siswa');
        $this->db->from('siswa');
        $this->db->join('bayaran', 'bayaran.id_siswa=siswa.id_siswa');
        $query = $this->db->get();
        return $query;
    }
    public function tampil_data($table)
    {
        return $this->db->get($table);
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

    public function ambil_id_siswa($id_siswa)
    {
        $hasil = $this->db->where('id_siswa', $id_siswa)->get('siswa');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function id_siswa($id)
    {
        $this->db->query("select id_siswa from siswa where id_siswa='$id'");
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_data_bayar()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $result = $this->db->get('bayaran');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
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
    public function data_siswa($id)
    {
        $this->db->where('id', $id);

        return $this->db->get('user')->row();
    }
    public function data_bayar()
    {
        $this->db->select('*');
        $this->db->from('bayaran');
        $this->db->join('siswa', 'siswa.id_siswa = bayaran.id_siswa');
        $query = $this->db->get();
        return $query;
    }
    function data_join2table()
    {

        $this->db->select('bayaran.*, siswa.nama_siswa');
        $this->db->join('bayaran', 'siswa.id_siswa = bayaran.id_siswa');
        $this->db->from('siswa');
        $this->db->group_by('siswa.id_siswa');
        $query = $this->db->get();
        return $query->result();
    }
    public function detail_pemb($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->select('bayaran.*');
        $this->db->from('bayaran');
        $query = $this->db->get();
        return $query->result();
    }
    public function total()
    {
        return $this->db->query("SELECT sum(bayaran.nominal) as total, siswa.* from bayaran RIGHT JOIN siswa on siswa.id_siswa=bayaran.id_siswa group by siswa.id_siswa
        ");
    }
}
