<div class="pesanNotif" data-title="<?= $this->session->flashdata('title'); ?>" data-pesan="<?= $this->session->flashdata('pesan'); ?>" data-error="<?= $this->session->flashdata('type'); ?>"></div>

<div class="container-fluid" style="margin: 3rem auto;">
	<div class="row mb-4">
		<div class="col">
			<div class="card">
				<div class="card-body">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d497.77373786357606!2d98.61908300803097!3d3.5436230339506873!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1564048787002!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row justify-content-center mb-5">
		<div class="col-lg-6 col-md-6 col-sm-12">
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
					<form method="post" action="<?= base_url('kontak'); ?>">
						<div class="form-group row">
							<div class="col-lg-6 mb-3 mb-sm-0">
								<input type="text" class="form-control <?= form_error('nama')?'is-invalid':null; ?>" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
								<?= form_error('nama'); ?>
							</div>
							
					
							<div class="col-sm-6">
								<input type="number" class="form-control <?= form_error('telp')?'is-invalid':null; ?>" name="telp" placeholder="handphone" value="<?= set_value('telp'); ?>">
								<?= form_error('telp'); ?>
							</div>
						</div>
					
						<div class="form-group row">
							<div class="col">
								<input type="text" class="form-control <?= form_error('email')?'is-invalid':null; ?>" name="email" placeholder="Masukan email... " value="<?= set_value('email'); ?>">
								<?= form_error('email'); ?>
							</div>

						</div>
						
						<div class="form-group row">
							<div class="col">
								<textarea name="pesan" id="pesan" class="form-control <?= form_error('pesan')?'is-invalid':null; ?>" placeholder="Pesan anda disini..... "></textarea>
								<?= form_error('pesan'); ?>
							</div>

						</div>

						<div class="form-group row">
							<div class="col">
								<div class="g-recaptcha float-right" name="g-recaptcha-response" data-sitekey="6Levq64UAAAAACuXFOMsLJZ_1l57h8k5ahlUDpaa"></div>
							</div>
							
						</div>
						<?= form_error('g-recaptcha-response', '<small class="text-danger">','</small>'); ?>

	
						<div class="form-group mt-3">
							<button class="btn btn-primary float-right" type="submit" name="submit">Kirim Pesan  <i class="fas fa-paper-plane"></i></button>
						</div>

					</form>
				</div>
				
			</div>

		</div>
		<div class="col-lg-4 offset-lg-1 mb-5">
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