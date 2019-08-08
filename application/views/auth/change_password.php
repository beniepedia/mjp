
<div class="row justify-content-center">
	<div class="col-xl-6 col-lg-6 col-md-9">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col">
						<div class="p-5">
							<div class="text-center mb-4">
								<h1 class="h4 text-gray-900 mb-2 font-weight-bold">Ganti Password?</h1>
								<small class="font-italic">Silahkan masukan password baru untuk email <br>
									<strong class="text-primary"><?= $this->session->userdata('email_reset'); ?></strong>
								</small>
							</div>
							<form class="user" method="post" action="<?= base_url('auth/changepass'); ?>">
								<div class="form-group">
									<input type="password" class="form-control form-control-user" name="password" placeholder="Masukan Password Baru ...">
									<?= form_error('password', '<small class="text-danger pl-3">','</small'); ?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-user" name="passconf" placeholder="Konfirmasi Password Baru ...">
									<?= form_error('passconf', '<small class="text-danger pl-3">','</small'); ?>
								</div>
								<input type="submit" class="btn btn-primary btn-user btn-block mt-3" value="Generate Password Baru">
							</form>
							<hr>
							<div class="text-center">
								<small>Belum Punya Akun ?</small><a class="small" href="<?= base_url('registrasi'); ?>"> Registrasi</a>
							</div>
							<div class="text-center">
								<small>Sudah Punya Akun ?</small><a class="small" href="<?= base_url('login'); ?>"> Login</a>
							</div>
							<div class="text-center mt-3">
		                    	<a class="small" href="<?= base_url('/'); ?>" style="font-size: 1.5rem;"><i class="fas fa-home"></i>
		                    	</a>
		                  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>