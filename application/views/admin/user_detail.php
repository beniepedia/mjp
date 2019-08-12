<div class="container-fluid">
<div class="row justify-content-center">
	
<div class="col-xl-8 col-lg-7">
	<!-- Dropdown Card Example -->
	<div class="card shadow mb-4">
		<!-- Card Header - Dropdown -->
		<div class="card-header d-flex flex-row align-items-center justify-content-between">
			<a href="<?= base_url('admin/user'); ?>"><i class="fas fa-arrow-circle-left text-dark"></i></a>
			<h6 class="m-0 font-weight-bold text-primary">User Detail</h6>
		</div>
		<!-- Card Body -->
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12 table-responsive">
					<table class="table table-bordered table-hover">
						<tbody>
					    <tr>
					      <td>Nama </td>
					      <td><?= $userDtl->name; ?></td>
					    </tr>
					    <tr>
					      <td>Alamat</td>
					      <td><?= $userDtl->address; ?></td>
					    </tr>
					    <tr>
					      <td>Email</td>
					      <td><?= $userDtl->email; ?></td>
					    </tr>
					    <tr>
					      <td>Kelamin</td>
					      <td><?= $userDtl->gender; ?></td>
					    </tr>
					    <tr>
					      <td>Level</td>
					      <td><?= $userDtl->role; ?></td>
					    </tr>
					    <tr>
					      <td>Status</td>
					      <td><?= $userDtl->is_active==1?'Aktif':'NonAktif'; ?></td>
					    </tr> 
					    <tr>
					      <td>Login Provider</td>
					      <td><?= $userDtl->oauth_provider; ?></td>
					    </tr> 
					    <tr>
					      <td>Ip Address</td>
					      <td><?= $userDtl->ipaddr; ?></td>
					    </tr> 
					    <tr>
					    	<td>Tanggal Daftar</td>
					    	<td><?= longdate_indo(date("Y-m-d", $userDtl->date_created)).',  '.date("H:i:s", $userDtl->date_created); ?></td>
					    </tr>
					    <tr>
					    	<td>Login Terakhir</td>
					    	<td><?= longdate_indo(date("Y-m-d", $userDtl->last_login)).',  '.date("H:i:s", $userDtl->last_login); ?></td>
					    </tr>
					  </tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-xl-4 col-lg-5">
	<!-- Dropdown Card Example -->
	<div class="card shadow mb-4">
		<!-- Card Body -->
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12">
					<?php if( $userDtl->oauth_provider == 'local' ) : ?>
						<img src="<?= base_url('assets/img/user_img/'); ?><?= $userDtl->image; ?>" class="img-fluid img-thumbnail" alt="">
					<?php else : ?>
						<img src="<?= $userDtl->image; ?>" class="img-fluid img-thumbnail" alt="">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>




