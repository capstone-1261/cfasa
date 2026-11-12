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
                <a href="<?php echo esc_url( home_url('/summer-programming/') ); ?>" >Summer Programs</a>
                <a href="<?php echo esc_url( home_url('/rent-our-kitchen-space/') ); ?>" >Kitchen Rental</a>
            </nav>
        </div>
    </section>
    <section class="ps-overview-hero"><div class="ps-wrap"><h1>PROGRAMS &amp; SERVICES</h1></div></section>
    <section class="ps-wrap ps-overview-grid" aria-label="Explore programs and services">
        <?php
        $ps_page = get_page_by_path('early-childhood-services');
        $ps_tile_image = $ps_page ? get_the_post_thumbnail_url($ps_page->ID, 'large') : '';
        if (!$ps_tile_image) { $ps_tile_image = get_theme_file_uri('/assets/images/early-childhood.jpg'); }
        ?>
        <a class="ps-tile " href="<?php echo esc_url(home_url('/early-childhood-services/')); ?>" style="--tile-image:url('<?php echo esc_url($ps_tile_image); ?>')">
            <span class="ps-tile-inner"><strong>Early Childhood Services</strong><span>CFASA offers early childhood services for children with developmental disabilities in Edmonton and Calgary.</span><span class="ps-tile-cta">Register <span aria-hidden="true">→</span></span></span>
        </a>
        <?php
        $ps_page = get_page_by_path('professional-services');
        $ps_tile_image = $ps_page ? get_the_post_thumbnail_url($ps_page->ID, 'large') : '';
        if (!$ps_tile_image) { $ps_tile_image = get_theme_file_uri('/assets/images/professional.jpg'); }
        ?>
        <a class="ps-tile " href="<?php echo esc_url(home_url('/professional-services/')); ?>" style="--tile-image:url('<?php echo esc_url($ps_tile_image); ?>')">
            <span class="ps-tile-inner"><strong>Professional Services</strong><span>Support for behaviour, communication, social skills, and everyday living.</span><span class="ps-tile-cta">Learn more <span aria-hidden="true">→</span></span></span>
        </a>
        <?php
        $ps_page = get_page_by_path('diagnostic-services');
        $ps_tile_image = $ps_page ? get_the_post_thumbnail_url($ps_page->ID, 'large') : '';
        if (!$ps_tile_image) { $ps_tile_image = get_theme_file_uri('/assets/images/diagnostic.jpg'); }
        ?>
        <a class="ps-tile " href="<?php echo esc_url(home_url('/diagnostic-services/')); ?>" style="--tile-image:url('<?php echo esc_url($ps_tile_image); ?>')">
            <span class="ps-tile-inner"><strong>Diagnostic Services</strong><span>Respectful, culturally responsive autism assessments for children.</span><span class="ps-tile-cta">Learn more <span aria-hidden="true">→</span></span></span>
        </a>
        <?php
        $ps_page = get_page_by_path('community-social-recreation-programs');
        $ps_tile_image = $ps_page ? get_the_post_thumbnail_url($ps_page->ID, 'large') : '';
        if (!$ps_tile_image) { $ps_tile_image = get_theme_file_uri('/assets/images/community.jpg'); }
        ?>
        <a class="ps-tile " href="<?php echo esc_url(home_url('/community-social-recreation-programs/')); ?>" style="--tile-image:url('<?php echo esc_url($ps_tile_image); ?>')">
            <span class="ps-tile-inner"><strong>Community, Social &amp; Recreation Programs</strong><span>Art, cooking, social activities, sports, and athletics.</span><span class="ps-tile-cta">Learn more <span aria-hidden="true">→</span></span></span>
        </a>
        <?php
        $ps_page = get_page_by_path('independent-living-skills-employment');
        $ps_tile_image = $ps_page ? get_the_post_thumbnail_url($ps_page->ID, 'large') : '';
        if (!$ps_tile_image) { $ps_tile_image = get_theme_file_uri('/assets/images/living.jpg'); }
        ?>
        <a class="ps-tile " href="<?php echo esc_url(home_url('/independent-living-skills-employment/')); ?>" style="--tile-image:url('<?php echo esc_url($ps_tile_image); ?>')">
            <span class="ps-tile-inner"><strong>Independent Living Skills &amp; Employment</strong><span>Community access, home living support, and employment resources.</span><span class="ps-tile-cta">Learn more <span aria-hidden="true">→</span></span></span>
        </a>
        <?php
        $ps_page = get_page_by_path('inclusive-post-secondary-education-services');
        $ps_tile_image = $ps_page ? get_the_post_thumbnail_url($ps_page->ID, 'large') : '';
        if (!$ps_tile_image) { $ps_tile_image = get_theme_file_uri('/assets/images/ipse.jpg'); }
        ?>
        <a class="ps-tile " href="<?php echo esc_url(home_url('/inclusive-post-secondary-education-services/')); ?>" style="--tile-image:url('<?php echo esc_url($ps_tile_image); ?>')">
            <span class="ps-tile-inner"><strong>Inclusive Post-Secondary Education Services</strong><span>Personalized support for post-secondary education and career goals.</span><span class="ps-tile-cta">Learn more <span aria-hidden="true">→</span></span></span>
        </a>
        <?php
        $ps_page = get_page_by_path('summer-programming');
        $ps_tile_image = $ps_page ? get_the_post_thumbnail_url($ps_page->ID, 'large') : '';
        if (!$ps_tile_image) { $ps_tile_image = get_theme_file_uri('/assets/images/summer.jpg'); }
        ?>
        <a class="ps-tile " href="<?php echo esc_url(home_url('/summer-programming/')); ?>" style="--tile-image:url('<?php echo esc_url($ps_tile_image); ?>')">
            <span class="ps-tile-inner"><strong>Summer Programming</strong><span>Fun and friendship with supervised summer respite programs.</span><span class="ps-tile-cta">Learn more <span aria-hidden="true">→</span></span></span>
        </a>
        <?php
        $ps_page = get_page_by_path('rent-our-kitchen-space');
        $ps_tile_image = $ps_page ? get_the_post_thumbnail_url($ps_page->ID, 'large') : '';
        if (!$ps_tile_image) { $ps_tile_image = get_theme_file_uri('/assets/images/kitchen.jpg'); }
        ?>
        <a class="ps-tile ps-tile--kitchen" href="<?php echo esc_url(home_url('/rent-our-kitchen-space/')); ?>" style="--tile-image:url('<?php echo esc_url($ps_tile_image); ?>')">
            <span class="ps-tile-inner"><strong>Rent Our Kitchen Space!</strong><span>Rent Centre 104’s kitchen for workshops, events, and celebrations.</span><span class="ps-tile-cta">Learn more <span aria-hidden="true">→</span></span></span>
        </a>
    </section>
<?php

get_footer();
?>
