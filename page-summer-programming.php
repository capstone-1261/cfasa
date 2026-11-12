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
                <a href="<?php echo esc_url( home_url('/community-social-recreation-programs/') ); ?>" >Social Programs</a>
                <a href="<?php echo esc_url( home_url('/independent-living-skills-employment/') ); ?>" >Living Skills & Employment</a>
                <a href="<?php echo esc_url( home_url('/inclusive-post-secondary-education-services/') ); ?>" >IPSE</a>
                <a class="ps-current" href="<?php echo esc_url( home_url('/summer-programming/') ); ?>" aria-current="page">Summer Programs</a>
                <a href="<?php echo esc_url( home_url('/rent-our-kitchen-space/') ); ?>" >Kitchen Rental</a>
            </nav>
        </div>
    </section>
    <div class="ps-surface">
        <div class="ps-wrap">
            <nav class="ps-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">›</span>
                <a href="<?php echo esc_url( home_url('/programs-services/') ); ?>">Programs &amp; Services</a><span aria-hidden="true">›</span>
                <span>Summer Programming</span>
            </nav>
            <section class="ps-hero">
                <div>
                    <h1>Summer Programming</h1>
                    <p class="ps-lead">This summer, join us for a season full of fun, friendship, and new experiences!</p>
                </div>
                <?php
                $ps_hero = get_the_post_thumbnail_url( get_queried_object_id(), 'large' );
                if ( ! $ps_hero ) {
                    $ps_hero = get_theme_file_uri( '/assets/images/summer.jpg');
                }
                ?>
                <img src="<?php echo esc_url( $ps_hero ); ?>" alt="Summer Programming" fetchpriority="high">
            </section>

            <section class="ps-intro"><p>Our summer programming (respite) is designed for children and teens to stay active, engaged, and creative while school is out. With a mix of indoor and outdoor activities, hands-on projects, and group games, each day offers something new to explore in a safe and supportive environment.</p><p>It’s the perfect way to build confidence, make new friends, and enjoy everything summer has to offer. All CFASA summer programs are supervised by Centre-trained aides and employ a high staff-to-participant ratio.</p></section>
            <section class="ps-highlight ps-highlight--cream ps-space"><h2 class="ps-caps">OUR SUMMER PROGRAMS</h2><div class="ps-stack">
                <article class="ps-linkcard"><div><h3>Little Aces Summer Respite</h3><p>Edmonton (ages 3 to 5)</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Learn more <span aria-hidden="true">→</span></a></article>
                <article class="ps-linkcard"><div><h3>Junior Ace Summer Respite</h3><p>Edmonton (ages 6 to 8)</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Learn more <span aria-hidden="true">→</span></a></article>
                <article class="ps-linkcard"><div><h3>Senior Ace Summer Respite</h3><p>Edmonton (ages 9 to 12)</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Learn more <span aria-hidden="true">→</span></a></article>
                <article class="ps-linkcard"><div><h3>Teen Summer Programming (Respite)</h3><p>Edmonton (ages 13 to 17)</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Learn more <span aria-hidden="true">→</span></a></article>
            </div></section>
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
