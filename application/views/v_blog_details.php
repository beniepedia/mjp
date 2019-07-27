

<div class="container mt-5 mb-5">
    <div class="col-md-8 col-md-offset-2">
        <h2><?= $blog->title;?></h2><hr/>
        <img src="<?= base_url('assets/img/blog_img/').$blog->image;?>" width="100%" class="img-fluid">
        <?= $blog->content;?>
    </div>

   
     
</div>