
<div class="p-2">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-lg-7 col-md-12 ">
			<!-- Default Card Example -->
			<div class="pesan" style="display: none;"></div>
			<div class="card mb-3 shadow">
				<div class="card-body form-add-post">
				<?= form_open('admin/message/create_msg', ['class'=>'formData']) ?>
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
				
							<button type="submit" id="kirim"  class="btn btn-primary float-right ml-2"><i class="fas fa-paper-plane"></i> Kirim Email</button>
							<input type="submit" id="draft" class="btn btn-secondary float-right" name="draft" value="simpan">
						<!-- 	<i class="fas fa-save"></i> -->

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
	       		minLength: 2,
	       		source:"<?php echo base_url('admin/message/get_email_autocomplete')?>"
	       	}	
       });

       $('#from').tokenfield({
	       	autocomplete:
	       	{
	       		minLength: 2,
	       		source:"<?php echo base_url('admin/message/get_email_autocomplete_admin')?>"
	       	},
	       	showAutocompleteOnFocus: true
	       	
       });

		const tombolkirim = $('#kirim');
		const tombolDraft = $('#draft');
		const from = $('#form').val();
		const to = $('#to').val();
		const subject = $('#subject').val();
		const content = $('#content').val();


       function modif($remove,$add,$html,$draft='none')
       {
       		tombolkirim.removeClass($remove);
			tombolkirim.addClass($add);
			tombolkirim.html($html);
			tombolDraft.css('display', $draft);
       }
 
	   $(tombolkirim).click(function(e){

	   		e.preventDefault();
	   		$.ajax({
       			url: $('.formData').attr('action'),
       			data: $('.formData').serialize(),
       			type: "post",
       			dataType: "json",
       			// cache: false,
       			beforeSend:function(){
       				tombolkirim.attr('disabled', true);
       				modif('btn-primary', 'btn-warning', '<i class="fas fa-spinner fa-spin"></i> Mengirim email...');
       			},
       			success:function(response){
	       			if( response.success == true ){
	       				Swal.fire(
						  'Sukses...!',
						  'Email berhasil terkirim!',
						  'success'
						);
						$('#msg_editor').summernote('reset');
						$('#subject').val('');
						$('#from').tokenfield('setTokens', []);
						$('#to').tokenfield('setTokens', []);
	       			} 
	       			else if(response.failed == true){
	       				Swal.fire(
						  'Gagal...!',
						  'Email tidak terkirim!',
						  'error'
						)
	       			} else {		
       					const Toast = Swal.mixin({
						  toast: true,
						  position: 'top-end',
						  showConfirmButton: false,
						  timer: 5000
							})

						Toast.fire({
						  type: 'error',
						  title: response.messages
						});
	       			}
					tombolkirim.attr('disabled', false);
       				modif('btn-warning', 'btn-primary', '<i class="fas fa-paper-plane"></i> Kirim Email', 'block');
       			}
       		});

	   });

	});

</script>