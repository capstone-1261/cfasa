<?php 
$name = get_field('name');
$story = get_field('story');
$author_Image = get_field('author_image');
?>

<article class="story-card">
    <?php if ($author_Image) : ?>
        <div class="story-card-image">
            <img
                src="<?php echo esc_url($author_Image['url']); ?>"
                alt="<?php echo esc_attr($author_Image['alt']); ?>"
            >
        </div>
    <?php endif; ?>

    <div class="story-card-content">

        <?php if ($name) : ?>
            <h3 class="story-card-title">
                <?php echo esc_html($name); ?>
            </h3>
        <?php endif; ?>

        <?php if ($story) : ?>
            <p class="story-card-story">
                <?php echo esc_html($story); ?>
            </p>
        <?php endif; ?>
</article>

