<!-- Jumbotron -->
<!-- <div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">Welcome to <span>ID-MJ Parfume</span>
		</h1>
		<p class="lead d-none d-md-block wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.8s">MJ Perfume adalah
			produk wewangian/parfum untuk pria dan wanita,
			dengan
			kualitas
			aroma yang fresh
			dan tahan lebih lama serta memiliki lebih dari 1.700 varian aroma yang diantaranya merupakan aroma favorit
		anda.</p>
	</div>
</div> -->

<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/img/bg.jpg'); ?>" class="d-block w-100" alt="Gambar - 1">
      <div class="carousel-caption d-none d-lg-block">
        <h3>Selamat Datang Di<br><?= $photos[0]['user']['full_name']; ?></h3>
        <p>Selamat datang di website ID MJ-Parfume</p>
        <a href="<?= base_url('auth/registrasi'); ?>" class="btn btn-warning rounded-pill">DAFTAR SEKARANG</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/bg-2.jpg'); ?>" class="d-block w-100" alt="Gambar - 2">
      <div class="carousel-caption d-none d-lg-block">
        <h3>Selamat Datang Di<br><?= $photos[0]['user']['full_name']; ?></h3>
        <p>Selamat datang di website ID MJ-Parfume</p>
        <a href="<?= base_url('auth/registrasi'); ?>" class="btn btn-warning rounded-pill">DAFTAR SEKARANG</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://drive.google.com/uc?export=download&id=1NSeFxs2MXhLfCU14qtqnRWce8LPJC6bR" class="d-block w-100" alt="Gambar - 3">
      <div class="carousel-caption d-none d-lg-block">
        <h3>Selamat Datang Di<br><?= $photos[0]['user']['full_name']; ?></h3>
        <p>Selamat datang di website ID MJ-Parfume</p>
        <a href="<?= base_url('auth/registrasi'); ?>" class="btn btn-warning rounded-pill">DAFTAR SEKARANG</a>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
<!--   <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->
</div>
<!-- <?php var_dump($_SESSION); ?> -->
<!-- Profile -->
<section id="profile">
	<div class="container">
		<h1 class="judul-head text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">Profil</h1>
		<div class="
			row">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
				<!-- <img src="img/ori.jpg" id="ori-logo"> -->
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/YvY0z2-6irM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
				</div>
			</div>
			<div class="text-justify col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
				<p><span>Maju Jaya (MJ)</span> Sejahtera Perfume, Adalah parfum pria & wanita karya anak bangsa yang memiliki
				kualitas
				sangat baik, karena diproduksi menggunakan bibit parfum import berkualitas tinggi sehingga menghasilkan
				parfum berkualitas dan harganya pun sangat terjangkau semua lapisan masyarakat. Sejatinya MJ Parfum telah
			hadir ditengah-tengah masyarakat sejak 2015, namun benar-benar diresmikan baru pada akhir 2016.</p>
			<a href="#" class="btn btn-danger justify-content-center tombol">Read More <i class="fa fa-chevron-circle-down"
			aria-hidden="true"></i></a>
		</div>
	</div>
</div>
</section>
<section id="price-Plan">
<div class="container">
	<h2 class="judul-head text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">Harga</h2>
	<div class="row">
		<div class="col-lg">
			<div class="card text-white bg-dark mb-3 text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
				<div class="card-header">Eceran</div>
				<div class="card-body">
					<h5 class="card-title">Rp. 65.000,-</h5>
					<p class="card-text">Harga untuk setiap pembelian satuan / eceran.</p>
				</div>
				<a href="#" class="btn btn-primary tombol">Beli Sekarang</a>
			</div>
		</div>
		<div class="col-lg">
			<div class="card text-white bg-secondary mb-3 text-center wow fadeInDown" data-wow-duration="1s"
				data-wow-delay="0.9s">
				<div class="card-header">Dropshiper</div>
				<div class="card-body">
					<h5 class="card-title">Disc 10% + 5%</h5>
					<p class="card-text">10% fee kami berikan untuk setiap dropship yang sukses, dan akumulasi 5% kami
					berikan dalam bentuk 1 lusin parfum jika sudah 120 botol dropship yang sukses</p>
				</div>
				<a href="#" class="btn btn-primary tombol">Selengkapnya</a>
			</div>
		</div>
		<div class="col-lg">
			<div class="card text-white bg-success mb-3 text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">
				<div class="card-header">Reseller</div>
				<div class="card-body">
					<h5 class="card-title">Perlusin</h5>
					<p class="card-text">Keuntungan menjadi reseller MJ Perfume mencapai 35% - 50%. dan untuk menjadi
						reseller, calon reseller diwajibkan melakukan pembelian minimal 1 lusin MJ Parfum yang tentunya dari
					sisi harga lebih murah dari harga ecer</p>
				</div>
				<a href="#Res-info" class="btn btn-primary tombol">Selengkapnya</a>
			</div>
		</div>
		<div class="col-lg">
			<div class="card text-white bg-danger mb-3 text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s">
				<div class="card-header">Distributor</div>
				<div class="card-body">
					<h5 class="card-title">Perdus</h5>
					<p class="card-text">Besaran keuntungan seorang distributor ditentukan dari quantity yang dihasilkan. dan
						keuntungan lain bahwa seorang distributor bisa melebarkan sayap usahanya dengan menerima reseller dari
					daerah lainnya.</p>
				</div>
				<a href="#Dis-info" class="btn btn-primary tombol">Selengkapnya</a>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Galery -->
<section id="Galery">
<div class="container">
	<h1 class="judul-head text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">Galeri</h1>
	<div class="row">
		<?php foreach( $photos as $photo ) : ?>
		<div class="col-md-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
			<a href="<?= $photo['images']['standard_resolution']['url']; ?>" data-lightbox="roadtrip" data-title="<?= $photo['user']['full_name']; ?>"><img src="<?= $photo['images']['standard_resolution']['url']; ?>" class="img-thumbnail"></a>
		</div>
		<?php endforeach; ?>
		
	</div>
</div>
</section>
<section id="Testimonial">
<div class="container">
	<h1 class="judul-head text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">Peluang Usaha</h1>
	<p id="p1" class="lead text-justify wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Peluang Usaha yang diberikan MJ Perfume layak untuk anda jadikan prioritas utama dalam pemilihan bidang usaha baru yang potensial, karena membuka usaha di MJ Perfume maka usaha anda di garansi 100%. sehingga anda tidak perlu lagi berfikir akan rugi, dan tetap fokus mengembangkannya.</p>
	<h4 id="Res-info" class="text-white wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">Reseller MJ-Parfum</h4>
	<div class="row">
		<div class="col-md-6 justify-content-center ">
			<p id="p2" class="lead text-justify wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.8s">Salah satu peluang Menjanjikan yang diberikan oleh MJ Parfum adalah dengan menjadi reseller MJ Parfum.
				<span><i class="fa fa-share-square-o" aria-hidden="true"></i> Ketentuan & Keuntungan</span>
				Untuk menjadi reseller MJ Parfum harus melakukan order minimal 1 lusin (12 botol), kategori reseller adalah pemesanan 1 s/d 9 lusin. sedangkan 10 lusin keatas masuk kategori Distributor.
				<span><i class="fa fa-share-square-o" aria-hidden="true"></i> 35% s/d 50% Keuntungan</span>
				Keuntungan penjualan yang dilakukan seorang reseller sepenuhnya milik reseller, karena Usaha di MJ Parfum bukan MLM. dan keuntungannya mencapai 50%.
				<span><i class="fa fa-share-square-o" aria-hidden="true"></i> Garansi Modal 100% & Bisa Tukar Aroma</span>
			Enaknya usaha menjadi reseller MJ Parfum, bahwa anda tidak perlu memikirkan resiko, karena bisa kembali barang dan modal anda pun dikembalikan 100%, selain itu juga jika ada stock anda yang aromanya tidak bergerak, anda bisa melakukan tukar/ganti aroma.</p>
		</div>
		<div class="col-md-4 d-none d-md-block wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">
			<img src="<?= base_url('assets/') ?>img/bg-res.jpg">
		</div>
		
	</div>
	<div id="dis-img" class="row">
		<div class="col-md-4 d-none d-md-block wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s">
			<img src="<?= base_url('assets/') ?>img/bg-dist.jpg">
		</div>
		<div class="col-md-6">
			<h4 id="Dis-info" class="text-right text-danger wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">Distributor MJ-Parfum</h4>
			<p id="p4" class="lead text-justify wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
				Mengapa pilih Distributor MJ Parfum? Dengan akan terus berkembangnya MJ Parfum karena semakin menjadi pilihan masyarakat dalam hal pemilihan parfum, maka menjadi DISTRIBUTOR di MJ Parfum adalah pengembangan usaha yang sangat menjanjikan.
				<span><i class="fa fa-share-square-o" aria-hidden="true"></i>  Keuntungan Besar</span>
				DISTRIBUTOR akan lebih fokus dalam pengembangan usaha dengan merekrut sebanyak-banyaknya reseller (Penjual ecer) dari seluruh indonesia dan memanage konsistensinya, Jika di ilustrasikan : seorang distributor memiliki 200 reseller, dan tiap reseller order 3 lusin per bulan, dari tiap botol yang diorder reseller seorang distributor mendapat keuntungan Rp 5.000. Maka :
				200 x 36 botol (3 lusin) = 7.200 botol
				7.200 botol x Rp 5.000 = Rp 36.000.000,-
				ilustrasi ini hanya hitungan terkecil. anda bisa menghitung sendiri jika lebih dari yang diatas.
				<span><i class="fa fa-share-square-o" aria-hidden="true"></i> Garansi Modal 100% & Bisa Tukar Aroma</span>
				Sangat kecilnya resiko dengan mengembangkan usaha DISTRIBUTOR MJ Parfum karena :
				-Jika ada stock aroma yang tidak bergerak, anda bisa dengan menukarkannya dengan aroma yang hot item / best seller lainnya.
			- Modal anda digaransi 100%, jika suatu saat anda ingin pensiun/berhenti dari DISTRIBUTOR MJ Parfum, anda bisa mengembalikan barang dan modal anda pun akan dikembalikan 100% sesuai stock barang yang anda kembalikan.</p>
		</div>
	</div>
</div>
</section>
<section id="contactPerson">
<h1 class="judul-head text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">Informasi Kontak</h1>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-4 text-center mt-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
			<div class="card text-white bg-primary shadow">
				<div class="card-body">
					<h5 class="card-title">Detail Kontak</h5>
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
		<div class="col-lg-6 mt-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
			<div class="card bg-dark shadow">
				<div class="card-body text-white text-center">
					<h5 class="card-title">Lokasi</h5>
					<!-- <p>Berikut ini lokasi tempat usaha kami.</p> -->
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.5474188422208!2d98.61869762916581!3d3.5436758998388265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f8103eb1219%3A0x19c42d2531a58910!2sGg.+Keluarga%2C+Tj.+Sari%2C+Medan+Selayang%2C+Kota+Medan%2C+Sumatera+Utara+20135!5e0!3m2!1sid!2sid!4v1549825020667"
				height="368px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
</div>
</section>

