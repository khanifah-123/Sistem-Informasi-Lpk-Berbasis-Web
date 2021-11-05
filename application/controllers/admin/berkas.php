<?php
class Berkas extends CI_Controller
{
    public function tampil($id)
    {
        $where = array('id_berkas' => $id);

        $data['berkas'] = $this->db->query("select * from berkas where id_berkas='$id'")->result();
        $this->template->load('template', 'admin/berkas', $data);
    }
    function download_ktp($id)
    {
        $data = $this->db->get_where('berkas', ['id_berkas' => $id])->row();
        force_download('assets/uploads/' . $data->fc_ktp, NULL);
    }
    function download_kk($id)
    {
        $data = $this->db->get_where('berkas', ['id_berkas' => $id])->row();
        force_download('assets/uploads/' . $data->fc_kk, NULL);
    }
    function download_ijazah($id)
    {
        $data = $this->db->get_where('berkas', ['id_berkas' => $id])->row();
        force_download('assets/uploads/' . $data->fc_ijazah, NULL);
    }
    function download_bp($id)
    {
        $data = $this->db->get_where('berkas', ['id_berkas' => $id])->row();
        force_download('assets/uploads/' . $data->bukti_pembayaran, NULL);
    }
}
