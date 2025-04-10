<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
        
        // Page header
        ?>
        <div class="bg-primary text-white py-16">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>
            </div>
        </div>
        
        <div class="py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
