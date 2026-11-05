<?php block_template_part('header'); ?>

<main>

    <?php
    if (have_posts()) {

        while (have_posts()) {
            the_post();

            the_content();
        }

    }
    ?>

    <p>This is a test</p>
</main>

<?php get_footer(); ?>