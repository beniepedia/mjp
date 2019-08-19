<div class="p-2">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4" >
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Draft Pesan</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-borderless table-sm text-center mb-5 mt-3 table-style" id="tableInbox" width="100%" cellspacing="0">

          <thead>
            <tr>
              <th>No</th>
              <th>Pengirim</th>
              <th>Penerima</th>
              <th>Subject</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody style="border-bottom: 1px solid black;">
          	<?php $no=1; foreach ($outbox->result() as $o) : ?>
          	<tr>
              <td><?= $no++; ?></td>
          		<td ><?= $o->outbox_sender; ?></td>
          		<td ><?= $o->outbox_sendto; ?></td>
          		<td ><?= $o->outbox_subject; ?></td>
          		<td ><?= date_indo(date("Y-m-d", strtotime($o->outbox_created))); ?></td>
          		<td class="text-center">
                	<a href=""  class="btn btn-danger btn-sm btn-circle btn-delete"><i class="fas fa-trash"></i></a>
              	</td>
          	</tr>
          	<?php endforeach; ?>
<!-- 
              <tr> 
                <td colspan="6" class="text-center p-5 font-weight-bold">Tidak ada pesan masuk</td>
              </tr>
 -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>