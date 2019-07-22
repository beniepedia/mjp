<div class="container-fluid">
	<div class="row justify-content-center">
		
		<div class="col-lg-5">
			<!-- Dropdown Card Example -->
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
				</div>
				<!-- Card Body -->
				<div class="card-body">
				<?php if( $this->session->flashdata('msg')) : ?>
			     <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
			      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    </div>
				<?php endif; ?>
					<div class="row">
						<div class="col-lg-12">
							<?= form_open('profile/changepassword'); ?>

							<div class="form-group">
								<label for="">Password Lama</label>
								<input type="password" class="form-control <?= form_error('oldpass')?'is-invalid':null; ?>" name="oldpass" placeholder="Password lama">
								<?= form_error('oldpass'); ?>
							</div>

							<div class="form-group">
								<label for="">Password Baru</label>
								<input type="password" class="form-control <?= form_error('newpass')?'is-invalid':null; ?>" name="newpass" placeholder="Password Baru">
								<?= form_error('newpass'); ?>
							</div>

							<div class="form-group">
								<label for="">Ulang Password Baru</label>
								<input type="password" class="form-control <?= form_error('passconf')?'is-invalid':null; ?>" name="passconf" placeholder="Ulangi password baru">
								<?= form_error('passconf'); ?>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-danger btn-icon-split float-right mt-4">
								<span class="icon text-gray-600">
									<i class="fas fa-save"></i>
								</span>
								<span class="text">Ganti</span>
								</button>
							</div>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>