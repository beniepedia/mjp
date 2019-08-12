
<?= form_open_multipart('admin/posts/add_new_post'); ?>
<div class="p-2">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-lg-7 ">
			<!-- Default Card Example -->
			<div class="card mb-3 shadow">
		
				<div class="card-body form-add-post">
					<div class="form-group row">
						<div class="col-sm-6 mb-3">
							<label for="from" class="label-judul">Dari</label>
							<input type="text" class="form-control" id="from" name="from" placeholder="Email pengirim">
						</div>

						<div class="col-sm-6">
							<label for="to" class="label-judul">Kepada</label>
							<input type="text" class="form-control" id="to" name="to" placeholder="Email tujuan">
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