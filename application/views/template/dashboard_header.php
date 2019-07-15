<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title><?= $title; ?></title>
		<!-- Custom fonts for this template-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<!-- Custom styles for this template-->
		<link href="<?= base_url('assets/backend/') ?>css/sb-admin-2.min.css" rel="stylesheet">
		<style>
			.label-judul{
				font-weight: bold;
			}
		</style>
	</head>
	<body id="page-top">
		<!-- Page Wrapper -->
		<div id="wrapper">
			
			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
				<!-- Sidebar - Brand -->
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
					<div class="sidebar-brand-icon">
						<img src="<?= base_url('assets/') ?>img/logo.jpg" class="img-fluid rounded-circle shadow" width="60">
					</div>
					<div class="sidebar-brand-text mx-3">ID MJP</div>
				</a>
				<!-- Divider -->
				<hr class="sidebar-divider my-0">
				<!-- Nav Item - Dashboard -->
					<li class="nav-item <?php if($this->uri->segment(2)=='dashboard'){echo 'active';} ?>">
						<a class="nav-link" href="index.html">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span></a>
					</li>
					<!-- Divider -->
					<hr class="sidebar-divider my-0">

					<li class="nav-item <?php if($this->uri->segment(2)=='user'){echo 'active';} ?>">
						<a class="nav-link" href="<?= base_url('admin/user'); ?>">
						<i class="fas fa-fw fa-users"></i>
						<span>Data User</span></a>
					</li>

					<hr class="sidebar-divider my-0">
					<!-- Nav Item - Pages Collapse Menu -->
					<li class="nav-item">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#profile" aria-expanded="true" aria-controls="collapseTwo">
							<i class="fas fa-fw fa-user"></i>
							<span>My profile</span>
						</a>
						<div id="profile" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
							<div class="bg-white py-2 collapse-inner rounded">
								<a class="collapse-item" href="buttons.html">Buttons</a>
								<a class="collapse-item" href="cards.html">Cards</a>
							</div>
						</div>
					</li>
					<!-- Divider -->
					<hr class="sidebar-divider my-0">

					<!-- Heading -->
					<!-- Nav Item - Pages Collapse Menu -->
					<li class="nav-item">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							<i class="fas fa-fw fa-cog"></i>
							<span>Pengaturan</span>
						</a>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
							<div class="bg-white py-2 collapse-inner rounded">
								<h6 class="collapse-header">Pengaturan:</h6>
								<a class="collapse-item" href="buttons.html">Pengaturan Umum</a>
								<a class="collapse-item" href="cards.html">Cards</a>
							</div>
						</div>
					</li>
					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">
					<!-- Sidebar Toggler (Sidebar) -->
					<div class="text-center d-none d-md-inline">
						<button class="rounded-circle border-0" id="sidebarToggle"></button>
					</div>
				</ul>
				<!-- End of Sidebar -->
				<!-- Content Wrapper -->
				<div id="content-wrapper" class="d-flex flex-column">
					<!-- Main Content -->
					<div id="content">