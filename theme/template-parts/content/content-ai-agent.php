<?php
/**
 * Template part for displaying AI Agent page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_77')) : ?>
        <?php while (have_rows('header_77')) : the_row(); ?>
            <section id="relume" class="grid grid-cols-1 items-center gap-y-16 pt-16 md:pt-24 lg:grid-cols-2 lg:pt-0">
                <div class="mx-[5%] sm:max-w-md md:justify-self-start lg:ml-[5vw] lg:mr-20 lg:justify-self-end">
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
                                       class="inline-flex items-center justify-center rounded-lg bg-[#590EB7] px-6 py-3 text-base font-medium text-white hover:bg-[#590EB7]/80">
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

                <div class="flex items-center gap-4 overflow-hidden bg-background-secondary py-8 md:py-16 lg:h-screen">
                    <div class="grid shrink-0 grid-cols-1 gap-y-4">
                        <div class="ml-[-8.5%] grid w-full animate-marquee-horizontally auto-cols-fr grid-cols-2 gap-4 self-center">
                            <div class="grid w-full grid-flow-col gap-4">
                                <?php 
                                $images = get_sub_field('images');
                                if ($images) : 
                                    foreach ($images as $index => $image) : 
                                        if ($index < 3) : 
                                ?>
                                    <div class="relative w-[60vw] pt-[75%] sm:w-[18rem] md:w-[26rem]">
                                        <img class="absolute inset-0 size-full object-cover"
                                             src="<?php echo esc_url($image['url']); ?>"
                                             alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                <?php 
                                        endif;
                                    endforeach; 
                                endif; 
                                ?>
                            </div>
                            <div class="grid w-full grid-flow-col gap-4">
                                <?php 
                                if ($images) : 
                                    foreach ($images as $index => $image) : 
                                        if ($index < 3) : 
                                ?>
                                    <div class="relative w-[60vw] pt-[75%] sm:w-[18rem] md:w-[26rem]">
                                        <img class="absolute inset-0 size-full object-cover"
                                             src="<?php echo esc_url($image['url']); ?>"
                                             alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                <?php 
                                        endif;
                                    endforeach; 
                                endif; 
                                ?>
                            </div>
                        </div>
                        <div class="grid w-full animate-marquee-horizontally grid-cols-2 gap-4 self-center">
                            <div class="grid w-full grid-flow-col gap-4">
                                <?php 
                                if ($images) : 
                                    foreach ($images as $index => $image) : 
                                        if ($index < 3) : 
                                ?>
                                    <div class="relative w-[60vw] pt-[75%] sm:w-[18rem] md:w-[26rem]">
                                        <img class="absolute inset-0 size-full object-cover"
                                             src="<?php echo esc_url($image['url']); ?>"
                                             alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                <?php 
                                        endif;
                                    endforeach; 
                                endif; 
                                ?>
                            </div>
                            <div class="grid w-full grid-flow-col gap-4">
                                <?php 
                                if ($images) : 
                                    foreach ($images as $index => $image) : 
                                        if ($index < 3) : 
                                ?>
                                    <div class="relative w-[60vw] pt-[75%] sm:w-[18rem] md:w-[26rem]">
                                        <img class="absolute inset-0 size-full object-cover"
                                             src="<?php echo esc_url($image['url']); ?>"
                                             alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                <?php 
                                        endif;
                                    endforeach; 
                                endif; 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_351')) : ?>
        <?php while (have_rows('layout_351')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mx-auto mb-12 w-full max-w-3xl text-center md:mb-18 lg:mb-20">
                        <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_header'); ?></p>
                        <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl"><?php the_sub_field('header'); ?></h2>
                        <p class="md:text-md"><?php the_sub_field('content'); ?></p>
                    </div>

                    <div class="sticky-scroll-container relative">
                        <?php if (have_rows('cards')) : ?>
                            <?php $card_count = 0; ?>
                            <?php while (have_rows('cards')) : the_row(); 
                                $card_count++;
                            ?>
                                <!-- Mobile Version -->
                                <div class="md:hidden static grid grid-cols-1 content-center overflow-hidden border border-border-primary bg-neutral-white bg-white mb-6">
                                    <div class="order-first flex flex-col justify-center p-6 md:p-8 lg:p-12 <?php echo $card_count % 2 === 0 ? 'md:order-last' : 'md:order-first'; ?>">
                                        <p class="mb-2 font-semibold"><?php the_sub_field('sub_title'); ?></p>
                                        <h2 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">
                                            <?php the_sub_field('title'); ?>
                                        </h2>
                                        <p><?php the_sub_field('content'); ?></p>
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
                                    <div class="order-last flex flex-col items-center justify-center <?php echo $card_count % 2 === 0 ? 'md:order-first' : 'md:order-last'; ?>">
                                        <?php 
                                        $image = get_sub_field('image');
                                        if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="w-full object-cover" />
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Desktop Version -->
                                <div class="hidden md:grid sticky-scroll-section static grid-cols-1 content-center overflow-hidden border border-border-primary bg-neutral-white bg-white md:sticky md:top-[10%] md:mb-[10vh] md:h-[80vh] md:grid-cols-2"
                                     data-section="<?php echo $card_count; ?>"
                                     data-visible="false">
                                    <div class="order-first flex flex-col justify-center p-6 md:p-8 lg:p-12 <?php echo $card_count % 2 === 0 ? 'md:order-last' : 'md:order-first'; ?>">
                                        <p class="mb-2 font-semibold"><?php the_sub_field('sub_title'); ?></p>
                                        <h2 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">
                                            <?php the_sub_field('title'); ?>
                                        </h2>
                                        <p><?php the_sub_field('content'); ?></p>
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
                                    <div class="order-last flex flex-col items-center justify-center <?php echo $card_count % 2 === 0 ? 'md:order-first' : 'md:order-last'; ?>">
                                        <?php 
                                        $image = get_sub_field('image');
                                        if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="w-full object-cover" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const container = document.querySelector('.sticky-scroll-container');
                const sections = document.querySelectorAll('.sticky-scroll-section');
                
                if (!container || !sections.length) return;

                const options = {
                    root: null,
                    rootMargin: '0px',
                    threshold: [0, 0.5, 1]
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.intersectionRatio > 0.5) {
                            entry.target.setAttribute('data-visible', 'true');
                        } else {
                            entry.target.setAttribute('data-visible', 'false');
                        }
                    });
                }, options);

                sections.forEach(section => observer.observe(section));
            });
            </script>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_365')) : ?>
        <?php while (have_rows('layout_365')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#590EB7]">
                <div class="container mx-auto">
                    <div class="mb-12 md:mb-18 lg:mb-20">
                        <div class="mx-auto max-w-3xl text-center">
                            <p class="mb-3 font-semibold md:mb-4 text-white">
                                <?php the_sub_field('sub_header'); ?>
                            </p>
                            <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl text-white">
                                <?php the_sub_field('header'); ?>
                            </h2>
                            <p class="md:text-md text-white">
                                <?php the_sub_field('content'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-6 md:gap-8">
                        <div class="grid grid-cols-1 gap-6 md:gap-8 lg:grid-cols-2">
                            <?php if (have_rows('cards')) : ?>
                                <?php $card_count = 0; ?>
                                <?php while (have_rows('cards')) : the_row(); 
                                    $card_count++;
                                    if ($card_count <= 2) : // First two cards
                                ?>
                                    <div class="flex flex-col border border-border-primary md:grid md:grid-cols-2 bg-white">
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
                                                        ?>
                                                            <?php if ($button_one_link) : ?>
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
                                            <?php 
                                            $image = get_sub_field('image');
                                            if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                                     class="w-full object-cover" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php 
                                    elseif ($card_count === 3) : // Large card
                                ?>
                                    <div class="flex flex-col items-stretch border border-border-primary lg:col-start-2 lg:col-end-3 lg:row-start-1 lg:row-end-3 bg-white">
                                        <div class="block flex-1 flex-col items-stretch justify-center p-6 md:p-8 lg:p-12">
                                            <div>
                                                <p class="mb-2 font-semibold"><?php the_sub_field('sub_header'); ?></p>
                                                <h3 class="mb-5 text-3xl font-bold leading-[1.2] md:mb-6 md:text-4xl lg:text-5xl">
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
                                <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_408')) : ?>
        <?php while (have_rows('layout_408')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mx-auto mb-12 w-full max-w-3xl text-center md:mb-18 lg:mb-20">
                        <p class="mb-3 font-semibold md:mb-4">Engagement</p>
                        <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-6xl lg:text-6xl">
                            Enhance Customer Satisfaction
                        </h2>
                        <p class="md:text-md">
                            Enhance your support experience by utilizing our innovative
                            AI-driven solutions, specifically designed to meet your unique needs
                            and requirements. Discover how personalized technology can transform
                            your service and elevate customer satisfaction to new heights.
                        </p>
                    </div>

                    <div class="sticky-scroll-container relative">
                        <?php if (have_rows('cards')) : ?>
                            <?php $card_count = 0; ?>
                            <?php while (have_rows('cards')) : the_row(); 
                                $card_count++;
                            ?>
                                <!-- Mobile Version -->
                                <div class="md:hidden static grid grid-cols-1 content-center overflow-hidden border border-border-primary bg-neutral-white bg-white mb-6">
                                    <div class="order-first flex flex-col justify-center p-6 md:p-8 lg:p-12 <?php echo $card_count % 2 === 0 ? 'md:order-last' : 'md:order-first'; ?>">
                                        <p class="mb-2 font-semibold"><?php the_sub_field('sub_title'); ?></p>
                                        <h2 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">
                                            <?php the_sub_field('title'); ?>
                                        </h2>
                                        <p><?php the_sub_field('content'); ?></p>
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
                                    <div class="order-last flex flex-col items-center justify-center <?php echo $card_count % 2 === 0 ? 'md:order-first' : 'md:order-last'; ?>">
                                        <?php 
                                        $image = get_sub_field('image');
                                        if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="w-full object-cover" />
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Desktop Version -->
                                <div class="hidden md:grid sticky-scroll-section static grid-cols-1 content-center overflow-hidden border border-border-primary bg-neutral-white bg-white md:sticky md:top-[10%] md:mb-[10vh] md:h-[80vh] md:grid-cols-2"
                                     data-section="<?php echo $card_count; ?>"
                                     data-visible="false">
                                    <div class="order-first flex flex-col justify-center p-6 md:p-8 lg:p-12 <?php echo $card_count % 2 === 0 ? 'md:order-last' : 'md:order-first'; ?>">
                                        <p class="mb-2 font-semibold"><?php the_sub_field('sub_title'); ?></p>
                                        <h2 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">
                                            <?php the_sub_field('title'); ?>
                                        </h2>
                                        <p><?php the_sub_field('content'); ?></p>
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
                                    <div class="order-last flex flex-col items-center justify-center <?php echo $card_count % 2 === 0 ? 'md:order-first' : 'md:order-last'; ?>">
                                        <?php 
                                        $image = get_sub_field('image');
                                        if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="w-full object-cover" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const container = document.querySelector('.sticky-scroll-container');
                const sections = document.querySelectorAll('.sticky-scroll-section');
                
                if (!container || !sections.length) return;

                const options = {
                    root: null,
                    rootMargin: '0px',
                    threshold: [0, 0.5, 1]
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.intersectionRatio > 0.5) {
                            entry.target.setAttribute('data-visible', 'true');
                        } else {
                            entry.target.setAttribute('data-visible', 'false');
                        }
                    });
                }, options);

                sections.forEach(section => observer.observe(section));
            });
            </script>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_10')) : ?>
        <?php while (have_rows('layout_10')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#3B93DE] text-white">
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
                                                <?php if (get_sub_field('icon_picker')) : ?>
                                                    <i data-lucide="<?php echo esc_attr(get_sub_field('icon_picker')); ?>" class="size-12 text-white"></i>
                                                <?php endif; ?>
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
                                               class="inline-flex items-center justify-center rounded-lg border border-white px-6 py-3 text-base font-medium text-white hover:bg-white hover:text-[#3B93DE] transition-colors">
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

    <?php if (have_rows('cta_39')) : ?>
        <?php while (have_rows('cta_39')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16 lg:grid-cols-2 lg:items-center">
                        <div>
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
                                     class="w-full object-cover" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</article>