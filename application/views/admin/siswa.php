<!-- DATATABLES BS 4-->
<!-- DATATABLES BS 4-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<section class="content-header">
    <h1>
        Belum tau

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Pengguna</li>
    </ol>
</section>
<section class="content">
    <div id="flash" data-flash="<?= $this->session->flashdata('pesan'); ?>">

    </div>
    <div class="box">
        <div class="box-header">
            <h3>DATA SISWA</h3>

            <?php echo anchor('admin/siswa/tambah_siswa', '<button class="btn btn-sm 
        btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data Siswa</button>')
            ?>
            <?php echo anchor('admin/siswa/kelola', '<button class="btn btn-sm 
        btn-warning mb-3"><i class="fa fa-setting fa-sm"></i> Kelola data siswa</button>')
            ?>
        </div>
    </div>
    <div class="box">
        <div class="box-body">
            <table class="table table-striped table-hover table-bordered " class="display" style="width:100%" id="tabel">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIS</th>
                        <th>NAMA lengkap</th>
                        <th>JENIS KELAMIN</th>
                        <th>ALAMAT</th>
                        <th>AKSI</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <script type="text/javascript">
        var save_method; //for save method string
        var table;
        $(document).ready(function() {
            table = $('#tabel').DataTable({
                "processing": true,
                "serverSide": false,
                "order": [],
                "ajax": {
                    "url": '<?php echo site_url('admin/siswa/jaga'); ?>',
                    "type": "GET",

                },
                "columns": [{
                        "data": "no",
                        width: 40
                    },
                    {
                        "data": "id_siswa",
                        width: 70
                    },
                    {
                        "data": "nama_siswa",
                        width: 150
                    },
                    {
                        "data": "alamat_lengkap",
                        width: 100
                    },
                    {
                        "data": "jenis_kelamin",
                        width: 70
                    },
                    {
                        "data": "action",
                        width: 60,
                    },
                ],
                "columnDefs": [{
                        "targets": [0, 5]
                    },
                    {
                        "orderable": false
                    },
                    {
                        "targets": [2, -1]
                    },
                    {
                        "className": "text-center"
                    }
                ]
            })
        });
    </script>


    </body>

    </html>