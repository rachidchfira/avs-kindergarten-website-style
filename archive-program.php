<?php
/**
 * The template for displaying program archives
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="bg-primary text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4"><?php echo esc_html__('OUR PROGRAMS', 'hapresteam'); ?></h1>
            <p class="text-xl"><?php echo esc_html__('Diverse educational programs at H&A PRE STEAM', 'hapresteam'); ?></p>
        </div>
    </div>

    <div class="py-16">
        <div class="container mx-auto px-4">
            <?php if (have_posts()) : ?>
                <div class="space-y-16">
                    <?php while (have_posts()) : the_post(); 
                        $age_range = get_post_meta(get_the_ID(), '_program_age_range', true);
                        $duration = get_post_meta(get_the_ID(), '_program_duration', true);
                    ?>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="md:flex">
                                <div class="md:w-1/3 relative">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.svg" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
                                    <?php endif; ?>
                                </div>
                                <div class="md:w-2/3 p-6 md:p-8 border-l-4 border-secondary">
                                    <h2 class="text-2xl font-bold text-primary mb-2"><?php the_title(); ?></h2>
                                    <div class="flex flex-wrap gap-4 mb-4">
                                        <?php if ($age_range) : ?>
                                        <span class="bg-gray-100 text-primary-light px-3 py-1 rounded-full text-sm">
                                            <?php echo esc_html__('Age:', 'hapresteam'); ?> <?php echo esc_html($age_range); ?>
                                        </span>
                                        <?php endif; ?>
                                        
                                        <?php if ($duration) : ?>
                                        <span class="bg-gray-100 text-primary-light px-3 py-1 rounded-full text-sm">
                                            <?php echo esc_html__('Duration:', 'hapresteam'); ?> <?php echo esc_html($duration); ?>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="text-gray-600 mb-4">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="inline-block bg-primary text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors">
                                        <?php echo esc_html__('Learn More', 'hapresteam'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div class="mt-8">
                    <?php the_posts_pagination(); ?>
                </div>
            <?php else : ?>
                <p class="text-center"><?php echo esc_html__('No programs found.', 'hapresteam'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php
get_footer();
