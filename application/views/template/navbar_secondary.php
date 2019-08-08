<nav class="navbar fix-top navbar-expand-sm navbar-dark shadow-lg" style="background-color: #614ad3;">
	<a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/').$this->generalset->web()->site_logo_header; ?>"><?= $this->generalset->web()->site_name; ?></a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<div class="navbar-nav ml-auto">
			<a class="nav-item nav-link" href="<?= base_url('/'); ?>"><i
			class="fas fa-home" aria-hidden="true"></i>Beranda</a>
			
			<?php if($this->generalset->all()->general_set_blog==1) : ?>
			<a class="nav-item nav-link" href="<?= base_url('blog'); ?>"><i class="fas fa-blog"></i>Blog</a>
			<?php endif; ?>

			<a class="nav-item nav-link" href="<?= base_url('kontak'); ?>"><i class="fas fa-address-book"></i>Hubungi Kami</a>
			<!-- dropdown menu -->
				<div class="nav-item dropdown">
				  <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="true"><i class="fas fa-users-cog"></i>Akun</a>
					  <div class="dropdown-menu dropdown-menu-lg-right">
						    <?php if( $this->session->userdata('email') ) : ?>
									<a href="<?= base_url('admin/dashboard'); ?>" class="dropdown-item"><i class="fas fa-server far"></i>Dasboard</a>
									<a href="#" class="dropdown-item"><i class="fas fa-user-tag far"></i>Profil</a>
									<a href="<?= base_url('logout'); ?>" class="dropdown-item"><i class="fas fa-sign-out-alt far"></i>Logout</a>
								<?php else : ?>
									<a href="<?= base_url('login'); ?>" class="dropdown-item"><i class="fas fa-sign-in-alt far"></i>Login</a>
									<a href="<?= base_url('registrasi'); ?>" class="dropdown-item"><i class="fas fa-user-plus far"></i>Register</a>
								<?php endif; ?>
					  </div>
				</div>
		</div>
	</div>
</nav>