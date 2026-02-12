<?php
/**
 * Template part for the CTA section
 * Path: template-parts/sections/cta.php
 */
?>

<?php
// ── Get ACF fields with meaningful fallbacks ────────────────────────
$cta_heading = get_field('cta_heading') 
    ?: 'Start Your Real Estate Journey Today';

$cta_description = get_field('cta_description') 
    ?: 'Your dream property is just a click away. Whether you\'re looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way. Take the first step towards your real estate goals and explore our available properties or get in touch with our team for personalized assistance.';

$cta_button      = get_field('cta_button_link'); // returns array or null
$button_label    = get_field('cta_button_label') ?: 'Explore Properties';

$cta_bg_image    = get_field('cta_background_image'); // image array or false

// Background fallback
$bg_url = $cta_bg_image && !empty($cta_bg_image['url'])
    ? esc_url($cta_bg_image['url'])
    : get_template_directory_uri() . '/assets/images/abstact-cta-bg.png';

// Button link fallback
$button_url    = !empty($cta_button['url']) ? esc_url($cta_button['url']) : '#';
$button_target = !empty($cta_button['target']) ? esc_attr($cta_button['target']) : '_self';
?>

<section class="relative w-full bg-black border-t border-b border-[#262626] overflow-hidden bg-contain bg-bottom bg-no-repeat"
         style="background-image: url('<?php echo $bg_url; ?>');">

    <div class="relative z-20 flex flex-col lg:flex-row gap-12 lg:gap-20 py-12 lg:py-[100px] px-6 md:px-12 lg:px-[162px] items-center">

        <div class="text-white space-y-6 lg:space-y-8 w-full lg:w-5/6">
            <h2 class="text-4xl md:text-5xl font-bold leading-tight">
                <?php echo esc_html($cta_heading); ?>
            </h2>

            <div class="text-[#cccccc] text-base md:text-lg leading-relaxed max-w-2xl">
                <?php echo $cta_description; // WYSIWYG is already safe ?>
            </div>
        </div>

        <div class="flex justify-center lg:justify-end w-full lg:w-1/6">
            <a href="<?php echo $button_url; ?>"
               target="<?php echo $button_target; ?>"
               class="bg-[#703BF7] cursor-pointer text-white font-medium px-8 md:px-10 py-4 md:py-5 rounded-lg text-base md:text-lg whitespace-nowrap border border-[#703BF7]/30 hover:bg-[#262626] hover:text-[#703BF7] hover:border-[#703BF7]/60 transition-all duration-300 shadow-sm hover:shadow-md w-full text-center block">
                <?php echo esc_html($button_label); ?>
            </a>
        </div>

    </div>
</section>