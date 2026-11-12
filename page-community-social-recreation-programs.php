<?php

get_header();
?>
<main id="main-content" class="ps-main">
    <section class="ps-top" aria-label="Programs and services navigation">
        <div class="ps-wrap">
            <h2>Programs &amp; Services</h2>
            <div class="ps-jump-heading">JUMP TO PAGE</div>
            <nav class="ps-jump" aria-label="Programs and Services pages">
                <a href="<?php echo esc_url( home_url('/early-childhood-services/') ); ?>" >Early Childhood Services</a>
                <a href="<?php echo esc_url( home_url('/professional-services/') ); ?>" >Professional Services</a>
                <a href="<?php echo esc_url( home_url('/diagnostic-services/') ); ?>" >Diagnostic Services</a>
                <a class="ps-current" href="<?php echo esc_url( home_url('/community-social-recreation-programs/') ); ?>" aria-current="page">Social Programs</a>
                <a href="<?php echo esc_url( home_url('/independent-living-skills-employment/') ); ?>" >Living Skills & Employment</a>
                <a href="<?php echo esc_url( home_url('/inclusive-post-secondary-education-services/') ); ?>" >IPSE</a>
                <a href="<?php echo esc_url( home_url('/summer-programming/') ); ?>" >Summer Programs</a>
                <a href="<?php echo esc_url( home_url('/rent-our-kitchen-space/') ); ?>" >Kitchen Rental</a>
            </nav>
        </div>
    </section>
    <div class="ps-surface">
        <div class="ps-wrap">
            <nav class="ps-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">›</span>
                <a href="<?php echo esc_url( home_url('/programs-services/') ); ?>">Programs &amp; Services</a><span aria-hidden="true">›</span>
                <span>Community, Social &amp; Recreation Programs</span>
            </nav>
            <section class="ps-hero">
                <div>
                    <h1>Community, Social &amp; Recreation Programs</h1>
                    <p class="ps-lead">Explore programs for children, teens, and young adults.</p>
                </div>
                <?php
                $ps_hero = get_the_post_thumbnail_url( get_queried_object_id(), 'large' );
                if ( ! $ps_hero ) {
                    $ps_hero = get_theme_file_uri( '/assets/images/community.jpg');
                }
                ?>
                <img src="<?php echo esc_url( $ps_hero ); ?>" alt="Community, Social &amp; Recreation Programs" fetchpriority="high">
            </section>

            <section class="ps-intro"><p>CFASA offers a variety of programs for children, teens, and young adults including art, cooking, social programs, sports, and athletics.</p></section>
            <nav class="ps-anchor-tabs" aria-label="Community program categories"><a href="#ps-children">Children Programs</a><a href="#ps-teens">Tween &amp; Teen Programs</a><a href="#ps-adults">Youth &amp; Adult Programs</a></nav>
            <?php
         
            $ps_groups = array(
                'children' => array(
                    'heading' => 'Children Programs',
                    'items' => array(
                        array('Fun With Art', 'ages 6 to 12'), array('Basketballers', 'ages 6 to 12'),
                        array('Kickstart Soccer', 'ages 6 to 12'), array('Multisport', 'ages 6 to 12'),
                        array('Mini Multisport', 'ages 3 to 5'), array('Skating', 'ages 4 to 13'),
                    ),
                ),
                'teens' => array(
                    'heading' => 'Tween & Teen Programs',
                    'items' => array(
                        array('Youth Basketball', 'ages 12 to 17'), array('Spotlight drama program', 'ages 8 to 17'),
                        array('Skating', 'ages 4 to 13'), array('Tween Social Night', 'ages 9 to 12'),
                        array('Just 4 Teens', 'ages 13 to 17'), array('Teen Social Night', 'ages 13 to 17'),
                        array('Exploring Art', 'ages 13 to 17'), array('Shop, Cook & Learn', 'ages 13 to 17'),
                    ),
                ),
                'adults' => array(
                    'heading' => 'Youth & Adult Programs',
                    'items' => array(
                        array('Young Adult Social Night', 'ages 18 to 19'),
                        array('Active for Life', 'ages 16 to 29'),
                        array('Creative Expression', 'ages 18 to 29'),
                    ),
                ),
            );
            $ps_program_posts = get_posts(array(
                'post_type' => 'program', 'post_status' => 'publish',
                'numberposts' => -1,
                'orderby' => 'title', 'order' => 'ASC',
            ));
            foreach ($ps_groups as $ps_group_key => $ps_group) :
            ?>
                <section class="ps-section" id="ps-<?php echo esc_attr($ps_group_key); ?>">
                    <h2><?php echo esc_html($ps_group['heading']); ?></h2>
                    <div class="ps-grid ps-grid--3 ps-program-grid">
                        <?php
                        $ps_group_has_posts = false;
                        foreach ($ps_program_posts as $ps_program) :
                            $ps_name = get_the_title($ps_program->ID);
                            $ps_acf_group = function_exists('get_field') ? get_field('program_type', $ps_program->ID) : '';
                            // Accept 'children', 'teens', 'adults' when your team updates ACF choices.
                            $ps_group_match = is_string($ps_acf_group) && strtolower(trim($ps_acf_group)) === $ps_group_key;
                            // Also accept a matching title before ACF categories are configured.
                            foreach ($ps_group['items'] as $ps_sample) {
                                if (strcasecmp($ps_name, $ps_sample[0]) === 0) { $ps_group_match = true; break; }
                            }
                            if (!$ps_group_match) { continue; }
                            $ps_group_has_posts = true;
                            $ps_age = function_exists('get_field') ? get_field('age_range', $ps_program->ID) : '';
                            $ps_image = function_exists('get_field') ? get_field('program_image', $ps_program->ID) : false;
                            $ps_image_url = '';
                            if (is_array($ps_image)) { $ps_image_url = $ps_image['url'] ?? ''; }
                            elseif (is_numeric($ps_image)) { $ps_image_url = wp_get_attachment_image_url((int)$ps_image, 'medium_large'); }
                            elseif (is_string($ps_image)) { $ps_image_url = $ps_image; }
                            if (!$ps_image_url) { $ps_image_url = get_the_post_thumbnail_url($ps_program->ID, 'medium_large'); }
                        ?>
                            <a class="ps-program-card" href="<?php echo esc_url(get_permalink($ps_program->ID)); ?>" <?php if ($ps_image_url) : ?>style="--program-image:url('<?php echo esc_url($ps_image_url); ?>')"<?php endif; ?>>
                                <strong><?php echo esc_html($ps_name); ?></strong>
                                <?php if ($ps_age) : ?><span><?php echo esc_html($ps_age); ?></span><?php endif; ?>
                                <span class="ps-program-details">Program details <span aria-hidden="true">→</span></span>
                            </a>
                        <?php endforeach; ?>
                        <?php if (!$ps_group_has_posts) : ?>
                            <?php foreach ($ps_group['items'] as $ps_sample) : ?>
                                <article class="ps-program-card ps-program-card--sample">
                                    <strong><?php echo esc_html($ps_sample[0]); ?></strong>
                                    <span><?php echo esc_html($ps_sample[1]); ?></span>
                                    <span class="ps-program-details">Program details coming soon</span>
                                </article>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </section>
            <?php endforeach; ?>
        </div><!-- .ps-wrap -->
    </div><!-- .ps-surface -->
    <aside class="ps-promo" aria-label="Current program promotion">
        <div class="ps-wrap">
            <h2>FALL PROGRAMS NOW OPEN!</h2>
            <p>Meet new friends and try<br> something new this fall!</p>
            <a class="ps-btn ps-btn--dark" href="<?php echo esc_url( home_url('/community-social-recreation-programs/') ); ?>">Explore programs <span aria-hidden="true">→</span></a>
        </div>
    </aside>
<?php

get_footer();
?>
