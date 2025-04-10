<?php
/**
 * Template part for displaying the contact section
 */
?>

<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-6"><?php echo esc_html__('H&A PRE STEAM KINDERGARTEN SYSTEM', 'hapresteam'); ?></h2>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-4 flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <div>
                            <h3 class="font-bold mb-2"><?php echo esc_html__('Headquarters', 'hapresteam'); ?></h3>
                            <p><?php echo esc_html(hapresteam_get_contact_info('address')); ?></p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-4 flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <div>
                            <h3 class="font-bold mb-2"><?php echo esc_html__('Hotline', 'hapresteam'); ?></h3>
                            <p><?php echo esc_html(hapresteam_get_contact_info('phone')); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-3xl font-bold mb-6"><?php echo esc_html__('REGISTER FOR INFORMATION', 'hapresteam'); ?></h2>
                <p class="mb-6"><?php echo esc_html__('To receive information about special events and free materials. Please leave us your contact information.', 'hapresteam'); ?></p>

                <form class="space-y-4" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="hapresteam_contact_form">
                    <?php wp_nonce_field('hapresteam_contact_form_nonce', 'hapresteam_contact_form_nonce'); ?>
                    
                    <div>
                        <input type="text" name="name" placeholder="<?php echo esc_attr__('Your name...', 'hapresteam'); ?>" required class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary text-gray-800">
                    </div>

                    <div>
                        <input type="tel" name="phone" placeholder="<?php echo esc_attr__('Phone number', 'hapresteam'); ?>" required class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary text-gray-800">
                    </div>

                    <div>
                        <input type="email" name="email" placeholder="<?php echo esc_attr__('Your email', 'hapresteam'); ?>" required class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary text-gray-800">
                    </div>

                    <button type="submit" class="w-full bg-secondary text-primary font-bold py-3 px-4 rounded-md hover:bg-opacity-90 transition-colors">
                        <?php echo esc_html__('REGISTER FOR TRIAL CLASS', 'hapresteam'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
