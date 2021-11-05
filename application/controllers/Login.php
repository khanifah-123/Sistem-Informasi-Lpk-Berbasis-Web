<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {

            $this->load->view('login');
        } else {
            $this->loginin();
        }
    }

    private function loginin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
?>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/sweetalert2.min.css">
        <script src="<?php echo base_url() ?>assets/js/sweetalert2.min.js"></script>
        <?php
        if ($user) {

            if (password_verify($password, $user['password'])) {

                $data = [

                    'username' =>  $user['username'],
                    'level'     => $user['level'],
                    'status'       => $user['status']
                ];
                $this->session->set_userdata($data);

                if ($user['level'] == 'admin' && $user['status'] == '1') {
        ?> <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: 'Selamat, Login berhasil!',
                        }).then((result) => {

                            window.location = '<?= site_url('admin/dashboard') ?>';

                        })
                    </script>
                <?php
                } else if ($user['level'] == 'siswa' && $user['status'] == '1') {
                ?> <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: 'Selamat, Login berhasil!',
                        }).then((result) => {

                            window.location = '<?= site_url('siswa/dashboard') ?>';

                        })
                    </script>
                <?php
                } else if ($user['level'] == 'pengajar' && $user['status'] == '1') {
                ?> <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: 'Selamat, Login berhasil!',
                        }).then((result) => {

                            window.location = '<?= site_url('pengajar/dashboard') ?>';

                        })
                    </script>
            <?php
                }
            }
        } else {
            ?> <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Failed',
                    text: 'Maaf login gagal, username/password salah',
                }).then((result) => {

                    window.location = '<?= site_url('login') ?>';

                })
            </script>
        <?php

        }
    }

    public function logout()
    { ?>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/sweetalert2.min.css">
        <script src="<?php echo base_url() ?>assets/js/sweetalert2.min.js"></script>
        <?php
        ?> <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: 'Anda berhasil keluar!',
            }).then((result) => {

                window.location = '<?= site_url('login') ?>';

            })
        </script>
<?php
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/login_header');
            $this->load->view('home/registration');
            $this->load->view('templates/login_footer');
        } else {
            echo 'Data Berhasil Ditambahkan!';
        }
    }
}

?>
}