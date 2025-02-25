<?php
/**
 * Template part for displaying AI/ML page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_112')) : ?>
        <?php while (have_rows('header_112')) : the_row(); ?>
            <section id="relume" class="relative px-[5%]">
                <div class="container mx-auto flex max-h-[60rem] min-h-svh">
                    <div class="py-16 md:py-24 lg:py-28">
                        <div class="relative z-10 grid h-full auto-cols-fr grid-cols-1 gap-12 md:grid-cols-2 md:gap-20">
                            <div class="mx-[7.5%] flex flex-col justify-end">
                                <p class="text-text-alternative md:text-md text-white">
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
                                                   class="inline-flex items-center justify-center rounded-lg border border-white px-6 py-3 text-base font-medium text-white hover:bg-white hover:text-[#590EB7]">
                                                    <?php the_sub_field('button_two_label'); ?>
                                                </a>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="order-first flex flex-col md:order-last">
                                <h1 class="mb-5 text-5xl font-bold text-text-alternative text-white md:mb-6 md:text-6xl lg:text-7xl">
                                    <?php the_sub_field('header'); ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 z-0">
                    <?php 
                    $image = get_sub_field('image');
                    if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             alt="<?php echo esc_attr($image['alt']); ?>" 
                             class="size-full object-cover" />
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-black/50"></div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_4')) : ?>
        <?php while (have_rows('layout_4')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
                        <div>
                            <p class="mb-3 font-semibold md:mb-4">
                                <?php the_sub_field('sub_header'); ?>
                            </p>
                            <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                            <p class="mb-6 md:mb-8 md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                            <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                <?php if (have_rows('cards')) : ?>
                                    <?php while (have_rows('cards')) : the_row(); ?>
                                        <div>
                                            <h6 class="mb-3 text-md font-bold leading-[1.4] md:mb-4 md:text-xl">
                                                <?php the_sub_field('title'); ?>
                                            </h6>
                                            <p>
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
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
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_213')) : ?>
        <?php while (have_rows('layout_213')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#ED0068] text-white">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-x-20">
                        <div class="order-2 md:order-1">
                            <?php 
                            $image = get_sub_field('image');
                            if ($image) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>" 
                                     class="w-full object-cover" />
                            <?php endif; ?>
                        </div>
                        <div class="order-1 md:order-2">
                            <div class="mb-5 md:mb-6">
                                <i data-lucide="brain-circuit" class="size-20 text-white"></i>
                            </div>
                            <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                            <p class="md:text-md">
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
                                               class="inline-flex items-center justify-center rounded-lg border border-white px-6 py-3 text-base font-medium text-white hover:bg-white hover:text-[#ED0068]">
                                                <?php the_sub_field('button_one_label'); ?>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($button_two_link) : ?>
                                            <a href="<?php echo esc_url($button_two_link); ?>" 
                                               class="inline-flex items-center gap-2 text-white hover:text-white/80">
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
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_422')) : ?>
        <?php while (have_rows('layout_422')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mx-auto mb-12 w-full max-w-3xl text-center md:mb-18 lg:mb-20">
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
                    <div class="flex flex-col justify-between gap-6 md:flex-row md:gap-8">
                        <?php if (have_rows('cards')) : ?>
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <a href="#" class="relative flex w-full flex-col overflow-hidden md:w-1/2 lg:h-full lg:transition-all lg:duration-200 hover:lg:w-[70%] group">
                                    <div class="group absolute inset-0 flex size-full flex-col items-center justify-center self-start">
                                        <div class="absolute inset-0 bg-black/50"></div>
                                        <?php 
                                        $image = get_sub_field('image');
                                        if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>" 
                                                 class="size-full object-cover" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="group relative flex h-full min-h-[70vh] flex-col justify-end p-6 md:p-8 lg:p-12">
                                        <div class="lg:absolute lg:inset-0 lg:z-0 lg:transition-all lg:duration-300 lg:opacity-0 lg:group-hover:opacity-100 lg:bg-black/50"></div>
                                        <div class="z-10">
                                            <p class="mb-2 font-semibold text-white">
                                                <?php the_sub_field('sub_title'); ?>
                                            </p>
                                            <h3 class="text-3xl font-bold leading-[1.2] text-white md:text-4xl lg:text-5xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
                                            <div class="lg:hidden">
                                                <p class="mt-5 text-white md:mt-6">
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                                <?php if (have_rows('buttons')) : ?>
                                                    <?php while (have_rows('buttons')) : the_row(); 
                                                        $button_one_link = get_sub_field('button_one_link');
                                                    ?>
                                                        <?php if ($button_one_link) : ?>
                                                            <div class="mt-6 md:mt-8">
                                                                <a href="<?php echo esc_url($button_one_link); ?>" 
                                                                   class="inline-flex items-center gap-2 text-white hover:text-white/80">
                                                                    <?php the_sub_field('button_one_label'); ?>
                                                                    <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="z-10 hidden lg:block lg:w-[528px] opacity-0 transform translate-y-8 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                                            <p class="mt-5 text-white md:mt-6">
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                            <?php if (have_rows('buttons')) : ?>
                                                <?php while (have_rows('buttons')) : the_row(); 
                                                    $button_one_link = get_sub_field('button_one_link');
                                                ?>
                                                    <?php if ($button_one_link) : ?>
                                                        <div class="mt-6 md:mt-8">
                                                            <a href="<?php echo esc_url($button_one_link); ?>" 
                                                               class="inline-flex items-center gap-2 text-white hover:text-white/80">
                                                                <?php the_sub_field('button_one_label'); ?>
                                                                <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('cta_39')) : ?>
        <?php while (have_rows('cta_39')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto flex flex-col items-center">
                    <div class="mb-12 max-w-3xl text-center md:mb-18 lg:mb-20">
                        <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                            <?php the_sub_field('header'); ?>
                        </h2>
                        <p class="md:text-md">
                            <?php the_sub_field('content'); ?>
                        </p>
                        <?php if (have_rows('buttons')) : ?>
                            <div class="mt-6 flex flex-wrap items-center justify-center gap-4 md:mt-8">
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
                    <?php 
                    $image = get_sub_field('image');
                    if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             alt="<?php echo esc_attr($image['alt']); ?>" 
                             class="max-w-3xl w-full object-cover" />
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</article>