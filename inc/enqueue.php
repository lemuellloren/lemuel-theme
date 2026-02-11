<?php

function lemuel_enqueue_assets() {

    $css_file = get_template_directory() . '/assets/css/main.css';

    if ( file_exists( $css_file ) ) {
        wp_enqueue_style(
            'lemuel-tailwind',
            get_template_directory_uri() . '/assets/css/main.css',
            [],
            filemtime( $css_file )
        );
    }

    $js_file = get_template_directory() . '/assets/js/navigation.js';

    if ( file_exists( $js_file ) ) {
        wp_enqueue_script(
            'lemuel-navigation',
            get_template_directory_uri() . '/assets/js/navigation.js',
            [],
            filemtime( $js_file ),
            true
        );
    }

}

add_action( 'wp_enqueue_scripts', 'lemuel_enqueue_assets' );