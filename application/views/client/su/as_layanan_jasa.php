<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Si Admin</title>
        <link rel="icon" type="image/png" href="<?=base_url();?>/asset/login/images/firman.jpg"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/umum/css/style.css">

     <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>/asset/admin/plugins/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>/asset/admin/plugins/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/admin/dist/css/adminlte.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/admin/plugins/ekko-lightbox/ekko-lightbox.css">
    <style>
.redtext {
    color: white;
    font-size: 30px;
}
</style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#"> <img src="<?=base_url();?>/asset/umum/img/uin3.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo site_url('C_client/suh')?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('C_client/asly')?>">Layanan Jasa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('C_client/monitoring')?>">Monitoring</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('C_client/abu')?>">About US</a>
                                </li>
                                
                               <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('C_client/logout')?>">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <!-- <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Every child yearns to learn</h5>
                            <h1>Sistem Informasi Sebaran Tenaga Guru</h1>
                            <p>Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales
                                his void unto last session for bite. Set have great you'll male grass yielding yielding
                                man</p>
                            <a href="#" class="btn_1">View Course </a>
                            <a href="#" class="btn_2">Get Started </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- banner part start-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Layanan Jasa</h2>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Layanan Jasa</h4>
              </div>
              <div class="card-body">
                <div class="row">
                    <?php foreach($user as $u){ ?>
                  <div class="col-sm-2">
                    <a href="<?=base_url()?>uploads/jasa/<?=$u->foto;?>" data-toggle="lightbox" data-title="Layanan Jasa" data-gallery="gallery">
                      <img src="<?=base_url()?>uploads/jasa/<?=$u->foto;?>" class="img-fluid mb-2" alt="white sample"/>
                      <h6><?php echo $u->layanan_jasa ?></h6>
                      <h6><?php echo $u->harga ?></h6>
                    </a>
                    <a class="btn btn-info btn-sm" href="<?php echo site_url('C_client/edit_jasa/'.$u->id_jasa);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                      </a>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->    

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?php echo base_url(); ?>asset/umum/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/umum/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/umum/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/umum/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="<?php echo base_url(); ?>asset/umum/js/custom.js"></script>


    

<!-- jQuery -->
<script src="<?=base_url();?>/asset/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url();?>/asset/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url();?>/asset/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url();?>/asset/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url();?>/asset/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url();?>/asset/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url();?>/asset/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url();?>/asset/admin/plugins/moment/moment.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url();?>/asset/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url();?>/asset/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url();?>/asset/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>/asset/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>/asset/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url();?>/asset/admin/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=base_url();?>/asset/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url();?>/asset/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-- Ekko Lightbox -->
<script src="<?=base_url();?>/asset/admin/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Filterizr-->
<script src="<?=base_url();?>/asset/admin/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</body>

</html>