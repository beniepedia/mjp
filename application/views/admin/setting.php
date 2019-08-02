<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<?php if( $this->session->flashdata('msg')) : ?>
			<div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-lg-8 ">
			<div class="card shadow mb-4 ">
				<div class="card-header py-3 d-flex flex-row align-items-center ">
					<h6 class="m-0 font-weight-bold text-primary">Pengaturan Website</h6>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12">
							<?= form_open_multipart('admin/setting'); ?>
							<div class="form-group row">
								<label for="sitename" class="col-sm-3 col-form-label label-judul">Nama Website</label>
								<div class="col-md-9">
									<input type="text" name="sitename" class="form-control <?= form_error('sitename')?'is-invalid':null; ?>" id="sitename" placeholder="Id-MJParfume" value="<?= $this->input->post('sitename') ?? $site['site_name']; ?>" readonly>
									<?= form_error('sitename'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="sitealias"  class="col-sm-3 col-form-label label-judul">Alias</label>
								<div class="col-md-9">
									<input type="text" name="sitealias" class="form-control <?= form_error('sitealias')?'is-invalid':null; ?>" id="sitealias" placeholder="ID-Mjp.com" value="<?= $this->input->post('sitealias') ?? $site['site_alias']; ?>" readonly>
									<?= form_error('sitealias'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="siteauthor" class="col-sm-3 col-form-label label-judul">Pemilik</label>
								<div class="col-md-9">
									<input type="text" name="siteauthor" class="form-control <?= form_error('siteauthor')?'is-invalid':null; ?>" id="siteauthor" placeholder="BeniePedia" value="<?= $this->input->post('siteauthor') ?? $site['site_author']; ?>" readonly>
									<?= form_error('siteauthor'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="sitedesc" class="col-sm-3 col-form-label label-judul">Deskripsi</label>
								<div class="col-md-9">
									<textarea type="text" name="sitedesc" class="form-control <?= form_error('sitedesc')?'is-invalid':null; ?>" rows="3" id="sitedesc" placeholder="Deskripsi web" readonly><?= $this->input->post('sitedesc') ?? $site['site_description']; ?></textarea>
									<?= form_error('sitedesc'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="imgLogo" class="col-sm-3 col-form-label label-judul">Logo</label>
								<div class="col-md-9">
									<input type="hidden" name="old_logo" value="<?= $site['site_logo_header']; ?>">
									<input type="file" id="imgLogo" name="imgLogo" disabled>
									<img src="<?= base_url('assets/img/').$site['site_logo_header']; ?>" alt="" class="img-thumbnail mt-2" width="100">
								</div>
							</div>
							<div class="form-group row">
								<label for="hp" class="col-sm-3 col-form-label label-judul">Handphone</label>
								<div class="col-md-9">
									<input type="text" name="hp" class="form-control <?= form_error('hp')?'is-invalid':null; ?>" id="hp" placeholder="+6282174xxxx" value="<?= $this->input->post('hp') ?? $site['site_handphone']; ?>" readonly>
									<?= form_error('hp'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="wa1" class="col-sm-3 col-form-label label-judul">Whatsapp 1</label>
								<div class="col-md-9">
									<input type="text" name="wa1" class="form-control <?= form_error('wa1')?'is-invalid':null; ?>" id="wa1" placeholder="+6282174xxxx" value="<?= $this->input->post('wa1') ?? $site['site_whatsapp_1']; ?>" readonly>
									<?= form_error('wa1'); ?>
									<small class="font-italic text-muted">(*) gunakan +62 untuk nomor whatsapp</small>
								</div>
							</div>
							<div class="form-group row">
								<label for="wa2" class="col-sm-3 col-form-label label-judul">Whatsapp 2</label>
								<div class="col-md-9">
									<input type="text" name="wa2" class="form-control" id="wa2" placeholder="+6282174xxxx" value="<?= $site['site_whatsapp_2']; ?>" readonly>
									<small class="font-italic text-muted">(*) gunakan +62 untuk nomor whatsapp</small>
								</div>
							</div>
							<div class="form-group row">
								<label for="siteaddr" class="col-sm-3 col-form-label label-judul">Alamat</label>
								<div class="col-md-9">
									<textarea type="text" name="siteaddr" class="form-control <?= form_error('siteaddr')?'is-invalid':null; ?>" rows="3" id="siteaddr" placeholder="Alamat usaha" readonly readonly><?= $this->input->post('siteaddr') ?? $site['site_address']; ?></textarea>
									<?= form_error('siteaddr'); ?>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="fbUrl" class="col-sm-3 col-form-label label-judul">Facebook URL</label>
								<div class="col-md-9">
									<input type="text" name="fbUrl" class="form-control" id="fbUrl" placeholder="https://www.facebook.com/beniepedia" value="<?= $site['site_fb']; ?>" readonly readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="twUrl" class="col-sm-3 col-form-label label-judul">Twitter URL</label>
								<div class="col-md-9">
									<input type="text" name="twUrl" class="form-control" id="twUrl" placeholder="https://www.twitter.com/beniepedia" value="<?= $site['site_twitter']; ?>" readonly readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="igUrl" class="col-sm-3 col-form-label label-judul">Instagram URL</label>
								<div class="col-md-9">
									<input type="text" name="igUrl" class="form-control" id="igUrl" placeholder="https://www.instagram.com/beniepedia" value="<?= $site['site_instagram']; ?>" readonly readonly>
								</div>
							</div>
							<div class="form-group float-right mt-5">
								<a href="javascript:void(0)" onclick="window.location.href='setting';" class="btn btn-light btn-icon-split">
									<span class="icon text-gray-600">
										<i class="fas fa-undo-alt"></i>
									</span>
								</a>
								<button type="submit" id="btn-save" class="btn btn-primary btn-icon-split" style="display: none;">
								<span class="icon text-gray-600">
									<i class="fas fa-save"></i>
								</span>
								<span class="text">Simpan</span>
								</button>
								<button id="btn-update" class="btn btn-info btn-icon-split">
								<span class="icon text-gray-600">
									<i class="fas fa-edit"></i>
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
<?= form_close(); ?>

<script>
	$(document).ready(function(){
		$('#btn-update').on('click', function(e){
			e.preventDefault();
			$(this).css('display', 'none');
			$('#btn-save').css('display', 'inline-block');
			$('[type="text"]').attr('readonly', false);
			$('#imgLogo').prop('disabled', false);
		});
	});
</script>