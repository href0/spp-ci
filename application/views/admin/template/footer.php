 <!-- Footer -->
 <footer class="sticky-footer bg-white">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright &copy; ApipLuki <?= date('Y') ?></span>
         </div>
     </div>
 </footer>
 <!-- End of Footer -->

 </div>
 <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Yakin Keluar?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Keluar Dari Halaman Ini?</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
             </div>
         </div>
     </div>
 </div>

 <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
 <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
 <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
 <script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
 <script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
 <script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
 <script src="<?= base_url('assets/js/demo/datatables-demo.js'); ?>"></script>

 <!-- <script src="<?= base_url('assets/vendor/bootstrap/bootstrap.min.js') ?>"></script> -->
 <script>
     $(document).ready(function() {
         let makan = 'false';
         let listrik = 'false';
         $('.makan').on('click', function() {
             let checkboxMakan = $(this).attr('id')
             console.log(checkboxMakan)
             if ($('#' + checkboxMakan).is(':checked')) {
                 makan = 'true'
             } else {
                 makan = 'false'
             }
         })
         $('.listrik').on('click', function() {
             let checkboxListrik = $(this).attr('id')
             console.log(checkboxListrik)
             if ($('#' + checkboxListrik).is(':checked')) {
                 listrik = 'true'
             } else {
                 listrik = 'false'
             }
         })

         $('.bayarSpp').on('click', function() {
             let id_pembayaran = $(this).data('id');
             $.ajax({
                 url: '<?= base_url('admin/pembayaran/bayar/') ?>' + id_pembayaran,
                 method: 'post',
                 data: {
                     listrik,
                     makan,
                     id_pembayaran
                 },
                 success: function(result) {
                     console.log(result)
                     window.location.reload()
                 }
             })
         })

     })
 </script>
 </body>





 </html>