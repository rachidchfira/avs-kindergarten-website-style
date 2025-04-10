<?php
/**
 * Template part for displaying the testimonials section
 */
?>

<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="section-title"><?php echo esc_html__('TESTIMONIALS', 'hapresteam'); ?></h2>

        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $args = array(
                'post_type' => 'testimonial',
                'posts_per_page' => 3,
            );
            
            $testimonials_query = new WP_Query($args);
            
            if ($testimonials_query->have_posts()) :
                while ($testimonials_query->have_posts()) : $testimonials_query->the_post();
                    $role = get_post_meta(get_the_ID(), '_testimonial_role', true);
                    ?>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('thumbnail', array('class' => 'rounded-full mr-4 w-16 h-16 object-cover')); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.svg" alt="<?php the_title_attribute(); ?>" class="rounded-full mr-4 w-16 h-16 object-cover">
                            <?php endif; ?>
                            <div>
                                <h3 class="font-bold text-primary"><?php the_title(); ?></h3>
                                <p class="text-gray-500 text-sm"><?php echo esc_html($role); ?></p>
                            </div>
                        </div>
                        <p class="text-gray-600"><?php the_content(); ?></p>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="col-span-3 text-center">
                    <p><?php echo esc_html__('No testimonials found.', 'hapresteam'); ?></p>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>
