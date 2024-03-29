<div class="archive-content">
      <!-- Your archive content goes here -->
      <?php 
      $moviesQuery = new WP_Query (array(
        'post_type' => 'movies'
      ));

      while($moviesQuery->have_posts()){
        $moviesQuery->the_post()
        ?>
        <div class="movie-card">
        <img src="<?= get_post_meta('img_source');?>" alt="Movie 1">
        <div class="movie-title">Movie 1</div>
      </div>
      <?php
      }
      ?>
      <!-- Add more movie cards here as needed -->
    </div>