<?php
$no = 1;
foreach ($siswa as $sw) : ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $sw->id_siswa ?></td>
        <td><?php echo $sw->nama_siswa ?></td>
        <td><?php echo $sw->alamat_lengkap ?></td>
        <td><?php echo $sw->alamat_email ?></td>
        <td width="20px"><?php echo anchor(
                                'admin/siswa/detail/'
                                    . $sw->id_siswa,
                                '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'
                            ) ?></td>
        <td width="20px"><?php echo anchor(
                                'admin/siswa/update/'
                                    . $sw->id_siswa,
                                '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                            ) ?></td>
        <td width="20px">
            <a href="<?php echo site_url('admin/siswa/delete/' . $sw->id_siswa); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?= $sw->nama_siswa; ?> ?');" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data">
                <i class="fa fa-trash"></i></a>
        </td>
    </tr>
<?php endforeach; ?>

<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fas fa-university"></i> siswa
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('admin/siswa/tambah_siswa', '<button class="btn btn-sm 
        btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Siswa</button>')
    ?>
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('admin/siswa/kelola', '<button class="btn btn-sm 
        btn-warning mb-3"><i class="fas fa-plus fa-sm"></i> Kelola data siswa</button>')
    ?>

    <div class="demo-html"></div>
    <table id="tabel" class="display" style="width:100%" class="table table-striped table-hover table-bordered">
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
        <tfoot>
            <tr>
                <th>NO</th>
                <th>NIS</th>
                <th>NAMA lengkap</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>

                <th>AKSI</th>
            </tr>
        </tfoot>
    </table>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

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
                "type": "GET"
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
                    width: 50,


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