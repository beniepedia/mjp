<div class="container">

	<div class="row justify-content-center mt-5">
		<div class="col-lg-4 mb-3 mb-sm-0">
			<div class="input-group input-group-lg">
				<select name="select" id="" class="form-control">
					<option value="">All</option>
					<option value="">Masakan</option>
					<option value="">Robot</option>
					<option value="">Mobil</option>
				</select>		
			</div>
		</div>

		<div class="col-lg-8 ">
			<div class="input-group input-group-lg mb-3">
			  <input type="text" class="form-control" placeholder="Search...">
			  <div class="input-group-append">
			    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
			  </div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row mt-5 mb-5">
		<?php foreach ($blog as $b) : ?>
		<div class="col-lg-4 col-md-6 col-sm-12 mb-5 ">
			<div class="card-deck">
				<div class="card shadow border-secondary card-blog">
					<a href="<?= base_url() . 'artikel/' . $b->slug; ?>"><img src="<?= base_url('assets/img/blog_img/') . $b->image; ?>" class="card-img-top" alt="..."></a>
					<div class="card-body">
					<h5 class="card-title"><a href="<?= base_url() . 'artikel/' . $b->slug; ?>">
						<?= $b->title; ?>
					</a></h5>
					<hr>
					<p class="card-text"><?= limit_words($b->content, 20); ?></p>
				</div>
				<div class="card-footer">
					<img src="<?= base_url('assets/img/blog_img/') . $b->image; ?>" alt="" class="img-fluid border-secondary">
					<small>ADMIN</small>
					<small class="text-muted">Tanggal post   <?= longdate_indo(date("Y-m-d", $b->date)); ?></small>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
</div>