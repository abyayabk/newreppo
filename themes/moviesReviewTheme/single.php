<?php
get_header();

while (have_posts()) :
    the_post();
    // Display post content here
    the_title('<h2>', '</h2>');
    the_content();
endwhile;

get_footer();
?>
