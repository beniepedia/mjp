<div class="p-2">
  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Detail Pesan</h6>
      
    </div>
    <div class="card-body">
      <fieldset class="border border-primary p-2">
         <legend  class="w-auto p-2"><img src="<?= base_url('assets/img/user_img/').'default.jpg'; ?>" alt="" class="rounded-circle" width="80"></legend>
            <div class="detail-message">
              <div class="form-gorup">
                <input type="text" class="form-control">
              </div>
            </div>
    		    <p class="title">Judul Pesan : ( <?= $msg->inbox_subject; ?> )</p>

            <p class="kontak">Nama  :<?= $msg->inbox_name; ?><br>
                              Email :<?= $msg->inbox_email; ?></p>
            <hr>
            <span><?= $msg->inbox_message; ?></p>
         
      </fieldset>
    </div>
  </div>
</div>
