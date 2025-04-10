<?php
/**
 * Template part for displaying the programs section
 */
?>

<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="section-title"><?php echo esc_html__('OUR PROGRAMS', 'hapresteam'); ?></h2>
        <p class="text-center text-gray-600 mb-12 max-w-3xl mx-auto"><?php echo esc_html__('Diverse educational programs for all kindergarten ages', 'hapresteam'); ?></p>

        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $args = array(
                'post_type' => 'program',
                'posts_per_page' => 3,
            );
            
            $programs_query = new WP_Query($args);
            
            if ($programs_query->have_posts()) :
                while ($programs_query->have_posts()) : $programs_query->the_post();
                    ?>
                    <div class="card">
                        <div class="relative h-48">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', array('class' => 'object-cover w-full h-full')); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.svg" alt="<?php the_title_attribute(); ?>" class="object-cover w-full h-full">
                            <?php endif; ?>
                        </div>
                        <div class="p-6 border-l-4 border-secondary">
                            <h3 class="text-xl font-bold text-primary mb-2"><?php the_title(); ?></h3>
                            <p class="text-gray-600 mb-4"><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="text-primary-light font-medium hover:underline">
                                <?php echo esc_html__('View details', 'hapresteam'); ?> →
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="col-span-3 text-center">
                    <p><?php echo esc_html__('No programs found.', 'hapresteam'); ?></p>
                </div>
                <?php
            endif;
            ?>
        </div>

        <div class="text-center mt-12">
            <a href="<?php echo esc_url(home_url('/programs')); ?>" class="btn-primary">
                <?php echo esc_html__('View All Programs', 'hapresteam'); ?>
            </a>
        </div>
    </div>
</section>
