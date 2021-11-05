 <!-- Bootstrap core JavaScript-->
 <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
 <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
 <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>
 <script src="<?php echo base_url() ?>assets/js/sweetalert2.min.js"></script>
 <script>
     var flash = $('#flash').data('flash');
     if (flash) {
         Swal.fire({
             icon: 'success',
             title: 'Sukses',
             text: flash,

         })
     }
     var cancel = $('#cancel').data('flash');
     if (cancel) {
         Swal.fire({
             icon: 'error',
             title: 'Warning',
             text: cancel,

         })
     }
     $(document).on('click', '#btn-hapus', function(e) {
         e.preventDefault();
         var link = $(this).attr('href');
         Swal.fire({
             title: 'Apakah anda yakin hapus data ini?',
             text: "Anda tidak akan melihat data ini lagi!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Ya, hapus!'
         }).then((result) => {
             if (result.isConfirmed) {
                 window.location = link;
             }
         })
     })
     $(document).on('click', '#btn-aktif', function(e) {
         e.preventDefault();
         var link = $(this).attr('href');
         Swal.fire({
             title: 'Apakah anda yakin?',
             text: "Akun akan diaktifkan!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Ya, aktifkan!'
         }).then((result) => {
             if (result.isConfirmed) {
                 window.location = link;
             }
         })

     })
     $(document).on('click', '#btn-keluar', function(e) {
         e.preventDefault();
         var link = $(this).attr('href');
         Swal.fire({
             title: 'Apakah anda yakin ingin keluar?',
             text: "Anda akan keluar dari web ini!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Ya, keluar!'
         }).then((result) => {
             if (result.isConfirmed) {
                 window.location = link;
             }
         })

     })
 </script>
 <!-- page script -->
 <script>
     $(function() {
         $('#example1').DataTable()

     })
 </script>
 </body>

 </body>

 </html>