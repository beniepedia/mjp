
<div class="p-2">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-lg-7 col-md-12 ">
			<!-- Default Card Example -->
			<div class="card mb-3 shadow">
		
				<div class="card-body form-add-post">
					<form id="form">
						<div class="form-message">
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<label for="from" class="label-judul">Dari</label>
									<input type="text" class="form-control" id="from" name="from" placeholder="Email pengirim...">
								</div>

								<div class="col-sm-6">
									<label for="to" class="label-judul">Kepada</label>
									<input type="text" class="form-control" id="message-to" name="to" placeholder="Email tujuan...">
								</div>
							</div>

							<div class="form-group">
								<label for="subject" class="label-judul">Subject</label>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject pesan...">
							</div>

							<div class="form-group">
								<label for="content"></label>
								<textarea name="content" id="msg_editor" class="form-control"></textarea>
							</div>
							<hr>
				
							<input type="submit" id="submit" name="submit" class="btn btn-primary float-right ml-2" value="Kirim Email">
							<img src="<?= base_url('assets/images/loading.gif') ?>" class="img-loading" alt="" draggable="false">
							<input type="submit" id="draft" name="draft" class="btn btn-secondary float-right" value="Simpan Ke Draft">

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function(){

       $('#message-to').tokenfield({
	       	autocomplete:
	       	{
	       		minLength: 3,
	       		source:"<?php echo base_url('admin/message/get_email_autocomplete')?>"
	       	}
	       	
       });

       $('#from').tokenfield({
	       	autocomplete:
	       	{
	       		minLength: 3,
	       		source:"<?php echo base_url('admin/message/get_email_autocomplete_admin')?>"
	       	}
	       	
       });

       function modif($remove,$add,$html,$draft='none',$img='none')
       {
       		const tombolSubmit = $('#submit');
       		const tombolDraft = $('[name="draft"]');
       		tombolSubmit.removeClass($remove);
			tombolSubmit.addClass($add);
			tombolSubmit.val($html);
			tombolDraft.css('display', $draft);
			$('img').css('display', $img)
       }

       function process() {
       		const tombolSubmit = $('#submit');
	   		const form = $('#from,#subject,#message-to');
	   		
       		$.ajax({
       			url: "<?= base_url('admin/message/create_msg') ?>",
       			data: $('#form').serialize(),
       			type: "POST",
       			beforeSend:function(){
       				tombolSubmit.attr('disabled', true);
       				modif('btn-primary', 'btn-warning', 'Mengirim pesan...','none','block');
       			},
       			success:function(data){
       				if(data == 'true')
       				{
	       				modif('btn-warning', 'btn-success', 'Pesan terkirim');
	       				tombolSubmit.attr('disabled', true);
       					setTimeout(function() {
			       			modif('btn-success', 'btn-primary', 'Kirim Email','inline-block');
	       					tombolSubmit.attr('disabled', false);
       					}, 5000);

		       			$('#message-to').tokenfield('destroy');
			   			$('#msg_editor').summernote('reset');
       					form.val('');
       				} else {
   						modif('btn-warning', 'btn-danger', 'Email gagal dikirim');
       					setTimeout(function() {
	       					tombolSubmit.attr('disabled', false);
			       			modif('btn-danger', 'btn-primary', 'Kirim Email','block');
       						// body...
       					}, 5000);
       				}
       			}
       		});
       }
	   
	   $('#submit').on("click", function(e){
	   		e.preventDefault(); 
	   		process();
	   });

	});

</script>