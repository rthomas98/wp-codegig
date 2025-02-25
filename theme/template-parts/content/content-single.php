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
        <div class="container mx-auto">
            <div class="rb-12 mb-12 flex flex-col items-start justify-start md:mb-18 lg:mb-20">
                <a class="focus-visible:ring-border-primary inline-flex items-center justify-center whitespace-nowrap ring-offset-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border-0 text-text-primary gap-2 p-0 mb-8 md:mb-10 lg:mb-12"
                   href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">
                    <i data-lucide="chevron-left"></i>
                    View All
                </a>
                <div class="rb-4 mb-4 flex w-full items-center justify-start">
                    <?php
                    $categories = get_the_category();
                    if ($categories) :
                        $category = $categories[0]; // Get the first category
                    ?>
                        <p class="mr-4 bg-background-secondary px-2 py-1 text-sm font-semibold">
                            <?php echo esc_html($category->name); ?>
                        </p>
                    <?php endif; ?>
                    <p class="inline text-sm font-semibold">
                        <?php 
                        $content = get_post_field('post_content', get_the_ID());
                        $word_count = str_word_count(strip_tags($content));
                        $reading_time = ceil($word_count / 200); // Assuming 200 words per minute reading speed
                        echo esc_html($reading_time); ?> min read
                    </p>
                </div>
                <h1 class="text-4xl font-bold md:text-6xl lg:text-7xl">
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="mx-auto mb-8 w-full overflow-hidden md:mb-12 lg:mb-8">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="max-w-3xl mx-auto">
                        <?php the_post_thumbnail('full', array('class' => 'aspect-[5/2] size-full object-cover')); ?>
                    </div>
                <?php else : ?>
                    <div class="max-w-3xl mx-auto">
                        <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"
                             class="aspect-[5/2] size-full object-cover"
                             alt="<?php echo esc_attr(get_the_title()); ?>" />
                    </div>
                <?php endif; ?>
            </div>
            <div class="flex w-full flex-col items-start justify-between md:flex-row">
                <div class="rb-4 mb-4 flex items-center sm:mb-8 md:mb-0">
                    <div class="mr-8 md:mr-10 lg:mr-12">
                        <p class="mb-2">Author:</p>
                        <p class="font-medium"><?php the_author(); ?></p>
                    </div>
                    <div class="mr-8 md:mr-10 lg:mr-12">
                        <p class="mb-2">Date:</p>
                        <p class="font-medium"><?php echo get_the_date('j F Y'); ?></p>
                    </div>
                </div>
                <div class="grid grid-flow-col grid-cols-[max-content] items-start gap-2">
                    <?php
                    $permalink = urlencode(get_permalink());
                    $title = urlencode(get_the_title());
                    ?>
                    <a href="#" onclick="navigator.clipboard.writeText('<?php echo esc_url(get_permalink()); ?>'); return false;" 
                       class="rounded-[1.25rem] bg-background-secondary p-1" title="Copy link">
                        <i data-lucide="link" class="size-6"></i>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $permalink; ?>" 
                       target="_blank" rel="noopener noreferrer"
                       class="rounded-[1.25rem] bg-background-secondary p-1" title="Share on LinkedIn">
                        <i data-lucide="linkedin" class="size-6"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo $permalink; ?>&text=<?php echo $title; ?>" 
                       target="_blank" rel="noopener noreferrer"
                       class="rounded-[1.25rem] bg-background-secondary p-1" title="Share on Twitter">
                        <i data-lucide="twitter" class="size-6"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>" 
                       target="_blank" rel="noopener noreferrer"
                       class="rounded-[1.25rem] bg-background-secondary p-1" title="Share on Facebook">
                        <i data-lucide="facebook" class="size-6"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-[1fr_0.5fr] lg:gap-x-20">
                <div class="prose mb-12 md:prose-md lg:prose-lg md:mb-20">
                    <?php the_content(); ?>
                </div>
                <div class="relative">
                    <div class="border border-border-primary p-8 lg:sticky lg:top-20">
                        <h6 class="mb-3 text-md font-bold leading-[1.4] md:mb-4 md:text-xl">
                            Subscribe to newsletter
                        </h6>
                        <p class="mb-3 md:mb-4">Subscribe to receive the latest blog posts to your inbox every week.</p>
                        <?php 
                        // Check if Fluent Forms is active and the form exists
                        if (function_exists('fluentform') && get_field('newsletter_form_id', 'option')) {
                            $form_id = get_field('newsletter_form_id', 'option');
                            echo do_shortcode('[fluentform id="' . $form_id . '"]');
                        } else {
                            // Fallback form if Fluent Forms is not active
                        ?>
                            <form class="mb-4 flex flex-col gap-3 sm:gap-4" method="post">
                                <div>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email" 
                                        placeholder="Enter your email" 
                                        class="flex h-10 w-full rounded-md border border-border-primary bg-background-primary px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                        required
                                    />
                                </div>
                                <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-[#590EB7] px-6 py-3 text-base font-medium text-white hover:bg-[#590EB7]/90">
                                    Subscribe
                                </button>
                            </form>
                        <?php } ?>
                        <p class="text-xs">
                            By subscribing you agree to with our 
                            <a href="<?php echo esc_url(get_privacy_policy_url()); ?>" class="underline">Privacy Policy</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    // Get current post categories
    $categories = get_the_category();
    if ($categories) {
        $category_ids = array();
        foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
        }
        
        // Query related posts from the same categories
        $related_args = array(
            'category__in' => $category_ids,
            'post__not_in' => array(get_the_ID()), // Exclude current post
            'posts_per_page' => 3, // Show 3 related posts
            'orderby' => 'date',
            'order' => 'DESC'
        );
        
        $related_query = new WP_Query($related_args);
        
        if ($related_query->have_posts()) :
    ?>
    <section id="related-posts" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container mx-auto">
            <div class="mb-12 md:mb-18 lg:mb-20">
                <div class="mx-auto w-full max-w-lg text-center">
                    <p class="mb-3 font-semibold md:mb-4">Related Articles</p>
                    <h2 class="rb-5 mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                        Explore Our Latest Insights
                    </h2>
                    <p class="md:text-md">
                        Stay updated with our expert-driven blog posts.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-8 gap-y-12 md:grid-cols-2 md:gap-y-16 lg:grid-cols-3">
                <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                <div class="border border-border-primary">
                    <a href="<?php the_permalink(); ?>" class="w-full max-w-full">
                        <div class="w-full overflow-hidden">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large', array('class' => 'aspect-[3/2] size-full object-cover')); ?>
                            <?php else : ?>
                                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"
                                     alt="<?php echo esc_attr(get_the_title()); ?>"
                                     class="aspect-[3/2] size-full object-cover" />
                            <?php endif; ?>
                        </div>
                    </a>
                    <div class="px-5 py-6 md:p-6">
                        <?php
                        $post_categories = get_the_category();
                        if ($post_categories) :
                            $category = $post_categories[0]; // Get the first category
                        ?>
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="mb-2 flex text-sm font-semibold">
                            <?php echo esc_html($category->name); ?>
                        </a>
                        <?php endif; ?>
                        <a href="<?php the_permalink(); ?>" class="mb-2 block max-w-full">
                            <h5 class="text-xl font-bold md:text-2xl">
                                <?php the_title(); ?>
                            </h5>
                        </a>
                        <p>
                            <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                        </p>
                        <div class="mt-6 flex items-center">
                            <div class="mr-4 shrink-0">
                                <?php echo get_avatar(get_the_author_meta('ID'), 48, '', '', array('class' => 'size-12 min-h-12 min-w-12 rounded-full object-cover')); ?>
                            </div>
                            <div>
                                <h6 class="text-sm font-semibold"><?php the_author(); ?></h6>
                                <div class="flex items-center">
                                    <p class="text-sm"><?php echo get_the_date('j M Y'); ?></p>
                                    <span class="mx-2">•</span>
                                    <p class="text-sm">
                                        <?php 
                                        $content = get_post_field('post_content', get_the_ID());
                                        $word_count = str_word_count(strip_tags($content));
                                        $reading_time = ceil($word_count / 200); // Assuming 200 words per minute reading speed
                                        echo esc_html($reading_time); ?> min read
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="flex items-center justify-center">
                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                   class="inline-flex items-center justify-center rounded-lg border border-[#590EB7] px-6 py-3 text-base font-medium text-[#590EB7] hover:bg-[#590EB7]/10 mt-10 md:mt-14 lg:mt-16">
                    View all
                </a>
            </div>
        </div>
    </section>
    <?php
        endif;
        wp_reset_postdata();
    }
    ?>
</article>
