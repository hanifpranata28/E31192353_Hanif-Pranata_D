<?php 
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
 ?>

<!DOCTYPE html>

<html lang="en">
<?php echo $head; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php echo @$sidebar; ?>
        <!-- End of sidebar-->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php echo @$topbar; ?>
                <!-- End of topbar -->

                <!-- Begin Page Content -->
                <?php echo @$content; ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content-->

            <!-- Footer -->
            <?php  echo @$footer; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of content wrapper -->

    </div>
    <!-- End of page wrapper -->

     <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('Login') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
        <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('aset/assets/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('aset/assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('aset/assets/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('aset/js/sb-admin-2.min.js') ?>"></script>

     <script src="<?php echo base_url('aset/assets/chart.js/Chart.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('aset/js/demo/chart-area-demo.js') ?>"></script>
    <script src="<?php echo base_url('asetjs/demo/chart-pie-demo.js') ?>"></script>
</body>
</html>


