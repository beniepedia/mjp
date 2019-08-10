<div class="p-2">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4" >
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Inbox</h6>
    </div>
    <div class="card-body mailbox">
      <div class="table-responsive ">
        <table class="table table-hover table-borderless table-sm text-center mb-5 mt-3" id="tableInbox" width="100%" cellspacing="0">
          <?php if( $inbox->num_rows() > 0 ) : ?>
          <thead class="" style="border-bottom: 1px solid black;">
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Judul</th>
              <th>Pesan</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody style="border-bottom: 1px solid black;">
          	<?php foreach ($inbox->result() as $i) : ?>
          	<tr class="<?= $i->inbox_status==0?'font-italic font-weight-bold':null; ?>">
              <td class="badge <?= $i->inbox_status==0?'badge-warning':'badge-success'; ?> mt-2"><?= $i->inbox_status==0?'Unread':'Read'; ?></td>
          		<td data-inbox_id="<?= $i->inbox_id; ?>"><?= $i->inbox_name; ?></td>
          		<td data-inbox_id="<?= $i->inbox_id; ?>"><?= $i->inbox_subject; ?></td>
          		<td data-inbox_id="<?= $i->inbox_id; ?>"><?= substr($i->inbox_message, 0, 30); ?></td>
          		<td data-inbox_id="<?= $i->inbox_id; ?>"><?= date("d-m-Y, H:i:s", $i->inbox_created); ?></td>
          		<td class="text-center">
                	<a href="<?= base_url('admin/').$i->inbox_id ?>" data-inbox_id="<?= $i->inbox_id; ?>" class="btn btn-danger btn-sm btn-circle btn-delete"><i class="fas fa-trash"></i></a>
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

  <!-- Delete Modal-->
  <?= form_open(base_url('admin/message/delete')); ?>
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
          <input type="hidden" name="id" required>
          <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success btn-sm">Iya, Hapus</button>
        </div>
  </div>
  <?= form_close(); ?>
</div>



<script type="text/javascript">
	$(document).ready(function(){
		$('.mailbox table tr td').not(":first-child").on('click', function(e){
			e.stopPropagation();
			e.preventDefault();
			const inbox_id = $(this).data('inbox_id');
			window.location = "<?= base_url('admin/message/detail/');?>"+inbox_id;

		});

    $('.btn-delete').on('click', function(e){
      e.stopPropagation();
      e.preventDefault();
      const id = $(this).data('inbox_id');
      $('#deleteMesssageModal').modal('show');
      $('[name="id"]').val(id);
    });
	});
</script>