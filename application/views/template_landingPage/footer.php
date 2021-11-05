 <!-- Bootstrap core JS-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src="assets/vendor/vendor/jquery.easing/jquery.easing.min.js"></script>
 <script src="assets/vendor/vendor/php-email-form/validate.js"></script>
 <script src="assets/vendor/vendor/venobox/venobox.min.js"></script>
 <script src="assets/vendor/vendor/owl.carousel/owl.carousel.min.js"></script>
 <script src="assets/vendor/vendor/superfish/superfish.min.js"></script>
 <script src="assets/vendor/vendor/hoverIntent/hoverIntent.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Core theme JS-->
 <script src="assets/js/main.js"></script>
 <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
 <!-- * *                               SB Forms JS                               * *-->
 <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
 <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
 <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
 <script src="<?php echo base_url() ?>assets/js/sweetalert2.min.js"></script>
 </body>
 <script>
     $(document).on('click', '#btn-konfirm', function(e) {
         e.preventDefault();
         var link = $(this).attr('href');
         Swal.fire({
             title: 'Perhatian',
             text: "Lakukkan Pembayaran terlebih dahulu sebelum mendaftar!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Lanjutkan!'
         }).then((result) => {
             if (result.isConfirmed) {
                 window.location = link;
             }
         })
     })
 </script>

 </body>

 </html>