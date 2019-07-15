<div class="container-fluid">
<div class="row justify-content-center">
	
<div class="col-lg-6">
	<!-- Dropdown Card Example -->
	<div class="card shadow mb-4">
		<!-- Card Header - Dropdown -->
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">User Detail</h6>
			<div class="dropdown no-arrow">
				<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
					<div class="dropdown-header">Dropdown Header:</div>
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
		</div>
		<!-- Card Body -->
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12">
					<ul class="list-group list-group-flush lead">
					  <li class="list-group-item">Nama Lengkap : <?= $userDtl['name']; ?></li>
					  <li class="list-group-item">Alamat : <?= $userDtl['address']; ?></li>
					  <li class="list-group-item">Alamat Email : <?= $userDtl['email']; ?></li>
					  <li class="list-group-item">Kelamin : <?= $userDtl['gender']; ?></li>
					  <li class="list-group-item">Level : <?= $userDtl['role']; ?></li>
					  <li class="list-group-item">Status : <?= $userDtl['is_active']==1?'Aktif':'NonAktif'; ?></li>
					  <li class="list-group-item">Login Provider : <?= $userDtl['oauth_provider']; ?></li>
					  <li class="list-group-item">Ip Address : <?= $userDtl['ipaddr']; ?></li>
					  <li class="list-group-item">Tanggal Daftar : <?= date("d-m-Y", $userDtl['date_created']); ?></li>
					  <li class="list-group-item">Login Terakhir : <?= $userDtl['last_login'] ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-6">
	<!-- Dropdown Card Example -->
	<div class="card shadow mb-4">
		<!-- Card Header - Dropdown -->
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Photo User</h6>
			<div class="dropdown no-arrow">
				<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
					<div class="dropdown-header">Dropdown Header:</div>
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?= base_url('admin/user'); ?>">Kembali</a>
				</div>
			</div>
		</div>
		<!-- Card Body -->
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12">
					<?php if( $userDtl['oauth_provider'] == 'local' ) : ?>
						<img src="<?= base_url('assets/img/user_img/'); ?><?= $userDtl['image']; ?>" class="img-fluid img-thumbnail" alt="">
					<?php else : ?>
						<img src="<?= $userDtl['image']; ?>" class="img-fluid img-thumbnail" alt="">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>




