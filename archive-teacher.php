<?php
/**
 * The template for displaying teacher archives
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="bg-primary text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4"><?php echo esc_html__('OUR TEACHERS', 'hapresteam'); ?></h1>
            <p class="text-xl"><?php echo esc_html__('Professional teaching team at H&A PRE STEAM', 'hapresteam'); ?></p>
        </div>
    </div>

    <div class="py-16">
        <div class="container mx-auto px-4">
            <?php if (have_posts()) : ?>
                <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <?php while (have_posts()) : the_post(); 
                        $role = get_post_meta(get_the_ID(), '_teacher_role', true);
                        $nationality = get_post_meta(get_the_ID(), '_teacher_nationality', true);
                        $qualifications = get_post_meta(get_the_ID(), '_teacher_qualifications', true);
                        $experience = get_post_meta(get_the_ID(), '_teacher_experience', true);
                        $facebook = get_post_meta(get_the_ID(), '_teacher_facebook', true);
                        $email = get_post_meta(get_the_ID(), '_teacher_email', true);
                        $phone = get_post_meta(get_the_ID(), '_teacher_phone', true);
                    ?>
                        <div class="bg-white rounded-lg overflow-hidden shadow-md">
                            <div class="relative h-64 w-full">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', array('class' => 'object-cover w-full h-full')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.svg" alt="<?php the_title_attribute(); ?>" class="object-cover w-full h-full">
                                <?php endif; ?>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-primary"><?php the_title(); ?></h3>
                                <p class="text-gray-500 mb-2"><?php echo esc_html($nationality); ?></p>
                                <p class="text-primary-light"><?php echo esc_html($role); ?></p>

                                <div class="mt-4 pt-4 border-t border-gray-100">
                                    <?php if ($qualifications) : ?>
                                    <p class="text-sm text-gray-600">
                                        <span class="font-medium text-primary"><?php echo esc_html__('Qualifications:', 'hapresteam'); ?></span> <?php echo esc_html($qualifications); ?>
                                    </p>
                                    <?php endif; ?>
                                    
                                    <?php if ($experience) : ?>
                                    <p class="text-sm text-gray-600">
                                        <span class="font-medium text-primary"><?php echo esc_html__('Experience:', 'hapresteam'); ?></span> <?php echo esc_html($experience); ?>
                                    </p>
                                    <?php endif; ?>
                                </div>

                                <div class="flex justify-center space-x-2 mt-4">
                                    <?php if ($facebook) : ?>
                                    <a href="<?php echo esc_url($facebook); ?>" class="bg-primary rounded-full p-2 text-white hover:bg-opacity-90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                        </svg>
                                    </a>
                                    <?php endif; ?>
                                    
                                    <?php if ($email) : ?>
                                    <a href="mailto:<?php echo esc_attr($email); ?>" class="bg-black rounded-full p-2 text-white hover:bg-opacity-90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                    </a>
                                    <?php endif; ?>
                                    
                                    <?php if ($phone) : ?>
                                    <a href="tel:<?php echo esc_attr($phone); ?>" class="bg-green-500 rounded-full p-2 text-white hover:bg-opacity-90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div class="mt-8">
                    <?php the_posts_pagination(); ?>
                </div>
            <?php else : ?>
                <p class="text-center"><?php echo esc_html__('No teachers found.', 'hapresteam'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php
get_footer();
