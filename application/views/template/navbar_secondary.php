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
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s" href="<?= base_url('kontak'); ?>"><i
					class="fa fa-address-book-o" aria-hidden="true"></i>Kontak</a>
					<a class="nav-item btn btn-warning" href="<?= base_url('auth/login') ?>">Masuk</a>
				</div>
			</div>
		</nav>