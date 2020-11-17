
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
	<section class="made_life_area p_120">
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
	</section>
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

