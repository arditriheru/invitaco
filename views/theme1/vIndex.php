<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pernikahan <?php echo $mp." & ".$mw; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Undangan Pernikahan <?php echo $mp." & ".$mw; ?>" />
	<meta name="keywords" content="Pernikahan <?php echo $mp." & ".$mw; ?>" />
	<meta name="author" content="<?php echo getWebsite(); ?>" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme1/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme1/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme1/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme1/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme1/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme1/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme1/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url(); ?>assets/theme1/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url(); ?>assets/theme1/js/respond.min.js"></script>
<![endif]-->

<audio id="myAudio">
	<source src="https://my.possiblewedding.com/wp-content/uploads/devi-lio.mp3" type="audio/mp3">
	</audio>

	<script>
		var x = document.getElementById("myAudio"); 

		function playAudio() { 
			x.play(); 
		} 

		function pauseAudio() { 
			x.pause(); 
		} 


	</script>

</head>
<body>
	
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.html">Invitaco<strong>.</strong>id</a></div>
					</div>
				</div>
				
			</div>
		</nav>

		<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(<?php echo base_url(); ?>/assets/theme1/images/the-wedding-of.jpg); background-position: 50%;">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box">
								<h2>Undangan Pernikahan</h2>
								<h1><?php echo $mp." &amp; ".$mw ?></h1>
								<h2>Kepada Yth : <?php echo $yth; ?></h2>
								<p><a href="#fh5co-couple" class="btn btn-default btn-sm" onclick="playAudio();">Buka Undangan</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="fh5co-couple">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<img src="<?php echo base_url(); ?>assets/theme1/images/basmallah.png" alt="groom" class="img-fluid" width="40%" height="auto"><br><br>
						<p>Maha suci Allah SWT yang telah menciptakan makhluk-NYA berpasang-pasangan. untuk mengikuti Sunnah Rasul-Mu dalam rangka membentuk keluarga yang sakinah, mawaddah, warahmah. Maka izinkan kami menikahkannya.</p>
					</div>
				</div>
				<div class="couple-wrap animate-box">
					<div class="couple-half">
						<div class="groom">
							<img src="<?php echo base_url(); ?>assets/theme1/images/pengantin2.jpg" alt="groom" class="img-responsive">
						</div>
						<div class="desc-groom">
							<h3><strong><?php echo $mpp; ?></strong></h3>
							<h4>Putra dari:</h4>
							<h4><?php echo $mp_ortu; ?></h4>
						</div>
					</div>
					<p class="heart text-center"><i class="icon-heart2"></i></p>
					<div class="couple-half">
						<div class="bride">
							<img src="<?php echo base_url(); ?>assets/theme1/images/pengantin1.jpg" alt="groom" class="img-responsive">
						</div>
						<div class="desc-bride">
							<h3><strong><?php echo $mwp; ?></strong></h3>
							<h4>Putri dari:</h4>
							<h4><?php echo $mw_ortu; ?></h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-countdown">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box">
								<div class="simply-countdown simply-countdown-one"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-event" class="fh5co-bg" style="background-image:url(<?php echo base_url(); ?>/assets/theme1/images/bg-wedding-event.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>Our Special Events</span>
						<h2>Wedding Events</h2>
					</div>
				</div>
				<div class="row">
					<div class="display-t">
						<div class="display-tc">
							<div class="col-md-10 col-md-offset-1">
								<div class="col-md-6 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>Akad Nikah</h3>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span><?php echo $hari_akad; ?></span>
											<span><?php echo $tgl_akad; ?></span>
										</div>
										<div class="event-col">
											<i class="icon-clock"></i>
											<span><?php echo $jam_akad1; ?></span>
											<span><?php echo $jam_akad2; ?></span>
										</div>
										<h3><?php echo $tempat_akad; ?></h3>
										<p><?php echo $alamat_akad; ?></p>
										<p><a href="<?php echo $map_akad; ?>" class="btn btn-default btn-sm" target="_blank">Get Direction</a></p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>Resepsi</h3>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span><?php echo $hari_resepsi; ?></span>
											<span><?php echo $tgl_resepsi; ?></span>
										</div>
										<div class="event-col">
											<i class="icon-clock"></i>
											<span><?php echo $jam_resepsi1; ?></span>
											<span><?php echo $jam_resepsi2; ?></span>
										</div>
										<h3><?php echo $tempat_resepsi; ?></h3>
										<p><?php echo $alamat_resepsi; ?></p>
										<p><a href="<?php echo $map_resepsi; ?>" class="btn btn-default btn-sm" target="_blank">Get Direction</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-gallery" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>Our Memories</span>
						<h2>Wedding Gallery</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-gallery-list">

							<li class="one-third animate-box" style="background-image: url(<?php echo base_url(); ?>/assets/theme1/images/gallery1.jpg); "> 
							</li>
							<li class="one-third animate-box" style="background-image: url(<?php echo base_url(); ?>/assets/theme1/images/gallery1.jpg); "> 
							</li>
							<li class="one-third animate-box" style="background-image: url(<?php echo base_url(); ?>/assets/theme1/images/gallery1.jpg); "> 
							</li>
						</ul>		
					</div>
				</div>
			</div>
		</div>

<!-- <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(<?php echo base_url(); ?>/assets/theme1/images/img_bg_5.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="display-t">
						<div class="display-tc">
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-users"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Estimated Guest</span>

								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-user"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">We Catter</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-calendar"></i>
									</span>
									<span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Events Done</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-clock"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Hours Spent</span>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- <div id="fh5co-testimonial">
			<div class="container">
				<div class="row">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<span>Best Wishes</span>
							<h2>Friends Wishes</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="wrap-testimony">
								<div class="owl-carousel-fullwidth">
									<div class="item">
										<div class="testimony-slide active text-center">
											<figure>
												<img src="<?php echo base_url(); ?>assets/theme1/images/couple-1.jpg" alt="user">
											</figure>
											<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
											<blockquote>
												<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics"</p>
											</blockquote>
										</div>
									</div>
									<div class="item">
										<div class="testimony-slide active text-center">
											<figure>
												<img src="<?php echo base_url(); ?>assets/theme1/images/couple-2.jpg" alt="user">
											</figure>
											<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
											<blockquote>
												<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
											</blockquote>
										</div>
									</div>
									<div class="item">
										<div class="testimony-slide active text-center">
											<figure>
												<img src="<?php echo base_url(); ?>assets/theme1/images/couple-3.jpg" alt="user">
											</figure>
											<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
											<blockquote>
												<p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- <div id="fh5co-services" class="fh5co-section-gray">
			<div class="container">

				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>We Offer Services</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="feature-left animate-box">
							<span class="icon">
								<i class="icon-calendar"></i>
							</span>
							<div class="feature-copy">
								<h3>We Organized Events</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
							</div>
						</div>

						<div class="feature-left animate-box">
							<span class="icon">
								<i class="icon-image"></i>
							</span>
							<div class="feature-copy">
								<h3>Photoshoot</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
							</div>
						</div>

						<div class="feature-left animate-box">
							<span class="icon">
								<i class="icon-video"></i>
							</span>
							<div class="feature-copy">
								<h3>Video Editing</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
							</div>
						</div>

					</div>

					<div class="col-md-6 animate-box">
						<div class="fh5co-video fh5co-bg" style="background-image: url(images/img_bg_3.jpg); ">
							<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
							<div class="overlay"></div>
						</div>
					</div>

				</div>
			</div>
		</div> -->

		<div id="fh5co-started" class="fh5co-bg" style="background-image:url(<?php echo base_url(); ?>/assets/theme1/images/bg-attending.jpg); background-position: 50%;">
			<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Protokol Kesehatan</h2>
						<p>Demi keamanan dan kenyamanan bersama, para hadirin undangan dihimbau untuk memenuhi beberapa peraturan berikut:</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="display-tc">
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span>
									<img src="<?php echo base_url(); ?>assets/theme1/images/social-distancing.png">
								</span><br>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span>
									<img src="<?php echo base_url(); ?>assets/theme1/images/mask.png">
								</span><br>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span>
									<img src="<?php echo base_url(); ?>assets/theme1/images/wash-your-hands.png">
								</span><br>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span>
									<img src="<?php echo base_url(); ?>assets/theme1/images/thermometer.png">
								</span><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<h2>Wedding Gallery</h2>
						<small class="block">Copyright &copy; <?php echo getYearNow(); ?></small> 
						<p>
							<img src="<?php echo base_url(); ?>assets/theme1/images/watermark.png" alt="groom" class="img-fluid" width="40%" height="auto">
						</p>
					</div>
				</div>

			</div>
		</footer>

		
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/theme1/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url(); ?>assets/theme1/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url(); ?>assets/theme1/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url(); ?>assets/theme1/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?php echo base_url(); ?>assets/theme1/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?php echo base_url(); ?>assets/theme1/js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="<?php echo base_url(); ?>assets/theme1/js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url(); ?>assets/theme1/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/theme1/js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/theme1/js/simplyCountdown.min.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url(); ?>assets/theme1/js/main.js"></script>

	<script>
		simplyCountdown('.simply-countdown', {
			year: <?php echo $counter_thn.",month:".$counter_bln.",day:".$counter_tgl; ?>
		});
	</script>

</body>
</html>

