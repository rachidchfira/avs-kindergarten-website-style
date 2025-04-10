<?php
/**
 * The template for displaying the footer
 */
?>

<footer>
    <div class="bg-primary text-white py-12">
        <div class="container mx-auto px-4 grid md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center mb-4">
                    <?php
                    if (has_custom_logo()) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" width="70" height="70" class="bg-white rounded-full p-1 object-contain">';
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="' . get_bloginfo('name') . '" width="70" height="70" class="bg-white rounded-full p-1 object-contain">';
                    }
                    ?>
                    <div class="ml-3">
                        <h3 class="font-bold"><?php bloginfo('name'); ?></h3>
                        <p class="text-xs text-secondary"><?php bloginfo('description'); ?></p>
                    </div>
                </div>
                <p class="text-sm mb-4"><?php echo esc_html__('STEAM-oriented Kindergarten System - Strengths in Pre-Elementary and Early Education', 'hapresteam'); ?></p>
                <div class="flex space-x-4">
                    <a href="<?php echo esc_url(hapresteam_get_contact_info('facebook')); ?>" class="hover:text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(hapresteam_get_contact_info('instagram')); ?>" class="hover:text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-4"><?php esc_html_e('Quick Links', 'hapresteam'); ?></h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'footer-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'depth'          => 1,
                ));
                ?>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-4"><?php esc_html_e('Working Hours', 'hapresteam'); ?></h3>
                <ul class="space-y-2">
                    <li class="text-sm"><?php echo esc_html(hapresteam_get_contact_info('weekdays')); ?></li>
                    <li class="text-sm"><?php echo esc_html(hapresteam_get_contact_info('saturday')); ?></li>
                    <li class="text-sm"><?php echo esc_html(hapresteam_get_contact_info('sunday')); ?></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-4"><?php esc_html_e('Contact', 'hapresteam'); ?></h3>
                <ul class="space-y-2">
                    <li class="text-sm"><?php echo esc_html(hapresteam_get_contact_info('address')); ?></li>
                    <li class="text-sm"><?php echo esc_html(hapresteam_get_contact_info('phone')); ?></li>
                    <li class="text-sm"><?php echo esc_html(hapresteam_get_contact_info('email')); ?></li>
                    <li class="text-sm"><?php esc_html_e('Social: @ha.kindergarten', 'hapresteam'); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg-secondary py-4">
        <div class="container mx-auto px-4 text-center text-primary">
            <p><?php echo esc_html__('Copyright © 2023 H&A Kindergarten (Ha Pre Steam)', 'hapresteam'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
