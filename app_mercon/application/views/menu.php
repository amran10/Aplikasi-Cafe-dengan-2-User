<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Cafe Doel
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/now-ui-dashboard.css?v=1.2.0') ?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('assets/demo/demo.css') ?>" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="yellow">
       <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo" align="Center">
        <a class="simple-text logo-normal">
          <img src="<?php echo base_url('images/Logo Doel.jpg') ?>" style="width: 40px;">
          Cafe Doel
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="<?php echo base_url() ?>index.php/c_home">
              <i class="now-ui-icons tech_laptop"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="active ">
            <a href="<?php echo base_url() ?>index.php/c_menu">
              <i class="now-ui-icons education_paper"></i>
              <p>Menu</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>index.php/c_pesanan">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Pesanan</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>index.php/c_pembayaran">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Pembayaran</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>index.php/c_report_penjualan">
              <i class="now-ui-icons files_paper"></i>
              <p>Report Penjualan</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>index.php/c_user_profil">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- End Dahboard -->
    <div class="main-panel">
    <div class="panel-header panel-header-sm">
    </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Pilih Menu Makanan</h5>
              </div>
              <div class="card-body all-icons">
                <div class="row">
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/cara-membuat-kuah-soto-padang.jpg') ?>" style="width: 200px;">
                      <h6>Soto Padang</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/padang-everyday-kopmil-om-ping-1024x683.jpg') ?>" style="width: 200px; height: 170px;">
                      <h6>Kopi Milo</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/cara-membuat-kuah-soto-padang.jpg') ?>" style="width: 200px;">
                      <h6>Soto Padang</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/padang-everyday-kopmil-om-ping-1024x683.jpg') ?>" style="width: 200px; height: 170px;">
                      <h6>Kopi Milo</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/cara-membuat-kuah-soto-padang.jpg') ?>" style="width: 200px;">
                      <h6>Soto Padang</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/padang-everyday-kopmil-om-ping-1024x683.jpg') ?>" style="width: 200px; height: 170px;">
                      <h6>Kopi Milo</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/soto medan.jpg') ?>" style="width: 200px;">
                      <h6>Soto Medan</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/soto medan.jpg') ?>" style="width: 200px;">
                      <h6>Soto Medan</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/soto medan.jpg') ?>" style="width: 200px;">
                      <h6>Soto Medan</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/soto medan.jpg') ?>" style="width: 200px;">
                      <h6>Soto Medan</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/soto medan.jpg') ?>" style="width: 200px;">
                      <h6>Soto Medan</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/soto medan.jpg') ?>" style="width: 200px;">
                      <h6>Soto Medan</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/th4B0RY6O6.jpg') ?>" style="width: 200px;">
                      <h6>Pisang Coklat Dan Keju</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/th4B0RY6O6.jpg') ?>" style="width: 200px;">
                      <h6>Pisang Coklat Dan Keju</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/th4B0RY6O6.jpg') ?>" style="width: 200px;">
                      <h6>Pisang Coklat Dan Keju</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/th4B0RY6O6.jpg') ?>" style="width: 200px;">
                      <h6>Pisang Coklat Dan Keju</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/th4B0RY6O6.jpg') ?>" style="width: 200px;">
                      <h6>Pisang Coklat Dan Keju</h6>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <img src="<?php echo base_url('images/th4B0RY6O6.jpg') ?>" style="width: 200px;">
                      <h6>Pisang Coklat Dan Keju</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/js/core/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/core/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/core/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js') ?>"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url('assets/js/plugins/chartjs.min.js') ?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url('assets/js/plugins/bootstrap-notify.js') ?>"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('assets/js/now-ui-dashboard.min.js?v=1.2.0') ?>" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url('assets/demo/demo.js') ?>"></script>
</body>

</html>