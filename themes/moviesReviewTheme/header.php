<!DOCTYPE html>
<html lang="en">
<?php wp_head(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Reviews - Welcome</title>
    <!-- Include any necessary PHP scripts or stylesheets -->
</head>
<?php 
    $movieQuery = new WP_Query(array(
        'post_type' => 'movies'
    ));
?>
<body>
  <header>
    <div class="container">
      <div class="logo"><a href="<?= site_url(); ?>">Movie Reviews</a></div>
      <nav>
        <ul>
          <li><a href="<?php echo get_post_type_archive_link('post'); ?>">Archive</a></li>
          <li><a href="<?php echo site_url('sample-post'); ?>">Sample Post</a></li>
        </ul>
      </nav>
      <div class="search-icon" id="searchId">
        <input type="text" id="searchField" placeholder="Search...">
        <i class="fa fa-search"></i>
      </div>
      <button class="login-button">Login</button>
    </div>
  </header>
</body>
