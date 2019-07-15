<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
			<!-- Dropdown Card Example -->
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Pengaturan Umum</h6>
					<div class="dropdown no-arrow">
						<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
							<div class="dropdown-header">Dropdown Header:</div>
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
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
							    <label for="sitename" class="col-sm-3 col-form-label label-judul">Nama Web</label>
							    <div class="col-md-9">
							      <input type="text" name="sitename" class="form-control" id="sitename" placeholder="Id-MJParfume" value="<?= $site['site_name']; ?>">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="sitealias"  class="col-sm-3 col-form-label label-judul">Nama Lain</label>
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
							      <textarea type="text" name="sitedesc" class="form-control" id="sitedesc" placeholder="Deskripsi web"><?= $site['site_description']; ?></textarea>
							    </div>
							  </div>
								<div class="form-group float-right">
									<a href="<?= base_url('admin/user'); ?>" class="btn btn-light btn-icon-split">
										<span class="icon text-gray-600">
											<i class="fas fa-undo-alt"></i>
										</span>
									</a>
									<button type="submit" class="btn btn-primary btn-icon-split">
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