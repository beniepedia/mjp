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
		<link href="<?= base_url('assets/backend/') ?>css/sb-admin-2.css" rel="stylesheet">
		<link href="<?= base_url('assets/backend/') ?>css/mystyle.css" rel="stylesheet">
		<link href="<?= base_url('assets/backend/vendor/bootstrap-datepicker/') ?>css/bootstrap-datepicker.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
		<link href="<?= base_url('assets/backend/vendor/bootstrap-fileinput/') ?>css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>

		<link href="<?= base_url('assets/backend/vendor/bootstrap-fileinput/') ?>themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
		<link href="<?= base_url('assets/backend/') ?>css/dropify.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?= base_url('assets/backend/') ?>vendor/bootstrap-toggle-master/css/bootstrap-toggle.min.css">
		 <script src="<?= base_url('assets/backend/') ?>vendor/jquery/jquery.min.js"></script>

	</head>
	<body id="page-top">
		<!-- Page Wrapper -->
		<div id="wrapper">
			
			<!-- Sidebar -->
			<ul class="navbar-nav sidebar sidebar-dark accordion color-gradiant" id="accordionSidebar">
				<!-- Sidebar - Brand -->
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
					<div class="sidebar-brand-icon">
						<img src="<?= base_url('assets/img/').$this->generalset->web()->site_logo_header; ?>" class="img-fluid rounded-circle shadow" width="40">
					</div>
					<div class="sidebar-brand-text mx-3"><?= $this->generalset->web()->site_alias; ?></div>
				</a>
				<?php if($this->check->is_admin()->role_id == 1 ) : ?>
				<!-- Divider -->
				<hr class="sidebar-divider my-0">
				<!-- Nav Item - Dashboard -->
				<li class="nav-item <?php if($this->uri->segment(2)=='dashboard'){echo 'active';} ?>">
					<a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
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

					<li class="nav-item <?php if($this->uri->segment(2)=='posts'){echo 'active';}?>">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#navpost" aria-expanded="true" aria-controls="collapseTwo">
							<i class="fas fa-clipboard-list fa-fw"></i>
							<span>Posts</span>
						</a>
						<div id="navpost" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
							<div class="bg-white py-2 collapse-inner rounded">
								<h6 class="collapse-header">Posts:</h6>
								<a class="collapse-item" href="<?= base_url('admin/posts/add_new_post') ?>">Buat baru</a>
								<a class="collapse-item" href="<?= base_url('admin/posts') ?>">List</a>
								<a class="collapse-item" href="<?= base_url('admin/posts/category_post') ?>">Kategori</a>
								<a class="collapse-item" href="<?= base_url('admin/posts/tags_post') ?>">Tags</a>
							</div>
						</div>
					</li>

					<!-- Divider -->
					<hr class="sidebar-divider my-0">

					<!-- Nav Item - Pages Collapse Menu -->
					<li class="nav-item <?php if($this->uri->segment(2)=='message'){echo 'active';}?>">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#message" aria-expanded="true" aria-controls="collapseTwo">
							<i class="far fa-fw fa-envelope-open"></i>
							<span>Pesan</span>
						</a>
						<div id="message" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
							<div class="bg-white py-2 collapse-inner rounded">
								<h6 class="collapse-header">Pesan:</h6>
								<a class="collapse-item" href="<?= base_url('admin/message/inbox') ?>">Inbox</a>
							</div>
						</div>
					</li>

					<!-- Divider -->
					<hr class="sidebar-divider my-0">
					<!-- Nav Item - Pages Collapse Menu -->
					<li class="nav-item <?php if($this->uri->segment(2)=='setting'){echo 'active';}?>">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							<i class="fas fa-fw fa-cog"></i>
							<span>Pengaturan</span>
						</a>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
							<div class="bg-white py-2 collapse-inner rounded">
								<h6 class="collapse-header">Pengaturan:</h6>
								<a class="collapse-item" href="<?= base_url('admin/setting/general_setting/'); ?>">Umum</a>
								<a class="collapse-item" href="<?= base_url('admin/setting/sosial_api/'); ?>">Sosial Api</a>
								<a class="collapse-item" href="<?= base_url('admin/setting'); ?>">Website</a>
								<a class="collapse-item" href="<?= base_url('admin/setting/email'); ?>">Email</a>
								<a class="collapse-item" href="<?= base_url('admin/backup'); ?>">Backup & Restore</a>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<hr class="sidebar-divider my-0">
						
					<!-- Nav Item - Pages Collapse Menu -->
					<li class="nav-item <?php if($this->uri->segment(1)=='profile'){echo 'active';}?>">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#profile" aria-expanded="true" aria-controls="collapseTwo">
							<i class="fas fa-fw fa-user"></i>
							<span>Profil Saya</span>
						</a>
						<div id="profile" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
							<div class="bg-white py-2 collapse-inner rounded">
								<h6 class="collapse-header">Profil Detail:</h6>
								<a class="collapse-item" href="<?= base_url('profile') ?>">Profile</a>
								<a class="collapse-item" href="<?= base_url('profile/changepassword') ?>">Ganti Password</a>
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

