<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">

        <!-- Website Logo -->
        <div class="site-logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
                <?php
            }
            ?>
        </div>

        <!-- Main Navigation -->
        <nav class="main-navigation" aria-label="Main navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-nav',
                'container' => false,
                'menu_class' => 'nav-menu',
                'fallback_cb' => false
            ));
            ?>
        </nav>

    </div>
</header>