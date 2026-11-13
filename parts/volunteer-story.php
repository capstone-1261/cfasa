<?php
$name = get_field('name');
$image = get_field('image');
$short_description = get_field('short-description');
$story = get_field('story');
?>

<div class="volunteer-stories-card">
    <div>
        <h3><?php echo $name; ?></h3>
        <p><?php echo $short_description; ?></p>
        <a href=""></a>
    </div>
    <div class="gallery-volunteer-image">
    <?php if ($image) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>
</div>
</div>