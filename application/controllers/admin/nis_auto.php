<?php 
class Nis_auto extends CI_Controller{
    public function index()
    {	
        $data['nis'] = $this->kode->kode();
        $data['tampil'] = $this->kode_m->tampil();
        $this->load->view('Kode_otomatis', $data);

    }
    public function inputSiswa()
    {
        if($_POST){
            $nama_siswa = $this->input->post('nama_siswa');
            $nis = $this->input->post('nis');
            $this->kode_m->inputBarang(array(
                'nama_siswa' 		=> $nama_siswa,
                'nis'		=> $nis,
            ));
        }
        redirect("Nis_auto");
    }
}