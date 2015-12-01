
<!-- blog section
			================================================== -->



<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-box">
                    <?php foreach ($posts as $post): ?>

                        <div class="blog-post">
                            <img src="<?php echo base_url(); ?><?php echo $post['post_banner']; ?>" alt="">
                            <div class="post-content-text">
                                <h2><a href="single-post.html"><?php echo $post['title']; ?></a></h2>
                                <span><?php echo $post['post_date']; ?></span>
                                <p><?php echo $post['post']; ?></p>
                                <a href="single-post.html">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                    <?php endforeach; ?>







                    <ul class="pagination-list">
                        <li><a href="#" class="prev-pag">prev</a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" class="next-pag">next</a></li>
                    </ul>

                </div>

            </div>
            <div class="col-md-4">
                <div class="sidebar">

                    <div class="category-widget widget">
                        <h2>Categories</h2>
                        <ul class="category-list">
                            <li><a href="#">building <span>18</span></a></li>
                            <li><a href="#">construction <span>06</span></a></li>
                            <li><a href="#">painting <span>12</span></a></li>
                            <li><a href="#">isolation <span>15</span></a></li>
                            <li><a href="#">electricy <span>6</span></a></li>
                            <li><a href="#">architecture <span>4</span></a></li>
                        </ul>
                    </div>

                    <div class="text-widget widget">
                        <h2>Text Widget</h2>
                        <div class="text-box">
                            <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                            <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                        </div>
                    </div>

                    <div class="archieve-widget widget">
                        <h2>archieve</h2>
                        <ul class="archieve-list">
                            <li><a href="#">September 2014</a></li>
                            <li><a href="#">Octomber 2014</a></li>
                            <li><a href="#">November 2014</a></li>
                            <li><a href="#">December 2014</a></li>
                            <li><a href="#">Jannuary 2015</a></li>
                        </ul>
                    </div>

                    <div class="tags-widget widget">
                        <h2>TAG Widget</h2>
                        <ul class="tags-list">
                            <li><a href="#">Building</a></li>
                            <li><a href="#">interior</a></li>
                            <li><a href="#">isolation</a></li>
                            <li><a href="#">kitchen</a></li>
                            <li><a href="#">energy</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End blog section -->