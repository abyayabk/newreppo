<?php

function themeAssets() {
    wp_enqueue_style('main-theme-styles', get_stylesheet_uri());
}

function themeFeatures(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
}

add_action ('wp_enqueue_scripts', 'themeAssets');
add_action('after_setup_theme', 'themeFeatures');