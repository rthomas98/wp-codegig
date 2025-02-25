<?php
/**
 * Template part for displaying Layout 254 section
 */
?>

<section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
    <div class="container">
        <?php if (have_rows('layout_254')) : ?>
            <?php while (have_rows('layout_254')) : the_row(); ?>
                <div class="mb-12 md:mb-18 lg:mb-20">
                    <div class="mx-auto max-w-lg text-center">
                        <p class="mb-3 font-semibold md:mb-4">
                            <?php the_sub_field('sub_header'); ?>
                        </p>
                        <h2 class="mb-5 text-5xl font-bold md:mb-6 md:text-7xl lg:text-8xl">
                            <?php the_sub_field('header'); ?>
                        </h2>
                        <p class="md:text-md">
                            <?php the_sub_field('content'); ?>
                        </p>
                    </div>
                </div>

                <div class="grid place-items-center gap-x-8 gap-y-12 sm:grid-cols-2 md:gap-y-16 lg:grid-cols-[1fr_1.5fr_1fr] lg:gap-x-12">
                    <div class="grid w-full grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16">
                        <?php if (have_rows('cards')) : $card_count = 0; ?>
                            <?php while (have_rows('cards') && $card_count < 2) : the_row(); $card_count++; ?>
                                <div class="flex flex-col items-center text-center">
                                    <div class="mb-5 md:mb-6">
                                        <?php 
                                        $icon = get_sub_field('icon_picker');
                                        if ($icon) : 
                                            echo '<i data-lucide="' . esc_attr($icon) . '" class="size-12"></i>';
                                        endif; 
                                        ?>
                                    </div>
                                    <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl">
                                        <?php the_sub_field('title'); ?>
                                    </h3>
                                    <p>
                                        <?php the_sub_field('content'); ?>
                                    </p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <div class="relative order-last w-full sm:col-span-2 lg:order-none lg:col-span-1">
                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : 
                        ?>
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>" 
                                 class="h-auto w-full object-cover" />
                        <?php endif; ?>
                    </div>

                    <div class="grid w-full grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16">
                        <?php if (have_rows('cards')) : $card_count = 0; ?>
                            <?php while (have_rows('cards')) : the_row(); $card_count++;
                                if ($card_count > 2) : 
                            ?>
                                <div class="flex flex-col items-center text-center">
                                    <div class="mb-5 md:mb-6">
                                        <?php 
                                        $icon = get_sub_field('icon_picker');
                                        if ($icon) : 
                                            echo '<i data-lucide="' . esc_attr($icon) . '" class="size-12"></i>';
                                        endif; 
                                        ?>
                                    </div>
                                    <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl">
                                        <?php the_sub_field('title'); ?>
                                    </h3>
                                    <p>
                                        <?php the_sub_field('content'); ?>
                                    </p>
                                </div>
                            <?php endif; endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="mt-12 flex flex-wrap items-center justify-center gap-4 md:mt-18 lg:mt-20">
                    <?php if (have_rows('buttons')) : ?>
                        <?php while (have_rows('buttons')) : the_row(); 
                            $button_one_link = get_sub_field('button_one_link');
                            $button_one_label = get_sub_field('button_one_label');
                            $button_two_link = get_sub_field('button_two_link');
                            $button_two_label = get_sub_field('button_two_label');
                        ?>
                            <?php if ($button_one_link && $button_one_label) : ?>
                                <a href="<?php echo esc_url($button_one_link); ?>" 
                                   class="focus-visible:ring-border-primary inline-flex gap-3 items-center justify-center whitespace-nowrap ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-purple bg-purple text-white hover:bg-yellow hover:text-purple hover:border-yellow px-6 py-3">
                                    <?php echo esc_html($button_one_label); ?>
                                </a>
                            <?php endif; ?>

                            <?php if ($button_two_link && $button_two_label) : ?>
                                <a href="<?php echo esc_url($button_two_link); ?>" 
                                   class="focus-visible:ring-border-primary inline-flex gap-3 items-center justify-center whitespace-nowrap ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-purple hover:text-yellow">
                                    <?php echo esc_html($button_two_label); ?>
                                    <i data-lucide="chevron-right" class="size-4"></i>
                                </a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
