<div class="container-fluid">
	<?php if( $this->session->flashdata('msg')) : ?>
          <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
      <?php endif; ?>
	<div class="row">
		<div class="col-lg-6">
			<div class="card shadow mb-4">
				<div class="card-body">
					<h6 class="text-primary">Facebook login</h6>
					<hr>
					<form action="<?= base_url('admin/setting/update_sosial_api'); ?>" method="post" >
						<div class="form-group row">
							<label for="fbid" class="col-sm-3 col-form-label label-judul">App ID</label>
							<div class="col-md-9">
								<input type="text" name="fbid" class="form-control" id="fbid" placeholder="facebook app id" value="<?= $fbapi->api_fb_id; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="fbkey"  class="col-sm-3 col-form-label label-judul">App Secret</label>
							<div class="col-md-9">
								<input type="text" name="fbkey" class="form-control" id="fbkey" placeholder="facebook app secret" value="<?= $fbapi->api_fb_key; ?>">
								<small class="font-italic text-grey">Untuk mendapatkan App ID & App Secret Facebook, silahkan kunjungi link ini. <a href="https://developers.facebook.com/" target="_blank">Buat API facebook</a></small>
							</div>
						</div>
						<button type="submit" name="fbapi" class="btn btn-primary float-right">Simpan</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card shadow mb-4">
				<div class="card-body">
					<h6 class="text-primary">Google login</h6>
					<hr>
					<div class="form-group row">
						<label for="fbid" class="col-sm-3 col-form-label label-judul">App ID</label>
						<div class="col-md-9">
							<input type="text" name="fbid" class="form-control" id="fbid" placeholder="facebook app id" value="">
						</div>
					</div>
					<div class="form-group row">
						<label for="fbkey"  class="col-sm-3 col-form-label label-judul">App Secret</label>
						<div class="col-md-9">
							<input type="text" name="fbkey" class="form-control" id="fbkey" placeholder="facebook app secret" value="">
						</div>
					</div>
					<button class="btn btn-primary float-right">Simpan</button>
				</div>
			</div>
		</div>
		
	</div>
</div>