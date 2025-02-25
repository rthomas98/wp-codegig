<?php
/**
 * Template part for displaying about page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_78')) : ?>
        <?php while (have_rows('header_78')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container flex flex-col items-center mx-auto">
                    <div class="mb-12 max-w-3xl text-center md:mb-18 lg:mb-20">
                        <h1 class="mb-5 text-6xl font-bold md:mb-6 md:text-6xl lg:text-7xl">
                            <?php the_sub_field('header'); ?>
                        </h1>
                        <p class="md:text-md">
                            <?php the_sub_field('content'); ?>
                        </p>
                        <?php if (have_rows('buttons')) : ?>
                            <div class="mt-6 flex items-center justify-center gap-x-4 md:mt-8">
                                <?php while (have_rows('buttons')) : the_row(); ?>
                                    <?php 
                                    $button_one_label = get_sub_field('button_one_label');
                                    $button_one_link = get_sub_field('button_one_link');
                                    $button_two_label = get_sub_field('button_two_label');
                                    $button_two_link = get_sub_field('button_two_link');
                                    ?>
                                    <?php if ($button_one_link) : ?>
                                        <a href="<?php echo esc_url($button_one_link); ?>" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-[#590EB7] hover:bg-[#590EB7]/90 rounded-lg">
                                            <?php echo esc_html($button_one_label); ?>
                                        </a>
                                    <?php endif; ?>
                                    <?php if ($button_two_link) : ?>
                                        <a href="<?php echo esc_url($button_two_link); ?>" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-[#590EB7] bg-transparent border border-[#590EB7] hover:bg-[#590EB7]/10 rounded-lg">
                                            <?php echo esc_html($button_two_label); ?>
                                        </a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="flex w-screen justify-start overflow-hidden">
                        <div class="grid shrink-0 grid-cols-1 gap-y-4">
                            <!-- Top Marquee -->
                            <div class="grid w-full animate-marquee-top auto-cols-fr grid-cols-2 gap-4 self-center">
                                <?php for ($i = 0; $i < 2; $i++) : ?>
                                    <div class="grid w-full grid-flow-col gap-4">
                                        <?php 
                                        $images = get_sub_field('images');
                                        if ($images) :
                                            foreach ($images as $image) : ?>
                                                <div class="relative w-[60vw] pt-[75%] sm:w-[18rem] md:w-[26rem]">
                                                    <img class="absolute inset-0 size-full object-cover" 
                                                         src="<?php echo esc_url($image['url']); ?>"
                                                         alt="<?php echo esc_attr($image['alt']); ?>" />
                                                </div>
                                            <?php endforeach; 
                                        endif; ?>
                                    </div>
                                <?php endfor; ?>
                            </div>

                            <!-- Bottom Marquee -->
                            <div class="grid w-full animate-marquee-bottom grid-cols-2 gap-4 self-center">
                                <?php for ($i = 0; $i < 2; $i++) : ?>
                                    <div class="grid w-full grid-flow-col gap-4">
                                        <?php 
                                        if ($images) :
                                            foreach ($images as $image) : ?>
                                                <div class="relative w-[60vw] pt-[75%] sm:w-[18rem] md:w-[26rem]">
                                                    <img class="absolute inset-0 size-full object-cover" 
                                                         src="<?php echo esc_url($image['url']); ?>"
                                                         alt="<?php echo esc_attr($image['alt']); ?>" />
                                                </div>
                                            <?php endforeach; 
                                        endif; ?>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_423')) : ?>
        <?php while (have_rows('layout_423')) : the_row(); ?>
            <section id="relume" class="relative isolate px-[5%] py-16 md:py-24 lg:py-28">
                <div class="absolute inset-0 -z-10"></div>
                <div class="container mx-auto">
                    <div class="mx-auto mb-12 w-full max-w-3xl text-center md:mb-18 lg:mb-20">
                        <p class="mb-3 font-semibold md:mb-4"><?php the_sub_field('sub_header'); ?></p>
                        <h2 class="mb-5 text-4xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                            <?php the_sub_field('header'); ?>
                        </h2>
                        <p class="md:text-md"><?php the_sub_field('content'); ?></p>
                    </div>

                    <?php if (have_rows('cards')) : ?>
                        <div class="flex flex-col justify-between gap-6 md:gap-8 lg:flex-row">
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <div class="group relative flex w-full flex-col overflow-hidden lg:h-full lg:w-1/3 lg:transition-all lg:duration-500 lg:hover:w-[70%]">
                                    <div class="absolute inset-0 flex size-full flex-col items-center justify-center self-start">
                                        <div class="absolute inset-0 bg-black/50"></div>
                                        <?php 
                                        $image = get_sub_field('image');
                                        if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="h-full w-full object-cover" />
                                        <?php endif; ?>
                                    </div>

                                    <div class="relative flex h-full min-h-[70vh] flex-col justify-end p-6 md:p-8">
                                        <div class="lg:absolute lg:inset-0 lg:z-0 lg:transition-all lg:duration-300 lg:group-hover:bg-black/50"></div>
                                        <div class="z-10">
                                            <p class="mb-2 font-semibold text-white"><?php the_sub_field('sub_title'); ?></p>
                                            <h3 class="text-2xl font-bold text-white md:text-3xl md:leading-[1.3] lg:text-4xl">
                                                <?php the_sub_field('title'); ?>
                                            </h3>

                                            <div class="lg:hidden">
                                                <p class="mt-5 text-white md:mt-6"><?php the_sub_field('content'); ?></p>
                                                <?php if (have_rows('buttons')) : ?>
                                                    <?php while (have_rows('buttons')) : the_row(); ?>
                                                        <?php 
                                                        $button_one_label = get_sub_field('button_one_label');
                                                        $button_one_link = get_sub_field('button_one_link');
                                                        if ($button_one_label && $button_one_link) : ?>
                                                            <div class="mt-6 md:mt-8">
                                                                <a href="<?php echo esc_url($button_one_link); ?>" 
                                                                   class="inline-flex items-center gap-2 font-semibold text-white transition hover:text-white/70">
                                                                    <?php echo esc_html($button_one_label); ?>
                                                                    <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="z-10 hidden translate-y-4 opacity-0 transition-all duration-300 lg:block lg:w-[340px] group-hover:translate-y-0 group-hover:opacity-100">
                                            <p class="mt-5 text-white md:mt-6"><?php the_sub_field('content'); ?></p>
                                            <?php if (have_rows('buttons')) : ?>
                                                <?php while (have_rows('buttons')) : the_row(); ?>
                                                    <?php 
                                                    $button_one_label = get_sub_field('button_one_label');
                                                    $button_one_link = get_sub_field('button_one_link');
                                                    if ($button_one_label && $button_one_link) : ?>
                                                        <div class="mt-6 md:mt-8">
                                                            <a href="<?php echo esc_url($button_one_link); ?>" 
                                                               class="inline-flex items-center gap-2 font-semibold text-white transition hover:text-white/70">
                                                                <?php echo esc_html($button_one_label); ?>
                                                                <i data-lucide="chevron-right" class="h-4 w-4"></i>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_142')) : ?>
        <?php while (have_rows('layout_142')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#FFC952]">
                <div class="container mx-auto">
                    <div class="mb-12 md:mb-18 lg:mb-20">
                        <div class="mx-auto flex max-w-3xl flex-col items-center text-center">
                            <h2 class="mb-5 text-4xl font-bold leading-[1.2] md:mb-6 md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                        </div>
                    </div>
                    <div>
                        <?php 
                        $image = get_sub_field('image');
                        if ($image) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>" 
                                 class="mx-auto h-auto max-w-4xl w-full object-cover rounded-lg" />
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('team_6')) : ?>
        <?php while (have_rows('team_6')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mx-auto mb-12 max-w-3xl text-center md:mb-18 lg:mb-20">
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

                    <?php if (have_rows('member')) : ?>
                        <div class="grid grid-cols-1 items-start justify-center gap-x-8 gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                            <?php while (have_rows('member')) : the_row(); 
                                $member_image = get_sub_field('image');
                            ?>
                                <div class="flex flex-col text-center">
                                    <div class="mb-5 flex w-full items-center justify-center md:mb-6">
                                        <?php if ($member_image) : ?>
                                            <img src="<?php echo esc_url($member_image['url']); ?>" 
                                                 alt="<?php echo esc_attr($member_image['alt']); ?>" 
                                                 class="aspect-square size-full object-cover" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3 md:mb-4">
                                        <h5 class="text-md font-semibold md:text-lg">
                                            <?php the_sub_field('name'); ?>
                                        </h5>
                                        <h6 class="md:text-md">
                                            <?php the_sub_field('position'); ?>
                                        </h6>
                                    </div>
                                    <p><?php the_sub_field('content'); ?></p>
                                    
                                    <?php if (have_rows('social')) : ?>
                                        <div class="mt-6 grid grid-flow-col grid-cols-[max-content] gap-[0.875rem] self-center">
                                            <?php while (have_rows('social')) : the_row();
                                                $link = get_sub_field('link');
                                                if ($link) : ?>
                                                    <a href="<?php echo esc_url($link['url']); ?>" 
                                                       target="<?php echo esc_attr($link['target']); ?>"
                                                       class="text-gray-600 hover:text-gray-900">
                                                        <i data-lucide="<?php echo get_sub_field('icon_picker'); ?>" class="size-6"></i>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('faq_6')) : ?>
        <?php while (have_rows('faq_6')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#3B93DE] text-white">
                <div class="container mx-auto grid grid-cols-1 gap-y-12 md:grid-cols-2 md:gap-x-12 lg:grid-cols-[.75fr,1fr] lg:gap-x-20">
                    <div>
                        <h2 class="mb-5 text-5xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                            <?php the_sub_field('header'); ?>
                        </h2>
                        <p class="md:text-md">
                            <?php the_sub_field('content'); ?>
                        </p>
                        <?php if (have_rows('buttons')) : ?>
                            <?php while (have_rows('buttons')) : the_row(); 
                                $button_one_link = get_sub_field('button_one_link');
                                if ($button_one_link) : ?>
                                    <div class="mt-6 md:mt-8">
                                        <a href="<?php echo esc_url($button_one_link); ?>" 
                                           class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-transparent border border-white hover:bg-white/10 rounded-lg">
                                            <?php the_sub_field('button_one_label'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <?php if (have_rows('faqs')) : ?>
                        <div class="grid items-start justify-stretch gap-4">
                            <?php 
                            $faq_counter = 0;
                            while (have_rows('faqs')) : the_row(); 
                                $faq_id = 'faq-' . $faq_counter;
                            ?>
                                <div class="faq-item border border-white/20 px-5 md:px-6">
                                    <button class="faq-trigger flex w-full items-center justify-between py-4 text-left md:py-5 md:text-md">
                                        <?php the_sub_field('question'); ?>
                                        <i data-lucide="chevron-down" class="faq-icon size-7 shrink-0 transition-transform duration-300 md:size-8"></i>
                                    </button>
                                    <div class="faq-content hidden pb-4 md:pb-6">
                                        <?php the_sub_field('answer'); ?>
                                    </div>
                                </div>
                            <?php 
                                $faq_counter++;
                            endwhile; ?>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const faqItems = document.querySelectorAll('.faq-item');
                                
                                faqItems.forEach(item => {
                                    const trigger = item.querySelector('.faq-trigger');
                                    const content = item.querySelector('.faq-content');
                                    const icon = item.querySelector('.faq-icon');
                                    
                                    trigger.addEventListener('click', () => {
                                        const isOpen = content.classList.contains('hidden');
                                        
                                        // Close all other FAQs
                                        faqItems.forEach(otherItem => {
                                            if (otherItem !== item) {
                                                otherItem.querySelector('.faq-content').classList.add('hidden');
                                                otherItem.querySelector('.faq-icon').classList.remove('rotate-180');
                                            }
                                        });
                                        
                                        // Toggle current FAQ
                                        content.classList.toggle('hidden');
                                        if (isOpen) {
                                            icon.classList.add('rotate-180');
                                        } else {
                                            icon.classList.remove('rotate-180');
                                        }
                                    });
                                });
                            });
                        </script>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</article>
