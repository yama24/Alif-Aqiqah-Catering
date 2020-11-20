	<!--================Footer Area =================-->
	<footer class="footer_area p_120">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h3>Tentang Kami</h3>
						</div>
						<p>Kami adalah salah satu perusahaan provider Layanan Aqiqah dan Catering yang terbesar Pulau Bangka, khususnya untuk daerah Pangkalpinang, Sungailiat dan Seluruh Kabupaten Bangka pada umumnya.

							Berdiri sejak tahun 2012, kami berkomitmen untuk memberikan layanan aqiqah yang terbaik.</p>
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Alif Aqiqah Team</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</aside>
				</div>
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget news_widget">
						<div class="f_title">
							<h3>Buletin</h3>
						</div>
						<p>Selalu terhubung dengan kami</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Masukan email Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
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

	<!--================Contact Success and Error message Area =================-->
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Thank you</h2>
					<p>Your message is successfully sent...</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals error -->

	<div id="error" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Sorry !</h2>
					<p> Something went wrong </p>
				</div>
			</div>
		</div>
	</div>
	<!--================End Contact Success and Error message Area =================-->






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
	<script src="<?php echo base_url() ?>assets/js/theme.js"></script>
	<!-- contact js -->
	<script src="<?php echo base_url() ?>assets/js/jquery.form.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/contact.js"></script>

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