<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.png" type="image/png">
	<title>Alif Aqiqah & Catering</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/flaticon/flaticon.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
</head>
<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container box_1620">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item active"><a class="nav-link" href="<?php echo base_url() ?>">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>assets/about-us.html">About</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>assets/services.html">Services</a>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>assets/price.html">Pricing</a>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>assets/elements.html">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>assets/blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>assets/single-blog.html">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>assets/contact.html">Contact</a></li>
						</ul>
						<!-- <ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="tickets_btn">Free Trial</a></li>
						</ul> -->
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="banner_content">
							<h2 style="text-transform: capitalize;">Alif Aqiqah & Catering</h2>
							<p>Layanan Aqiqah Sesuai Sunnah, Mudah dan Murah.</p>
							<!-- <a class="banner_btn" href="#">Get Started</a>
							<a class="banner_btn2" href="#">Download</a> -->
						</div>
					</div>
					<div class="col-lg-7">
						<div class="home_left_img">
							<img class="img-rotator" src="<?php echo base_url() ?>assets/img/banner/rotate.png" alt="">
							<img class="img-fluids" src="<?php echo base_url() ?>assets/img/banner/home-left-1.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Work Area =================-->
	<section class="work_area p_120">
		<div class="container">
			<div class="main_title">
				<h2>Kenapa Memilih Kami</h2>
				<p>
					Alif Aqiqah terus berkomitmen terhadap kepuasan konsumen dengan menjaga kualitas pelayanan dan pengolahan (masakan) yang sehat serta menjunjung tinggi nilai-nilai kejujuran dalam bermuamalah.
				</p>
			</div>
			<div class="work_inner row">
				<?php foreach ($unggul as $u) { ?>
					<div class="col-lg-3">
						<div class="work_item">
							<i class="lnr <?php echo $u->linearicon ?>"></i>
							<a href="#">
								<h4><?php echo $u->judul ?></h4>
							</a>
							<p class="read-more1" style="text-align: justify;">
								<?php echo $u->konten ?>
							</p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!--================End Work Area =================-->

	<!--================Made Life Area =================-->
	<section class="made_life_area p_120">
		<div class="container">
			<div class="made_life_inner">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<!-- <li class="nav-item">
						<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Easy to use</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Unlimited Colors</a>
					</li> -->
					<?php foreach ($lokasi as $l) { ?>
						<li class="nav-item">
							<a class="nav-link <?php if ($l->aktif == 1) {
													echo "active";
												} ?>" id="<?php echo $l->url ?>-tab" data-toggle="tab" href="#<?php echo $l->url ?>" role="tab" aria-controls="<?php echo $l->url ?>" aria-selected="false"><?php echo $l->nama ?></a>
						</li>
					<?php } ?>
				</ul>
				<div class="tab-content" id="myTabContent">
					<?php foreach ($lokasi as $l) { ?>
						<div class="tab-pane fade <?php if ($l->aktif == 1) {
														echo "show active";
													} ?>" id="<?php echo $l->url ?>" role="tabpanel" aria-labelledby="<?php echo $l->url ?>-tab">
							<div class="main_title">
								<h2>Pilihan Paket <?php echo $l->nama ?></h2>
							</div>
							<div class="price_inner row">
								<?php foreach ($paket as $p) {
									if ($p->lokasi == $l->id) { ?>
										<div class="col-lg-3">
											<div class="price_item">
												<div class="price_head<?php if ($p->best_seller == 1) {
																			echo "_best";
																		} ?>">
													<h4 style="text-transform: capitalize;"><?php echo $p->nama ?></h4>
												</div>
												<div class="price_body">
													<ul class="list">
														<li style="text-transform: capitalize;<?php if ($p->best_seller == 1) {
																									echo " color: #CAAA29;";
																								} else {
																									echo " color: #00b06a;";
																								} ?>"><strong><?php echo $p->hewan ?></strong></li>
														<li style="text-transform: capitalize;"><?php echo $p->sate ?> sate tusuk</li>
														<li style="text-transform: capitalize;"><?php echo $p->gulai ?> porsi gulai</li>
														<li style="text-transform: capitalize;">
															<?php if ($p->antar == 1) {
																echo "gratis antar";
															} else {
																echo "_____";
															} ?>
														</li>
														<li style="text-transform: capitalize;">
															<?php if ($p->distribusi == 1) {
																echo "gratis distribusi";
															} else {
																echo "_____";
															} ?>
														</li>
														<li style="text-transform: capitalize;">
															<?php if ($p->sertifikat == 1) {
																echo "+ sertifikat aqiqah";
															} else {
																echo "_____";
															} ?>
														</li>
														<li style="text-transform: capitalize;">
															<?php if ($p->risalah == 1) {
																echo "+ risalah aqiqah";
															} else {
																echo "_____";
															} ?>
														</li>
													</ul>
												</div>
												<div class="price_footer<?php if ($p->best_seller == 1) {
																			echo "_best";
																		} ?>">
													<?php
													$harga = $p->harga / 1000000;
													?>
													<h3 style="text-transform: capitalize;"><span class="dlr">Rp. </span> <?php echo number_format($harga, 1, ",", ".") ?> <span class="month">juta</span></h3>
													<a class="main_btn" href="<?php echo base_url() . $p->id ?>">Pesan</a>
												</div>
											</div><br>
										</div>
								<?php }
								} ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!--================End Made Life Area =================-->

	<!--================Screen Area =================-->
	<section class="screen_area text-center p_120">
		<!-- <section class="screen_area text-center"> -->
		<div class="container">
			<div class="main_title">
				<h2>Dokumentasi</h2>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
			</div>
			<!-- <img class="img-fluid" src="<?php echo base_url() ?>assets/img/banner/home-left-1.png" alt=""> -->
			<div class="row gallery-item">
				<?php foreach ($dokumentasi as $d) { ?>
					<div class="col-md-4">
						<!-- <a href="#" class="img-gal"> -->
						<div class="single-gallery-image" style="background: url(<?php echo base_url() ?>assets/img/elements/<?php echo $d->file ?>);"></div>
						<!-- </a> -->
					</div>
				<?php } ?>
			</div>

		</div>
	</section>
	<!--================End Screen Area =================-->

	<!--================Made Life Area =================-->
	<!-- <section class="made_life_area p_120">
		<div class="container">
			<div class="made_life_inner">
				<div class="row made_life_text">
					<div class="col-lg-6">
						<div class="left_side_text">
							<h3>We’ve made a life <br />that will change you</h3>
							<h6>We are here to listen from you deliver exellence</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
							<a class="main_btn" href="#">Get Started Now</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="chart_img">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/img/browser.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--================End Made Life Area =================-->

	<!--================Price Area =================-->
	<!-- <section class="price_area p_120">
		<div class="container">
			<div class="main_title">
				<h2>Choose Your Price Plan</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
			</div>
			<div class="price_inner row">
				<div class="col-lg-4">
					<div class="price_item">
						<div class="price_head">
							<h4>Real Basic</h4>
						</div>
						<div class="price_body">
							<ul class="list">
								<li><a href="#">2.5 GB Space</a></li>
								<li><a href="#">Secure Online Transfer</a></li>
								<li><a href="#">Unlimited Styles</a></li>
								<li><a href="#">Customer Service</a></li>
							</ul>
						</div>
						<div class="price_footer">
							<h3><span class="dlr">$</span> 39 <span class="month">Per <br />Month</span></h3>
							<a class="main_btn" href="#">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="price_item">
						<div class="price_head">
							<h4>Real Standard</h4>
						</div>
						<div class="price_body">
							<ul class="list">
								<li><a href="#">10 GB Space</a></li>
								<li><a href="#">Secure Online Transfer</a></li>
								<li><a href="#">Unlimited Styles</a></li>
								<li><a href="#">Customer Service</a></li>
							</ul>
						</div>
						<div class="price_footer">
							<h3><span class="dlr">$</span> 69 <span class="month">Per <br />Month</span></h3>
							<a class="main_btn" href="#">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="price_item">
						<div class="price_head">
							<h4>Real Ultimate</h4>
						</div>
						<div class="price_body">
							<ul class="list">
								<li><a href="#">Unlimited Space</a></li>
								<li><a href="#">Secure Online Transfer</a></li>
								<li><a href="#">Unlimited Styles</a></li>
								<li><a href="#">Customer Service</a></li>
							</ul>
						</div>
						<div class="price_footer">
							<h3><span class="dlr">$</span> 99 <span class="month">Per <br />Month</span></h3>
							<a class="main_btn" href="#">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--================End Price Area =================-->

	<!--================Testimonials Area =================-->
	<section class="testimonials_area p_120">
		<div class="container">
			<div class="main_title">
				<h2>Feedback from Customers</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
			</div>
			<div class="testi_slider owl-carousel">
				<div class="item">
					<div class="testi_item">
						<div class="media">
							<div class="d-flex">
								<img src="<?php echo base_url() ?>assets/img/testimonials/testi-1.png" alt="">
							</div>
							<div class="media-body">
								<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
								<h4>Mark Alviro Wiens</h4>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<div class="media">
							<div class="d-flex">
								<img src="<?php echo base_url() ?>assets/img/testimonials/testi-2.png" alt="">
							</div>
							<div class="media-body">
								<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
								<h4>Mark Alviro Wiens</h4>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<div class="media">
							<div class="d-flex">
								<img src="<?php echo base_url() ?>assets/img/testimonials/testi-1.png" alt="">
							</div>
							<div class="media-body">
								<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
								<h4>Mark Alviro Wiens</h4>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<div class="media">
							<div class="d-flex">
								<img src="<?php echo base_url() ?>assets/img/testimonials/testi-2.png" alt="">
							</div>
							<div class="media-body">
								<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
								<h4>Mark Alviro Wiens</h4>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<div class="media">
							<div class="d-flex">
								<img src="<?php echo base_url() ?>assets/img/testimonials/testi-1.png" alt="">
							</div>
							<div class="media-body">
								<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
								<h4>Mark Alviro Wiens</h4>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<div class="media">
							<div class="d-flex">
								<img src="<?php echo base_url() ?>assets/img/testimonials/testi-2.png" alt="">
							</div>
							<div class="media-body">
								<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
								<h4>Mark Alviro Wiens</h4>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Testimonials Area =================-->

	<!--================Made Life Area =================-->
	<section class="made_life_area made_white p_120">
		<!-- <section class="made_life_area made_white"> -->
		<div class="container">
			<div class="made_life_inner">
				<div class="row made_life_text">
					<div class="col-lg-6">
						<div class="chart_img">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/img/banner/home-left-1.png" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="left_side_text">
							<h3>We’ve made a life <br />that will change you</h3>
							<h6>We are here to listen from you deliver exellence</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
							<a class="main_btn" href="#">Get Started Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Made Life Area =================-->

	<!--================Impress Area =================-->
	<section class="impress_area p_120">
		<div class="container">
			<div class="impress_inner">
				<h2>Got Impressed to our features?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				<a class="banner_btn2" href="#">Request Free Demo</a>
			</div>
		</div>
	</section>
	<!--================End Impress Area =================-->

	<!--================Footer Area =================-->
	<footer class="footer_area p_120">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h3>About Me</h3>
						</div>
						<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</aside>
				</div>
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget news_widget">
						<div class="f_title">
							<h3>Newsletter</h3>
						</div>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
									<button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</aside>
				</div>
				<div class="col-lg-2">
					<aside class="f_widget social_widget">
						<div class="f_title">
							<h3>Follow Me</h3>
						</div>
						<p>Alif Aqiqah Bangka Belitung</p>
						<ul class="list">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<p> Alif Aqiqah Bandung</p>
						<ul class="list">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->





	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/stellar.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/isotope/isotope-min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/counter-up/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?php echo base_url() ?>assets/js/gmaps.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/theme.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var readMoreHTML = $(".read-more1").html();
			var lessText = readMoreHTML.substr(0, 100);

			if (readMoreHTML.length > 100) {
				$(".read-more1").html(lessText).append("<a href='' class='read-more-link'> Show More</a>");
			} else {
				$("read-more1").html(readMoreHTML);
			}

			$("body").on("click", ".read-more-link", function(event) {
				event.preventDefault();
				$(this).parent(".read-more1").html(readMoreHTML).append("<a href='' class='show-less-link'> Show Less</a>");
			});

			$("body").on("click", ".show-less-link", function() {
				event.preventDefault();
				$(this).parent(".read-more1").html(readMoreHTML.substr(0, 100)).append("<a href='' class='read-more-link'> Show More</a>");
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			var readMoreHTML = $(".read-more2").html();
			var lessText = readMoreHTML.substr(0, 100);

			if (readMoreHTML.length > 100) {
				$(".read-more2").html(lessText).append("<a href='' class='read-more-link'> Show More</a>");
			} else {
				$("read-more2").html(readMoreHTML);
			}

			$("body").on("click", ".read-more-link", function(event) {
				event.preventDefault();
				$(this).parent(".read-more2").html(readMoreHTML).append("<a href='' class='show-less-link'> Show Less</a>");
			});

			$("body").on("click", ".show-less-link", function() {
				event.preventDefault();
				$(this).parent(".read-more2").html(readMoreHTML.substr(0, 100)).append("<a href='' class='read-more-link'> Show More</a>");
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			var readMoreHTML = $(".read-more3").html();
			var lessText = readMoreHTML.substr(0, 100);

			if (readMoreHTML.length > 100) {
				$(".read-more3").html(lessText).append("<a href='' class='read-more-link'> Show More</a>");
			} else {
				$("read-more3").html(readMoreHTML);
			}

			$("body").on("click", ".read-more-link", function(event) {
				event.preventDefault();
				$(this).parent(".read-more3").html(readMoreHTML).append("<a href='' class='show-less-link'> Show Less</a>");
			});

			$("body").on("click", ".show-less-link", function() {
				event.preventDefault();
				$(this).parent(".read-more3").html(readMoreHTML.substr(0, 100)).append("<a href='' class='read-more-link'> Show More</a>");
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			var readMoreHTML = $(".read-more4").html();
			var lessText = readMoreHTML.substr(0, 100);

			if (readMoreHTML.length > 100) {
				$(".read-more4").html(lessText).append("<a href='' class='read-more-link'> Show More</a>");
			} else {
				$("read-more4").html(readMoreHTML);
			}

			$("body").on("click", ".read-more-link", function(event) {
				event.preventDefault();
				$(this).parent(".read-more4").html(readMoreHTML).append("<a href='' class='show-less-link'> Show Less</a>");
			});

			$("body").on("click", ".show-less-link", function() {
				event.preventDefault();
				$(this).parent(".read-more4").html(readMoreHTML.substr(0, 100)).append("<a href='' class='read-more-link'> Show More</a>");
			});
		});
	</script>
</body>

</html>