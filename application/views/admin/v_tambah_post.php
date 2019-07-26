<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<!-- Default Card Example -->
			<div class="card mb-3 shadow">
				<div class="card-header bg-dark text-white">
					Tambah Post
				</div>
				<form action="<?= base_url('admin/posts/tambah_post') ?>" method="post" enctype="multipart/form-data">
				<div class="card-body">
					<div class="form-group row">
						<div class="col-sm-6">
							<label for="title" class="label-judul">Judul Post</label>
							<input type="text" class="form-control" name="title" placeholder="Judul post">
							
						</div>
					</div>

					<div class="form-group">
						<label for="content"></label>
						<textarea name="content" id="contenteditor" class="form-control"></textarea>
					</div>

					<div class="file-loading">
					  <input id="imgPost" type="file" class="form-control" name="image">
					</div>
					

					<hr>	
					<div class="form-group mb-5">
						<button type="submit" class="btn btn-primary float-right">Publish <i class="fas fa-paper-plane"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
