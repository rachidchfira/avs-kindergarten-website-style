<?php
/**
 * The template for displaying the front page
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    // Hero Section
    get_template_part('template-parts/sections/hero');
    
    // Features Section
    get_template_part('template-parts/sections/features');
    
    // Programs Section
    get_template_part('template-parts/sections/programs');
    
    // Teachers Section
    get_template_part('template-parts/sections/teachers');
    
    // Testimonials Section
    get_template_part('template-parts/sections/testimonials');
    
    // FAQ Section
    get_template_part('template-parts/sections/faq');
    
    // Contact Section
    get_template_part('template-parts/sections/contact');
    ?>
</main>

<?php
get_footer();
