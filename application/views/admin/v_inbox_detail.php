<div class="container-fluid">
  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Detail Pesan</h6>
      <small class="float-right"><?= longdate_indo(date("Y-m-d", $msg->inbox_created)); ?></small>
    </div>
    <div class="card-body">
    		  <h5 class="font-weight-bold">Subject : <?= $msg->inbox_subject; ?></h5>
          <hr>
          <p><?= $msg->inbox_name; ?>&lt;<?= $msg->inbox_email; ?>&gt;</p>
          <hr>
          <p><?= $msg->inbox_message; ?></p>
    </div>
  </div>
</div>
