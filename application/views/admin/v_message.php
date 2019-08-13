
<?= form_open_multipart('admin/posts/add_new_post'); ?>
<div class="p-2">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-lg-7 ">
			<!-- Default Card Example -->
			<div class="card mb-3 shadow">
		
				<div class="card-body form-add-post">
					<div class="form-group row">
						<div class="col-sm-6 mb-3 mb-sm-0">
							<label for="from" class="label-judul">Dari</label>
							<input type="text" class="form-control" id="from" name="from" placeholder="Email pengirim">
						</div>

						<div class="col-sm-6">
							<label for="to" class="label-judul">Kepada</label>
							<input type="text" class="form-control" id="message-to" name="to" placeholder="Email tujuan">
						</div>
					</div>

					<div class="form-group">
						<label for="subject" class="label-judul">Subject</label>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Email tujuan">
					</div>

					<div class="form-group">
						<label for="content"></label>
						<textarea name="content" id="msg_editor" class="form-control"></textarea>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</form>

<script>
	$(document).ready(function(){
		function split( val ) {
	      return val.split( /,\s*/ );
	    }
	    function extractLast( term ) {
	      return split( term ).pop();
	    }

		console.log($.parseJSON("<?= base_url('admin/message/get_email_autocomplete');?>"));

		$("#message-to").autocomplete({
			source: "<?= base_url('admin/message/get_email_autocomplete');?>"
		});
      //  $('#message-to').on('keydown', function(event){
      // 	 if ( event.keyCode === $.ui.keyCode.TAB &&
      //       $( this ).autocomplete( "instance" ).menu.active ) {
      //     		event.preventDefault();
      //     }
      //  })
      //  .autocomplete({
      //   minLength: 0,
      //   source: function( request, response ) {
      //     // delegate back to autocomplete, but extract the last term
      //     response( $.ui.autocomplete.filter(
      //       data, extractLast( request.term ) ) );
      //   },
      //   focus: function() {
      //     // prevent value inserted on focus
      //     return false;
      //   },
      //   select: function( event, ui ) {
      //     var terms = split( this.value );
      //     // remove the current input
      //     terms.pop();
      //     // add the selected item
      //     terms.push( ui.item.value );
      //     // add placeholder to get the comma-and-space at the end
      //     terms.push( "" );
      //     this.value = terms.join( ", " );
      //     return false;
      //   }
      // });
	});

</script>