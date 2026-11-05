<?php
$partnerImage = get_field('partner_image');

if ($partnerImage) :
?>

    <div class="partner-image-container">
        <img
            class="partner-image"
            src="<?php echo esc_url($partnerImage['url']); ?>"
            alt="<?php echo esc_attr($partnerImage['alt']); ?>"
        >
    </div>

<?php endif; ?>
