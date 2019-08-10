

<div class="container-fluid" style="margin: 3rem auto;">
	<div class="row mb-4">
		<div class="col">
			<div class="card">
				<div class="card-body">
					<div id="maps" style="width: 100%; height: 30rem;"></div>
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
								<input type="text" class="form-control <?= form_error('subject')?'is-invalid':null; ?>" name="subject" placeholder="Subject" value="<?= set_value('subject'); ?>">
								<?= form_error('subject'); ?>
							</div>
						</div>
						
						<div class="form-group row">
							<div class="col">
								<textarea name="pesan" id="pesan" rows="5" class="form-control <?= form_error('pesan')?'is-invalid':null; ?>" placeholder="Pesan anda disini..... "></textarea>
								<?= form_error('pesan'); ?>
							</div>
						</div>
						<?php if($this->generalset->all()->general_set_captcha==1) : ?>
						<div class="form-group row">
							<div class="col">
								<div class="g-recaptcha float-right" name="g-recaptcha-response" data-sitekey="<?= $this->generalset->sosial_api()->api_captcha_sitekey; ?>"></div>
							</div>
							
						</div>
						<?= form_error('g-recaptcha-response', '<small class="text-danger">','</small>'); ?>
						<?php endif; ?>
	
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

<script>
	function initMap() {
		var option = {
			zoom: 8,
			center: {lat:  3.597031, lng:  98.678513}
		}

		var map = new google.maps.Map(document.getElementById('maps'), option);
	}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGytZJRmbYJjgIGHBYXikTpEkQr51Qt-M&callback=initMap">
</script>