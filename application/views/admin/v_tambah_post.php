<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<!-- Default Card Example -->
			<div class="card mb-4">
				<div class="card-header">
					Tambah Post
				</div>
				<form action="<?= base_url('admin/blog/tambah_post') ?>" method="post" enctype="multipart/form-data">
				<div class="card-body">
					<div class="form-group row">
						<div class="col-sm-6">
							<label for="title" class="label-judul">Judul Post</label>
							<input type="text" class="form-control" name="title" placeholder="judul post">
							
						</div>
					</div>

					<div class="form-group">
						<label for="content"></label>
						<textarea name="content" id="contenteditor" class="form-control" cols="30" rows="10"></textarea>
					</div>

					<div class="form-group">
						<input type="file" name="image" class="form-control">
					</div>
					<hr>	
					<div class="form-group">
						<button type="submit" class="btn btn-primary float-right">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
