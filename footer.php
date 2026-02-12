<?php
/**
 * Footer Template - Responsive Version
 */

$footer_logo_id = get_theme_mod('custom_logo');
$footer_logo_url = $footer_logo_id ? wp_get_attachment_image_url($footer_logo_id, 'full') : '';
?>

<footer class="w-full bg-[#141414] text-white border-t border-[#262626]">
    <div class="flex flex-col lg:flex-row py-12 lg:py-[100px] px-6 md:px-12 lg:px-[162px] items-start gap-12 lg:gap-20 w-full">
        
        <div class="flex flex-col items-start gap-8 w-full lg:w-[400px] shrink-0">
            <div class="flex items-center gap-2.5 h-12">
                <?php if ($footer_logo_url) : ?>
                    <img src="<?php echo esc_url($footer_logo_url); ?>" alt="<?php bloginfo('name'); ?>" class="h-full w-auto object-contain" />
                <?php else : ?>
                    <h1 class="text-2xl font-bold"><?php bloginfo('name'); ?></h1>
                <?php endif; ?>
            </div>

            <div class="flex py-4 px-5 items-center gap-2.5 rounded-xl border border-[#262626] bg-[#141414] w-full">
                <svg class="w-5 h-5 shrink-0 text-[#999999]" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 4H4C2.9 4 2 4.9 2 6v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 2l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/>
                </svg>

                <input type="email" placeholder="Enter Your Email" class="bg-transparent text-white w-full outline-none text-sm md:text-base" />

                <button class="flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-80 hover:opacity-100 shrink-0 cursor-pointer">
                    <img 
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icons/submit.png'); ?>" 
                        alt="Submit" 
                        class="w-5 h-5 object-contain"
                    />
                </button>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:flex lg:justify-between gap-10 lg:gap-5 w-full">
            <?php
            $menu_locations = get_nav_menu_locations();
            $footer_menu_id = $menu_locations['footer'] ?? 0;
            $footer_menu_items = $footer_menu_id ? wp_get_nav_menu_items($footer_menu_id) : [];

            if ($footer_menu_items) :
                $menu_tree = [];
                foreach ($footer_menu_items as $item) {
                    if (!$item->menu_item_parent) {
                        $menu_tree[$item->ID] = [
                            'title' => $item->title,
                            'url' => $item->url,
                            'children' => []
                        ];
                    }
                }
                foreach ($footer_menu_items as $item) {
                    if ($item->menu_item_parent && isset($menu_tree[$item->menu_item_parent])) {
                        $menu_tree[$item->menu_item_parent]['children'][] = [
                            'title' => $item->title,
                            'url' => $item->url
                        ];
                    }
                }

                foreach ($menu_tree as $parent_item) :
            ?>
                    <div class="flex flex-col items-start gap-4 lg:gap-[30px] border-b border-[#262626] pb-6 lg:border-none lg:pb-0">
                        <p class="text-[#999] text-base lg:text-xl font-medium"><?php echo esc_html($parent_item['title']); ?></p>
                        <div class="flex flex-col items-start gap-3 lg:gap-5">
                            <?php foreach ($parent_item['children'] as $child) : ?>
                                <p class="text-[#FFF] text-sm lg:text-lg font-medium">
                                    <a href="<?php echo esc_url($child['url']); ?>" class="hover:text-[#703BF7] transition-colors duration-200">
                                        <?php echo esc_html($child['title']); ?>
                                    </a>
                                </p>
                            <?php endforeach; ?>
                        </div>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>

    <div class="flex flex-col-reverse lg:flex-row py-6 px-6 md:px-12 lg:px-[162px] justify-between items-center bg-[#1A1A1A] w-full gap-6">
        <div class="flex flex-col md:flex-row items-center gap-4 lg:gap-[38px] text-center md:text-left text-sm text-[#999]">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
            <p><a href="#" class="hover:text-[#703BF7] transition-colors duration-200">Terms & Conditions</a></p>
        </div>

        <div class="flex items-center gap-4">
            <a href="#" class="w-12 h-12 bg-[#141414] rounded-full flex items-center justify-center hover:bg-[#262626] transition-colors duration-200 border border-[#262626]">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 5 3.657 9.128 8.438 9.879v-6.988h-2.54v-2.89h2.54V9.845c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.465h-1.26c-1.242 0-1.63.772-1.63 1.562v1.875h2.773l-.443 2.89h-2.33V21.88C18.343 21.128 22 17 22 12z"/>
                </svg>
            </a>
            <a href="#" class="w-12 h-12 bg-[#141414] rounded-full flex items-center justify-center hover:bg-[#262626] transition-colors duration-200 border border-[#262626]">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.25 2.25h6.634l4.704 6.22z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>