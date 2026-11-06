<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!-- Skip link for keyboard accessibility -->
    <a class="skip-link" href="#main-content">
        Skip to content
    </a>

    <!-- Site Header -->
    <header class="topbar site-header">

        <div class="container header-inner header-container">
            <!-- Site Logo -->
            <div class="site-branding">

                <?php if (has_custom_logo()) : ?>

                <?php the_custom_logo(); ?>

                <?php else : ?>


                <a class="brand" href="<?php echo 
                esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>.
                </a>

                <?php endif; ?>

            </div>

            <!-- Mobile Navigation Toggle -->
            <button class="menu-toggle" id="menu-toggle" type="button"
                aria-label="<?php esc_attr_e('Toggle navigation', 'newsivo'); ?>" aria-controls="main-navigation"
                aria-expanded="false">
                <span id="menu-icon" aria-hidden="true">☰</span>
            </button>

            <!-- Primary Navigation -->
            <nav class="main-navigation" id="main-navigation"
                aria-label="<?php esc_attr_e('Primary navigation', 'newsivo'); ?>">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'menu',
                    'fallback_cb' => false,
                    'depth' => 2,
                ));
                ?>

            </nav>

        </div>

    </header>

    <!-- Breaking News Ticker -->
    <div class="news-ticker">
        <div class="ticker-label">
            Breaking News
        </div>
        <div class="ticker-content">
            <div class="ticker-track">
                <!-- Original ticker content -->
                <div class="ticker-sequence">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        Latest updates from around the world
                    </a>

                    <span aria-hidden="true">•</span>

                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        Technology continues to transform industries
                    </a>

                    <span aria-hidden="true">•</span>

                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        Global markets see new developments
                    </a>

                    <span aria-hidden="true">•</span>

                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        Major sporting events make headlines
                    </a>

                    <span aria-hidden="true">•</span>
                </div>
            </div>
        </div>
    </div>