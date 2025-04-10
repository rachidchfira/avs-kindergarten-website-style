<?php
/**
 * Template part for displaying the features section
 */
?>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="section-title"><?php echo esc_html__('EDUCATION QUALITY', 'hapresteam'); ?></h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="feature-card border-secondary">
                <div class="bg-secondary-light p-3 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary mb-2"><?php echo esc_html__('TEACHER QUALITY', 'hapresteam'); ?></h3>
                <p class="text-gray-600"><?php echo esc_html__('Our center has a team of quality teachers with diverse experience and professional qualifications. Teachers are regularly trained in modern teaching methods.', 'hapresteam'); ?></p>
            </div>

            <div class="feature-card border-accent-blue">
                <div class="bg-accent-blue bg-opacity-20 p-3 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-accent-blue" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary mb-2"><?php echo esc_html__('DIVERSE LEARNING PROGRAMS', 'hapresteam'); ?></h3>
                <p class="text-gray-600"><?php echo esc_html__('The center offers a variety of courses, from basic courses for beginners to advanced courses. In addition, there are specialized courses on skills development.', 'hapresteam'); ?></p>
            </div>

            <div class="feature-card border-accent-green">
                <div class="bg-accent-green bg-opacity-20 p-3 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-accent-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary mb-2"><?php echo esc_html__('ADVANCED TEACHING METHODS', 'hapresteam'); ?></h3>
                <p class="text-gray-600"><?php echo esc_html__('The center uses modern teaching methods, focusing on developing practical communication skills, encouraging students to participate in practical activities.', 'hapresteam'); ?></p>
            </div>
        </div>
    </div>
</section>
