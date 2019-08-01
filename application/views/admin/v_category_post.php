<div class="container-fluid">
  <!-- Page Heading -->
  <?php if( $this->session->flashdata('msg')) : ?>
      <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
  <?php endif; ?>
  <!-- DataTales Example -->

  

  <div class="card shadow mb-4">
    <div class="card-header">
      <a href="<?= base_url('admin/posts/tambah_post') ?>" class="btn btn-sm btn-primary float-right rounded-circle shadow btn-blog" data-toggle="modal" data-target="#addCategoryModal" data-toggle="tooltip" data-placement="left" title="Tambah Artikel" style="color:white; cursor: pointer;"><i class="fas fa-plus"></i></a>
      <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Kategory</th>
              <th>Slug</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<!--ADD RECORD MODAL-->
<form action="<?php echo site_url('admin/posts/add_category_post');?>" method="post">
   <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Tambah Kategori Post</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="form-group mt-2">
	        	<input type="text" class="form-control" name="category" placeholder="Nama Kategori">
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
</form>

