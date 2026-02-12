<?php
/**
 * Theme Functions Loader
 */

define( 'LEM_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/cpt.php';
require_once get_template_directory() . '/inc/acf-fields.php';