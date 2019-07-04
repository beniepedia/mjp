<!doctype html>
<html lang="en" id="home">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Awesom Font -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- My CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/');?>css/mystyle.css">
		<!-- lightbox css -->
		<link rel="stylesheet" href="<?= base_url('assets/');?>css/lightbox.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/');?>css/animate.css">
		<link href="<?= base_url('assets/');?>/js/toast/toastr.min.css" rel="stylesheet" />
		<title><?= $title; ?></title>
	</head>
	<body>
		<?php if($this->uri->segment(1) == 'home') : ?>
		<!-- Navbar Primary -->
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#"><img src="<?= base_url('assets/') ?>img/logo.jpg">ID MJ-PARFUME</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" href="#home"><i
					class="fa fa-home" aria-hidden="true"></i>Beranda</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" href="#profile"><i
					class="fa fa-user-circle-o" aria-hidden="true"></i>Profil</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s" href="#price-Plan"><i
					class="fa fa-credit-card" aria-hidden="true"></i>Harga</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s" href="#Galery"><i
					class="fa fa-picture-o" aria-hidden="true"></i>Galeri</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s" href="#Testimonial"><i
					class="fa fa-comments" aria-hidden="true"></i>Peluang Usaha</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s" href="<?= base_url('kontak'); ?>"><i
					class="fa fa-address-book-o" aria-hidden="true"></i>Kontak</a>
					<!-- <a class="nav-item btn btn-primary tombol" href="#">Join Reseller</a> -->
				</div>
			</div>
		</nav>
		<!-- Navbar Secondary -->
		<div class="d-none d-lg-block">
			<div class="Scrolling fixed-top">
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
					<a class="navbar-brand" href="#home"><img src="<?= base_url('assets/') ?>img/logo.jpg">ID MJ-PARFUME</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<div class="navbar-nav ml-auto">
							<a class="nav-item nav-link active" href="#home"><i class="fa fa-home" aria-hidden="true"></i>Beranda</a>
							<a class="nav-item nav-link" href="#profile"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Profil</a>
							<a class="nav-item nav-link" href="#price-Plan"><i class="fa fa-credit-card" aria-hidden="true"></i>Harga</a>
							<a class="nav-item nav-link" href="#Galery"><i class="fa fa-picture-o" aria-hidden="true"></i>Galeri</a>
							<a class="nav-item nav-link" href="#Testimonial"><i class="fa fa-comments" aria-hidden="true"></i>Peluang Usaha</a>
							<a class="nav-item nav-link" href="<?= base_url('kontak'); ?>"><i class="fa fa-address-book-o" aria-hidden="true"></i>Kontak</a>
							<!-- <a class="nav-item btn btn-primary tombol" href="#">Join Reseller</a> -->
						</div>
					</div>
				</div>
			</div>
		</nav>
		<?php else : ?>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#"><img src="<?= base_url('assets/') ?>img/logo.jpg">ID MJ-PARFUME</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" href="<?= base_url('home'); ?>"><i
					class="fa fa-home" aria-hidden="true"></i>Beranda</a>
<!-- 					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" href="#profile"><i
					class="fa fa-user-circle-o" aria-hidden="true"></i>Profil</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s" href="#price-Plan"><i
					class="fa fa-credit-card" aria-hidden="true"></i>Harga</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s" href="#Galery"><i
					class="fa fa-picture-o" aria-hidden="true"></i>Galeri</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s" href="#Testimonial"><i
					class="fa fa-comments" aria-hidden="true"></i>Peluang Usaha</a> -->
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s" href="<?= base_url('kontak'); ?>"><i
					class="fa fa-address-book-o" aria-hidden="true"></i>Kontak</a>
					<!-- <a class="nav-item btn btn-primary tombol" href="#">Join Reseller</a> -->
				</div>
			</div>
		</nav>
		<?php endif; ?>