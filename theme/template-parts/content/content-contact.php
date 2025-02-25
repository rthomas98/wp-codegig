<?php
/**
 * Template part for displaying contact page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_116')) : ?>
        <?php while (have_rows('header_116')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#590EB7] text-white">
                <div class="container mx-auto">
                    <div class="rb-12 mb-12 grid grid-cols-1 items-start gap-5 md:mb-18 md:grid-cols-2 md:gap-12 lg:mb-20 lg:gap-20">
                        <div>
                            <h1 class="text-6xl font-bold md:text-6xl lg:text-7xl">
                                <?php the_sub_field('header'); ?>
                            </h1>
                        </div>
                        <div class="mx-[7.5%] flex flex-col justify-end md:mt-48">
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
                                               class="inline-flex items-center justify-center gap-2 px-6 py-3 text-base font-medium text-[#590EB7] bg-white hover:bg-white/90 rounded-lg">
                                                <?php the_sub_field('button_one_label'); ?>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($button_two_link) : ?>
                                            <a href="<?php echo esc_url($button_two_link); ?>" 
                                               class="inline-flex items-center justify-center gap-2 px-6 py-3 text-base font-medium text-white bg-transparent border border-white hover:bg-white/10 rounded-lg">
                                                <?php the_sub_field('button_two_label'); ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="grid grid-cols-[1fr_0.33fr] items-start gap-6 sm:gap-8 md:gap-16">
                        <div class="mt-[10%] w-full">
                            <?php 
                            $image_one = get_sub_field('image_one');
                            if ($image_one) : ?>
                                <img src="<?php echo esc_url($image_one['url']); ?>" 
                                     alt="<?php echo esc_attr($image_one['alt']); ?>"
                                     class="aspect-[3/2] size-full object-cover" />
                            <?php endif; ?>
                        </div>
                        <div class="w-full">
                            <?php 
                            $image_two = get_sub_field('image_two');
                            if ($image_two) : ?>
                                <img src="<?php echo esc_url($image_two['url']); ?>" 
                                     alt="<?php echo esc_attr($image_two['alt']); ?>"
                                     class="aspect-[2/3] size-full object-cover" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('contact_20')) : ?>
        <?php while (have_rows('contact_20')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="rb-12 mx-auto mb-12 flex max-w-3xl flex-col justify-center text-center md:mb-18 lg:mb-20">
                        <p class="mb-3 font-semibold md:mb-4">
                            <?php the_sub_field('sub_header'); ?>
                        </p>
                        <h2 class="rb-5 mb-5 text-5xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                            <?php the_sub_field('header'); ?>
                        </h2>
                        <p class="md:text-md">
                            <?php the_sub_field('content'); ?>
                        </p>
                    </div>

                    <?php if (have_rows('cards')) : ?>
                        <div class="grid auto-cols-fr grid-cols-1 items-center gap-x-12 gap-y-12 md:grid-cols-3 md:gap-y-16">
                            <?php while (have_rows('cards')) : the_row(); 
                                $link = get_sub_field('link');
                                $icon = get_sub_field('icon_picker');
                            ?>
                                <div class="flex flex-col items-center justify-start text-center">
                                    <div class="mb-5 lg:mb-6">
                                        <i data-lucide="<?php echo esc_attr($icon); ?>" class="size-12"></i>
                                    </div>
                                    <h3 class="mb-3 text-2xl font-bold leading-[1.4] md:text-3xl lg:mb-4 lg:text-4xl">
                                        <?php the_sub_field('title'); ?>
                                    </h3>
                                    <p class="mb-5 md:mb-6">
                                        <?php the_sub_field('content'); ?>
                                    </p>
                                    <?php if ($link) : ?>
                                        <a class="underline hover:text-gray-600" 
                                           href="<?php echo esc_url($link['url']); ?>" 
                                           target="<?php echo esc_attr($link['target']); ?>">
                                            <?php echo esc_html($link['title']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('contact_7')) : ?>
        <?php while (have_rows('contact_7')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:gap-x-12 lg:gap-x-20">
                    <div>
                        <div class="mb-6 md:mb-8">
                            <p class="mb-3 font-semibold md:mb-4">
                                <?php the_sub_field('sub_header'); ?>
                            </p>
                            <h2 class="mb-5 text-5xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        </div>
                        <div class="contact-form-wrapper">
                            <?php the_sub_field('form'); ?>
                        </div>
                    </div>
                    <div>
                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                 class="size-full object-cover" />
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_365')) : ?>
        <?php while (have_rows('layout_365')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#3B93DE] text-white">
                <div class="container mx-auto">
                    <div class="mb-12 md:mb-18 lg:mb-20">
                        <div class="mx-auto max-w-4xl text-center">
                            <p class="mb-3 font-semibold md:mb-4">
                                <?php the_sub_field('sub_header'); ?>
                            </p>
                            <h2 class="mb-5 text-5xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        </div>
                    </div>

                    <?php if (have_rows('cards')) : ?>
                        <div class="grid grid-cols-1 gap-6 md:gap-8">
                            <div class="grid grid-cols-1 gap-6 md:gap-8 lg:grid-cols-2">
                                <?php 
                                $card_count = 0;
                                while (have_rows('cards')) : the_row();
                                    $card_count++;
                                    $image = get_sub_field('image');
                                    if ($card_count < 3) : // First two cards
                                ?>
                                    <div class="flex flex-col bg-white text-gray-900 rounded-lg overflow-hidden shadow-lg md:grid md:grid-cols-2">
                                        <div class="block flex-col justify-center p-6 md:flex">
                                            <div>
                                                <p class="mb-2 font-semibold"><?php the_sub_field('sub_header'); ?></p>
                                                <h3 class="mb-2 text-xl font-bold md:text-2xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                                <p><?php the_sub_field('content'); ?></p>
                                                <?php if (have_rows('buttons')) : ?>
                                                    <div class="mt-5 flex items-center gap-4 md:mt-6">
                                                        <?php while (have_rows('buttons')) : the_row(); 
                                                            $button_one_link = get_sub_field('button_one_link');
                                                            if ($button_one_link) : ?>
                                                                <a href="<?php echo esc_url($button_one_link); ?>" 
                                                                   class="inline-flex items-center gap-2 text-[#590EB7] hover:text-[#590EB7]/80">
                                                                    <?php the_sub_field('button_one_label'); ?>
                                                                    <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                                </a>
                                                            <?php endif; ?>
                                                        <?php endwhile; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center">
                                            <?php if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                                     class="w-full object-cover" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php else : // Third card ?>
                                    <div class="flex flex-col items-stretch bg-white text-gray-900 rounded-lg overflow-hidden shadow-lg lg:col-start-2 lg:col-end-3 lg:row-start-1 lg:row-end-3">
                                        <div class="block flex-1 flex-col items-stretch justify-center p-6 md:flex md:p-8 lg:p-12">
                                            <div>
                                                <p class="mb-2 font-semibold"><?php the_sub_field('sub_header'); ?></p>
                                                <h3 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">
                                                    <?php the_sub_field('title'); ?>
                                                </h3>
                                                <p><?php the_sub_field('content'); ?></p>
                                            </div>
                                            <?php if (have_rows('buttons')) : ?>
                                                <div class="mt-6 flex items-center gap-4 md:mt-8">
                                                    <?php while (have_rows('buttons')) : the_row(); 
                                                        $button_one_link = get_sub_field('button_one_link');
                                                        $button_two_link = get_sub_field('button_two_link');
                                                    ?>
                                                        <?php if ($button_one_link) : ?>
                                                            <a href="<?php echo esc_url($button_one_link); ?>" 
                                                               class="inline-flex items-center justify-center rounded-lg border border-[#590EB7] px-6 py-3 text-base font-medium text-[#590EB7] hover:bg-[#0045D8]/10">
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
                                            <?php if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                                     class="w-full object-cover" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</article>

<style>
/* Contact Form Styling */
.contact-form-wrapper form {
    @apply grid grid-cols-1 gap-6;
}

.contact-form-wrapper form label {
    @apply mb-2 text-sm font-medium block;
}

.contact-form-wrapper form input[type="text"],
.contact-form-wrapper form input[type="email"],
.contact-form-wrapper form textarea {
    @apply w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm focus:border-[#590EB7] focus:outline-none focus:ring-2 focus:ring-[#590EB7] focus:ring-opacity-50;
}

.contact-form-wrapper form textarea {
    @apply min-h-[11.25rem];
}

.contact-form-wrapper form input[type="checkbox"] {
    @apply h-4 w-4 rounded border-gray-300 text-[#590EB7] focus:ring-[#590EB7];
}

.contact-form-wrapper form input[type="submit"] {
    @apply inline-flex items-center justify-center rounded-lg bg-[#590EB7] px-6 py-3 text-base font-medium text-white hover:bg-[#590EB7]/90 focus:outline-none focus:ring-2 focus:ring-[#590EB7] focus:ring-opacity-50;
}
</style>