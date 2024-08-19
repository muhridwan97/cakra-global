<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CDE - Learning Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>asset-landing/img/trucking.jpg" rel="icon">

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
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>Bakrie Tower Epicentrum</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>daftar@cde-learningcenter.id</small>
                <small class="ms-4"><i class="fa fa-mobile-alt text-primary me-2"></i>+6281210006323</small>
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
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3"
                        href="https://www.instagram.com/cde_learning/" target="_blank">
                        <small class="fab fa-instagram text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-youtube text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3"
                        href="https://api.whatsapp.com/send/?phone=6281210006323&text&type=phone_number&app_absent=0"
                        target="_blank">
                        <small class="fab fa-whatsapp text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Artikel Start -->
    <section class="news-section section-padding wow fadeInUp" data-wow-delay="0.1s" id="artikel" style="margin-top:100px">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mb-5">
                    <h2>Article</h2>
                </div>

                <div class="col-lg-7 col-12">
                    <?php foreach($artikel as $index => $item) { ?>
                        <div class="news-block">
                        <div class="news-block-top">
                            <a href="<?php echo base_url(); ?>c_web/artikelDetail/<?=$item['id']?>">
                                <img src="<?php echo base_url(); ?>assets/images/foto/<?=$item['foto']?>"
                                    class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        <?php $date = new DateTime($item['created_at']);
                                        $formattedDate = $date->format('F j, Y');
                                        echo $formattedDate;
                                        ?>
                                    </p>
                                </div>

                                <div class="news-block-author mx-5">
                                    <p>
                                        <i class="bi-person custom-icon me-1"></i>
                                        By <?= $item['created_name']; ?>
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-title mb-2">
                                <h4><a href="<?php echo base_url(); ?>c_web/artikelDetail/<?= $item['id']?>" class="news-block-title-link"><?= $item['judul']; ?></a></h4>
                            </div>

                            <div class="news-block-body" style="text-align: justify;">
                                <p><?php // Pecah string menjadi array kata-kata
                                $words = explode(' ', $item['isi']);

                                // Ambil 20 kata pertama
                                $first20Words = array_slice($words, 0, 20);

                                // Gabungkan kembali menjadi string
                                $shortenedString = implode(' ', $first20Words);

                                echo $shortenedString;?></p>
                                    
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bakrie Tower Lt.3 Unit 3A</p>
                    <p style="text-align: justify;">Jl. Epicentrum Utama Raya No.2
                        Kuningan, Setiabudi,
                        Jakarta Selatan 12940.</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.337060755108!2d106.8319136!3d-6.2192067!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f65ff69f6d%3A0xe31b5c3ce0b14b41!2sBakrie%20Tower!5e0!3m2!1sid!2sid!4v1719148955545!5m2!1sid!2sid"
                        width="320" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="d-flex pt-2">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Tautan</h4>
                    <a class="btn btn-link" href="tentangkami">Tentang Kami</a>
                    <a class="btn btn-link" href="tujuan">Tujuan</a>
                    <a class="btn btn-link" href="produkpelatihan">Produk Pelatihan</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Tautan</h4>
                    <a class="btn btn-link" href="asesor">Pengajar & Asesor</a>
                    <a class="btn btn-link" href="hubungikami">Hubungi Kami</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Informasi</h4>
                    <p class="mb-2"><i class="fa fa-globe me-3"></i><a
                            href="http://cde-learningcenter.id/">cde-learningcenter.id</a></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>daftar@cde-learningcenter.id</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6281210006323</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2"
                            href="https://api.whatsapp.com/send/?phone=6281210006323&text&type=phone_number&app_absent=0"
                            target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2"
                            href="https://www.instagram.com/cde_learning/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                    </div>
                    <div class="position-relative w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="index">CDE Learning Center</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Website By : RAG
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


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