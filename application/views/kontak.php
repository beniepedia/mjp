<div class="pesanNotif" data-title="<?= $this->session->flashdata('title'); ?>" data-pesan="<?= $this->session->flashdata('pesan'); ?>" data-error="<?= $this->session->flashdata('type'); ?>"></div>

<div class="container">
	<div class="row mt-5 mb-5">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<h2 class="text-center">Kontak</h2>
			<div class="card text-white bg-primary shadow">
				<div class="card-body text-center">
					<h5 class="card-title">Hubungi Kami</h5>
					<small class="card-text">Silahkan hubungi kami jika ada pertanyaan menyangkut dengan produk kami dengan
					mengisi
					form dibawah ini</small>
				</div>
			</div>
			<div class="card mb-5">
				<div class="card-body shadow-lg">
					<form method="post" action="<?= base_url('kontak'); ?>" autocomplete="off">
						<div class="form-group row">
							<label for="nama" class="col-sm-3 col-form-label">Nama</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>">
								<?= form_error('nama', '<small class="text-danger form-error">','</small>'); ?>
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="email" value="<?= set_value('email'); ?>">
								<?= form_error('email', '<small class="text-danger form-error">','</small>'); ?>
							</div>

						</div>
						<div class="form-group row">
							<label for="telp" class="col-sm-3 col-form-label">Telp</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="telp" value="<?= set_value('telp'); ?>">
								<?= form_error('telp', '<small class="text-danger form-error">','</small>'); ?>
							</div>
						</div>
						<div class="form-group row">
							<label for="pesan" class="col-sm-3 col-form-label">Pesan</label>
							<div class="col-sm-9">
								<textarea name="pesan" id="pesan" class="form-control" value="<?= set_value('pesan'); ?>"></textarea>
								<?= form_error('pesan', '<small class="text-danger form-error">','</small>'); ?>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary float-right" type="submit" name="submit">Kirim Pesan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>