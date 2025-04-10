<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="bg-primary text-white py-2">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-4">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <span class="text-sm"><?php echo esc_html(hapresteam_get_contact_info('weekdays')); ?></span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <span class="text-sm"><?php echo esc_html(hapresteam_get_contact_info('phone')); ?></span>
                </div>
            </div>
            <div class="flex space-x-4 items-center">
                <a href="<?php echo esc_url(home_url('/gallery')); ?>" class="text-sm hover:underline">
                    <?php esc_html_e('Photo Gallery', 'hapresteam'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/videos')); ?>" class="text-sm hover:underline">
                    <?php esc_html_e('Video Gallery', 'hapresteam'); ?>
                </a>
                <?php if (function_exists('pll_the_languages')): ?>
                <div class="language-switcher">
                    <?php
                    pll_the_languages(array(
                        'dropdown' => 0,
                        'show_names' => 1,
                        'display_names_as' => 'slug',
                        'hide_if_empty' => 0,
                    ));
                    ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container mx-auto py-4 px-4 flex justify-between items-center">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3">
            <?php
            if (has_custom_logo()) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" width="100" height="100" class="object-contain">';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="' . get_bloginfo('name') . '" width="100" height="100" class="object-contain">';
            }
            ?>
            <div>
                <h1 class="text-xl font-bold text-primary"><?php bloginfo('name'); ?></h1>
                <p class="text-xs text-secondary"><?php bloginfo('description'); ?></p>
            </div>
        </a>

        <nav class="hidden md:flex space-x-8">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => false,
                'items_wrap'     => '%3$s',
                'walker'         => new Hapresteam_Menu_Walker(),
            ));
            ?>
        </nav>

        <button class="md:hidden menu-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</header>

<div class="mobile-menu hidden">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class'     => 'mobile-menu-items',
        'container'      => false,
        'fallback_cb'    => false,
    ));
    ?>
</div>
