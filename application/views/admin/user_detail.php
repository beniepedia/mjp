<div class="container-fluid">
<div class="row justify-content-center">
	
<div class="col-lg-6">
	<!-- Dropdown Card Example -->
	<div class="card shadow mb-4">
		<!-- Card Header - Dropdown -->
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">User Detail</h6>
		</div>
		<!-- Card Body -->
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12">
					<table class="table table-striped">
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
					    	<td><?= date("D, d-m-Y - H:i:s", $userDtl->date_created); ?></td>
					    </tr>
					    <tr>
					    	<td>Login Terakhir</td>
					    	<td><?= date("D, d/m/Y - H:i:s", $userDtl->last_login); ?></td>
					    </tr>
					  </tbody>
					</table>

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




