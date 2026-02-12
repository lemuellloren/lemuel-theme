<?php
/**
 * Template part for the Key Value Section
 */

// Fallback icons for each value
$fallback_icons = [
    get_template_directory_uri() . '/assets/images/icons/find.png',
    get_template_directory_uri() . '/assets/images/icons/unlock.png',
    get_template_directory_uri() . '/assets/images/icons/effort.png',
    get_template_directory_uri() . '/assets/images/icons/smart.png',
];

$fallback_titles = [
    'Find Your Dream Home',
    'Unlock Property Value',
    'Effortless Property Management',
    'Smart Investments, Informed Decisions'
];
?>

<section class="flex flex-col justify-center items-start p-5 gap-5 rounded-xl border border-[#262626] bg-[#141414] shadow-[0_0_4px_#191919] w-full overflow-hidden">
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 w-full justify-items-stretch">
        
        <?php 
        // We loop 1 through 4 because your ACF names are kv_1, kv_2, etc.
        for ($i = 1; $i <= 4; $i++) : 
            $title = get_field("kv_{$i}_title");
            $link  = get_field("kv_{$i}_link");
            $icon  = get_field("kv_{$i}_icon");

            // Use ACF data if it exists, otherwise use fallback arrays
            $display_title = !empty($title) ? $title : $fallback_titles[$i-1];
            $display_link  = !empty($link)  ? $link  : '#';
            $display_icon  = !empty($icon)  ? $icon['url'] : $fallback_icons[$i-1];
        ?>
            
            <a href="<?php echo esc_url($display_link); ?>" class="relative group cursor-pointer flex flex-col items-center gap-5 p-1 md:p-10 rounded-xl border border-[#262626] bg-[#1A1A1A] hover:border-[#703BF7] transition-all duration-300">
                <div class="flex items-center justify-center">
                    <img src="<?php echo esc_url($display_icon); ?>" 
                         alt="<?php echo esc_attr($display_title); ?>" 
                         class="w-[48px] h-[48px] md:w-[60px] md:h-[60px] object-contain">
                </div>
                
                <p class="text-white font-urbanist text-sm md:text-xl font-semibold text-center w-full px-2">
                    <?php echo esc_html($display_title); ?>
                </p>

                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" 
                     class="absolute right-3 top-3 md:right-5 md:top-5 w-[20px] h-[20px] md:w-[34px] md:h-[34px] transition-transform duration-300 group-hover:-translate-y-1 group-hover:translate-x-1">
                    <path d="M6.375 27.625L27.625 6.375M27.625 6.375L11.6875 6.375M27.625 6.375V22.3125" 
                          stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="group-hover:stroke-[#703BF7] transition-colors duration-300"/>
                </svg>
            </a>

        <?php endfor; ?>

    </div>
</section>