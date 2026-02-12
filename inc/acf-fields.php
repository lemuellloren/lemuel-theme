<?php

if ( function_exists('acf_add_local_field_group') ) :

    acf_add_local_field_group([
        'key'   => 'group_hero',
        'title' => 'Hero Section',
        'fields' => [

            // Title
            [
                'key'   => 'field_hero_title',
                'label' => 'Title',
                'name'  => 'hero_title',
                'type'  => 'text',
            ],

            // Subtitle
            [
                'key'   => 'field_hero_subtitle',
                'label' => 'Subtitle',
                'name'  => 'hero_subtitle',
                'type'  => 'textarea',
                'rows'  => 3,
            ],

            // Primary CTA
            [
                'key'   => 'field_hero_cta_primary',
                'label' => 'Primary CTA',
                'name'  => 'hero_cta_primary',
                'type'  => 'link',
            ],

            // Secondary CTA
            [
                'key'   => 'field_hero_cta_secondary',
                'label' => 'Secondary CTA',
                'name'  => 'hero_cta_secondary',
                'type'  => 'link',
            ],

            // Hero Image
            [
                'key'           => 'field_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'hero_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
            ],

            // Hero Background
            [
                'key'           => 'field_hero_background',
                'label'         => 'Hero Background',
                'name'          => 'hero_background',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
            ],

            // Stat 1
            [
                'key'   => 'field_stat_1_value',
                'label' => 'Stat 1 Value',
                'name'  => 'stat_1_value',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_stat_1_label',
                'label' => 'Stat 1 Label',
                'name'  => 'stat_1_label',
                'type'  => 'text',
            ],

            // Stat 2
            [
                'key'   => 'field_stat_2_value',
                'label' => 'Stat 2 Value',
                'name'  => 'stat_2_value',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_stat_2_label',
                'label' => 'Stat 2 Label',
                'name'  => 'stat_2_label',
                'type'  => 'text',
            ],

            // Stat 3
            [
                'key'   => 'field_stat_3_value',
                'label' => 'Stat 3 Value',
                'name'  => 'stat_3_value',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_stat_3_label',
                'label' => 'Stat 3 Label',
                'name'  => 'stat_3_label',
                'type'  => 'text',
            ],

        ],
        'location' => [
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'page',
                ],
            ],
        ],
    ]);

endif;