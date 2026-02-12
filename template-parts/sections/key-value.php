<?php
// Get repeater for dynamic values
$values = get_field('kv_blocks'); // ACF repeater field

// Fallback icons for each value
$fallback_icons = [
    get_template_directory_uri() . '/assets/images/icons/find.png',
    get_template_directory_uri() . '/assets/images/icons/unlock.png',
    get_template_directory_uri() . '/assets/images/icons/effort.png',
    get_template_directory_uri() . '/assets/images/icons/smart.png',
];
?>

<section class="flex flex-col justify-center items-start p-5 gap-5 rounded-xl border border-[#262626] bg-[#141414] shadow-[0_0_4px_#191919] w-full overflow-hidden">
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 w-full justify-items-stretch">
        
        <?php if ($values): ?>
            <?php foreach ($values as $index => $item):
                // Use the icon from ACF or fallback for this specific value
                $icon_image = !empty($item['icon_image']) ? $item['icon_image']['url'] : ($fallback_icons[$index] ?? $fallback_icons[0]);
                $title      = $item['title'] ?? 'Default Title';
                $link       = $item['link']  ?? '#';
            ?>
                <a href="<?php echo esc_url($link); ?>" class="relative group cursor-pointer flex flex-col items-center gap-5 p-1 md:p-10 rounded-xl border border-[#262626] bg-[#1A1A1A] hover:border-[#703BF7] transition-colors duration-300">
                    <img src="<?php echo esc_url($icon_image); ?>" alt="<?php echo esc_attr($title); ?>" class="w-[48px] h-[48px] md:w-[34px] md:h-[34px] object-contain">
                    
                    <p class="text-[#FFF] font-urbanist text-xl font-semibold text-center w-full"><?php echo esc_html($title); ?></p>

                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute right-5 top-5 w-[34px] h-[34px]">
                        <path d="M6.375 27.625L27.625 6.375M27.625 6.375L11.6875 6.375M27.625 6.375V22.3125" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            <?php endforeach; ?>

        <?php else: ?>
            <?php
            $fallback_values = [
                ['title' => 'Find Your Dream Home', 'link' => '#'],
                ['title' => 'Unlock Property Value', 'link' => '#'],
                ['title' => 'Effortless Property Management', 'link' => '#'],
                ['title' => 'Smart Investments, Informed Decisions', 'link' => '#'],
            ];
            foreach ($fallback_values as $index => $item):
                $icon_image = $fallback_icons[$index] ?? $fallback_icons[0];
            ?>
                <div class="cursor-pointer flex flex-col items-center gap-5 p-1 md:p-10 rounded-xl border border-[#262626] bg-[#1A1A1A] w-full relative group hover:border-[#703BF7] transition-colors duration-300">
                    <div class="flex items-center gap-2.5">
                        <img src="<?php echo esc_url($icon_image); ?>" alt="<?php echo esc_attr($item['title']); ?>" class="w-[48px] h-[48px] md:w-[82px] md:h-[82px] object-contain">
                    </div>
            
                    <p class="text-[#FFF] font-urbanist text-sm md:text-xl font-semibold text-center w-full"><?php echo esc_html($item['title']); ?></p>
                    
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute right-[3px] top-[5px] md:right-5 md:top-5 w-[26px] h-[26px] md:w-[34px] md:h-[34px]">
                        <path d="M6.375 27.625L27.625 6.375M27.625 6.375L11.6875 6.375M27.625 6.375V22.3125" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</section>