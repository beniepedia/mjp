<div class="pesanNotif" data-title="<?= $this->session->flashdata('title'); ?>" data-pesan="<?= $this->session->flashdata('pesan'); ?>" data-error="<?= $this->session->flashdata('type'); ?>"></div>

<div class="container" style="margin: 5rem auto;">
	<div class="row justify-content-center">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card text-white bg-primary shadow">
				<div class="card-body text-center">
					<h4 class="font-weight-bold">Hubungi Kami</h4>
					<small class="card-text font-italic">Silahkan hubungi kami jika ada pertanyaan menyangkut dengan produk kami dengan
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
						<div class="g-recaptcha" name="g-recaptcha-response" data-sitekey="6Levq64UAAAAACuXFOMsLJZ_1l57h8k5ahlUDpaa"></div>
						<div class="form-group">
						<?= form_error('g-recaptcha-response', '<small class="text-danger form-error">','</small>'); ?>
							<br>	
							<button class="btn btn-primary float-right" type="submit" name="submit">Kirim Pesan</button>
						</div>
					</form>
				</div>
				
			</div>

		</div>
		<div class="col-lg-4 offset-lg-1">
			<div class="card text-white bg-primary shadow">
				<div class="card-body text-center">
					<h4 class="font-weight-bold ">Detail Kontak</h4>
					<small class="card-text font-italic">Hubungi kami melalui salah satu kontak dibawah ini, untuk mendapatkan respon yang rebih cepat. Terimak kasih.</small>
				</div>
			</div>
			<div class="list-group shadow text-left">
				<a href="#" class="list-group-item list-group-item-action">
					<i class="fa fa-map-marker"></i>
					Gg. Keluarga, Tj. Sari, Kec. Medan Selayang, Kota Medan, Sumatera Utara 20135
				</a>
				<a href="mailto:admin@id-mjp.com" class="list-group-item list-group-item-action">
					<i class="fas fa-envelope-open-text"></i>
					admin@id-mjp.com
				</a>
				<a href="#" class="list-group-item list-group-item-action">
					<i class="fas fa-phone"></i>
					+62822-8866-9090
				</a>
				<a href="https://api.whatsapp.com/send?phone=6282288669090&text=Hallo%20*admin*,%20saya%20mau%20tanya." target="_blank" class="list-group-item list-group-item-action">
					<i class="fab fa-whatsapp"></i>
					admin 1 (+62822-8866-9090)
				</a>
				<a href="https://api.whatsapp.com/send?phone=6287772360300&text=Hallo%20*admin*,%20saya%20mau%20tanya." target="_blank" class="list-group-item list-group-item-action">
					<i class="fab fa-whatsapp"></i>
					admin 2 (+62877-7236-0300)
				</a>
				<a href="https://api.whatsapp.com/send?phone=6287772360300&text=Hallo%20*admin*,%20saya%20mau%20tanya." target="_blank" class="list-group-item list-group-item-action">
					<i class="fab fa-internet-explorer"></i>
					www.id-mjp.com
				</a>
			</div>
		</div>

	</div>

</div>