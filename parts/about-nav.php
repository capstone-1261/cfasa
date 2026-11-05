<main>
<h1><?php the_title(); ?></h1>

<section class="about-nav-container">
    <div>
        <?php get_template_part('parts/breadcrumb'); ?>
        <div class="about-nav">
            <h2 class="about-nav-sub">JUMP TO SECTION</h2>

           <nav class="about-us-navigation" aria-label="About us navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'about-nav',
                'container' => false,
                'menu_class' => 'about-us-nav',
                'fallback_cb' => false
            ));
            ?>
        </nav>
        </div>
    </div>
</section>