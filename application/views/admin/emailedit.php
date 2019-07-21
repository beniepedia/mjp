<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<?php if( $this->session->flashdata('msg')) : ?>
          <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
      <?php endif; ?>
		</div>
	</div>
	<div class="row justify-content-between">
		<!-- Card setingan umum -->
		<div class="col-lg-7">
			<!-- Dropdown Card Example -->
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Pengaturan Email</h6>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12">
							<form action="<?= base_url('admin/setting/email'); ?>" method="post">
								<div class="form-group row">
							    <label for="sitename" class="col-sm-3 col-form-label label-judul">Admin Email</label>
							    <div class="col-md-9">
							      <input type="text" name="admin" class="form-control" placeholder="admin@example.com" value="<?= $email->admin_email; ?>">
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="sitename" class="col-sm-3 col-form-label label-judul">Sistem Email</label>
							    <div class="col-md-9">
							      <input type="text" name="sistem" class="form-control" placeholder="no-reply@example.com" value="<?= $email->sistem_email; ?>">
							    </div>
							  </div>

								<div class="form-group row">
							    <label for="sitename" class="col-sm-3 col-form-label label-judul">Protokol</label>
							    <div class="col-md-9">
							      <input type="text" name="protocol" class="form-control" placeholder="smtp" value="<?= $email->protocol; ?>">
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="sitealias"  class="col-sm-3 col-form-label label-judul">Host</label>
							    <div class="col-md-9">
							      <input type="text" name="host" class="form-control" placeholder="ssl://smtp.contoh.com" value="<?= $email->host; ?>">
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Username</label>
							    <div class="col-md-9">
							      <input type="text" name="uname" class="form-control" placeholder="example" value="<?= $email->username; ?>">
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Password</label>
							    <div class="col-md-9">
							      <input type="password" name="password" class="form-control" placeholder="example" value="<?= $email->password; ?>">
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Port</label>
							    <div class="col-md-9">
							      <input type="text" name="port" class="form-control" placeholder="587" value="<?= $email->port; ?>">
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Tipe Email</label>
							    <div class="col-md-9">
							      <select name="tipe" class="form-control">
							      	<?php $type =  ?>
							      	<option selected="true" disabled="">Pilih</option>
							      	<option value="html" <?= $email->; ?>>HTML</option>
							      	<option value="text">TEXT</option>
							      </select>
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Charset</label>
							    <div class="col-md-9">
							      <input type="text" name="chart" class="form-control" placeholder="UTF-8" value="">
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Newline</label>
							    <div class="col-md-9">
							      <input type="text" name="line" class="form-control" placeholder="\r\n" value="">
							    </div>
							  </div>

								<div class="form-group float-right">
									<a href="<?= base_url('admin/user'); ?>" class="btn btn-light btn-icon-split">
										<span class="icon text-gray-600">
											<i class="fas fa-undo-alt"></i>
										</span>
									</a>
									<button type="submit" name="save_web" class="btn btn-primary btn-icon-split">
										<span class="icon text-gray-600">
											<i class="fas fa-save"></i>
										</span>
										<span class="text">Simpan</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-4 text-justify">
			<h5>Petunjuk :</h5>
			<hr>
			<p>Settingan email ini berfungsi untuk berbagai kebutuhan pada website. Seperti mengirim email konfirmasi pendaftaran, reset password, kontak form, dan untuk email marketing. Jadi sesuaikan settingannya sesuai dengan hosting yang anda gunakan. </p><br>
			<strong>Admin Email</strong> digunakan untuk mengirim email promosi, bisa berupa blash email/single email. <br>	<br>
			<strong>Sistem Email</strong> digunakan untuk mengirimkan pesan berupa konfirmasi pendaftaran, reset password, dan kontak form.

		</div>

	</div>
</div>