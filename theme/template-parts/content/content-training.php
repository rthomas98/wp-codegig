<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _cg
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_9')) : ?>
        <?php while (have_rows('header_9')) : the_row(); ?>
            <section id="relume" class="flex h-svh min-h-svh flex-col">
                <div class="relative flex-1">
                    <div class="absolute inset-0 z-0">
                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>" 
                                 class="absolute inset-0 size-full object-cover object-center" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="px-[5%]">
                    <div class="container relative z-10 mx-auto">
                        <div class="grid grid-rows-1 items-start gap-y-5 py-12 md:grid-cols-2 md:gap-x-12 md:gap-y-8 md:py-18 lg:gap-x-20 lg:gap-y-16 lg:py-20">
                            <div>
                                <h1 class="text-5xl font-bold text-text-primary md:text-6xl lg:text-7xl">
                                    <?php the_sub_field('header'); ?>
                                </h1>
                            </div>
                            <div>
                                <p class="text-base text-text-primary md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                                <?php if (have_rows('buttons')) : ?>
                                    <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                                        <?php while (have_rows('buttons')) : the_row(); 
                                            $button_one_link = get_sub_field('button_one_link');
                                            $button_two_link = get_sub_field('button_two_link');
                                        ?>
                                            <?php if ($button_one_link) : ?>
                                                <a href="<?php echo esc_url($button_one_link); ?>" 
                                                   class="inline-flex items-center justify-center rounded-lg bg-[#590EB7] px-6 py-3 text-base font-medium text-white hover:bg-[#590EB7]/90">
                                                    <?php the_sub_field('button_one_label'); ?>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($button_two_link) : ?>
                                                <a href="<?php echo esc_url($button_two_link); ?>" 
                                                   class="inline-flex items-center justify-center rounded-lg border border-[#590EB7] px-6 py-3 text-base font-medium text-[#590EB7] hover:bg-[#590EB7]/10">
                                                    <?php the_sub_field('button_two_label'); ?>
                                                </a>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_458')) : ?>
        <?php while (have_rows('layout_458')) : the_row(); ?>
            <section id="relume" class="overflow-hidden px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="rb-12 mb-12 grid auto-cols-fr grid-cols-1 items-start gap-x-5 gap-y-5 md:mb-18 md:grid-cols-2 md:gap-x-12 lg:mb-20 lg:gap-x-20 lg:gap-y-20">
                        <div class="flex h-full flex-col">
                            <p class="mb-3 font-semibold md:mb-4">
                                <?php the_sub_field('sub_header'); ?>
                            </p>
                            <h2 class="text-4xl font-bold md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                        </div>
                        <div class="mx-[7.5%] flex flex-col justify-end md:mt-40">
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                            <?php if (have_rows('buttons')) : ?>
                                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                                    <?php while (have_rows('buttons')) : the_row(); 
                                        $button_one_link = get_sub_field('button_one_link');
                                        $button_two_link = get_sub_field('button_two_link');
                                    ?>
                                        <?php if ($button_one_link) : ?>
                                            <a href="<?php echo esc_url($button_one_link); ?>" 
                                               class="inline-flex items-center justify-center rounded-lg border border-[#590EB7] px-6 py-3 text-base font-medium text-[#590EB7] hover:bg-[#590EB7]/10">
                                                <?php the_sub_field('button_one_label'); ?>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($button_two_link) : ?>
                                            <a href="<?php echo esc_url($button_two_link); ?>" 
                                               class="inline-flex items-center gap-2 text-[#590EB7] hover:text-[#590EB7]/80">
                                                <?php the_sub_field('button_two_label'); ?>
                                                <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="grid auto-cols-fr grid-cols-1 items-start gap-12 md:grid-cols-3 md:gap-8 lg:gap-12">
                        <?php if (have_rows('cards')) : ?>
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <div class="w-full <?php echo get_row_index() == 2 ? 'md:mt-[25%]' : (get_row_index() == 3 ? 'md:mt-[50%]' : ''); ?>">
                                    <div class="rb-6 mb-6 w-full md:mb-8">
                                        <?php 
                                        $image = get_sub_field('image');
                                        if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>" 
                                                 class="aspect-[3/2] w-full object-cover" />
                                        <?php endif; ?>
                                    </div>
                                    <h2 class="mb-3 text-2xl font-bold md:mb-4 md:text-3xl md:leading-[1.3] lg:text-4xl">
                                        <?php the_sub_field('title'); ?>
                                    </h2>
                                    <p>
                                        <?php the_sub_field('content'); ?>
                                    </p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_504')) : ?>
        <?php while (have_rows('layout_504')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mb-12 md:mb-18 lg:mb-20">
                        <div class="mx-auto max-w-3xl text-center">
                            <p class="mb-3 font-semibold md:mb-4">
                                <?php the_sub_field('sub_header'); ?>
                            </p>
                            <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center js-tabs">
                        <div class="no-scrollbar relative mb-12 flex w-screen flex-nowrap items-center gap-x-6 overflow-auto px-[5vw] md:mb-16 md:w-auto md:max-w-full md:px-0">
                            <button data-tab="tab-1" 
                                    class="tab-trigger border-0 border-b-[1.5px] border-transparent px-0 py-2 font-medium transition-colors active">
                                Getting Started
                            </button>
                            <button data-tab="tab-2" 
                                    class="tab-trigger border-0 border-b-[1.5px] border-transparent px-0 py-2 font-medium transition-colors">
                                Advanced Techniques
                            </button>
                            <button data-tab="tab-3" 
                                    class="tab-trigger border-0 border-b-[1.5px] border-transparent px-0 py-2 font-medium transition-colors">
                                FAQs
                            </button>
                        </div>

                        <?php if (have_rows('cards')) : $tab_index = 1; ?>
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <div data-tab-content="tab-<?php echo $tab_index; ?>" 
                                     class="tab-content w-full <?php echo $tab_index === 1 ? 'active' : ''; ?>">
                                    <div class="grid grid-cols-1 border border-border-primary md:grid-cols-2 md:items-center bg-white">
                                        <div class="aspect-square">
                                            <?php 
                                            $image = get_sub_field('image');
                                            if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>" 
                                                     class="w-full object-cover" />
                                            <?php else: ?>
                                                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" 
                                                     alt="Placeholder image" 
                                                     class="w-full object-cover" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="p-6 md:p-8 lg:p-12">
                                            <p class="mb-3 font-semibold md:mb-4">
                                                <?php the_sub_field('sub_title'); ?>
                                            </p>
                                            <h2 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">
                                                <?php the_sub_field('title'); ?>
                                            </h2>
                                            <p>
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                            <?php if (have_rows('buttons')) : ?>
                                                <div class="mt-6 flex items-center gap-x-4 md:mt-8">
                                                    <?php while (have_rows('buttons')) : the_row(); 
                                                        $button_one_link = get_sub_field('button_one_link');
                                                        $button_two_link = get_sub_field('button_two_link');
                                                    ?>
                                                        <?php if ($button_one_link) : ?>
                                                            <a href="<?php echo esc_url($button_one_link); ?>" 
                                                               class="inline-flex items-center justify-center rounded-lg border border-[#590EB7] px-6 py-3 text-base font-medium text-[#590EB7] hover:bg-[#590EB7]/10">
                                                                <?php the_sub_field('button_one_label'); ?>
                                                            </a>
                                                        <?php endif; ?>
                                                        <?php if ($button_two_link) : ?>
                                                            <a href="<?php echo esc_url($button_two_link); ?>" 
                                                               class="inline-flex items-center gap-2 text-[#590EB7] hover:text-[#590EB7]/80">
                                                                <?php the_sub_field('button_two_label'); ?>
                                                                <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                            </a>
                                                        <?php endif; ?>
                                                    <?php endwhile; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php $tab_index++; endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const tabsContainer = document.querySelector('.js-tabs');
                            if (!tabsContainer) return;

                            const triggers = tabsContainer.querySelectorAll('.tab-trigger');
                            const contents = tabsContainer.querySelectorAll('.tab-content');

                            triggers.forEach(trigger => {
                                trigger.addEventListener('click', () => {
                                    // Remove active class from all triggers and contents
                                    triggers.forEach(t => {
                                        t.classList.remove('active');
                                        t.classList.remove('border-[#590EB7]');
                                        t.classList.remove('text-[#590EB7]');
                                    });
                                    contents.forEach(c => c.classList.remove('active'));

                                    // Add active class to clicked trigger and corresponding content
                                    trigger.classList.add('active');
                                    trigger.classList.add('border-[#590EB7]');
                                    trigger.classList.add('text-[#590EB7]');
                                    const tabId = trigger.getAttribute('data-tab');
                                    const content = tabsContainer.querySelector(`[data-tab-content="${tabId}"]`);
                                    if (content) {
                                        content.classList.add('active');
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_4')) : ?>
        <?php while (have_rows('layout_4')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#3B93DE]">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
                        <div>
                            <p class="mb-3 font-semibold md:mb-4 text-white">
                                <?php the_sub_field('sub_header'); ?>
                            </p>
                            <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl text-white">
                                <?php the_sub_field('header'); ?>
                            </h2>
                            <p class="mb-6 md:mb-8 md:text-md text-white">
                                <?php the_sub_field('content'); ?>
                            </p>

                            <?php if (have_rows('cards')) : ?>
                                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                    <?php while (have_rows('cards')) : the_row(); ?>
                                        <div>
                                            <h6 class="mb-3 text-md font-bold leading-[1.4] md:mb-4 md:text-xl text-white">
                                                <?php the_sub_field('title'); ?>
                                            </h6>
                                            <p class="text-white">
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (have_rows('buttons')) : ?>
                                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                                    <?php while (have_rows('buttons')) : the_row(); 
                                        $button_one_link = get_sub_field('button_one_link');
                                        $button_two_link = get_sub_field('button_two_link');
                                    ?>
                                        <?php if ($button_one_link) : ?>
                                            <a href="<?php echo esc_url($button_one_link); ?>" 
                                               class="inline-flex items-center justify-center rounded-lg border border-[#590EB7] px-6 py-3 text-base font-medium text-[#590EB7] hover:bg-[#590EB7]/10">
                                                <?php the_sub_field('button_one_label'); ?>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($button_two_link) : ?>
                                            <a href="<?php echo esc_url($button_two_link); ?>" 
                                               class="inline-flex items-center gap-2 text-[#590EB7] hover:text-[#590EB7]/80">
                                                <?php the_sub_field('button_two_label'); ?>
                                                <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php 
                            $image = get_sub_field('image');
                            if ($image) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>" 
                                     class="w-full object-cover" />
                            <?php else: ?>
                                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" 
                                     alt="Placeholder image" 
                                     class="w-full object-cover" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('cta_39')) : ?>
        <?php while (have_rows('cta_39')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto relative">
                    <div class="relative z-10 flex flex-col justify-center p-8 md:p-12 lg:p-16">
                        <div class="w-full max-w-3xl">
                            <h2 class="mb-5 text-4xl font-bold text-white md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                            <p class="text-white md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        </div>
                        <?php if (have_rows('buttons')) : ?>
                            <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                                <?php while (have_rows('buttons')) : the_row(); 
                                    $button_one_link = get_sub_field('button_one_link');
                                    $button_two_link = get_sub_field('button_two_link');
                                ?>
                                    <?php if ($button_one_link) : ?>
                                        <a href="<?php echo esc_url($button_one_link); ?>" 
                                           class="inline-flex items-center justify-center rounded-lg border border-white bg-white px-6 py-3 text-base font-medium text-[#590EB7] hover:bg-white/90">
                                            <?php the_sub_field('button_one_label'); ?>
                                        </a>
                                    <?php endif; ?>
                                    <?php if ($button_two_link) : ?>
                                        <a href="<?php echo esc_url($button_two_link); ?>" 
                                           class="inline-flex items-center justify-center rounded-lg border border-white px-6 py-3 text-base font-medium text-white hover:bg-white/10">
                                            <?php the_sub_field('button_two_label'); ?>
                                        </a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="absolute inset-0 z-0">
                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>" 
                                 class="h-full w-full object-cover" />
                        <?php else: ?>
                            <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" 
                                 alt="Placeholder image" 
                                 class="h-full w-full object-cover" />
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-black/50"></div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</article>