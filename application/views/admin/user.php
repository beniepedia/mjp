<div class="p-2">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive ">
        <table class="table table-borderless table-striped table-sm mt-3 mb-5 table-style text-center" id="dataTable" width="100%" cellspacing="0">
          <thead class="">
            <tr>
              <th style="width: 5px;">No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Kelamin</th>
              <th>Alamat</th>
              <th>Tgl Join</th>
              <th>Status</th>
              <th width="10">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            <?php foreach ($userData as $data) : ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['name']; ?></td>
              <td><?= $data['email']; ?></td>
              <td><?= $data['gender']==null?'-':$data['gender']; ?></td>
              <td><?= $data['address']==null?'-':$data['address']; ?></td>
              <td><?= date("d/m/Y", $data['date_created']); ?></td>
              <td><?= $data['is_active']==1?'Aktif':'NonAktif'; ?></td>
              <td>
                  <!-- <a href="<?= base_url('admin/user/detail/'); ?><?=$data['id_user'];?>" class="badge badge-info">
                    Detail
                  </a>
                  <a href="<?= base_url('admin/user/edituser/'); ?><?=$data['id_user'];?>" class="badge badge-warning">
                    Edit
                  </a>
                  <a href="<?= base_url('admin/user/delete/'); ?><?=$data['id_user'];?>" onclick="return confirm('Yakin ingin menghapus user ini?')" class="badge badge-danger">
                    Hapus
                  </a> -->

                <div class="dropdown text-center">
                  <a class="badge badge-primary shadow dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                  </a>
                  
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('admin/user/detail/'); ?><?=$data['id_user'];?>">Detail</a>
                    <a class="dropdown-item" href="<?= base_url('admin/user/edituser/'); ?><?=$data['id_user'];?>">Edit</a>
                    <a class="dropdown-item" href="<?= base_url('admin/user/delete/'); ?><?=$data['id_user'];?>" onclick="return confirm('Yakin ingin menghapus user ini?')">Delete</a>
                  </div>
                </div>

              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
