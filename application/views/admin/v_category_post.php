<div class="container-fluid">
  <!-- Page Heading -->
  <?php if( validation_errors() ) : ?>
  <div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><?= validation_errors(); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
  <?php endif; ?>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header">
      <a href="#" class="btn btn-sm btn-primary float-right rounded-circle shadow btn-blog" data-toggle="modal" data-target="#addCategoryModal" data-toggle="tooltip" data-placement="left" title="Tambah Kategori" style="color:white; cursor: pointer;"><i class="fas fa-plus"></i></a>
      <h6 class="m-0 font-weight-bold text-primary">Post Kategori</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-sm mb-5 mt-3" id="dataTable" width="100%" cellspacing="0">
          <thead class="">
            <tr>
              <th style="width: 50px;">No</th>
              <th>Kategori</th>
              <th>Slug</th>
              <th style="width: 90px;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($all_category as $c) : ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $c->category_post_name; ?></td>
              <td><?= $c->category_post_slug; ?></td>
              <td>
                <a href="javascript:void(0)" class="btn btn-warning btn-sm btn-circle btn-edit-post" data-id="<?= $c->category_post_id; ?>" data-category="<?= $c->category_post_name; ?>"><span class="fas fa-edit"></span></a>
                <a href="<?= base_url('admin/posts/delete_category_post/') . $c->category_post_id; ?>" onclick="return confirm('Yakin ingin menghapus kategori post?')" class="btn btn-danger btn-sm btn-circle"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--ADD RECORD MODAL-->
<form action="<?= base_url('admin/posts/category_post');?>" method="post">
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
          <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!--ADD RECORD MODAL-->
<form action="<?= base_url('admin/posts/edit_category_post');?>" method="post">
  <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Kategori Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group mt-2">
            <input type="hidden" name="kode">
            <input type="text" class="form-control" name="category2" placeholder="Nama Kategori" required="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        </div>
      </div>
    </div>
  </div>
</form>
<script>
$(document).ready(function(){
$('.btn-edit-post').on('click', function(){
$('#editCategoryModal').modal('show');
var id = $(this).data('id');
var name = $(this).data('category');
$('[name="kode"]').val(id);
$('[name="category2"]').val(name);
});
});
</script>