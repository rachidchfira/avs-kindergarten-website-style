<?php
/**
 * H&A Pre STEAM Kindergarten Theme functions and definitions
 */

// Theme setup
function hapresteam_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'hapresteam'),
        'footer' => esc_html__('Footer Menu', 'hapresteam'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Set up the WordPress core custom background feature
    add_theme_support('custom-background');

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for core custom logo
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Load theme textdomain for translations
    load_theme_textdomain('hapresteam', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'hapresteam_setup');

// Enqueue scripts and styles
function hapresteam_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('hapresteam-style', get_stylesheet_uri());
    
    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/assets/css/tailwind.css');
    
    // Enqueue custom scripts
    wp_enqueue_script('hapresteam-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0', true);
    
    // Enqueue language switcher script
    wp_enqueue_script('hapresteam-language-switcher', get_template_directory_uri() . '/assets/js/language-switcher.js', array('jquery'), '1.0', true);
    
    // Localize script for translations
    wp_localize_script('hapresteam-language-switcher', 'hapresteamSettings', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'current_language' => function_exists('pll_current_language') ? pll_current_language() : 'vi'
    ));
}
add_action('wp_enqueue_scripts', 'hapresteam_scripts');

// Register widget areas
function hapresteam_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'hapresteam'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'hapresteam'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer 1', 'hapresteam'),
        'id'            => 'footer-1',
        'description'   => esc_html__('First footer column.', 'hapresteam'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer 2', 'hapresteam'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Second footer column.', 'hapresteam'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer 3', 'hapresteam'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Third footer column.', 'hapresteam'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer 4', 'hapresteam'),
        'id'            => 'footer-4',
        'description'   => esc_html__('Fourth footer column.', 'hapresteam'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'hapresteam_widgets_init');

// Custom post types for Programs
function hapresteam_register_post_types() {
    // Register Programs post type
    register_post_type('program', array(
        'labels' => array(
            'name' => __('Programs', 'hapresteam'),
            'singular_name' => __('Program', 'hapresteam'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-welcome-learn-more',
        'show_in_rest' => true,
    ));
    
    // Register Teachers post type
    register_post_type('teacher', array(
        'labels' => array(
            'name' => __('Teachers', 'hapresteam'),
            'singular_name' => __('Teacher', 'hapresteam'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-groups',
        'show_in_rest' => true,
    ));
    
    // Register Testimonials post type
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => __('Testimonials', 'hapresteam'),
            'singular_name' => __('Testimonial', 'hapresteam'),
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
        'show_in_rest' => true,
    ));
}
add_action('init', 'hapresteam_register_post_types');

// Add custom meta boxes for additional fields
function hapresteam_add_meta_boxes() {
    // Program meta box
    add_meta_box(
        'program_details',
        __('Program Details', 'hapresteam'),
        'hapresteam_program_details_callback',
        'program',
        'normal',
        'high'
    );
    
    // Teacher meta box
    add_meta_box(
        'teacher_details',
        __('Teacher Details', 'hapresteam'),
        'hapresteam_teacher_details_callback',
        'teacher',
        'normal',
        'high'
    );
    
    // Testimonial meta box
    add_meta_box(
        'testimonial_details',
        __('Testimonial Details', 'hapresteam'),
        'hapresteam_testimonial_details_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'hapresteam_add_meta_boxes');

// Program details meta box callback
function hapresteam_program_details_callback($post) {
    wp_nonce_field('hapresteam_program_details', 'hapresteam_program_details_nonce');
    
    $age_range = get_post_meta($post->ID, '_program_age_range', true);
    $duration = get_post_meta($post->ID, '_program_duration', true);
    
    echo '<p><label for="program_age_range">' . __('Age Range:', 'hapresteam') . '</label>';
    echo '<input type="text" id="program_age_range" name="program_age_range" value="' . esc_attr($age_range) . '" class="widefat" /></p>';
    
    echo '<p><label for="program_duration">' . __('Duration:', 'hapresteam') . '</label>';
    echo '<input type="text" id="program_duration" name="program_duration" value="' . esc_attr($duration) . '" class="widefat" /></p>';
}

// Teacher details meta box callback
function hapresteam_teacher_details_callback($post) {
    wp_nonce_field('hapresteam_teacher_details', 'hapresteam_teacher_details_nonce');
    
    $role = get_post_meta($post->ID, '_teacher_role', true);
    $nationality = get_post_meta($post->ID, '_teacher_nationality', true);
    $qualifications = get_post_meta($post->ID, '_teacher_qualifications', true);
    $experience = get_post_meta($post->ID, '_teacher_experience', true);
    $facebook = get_post_meta($post->ID, '_teacher_facebook', true);
    $email = get_post_meta($post->ID, '_teacher_email', true);
    $phone = get_post_meta($post->ID, '_teacher_phone', true);
    
    echo '<p><label for="teacher_role">' . __('Role:', 'hapresteam') . '</label>';
    echo '<input type="text" id="teacher_role" name="teacher_role" value="' . esc_attr($role) . '" class="widefat" /></p>';
    
    echo '<p><label for="teacher_nationality">' . __('Nationality:', 'hapresteam') . '</label>';
    echo '<input type="text" id="teacher_nationality" name="teacher_nationality" value="' . esc_attr($nationality) . '" class="widefat" /></p>';
    
    echo '<p><label for="teacher_qualifications">' . __('Qualifications:', 'hapresteam') . '</label>';
    echo '<input type="text" id="teacher_qualifications" name="teacher_qualifications" value="' . esc_attr($qualifications) . '" class="widefat" /></p>';
    
    echo '<p><label for="teacher_experience">' . __('Experience:', 'hapresteam') . '</label>';
    echo '<input type="text" id="teacher_experience" name="teacher_experience" value="' . esc_attr($experience) . '" class="widefat" /></p>';
    
    echo '<p><label for="teacher_facebook">' . __('Facebook URL:', 'hapresteam') . '</label>';
    echo '<input type="url" id="teacher_facebook" name="teacher_facebook" value="' . esc_attr($facebook) . '" class="widefat" /></p>';
    
    echo '<p><label for="teacher_email">' . __('Email:', 'hapresteam') . '</label>';
    echo '<input type="email" id="teacher_email" name="teacher_email" value="' . esc_attr($email) . '" class="widefat" /></p>';
    
    echo '<p><label for="teacher_phone">' . __('Phone:', 'hapresteam') . '</label>';
    echo '<input type="text" id="teacher_phone" name="teacher_phone" value="' . esc_attr($phone) . '" class="widefat" /></p>';
}

// Testimonial details meta box callback
function hapresteam_testimonial_details_callback($post) {
    wp_nonce_field('hapresteam_testimonial_details', 'hapresteam_testimonial_details_nonce');
    
    $role = get_post_meta($post->ID, '_testimonial_role', true);
    
    echo '<p><label for="testimonial_role">' . __('Role (e.g. Parent):', 'hapresteam') . '</label>';
    echo '<input type="text" id="testimonial_role" name="testimonial_role" value="' . esc_attr($role) . '" class="widefat" /></p>';
}

// Save meta box data
function hapresteam_save_meta_box_data($post_id) {
    // Check if our nonce is set for programs
    if (isset($_POST['hapresteam_program_details_nonce'])) {
        if (!wp_verify_nonce($_POST['hapresteam_program_details_nonce'], 'hapresteam_program_details')) {
            return;
        }
        
        if (isset($_POST['program_age_range'])) {
            update_post_meta($post_id, '_program_age_range', sanitize_text_field($_POST['program_age_range']));
        }
        
        if (isset($_POST['program_duration'])) {
            update_post_meta($post_id, '_program_duration', sanitize_text_field($_POST['program_duration']));
        }
    }
    
    // Check if our nonce is set for teachers
    if (isset($_POST['hapresteam_teacher_details_nonce'])) {
        if (!wp_verify_nonce($_POST['hapresteam_teacher_details_nonce'], 'hapresteam_teacher_details')) {
            return;
        }
        
        if (isset($_POST['teacher_role'])) {
            update_post_meta($post_id, '_teacher_role', sanitize_text_field($_POST['teacher_role']));
        }
        
        if (isset($_POST['teacher_nationality'])) {
            update_post_meta($post_id, '_teacher_nationality', sanitize_text_field($_POST['teacher_nationality']));
        }
        
        if (isset($_POST['teacher_qualifications'])) {
            update_post_meta($post_id, '_teacher_qualifications', sanitize_text_field($_POST['teacher_qualifications']));
        }
        
        if (isset($_POST['teacher_experience'])) {
            update_post_meta($post_id, '_teacher_experience', sanitize_text_field($_POST['teacher_experience']));
        }
        
        if (isset($_POST['teacher_facebook'])) {
            update_post_meta($post_id, '_teacher_facebook', esc_url_raw($_POST['teacher_facebook']));
        }
        
        if (isset($_POST['teacher_email'])) {
            update_post_meta($post_id, '_teacher_email', sanitize_email($_POST['teacher_email']));
        }
        
        if (isset($_POST['teacher_phone'])) {
            update_post_meta($post_id, '_teacher_phone', sanitize_text_field($_POST['teacher_phone']));
        }
    }
    
    // Check if our nonce is set for testimonials
    if (isset($_POST['hapresteam_testimonial_details_nonce'])) {
        if (!wp_verify_nonce($_POST['hapresteam_testimonial_details_nonce'], 'hapresteam_testimonial_details')) {
            return;
        }
        
        if (isset($_POST['testimonial_role'])) {
            update_post_meta($post_id, '_testimonial_role', sanitize_text_field($_POST['testimonial_role']));
        }
    }
}
add_action('save_post', 'hapresteam_save_meta_box_data');

// Add theme options page
function hapresteam_add_theme_options_page() {
    add_theme_page(
        __('Theme Options', 'hapresteam'),
        __('Theme Options', 'hapresteam'),
        'manage_options',
        'hapresteam-options',
        'hapresteam_theme_options_page'
    );
}
add_action('admin_menu', 'hapresteam_add_theme_options_page');

// Theme options page callback
function hapresteam_theme_options_page() {
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('hapresteam_options');
            do_settings_sections('hapresteam-options');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Register settings
function hapresteam_register_settings() {
    register_setting('hapresteam_options', 'hapresteam_contact_info');
    
    add_settings_section(
        'hapresteam_contact_section',
        __('Contact Information', 'hapresteam'),
        'hapresteam_contact_section_callback',
        'hapresteam-options'
    );
    
    add_settings_field(
        'hapresteam_address',
        __('Address', 'hapresteam'),
        'hapresteam_address_callback',
        'hapresteam-options',
        'hapresteam_contact_section'
    );
    
    add_settings_field(
        'hapresteam_phone',
        __('Phone', 'hapresteam'),
        'hapresteam_phone_callback',
        'hapresteam-options',
        'hapresteam_contact_section'
    );
    
    add_settings_field(
        'hapresteam_email',
        __('Email', 'hapresteam'),
        'hapresteam_email_callback',
        'hapresteam-options',
        'hapresteam_contact_section'
    );
    
    add_settings_field(
        'hapresteam_working_hours',
        __('Working Hours', 'hapresteam'),
        'hapresteam_working_hours_callback',
        'hapresteam-options',
        'hapresteam_contact_section'
    );
    
    add_settings_field(
        'hapresteam_social_media',
        __('Social Media', 'hapresteam'),
        'hapresteam_social_media_callback',
        'hapresteam-options',
        'hapresteam_contact_section'
    );
}
add_action('admin_init', 'hapresteam_register_settings');

// Settings section callback
function hapresteam_contact_section_callback() {
    echo '<p>' . __('Enter your contact information below.', 'hapresteam') . '</p>';
}

// Settings field callbacks
function hapresteam_address_callback() {
    $options = get_option('hapresteam_contact_info');
    $address = isset($options['address']) ? $options['address'] : '';
    echo '<textarea name="hapresteam_contact_info[address]" rows="3" cols="50">' . esc_textarea($address) . '</textarea>';
}

function hapresteam_phone_callback() {
    $options = get_option('hapresteam_contact_info');
    $phone = isset($options['phone']) ? $options['phone'] : '';
    echo '<input type="text" name="hapresteam_contact_info[phone]" value="' . esc_attr($phone) . '" class="regular-text">';
}

function hapresteam_email_callback() {
    $options = get_option('hapresteam_contact_info');
    $email = isset($options['email']) ? $options['email'] : '';
    echo '<input type="email" name="hapresteam_contact_info[email]" value="' . esc_attr($email) . '" class="regular-text">';
}

function hapresteam_working_hours_callback() {
    $options = get_option('hapresteam_contact_info');
    $weekdays = isset($options['weekdays']) ? $options['weekdays'] : '';
    $saturday = isset($options['saturday']) ? $options['saturday'] : '';
    $sunday = isset($options['sunday']) ? $options['sunday'] : '';
    
    echo '<p><label>' . __('Weekdays:', 'hapresteam') . '</label>';
    echo '<input type="text" name="hapresteam_contact_info[weekdays]" value="' . esc_attr($weekdays) . '" class="regular-text"></p>';
    
    echo '<p><label>' . __('Saturday:', 'hapresteam') . '</label>';
    echo '<input type="text" name="hapresteam_contact_info[saturday]" value="' . esc_attr($saturday) . '" class="regular-text"></p>';
    
    echo '<p><label>' . __('Sunday:', 'hapresteam') . '</label>';
    echo '<input type="text" name="hapresteam_contact_info[sunday]" value="' . esc_attr($sunday) . '" class="regular-text"></p>';
}

function hapresteam_social_media_callback() {
    $options = get_option('hapresteam_contact_info');
    $facebook = isset($options['facebook']) ? $options['facebook'] : '';
    $instagram = isset($options['instagram']) ? $options['instagram'] : '';
    
    echo '<p><label>' . __('Facebook:', 'hapresteam') . '</label>';
    echo '<input type="url" name="hapresteam_contact_info[facebook]" value="' . esc_attr($facebook) . '" class="regular-text"></p>';
    
    echo '<p><label>' . __('Instagram:', 'hapresteam') . '</label>';
    echo '<input type="url" name="hapresteam_contact_info[instagram]" value="' . esc_attr($instagram) . '" class="regular-text"></p>';
}

// Helper function to get contact info
function hapresteam_get_contact_info($key = '') {
    $options = get_option('hapresteam_contact_info');
    
    if (empty($key)) {
        return $options;
    }
    
    return isset($options[$key]) ? $options[$key] : '';
}
