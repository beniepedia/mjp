<div class="container">
	<div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
				<div class="col-lg-7">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Daftar Akun Baru!</h1>
						</div>
						<?= $this->session->flashdata('message'); ?>
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
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="password" class="form-control form-control-user" name="password" placeholder="Password">
									<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-user" name="passconf" placeholder="Konfirmasi Password">
									<?= form_error('passconf', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-user btn-block">
								Daftar Akun
							</button>
							<hr>
							<div class="row justify-content-center">
		                      <a href="index.html" class="btn btn-google btn-user btn-lg btn-circle">
		                        <i class="fab fa-google fa-fw" style="font-size: 20px;"></i>
		                      </a>
		                      <a href="index.html" class="btn btn-facebook btn-user btn-lg btn-circle">
		                        <i class="fab fa-facebook-f fa-fw" style="font-size: 20px;"></i>
		                      </a>
		                    </div>
						</form>
						<hr>
		        <div class="row">
	            <div class="col-6">
	                <div class="" >
	                  <a class="small" href="forgot-password.html">Forgot Password?</a>
	                </div>
	            </div>
	            <div class="col-6">
	                <div class="float-right">
	                  <a class="small" href="<?= base_url('auth/registrasi'); ?>">Buat Akun Baru!</a>
	                </div>
	            </div>
						</div>
						<div class="text-center mt-3">
              <a class="small" href="<?= base_url('home'); ?>">Kembali</a>
            </div>
          </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>