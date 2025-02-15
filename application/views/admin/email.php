<div class="p-2">
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
							<div class="table-responsive">
							<table class="table table-striped">
								<tbody>
							    <tr>
							      <td>Admin Email </td>
							      <td>: <?= $email->admin_email; ?></td>
							    </tr>
							    <tr>
							      <td>Sistem Email</td>
							      <td>: <?= $email->sistem_email; ?></td>
							    </tr>
							    <tr>
							      <td>Protocol</td>
							      <td>: <?= $email->protocol; ?></td>
							    </tr>
							    <tr>
							      <td>Host SMTP</td>
							      <td>: <?= $email->host; ?></td>
							    </tr>
							    <tr>
							      <td>User Email SMTP</td>
							      <td>: <?= $email->username; ?></td>
							    </tr>
							    <tr>
							      <td>Port SMTP</td>
							      <td>: <?= $email->port; ?></td>
							    </tr> 
							    <tr>
							      <td>Email Tipe</td>
							      <td>: <?= $email->type; ?></td>
							    </tr> 
							    <tr>
							      <td>Charset</td>
							      <td>: <?= $email->charset; ?></td>
							    </tr> 
							    <tr>
							    	<td>NewLine</td>
							    	<td>: <?= $email->newline; ?></td>
							    </tr>
							  </tbody>
							</table>
							</div>
							<div class="mt-3 float-right">
								
					    		<a href="<?= base_url('admin/setting/editemail'); ?>" class="btn btn-primary btn-sm">Ubah Setelan</a>
					    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-4">
			<h5>Informasi :</h5>
			<hr>
			<p>Setelan email ini berfungsi untuk berbagai kebutuhan pada website. Seperti mengirim email konfirmasi pendaftaran, reset password, kontak form, dan untuk email marketing. Jadi sesuaikan Setelannya sesuai dengan hosting yang anda gunakan. </p>
			<hr>
			<strong>Admin Email</strong> digunakan untuk mengirim email promosi, bisa berupa blash email/single email. <br>	<br>
			<strong>Sistem Email</strong> digunakan untuk mengirimkan pesan berupa konfirmasi pendaftaran, reset password, dan kontak form.<br>	<br>
			<strong>User Email</strong> digunakan untuk proses autentifikasi di server smtp pada hosting anda.

		</div>

	</div>
</div>