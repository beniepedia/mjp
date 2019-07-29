<div class="">
  <!-- Page Heading -->
  <?php if( $this->session->flashdata('msg')) : ?>
      <div class="alert alert-<?= $this->session->flashdata('type'); ?> alert-dismissible fade show text-center" role="alert"><?= $this->session->flashdata('msg'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
  <?php endif; ?>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Inbox</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-sm" id="" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Judul</th>
              <th>Pesan</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php if( $inbox->num_rows() > 0 ) : ?>
          	<?php foreach ($inbox->result() as $i) : ?>
          	<tr class="<?= $i->inbox_status==0?'bg-success text-white':null; ?>">
              <td class="badge badge-warning m-2"><?= $i->inbox_status==0?'Unread':'Read'; ?></td>
          		<td><?= $i->inbox_name; ?></td>
          		<td><?= $i->inbox_subject; ?></td>
          		<td><?= substr($i->inbox_message, 0, 30); ?></td>
          		<td><?= date_indo(date("Y-m-d", $i->inbox_created)); ?></td>
          		<td class="text-center">
                <a href="<?= base_url('admin/message/detail/').$i->inbox_id; ?>" class="btn btn-primary btn-sm "><i class="fas fa-eye"></i></a>
                <a href="#" data-toggle="modal" data-target="#deleteMesssageModal" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></i></a>
              </td>
          	</tr>
          	<?php endforeach; ?>
            <?php else : ?>
              <tr> 
                <td colspan="6" class="text-center p-5 font-weight-bold">Tidak ada pesan masuk</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

  <!-- Logout Modal-->
  <div class="modal fade" id="deleteMesssageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Pesan?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body bg-danger text-white">Anda yakin ingin menghapus pesan ini?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-success" href="<?= base_url('admin/message/delete/').$i->inbox_id; ?>">Iya, Hapus</a>
        </div>
  </div>
</div>
