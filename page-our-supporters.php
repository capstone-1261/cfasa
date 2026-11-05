<?php get_header(); ?>
<?php get_template_part('parts/about-header'); ?>

<section class="supporters-container">
    <h2>Thank you to our funders!</h2>
        <div class="supporters-grid">
            <?php
            $supporters = new WP_Query(array(
                'post_type' => 'supporters',
                'posts_per_page' => -1
            ));

            if ($supporters->have_posts()) :
                while ($supporters->have_posts()) :
                    $supporters->the_post();

                    get_template_part('parts/supporter-image');

                endwhile;

                wp_reset_postdata();
            endif;
            ?>
        </div>
    <div class="cad-ab-disclaimer">
        /* Canada and Alberta logos go here */
        <div class="cad-ab-text">
            <p>Our athletic programs are made possible in part by the Government of Canada through the Community Sport for All Initiative.</p>
            <p>Notre programmes athletiques a été rendu possible en part grâce au gouvernement du Canada par l’entremise de l’initiative Le sport communautaire pour tous.</p>
        </div>
    </div>
</section>

<section class="partners-container">
    <h2>Thank you to our community partners!</h2>
        <div class="partners-grid">
            <?php
            $partners = new WP_Query(array(
                'post_type' => 'partners',
                'posts_per_page' => -1
            ));

            if ($partners->have_posts()) :
                while ($partners->have_posts()) :
                    $partners->the_post();

                    get_template_part('parts/partner-image');

                endwhile;

                wp_reset_postdata();
            endif;
            ?>
        </div>
</section>

<?php get_footer(); ?>