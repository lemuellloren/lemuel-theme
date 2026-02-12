<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-urbanist'); ?>>

<header class="sticky top-0 z-50 w-full bg-[#1A1A1A] border-b border-[#262626]">
    <div class="flex py-5 px-4 md:px-[162px] justify-between items-center">
        
        <div class="flex justify-center items-center gap-2.5 w-40 h-12">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="shrink-0">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<span class="text-white text-xl font-bold">' . get_bloginfo('name') . '</span>';
                }
                ?>
            </a>
        </div>

        <nav class="hidden md:flex items-center gap-[30px]">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'flex items-center gap-[30px] text-white font-medium text-lg',
                'fallback_cb'    => false,
                'link_before'    => '<span class="hover:text-[#703BF7] transition-colors duration-300">',
                'link_after'     => '</span>',
            ]);
            ?>
        </nav>

        <div class="flex items-center gap-4">
            <div class="group hidden md:flex py-4 px-6 items-center gap-2 rounded-[10px] border border-[#262626] bg-[#141414] hover:bg-[#1A1A1A] hover:scale-105 hover:border-[#703BF7] hover:shadow-[0_10px_20px_rgba(112,59,247,0.15)] active:scale-95 transition-all duration-300 cursor-pointer">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="text-white font-urbanist text-lg font-medium group-hover:text-[#703BF7] transition-colors duration-300">
                    Contact Us
                </a>
            </div>

            <button id="hamburger-btn" class="md:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 focus:outline-none group" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu">
                <span class="hamburger-line block w-6 h-0.5 bg-white transition-all duration-300 ease-in-out"></span>
                <span class="hamburger-line block w-6 h-0.5 bg-white transition-all duration-300 ease-in-out"></span>
                <span class="hamburger-line block w-6 h-0.5 bg-white transition-all duration-300 ease-in-out"></span>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden absolute w-full bg-[#141414]" aria-hidden="true">
        <div class="px-6 py-6 flex flex-col gap-6">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'flex flex-col gap-4 text-white text-lg',
                'fallback_cb'    => false,
            ]);
            ?>
            <div class="mt-2 py-4 px-5 rounded-[10px] border border-[#262626] bg-[#1A1A1A] w-full text-center hover:border-[#703BF7] transition-colors duration-300">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="text-white font-urbanist text-lg font-medium">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</header>