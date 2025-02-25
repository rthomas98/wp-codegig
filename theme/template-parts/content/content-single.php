<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _cg
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container">
            <div class="flex flex-col">
                <div class="rb-12 mb-12 md:mb-18 lg:mb-20">
                    <div class="w-full max-w-lg">
                        <h1 class="mb-5 text-6xl font-bold md:mb-6 md:text-9xl lg:text-10xl">
                            <?php the_title(); ?>
                        </h1>
                        <div class="md:text-md">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                            <a href="#content" class="inline-flex items-center justify-center rounded-lg bg-[#590EB7] px-6 py-3 text-base font-medium text-white hover:bg-[#590EB7]/90">
                                Read More
                            </a>
                            <?php if (get_field('newsletter_signup_link', 'option')) : ?>
                                <a href="<?php echo esc_url(get_field('newsletter_signup_link', 'option')); ?>" 
                                   class="inline-flex items-center justify-center rounded-lg border border-[#590EB7] px-6 py-3 text-base font-medium text-[#590EB7] hover:bg-[#590EB7]/10">
                                    Subscribe
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div>
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', array('class' => 'size-full object-cover')); ?>
                    <?php else : ?>
                        <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg" 
                             class="size-full object-cover" 
                             alt="<?php echo esc_attr(get_the_title()); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <div id="content" <?php _cg_content_class('entry-content'); ?>>
        <?php
        the_content();

        wp_link_pages(
            array(
                'before' => '<div>' . __('Pages:', '_cg'),
                'after'  => '</div>',
            )
        );
        ?>
    </div>
</article>
