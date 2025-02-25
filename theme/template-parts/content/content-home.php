<?php
/**
 * Template part for displaying home page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section id="relume" class="relative h-[300vh]">
        <?php if (have_rows('header_83')) : ?>
            <?php while (have_rows('header_83')) : the_row(); ?>
                <div class="sticky top-0 h-screen overflow-hidden">
                    <div class="hero-content flex h-full items-center justify-center">
                        <div class="px-[5%] py-16 md:py-24 lg:py-28">
                            <div class="relative z-10 mx-auto text-center">
                                <h1 class="mb-5 text-6xl font-bold text-text-alternative md:mb-6 md:text-7xl lg:text-8xl text-white">
                                    <?php the_sub_field('header'); ?>
                                </h1>
                                <p class="text-text-alternative md:text-md lg:text-lg text-white max-w-lg mx-auto">
                                    <?php the_sub_field('content'); ?>
                                </p>

                                <?php if (have_rows('buttons')) : ?>
                                    <div class="mt-6 flex items-center justify-center gap-x-4 md:mt-8">
                                        <?php while (have_rows('buttons')) : the_row(); ?>
                                            <?php 
                                            $button_one_link = get_sub_field('button_one_link');
                                            $button_one_label = get_sub_field('button_one_label');
                                            if ($button_one_link && $button_one_label) : 
                                            ?>
                                                <a href="<?php echo esc_url($button_one_link); ?>"
                                                   title="<?php echo esc_attr($button_one_label); ?>"
                                                   class="inline-flex items-center justify-center rounded-lg bg-[#FFC952] px-6 py-3 text-base font-semibold text-[#141414] transition hover:bg-[#FFC952]/90">
                                                    <?php echo esc_html($button_one_label); ?>
                                                </a>
                                            <?php endif; ?>

                                            <?php 
                                            $button_two_link = get_sub_field('button_two_link');
                                            $button_two_label = get_sub_field('button_two_label');
                                            if ($button_two_link && $button_two_label) : 
                                            ?>
                                                <a href="<?php echo esc_url($button_two_link); ?>"
                                                   title="<?php echo esc_attr($button_two_label); ?>"
                                                   class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#590EB7] px-6 py-3 text-base font-semibold text-white transition hover:bg-[#590EB7]/90">
                                                    <?php echo esc_html($button_two_label); ?>
                                                    <i data-lucide="chevron-right" class="size-4"></i>
                                                </a>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="absolute inset-0 z-0">
                        <div class="hero-overlay absolute inset-0 z-10 bg-black/50"></div>
                        <div class="hero-image-grid grid size-full auto-cols-fr grid-cols-1 gap-x-4 gap-y-4 md:grid-cols-3">
                            <?php 
                            $images = get_sub_field('images');
                            if ($images) : 
                                for ($i = 1; $i <= 9; $i++) :
                                    $image = isset($images[$i-1]) ? $images[$i-1] : null;
                                    $hidden = ($i != 2 && $i != 5 && $i != 8) ? 'hidden md:block' : '';
                            ?>
                                <div class="relative <?php echo $hidden; ?>">
                                    <img src="<?php echo $image ? esc_url($image['url']) : 'https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg'; ?>"
                                         alt="<?php echo $image ? esc_attr($image['alt']) : 'Relume placeholder image ' . $i; ?>"
                                         class="absolute inset-0 size-full object-cover" />
                                </div>
                            <?php 
                                endfor;
                            endif; 
                            ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container mx-auto">
            <?php if (have_rows('layout_254')) : ?>
                <?php while (have_rows('layout_254')) : the_row(); ?>
                    <div class="mb-12 md:mb-18 lg:mb-20">
                        <div class="mx-auto max-w-3xl text-center">
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

                    <div class="grid place-items-center gap-x-8 gap-y-12 sm:grid-cols-2 md:gap-y-16 lg:grid-cols-[1fr_1.5fr_1fr] lg:gap-x-12">
                        <div class="grid w-full grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16">
                            <?php 
                            $cards = get_sub_field('cards');
                            if ($cards) : 
                                for ($i = 0; $i < 2 && $i < count($cards); $i++) : 
                                    $card = $cards[$i];
                            ?>
                                <div class="flex flex-col items-center text-center bg-gray-50 p-6 md:p-8 rounded-[10px]">
                                    <div class="mb-5 md:mb-6">
                                        <?php 
                                        if (!empty($card['icon_picker'])) : 
                                            echo '<i data-lucide="' . esc_attr($card['icon_picker']) . '" class="size-12"></i>';
                                        endif; 
                                        ?>
                                    </div>
                                    <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl">
                                        <?php echo esc_html($card['title']); ?>
                                    </h3>
                                    <p>
                                        <?php echo esc_html($card['content']); ?>
                                    </p>
                                </div>
                            <?php 
                                endfor;
                            endif; 
                            ?>
                        </div>

                        <div class="relative order-last w-full sm:col-span-2 lg:order-none lg:col-span-1">
                            <?php 
                            $image = get_sub_field('image');
                            if ($image) : 
                            ?>
                                <div class="relative h-[40vh] w-full overflow-hidden rounded-lg md:h-[45vh] lg:h-[50vh]">
                                    <img src="<?php echo esc_url($image['url']); ?>" 
                                         alt="<?php echo esc_attr($image['alt']); ?>" 
                                         class="h-full w-full object-cover" />
                                </div>
                            <?php else : ?>
                                <div class="relative h-[40vh] w-full overflow-hidden rounded-lg md:h-[45vh] lg:h-[50vh]">
                                    <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" 
                                         alt="Placeholder image"
                                         class="h-full w-full object-cover" />
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="grid w-full grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16">
                            <?php 
                            if ($cards) : 
                                for ($i = 2; $i < 4 && $i < count($cards); $i++) : 
                                    $card = $cards[$i];
                            ?>
                                <div class="flex flex-col items-center text-center bg-gray-50 p-6 md:p-8 rounded-[30px]">
                                    <div class="mb-5 md:mb-6">
                                        <?php 
                                        if (!empty($card['icon_picker'])) : 
                                            echo '<i data-lucide="' . esc_attr($card['icon_picker']) . '" class="size-12"></i>';
                                        endif; 
                                        ?>
                                    </div>
                                    <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl">
                                        <?php echo esc_html($card['title']); ?>
                                    </h3>
                                    <p>
                                        <?php echo esc_html($card['content']); ?>
                                    </p>
                                </div>
                            <?php 
                                endfor;
                            endif; 
                            ?>
                        </div>
                    </div>

                    <div class="mt-12 flex flex-wrap items-center justify-center gap-4 md:mt-18 lg:mt-20">
                        <?php 
                        $button_one_link = get_sub_field('button_one_link');
                        $button_one_label = get_sub_field('button_one_label');
                        $button_two_link = get_sub_field('button_two_link');
                        $button_two_label = get_sub_field('button_two_label');
                        
                        if ($button_one_link && $button_one_label) : 
                        ?>
                            <a href="<?php echo esc_url($button_one_link); ?>" 
                               class="inline-flex items-center justify-center rounded-lg bg-[#FFC952] px-6 py-3 text-base font-semibold text-[#141414] transition hover:bg-[#FFC952]/90">
                                <?php echo esc_html($button_one_label); ?>
                            </a>
                        <?php endif; ?>

                        <?php if ($button_two_link && $button_two_label) : ?>
                            <a href="<?php echo esc_url($button_two_link); ?>" 
                               class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#590EB7] px-6 py-3 text-base font-semibold text-white transition hover:bg-[#590EB7]/90">
                                <?php echo esc_html($button_two_label); ?>
                                <i data-lucide="chevron-right" class="size-4"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section id="layout-101" class="bg-[#3B93DE] px-[5%] py-16 text-white md:py-24 lg:py-28">
        <div class="container mx-auto">
            <?php if (have_rows('layout_101')) : ?>
                <?php while (have_rows('layout_101')) : the_row(); ?>
                    <div class="mb-12 grid grid-cols-1 items-start justify-between gap-x-12 gap-y-5 md:mb-18 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:mb-20 lg:gap-x-20">
                        <div>
                            <p class="mb-3 font-semibold text-yellow md:mb-4">
                                <?php the_sub_field('sub_header'); ?>
                            </p>
                            <h2 class="text-5xl font-bold leading-[1.2] text-white md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                        </div>
                        <div>
                            <p class="mb-6 text-white/70 md:mb-8 md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                            
                            <?php if (have_rows('cards')) : ?>
                                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                    <?php while (have_rows('cards')) : the_row(); ?>
                                        <div>
                                            <div class="mb-3 md:mb-4">
                                                <i data-lucide="<?php the_sub_field('icon_picker'); ?>" class="size-12 text-yellow"></i>
                                            </div>
                                            <h3 class="mb-3 text-md font-bold leading-[1.4] text-white md:mb-4 md:text-xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>
                                            <p class="text-white/70"><?php the_sub_field('content'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (have_rows('buttons')) : ?>
                                <?php while (have_rows('buttons')) : the_row(); 
                                    $button_one_link = get_sub_field('button_one_link');
                                    $button_one_label = get_sub_field('button_one_label');
                                    $button_two_link = get_sub_field('button_two_link');
                                    $button_two_label = get_sub_field('button_two_label');
                                ?>
                                    <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                                        <?php if ($button_one_link && $button_one_label) : ?>
                                            <a href="<?php echo esc_url($button_one_link); ?>" 
                                               class="inline-flex items-center justify-center rounded-lg bg-[#FFC952] px-6 py-3 text-base font-semibold text-[#141414] transition hover:bg-[#FFC952]/90">
                                                <?php echo esc_html($button_one_label); ?>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($button_two_link && $button_two_label) : ?>
                                            <a href="<?php echo esc_url($button_two_link); ?>" 
                                               class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#590EB7] px-6 py-3 text-base font-semibold text-white transition hover:bg-[#590EB7]/90">
                                                <?php echo esc_html($button_two_label); ?>
                                                <i data-lucide="chevron-right" class="size-4"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php $image = get_sub_field('image'); ?>
                    <?php if ($image) : ?>
                        <div class="relative h-[40vh] w-full overflow-hidden rounded-lg md:h-[45vh] lg:h-[50vh]">
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>" 
                                 class="h-full w-full object-cover" />
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section id="layout-203" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container mx-auto">
            <?php if (have_rows('layout_203')) : ?>
                <?php while (have_rows('layout_203')) : the_row(); ?>
                    <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-x-20">
                        <div class="order-2 md:order-1">
                            <?php $image = get_sub_field('image'); ?>
                            <?php if ($image) : ?>
                                <div class="relative h-[40vh] w-full overflow-hidden rounded-lg md:h-[45vh] lg:h-[50vh]">
                                    <img src="<?php echo esc_url($image['url']); ?>" 
                                         alt="<?php echo esc_attr($image['alt']); ?>" 
                                         class="h-full w-full object-cover" />
                                </div>
                            <?php else : ?>
                                <div class="relative h-[40vh] w-full overflow-hidden rounded-lg md:h-[45vh] lg:h-[50vh]">
                                    <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" 
                                         alt="Placeholder image"
                                         class="h-full w-full object-cover" />
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="order-1 md:order-2">
                            <h3 class="mb-5 text-4xl font-bold leading-[1.2] text-black md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h3>
                            <p class="mb-6 text-black/70 md:mb-8 md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                            <?php if (have_rows('cards')) : ?>
                                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                                    <?php while (have_rows('cards')) : the_row(); ?>
                                        <div>
                                            <div class="mb-3 md:mb-4">
                                                <i data-lucide="<?php the_sub_field('icon_picker'); ?>" class="size-12 text-purple"></i>
                                            </div>
                                            <h6 class="mb-3 text-md font-bold leading-[1.4] text-black md:mb-4 md:text-xl">
                                                <?php the_sub_field('title'); ?>
                                            </h6>
                                            <p class="text-black/70">
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container mx-auto">
            <?php if (have_rows('layout_408')) : ?>
                <?php while (have_rows('layout_408')) : the_row(); ?>
                    <div class="mx-auto mb-12 w-full max-w-3xl text-center md:mb-18 lg:mb-20">
                        <p class="mb-3 font-semibold text-purple md:mb-4">
                            <?php the_sub_field('sub_header'); ?>
                        </p>
                        <h2 class="mb-5 text-5xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                            <?php the_sub_field('header'); ?>
                        </h2>
                        <p class="md:text-md text-black/70">
                            <?php the_sub_field('content'); ?>
                        </p>
                    </div>

                    <div class="scroll-container sticky top-0 grid grid-cols-1 gap-6 md:gap-0">
                        <?php if (have_rows('cards')) : ?>
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <?php 
                                $image = get_sub_field('image');
                                $button_one_link = get_sub_field('button_one_link');
                                $button_one_label = get_sub_field('button_one_label');
                                $button_two_link = get_sub_field('button_two_link');
                                $button_two_label = get_sub_field('button_two_label');
                                $is_reverse = get_sub_field('reverse_layout');
                                ?>

                                <!-- Mobile Version -->
                                <div class="scroll-card block md:hidden static grid grid-cols-1 content-center overflow-hidden border border-purple/10">
                                    <div class="order-first flex flex-col justify-center p-6 md:p-8 lg:p-12">
                                        <p class="mb-2 font-semibold text-purple"><?php the_sub_field('sub_title'); ?></p>
                                        <h2 class="mb-5 text-4xl font-bold leading-[1.2] text-black md:mb-6 md:text-5xl lg:text-6xl">
                                            <?php the_sub_field('title'); ?>
                                        </h2>
                                        <p class="text-black/70"><?php the_sub_field('content'); ?></p>
                                        <div class="mt-6 flex items-center gap-x-4 md:mt-8">
                                            <?php if ($button_one_link && $button_one_label) : ?>
                                                <a href="<?php echo esc_url($button_one_link); ?>" 
                                                   class="inline-flex items-center justify-center rounded-lg bg-[#FFC952] px-6 py-3 text-base font-semibold text-[#141414] transition hover:bg-[#FFC952]/90">
                                                    <?php echo esc_html($button_one_label); ?>
                                                </a>
                                            <?php endif; ?>

                                            <?php if ($button_two_link && $button_two_label) : ?>
                                                <a href="<?php echo esc_url($button_two_link); ?>" 
                                                   class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#590EB7] px-6 py-3 text-base font-semibold text-white transition hover:bg-[#590EB7]/90">
                                                    <?php echo esc_html($button_two_label); ?>
                                                    <i data-lucide="chevron-right" class="size-4"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="order-last flex flex-col items-center justify-center">
                                        <?php if ($image) : ?>
                                            <div class="relative h-[40vh] w-full overflow-hidden rounded-lg">
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>" 
                                                     class="h-full w-full object-cover" />
                                            </div>
                                        <?php else : ?>
                                            <div class="relative h-[40vh] w-full overflow-hidden rounded-lg">
                                                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" 
                                                     alt="Placeholder image"
                                                     class="h-full w-full object-cover" />
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Desktop Version -->
                                <div class="scroll-card hidden md:grid static grid-cols-1 content-center overflow-hidden border border-purple/10 shadow-sm md:sticky md:top-[10%] md:mb-[10vh] md:h-[80vh] md:grid-cols-2 transition-transform duration-300 ease-out bg-white">
                                    <div class="order-first flex flex-col justify-center p-6 md:p-8 lg:p-12 <?php echo $is_reverse ? 'md:order-last' : 'md:order-first'; ?>">
                                        <p class="mb-2 font-semibold text-purple"><?php the_sub_field('sub_title'); ?></p>
                                        <h2 class="mb-5 text-4xl font-bold leading-[1.2] text-black md:mb-6 md:text-5xl lg:text-6xl">
                                            <?php the_sub_field('title'); ?>
                                        </h2>
                                        <p class="text-black/70"><?php the_sub_field('content'); ?></p>
                                        <div class="mt-6 flex items-center gap-x-4 md:mt-8">
                                            <?php if ($button_one_link && $button_one_label) : ?>
                                                <a href="<?php echo esc_url($button_one_link); ?>" 
                                                   class="inline-flex items-center justify-center rounded-lg bg-[#FFC952] px-6 py-3 text-base font-semibold text-[#141414] transition hover:bg-[#FFC952]/90">
                                                    <?php echo esc_html($button_one_label); ?>
                                                </a>
                                            <?php endif; ?>

                                            <?php if ($button_two_link && $button_two_label) : ?>
                                                <a href="<?php echo esc_url($button_two_link); ?>" 
                                                   class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#590EB7] px-6 py-3 text-base font-semibold text-white transition hover:bg-[#590EB7]/90">
                                                    <?php echo esc_html($button_two_label); ?>
                                                    <i data-lucide="chevron-right" class="size-4"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="order-last flex flex-col items-center justify-center <?php echo $is_reverse ? 'md:order-first' : 'md:order-last'; ?>">
                                        <?php if ($image) : ?>
                                            <div class="relative h-[45vh] w-full overflow-hidden rounded-lg lg:h-[50vh]">
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>" 
                                                     class="h-full w-full object-cover" />
                                            </div>
                                        <?php else : ?>
                                            <div class="relative h-[45vh] w-full overflow-hidden rounded-lg lg:h-[50vh]">
                                                <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg" 
                                                     alt="Placeholder image"
                                                     class="h-full w-full object-cover" />
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section id="recent-posts" class="px-[5%] py-16 md:py-24 lg:py-28">
        <div class="container mx-auto">
            <?php if (have_rows('recent_post')) : ?>
                <?php while (have_rows('recent_post')) : the_row(); ?>
                    <div class="mb-12 md:mb-18 lg:mb-20">
                        <div class="w-full max-w-3xl">
                            <p class="mb-3 font-semibold text-purple md:mb-4">
                                <?php the_sub_field('sub_header'); ?>
                            </p>
                            <h2 class="mb-5 text-5xl font-bold leading-[1.2] text-black md:mb-6 md:text-6xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                            <p class="text-black/70 md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-12 md:grid-cols-2 md:gap-y-16 lg:grid-cols-3">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        $recent_posts = new WP_Query($args);
                        if ($recent_posts->have_posts()) :
                            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                                $categories = get_the_category();
                                $author_id = get_the_author_meta('ID');
                        ?>
                            <div class="flex flex-col overflow-hidden rounded-lg border border-purple/10">
                                <a href="<?php the_permalink(); ?>" class="block w-full">
                                    <div class="w-full overflow-hidden">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('large', array('class' => 'aspect-[3/2] size-full object-cover')); ?>
                                        <?php else : ?>
                                            <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg" 
                                                 alt="Placeholder image" 
                                                 class="aspect-[3/2] size-full object-cover" />
                                        <?php endif; ?>
                                    </div>
                                </a>
                                <div class="px-5 py-6 md:p-6">
                                    <?php if (!empty($categories)) : ?>
                                        <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" 
                                           class="mb-2 inline-block text-sm font-semibold text-purple">
                                            <?php echo esc_html($categories[0]->name); ?>
                                        </a>
                                    <?php endif; ?>
                                    
                                    <a href="<?php the_permalink(); ?>" class="mb-2 block">
                                        <h5 class="line-clamp-2 text-xl font-bold text-black md:text-2xl">
                                            <?php the_title(); ?>
                                        </h5>
                                    </a>
                                    <p class="line-clamp-3 text-black/70">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                    </p>
                                    <div class="mt-4 flex items-center">
                                        <div class="mr-4 shrink-0">
                                            <?php echo get_avatar($author_id, 48, '', '', array('class' => 'size-12 min-h-12 min-w-12 rounded-full object-cover')); ?>
                                        </div>
                                        <div>
                                            <h6 class="text-sm font-semibold text-black">
                                                <?php the_author(); ?>
                                            </h6>
                                            <div class="flex items-center">
                                                <p class="text-sm text-black/70">
                                                    <?php echo get_the_date('d M Y'); ?>
                                                </p>
                                                <span class="mx-2 text-black/70">•</span>
                                                <p class="text-sm text-black/70">
                                                    <?php echo ceil(str_word_count(get_the_content()) / 200); ?> min read
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>

                    <div class="flex items-center justify-end">
                        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" 
                           class="mt-10 inline-flex items-center justify-center gap-2 rounded-lg bg-[#590EB7] px-6 py-3 text-base font-semibold text-white transition hover:bg-[#590EB7]/90 md:mt-14 lg:mt-16">
                            View all
                            <i data-lucide="chevron-right" class="size-4"></i>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section id="cta-39" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#ED0068]">
        <div class="container mx-auto bg-white">
            <?php if (have_rows('cta_39')) : ?>
                <?php while (have_rows('cta_39')) : the_row(); ?>
                    <div class="grid auto-cols-fr grid-cols-1 overflow-hidden  border border-purple/10 lg:grid-cols-2">
                        <div class="flex flex-col justify-center p-8 md:p-12">
                            <div>
                                <h2 class="mb-5 text-5xl font-bold leading-[1.2] text-black md:mb-6 md:text-4xl lg:text-5xl">
                                    <?php the_sub_field('header'); ?>
                                </h2>
                                <p class="text-black/70 md:text-md">
                                    <?php the_sub_field('content'); ?>
                                </p>
                            </div>
                            <?php if (have_rows('buttons')) : ?>
                                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                                    <?php while (have_rows('buttons')) : the_row(); 
                                        $button_one_link = get_sub_field('button_one_link');
                                        $button_one_label = get_sub_field('button_one_label');
                                        $button_two_link = get_sub_field('button_two_link');
                                        $button_two_label = get_sub_field('button_two_label');
                                    ?>
                                        <?php if ($button_one_link && $button_one_label) : ?>
                                            <a href="<?php echo esc_url($button_one_link); ?>" 
                                               class="inline-flex items-center justify-center rounded-lg bg-[#FFC952] px-6 py-3 text-base font-semibold text-[#141414] transition hover:bg-[#FFC952]/90">
                                                <?php echo esc_html($button_one_label); ?>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($button_two_link && $button_two_label) : ?>
                                            <a href="<?php echo esc_url($button_two_link); ?>" 
                                               class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#590EB7] px-6 py-3 text-base font-semibold text-white transition hover:bg-[#590EB7]/90">
                                                <?php echo esc_html($button_two_label); ?>
                                                <i data-lucide="chevron-right" class="size-4"></i>
                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="flex items-center justify-center">
                            <?php $image = get_sub_field('image'); ?>
                            <?php if ($image) : ?>
                                <div class="relative h-[40vh] w-full overflow-hidden lg:h-[50vh]">
                                    <img src="<?php echo esc_url($image['url']); ?>" 
                                         alt="<?php echo esc_attr($image['alt']); ?>" 
                                         class="h-full w-full object-cover" />
                                </div>
                            <?php else : ?>
                                <div class="relative h-[40vh] w-full overflow-hidden lg:h-[50vh]">
                                    <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape4x3.svg" 
                                         alt="Placeholder image"
                                         class="h-full w-full object-cover" />
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</article>