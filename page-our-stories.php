<?php get_header(); ?>
<?php get_template_part('parts/about-header'); ?>

<section class="stories-container">
    <div class="featured-story">

    </div>
    <div class="stories-grid">
            <?php
            $stories = new WP_Query(array(
                'post_type' => 'our-story',
                'posts_per_page' => -1
            ));

            if ($stories->have_posts()) :
                while ($stories->have_posts()) :
                    $stories->the_post();

                    get_template_part('parts/story-card');

                endwhile;

                wp_reset_postdata();
            endif;
            ?>
        </div>
</section>

<section>
    <div>
        <h2>Volunteer Stories</h2>
    </div>
    <div>
        <button>View Featured Volunteers</button>
    </div>
</section>

<?php get_footer(); ?>