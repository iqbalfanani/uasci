<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GoLas</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo base_url()?>assets/img/favicons/manifest.json">
	<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/normalize.css">
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css"> -->
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="<?php echo base_url()?>assets/img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url(); ?>/Home/index"><img src="<?php echo base_url()?>assets/img/logo.png" data-active-url="<?php echo base_url()?>assets/img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#home">Home</a></li>
					<li><a href="#program">Program</a></li>
					<li><a href="#prestasi">Prestasi</a></li>
					<li><a href="#pricing">Pesan Kelas</a></li>
					<?php if ($this->session->userdata('logged_in') == null): ?>
						<li><a href="<?php echo site_url(); ?>/login/index" data-toggle="modal" class="btn btn-blue">Login</a></li>
						<?php else: ?>
						<li><a href="<?php echo site_url(); ?>/login/logout" class="btn btn-blue">Log out</a></li>

					<?php endif ?>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="home">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="light white">Golas!!</h2>
							<h1 class="white typed">The King Of The Fastest Solution.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Kelas</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<h3>Jumat</h3>
									<div class="col-xs-6">
										<h5 class="regular white">Matematika</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">13:00 - 15:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Fisika</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">15:00 - 17:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Kimia</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">17:00 - 19:00</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<h3>Sabtu</h3>
									<div class="col-xs-6">
										<h5 class="regular white">B Indonesia</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">13:00 - 15:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">B Inggris</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">15.00 - 17.00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Biologi</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">17.00 - 19:00</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<h3>Minggu</h3>
									<div class="col-xs-6">
										<h5 class="regular white">Ekonomi</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">08:00 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Geografi</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">10.00 - 12:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Sosiolgi</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">13.00 - 15.00</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Sudah Punya Akun?</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">Daftar Sekarang!</h4>
							<h4 class="white heading small-pt">Mudah dan Gampang</h4>
							<a href="<?php echo site_url(); ?>/login/register" class="btn btn-white-fill expand">Register</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Testimoni</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">Cara mengajarnya keren</h4>
								<h5 class="white heading light author">Adam</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Gurunya sangat ramah</h4>
								<h5 class="white heading light author">Greg</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Jadi tambah pinter</h4>
								<h5 class="white heading light author">Christina</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="program" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Fasilitas</h2>
				<h4 class="light muted">Fasilitas yang tersedia di lembaga kursus kami</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php echo base_url()?>assets/img/icons/heart-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Ruangan</h4>
						<p class="description"> 
							-AC<br>
							-Wifi<br>
							-LCD<br>
							-Terdapat 10 kelas<br>
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php echo base_url()?>assets/img/icons/guru-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Guru</h4>
						<p class="description">
							-Lulusan S1<br>
							-Berpengalaman<br>
							-Terdapat 20 guru<br> 
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php echo base_url()?>assets/img/icons/weight-blue.png" alt="" class="icon"assets/>
						</div>
						<h4 class="heading">Jenjang</h4>
						<p class="description">
							-SD<br>
							-SMP<br>
							-SMA<br>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="prestasi" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Prestasi</h2>
				<h4 class="light muted">We're a dream team!</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('<?php echo base_url()?>assets/img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Kedokteran UI</h3>
								<h5 class="light light-white">Jalur SBMPTN</h5>
							</div>
						</div>
						<img src="<?php echo base_url()?>assets/img/team/team3.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Ben Adamson</h4>
							<h5 class="muted regular">Murid Tahun 2015</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('<?php echo base_url()?>assets/img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Peringkat 1 UN</h3>
								<h5 class="light light-white">Rata-rata Nilai 94</h5>
							</div>
						</div>
						<img src="<?php echo base_url()?>assets/img/team/team1.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Eva Williams</h4>
							<h5 class="muted regular">Murid Tahun 2016</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('<?php echo base_url()?>assets/img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">architect</h3>
								<h5 class="light light-white">Harvard University</h5>
							</div>
						</div>
						<img src="<?php echo base_url()?>assets/img/team/team2.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>John Phillips</h4>
							<h5 class="muted regular">Murid Tahun 2017</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Pesan kelas</h2>
				<h4 class="light white">Diharapkan login sebelum pesan kelas</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h4 class="white">Yoga Pilates</h4>
							<h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>
							<a href="<?php echo site_url(); ?>/login/index"  data-target="#modal1" class="btn btn-white-fill">Login</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">Golas!!enak deh pokoknya belajar disana.</h4>
							<h4 class="light-white light">#fast #smart #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">Golas!!enak deh pokoknya belajar disana.</h4>
							<h4 class="light-white light">#fast #smart #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">Golas!!enak deh pokoknya belajar disana.</h4>
							<h4 class="light-white light">#fast #smart #exercise</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Golas!!</h3>
					<h5 class="light regular light-white">The King Of The Fastest Solution.</h5>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Opening Hours <span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Mon - Fri</h5>
							<h3 class="regular white">9:00 - 22:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sat - Sun</h5>
							<h3 class="regular white">10:00 - 18:00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
	<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> -->
	<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/typewriter.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.onepagenav.js"></script>
	<script src="<?php echo base_url()?>assets/js/main.js"></script>
</body>

</html>
