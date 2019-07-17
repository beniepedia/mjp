<div class="container-fluid">
	<div class="row">
		<!-- Card setingan umum -->
		<div class="col-lg-6">
			<!-- Dropdown Card Example -->
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Pengaturan Umum</h6>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12">
							<?php if( $this->session->flashdata('msg')) : ?>
			          <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
			          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          </div>
			        <?php endif; ?>
							<form action="<?= base_url('admin/setting/update'); ?>" method="post">
								<div class="form-group row">
							    <label for="sitename" class="col-sm-3 col-form-label label-judul">Judul Web</label>
							    <div class="col-md-9">
							      <input type="text" name="sitename" class="form-control" id="sitename" placeholder="Id-MJParfume" value="<?= $site['site_name']; ?>">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="sitealias"  class="col-sm-3 col-form-label label-judul">Domain</label>
							    <div class="col-md-9">
							      <input type="text" name="sitealias" class="form-control" id="sitealias" placeholder="ID-Mjp.com" value="<?= $site['site_alias']; ?>">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="siteauthor" class="col-sm-3 col-form-label label-judul">Pemilik</label>
							    <div class="col-md-9">
							      <input type="text" name="siteauthor" class="form-control" id="siteauthor" placeholder="BeniePedia" value="<?= $site['site_author']; ?>">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="sitedesc" class="col-sm-3 col-form-label label-judul">Deskripsi</label>
							    <div class="col-md-9">
							      <textarea type="text" name="sitedesc" class="form-control" rows="6" id="sitedesc" placeholder="Deskripsi web"><?= $site['site_description']; ?></textarea>
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

		<!-- Card Sosial Login -->
			<div class="col-lg-6">
			<!-- Dropdown Card Example -->
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Sosial Login</h6>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12">
							<small class="text-primary">Facebook login</small>
							<form action="<?= base_url('admin/setting/update'); ?>" method="post" >
								<div class="form-group row">
							    <label for="fbid" class="col-sm-3 col-form-label label-judul">App ID</label>
							    <div class="col-md-9">
							      <input type="text" name="fbid" class="form-control" id="fbid" placeholder="facebook app id" value="<?= $site['fb_id']; ?>">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="fbkey"  class="col-sm-3 col-form-label label-judul">App Secret</label>
							    <div class="col-md-9">
							      <input type="text" name="fbkey" class="form-control" id="fbkey" placeholder="facebook app secret" value="<?= $site['fb_key']; ?>">
							    </div>
							  </div>
							  <hr>
							  <small class="text-danger">Google Login</small>
							  <div class="form-group row">
							    <label for="gid" class="col-sm-3 col-form-label label-judul">Client ID</label>
							    <div class="col-md-9">
							      <input type="text" name="gid" class="form-control" id="gid" placeholder="google client id" value="<?= $site['google_client_id']; ?>">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="gkey" class="col-sm-3 col-form-label label-judul">Client Key</label>
							    <div class="col-md-9">
							      <input type="text" name="gkey" class="form-control" id="gkey" placeholder="google client secret" value="<?= $site['google_client_key']; ?>">
							    </div>
							  </div>
							  <div class="form-group">
							  		<div class="form-check">
										  <input class="form-check-input" type="checkbox" value="1" id="checkbox_sosial" <?= $site['is_active']==1?'checked':''; ?>>
										  <label class="form-check-label">
										    Aktifkan Fitur ini?
										  </label>
										</div>
							  </div>

								<div class="form-group float-right">
									<button type="submit" name="save_sosial" class="btn btn-primary btn-icon-split">
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
	</div>
</div>