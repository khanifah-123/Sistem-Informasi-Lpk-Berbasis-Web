<?php
class Pelatihan_model extends  CI_Model
{

    public  function tampil_data()
    {
        $this->db->get('pelatihan');
    }
}
