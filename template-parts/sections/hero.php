<?php
// ACF Fields
$hero_title    = get_field('hero_title')    ?: 'Discover Your Dream Property with Estatein';
$hero_subtitle = get_field('hero_subtitle') ?: 'Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.';
$cta_primary   = get_field('hero_cta_primary');
$cta_secondary = get_field('hero_cta_secondary');

// Hero Image — fallback to local asset
$hero_image_field = get_field('hero_image');
$hero_image_url   = $hero_image_field['url'] ?? get_template_directory_uri() . '/assets/images/hero-building.png';
$hero_image_alt   = $hero_image_field['alt'] ?? 'Hero Image';

// Hero Background — fallback to local asset
$hero_bg_field = get_field('hero_background');
$hero_bg_url   = $hero_bg_field['url'] ?? get_template_directory_uri() . '/assets/images/hero-abstract.png';

$stats = [
    [
        'value' => get_field('stat_1_value') ?: '200+',
        'label' => get_field('stat_1_label') ?: 'Happy Customers',
    ],
    [
        'value' => get_field('stat_2_value') ?: '10k+',
        'label' => get_field('stat_2_label') ?: 'Properties For Clients',
    ],
    [
        'value' => get_field('stat_3_value') ?: '16+',
        'label' => get_field('stat_3_label') ?: 'Years of Experience',
    ],
];
?>

<!-- Hero Section -->
<div class="relative flex flex-col md:flex-row items-center w-full gap-12">

    <!-- LEFT COLUMN -->
    <div class="flex flex-col justify-center flex-1 gap-6 w-full px-6 md:px-[162px]">

        <!-- Mobile: Image with overlapping badge -->
        <div class="relative md:hidden w-full">

            <!-- Image Card -->
            <div class="rounded-xl border border-[#262626] bg-[#1A1A1A] w-full h-[302px] overflow-hidden relative">
                <img src="<?php echo esc_url($hero_image_url); ?>"
                     alt="<?php echo esc_attr($hero_image_alt); ?>"
                     class="w-full h-full object-cover">
            </div>

            <!-- Mobile Floating Badge — overlaps bottom of image -->
            <div class="absolute -bottom-[58px] left-0 flex items-end gap-4">

                <!-- Badge -->
                <div class="flex items-center justify-center rounded-full border border-[#262626] bg-[#141414] w-[117px] h-[117px] relative shrink-0">
                    <div class="shrink-0 rounded-full border border-[#262626] bg-[#1A1A1A] w-[53px] h-[53px]"></div>
                    <svg width="22" height="22" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute">
                        <path d="M6.375 27.625L27.625 6.375M27.625 6.375L11.6875 6.375M27.625 6.375V22.3125"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="rotating-text absolute inset-0 w-full h-full">
                        <svg viewBox="0 0 200 200" width="117" height="117" class="w-full h-full">
                            <defs>
                                <path id="textCircleMobile" d="M 100,100 m -75,0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0"/>
                            </defs>
                            <text font-size="13" fill="white" font-family="Urbanist, sans-serif" font-weight="600" letter-spacing="2">
                                <textPath href="#textCircleMobile">
                                    ✨ Discover Your Dream Property ✨ Discover Your Dream Property
                                </textPath>
                            </text>
                        </svg>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile: Title & Subtitle (with top padding to clear badge) -->
        <div class="flex flex-col gap-4 md:gap-6 mt-16 md:mt-0">
            <h1 class="text-[28px] md:text-6xl font-semibold leading-tight font-urbanist">
                <?php echo esc_html($hero_title); ?>
            </h1>
            <p class="text-sm md:text-lg text-[#999] md:text-gray-400 font-medium">
                <?php echo esc_html($hero_subtitle); ?>
            </p>
        </div>

        <!-- CTA Buttons -->
        <?php if ( $cta_primary || $cta_secondary ) : ?>
        <div class="flex flex-col md:flex-row gap-4 md:gap-5 w-full md:w-auto">

            <?php if ( $cta_secondary ) : ?>
            <a href="<?php echo esc_url($cta_secondary['url']); ?>"
               target="<?php echo esc_attr($cta_secondary['target'] ?: '_self'); ?>"
               class="w-full md:w-auto text-center px-5 py-3.5 md:px-6 md:py-4 border border-[#262626] rounded-lg text-sm md:text-base font-medium text-white hover:bg-gray-800 transition">
                <?php echo esc_html($cta_secondary['title']); ?>
            </a>
            <?php endif; ?>

            <?php if ( $cta_primary ) : ?>
            <a href="<?php echo esc_url($cta_primary['url']); ?>"
               target="<?php echo esc_attr($cta_primary['target'] ?: '_self'); ?>"
               class="w-full md:w-auto text-center px-5 py-3.5 md:px-6 md:py-4 bg-[#703BF7] rounded-lg text-sm md:text-base font-medium text-white hover:bg-purple-600 transition">
                <?php echo esc_html($cta_primary['title']); ?>
            </a>
            <?php endif; ?>

        </div>
        <?php endif; ?>

        <!-- Stats Boxes -->
        <div class="grid grid-cols-2 md:flex gap-3 md:gap-5 w-full mt-4 md:mt-12">
            <?php foreach ( $stats as $index => $stat ) : ?>
                <?php if ( $stat['value'] || $stat['label'] ) : ?>
                <div class="flex flex-col items-center md:items-start p-4 md:p-6 bg-[#1A1A1A] md:bg-gray-900 border border-[#262626] md:border-gray-800 rounded-xl
                    <?php echo $index === 2 ? 'col-span-2' : ''; ?>">
                    <p class="text-2xl md:text-4xl font-bold text-white text-center md:text-left w-full">
                        <?php echo esc_html($stat['value']); ?>
                    </p>
                    <p class="text-sm md:text-base text-[#999] md:text-gray-400 font-medium text-center md:text-left w-full">
                        <?php echo esc_html($stat['label']); ?>
                    </p>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- Desktop: Floating Rotating Badge — centered between columns -->
    <div class="hidden md:flex absolute left-1/2 top-[125px] -translate-x-1/2 z-10 items-center justify-center rounded-full border border-[#262626] bg-[#141414] w-[160px] h-[160px]">
        <div class="shrink-0 rounded-full border border-[#262626] bg-[#1A1A1A] w-16 h-16"></div>
        <svg width="28" height="28" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute">
            <path d="M6.375 27.625L27.625 6.375M27.625 6.375L11.6875 6.375M27.625 6.375V22.3125"
                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <div class="rotating-text absolute inset-0 w-full h-full">
            <svg viewBox="0 0 200 200" width="200" height="200" class="w-full h-full">
                <defs>
                    <path id="textCircleDesktop" d="M 100,100 m -75,0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0"/>
                </defs>
                <text font-size="13" fill="white" font-family="Urbanist, sans-serif" font-weight="600" letter-spacing="2">
                    <textPath href="#textCircleDesktop">
                        ✨ Discover Your Dream Property ✨ Discover Your Dream Property
                    </textPath>
                </text>
            </svg>
        </div>
    </div>

    <!-- RIGHT COLUMN — Desktop only image -->
    <div class="hidden md:block relative flex-1 bg-cover bg-center"
         style="background-image: url('<?php echo esc_url($hero_bg_url); ?>');">
        <img src="<?php echo esc_url($hero_image_url); ?>"
             alt="<?php echo esc_attr($hero_image_alt); ?>"
             class="w-full h-auto object-cover">
    </div>

</div>