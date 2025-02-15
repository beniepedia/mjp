<div class="p-2 my-5">
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
								<input type="checkbox" <?= $setting->general_set_blog==1?'checked':null; ?> name="bloger" value="1" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="xs" class="col-2">		
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
								<input type="hidden" name="iggaleri" value="0">
								<input type="checkbox" name="iggaleri" value="1" <?= $setting->general_set_ig==1?'checked':null; ?> data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="xs" class="col-2">		
							</div>

							<div class="col-12 mb-4">
								<label for="" class="col-10">Google Captcha </label>
								<input type="hidden" name="captcha" value="0">
								<input type="checkbox" <?= $setting->general_set_captcha==1?'checked':null; ?> name="captcha" value="1" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="xs" class="col-2">		
							</div>

							<div class="col-12 mb-4">
								<label for="" class="col-10">Auto Logout </label>
								<input type="hidden" name="captcha" value="0">
								<input type="checkbox" <?= $setting->general_set_autologout==1?'checked':null; ?> name="autologout" value="1" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="xs" class="col-2">		
							</div>
						</div>
						<hr>
						<button type="submit" class="btn btn-primary btn-sm float-right">Simpan</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>