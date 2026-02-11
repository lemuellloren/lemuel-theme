<?php

function lemuel_register_cpt() {

    register_post_type('team', [
        'labels' => [
            'name' => 'Team Members',
            'singular_name' => 'Team Member'
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-groups',
        'supports' => ['title','editor','thumbnail'],
    ]);

}

add_action('init', 'lemuel_register_cpt');
