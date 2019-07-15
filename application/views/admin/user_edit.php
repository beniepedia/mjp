<div class="container-fluid">
	<div class="row">
		
		<div class="col-lg-6">
			<!-- Dropdown Card Example -->
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
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
							<form action="">
								<div class="form-group">
									<label for="name" class="label-judul">Nama :</label>
									<input type="text" id="name" class="form-control" value="<?= $userData['name']; ?>">
								</div>
								<div class="form-group">
									<label for="email" class="label-judul">Email :</label>
									<input type="text" id="email" class="form-control" value="<?= $userData['email']; ?>">
								</div>
								<div class="form-group">
									<label for="name" class="label-judul">Alamat :</label>
									<textarea type="text" id="name" class="form-control"><?= $userData['address']; ?></textarea>
								</div>
								<div class="form-group">
									<label for="name" class="label-judul">Kelamin :</label>
									 <select class="custom-select" id="inputGroupSelect02">
									    <option selected="true" disabled="disabled">Pilih Kelamin...</option>
									    <option value="laki-laki" <?php if($userData['gender']=='laki-laki'){echo 'selected';} ?>>Laki - Laki</option>
									    <option value="perempuan" <?php if($userData['gender']=='perempuan'){echo 'selected';} ?>>Perempuan</option>
									 </select>
								</div>
								<div class="form-group">
									<label for="" class="label-judul">Status : </label>
									<div class="form-check form-check-inline pl-3">
										  <input class="form-check-input" type="radio" name="kelamin" id="inlineRadio1" value="aktif" <?php if($userData['is_active']==1){echo 'checked';} ?>>
										  <label class="form-check-label" for="inlineRadio1">Aktif</label>
									</div>
									<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="kelamin" id="inlineRadio2" value="nonaktif" <?php if($userData['is_active']==0){echo 'checked';} ?>>
										  <label class="form-check-label" for="inlineRadio2">Non Aktif</label>
									</div>
								<div class="form-group mt-2">
									<label for="name" class="label-judul">Login Via :</label>
									<input type="text" id="name" class="form-control" value="<?= $userData['oauth_provider']; ?>" readonly>
								</div>
								<div class="form-group">
									<label for="name" class="label-judul">Tgl Daftar :</label>
									<input type="text" id="name" class="form-control" value="<?= date("d/m/Y H:i:s", $userData['date_created']); ?>" readonly>
								</div>
								<div class="form-group float-right">
									<a href="<?= base_url('admin/user'); ?>" class="btn btn-light btn-icon-split">
					                    <span class="icon text-gray-600">
					                      <i class="fas fa-undo-alt"></i>
					                    </span>
					                    <span class="text">Kembali</span>
					                 </a>
									<a href="#" class="btn btn-primary btn-icon-split">
					                    <span class="icon text-gray-600">
					                      <i class="fas fa-save"></i>
					                    </span>
					                    <span class="text">Update</span>
					                  </a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>