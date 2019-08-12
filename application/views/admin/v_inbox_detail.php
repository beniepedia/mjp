<div class="p-2">
  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header d-flex flex-row align-items-center justify-content-between">
      <a href="<?= base_url('admin/message/inbox'); ?>"><i class="fas fa-arrow-circle-left text-dark"></i></a>
      <h6 class="m-0 font-weight-bold text-primary">Detail Pesan</h6>
      
    </div>
    <div class="card-body">
      <fieldset class="border border-primary p-2">
        <?php if($img->num_rows() > 0 ) : ?>
          <?php $i = $img->row(); ?>
          <legend  class="w-auto p-2"><img src="<?= base_url('assets/img/user_img/').$i->image; ?>" alt="" class="rounded-circle" width="80" height="80">
         </legend>
        <?php else : ?>
          <legend  class="w-auto p-2"><img src="<?= base_url('assets/img/user_img/').'default.jpg'; ?>" alt="" class="rounded-circle" width="80" height="80">
         </legend>
        <?php endif; ?>
    		    <p class="title"> <?= $msg->inbox_subject; ?> </p>

            <div class="kontak">
              <p><?= $msg->inbox_name; ?>,   <span class="badge badge-secondary"><?= $msg->inbox_email; ?></span> </p>
              <small><?= $msg->inbox_phone; ?> - <span class="font-italic"><?=  waktu_lalu($msg->inbox_created); ?></span></small>
            </div>
            <div class="msg"><?= $msg->inbox_message; ?></div>
         
      </fieldset>
      <a href="" class="btn btn-primary mt-2 float-right">Balas</a> 
    </div>
  </div>
</div>
