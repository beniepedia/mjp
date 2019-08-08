<div class="pesanNotif" data-title="<?= $this->session->flashdata('title'); ?>" data-pesan="<?= $this->session->flashdata('pesan'); ?>" data-error="<?= $this->session->flashdata('type'); ?>"></div>
<!-- Outer Row -->
<div class="row justify-content-center mt-5">
  <div class="col-xl-5 col-lg-5 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5 ">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center mb-3">
                <h1 class="h4 text-gray-900 font-weight-bold ">Daftar Akun Baru</h1>
                <small class="font-italic">Gunakan email yang valid, karena kami akan megirmkan link aktivasi ke email anda..</small>
              </div>
      
              <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user <?= form_error('nama')?'is-invalid':null; ?>" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                  <?= form_error('nama'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user <?= form_error('phone')?'is-invalid':null; ?>" name="phone" placeholder="Handphone" value="<?= set_value('phone'); ?>">
                  <?= form_error('phone'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user <?= form_error('email')?'is-invalid':null; ?>" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                  <?= form_error('email'); ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user <?= form_error('password')?'is-invalid':null; ?>" name="password" placeholder="Password">
                  <?= form_error('password'); ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user <?= form_error('passconf')?'is-invalid':null; ?>" name="passconf" placeholder="Konfirmasi Password">
                  <?= form_error('passconf'); ?>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Buat Akun
                </button>
              </form>
              <hr>
              <div class="text-center">
                <small>Lupa Password ?</small><a class="small" href="<?= base_url('forgot_password'); ?>"> Reset Password</a>
              </div>
              <div class="text-center">
                <small>Sudah Punya Akun ?</small><a class="small" href="<?= base_url('login'); ?>"> Login</a>
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