<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cakra Global Logistik</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="PT Cakra Global Logistik didirikan pada tahun 2024 dengan komitmen untuk menjadi mitra terdepan dalam solusi logistik global.">
    <meta name="keywords" content="Cakra Global Logistik,PLB, PLB murah, solusi impor, kebutuhan proses PI, pengurusan PI, PLB alat berat, PLB industri, gudang umum open yard, konsultasi import, Pusat Logistik Berikat, Freight Forwarding, Warehousing,Custom Handling, Project Logistik, Trucking">
    <meta name="copyright" content="Cakra Global Logistik">
    <meta name="author" content="Cakra Global Logistik">
    <meta name="language" content="id">

        <!-- Favicon -->
        <link href="<?php echo base_url(); ?>asset-landing/img/fav-log.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>asset-landing/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset-landing/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>asset-landing/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>asset-landing/css/style.css" rel="stylesheet">

    <!-- Template Gallery knight -->
    <link href="<?php echo base_url(); ?>asset-landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset-landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset-landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- pop up-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
  <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>

     <!-- Whatsapp -->
     <a href="https://api.whatsapp.com/send?phone=+6285770552864&text=Hello%20Cakra%20Global%20Logistik" class="float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
    </a>
    <!-- Template Stylesheet -->
    <style>
    .carousel-top {
        margin-top: 120px;
    }

    /* Media query untuk perangkat mobile */
    @media (max-width: 768px) {
        .navbar-logo {
            max-width: 250px;
            /* Adjust the max-width for smaller screens */
        }

        .carousel-top {
            margin-top: 20px;
        }
    }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn bg-white" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-location-arrow text-primary me-2"></i>Kebon Bawang</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>marketing@cakralogistic.co.id</small>
                <small class="ms-4"><i class="fa fa-phone text-primary me-2"></i>+62-21-6977-04</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="<?php echo base_url(); ?>" class="navbar-brand ms-4 ms-lg-0">
                <img src="<?php echo base_url(); ?>asset-landing/img/logo-01.png" class="navbar-logo">
            </a>
            <button type="button" class="navbar-toggler me-4 ms-auto" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="<?php echo base_url(); ?>" class="nav-item nav-link">Beranda</a>
                    <a href="<?php echo base_url(); ?>#tentang-kami" class="nav-item nav-link">Tentang Kami</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan Kami</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="<?php echo base_url(); ?>c_web/layananKami/freight_forwarding" class="dropdown-item">Freight Forwarding</a>
                            <a href="<?php echo base_url(); ?>c_web/layananKami/custome_handling" class="dropdown-item">Custom Handling</a>
                            <a href="<?php echo base_url(); ?>c_web/warehouse" class="dropdown-item">Warehousing</a>
                            <a href="<?php echo base_url(); ?>c_web/layananKami/project_logistic" class="dropdown-item">Project Logistic</a>
                            <a href="<?php echo base_url(); ?>c_web/layananKami/trucking" class="dropdown-item">Trucking</a>
                            <a href="<?php echo base_url(); ?>c_web/layananKami/plb" class="dropdown-item">PLB</a>
                        </div>
                    </div>
                    <a href="<?php echo base_url(); ?>#artikel" class="nav-item nav-link">Artikel</a>
                    <a href="<?php echo base_url(); ?>c_web/hubungiKami" class="nav-item nav-link active">Hubungi Kami</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="#">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3"
                        href="#">
                        <small class="fab fa-instagram text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="#">
                        <small class="fab fa-youtube text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3"
                        href="https://api.whatsapp.com/send?phone=+6285770552864&text=Hallo%20Cakra%20Global%20Logistik"
                        target="_blank">
                        <small class="fab fa-whatsapp text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Freight Forwarding Start -->
    <!-- Projects Start -->
    <div class="container-xxl py-5" style="margin-top: 110px;">
    <section class="site-section" id="contactus-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Hubungi Kami</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-4 text-center">
              <p class="mb-4">
              <span class="icon-room d-block h4 text-primary"></span>
              <span><b>Head</b>/<b>Office</b></span>
              <br>
              <span>SCBD, Gedung Treasury Tower, District 8 LOT 28</span>
              <br>
              <span>Jl. Tulodong Atas 2 No.28, Senayan, Kebayoran Baru, Jakarta Selatan 12190.</span>
              <br>
              <br>
              <span><b>Operasional Office</b>/<b>Alamat Kantor Operasional</b></span>
              <br>
              <span>Jl. Kebon Bawang VIII No.20, RT.19/RW.1, Kb. Bawang, Kec. Tj. Priok, Jakarta Utara</span>
              <br>
              
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h4 text-primary"></span>
              <a href="#">+62-21-6977-04</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h4 text-primary"></span>
              <a href="#">marketing@cakralogistic.co.id</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">
            <form action="<?php echo base_url(); ?>c_web/send_email" method="post" class="p-5 bg-white" enctype="multipart/form-data">
              
              <h2 class="h4 text-black mb-5">Pesan Untuk Kami</h2> 


              <div class="row form-group" style="margin-bottom: 1rem;">
                
                <div class="col-md-12">
                  <label class="text-black" for="email" name="email"  autocomplete="on" required>Nama Email</label> 
                  <input type="email" id="email" name="email" class="form-control" required>
                </div>
              </div>

              <div class="row form-group" style="margin-bottom: 1rem;">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subjek</label> 
                  <input type="subject" id="subject" name="subject" class="form-control" required>
                </div>
              </div>

              <div class="row form-group" style="margin-bottom: 1rem;">
                <div class="col-md-12">
                  <label class="text-black" for="message">Pesan Anda</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Tulis Pesan Disini..." required></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Kirim Pesan" class="btn btn-primary btn-md text-white">
                </div>
              </div>
              <br>
              </form>
              
          </div>
          
        </div>
      </div>
    </section>
</div>
            <!-- Projects End -->
     
    <?php
    include_once 'v_landing_footer.php';
    ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>asset-landing/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>asset-landing/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>asset-landing/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>asset-landing/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>asset-landing/lib/counterup/counterup.min.js"></script>

    <!-- JavaScript Gallery knight -->
    <script src="<?php echo base_url(); ?>asset-landing/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>asset-landing/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>asset-landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url(); ?>asset-landing/js/main.js"></script>
</body>

</html>