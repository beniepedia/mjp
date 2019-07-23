
    <!-- Outer Row -->
    <div class="row justify-content-center mt-5">

      <div class="col-xl-5 col-lg-5 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center mb-3">
                    <h1 class="h4 text-gray-900 font-weight-bold">Lupa Password</h1>
                    <small class="font-italic ">Gunakan email anda gunakan saat registrasi. Kami akan mengirimkan email untuk mereset email anda!</small>
                  </div>
                  <?php if( $this->session->flashdata('msg')) : ?>
                    <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                  <?php endif; ?>
                  <form class="user" method="post" action="<?= base_url('auth/forgotpass'); ?>">
                    <div class="form-group mb-4">
                      <input type="text" class="form-control form-control-user <?= form_error('email')?'is-invalid':null; ?>" name="email" placeholder="Masukan alamat email..." value="<?= set_value('email'); ?>">
                      <?= form_error('email'); ?>
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
                    <a class="small" href="<?= base_url('/'); ?>" style="font-size: 1.5rem;"><i class="fas fa-home"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>