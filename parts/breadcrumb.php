<nav aria-label="Breadcrumb">
    <ol class="breadcrumbs">
        <?php
        $ancestors = array_reverse(get_post_ancestors(get_the_ID()));

        foreach ($ancestors as $ancestor) {
        ?>
            <li>
                <a href="<?php echo esc_url(get_permalink($ancestor)); ?>">
                    <?php echo esc_html(get_the_title($ancestor)); ?>
                </a>
            </li>
        <?php
        }
        ?>
        <li aria-current="page">
            <?php echo esc_html(get_the_title()); ?>
        </li>
    </ol>
</nav>
    