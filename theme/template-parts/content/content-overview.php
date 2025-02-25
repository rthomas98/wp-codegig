<?php
/**
 * Template part for displaying overview page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_rows('header_110')) : ?>
        <?php while (have_rows('header_110')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#3B93DE] text-white">
                <div class="container mx-auto grid grid-cols-1 gap-12 md:grid-cols-[0.5fr_1fr] md:gap-16">
                    <div class="flex h-full flex-col justify-between">
                        <h2 class="mb-5 text-5xl font-bold md:mb-6 md:text-5xl lg:text-6xl">
                            <?php the_sub_field('header'); ?>
                        </h2>
                        <div class="ml-[7.5%]">
                            <p class="md:text-md">
                                <?php the_sub_field('content'); ?>
                            </p>
                            <?php if (have_rows('buttons')) : ?>
                                <div class="mt-6 flex flex-wrap gap-4 md:mt-8 md:flex-wrap">
                                    <?php while (have_rows('buttons')) : the_row(); 
                                        $button_one_link = get_sub_field('button_one_link');
                                        $button_two_link = get_sub_field('button_two_link');
                                    ?>
                                        <?php if ($button_one_link) : ?>
                                            <a href="<?php echo esc_url($button_one_link); ?>" 
                                               class="inline-flex items-center justify-center rounded-lg bg-white px-6 py-3 text-base font-medium text-[#3B93DE] hover:bg-white/90">
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
                    </div>
                    <div class="grid grid-cols-[1fr_0.75fr] items-start gap-6 sm:gap-8">
                        <div class="w-full">
                            <?php 
                            $image_one = get_sub_field('image_one');
                            if ($image_one) : ?>
                                <div class="flex h-80 w-full flex-col items-center justify-center overflow-hidden">
                                    <img src="<?php echo esc_url($image_one['url']); ?>" 
                                         alt="<?php echo esc_attr($image_one['alt']); ?>"
                                         class="h-full w-full object-cover" />
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="w-full">
                            <?php 
                            $image_two = get_sub_field('image_two');
                            if ($image_two) : ?>
                                <div class="flex h-full w-full flex-col items-center justify-center overflow-hidden">
                                    <img src="<?php echo esc_url($image_two['url']); ?>" 
                                         alt="<?php echo esc_attr($image_two['alt']); ?>"
                                         class="h-full min-h-[320px] w-full object-cover" />
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_250')) : ?>
        <?php while (have_rows('layout_250')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto">
                    <div class="mb-12 md:mb-18 lg:mb-20">
                        <div class="max-w-3xl mx-auto">
                            <h2 class="text-4xl font-bold leading-[1.2] md:text-5xl lg:text-6xl">
                                <?php the_sub_field('header'); ?>
                            </h2>
                        </div>
                    </div>

                    <?php if (have_rows('cards')) : ?>
                        <div class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                            <?php while (have_rows('cards')) : the_row(); 
                                $image = get_sub_field('image');
                            ?>
                                <div class="flex flex-col">
                                    <?php if ($image) : ?>
                                        <div class="mb-6 md:mb-8">
                                            <img src="<?php echo esc_url($image['url']); ?>" 
                                                 alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </div>
                                    <?php endif; ?>
                                    <h3 class="mb-3 text-xl font-bold md:mb-4 md:text-2xl">
                                        <?php the_sub_field('title'); ?>
                                    </h3>
                                    <p>
                                        <?php the_sub_field('content'); ?>
                                    </p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_269')) : ?>
        <?php while (have_rows('layout_269')) : the_row(); ?>
            <section id="relume" class="relative px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container relative z-10 mx-auto">
                    <div class="mx-auto mb-12 max-w-3xl text-center md:mb-18 lg:mb-20">
                        <h2 class="mb-5 text-4xl font-bold leading-[1.2] text-white md:mb-6 md:text-5xl lg:text-6xl">
                            <?php the_sub_field('header'); ?>
                        </h2>
                    </div>
                    
                    <div class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                        <?php if (have_rows('cards')) : ?>
                            <?php while (have_rows('cards')) : the_row(); ?>
                                <div class="w-full text-center">
                                    <div class="mb-5 h-12 md:mb-6">
                                        <div class="inline-block">
                                            <i data-lucide="book-open" class="size-12 text-white"></i>
                                        </div>
                                    </div>
                                    <h3 class="mb-5 text-xl font-bold text-white md:mb-6 md:text-2xl md:leading-[1.4] lg:text-2xl">
                                        <?php the_sub_field('title'); ?>
                                    </h3>
                                    <p class="text-white">
                                        <?php the_sub_field('content'); ?>
                                    </p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="absolute inset-0 z-0">
                    <?php 
                    $image = get_sub_field('image');
                    if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             alt="<?php echo esc_attr($image['alt']); ?>"
                             class="absolute inset-0 size-full object-cover" />
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-black/50"></div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_380')) : ?>
        <?php while (have_rows('layout_380')) : the_row(); ?>
            <section id="relume" class="px-[5%] py-16 md:py-24 lg:py-28 bg-[#FFC952]">
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
                    
                    <div class="grid auto-cols-fr grid-cols-1 gap-6 md:gap-8 lg:grid-cols-2">
                        <!-- Left Column -->
                        <div class="grid auto-cols-fr grid-cols-1 gap-6 md:gap-8">
                            <?php 
                            // First large card
                            if (have_rows('cards')) : 
                                the_row(); // First card
                                $sub_title = get_sub_field('sub_title');
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                $image = get_sub_field('image');
                            ?>
                            <div class="flex flex-col border border-gray-200 sm:col-span-2 bg-white">
                                <div class="block flex-1 p-6 sm:flex sm:flex-col sm:justify-center md:p-8 lg:p-12">
                                    <div>
                                        <p class="mb-2 font-semibold"><?php echo esc_html($sub_title); ?></p>
                                        <h3 class="mb-5 text-3xl font-bold leading-[1.2] md:mb-6 md:text-4xl lg:text-5xl">
                                            <?php echo esc_html($title); ?>
                                        </h3>
                                        <p>
                                            <?php echo esc_html($content); ?>
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
                                <div class="flex w-full flex-col items-center justify-center self-start">
                                    <?php if ($image) : ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" 
                                             alt="<?php echo esc_attr($image['alt']); ?>"
                                             class="w-full object-cover" />
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            
                            <?php 
                            // Second small card
                            if (have_rows('cards')) : 
                                the_row(); // Move to second card
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                $image = get_sub_field('image');
                            ?>
                            <div class="flex flex-col border border-gray-200 bg-white">
                                <div class="flex h-full flex-col justify-between p-6 md:p-8 lg:p-6">
                                    <div>
                                        <div class="mb-3 md:mb-4">
                                            <?php if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                                     class="size-12 object-contain" />
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="mb-2 text-xl font-bold md:text-2xl">
                                            <?php echo esc_html($title); ?>
                                        </h3>
                                        <p><?php echo esc_html($content); ?></p>
                                    </div>
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
                            <?php endif; ?>
                            
                            <?php 
                            // Third small card
                            if (have_rows('cards')) : 
                                the_row(); // Move to third card
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                $image = get_sub_field('image');
                            ?>
                            <div class="flex flex-col border border-gray-200 bg-white">
                                <div class="flex h-full flex-col justify-between p-6 md:p-8 lg:p-6">
                                    <div>
                                        <div class="mb-3 md:mb-4">
                                            <?php if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" 
                                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                                     class="size-12 object-contain" />
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="mb-2 text-xl font-bold md:text-2xl">
                                            <?php echo esc_html($title); ?>
                                        </h3>
                                        <p><?php echo esc_html($content); ?></p>
                                    </div>
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
                            <?php endif; ?>
                        </div>
                        
                        <!-- Right Column -->
                        <div class="grid auto-cols-fr grid-cols-1 gap-6 md:gap-8">
                            <?php 
                            // Fourth card - image with text
                            if (have_rows('cards')) : 
                                the_row(); // Move to fourth card
                                $sub_title = get_sub_field('sub_title');
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                $image = get_sub_field('image');
                            ?>
                            <div class="flex flex-col border border-gray-200 sm:col-span-2 sm:grid sm:auto-cols-fr sm:grid-cols-2 bg-white">
                                <?php if ($image) : ?>
                                    <div class="flex h-full w-full items-center justify-center">
                                        <img src="<?php echo esc_url($image['url']); ?>" 
                                             alt="<?php echo esc_attr($image['alt']); ?>"
                                             class="h-full w-full object-cover" />
                                    </div>
                                <?php endif; ?>
                                <div class="block flex-col justify-center p-6 sm:flex">
                                    <div>
                                        <p class="mb-2 font-semibold"><?php echo esc_html($sub_title); ?></p>
                                        <h3 class="mb-2 text-xl font-bold md:text-2xl">
                                            <?php echo esc_html($title); ?>
                                        </h3>
                                        <p><?php echo esc_html($content); ?></p>
                                    </div>
                                    <?php if (have_rows('buttons')) : ?>
                                        <div class="mt-5 md:mt-6">
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
                            <?php endif; ?>
                            
                            <?php 
                            // Fifth card - large card
                            if (have_rows('cards')) : 
                                the_row(); // Move to fifth card
                                $sub_title = get_sub_field('sub_title');
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                $image = get_sub_field('image');
                            ?>
                            <div class="flex flex-col border border-gray-200 sm:col-span-2 bg-white">
                                <div class="block flex-1 p-6 sm:flex sm:flex-col sm:justify-center md:p-8 lg:p-12">
                                    <div>
                                        <p class="mb-2 font-semibold"><?php echo esc_html($sub_title); ?></p>
                                        <h3 class="mb-5 text-3xl font-bold leading-[1.2] md:mb-6 md:text-4xl lg:text-5xl">
                                            <?php echo esc_html($title); ?>
                                        </h3>
                                        <p><?php echo esc_html($content); ?></p>
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
                                <?php if ($image) : ?>
                                    <div class="h-64 w-full md:h-96">
                                        <img src="<?php echo esc_url($image['url']); ?>" 
                                             alt="<?php echo esc_attr($image['alt']); ?>"
                                             class="h-full w-full object-cover" />
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('layout_406')) : ?>
        <?php while (have_rows('layout_406')) : the_row(); ?>
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
                    
                    <?php if (have_rows('cards')) : 
                        // Store all tabs data
                        $tabs = array();
                        while (have_rows('cards')) : the_row();
                            $tabs[] = array(
                                'title' => get_sub_field('title'),
                                'content' => get_sub_field('content'),
                                'image' => get_sub_field('image')
                            );
                        endwhile;
                        
                        // Only proceed if we have tabs
                        if (!empty($tabs)) :
                            $tab_id = 'tabs-' . uniqid();
                    ?>
                    <div class="tabs-container" id="<?php echo esc_attr($tab_id); ?>">
                        <div class="tabs-list mb-12 flex flex-col md:mb-16 md:flex-row">
                            <?php foreach ($tabs as $index => $tab) : 
                                $is_active = ($index === 0) ? 'active' : '';
                                $tab_value = 'tab-' . ($index + 1);
                            ?>
                                <button 
                                    class="tab-trigger flex w-full flex-col gap-1 whitespace-normal border-0 border-b-[1.5px] border-gray-200 px-6 py-4 text-center <?php echo $is_active; ?>" 
                                    data-tab="<?php echo esc_attr($tab_value); ?>">
                                    <h3 class="text-md font-bold leading-[1.4] md:text-xl">
                                        <?php echo esc_html($tab['title']); ?>
                                    </h3>
                                    <p>
                                        <?php echo esc_html($tab['content']); ?>
                                    </p>
                                </button>
                            <?php endforeach; ?>
                        </div>
                        
                        <div class="tabs-content">
                            <?php foreach ($tabs as $index => $tab) : 
                                $is_active = ($index === 0) ? 'active' : '';
                                $tab_value = 'tab-' . ($index + 1);
                            ?>
                                <div class="tab-panel <?php echo $is_active; ?>" data-tab="<?php echo esc_attr($tab_value); ?>">
                                    <div class="mx-auto max-w-4xl">
                                        <?php if (!empty($tab['image'])) : ?>
                                            <img src="<?php echo esc_url($tab['image']['url']); ?>" 
                                                 alt="<?php echo esc_attr($tab['image']['alt']); ?>"
                                                 class="mx-auto h-auto w-full max-w-3xl object-cover" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const tabsContainer = document.getElementById('<?php echo esc_js($tab_id); ?>');
                        if (!tabsContainer) return;
                        
                        const tabTriggers = tabsContainer.querySelectorAll('.tab-trigger');
                        const tabPanels = tabsContainer.querySelectorAll('.tab-panel');
                        
                        // Add click event to each tab trigger
                        tabTriggers.forEach(trigger => {
                            trigger.addEventListener('click', function() {
                                const tabValue = this.getAttribute('data-tab');
                                
                                // Remove active class from all triggers and panels
                                tabTriggers.forEach(t => t.classList.remove('active'));
                                tabPanels.forEach(p => p.classList.remove('active'));
                                
                                // Add active class to clicked trigger and corresponding panel
                                this.classList.add('active');
                                tabsContainer.querySelector(`.tab-panel[data-tab="${tabValue}"]`).classList.add('active');
                            });
                        });
                    });
                    </script>
                    
                    <style>
                    /* Tab Styling */
                    .tabs-container .tab-trigger {
                        transition: all 0.3s ease;
                    }
                    
                    .tabs-container .tab-trigger.active {
                        border-bottom-color: #590EB7;
                        color: #590EB7;
                    }
                    
                    .tabs-container .tab-panel {
                        display: none;
                        animation: fadeIn 0.5s ease forwards;
                    }
                    
                    .tabs-container .tab-panel.active {
                        display: block;
                    }
                    
                    @keyframes fadeIn {
                        from { opacity: 0; }
                        to { opacity: 1; }
                    }
                    </style>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
   <?php endif; ?>

    <?php if (have_rows('cta_39')) : ?>
        <?php while (have_rows('cta_39')) : the_row(); ?>
            <section id="relume" class="bg-[#590EB7] px-[5%] py-16 md:py-24 lg:py-28">
                <div class="container mx-auto grid w-full grid-cols-1 items-start justify-between gap-6 md:grid-cols-[1fr_max-content] md:gap-x-12 md:gap-y-8 lg:gap-x-20">
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
                                       class="inline-flex items-center justify-center rounded-lg bg-white px-6 py-3 text-base font-medium text-[#590EB7] hover:bg-white/90">
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
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

</article>