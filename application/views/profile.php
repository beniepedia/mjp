<div class="container-fluid">
<div class="row justify-content-center">
	
<div class="col-lg-6 col-md-8">
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
		</div>
		<div class="card-body ">
			<?php if( $this->session->flashdata('msg')) : ?>
		         <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
		          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	          </div>
	      	<?php endif; ?>
			<div class="row justify-content-between">
				<div class="col-lg-4 col-md-12">
					<div class="picture-container">
						<form action="<?= base_url('profile'); ?>" enctype="multipart/form-data" method="post">
						<div class="picture">
								<?php if( $user->oauth_provider == 'local' ) : ?>
									<img src="<?= base_url('assets/img/user_img/'); ?><?= $user->image; ?>" class="img-fluid rounded-circle" alt="" id="wizardPicturePreview">
									<input type="file" id="wizard-picture" name="foto">
									<input type="hidden" name="old_foto" value="<?= $user->image; ?>">

								<?php else : ?>
									<img src="<?= $user->image; ?>" class="img-fluid img-circle" alt="">
								<?php endif; ?>	
						</div>
						<h6 style="font-size: 16px; font-weight: bold; text-transform: uppercase;">Ganti Foto</h6>
					</div>
				</div>

				<div class="col-lg-8 col-md-12 mt-2">
					<input type="hidden" value="<?= $user->id_user ?>" name="id_user">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control <?= form_error('name')?'is-invalid':null; ?>" name="name" style="margin-top: -6px;" value="<?=$this->input->post('name')??$user->name; ?>">
						<?= form_error('name'); ?>
					</div>

					<div class="form-group">
						<label for="">Kelamin</label>
						<select class="custom-select <?= form_error('gender')?'is-invalid':null ?>" name="gender" id="gender" style="margin-top: -6px;">
						    <option value="" selected="true" disabled="disabled">Pilih Kelamin...</option>
						    <?php $level = $this->input->post('gender') ? $this->input->post('gender') : $user->gender;  ?>
						    <option value="laki-laki" <?= $level=='laki-laki'?'selected':null ?> >Laki - Laki</option>
						    <option value="perempuan" <?= $level=='perempuan'?'selected':null ?> >Perempuan</option>
						 </select>
						 <?= form_error('gender'); ?>
					</div>
				</div>
			</div>
			<div class="row mt-2">
				<div class="col">
				<div class="form-group">
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control <?= form_error('email')?'is-invalid':null ?>" name="email" style="margin-top: -6px;" value="<?=$this->input->post('email')??$user->email; ?>">
						<?= form_error('email') ?>
					</div>

					<label>Alamat</label>
					<textarea type="text" class="form-control <?= form_error('addr')?'is-invalid':null ?>" name="addr" style="margin-top: -6px;"><?= $this->input->post('addr')??$user->address; ?></textarea>
						<?= form_error('addr') ?>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-icon-split float-right mt-4">
            <span class="icon text-gray-600">
              <i class="fas fa-save"></i>
            </span>
            <span class="text">Simpan</span>
          </button>
				</div>
			</div>
		</div>


		</div>
		</div>
	</div>
</div>
</div>
</form>

