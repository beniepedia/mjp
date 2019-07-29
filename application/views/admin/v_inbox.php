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
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead class="text-center">
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
          	<?php foreach ($inbox as $i) : ?>

          	<tr class="<?= $i->inbox_status==0?'bg-success text-white':null; ?>">
          		<td class="badge badge-warning text-center">Unread</td>
          		<td><?= $i->inbox_name; ?></td>
          		<td><?= $i->inbox_subject; ?></td>
          		<td><?= substr($i->inbox_message, 0, 30); ?></td>
          		<td><?= date_indo(date("Y-m-d", $i->inbox_created)); ?></td>
          		<td ><?= $i->inbox_name; ?> </td>
          	</tr>
          	<?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
