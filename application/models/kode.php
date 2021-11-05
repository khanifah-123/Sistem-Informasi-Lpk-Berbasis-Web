<?php
class Kode extends CI_Model{
    public function tampil(){
        return $this->db->get('siswa')->result();
    }
    public function inputSiswa(){
        $this->db->insert('siswa', $data);
    }
    public function kode(){
        $this->db->select('RIGHT(siswa.nis,2) as nis', FALSE);
        $this->db->order_by('nis','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('siswa');  //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
             //cek kode jika telah tersedia    
             $data = $query->row();      
             $kode = intval($data->nis) + 1; 
        }
        else{      
             $kode = 1;  //cek jika kode belum terdapat pada table
        }


            $batas = str_pad("0", $kode, STR_PAD_LEFT);    
            $kodetampil = "S-".$batas;  //format kode
            return $kodetampil;  
       }
}