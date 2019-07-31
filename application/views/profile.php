<div class="container-fluid">
	<?php if( $this->session->flashdata('msg')) : ?>
	<div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</div>
	<?php endif; ?>
	<form action="<?= base_url('profile'); ?>" enctype="multipart/form-data" method="post">
		<div class="row justify-content-center">
			<div class="col-lg-4">
				<div class="card shadow mb-4">
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-primary">Foto Profil</h6>
					</div>
					<div class="card-body ">
						<div class="row justify-content-center">
							<div class=" ">
								<div class="picture-container ">
									<form action="<?= base_url('profile'); ?>" enctype="multipart/form-data" method="post">
										<div class="picture">
											<?php if( $user->oauth_provider == 'local' ) : ?>
											<img src="<?= base_url('assets/img/user_img/'); ?><?= $user->image; ?>" class="img-fluid rounded-circle" alt="" id="wizardPicturePreview">
											<input type="file" id="wizard-picture" class="user-profil" name="foto" disabled="true">
											<input type="hidden" name="old_foto" value="<?= $user->image; ?>">
											<?php else : ?>
											<img src="<?= $user->image; ?>" class="img-fluid img-circle" alt="">
											<?php endif; ?>
										</div>
										<h6 style="font-size: 16px; font-weight: bold; text-transform: uppercase; margin-top: 1.2rem; margin-bottom: 1.4rem;">Ganti Foto</h6>
									</div>
									<h6 class="text-center">Tanggal Daftar Member</h6>
									<h6 class="text-center"><?= longdate_indo(date("Y-m-d",$user->date_created)); ?></h6>
									<hr>
									<div class="col">
										<a href="" style="color:#3b5998;" ><i class="fab fa-facebook fa-2x "></i></a>
										<a href="" style="color:#55acee;"><i class="fab fa-twitter fa-2x pl-4"></i></a>
										<a href="" style="color: #dd4b39;" ><i class="fab fa-instagram fa-2x pl-4"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card shadow mb-4">
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary">Data Profil</h6>
						</div>
						<div class="card-body ">
							<div class="p-2 mt-2">
								<div class="form-group row">
									<!-- input nama -->
									<div class="col-sm-7 mb-3 mb-sm-0">
										<input type="hidden" name="id_user" value="<?= $user->id_user; ?>">
										<label for="name">Nama</label>
										<input type="text" class="form-control user-profil<?= form_error('name')?'is-invalid':null; ?>" id="name" name="name" style="margin-top: -6px;" value="<?=$this->input->post('name')??$user->name; ?>" readonly>
										<?= form_error('name'); ?>
									</div>
									<!-- tanggal lahir -->
									<div class="col-sm-5">
										<label for="phone">Handphone</label>
										<input type="text" id="phone" class="form-control user-profil <?= form_error('phone')?'is-invalid':null; ?>" name="phone" style="margin-top: -6px;" value="<?=$this->input->post('phone')??$user->phone; ?>" readonly>
										<?= form_error('phone'); ?>
									</div>
								</div>
								<!-- tgl lahir -->
								<div class="gorm-group row">
									<div class="col-sm-7 mb-3 mb-sm-0">
										<label for="tgl">Tgl Lahir</label>
										<input type="text" class="form-control user-profil <?= form_error('name')?'is-invalid':null; ?>" id="tgl" name="tgl" style="margin-top: -6px;" value="<?=$this->input->post('tgl')?? date("d/m/Y", strtotime($user->date)); ?>" placeholder="dd/mm/yyyy" readonly>
										<?= form_error('tgl'); ?>
									</div>
									<!-- kelamin -->
									<div class="col-sm-5 mb-3 mb-sm-3">
										<label for="gender">Kelamin</label>
										<select class="custom-select user-profil <?= form_error('gender')?'is-invalid':null ?>" id="gender" name="gender" id="gender" style="margin-top: -6px;" disabled="false">
											<option value="" selected="true" disabled="disabled">Pilih Kelamin...</option>
											<?php $level = $this->input->post('gender') ? $this->input->post('gender') : $user->gender;  ?>
											<option value="laki-laki" <?= $level=='laki-laki'?'selected':null;?> > Laki - Laki</option>
											<option value="perempuan" <?= $level=='perempuan'?'selected':null ?> >Perempuan</option>
										</select>
										<?= form_error('gender'); ?>
									</div>
								</div>
								<!-- email -->
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control user-profil <?= form_error('email')?'is-invalid':null ?>" id="email" name="email" style="margin-top: -6px;" value="<?=$this->input->post('email')??$user->email; ?>" readonly>
									<?= form_error('email') ?>
								</div>
								<!-- Alamat -->
								<div class="form-group">
									<label for="addr">Alamat</label>
									<textarea type="text" class="form-control user-profil <?= form_error('addr')?'is-invalid':null ?>" id="addr" name="addr" style="margin-top: -6px;" readonly><?= $this->input->post('addr')??$user->address; ?></textarea>
									<?= form_error('addr') ?>
								</div>

								<!-- tombol edit -->
								<div class="">
									<button class="btn btn-warning btn-block mt-5 btn-edit" ><i class="fas fa-edit"></i> Edit Profil</button>
									<button type="submit" class="btn btn-success btn-block btn-save mb-3 mt-5" style="display: none;"><i class="far fa-save"></i> Simpan</button>
									<a href="<?= base_url('profile') ?>" class="btn btn-secondary shadow btn-cancel" style="display: none;">Batal</a> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>