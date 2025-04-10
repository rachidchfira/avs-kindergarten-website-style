<?php
/**
 * Template part for displaying the hero section
 */
?>

<section class="bg-primary relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/pattern-bg.png')] opacity-10"></div>
    <div class="container mx-auto px-4 py-16 md:py-24 flex flex-col md:flex-row items-center relative z-10">
        <div class="md:w-1/2 text-white mb-10 md:mb-0">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <?php echo esc_html__('H&A PRE STEAM KINDERGARTEN SYSTEM', 'hapresteam'); ?>
            </h1>
            <p class="text-xl mb-8">
                <?php echo esc_html__('STEAM-oriented Kindergarten System - Strengths in Pre-Elementary and Early Education', 'hapresteam'); ?>
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="<?php echo esc_url(home_url('/programs')); ?>" class="btn-secondary">
                    <?php echo esc_html__('Explore Programs', 'hapresteam'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="bg-white text-primary px-6 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors">
                    <?php echo esc_html__('Contact Us', 'hapresteam'); ?>
                </a>
            </div>
        </div>
        <div class="md:w-1/2 flex justify-center">
            <div class="relative w-full h-[400px] md:h-[450px]">
                <?php
                $hero_image = get_theme_mod('hapresteam_hero_image', get_template_directory_uri() . '/assets/images/mickey-classroom.jpeg');
                ?>
                <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr__('Mickey Mouse themed kindergarten classroom', 'hapresteam'); ?>" class="rounded-lg shadow-lg object-contain w-full h-full">
            </div>
        </div>
    </div>
</section>
