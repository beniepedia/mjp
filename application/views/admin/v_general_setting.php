<div class="container-fluid my-5">
	<div class="row justify-content-center">
		<div class="col-lg-5">
			<div class="card shadow">
				<div class="card-body">
					<h6 class="font-weight-bold">Pengaturan umum</h6>
					<hr>
					<form action="<?= base_url('admin/setting/update_general_setting'); ?>" method="post">
						<div class="form-group row justify-content-between">
							<div class="col-12 mb-4">
								<label for="" class="col-10">Blogger </label>
								<input type="hidden" name="bloger" value="0">
								<input type="checkbox" name="bloger" value="1" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="xs" class="col-2">		
							</div>

							<div class="col-12 mb-4">
								<label for="" class="col-10">Facebook Login </label>
								<input type="hidden" name="fblogin" value="0">
								<input type="checkbox" <?= $setting->general_set_fb==1?'checked':null; ?> name="fblogin" value="1" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="xs" class="col-2">		
							</div>

							<div class="col-12 mb-4">
								<label for="" class="col-10">Google Login </label>
								<input type="hidden" name="googlelogin" value="0">
								<input type="checkbox" <?= $setting->general_set_google==1?'checked':null; ?> name="googlelogin" value="1" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="xs" class="col-2">		
							</div>

							<div class="col-12 mb-4">
								<label for="" class="col-10">Galery Instagram </label>
								<input type="checkbox" data-toggle="toggle" data-size="xs" class="col-2">		
							</div>

							<div class="col-12 mb-4">
								<label for="" class="col-10">Google Captcha </label>
								<input type="checkbox" data-toggle="toggle" data-size="xs" class="col-2">		
							</div>

							<div class="col-12 mb-4">
								<label for="" class="col-10">Halaman Blog </label>
								<input type="checkbox" data-toggle="toggle" data-size="xs" class="col-2">		
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-sm float-right">Simpan</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>