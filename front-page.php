<?php
/* Template Name: Front Page */
get_header();
?>

<main class="relative min-h-screen flex flex-col items-center  bg-black text-white">

    <?php get_template_part('template-parts/sections/hero'); ?>
    <?php get_template_part('template-parts/sections/key-value'); ?>

    <!-- Additional sections can go here -->

</main>

<?php get_footer(); ?>
