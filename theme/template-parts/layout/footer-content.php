<?php
/**
 * Template part for displaying the footer content
 */
?>

<footer id="colophon" class="site-footer bg-[#590EB7]">
    <div class="container px-[5%] py-12 md:py-18 lg:py-20">
        <div class="grid grid-cols-1 items-start gap-x-[8vw] gap-y-12 pb-12 md:gap-y-16 md:pb-18 lg:grid-cols-[1fr_0.5fr] lg:gap-y-4 lg:pb-20">
            <div class="grid grid-cols-1 items-start gap-x-8 gap-y-10 sm:grid-cols-3 sm:gap-x-6 sm:gap-y-12 md:gap-x-8 lg:grid-cols-4">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="sm:col-start-1 sm:col-end-4 sm:row-start-1 sm:row-end-2 lg:col-start-auto lg:col-end-auto lg:row-start-auto lg:row-end-auto">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/codegig-logo-yellow.svg'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="custom-logo">
                </a>

                <div class="flex flex-col items-start justify-start">
                    <h4 class="mb-3 font-semibold text-white text-lg md:mb-4"><?php echo esc_html(get_field('quick_links_title', 'option')); ?></h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-1',
                        'menu_class' => 'space-y-2',
                        'container' => false,
                        'fallback_cb' => false,
                        'link_before' => '<span class="text-white hover:text-yellow transition-all duration-300 ease-in-out transform hover:translate-x-2 inline-block py-1">',
                        'link_after' => '</span>'
                    ));
                    ?>
                </div>

                <div class="flex flex-col items-start justify-start">
                    <h4 class="mb-3 font-semibold text-white text-lg md:mb-4"><?php echo esc_html(get_field('resources_title', 'option')); ?></h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-2',
                        'menu_class' => 'space-y-2',
                        'container' => false,
                        'fallback_cb' => false,
                        'link_before' => '<span class="text-white hover:text-yellow transition-all duration-300 ease-in-out transform hover:translate-x-2 inline-block py-1">',
                        'link_after' => '</span>'
                    ));
                    ?>
                </div>

                <div class="flex flex-col items-start justify-start">
                    <h4 class="mb-3 font-semibold text-white text-lg md:mb-4"><?php echo esc_html(get_field('social_title', 'option')); ?></h4>
                    <?php if (have_rows('social_links', 'option')) : ?>
                        <ul class="space-y-2">
                            <?php while (have_rows('social_links', 'option')) : the_row(); 
                                $link = get_sub_field('link');
                                if ($link) : ?>
                                <li>
                                    <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>" class="text-white hover:text-yellow transition-all duration-300 ease-in-out transform hover:translate-x-2 inline-block py-1">
                                        <?php echo esc_html($link['title']); ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="flex flex-col">
                <h4 class="mb-3 font-semibold text-white text-lg md:mb-4"><?php echo esc_html(get_field('newsletter_title', 'option')); ?></h4>
                <p class="mb-3 text-sm text-white md:mb-4"><?php echo esc_html(get_field('newsletter_description', 'option')); ?></p>
                <div class="w-full max-w-md">
                    <?php echo do_shortcode('[fluentform id="' . get_field('newsletter_form_id', 'option') . '"]'); ?>
                    <p class="text-xs text-white/80"><?php echo esc_html(get_field('newsletter_disclaimer', 'option')); ?></p>
                </div>
            </div>
        </div>

        <div class="h-px w-full bg-white/20"></div>

        <div class="flex flex-col-reverse items-start pb-4 pt-6 text-sm md:justify-start md:pb-0 md:pt-8 lg:flex-row lg:items-center lg:justify-between">
            <div class="flex flex-col-reverse items-start md:flex-row md:gap-6 lg:items-center">
                <div class="grid grid-flow-row grid-cols-[max-content] justify-center gap-y-4 md:grid-flow-col md:justify-center md:gap-x-6 md:gap-y-0 lg:text-left">
                    <p class="mt-8 text-white/80 md:mt-0">
                        &copy; <?php echo date('Y'); ?> CodeGig. All rights reserved.
                    </p>
                </div>
            </div>

            <?php if (have_rows('social_icons', 'option')) : ?>
                <div class="mb-8 flex items-center justify-center gap-3 lg:mb-0">
                    <?php while (have_rows('social_icons', 'option')) : the_row(); 
                        $link = get_sub_field('link');
                        if ($link) : ?>
                        <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>" class="text-white hover:text-yellow transition-colors duration-300" aria-label="<?php echo esc_attr($link['title']); ?>">
                            <i class="lucide <?php echo esc_attr(get_sub_field('icon')); ?> size-6"></i>
                        </a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
    // Home page animations
    document.addEventListener('DOMContentLoaded', function() {
        const hero = document.getElementById('hero');
        if (hero) {
            const imageGrid = hero.querySelector('.grid');
            const overlay = hero.querySelector('.bg-black\\/50');

            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const rate = scrolled * 0.5;
                
                if (imageGrid) {
                    imageGrid.style.transform = `scale(${3.2 + rate * 0.001})`;
                }

                if (overlay) {
                    const opacity = Math.min(0.5 + rate * 0.001, 0.8);
                    overlay.style.opacity = opacity;
                }
            });
        }

        // Initialize AOS if available
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100
            });
        }
    });
</script>
