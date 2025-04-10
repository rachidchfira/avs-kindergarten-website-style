<?php
/**
 * Template Name: Contact Page
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="bg-primary text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4"><?php echo esc_html__('CONTACT US', 'hapresteam'); ?></h1>
            <p class="text-xl"><?php echo esc_html__('Get in touch with H&A PRE STEAM', 'hapresteam'); ?></p>
        </div>
    </div>

    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-2xl font-bold text-primary mb-6"><?php echo esc_html__('Send Us a Message', 'hapresteam'); ?></h2>
                    <form class="space-y-4" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                        <input type="hidden" name="action" value="hapresteam_contact_form">
                        <?php wp_nonce_field('hapresteam_contact_form_nonce', 'hapresteam_contact_form_nonce'); ?>
                        
                        <div>
                            <input type="text" name="name" placeholder="<?php echo esc_attr__('Your name...', 'hapresteam'); ?>" required class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        <div>
                            <input type="tel" name="phone" placeholder="<?php echo esc_attr__('Phone number', 'hapresteam'); ?>" required class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        <div>
                            <input type="email" name="email" placeholder="<?php echo esc_attr__('Your email', 'hapresteam'); ?>" required class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        <div>
                            <textarea name="message" placeholder="<?php echo esc_attr__('Your message', 'hapresteam'); ?>" rows="5" required class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                        </div>

                        <button type="submit" class="bg-primary text-white px-6 py-3 rounded-md font-medium hover:bg-opacity-90 transition-colors">
                            <?php echo esc_html__('Send Message', 'hapresteam'); ?>
                        </button>
                    </form>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-primary mb-6"><?php echo esc_html__('Contact Information', 'hapresteam'); ?></h2>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-4 flex-shrink-0 mt-1 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <div>
                                <h3 class="font-bold mb-2"><?php echo esc_html__('Headquarters', 'hapresteam'); ?></h3>
                                <p class="text-gray-600"><?php echo esc_html(hapresteam_get_contact_info('address')); ?></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-4 flex-shrink-0 mt-1 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <div>
                                <h3 class="font-bold mb-2"><?php echo esc_html__('Hotline', 'hapresteam'); ?></h3>
                                <p class="text-gray-600"><?php echo esc_html(hapresteam_get_contact_info('phone')); ?></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-4 flex-shrink-0 mt-1 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <div>
                                <h3 class="font-bold mb-2">Email</h3>
                                <p class="text-gray-600"><?php echo esc_html(hapresteam_get_contact_info('email')); ?></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-4 flex-shrink-0 mt-1 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                            <div>
                                <h3 class="font-bold mb-2">Social</h3>
                                <p class="text-gray-600">@ha.kindergarten</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="font-bold text-xl mb-4"><?php echo esc_html__('Map', 'hapresteam'); ?></h3>
                        <div class="bg-gray-200 h-64 rounded-lg">
                            <?php
                            // Add Google Maps embed code here
                            echo '<div class="h-full w-full">';
                            echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9551043677897!2d106.67743661480064!3d10.737997992347592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f6c6b5b5eb3%3A0x7f6b0ec0c0e0a00c!2zNjAgTmd1eeG7hW4gVsSDbiBD4bunYSwgUGjGsOG7nW5nIDEzLCBRdeG6rW4gOCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1651234567890!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
                            echo '</div>';  referrerpolicy="no-referrer-when-downgrade"></iframe>';
                            echo '</div>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
