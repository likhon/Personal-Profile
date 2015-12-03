<section class="services-section">
    <div class="services-box">
        <div class="row">
            <div class="col-md-12">
                <div class="services-post">
                    <?php foreach ($posts as $post): ?>

                            <img src="<?php echo base_url(); ?><?php echo $post['post_banner']; ?>" alt="">
                            <div class="services-content">
                                <h2><a href="single-post.html"><?php echo $post['title']; ?></a></h2>
                                <span><?php echo $post['post_date']; ?></span>
                                <p><?php echo $post['post']; ?></p>
                                <a href="single-post.html">Read More <i class="fa fa-angle-right"></i></a>
                            </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>