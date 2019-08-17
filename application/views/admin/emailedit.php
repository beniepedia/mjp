<div class="container-fluid">
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
							<form action="<?= base_url('admin/setting/editemail'); ?>" method="post">

								<div class="form-group row">
							    <label for="sitename" class="col-sm-3 col-form-label label-judul">Admin Email</label>
							    <div class="col-md-9">
							      <input type="text" name="admin" class="form-control <?= form_error('sistem')?'is-invalid':null; ?>" placeholder="admin@example.com" value="<?= $this->input->post('admin') ?? $email->admin_email; ?>">
							      <?= form_error('admin'); ?>
							    </div>
							  </div>
							 

							  <div class="form-group row">
							    <label for="sitename" class="col-sm-3 col-form-label label-judul">Sistem Email</label>
							    <div class="col-md-9">
							      <input type="text" name="sistem" class="form-control <?= form_error('sistem')?'is-invalid':null; ?>" placeholder="no-reply@example.com" value="<?= $this->input->post('sistem') ?? $email->sistem_email; ?>">
							    	<?= form_error('sistem'); ?>
							    </div>
							  </div>
								
								<div class="form-group row">
							    <label for="sitename" class="col-sm-3 col-form-label label-judul">Protokol</label>
							    <div class="col-md-9">
							      <input type="text" name="protocol" class="form-control <?= form_error('protocol')?'is-invalid':null; ?>" placeholder="smtp" value="<?= $this->input->post('protocol') ?? $email->protocol; ?>">
							      <?= form_error('protocol'); ?>
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="sitealias"  class="col-sm-3 col-form-label label-judul">Host</label>
							    <div class="col-md-9">
							      <input type="text" name="host" class="form-control <?= form_error('host')?'is-invalid':null; ?>" placeholder="ssl://smtp.contoh.com" value="<?= $this->input->post('host') ?? $email->host; ?>">
							    	<?= form_error('host'); ?>
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">User Email</label>
							    <div class="col-md-9">
							      <input type="text" name="uname" class="form-control <?= form_error('uname')?'is-invalid':null; ?>" placeholder="example" value="<?= $this->input->post('uname') ?? $email->username; ?>">
							    	<?= form_error('uname'); ?>
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Password</label>
							    <div class="col-md-9">
							      <input type="password" name="password" class="form-control <?= form_error('password')?'is-invalid':null; ?>" placeholder="" value="<?= $this->input->post('password'); ?>">
							      <?= form_error('password'); ?>
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Port</label>
							    <div class="col-md-9">
							      <input type="text" name="port" class="form-control <?= form_error('port')?'is-invalid':null; ?>" placeholder="587" value="<?= $this->input->post('port') ?? $email->port; ?>">
							      <?= form_error('port'); ?>
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Tipe Email</label>
							    <div class="col-md-9">
							      <select name="tipe" class="form-control <?= form_error('tipe')?'is-invalid':null; ?>">
							      	<?php $tipe = $this->input->post('tipe') ? $this->input->post('tipe') : $email->type; ?>
							      	<option selected="true" disabled="">Pilih</option>
							      	<option value="html" <?= $tipe=='html'?'selected':null; ?> >HTML</option>
							      	<option value="text" <?= $tipe=='text'?'selected':null; ?>>TEXT</option>
							      </select>
							      <?= form_error('tipe'); ?>
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Charset</label>
							    <div class="col-md-9">
							      <input type="text" name="chart" class="form-control <?= form_error('chart')?'is-invalid':null; ?>" placeholder="UTF-8" value="<?= $this->input->post('chart') ?? $email->charset; ?>">
							      <?= form_error('chart'); ?>
							    </div>
							  </div>
<!-- 
							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Newline</label>
							    <div class="col-md-9">
							      <input type="text" name="line" class="form-control" placeholder="\r\n" value="">
							    </div>
							  </div> -->
								<hr>
								<div class="form-group float-right mt-3">
									<a href="<?= base_url('admin/setting/email'); ?>" class="btn btn-light btn-icon-split btn-sm">
										<span class="icon text-gray-600">
											<i class="fas fa-undo-alt"></i>
										</span>
									</a>
									
									<button type="button" id="tes_con" class="btn btn-danger btn-sm">
										<i class="fas fa-plug"></i> Tes Koneksi
									</button>

									<button type="submit" name="save_email" class="btn btn-primary  btn-sm">
										<i class="fas fa-save"></i> Simpan
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-4">
			<h5>Informasi :</h5>
			<hr>
			<p>Settingan email ini berfungsi untuk berbagai kebutuhan pada website. Seperti mengirim email konfirmasi pendaftaran, reset password, kontak form, dan untuk email marketing. Jadi sesuaikan settingannya sesuai dengan hosting yang anda gunakan. </p>
			<hr>
			<strong>Admin Email</strong> digunakan untuk mengirim email promosi, bisa berupa blash email/single email. <br>	<br>
			<strong>Sistem Email</strong> digunakan untuk mengirimkan pesan berupa konfirmasi pendaftaran, reset password, dan kontak form. <br><br>
			<strong>User Email</strong> digunakan untuk proses autentifikasi di server smtp pada hosting anda.

		</div>

	</div>
</div>


<script>
	$(document).ready(function(){
		$('#tes_con').on('click', function(){
			$.ajax({
				url: '<?= base_url('admin/setting/tes_email_connec') ?>',
				data: $('form').serialize(),
				type: 'post',
				dataType: 'json',
				cache: false,
				beforeSend: function(){
					$('#tes_con').html('<i class="fas fa-spinner fa-spin"></i> Sedang mengetes...')
				},
				success: function(response){
					$('#tes_con').html('<i class="fas fa-plug"></i> Tes Koneksi');
					Swal.fire({
					  type: response.type,
					  title: response.title,
					  text: response.pesan
					})
					console.log(response);
				}
			});
		});
	});
	


</script>