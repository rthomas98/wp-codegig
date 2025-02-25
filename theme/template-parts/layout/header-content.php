<?php
/**
 * Template part for displaying the header content
 */

?>

<header id="masthead" class="site-header">
    <div class="header-container p-4">
        <div class="brand-container">
            <div class="brand-wrapper">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/codegig-logo.svg'); ?>" 
                         alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                         class="custom-logo"
                         width="32"
                         height="32">
                </a>
                <span class="brand-text">Codegig</span>
            </div>

            <div class="mobile-controls">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <div class="primary-menu-container">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'primary-menu',
                    'container'      => false,
                    'walker'         => new Custom_Walker_Nav_Menu(),
                )
            );
            ?>

            <?php $header_cta_link = get_field('header_cta_link', 'option'); ?>
            <?php if (get_field('header_cta_label', 'option') && $header_cta_link) : ?>
                <div class="mobile-menu-cta">
                    <a href="<?php echo esc_url($header_cta_link); ?>" class="button button-primary">
                        <?php echo esc_html(get_field('header_cta_label', 'option')); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <?php $header_cta_link = get_field('header_cta_link', 'option'); ?>
        <?php if (get_field('header_cta_label', 'option') && $header_cta_link) : ?>
            <div class="header-cta">
                <a href="<?php echo esc_url($header_cta_link); ?>" class="button button-primary">
                    <?php echo esc_html(get_field('header_cta_label', 'option')); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</header>
