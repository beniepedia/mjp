<div class="container-fluid">
  <!-- Page Heading -->
  <?php if( $this->session->flashdata('msg')) : ?>
      <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
  <?php endif; ?>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Kelamin</th>
              <th>Alamat</th>
              <th>Tgl Daftar</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            <?php foreach ($userData as $data) : ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['name']; ?></td>
              <td><?= $data['email']; ?></td>
              <td><?= $data['gender']; ?></td>
              <td><?= $data['address']; ?></td>
              <td><?= date("d/m/Y", $data['date_created']); ?></td>
              <td><?= $data['is_active']==1?'Aktif':'NonAktif'; ?></td>
              <td>
                  <a href="<?= base_url('admin/user/detail/'); ?><?=$data['id_user'];?>" class="badge badge-info">
                    Detail
                  </a>
                  <a href="<?= base_url('admin/user/edituser/'); ?><?=$data['id_user'];?>" class="badge badge-warning">
                    Edit
                  </a>
                  <a href="<?= base_url('admin/user/delete/'); ?><?=$data['id_user'];?>" onclick="return confirm('Yakin ingin menghapus user ini?')" class="badge badge-danger">
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
