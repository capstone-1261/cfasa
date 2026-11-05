<?php
$supporterImage = get_field('supporter_image');

if ($supporterImage) :
?>
    <div class="supporter-image-container">
        <img
            class="supporter-image"
            src="<?php echo esc_url($supporterImage['url']); ?>"
            alt="<?php echo esc_attr($supporterImage['alt']); ?>"
        >
    </div>

<?php endif; ?>