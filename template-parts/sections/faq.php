<?php
/**
 * Template part for displaying the FAQ section
 */
?>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="section-title"><?php echo esc_html__('FREQUENTLY ASKED QUESTIONS', 'hapresteam'); ?></h2>

        <div class="max-w-3xl mx-auto">
            <div class="space-y-4 faq-accordion">
                <div class="bg-white rounded-lg shadow-sm">
                    <button class="px-6 py-4 text-primary font-medium text-left w-full flex justify-between items-center">
                        <span><?php echo esc_html__('What courses does the center offer?', 'hapresteam'); ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 text-gray-600 hidden">
                        <?php echo esc_html__('The center offers many courses including basic kindergarten programs, STEAM programs, and English courses with native teachers for children aged 2-6 years.', 'hapresteam'); ?>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm">
                    <button class="px-6 py-4 text-primary font-medium text-left w-full flex justify-between items-center">
                        <span><?php echo esc_html__('How to register for a course?', 'hapresteam'); ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 text-gray-600 hidden">
                        <?php echo esc_html__('Parents can register directly at the school, by phone or fill out the online registration form on the website. After registration, a consultant will contact you to guide the next steps.', 'hapresteam'); ?>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm">
                    <button class="px-6 py-4 text-primary font-medium text-left w-full flex justify-between items-center">
                        <span><?php echo esc_html__('How flexible is the schedule?', 'hapresteam'); ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 text-gray-600 hidden">
                        <?php echo esc_html__('The school has many different class sessions from Monday to Friday, from 7:30 to 17:30. Parents can choose morning, afternoon or all-day classes according to their needs.', 'hapresteam'); ?>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm">
                    <button class="px-6 py-4 text-primary font-medium text-left w-full flex justify-between items-center">
                        <span><?php echo esc_html__('How much is the tuition fee for each course?', 'hapresteam'); ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 text-gray-600 hidden">
                        <?php echo esc_html__('Tuition will depend on the program and duration. Please contact the center directly for detailed advice on tuition fees and current promotions.', 'hapresteam'); ?>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm">
                    <button class="px-6 py-4 text-primary font-medium text-left w-full flex justify-between items-center">
                        <span><?php echo esc_html__('What qualifications and experience do teachers at the center have?', 'hapresteam'); ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 text-gray-600 hidden">
                        <?php echo esc_html__('All teachers at the center have professional qualifications in early childhood education and have at least 3-5 years of teaching experience. English teachers are native speakers with international English teaching certificates.', 'hapresteam'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const accordionButtons = document.querySelectorAll('.faq-accordion button');
        
        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('svg');
                
                // Toggle content visibility
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                } else {
                    content.classList.add('hidden');
                    icon.classList.remove('rotate-180');
                }
            });
        });
    });
</script>
