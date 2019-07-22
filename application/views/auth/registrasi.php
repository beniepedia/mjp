<div class="card o-hidden border-0 shadow-lg my-5">
	<div class="card-body p-0">
		<!-- Nested Row within Card Body -->
		<div class="row">
			<div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
			<div class="col-lg-6 col-md-12">
				<div class="p-5">
					<div class="text-center">
						<h1 class="h4 text-gray-900 mb-4">Daftar Akun Baru!</h1>
					</div>
					<?php if( $this->session->flashdata('msg')) : ?>
            <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
          <?php endif; ?>
					<form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
						<div class="form-group">
							<input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<input type="email" class="form-control form-control-user" name="email" placeholder="Alamat Email..." value="<?= set_value('email'); ?>">
							<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
								<input type="password" class="form-control form-control-user" name="password" placeholder="Password">
								<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="col-sm-6">
								<input type="password" class="form-control form-control-user" name="passconf" placeholder="Konfirmasi Password">
								<?= form_error('passconf', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-user btn-block">
						Buat Akun
						</button>
					</form>
					<hr>
					<div class="text-center">
						<small>Lupa Password ?</small><a class="small" href="<?= base_url('auth/forgotpass'); ?>"> Reset Password</a>
					</div>
					<div class="text-center">
						<small>Sudah Punya Akun ?</small><a class="small" href="<?= base_url('auth/login'); ?>"> Login</a>
					</div>
					<div class="text-center mt-3">
						<a class="small" href="<?= base_url('/'); ?>">Halaman Utama</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>