<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _cg
 */

get_header();

// Get current category if any
$current_cat = get_query_var('cat');
$categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC'
));
?>

    <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container mx-auto">
            <div class="flex flex-col">
                <div class="rb-12 mb-12 md:mb-18 lg:mb-20">
                    <div class="w-full max-w-3xl mx-auto text-center">
                        <h1 class="mb-5 text-5xl font-bold md:mb-6 md:text-6xl lg:text-7xl">
                            Unlock the Future: Insights on AI, ML, and Software Development
                        </h1>
                        <p class="md:text-md">
                            Your essential guide to navigating the digital landscape with expert insights and innovative solutions.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/rob_thomas23_News_reported_at_a_desk_reporting_watercolor_illus_6b1c91d9-5116-4b24-ad9a-7682190c099e (1).png" 
                         class="size-full max-w-3xl w-full object-cover mx-auto" 
                         alt="News reporter at desk watercolor illustration" />
                </div>
            </div>
        </div>
    </section>

    <section id="blog-posts" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container mx-auto">

            <div class="flex flex-col justify-start">
                <div class="no-scrollbar mb-12 ml-[-5vw] flex w-screen items-center justify-start overflow-scroll pl-[5vw] md:mb-16 md:ml-0 md:w-full md:justify-center md:overflow-hidden md:pl-0">
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                       class="<?php echo empty($current_cat) ? 'bg-background-primary border-border-primary' : 'border-transparent'; ?> focus-visible:ring-border-primary inline-flex gap-3 items-center justify-center whitespace-nowrap ring-offset-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-text-primary border px-4 py-2">
                        View all
                    </a>
                    <?php foreach ($categories as $category) : ?>
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                           class="<?php echo $current_cat == $category->term_id ? 'bg-background-primary border-border-primary' : 'border-transparent'; ?> focus-visible:ring-border-primary inline-flex items-center justify-center whitespace-nowrap ring-offset-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-text-primary gap-2 border px-4 py-2">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <?php if (have_posts()) : ?>
                    <div class="grid grid-cols-1 gap-x-8 gap-y-12 md:grid-cols-2 md:gap-y-16 lg:grid-cols-3">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="flex size-full flex-col items-center justify-start border border-border-primary">
                                <a href="<?php the_permalink(); ?>" class="w-full">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', array('class' => 'aspect-[3/2] size-full object-cover')); ?>
                                    <?php else : ?>
                                        <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"
                                             alt="<?php echo esc_attr(get_the_title()); ?>"
                                             class="aspect-[3/2] size-full object-cover" />
                                    <?php endif; ?>
                                </a>
                                <div class="px-5 py-6 md:p-6">
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
                                            <?php echo esc_html(get_reading_time()); ?> min read
                                        </p>
                                    </div>
                                    <a class="mb-2" href="<?php the_permalink(); ?>">
                                        <h2 class="text-xl font-bold md:text-2xl">
                                            <?php the_title(); ?>
                                        </h2>
                                    </a>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" 
                                       class="mt-6 inline-flex items-center justify-center gap-x-2 text-[#590EB7] hover:text-[#590EB7]/90">
                                        Read more
                                        <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <?php _cg_the_posts_navigation(); ?>

                <?php else : ?>
                    <?php get_template_part('template-parts/content/content', 'none'); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php
get_footer();

// Helper function to calculate reading time
function get_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // Assuming 200 words per minute reading speed
    return $reading_time;
}
