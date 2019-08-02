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
      <a href="<?= base_url('admin/posts/add_new_post') ?>" class="btn btn-sm btn-primary float-right rounded-circle shadow btn-blog" data-toggle="tooltip" data-placement="left" title="Tambah Artikel" style="color:white; cursor: pointer;"><i class="fas fa-plus"></i></a>
      <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        
        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark text-center">
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>konten</th>
              <th>Tanggal</th>
              <th>Slug</th>
              <th>Gambar</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            <?php foreach ($posts as $b) : ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $b->title; ?></td>
              <td><?= substr($b->content, 0, 50); ?></td>
              <td><?= date_indo(date("Y-m-d",$b->date)); ?></td>
              <td><?= $b->slug; ?></td>
              <td><img src="<?= base_url('assets/img/blog_img/') . $b->image; ?>" alt="no image" class="img-fluid rounded-circle" width="100"></td>
              <td><?= $b->is_active==1?'Aktif':'NonAktif'; ?></td>
              <td>
                
                <a href="<?= base_url('admin/user/edituser/'); ?><?=$b->id_blog;?>" class="badge badge-warning">
                  Edit
                </a>
                <a href="<?= base_url('admin/posts/delete/'); ?><?=$b->id_blog;?>" onclick="return confirm('Yakin ingin menghapus postingan ini?')" class="badge badge-danger">
                  Hapus
                </a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>