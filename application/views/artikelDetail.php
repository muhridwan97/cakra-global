<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cakra Global Logistik</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


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

    <link href="<?php echo base_url(); ?>asset-landing/css/templatemo-kind-heart-charity.css" rel="stylesheet">

    <!-- Template Gallery knight -->
    <link href="<?php echo base_url(); ?>asset-landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset-landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset-landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

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
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>Kebon Bawang</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>axel.rizky@cakralogistic.co.id</small>
                <small class="ms-4"><i class="fa fa-mobile-alt text-primary me-2"></i>+62-2121-6977-04</small>
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
                    <a href="<?php echo base_url(); ?>#artikel" class="nav-item nav-link active">Artikel</a>
                    <a href="<?php echo base_url(); ?>c_web/hubungiKami" class="nav-item nav-link">Hubungi Kami</a>
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

    <!-- Artikel Start -->
    <section class="news-section section-padding wow fadeInUp" data-wow-delay="0.1s" id="artikel"
        style="margin-top:100px">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mb-5">
                    <h2>Detail Article</h2>
                </div>

                <div class="col-lg-7 col-12">
                    <div class="news-block">
                        <div class="news-block-top">
                            <a href="<?php echo base_url(); ?>c_web/artikelDetail/<?= $artikel['id']; ?>">
                                <img src="<?php echo base_url(); ?>assets/images/foto/<?=$artikel['foto']?>"
                                    class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        <?php $date = new DateTime($artikel['created_at']);
                                        $formattedDate = $date->format('F j, Y');
                                        echo $formattedDate;
                                        ?>
                                    </p>
                                </div>

                                <div class="news-block-author mx-5">
                                    <p>
                                        <i class="bi-person custom-icon me-1"></i>
                                        By <?= $artikel['created_name']; ?>
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-title mb-2">
                                <h4><a href="<?php echo base_url(); ?>c_web/artikelDetail/<?= $artikel['id']; ?>" class="news-block-title-link"><?= $artikel['judul']; ?></a></h4>
                            </div>

                            <div class="news-block-body">
                                <div id="lipsum" style="text-align: justify;">
                                <?= $artikel['isi']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mx-auto">
                    <h5 class="mt-5 mb-3">Popular Article</h5>
                    
                    <?php foreach($artikel_popular as $index => $item) { ?>
                    <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-image-wrap">
                            <a href="<?php echo base_url(); ?>c_web/artikelDetail/<?= $item['id'] ?>">
                                <img src="<?php echo base_url(); ?>assets/images/foto/<?=$item['foto']?>"
                                    class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <h6><a href="<?php echo base_url(); ?>c_web/artikelDetail/<?= $item['id'] ?>" class="news-block-title-link"><?= $item['judul'] ?></a>
                                </h6>
                            </div>

                            <div class="news-block-date">
                                <p>
                                    <i class="bi-calendar4 custom-icon me-1"></i>
                                        <?php $date = new DateTime($item['created_at']);
                                        $formattedDate = $date->format('F j, Y');
                                        echo $formattedDate;
                                        ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    <h5 class="mt-5 mb-3">Lastest Article</h5>

                    <?php foreach($artikel_last as $index => $item) { ?>
                    <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-image-wrap">
                            <a href="<?php echo base_url(); ?>c_web/artikelDetail/<?= $item['id'] ?>">
                                <img src="<?php echo base_url(); ?>assets/images/foto/<?=$item['foto']?>"
                                    class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <h6><a href="<?php echo base_url(); ?>c_web/artikelDetail/<?= $item['id'] ?>" class="news-block-title-link"><?= $item['judul'] ?></a>
                                </h6>
                            </div>

                            <div class="news-block-date">
                                <p>
                                    <i class="bi-calendar4 custom-icon me-1"></i>
                                        <?php $date = new DateTime($item['created_at']);
                                        $formattedDate = $date->format('F j, Y');
                                        echo $formattedDate;
                                        ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Artikel End -->
  
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