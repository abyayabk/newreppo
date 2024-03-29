<?php get_header();
?>
<div class="archive-content">
  <form method="GET">
  <div class="filter-container">
    <label for="genre-filter">Filter by Genre:</label>
    <select name="genre-filter" id="genre-filter" class="filter-dropdown">
      <option value="" name="ggg">All Genres</option>
      <!-- Example genre options -->
      <option value="action">Action</option>
      <option value="comedy">Comedy</option>
      <option value="fantasy">Fantasy</option>
      <option value="thriller">Thriller</option>
      <option value="Romance">Romance</option>
      <!-- Add more genre options here as needed -->
    </select>
    <button class="genre-filter" type="submit">Filter</button>
  </div>
</form>


  <?php

if (isset($_GET['genre-filter'])) {
  $selected_genre = $_GET['genre-filter'];

  $moviesQuery = new WP_Query(array(
    'post_type' => 'movies',
    'meta_query' => array(
      array(
          'key' => 'genre_key', 
          'value' => $selected_genre, // The value to compare with
          'compare' => '=' // Comparison operator. Use '=' for exact match
      ),
  ),
  ));
} else {
  // If no genre filter is set, retrieve all movies
  $moviesQuery = new WP_Query(array(
    'post_type' => 'movies',
  ));
}

  while ($moviesQuery->have_posts()) {
    $moviesQuery->the_post();
    $src = get_post_meta(get_the_ID(), 'img_source', true);
  ?>

    <div class="movie-card"><a href="<?php the_permalink(); ?>">
        <img src="<?= $src; ?>" alt="Movie 1">
        <div class="movie-title"><?php the_title(); ?></div>
      </a></div>
  <?php
  }
  ?>
  <!-- Add more movie cards here as needed -->
</div>

<?php get_footer();
