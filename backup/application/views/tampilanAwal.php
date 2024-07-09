
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Priangan-pusat oleh-oleh dan camilan di kota bogor</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Tasty Burger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

    <!-- Custom-Files -->
    
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="<?php echo base_url();?>/assets/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- css slider -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="<?php echo base_url();?>/assets/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- header -->
	<header id="home">
		<!-- top-bar -->
		<div class="top-bar py-2 border-bottom">
			<div class="container">
				<div class="row middle-flex">
					<div class="col-xl-7 col-md-5 top-social-agile mb-md-0 mb-1 text-lg-left text-center">
						<div class="row">
							<div class="col-xl-3 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-map-marker mr-2"></span>Bogor
								</p>
							</div>
							<div class="col-xl-3 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-phone mr-2"></span>(0251) – 8253405
								</p>
							</div>
							<div class="col-xl-6"></div>
						</div>
					</div>
					<div class="col-xl-5 col-md-7 top-social-agile text-md-right text-center pr-sm-0 mt-md-0 mt-2">
						<div class="row middle-flex">
							
							<div class="col-lg-7 col-8 social-grid-w3">
								<!-- social icons -->
								<ul class="top-right-info">
									<li>
										<p>Follow Us:</p>
									</li>
									<li class="facebook-w3">
										<a href="#facebook">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li class="twitter-w3">
										<a href="#twitter">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
									<li class="google-w3">
										<a href="#google">
											<span class="fa fa-google-plus"></span>
										</a>
									</li>
									<li class="dribble-w3">
										<a href="#dribble">
											<span class="fa fa-dribbble"></span>
										</a>
									</li>
								</ul>
								<!-- //social icons -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
	<!-- navigation -->
	<div class="main-top py-1">
		<div class="container">
			<div class="nav-content">
				<!-- logo -->
				<h1>
					<a id="logo" class="logo" href="<?php echo base_url(); ?>c_web/tampilanHome">
						<img src="<?php echo base_url();?>/assets/images/logo.png" alt="" class="img-fluid"></a>
				</h1>
				<!-- //logo -->
				<!-- nav -->
				<div class="nav_web-dealingsls">
					<nav>
						<label for="drop" class="toggle">Menu</label>
						<input type="checkbox" id="drop" />
						<ul class="menu">
							<li><a href="<?php echo base_url(); ?>c_web/tampilanAbout">About Us</a></li>
							<li><a href="<?php echo base_url(); ?>c_web/tampilanProduk">Produk</a></li>
							<li><a href="<?php echo base_url(); ?>c_web/tampilanHow">How to buy</a></li>
							<li><a href="<?php echo base_url(); ?>c_web/tampilanLokasi">Store Location</a></li>
							<li><a href="<?php echo base_url(); ?>c_web/tampilanKontak">Contact Us</a></li>
							
						</ul>
					</nav>
				</div>
				<!-- //nav -->
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- //header 2 -->

	<!-- banner -->
	<div class="baneer-w3ls">
		<div class="row no-gutters">
			<div class="col-xl-5 col-lg-6">
				<div class="banner-left-w3">
					<div class="container">
						<div class="banner-info_agile_w3ls">
							<h5>Toko oleh-oleh bogor</h5>
							<h3 class="text-da mb-4">Priangan <span>Sari</span> </h3>
							<a href="<?php echo base_url(); ?>c_web/tampilanProduk" class="button-w3ls active mt-5">Read More
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
							<a href="<?php echo base_url(); ?>c_web/tampilanHow" class="button-w3ls mt-5 ml-2">Order Now
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 callbacks_container">
				<!-- banner slider -->
				<div class="csslider infinity" id="slider1">
					<input type="radio" name="slides" checked="checked" id="slides_1" />
					<input type="radio" name="slides" id="slides_2" />
					<input type="radio" name="slides" id="slides_3" />
					<ul class="banner_slide_bg">
					<?php 
						foreach($banner as $a){ 
					?>
						<li>
							<div class="">
							<img src="<?php echo base_url();?>/assets/images/foto/<?php echo "$a[fotoBanner]"?>" class="" alt="User Image" height="400px">
							</div>
						</li>
					<?php 
						} 
					?>
					</ul>
					<div class="arrows">
						<label for="slides_1"></label>
						<label for="slides_2"></label>
						<label for="slides_3"></label>
					</div>
					<div class="navigation">
						<div>
							<label for="slides_1"></label>
							<label for="slides_2"></label>
							<label for="slides_3"></label>
						</div>
					</div>
				</div>
				<!-- //banner slider -->
			</div>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

	<!-- about -->
	<!-- //about -->

	<!-- Foto IG -->
	<section class="blog_w3ls py-5" style="background: url(../images/bg3.jpg) no-repeat center;">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<p class="w3ls-title-sub">Highlight</p>
				<h3 class="w3ls-title">Feed From <span>Instagram</span></h3>
			</div>
			<div class="row">
				<!-- blog grid -->
				<?php 
				foreach($instagram as $i){
				?>
				<div class="col-lg-4 col-md-6">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="<?php echo "$i[linkIg]" ?>">
								<img class="card-img-bottom" src="<?php echo base_url();?>/assets/images/foto/<?php echo "$i[fotoIg]" ?>" alt="Card image cap">
							</a>
						</div>
						<div class="card-body border border-top-0">
							<h5 class="blog-title card-title m-0"><a href="<?php echo "$i[linkIg]" ?>"><?php echo "$i[namaIg]" ?></a></h5>
							
						</div>
					</div>
				</div>
				<?php 
				}
				?>
				<!-- //blog grid -->
				
				<!-- //blog grid -->
			</div>
		</div>
	</section>
	<!-- //Foto IG -->

	<!-- footer -->
	<footer class="py-5">
		<div class="container py-xl-4">
			<div class="row footer-top">
				<div class="col-lg-4 footer-grid_section_1its footer-text">
					<!-- logo -->
					<h2>
						<a class="logo text-wh" href="index.html">
							<img src="<?php echo base_url();?>/assets/images/logo.png" alt="" class="img-fluid"></a>
					</h2>
					<!-- //logo -->
					<p class="mt-lg-4 mt-3 mb-lg-5 mb-4">Tokoh Oleh Oleh Bogor</p>
					<!-- social icons -->
					<ul class="top-right-info">
						<li>
							<p>Follow As:</p>
						</li>
						<li class="facebook-w3">
							<a href="#facebbok">
								<span class="fa fa-facebook-f"></span>
							</a>
						</li>
						<li class="twitter-w3">
							<a href="#twitter">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li class="google-w3">
							<a href="#google">
								<span class="fa fa-google-plus"></span>
							</a>
						</li>
						<li class="dribble-w3">
							<a href="#dribble">
								<span class="fa fa-dribbble"></span>
							</a>
						</li>
					</ul>
					<!-- //social icons -->
				</div>
				<div class="col-lg-4 footer-grid_section_1its my-lg-0 my-sm-4 my-4">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="footer-text mt-4">
						<p>Address : Jl.Raya Puncak Cibogo No.53 Cipayung – Bogor</p>
						<p class="my-2">Phone : (0251) – 8253405</p>
						<p>Email : <a href="mailto:info@example.com">info@priangansari.co.id</a></p>
					</div>
					<div class="footer-title mt-4 pt-md-2">
						<h3>Delivery Order</h3>
					</div>
					<a href="https://api.whatsapp.com/send?phone=62821111111&text=Halo%20Priangan%20Sari"><img src="<?php echo base_url();?>/assets/images/deliveryorder.png" alt=""></a>
					</div>
				<div class="col-lg-4 footer-grid_section_1its">
					<div class="footer-title">
						<h3>Request Info</h3>
					</div>
					<div class="info-form-right mt-4 p-0">
						<form action="#" method="post">
							<div class="row">
								<div class="col-lg-6 form-group mb-2 pr-lg-1">
									<input type="text" class="form-control" name="Name" placeholder="Name" required="">
								</div>
								<div class="col-lg-6 form-group mb-2 pl-lg-1">
									<input type="text" class="form-control" name="Phone" placeholder="Phone"
										required="">
								</div>
							</div>
							<div class="form-group mb-2">
								<input type="email" class="form-control" name="Email" placeholder="Email" required="">
							</div>
							<div class="form-group mb-2">
								<textarea name="Comment" class="form-control" placeholder="Comment"
									required=""></textarea>
							</div>
							<button type="submit" class="btn submit-contact ml-auto">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p>© 2019 Priangan Sari | Design by
			<a href="http://instagram.com/ragafur"> RAG.</a>
		</p>
	</div>
	<!-- //copyright -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-level-up" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->

</body>

</html>