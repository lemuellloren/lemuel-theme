<?php

if (function_exists('acf_add_local_field_group')) :

    /**
     * Hero Section
     */
    acf_add_local_field_group([
        'key'      => 'group_hero',
        'title'    => 'Hero Section',
        'fields'   => [
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

    /**
     * Key Value Section
     */
    acf_add_local_field_group([
        'key'      => 'group_key_value',
        'title'    => 'Key Value Section',
        'fields'   => [
            // Value 1
            [
                'key'   => 'field_kv_1_title',
                'label' => 'Value 1 Title',
                'name'  => 'kv_1_title',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_kv_1_link',
                'label' => 'Value 1 Link',
                'name'  => 'kv_1_link',
                'type'  => 'url',
            ],
            [
                'key'           => 'field_kv_1_icon',
                'label'         => 'Value 1 Icon',
                'name'          => 'kv_1_icon',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'thumbnail',
            ],
            // Value 2
            [
                'key'   => 'field_kv_2_title',
                'label' => 'Value 2 Title',
                'name'  => 'kv_2_title',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_kv_2_link',
                'label' => 'Value 2 Link',
                'name'  => 'kv_2_link',
                'type'  => 'url',
            ],
            [
                'key'           => 'field_kv_2_icon',
                'label'         => 'Value 2 Icon',
                'name'          => 'kv_2_icon',
                'type'          => 'image',                
                'return_format' => 'array',
                'preview_size'  => 'thumbnail',
            ],
            // Value 3
            [
                'key'   => 'field_kv_3_title',
                'label' => 'Value 3 Title',
                'name'  => 'kv_3_title',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_kv_3_link',
                'label' => 'Value 3 Link',
                'name'  => 'kv_3_link',
                'type'  => 'url',
            ],
            [
                'key'           => 'field_kv_3_icon',
                'label'         => 'Value 3 Icon',
                'name'          => 'kv_3_icon',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'thumbnail',
            ],
            // Value 4
            [
                'key'   => 'field_kv_4_title',
                'label' => 'Value 4 Title',
                'name'  => 'kv_4_title',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_kv_4_link',
                'label' => 'Value 4 Link',
                'name'  => 'kv_4_link',
                'type'  => 'url',
            ],
            [
                'key'           => 'field_kv_4_icon',
                'label'         => 'Value 4 Icon',
                'name'          => 'kv_4_icon',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'thumbnail',
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

    /**
     * CTA Section
     */
    acf_add_local_field_group([
        'key'      => 'group_cta_section',
        'title'    => 'CTA Section',
        'fields'   => [
            // Heading
            [
                'key'   => 'field_cta_heading',
                'label' => 'Heading',
                'name'  => 'cta_heading',
                'type'  => 'text',
            ],
            // Description
            [
                'key'   => 'field_cta_description',
                'label' => 'Description',
                'name'  => 'cta_description',
                'type'  => 'wysiwyg',
            ],
            // Button Label
            [
                'key'   => 'field_cta_button_label',
                'label' => 'Button Label',
                'name'  => 'cta_button_label',
                'type'  => 'text',
            ],
            // Button Link
            [
                'key'   => 'field_cta_button_link',
                'label' => 'Button Link',
                'name'  => 'cta_button_link',
                'type'  => 'link',
            ],
            // Background Image
            [
                'key'           => 'field_cta_background_image',
                'label'         => 'Background Image',
                'name'          => 'cta_background_image',
                'type'          => 'image',
                'instructions'  => 'Recommended size: at least 1920×1080 px. Will be used as section background.',
                'return_format' => 'array',
                'preview_size'  => 'medium',
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
        'active'   => true,
    ]);

endif;