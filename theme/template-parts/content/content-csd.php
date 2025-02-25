<?php
/**
 * Template part for displaying custom software development page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_36')) : ?>
        <?php while (have_rows('header_36')) : the_row(); ?>
            <section id="relume" class="grid grid-cols-1 items-center gap-y-16 pb-32 pt-32 md:pb-40 md:pt-40 lg:grid-cols-2">
                <div class="mx-[5%] max-w-2xl md:justify-self-start lg:ml-[10vw] lg:mr-24 lg:justify-self-end">
                    <h1 class="mb-5 text-5xl font-bold md:mb-6 md:text-6xl lg:text-7xl">
                        <?php the_sub_field('header'); ?>
                    </h1>
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
                <div>
                    <?php 
                    $image = get_sub_field('image');
                    if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             alt="<?php echo esc_attr($image['alt']); ?>" 
                             class="w-full object-cover lg:h-screen lg:max-h-[60rem]" />
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_396')) : ?>
        <?php while (have_rows('layout_396')) : the_row(); ?>
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
                    <div class="grid auto-cols-fr grid-cols-1 gap-6 md:gap-8 lg:grid-cols-3">
                        <?php if (have_rows('cards')) : ?>
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <div class="flex flex-col justify-center border border-border-primary p-6 md:p-8 bg-[#ED0068]">
                                    <div>
                                        <div class="mb-5 md:mb-6">
                                            <i data-lucide="<?php the_sub_field('icon_picker'); ?>" class="size-12 text-white"></i>
                                        </div>
                                        <h3 class="mb-3 text-2xl font-bold md:mb-4 md:text-3xl md:leading-[1.3] lg:text-4xl text-white">
                                            <?php the_sub_field('title'); ?>
                                        </h3>
                                        <p class="md:text-md text-white">
                                            <?php the_sub_field('content'); ?>
                                        </p>
                                    </div>
                                    <?php if (have_rows('buttons')) : ?>
                                        <?php while (have_rows('buttons')) : the_row(); 
                                            $button_one_link = get_sub_field('button_one_link');
                                        ?>
                                            <?php if ($button_one_link) : ?>
                                                <div class="mt-5 md:mt-6">
                                                    <a href="<?php echo esc_url($button_one_link); ?>" 
                                                       class="inline-flex items-center gap-2 text-[#590EB7] hover:text-[#590EB7]/80">
                                                        <?php the_sub_field('button_one_label'); ?>
                                                        <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_12')) : ?>
        <?php while (have_rows('layout_12')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#FFC952]">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
                        <div>
                            <h2 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                            <p class="mb-6 md:mb-8 md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                            <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                <?php if (have_rows('cards')) : ?>
                                    <?php while (have_rows('cards')) : the_row(); ?>
                                        <div>
                                            <div class="mb-3 md:mb-4">
                                                <i data-lucide="<?php the_sub_field('icon_picker'); ?>" class="size-12"></i>
                                            </div>
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

    <?php if (have_rows('layout_10')) : ?>
        <?php while (have_rows('layout_10')) : the_row(); ?>
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
                                            <div class="mb-3 md:mb-4">
                                                <i data-lucide="<?php the_sub_field('icon_picker'); ?>" class="size-12"></i>
                                            </div>
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

    <?php if (have_rows('layout_195')) : ?>
        <?php while (have_rows('layout_195')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
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
                                <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
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
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('cta_39')) : ?>
        <?php while (have_rows('cta_39')) : the_row(); ?>
            <section id="relume" class="relative px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container relative z-10 mx-auto">
                    <div class="grid w-full grid-cols-1 items-start justify-between gap-6 md:grid-cols-[1fr_max-content] md:gap-x-12 md:gap-y-8 lg:gap-x-20">
                        <div class="md:mr-12 lg:mr-0">
                            <div class="w-full max-w-lg">
                                <h2 class="mb-3 text-4xl font-bold leading-[1.2] text-white md:mb-4 md:text-5xl lg:text-6xl">
                                    <?php the_sub_field('header'); ?>
                                </h2>
                                <p class="text-white md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            </div>
                        </div>
                        <?php if (have_rows('buttons')) : ?>
                            <div class="flex items-start justify-start gap-4">
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
                                           class="inline-flex items-center justify-center rounded-lg border border-white bg-transparent px-6 py-3 text-base font-medium text-white hover:bg-white/10">
                                            <?php the_sub_field('button_two_label'); ?>
                                        </a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
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
</article>