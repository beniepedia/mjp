<!-- Navbar Primary -->
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#"><img src="<?= base_url('assets/') ?>img/logo.jpg"><?= $this->generalset->web()->site_name; ?></a>
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
					<!-- dropdown menu -->
					<div class="btn-group">
					  <a href="" class="nav-item nav-link dropdown-toggle wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="true"><i class="fa fa-cog" aria-hidden="true"></i>Akun</a>
					  <div class="dropdown-menu dropdown-menu-lg-right">
					    <?php if( $this->session->userdata('email') ) : ?>
								<a href="#" class="dropdown-item">Dasboard</a>
								<a href="#" class="dropdown-item">Profil</a>
								<a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">Logout</a>
							<?php else : ?>
								<a href="<?= base_url('auth/login'); ?>" class="dropdown-item">Login</a>
								<a href="<?= base_url('auth/registrasi'); ?>" class="dropdown-item">Register</a>
							<?php endif; ?>
					  </div>
					</div>
				</div>
			</div>
		</nav>
		<!-- Navbar Secondary -->
		<div class="d-none d-lg-block">
			<div class="Scrolling fixed-top">
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
					<a class="navbar-brand" href="#home"><img src="<?= base_url('assets/') ?>img/logo.jpg"><?= $this->generalset->web()->site_name; ?></a>
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
							<div class="btn-group">
							  <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="true"><i class="fa fa-cog" aria-hidden="true"></i>Akun</a>
							  <div class="dropdown-menu dropdown-menu-lg-right">
							    <?php if( $this->session->userdata('email') ) : ?>
										<a href="#" class="dropdown-item">Dasboard</a>
										<a href="#" class="dropdown-item">Profil</a>
										<a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">Logout</a>
									<?php else : ?>
										<a href="<?= base_url('auth/login'); ?>" class="dropdown-item">Login</a>
										<a href="<?= base_url('auth/registrasi'); ?>" class="dropdown-item">Register</a>
									<?php endif; ?>
						  </div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</nav>