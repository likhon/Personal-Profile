<?php echo validation_errors(); ?>

<section class="contact-section">
    <div class="container">

        <div class="col-md-12">
            <?php //echo form_open('posts/create'); ?>
            <form action="add" method="POST" enctype="multipart/form-data" >
                <h2><?php echo $title; ?></h2>
                <div class="row">
                    <div class="col-md-8 form-group">
                        <input name="title" id="title" type="text" class="form-control" placeholder="Title of the post">
                    </div>
                    <div class="col-md-8 form-group">
                        <textarea name="summary" id="summary"  class="form-control"  type="text" placeholder="Summary of the post"></textarea>
                    </div>
                    <div class="col-md-8 form-group">
                        <?php echo $this->ckeditor->editor("posts",""); ?>
                    </div>
                    <div class="col-md-8 form-group">
                        <div class="col-sm-6"><input name="post_date" id="post_date"  class="form-control"  type="text" placeholder="Post date"></div>
                        <div class="col-sm-6"><input name="post_banner" id="post_banner"  class="form-control"  type="file" placeholder="Image for the post"></div>

                    </div>
                    <div class="col-md-8 form-group">
                        <input type="submit" id="submit" name="submit" value="Create Post"  class="btn btn-info pull-right" >
                    </div>
                </div>

                <div id="msg" class="message"></div>
            </form>
        </div>
    </div>
</section>