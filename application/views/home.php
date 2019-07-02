<?php
function get_CURL($url)
{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

return json_decode($result, true);

}
$result = get_CURL('https://api.instagram.com/v1/users/self/media/recent?access_token=10016460928.640eb2b.4a170bed44784d40b2027b6daa0ea773&count=12');
$myUsername = $result['data'][0]['user']['username'];
$photos = [];
foreach( $result['data'] as $photo){
$photos[] = $photo['images']['standard_resolution']['url'];
}
?>
<!doctype html>
<html lang="en" id="home">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/<?= base_url('assets/');?>css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="<?= base_url('assets/');?>css/bootstrap.css">
		<!-- Awesom Font -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- My CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/');?>css/mystyle.css">
		<!-- lightbox css -->
		<link rel="stylesheet" href="<?= base_url('assets/');?>css/lightbox.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/');?>css/animate.css">
		<link href="<?= base_url('assets/');?>/js/toast/toastr.min.css" rel="stylesheet" />
		<title>ID - MJ Parfume</title>
	</head>
	<body>
		<!-- Navbar Primary -->
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#"><img src="<?= base_url('assets/') ?>img/logo.jpg">ID MJ-PARFUME</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" href="#home"><i
					class="fa fa-home" aria-hidden="true"></i>Beranda</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" href="#profile"><i
					class="fa fa-user-circle-o" aria-hidden="true"></i>Profil</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s" href="#price-Plan"><i
					class="fa fa-credit-card" aria-hidden="true"></i>Harga</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s" href="#Galery"><i
					class="fa fa-picture-o" aria-hidden="true"></i>Galeri</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s" href="#Testimonial"><i
					class="fa fa-comments" aria-hidden="true"></i>Peluang Usaha</a>
					<a class="nav-item nav-link wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s" href="#contactPerson"><i
					class="fa fa-address-book-o" aria-hidden="true"></i>Kontak</a>
					<!-- <a class="nav-item btn btn-primary tombol" href="#">Join Reseller</a> -->
				</div>
			</div>
		</nav>
		<!-- Navbar Secondary -->
		<div class="d-none d-lg-block">
			<div class="Scrolling fixed-top">
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
					<a class="navbar-brand" href="#home"><img src="<?= base_url('assets/') ?>img/logo.jpg">ID MJ-PARFUME</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<div class="navbar-nav ml-auto">
							<a class="nav-item nav-link active" href="#home"><i class="fa fa-home" aria-hidden="true"></i>Beranda</a>
							<a class="nav-item nav-link" href="#profile"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Profil</a>
							<a class="nav-item nav-link" href="#price-Plan"><i class="fa fa-credit-card" aria-hidden="true"></i>Harga</a>
							<a class="nav-item nav-link" href="#Galery"><i class="fa fa-picture-o" aria-hidden="true"></i>Galeri</a>
							<a class="nav-item nav-link" href="#Testimonial"><i class="fa fa-comments" aria-hidden="true"></i>Peluang Usaha</a>
							<a class="nav-item nav-link" href="#contactPerson"><i class="fa fa-address-book-o" aria-hidden="true"></i>Kontak</a>
							<!-- <a class="nav-item btn btn-primary tombol" href="#">Join Reseller</a> -->
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- Jumbotron -->
		<div class="jumbotron jumbotron-fluid">
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
		</div>
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
						<a href="#" class="btn btn-primary tombol">Go somewhere</a>
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
			<h1 class="judul-head text-center">Galeri</h1>
			<div class="row">
				<?php foreach( $photos as $photo ) : ?>
				<div class="col-md-3">
					<a href="<?= $photo ?>" data-lightbox="roadtrip" data-title="<?= $myUsername ?>"><img src="<?= $photo ?>" class="img-thumbnail"></a>
				</div>
				<?php endforeach; ?>
				
			</div>
		</div>
	</section>
	<section id="Testimonial">
		<div class="container">
			<h1 class="judul-head text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">Peluang Usaha</h1>
			<p id="p1" class="lead text-justify">Peluang Usaha yang diberikan MJ Perfume layak untuk anda jadikan prioritas utama dalam pemilihan bidang usaha baru yang potensial, karena membuka usaha di MJ Perfume maka usaha anda di garansi 100%. sehingga anda tidak perlu lagi berfikir akan rugi, dan tetap fokus mengembangkannya.</p>
			<h4 id="Res-info" class="text-white">Reseller MJ-Parfum</h4>
			<div class="row">
				<div class="col-md-6 justify-content-center ">
					<p id="p2" class="lead text-justify">Salah satu peluang Menjanjikan yang diberikan oleh MJ Parfum adalah dengan menjadi reseller MJ Parfum.
						<span><i class="fa fa-share-square-o" aria-hidden="true"></i> Ketentuan & Keuntungan</span>
						Untuk menjadi reseller MJ Parfum harus melakukan order minimal 1 lusin (12 botol), kategori reseller adalah pemesanan 1 s/d 9 lusin. sedangkan 10 lusin keatas masuk kategori Distributor.
						<span><i class="fa fa-share-square-o" aria-hidden="true"></i> 35% s/d 50% Keuntungan</span>
						Keuntungan penjualan yang dilakukan seorang reseller sepenuhnya milik reseller, karena Usaha di MJ Parfum bukan MLM. dan keuntungannya mencapai 50%.
						<span><i class="fa fa-share-square-o" aria-hidden="true"></i> Garansi Modal 100% & Bisa Tukar Aroma</span>
					Enaknya usaha menjadi reseller MJ Parfum, bahwa anda tidak perlu memikirkan resiko, karena bisa kembali barang dan modal anda pun dikembalikan 100%, selain itu juga jika ada stock anda yang aromanya tidak bergerak, anda bisa melakukan tukar/ganti aroma.</p>
				</div>
				<div class="col-md-4 d-none d-md-block">
					<img src="<?= base_url('assets/') ?>img/bg-res.jpg">
				</div>
				
			</div>
			<div id="dis-img" class="row">
				<div class="col-md-4 d-none d-md-block">
					<img src="<?= base_url('assets/') ?>img/bg-dist.jpg">
				</div>
				<div class="col-md-6">
					<h4 id="Dis-info" class="text-right text-danger">Distributor MJ-Parfum</h4>
					<p id="p4" class="lead text-justify">
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
		<h1 class="judul-head text-center">Kontak</h1>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 text-center mt-3">
					<div class="card text-white bg-primary">
						<div class="card-body">
							<h5 class="card-title">Hubungi Kami</h5>
							<small class="card-text">Silahkan hubungi kami jika ada pertanyaan menyangkut dengan produk kami dengan
							mengisi
							form dibawah ini</small>
						</div>
					</div>
					<div class="errorNotif" data-error="<?= validation_errors(); ?>"></div>
					<div class="card">
						<div class="card-body">
							<form method="post" action="<?= base_url('home/kontak'); ?>" autocomplete="off">
								<div class="form-group row">
									<label for="nama" class="col-sm-3 col-form-label">Nama</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="nama">
									</div>
								</div>

								<div class="form-group row">
									<label for="email" class="col-sm-3 col-form-label">Email</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="email">
									</div>
								</div>
								<div class="form-group row">
									<label for="telp" class="col-sm-3 col-form-label">No. Hp</label>
									<div class="col-sm-9">
										<input type="number" class="form-control" name="telp">
									</div>
								</div>
								<div class="form-group row">
									<label for="pesan" class="col-sm-3 col-form-label">Pesan</label>
									<div class="col-sm-9">
										<textarea name="pesan" id="pesan" class="form-control"></textarea>
									</div>
								</div>
								<div class="form-group">
									<button class="btn btn-primary" type="submit" name="submit">Kirim Pesan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-3">
					<div class="card bg-dark">
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
<section id="sosmed">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul>
					<li><a href="https://www.facebook.com/profile.php?id=100010250193567"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</li>
				<li><a href="https://www.instagram.com/id_mjparfum_official/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</li>
			<li><a href="https://api.whatsapp.com/send?phone=6287772360300&text=Hi%20*admin*,%20saya%20mau%20pesen%20parfum%20nya."
			target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
		</li>
	</ul>
</div>
</div>
</div>
</section>
<section id="footer">
<footer class="bg-dark text-white">
<div class="container pt-3">
<div class="row text-center">
	<div class="col">
		<p>&copy; Copyright 2019. Create by <a href="https://www.facebook.com/ahmadqomaini">Ahmad Qomaini</a></p>
	</div>
</div>
</div>
</footer>
</section>
<!-- Optional JavaScript -->
<script src="<?= base_url('assets/') ?>js/jquery-3.3.1.js"></script>
<!-- lightbox Js -->
<script src="<?= base_url('assets/') ?>js/lightbox.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
<!-- my script -->
<script src="<?= base_url('assets/') ?>js/script.js"></script>
<!-- Wow JS -->
<script src="<?= base_url('assets/') ?>js/wow.min.js"></script>
<script src="<?= base_url('assets/') ?>js/toast/toastr.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){
		var wow = new WOW({
		boxClass: 'wow', // animated element css class (default is wow)
		animateClass: 'animated', // animation css class (default is animated)
		offset: 0, // distance to the element when triggering the animation (default is 0)
		mobile: true, // trigger animations on mobile devices (default is true)
		live: true, // act on asynchronously loaded content (default is true)
		callback: function (box) {
		// the callback is fired every time an animation is started
		// the argument that is passed in is the DOM node being animated
		},
		scrollContainer: null, // optional scroll container selector, otherwise use window,
		resetAnimation: true, // reset animation on end (default is true)
		});
		wow.init();

		const notif = $('.errorNotif').data('error');
        if(notif)
        {
        	toastr['error'](notif, 'Semua field wajib diisi, Pesan gagal terkirim !</br>',{
        		"closeButton": true,
        		"hideDuration": "1000",
        		"showEasing": "swing",
        		"hideEasing": "linear",
					  "showMethod": "fadeIn",
					  "hideMethod": "fadeOut"
        	})
        }

	});


</script>
</body>
</html>