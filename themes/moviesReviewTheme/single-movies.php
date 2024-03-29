<?php
get_header();

    // Retrieve post meta data
    $src = get_post_meta(get_the_ID(), 'img_source', true);
    $genre = get_post_meta(get_the_ID(), 'genre_key', true);
?>

    <div class="content-padding">
        <div class="content-container">
            <div class="blog-post">
                <!-- Blog post content goes here -->
                <div class="post-image">
                    <img src="<?= $src ?>" alt="Movie Poster">
                </div>
                <div class="post-details">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-metadata">
                        <span class="post-rating">Rating: 8.5/10</span>
                        <span class="post-genre">Genre: <?= $genre ?></span>
                    </div>
                    <p class="post-description"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>

<?php
wp_reset_postdata(); // Reset post data after the loop
get_footer();
?>
