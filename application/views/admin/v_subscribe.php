<div class="p-2">
<div class="card mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Subscriber</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive ">
        <table class="table table-borderless table-striped table-sm mt-3 mb-5 text-center table-style-subs" id="dataTable" width="100%" cellspacing="0">
          <thead class="">
            <tr>
              <th style="width: 5px;">No</th>
              <th >Email</th>
              <th>Created At</th>
              <th>Status</th>
              <th>Rating</th>
              <th width="15">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            <?php foreach ($subs->result() as $s) : ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $s->subscribe_email; ?></td>
              <td><?= longdate_indo(date('Y-m-d', $s->subscribe_created)); ?></td>
              <td class="badge badge-<?= $s->subscribe_status==1?'primary':'warning'; ?> badge-status"><?= $s->subscribe_status==1?'Aktif':'New'; ?></td>
              <td><?= $s->subscribe_rating; ?></td>
              <td>
                  <a href="<?= base_url('admin/subscribe/delete/').$s->subscribe_id; ?>" class="text-danger" onclick="return confirm('Hapus data ini?');"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
</div>