<!doctype html>
<html lang="en" id="home">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?= $this->generalset->web()->site_description; ?>">
		<link rel="icon" type="image/png" href="<?= base_url() ?>/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?= base_url() ?>/favicon-16x16.png" sizes="16x16" />
  		<meta name="author" content="<?= $this->generalset->web()->site_author; ?>">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Awesom Font -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
		<!-- My CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/');?>css/mystyle.css">
		<!-- lightbox css -->
		<link rel="stylesheet" href="<?= base_url('assets/');?>css/lightbox.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/');?>css/animate.css">
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<title><?= $title; ?></title>
	</head>
	<body>
	<div class="pesanNotif" data-title="<?= $this->session->flashdata('title'); ?>" data-pesan="<?= $this->session->flashdata('pesan'); ?>" data-error="<?= $this->session->flashdata('type'); ?>">
	</div>

