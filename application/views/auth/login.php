    <div class="pesanNotif" data-title="<?= $this->session->flashdata('title'); ?>" data-pesan="<?= $this->session->flashdata('pesan'); ?>" data-error="<?= $this->session->flashdata('type'); ?>"></div>
    <!-- Outer Row -->
    <div class="row justify-content-center mt-5">

      <div class="col-xl-5 col-lg-5 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5 ">
          <div class="card-body p-0">

            <!-- Nested Row within Card Body -->
            <div class="row">
<!--               <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
 -->              <div class="col-lg-12">

                <div class="p-5">
                  <div class="text-center mb-5">
                    <h1 class="h4 text-gray-900 font-weight-bold ">Silahkan Login!</h1>
                    <small class="font-italic">Gunakan email yang sudah anda daftarkan untuk login.</small>
                  </div>
                  <?php if( $this->session->flashdata('msg')) : ?>
                    <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                  <?php endif; ?>
                  <form class="user" action="<?= base_url('auth/login'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user"placeholder="Masukan email..." name="email" value="<?= set_value('email'); ?>">
                      <?= form_error('email','<small class="text-danger pl-3">','</small'); ?>
                    </div>
                    
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" placeholder="Password" name="password">
                      <?= form_error('password','<small class="text-danger pl-3">','</small'); ?>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <?php if($this->generalset->web()->is_active == 1) : ?>
                    <hr>
                    <div class="row justify-content-center">
                      <a href="index.html" class="btn btn-google btn-user btn-md btn-circle shadow">
                        <i class="fab fa-google fa-fw" style="font-size: 20px;"></i>
                      </a>
                      <a href="<?= $authURL; ?>" class="btn btn-facebook btn-user btn-md btn-circle shadow">
                        <i class="fab fa-facebook-f fa-fw" style="font-size: 20px;"></i>
                      </a>
                    </div>
                  <?php endif; ?>
                  </form>
                  <hr>
                  <div class="text-center">
                  <small>Lupa Password ?</small><a class="small" href="<?= base_url('auth/forgotpass'); ?>"> Reset Password</a>
                  </div>
                  <div class="text-center">
                  <small>Belum Punya Akun ?</small><a class="small" href="<?= base_url('auth/registrasi'); ?>"> Registrasi</a>
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

    </div>
