<div class="container-fluid">
	<div class="row justify-content-center">
		
		<div class="col-lg-6">
			<!-- Dropdown Card Example -->
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12">
							<form action="<?= base_url('admin/user/edituser/'); ?>" method="post">
								<input type="hidden" value="<?= $userData->id_user; ?>" name="id_user">
								<div class="form-group">
									<label for="name" class="label-judul">Nama :</label>
									<input type="text" id="name" name="name" class="form-control <?= form_error('name')?'is-invalid':null ?>" value="<?=$this->input->post('name') ?? $userData->name; ?>">
									<?= form_error('name')?>
								</div>
								<div class="form-group">
									<label for="phone" class="label-judul">Handphone :</label>
									<input type="text" id="phone" name="phone" class="form-control <?= form_error('phone')?'is-invalid':null ?>" value="<?=$this->input->post('phone') ?? $userData->phone; ?>">
									<?= form_error('phone')?>
								</div>
								<div class="form-group">
									<label for="email" class="label-judul">Email :</label>
									<input type="text" id="email" name="email" class="form-control <?= form_error('email')?'is-invalid':null ?>" value="<?=$this->input->post('email') ?? $userData->email; ?>">
									<?= form_error('email')?>
								</div>
								<div class="form-group">
									<label for="password" class="label-judul font-italic">Password : <small>biarkan kosong jika tidak diganti</small></label>
									<input type="password" id="password" name="password" class="form-control <?= form_error('password')?'is-invalid':null ?>" value="<?= $this->input->post('password'); ?>">
									<?= form_error('password')?>
								</div>
								<div class="form-group">
									<label for="passconf" class="label-judul">Konfirmasi Password :</label>
									<input type="passconf" id="passconf" name="passconf" class="form-control <?= form_error('passconf')?'is-invalid':null ?>" value="<?= $this->input->post('passconf'); ?>">
									<?= form_error('passconf')?>
								</div>
								<div class="form-group">
									<label for="addr" class="label-judul">Alamat :</label>
									<textarea type="text" id="addr" name="addr" class="form-control <?= form_error('addr')?'is-invalid':null ?>"><?= $this->input->post('addr')??$userData->address; ?></textarea>
									<?= form_error('passconf')?>
								</div>
								<div class="form-group">
									<label for="gender" class="label-judul">Kelamin :</label>
									<select class="custom-select"  id="gender" name="gender">
										<?= $gender = $this->input->post('gender') ? $this->input->post('gender') : $userData->gender; ?>
										<option selected="true" value="">Pilih Kelamin...</option>
										<option value="laki-laki" <?= $gender=='laki-laki'?'selected':null; ?> >Laki - Laki</option>
										<option value="perempuan" <?= $gender=='perempuan'?'selected':null; ?> >Perempuan</option>
									</select>
									<?= form_error('gender')?>
								</div>
								<div class="form-group">
									<label for="" class="label-judul">Status : </label>
									<div class="form-check form-check-inline pl-3">
										<input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" <?php if($userData->is_active==1){echo 'checked';} ?>>
										<label class="form-check-label" for="inlineRadio1">Aktif</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" <?php if($userData->is_active==0){echo 'checked';} ?>>
										<label class="form-check-label" for="inlineRadio2">Non Aktif</label>
									</div>
									<div class="form-group mt-2">
										<label for="name" class="label-judul">Level :</label>
										<select class="form-control" name="level" id="">
											<option selected="true" disabled="disabled">Pilih Level</option>
											<?php foreach ($level as $l) { ?>
											<option value="<?= $l['id_role']; ?>" <?= $userData->role_id==$l['id_role']?'selected':null ?>><?= $l['role']; ?>
											</option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group float-right">
										<a href="<?= base_url('admin/user'); ?>" class="btn btn-light btn-icon-split">
											<span class="icon text-gray-600">
												<i class="fas fa-undo-alt"></i>
											</span>
											<span class="text">Batal</span>
										</a>
										<button type="submit" class="btn btn-primary btn-icon-split">
										<span class="icon text-gray-600">
											<i class="fas fa-save"></i>
										</span>
										<span class="text">Update</span>
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