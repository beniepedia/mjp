<div class="container-fluid ">
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="card shadow mb-4">
				<div class="card-body">
					<h6 class="text-primary">Facebook Api Login</h6>
					<hr>
					<form action="<?= base_url('admin/setting/update_sosial_api'); ?>" method="post" >
						<div class="form-group row">
							<label for="fbid" class="col-sm-3 col-form-label label-judul">App ID</label>
							<div class="col-md-9">
								<input type="text" name="fbid" class="form-control" id="fbid" placeholder="facebook app id" value="<?= $api->api_fb_id; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="fbkey"  class="col-sm-3 col-form-label label-judul">App Secret</label>
							<div class="col-md-9">
								<input type="text" name="fbkey" class="form-control" id="fbkey" placeholder="facebook app secret" value="<?= $api->api_fb_key; ?>">
								<small class="font-italic text-grey">Untuk mendapatkan App ID & App Secret Facebook, silahkan kunjungi link ini. <a href="https://developers.facebook.com/" target="_blank">Create API Facebook</a></small>
							</div>
						</div>
						<hr>
						<!-- google -->
						<h6 class="text-primary pb-sm-3">Google Api Login</h6>
						<div class="form-group row">
							<label for="gid" class="col-sm-3 col-form-label label-judul">App ID</label>
							<div class="col-md-9">
								<input type="text" name="gid" class="form-control" id="fbid" placeholder="facebook app id" value="">
							</div>
						</div>
						<div class="form-group row">
							<label for="gkey"  class="col-sm-3 col-form-label label-judul">App Secret</label>
							<div class="col-md-9">
								<input type="text" name="gkey" class="form-control" id="fbkey" placeholder="facebook app secret" value="">
								<small class="font-italic text-grey">Untuk mendapatkan App ID & App Secret Facebook, silahkan kunjungi link ini. <a href="https://developers.facebook.com/" target="_blank">Create Google API</a></small>
							</div>
						</div>
						<hr>
						<!-- google recaptcha-->
						<h6 class="text-primary pb-sm-3">Google Recaptcha</h6>
						<div class="form-group row">
							<label for="skey" class="col-sm-3 col-form-label label-judul">Site Key</label>
							<div class="col-md-9">
								<input type="text" name="sitekey" class="form-control" id="skey" placeholder="Google reCaptcha Site Key" value="<?= $api->api_captcha_sitekey ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="rkey"  class="col-sm-3 col-form-label label-judul">Secret Key</label>
							<div class="col-md-9">
								<input type="text" name="secretkey" class="form-control" id="rkey" placeholder="Google reCaptcha Secret Key" value="<?= $api->api_captcha_serverkey ?>">
								<small class="font-italic text-grey">Untuk mendapatkan Site Key & Secret Key Google reCaptcha, silahkan kunjungi link ini. <a href="https://www.google.com/recaptcha/" target="_blank">Create API reCaptcha</a></small>
							</div>
						</div>
						<hr>
						<!-- Instagram -->
						<h6 class="text-primary pb-sm-3">Instagram Api Galeri</h6>
						<div class="form-group row">
							<label for="igtoken" class="col-sm-3 col-form-label label-judul">Token ID</label>
							<div class="col-md-9">
								<input type="text" name="igtoken" class="form-control" id="igtoken" placeholder="Instagram Token" value="<?= $api->api_ig_token; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="count"  class="col-sm-3 col-form-label label-judul">Count</label>
							<div class="col-md-9">
								 <select class="form-control" name="count" id="count">
								 <option disabled selected="true">Jumlah row</option>
									 <option value="4" <?= $api->api_ig_count==4?'selected':null; ?>>4</option>
									 <option value="8" <?= $api->api_ig_count==8?'selected':null; ?> >8</option>
									 <option value="12" <?= $api->api_ig_count==12?'selected':null; ?> >12</option>
								 </select>
								<small class="font-italic text-grey">Untuk mendapatkan Api Token Instagram, silahkan kunjungi link ini. <a href="https://www.instagram.com/developer/" target="_blank">Create Instagram API</a></small>
							</div>
						</div>
						<button class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Instagram -->
</div>