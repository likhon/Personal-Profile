<?php if ($projects){ ?>
<?php foreach ($projects as $project): ?>

    <div class="blog-post">

        <div class="post-content-text">
            <h2><a href="single-post.html"><?php echo $project['title']; ?></a></h2>
            <span><?php echo $project['description']; ?></span>
            <p><?php echo $project['technologies']; ?></p>
            <a href="single-post.html">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>

<?php endforeach; ?>
<?php }else{ ?>
<h3>No record found</h3>
<?php } ?>
