<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body class="font-urbanist <?php body_class(); ?>">

<header class="w-full border-b">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex items-center justify-between h-20">

      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="<?php echo home_url(); ?>">
          <?php 
            if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
              the_custom_logo();
            } else { ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" 
                   alt="<?php bloginfo('name'); ?>" 
                   class="h-8 w-auto">
          <?php } ?>
        </a>
      </div>

      <!-- Center Menu -->
      <nav class="hidden md:flex space-x-8">
        <?php
          wp_nav_menu([
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'flex space-x-8 text-sm font-medium',
              'fallback_cb' => false,
          ]);
        ?>
      </nav>

      <!-- Contact Button -->
      <div class="hidden md:block">
        <a href="/contact"
           class="px-5 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">
           Contact Us
        </a>
      </div>

    </div>
  </div>
</header>
