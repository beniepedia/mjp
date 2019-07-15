
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Lupa Password?</h1>
                    <p class="mb-4">Silahkan masukan email anda. kami akan mengirimkan link untuk reset pasword ke email anda!</p>
                  </div>
                  <?php if( $this->session->flashdata('msg')) : ?>
                    <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                  <?php endif; ?>
                  <form class="user" method="post" action="<?= base_url('auth/forgotpass'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="email" placeholder="Masukan alamat email..." value="<?= set_value('email'); ?>">
                      <?= form_error('email', '<small class="text-danger pl-3">','</small'); ?>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Reset Password">
                  </form>
                  <hr>
                  <div class="text-center">
                  <small>Belum Punya Akun ?</small><a class="small" href="<?= base_url('auth/registrasi'); ?>"> Registrasi</a>
                  </div>
                  <div class="text-center">
                  <small>Sudah Punya Akun ?</small><a class="small" href="<?= base_url('auth/login'); ?>"> Login</a>
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