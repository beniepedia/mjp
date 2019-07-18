<section id="sosmed">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul>
					<li><a href="https://www.facebook.com/profile.php?id=100010250193567"><i 	class="fab fa-facebook-f" aria-hidden="true"></i></a>
					</li>
					<li><a href="https://www.instagram.com/id_mjparfum_official/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
					</li>
					<li><a href="https://api.whatsapp.com/send?phone=6287772360300&text=Hi%20*admin*,%20saya%20mau%20pesen%20parfum%20nya."
			target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Button Share -->
<section id="btn-share">
	<footer class="bg-secondary text-white ">
		<div class="container pt-5" style="margin-bottom: -80px">
			<h3 class="text-center">Bagikan :</h3>
			<div class="row text-center pt-5 pb-3 justify-content-center">
				<!-- AddToAny BEGIN -->
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
				<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
				<a class="a2a_button_facebook"></a>
				<a class="a2a_button_twitter"></a>
				<a class="a2a_button_email"></a>
				<a class="a2a_button_whatsapp"></a>
				<a class="a2a_button_telegram"></a>
				<a class="a2a_button_google_gmail"></a>
				</div>
				<!-- AddToAny END -->
			</div>
		</div>
	</footer>
</section>

<!-- Footer -->
<section id="footer">
	<footer class="bg-dark text-white">
		<div class="container pt-3">
			<div class="row text-center">
				<div class="col">
					<p>&copy; Copyright <?= date("Y"); ?>. Create by <a href="https://www.facebook.com/ahmadqomaini">Ahmad Qomaini</a></p>
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- my script -->
<script src="<?= base_url('assets/') ?>js/script.js"></script>
<!-- Wow JS -->
<script src="<?= base_url('assets/') ?>js/wow.min.js"></script>
<script src="<?= base_url('assets/') ?>js/toast/toastr.min.js" type="text/javascript"></script>
<script id="intergram" type="text/javascript" src="https://www.intergram.xyz/js/widget.js"></script>
<script  type="text/javascript" src="<?= base_url('assets/') ?>js/chat.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
	var a2a_config = a2a_config || {};
	a2a_config.locale = "id";
</script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
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