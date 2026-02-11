<?php

function lemuel_enqueue_assets() {
    wp_enqueue_style(
        'lemuel-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        '1.0',
        'all'
    );

    wp_enqueue_script(
        'lemuel-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'lemuel_enqueue_assets');
