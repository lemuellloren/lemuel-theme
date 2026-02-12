<?php

function lemuel_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','gallery','caption']);
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'lemuel'),
        'footer'  => __('Footer Menu', 'lemuel'), 
    ]);
}

add_action('after_setup_theme', 'lemuel_theme_setup');
