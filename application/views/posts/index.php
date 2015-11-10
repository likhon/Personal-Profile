<h2><?php echo $title; ?></h2>

<?php foreach ($posts as $post): ?>

  <h3><?php echo $post['title']; ?></h3>
  <div class="main">
    <?php echo $post['post']; ?>
  </div>
  <p><a href="<?php echo site_url('posts/' . $post['postID']); ?>">View article</a></p>

<?php endforeach; ?>