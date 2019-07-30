<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
	<!-- Sidebar Toggle (Topbar) -->
	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
	<i class="fa fa-bars"></i>
	</button>
	<!-- Topbar Search -->
	<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
		<div class="input-group">
			<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-primary" type="button">
				<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div>
	</form>
	<!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">
		<!-- Nav Item - Search Dropdown (Visible Only XS) -->
		<li class="nav-item dropdown no-arrow d-sm-none">
			<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-search fa-fw"></i>
			</a>
			<!-- Dropdown - Messages -->
			<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
				<form class="form-inline mr-auto w-100 navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">
							<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</li>
		<!-- Nav Item - Alerts -->

		 <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
			<?php $count = $this->db->get_where('tb_inbox', ['inbox_status'=>'0']); ?>
            <span class="badge badge-danger badge-counter"><?= $count->num_rows() > 0 ? $count->num_rows() : null; ?></span>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
              Message Center
            </h6>
            <?php if( $count->num_rows() > 0 ) : ?>
	            <?php foreach ($count->result() as $c) : ?>
	            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('admin/message/inbox') ?>">
	              <div class="dropdown-list-image mr-3">
	                <img class="rounded-circle" src="<?= base_url('assets/img/user_img/default.jpg') ?>" alt="">
	                <div class="status-indicator bg-success"></div>
	              </div>
	              <div class="font-weight-bold">
	                <div class="text-truncate"><?= $c->inbox_subject; ?></div>
	                <div class="small text-gray-500"><?= $c->inbox_name; ?> · <?= date("d-m-Y, H:i:s", $c->inbox_created); ?></div>
	              </div>
	            </a>
	         	<?php endforeach; ?>
	         	<?php else : ?>
	         		<div class="font-weight-bold p-3 text-center">
		                <div class="">Pesan Masuk Kosong</div>
	              	</div>
	        	<?php endif; ?>
          </div>
        </li>
		
		<div class="topbar-divider d-none d-sm-block"></div>
		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('name'); ?></span>
				<?php if($this->check->is_admin()->oauth_provider=='local') : ?>
					<img class="img-profile rounded-circle" src="<?= base_url('assets/img/user_img/').$this->check->is_admin()->image; ?>">
				<?php else : ?>
					<img class="img-profile rounded-circle" src="<?= $this->check->is_admin()->image; ?>">
				<?php endif; ?>
			</a>
			<!-- Dropdown - User Information -->
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="<?= base_url('profile'); ?>">
					<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
					Profile
				</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?= base_url('/'); ?>">
					<i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
					Home
				</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					Logout
				</a>
			</div>
		</li>
	</ul>
</nav>
<!-- End of Topbar -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Logout sekarang.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>