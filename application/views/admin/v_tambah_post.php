
<?= form_open_multipart('admin/posts/add_new_post'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-8 col-lg-7 ">
			<!-- Default Card Example -->
			<div class="card mb-3 shadow">
		
				<div class="card-body">
					<div class="form-group">
						<label for="title" class="label-judul">Judul Post</label>
						<input type="text" class="form-control" name="title" placeholder="Judul post">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="slug" placeholder="permalink" style="background-color: #F8F8F8;outline-color: none;border:0;color:blue;">
					</div>

					<div class="form-group">
						<label for="content"></label>
						<textarea name="content" id="contenteditor" class="form-control"></textarea>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-lg-5">
			<div class="card shadow">
				<div class="card-body">
					<div class="form-group">
						<label class="label-judul">Gambar</label>
						<input type="file" id="imagepost" name="filefoto">
					</div>

					<div class="form-group">
						<label class="label-judul">Kategori</label>
						<select name="category" class="form-control">
							<option value="">Pilih</option>
						</select>
					</div>

					<div class="form-group">
						<label class="label-judul">Tag</label>
						 <div style="overflow-y:scroll;height:150px;margin-bottom:30px;">
                            <div class="custom-control custom-checkbox">
							  <input type="checkbox" class="custom-control-input" id="tag" name="tag" value="1">
							  <label class="custom-control-label" for="tag">Check this custom checkbox</label>
							</div>
                        </div>
					</div>

					<div class="form-group">
						<button type="publish" class="btn btn-primary btn-block btn-sm"> <i class="fas fa-paper-plane"></i> Publish</button>
						<button type="draft" class="btn btn-secondary btn-block btn-sm"> <i class="fas fa-save"></i> Draft</button>
					</div>

				</div>
			</div>
			<!-- neta -->
			<div class="card mt-3 mb-5 shadow">
				<div class="card-body">
					<div class="form-group">
						<label class="label-judul">Meta Description</label>
						<textarea name="meta" cols="6" rows="4" class="form-control" placeholder="Meta Description"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>