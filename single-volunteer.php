<?php get_header(); ?>

<?php
$name = get_field('name');
$image = get_field('image');
$short_description = get_field('short-description');
$story = get_field('story');
?>

<main>
<h1><?php the_title(); ?></h1>

<section class="involved-nav-container">
    <div>
        <div class="involved-nav">
            <h2 class="involved-nav-sub">JUMP TO SECTION</h2>
            <nav class="get-involved-navigation" aria-label="Get Involved navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'involved-nav',
                'container' => false,
                'menu_class' => 'get-involved-nav',
                'fallback_cb' => false
            ));
            ?>
            </nav>
        </div>
    </div>
</section>


<section class="single-volunteer-story">

<a href="page-volunteer.php">Back to Volunteer</a>

<h2><?php echo $name; ?></h2>

<div class="single-volunteer-image">
    <?php if ($image) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>
</div>

<div class="single-volunteer-text">
   <p><?php echo $story; ?></p>
</div>

</section>


<?php get_footer(); ?>