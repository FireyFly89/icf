<?php
/* Template Name: Career */

get_header();
the_post();

$featured_img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
$post_title = get_the_title();
$post_content = get_the_content();

$query = array(
    'post_type' => 'job',
    'ignore_sticky_posts' => 1,
    'posts_per_page' => 9
);
$queryObject = new WP_Query($query);
?>

<section class="hero--page">
    <div class="hero__overlay">
        <img src="<?php echo $featured_img_url; ?>" alt="hero image">
    </div>
    <div class="hero__content">
        <span class="hero__title"><?php _e('Career at ICF', THEME_DOMAIN_LANGUAGE); ?></span>
        <p><?php _e('Right now is the perfect time to join ICF because your potential to influence virtually every corner of our product is almost limitless. While the scope of our impact is global in propogation, we are still a relatively small team of dedicated and capable people who work on the ground floor of truly interesting and cutting egde technologies.', THEME_DOMAIN_LANGUAGE); ?></p>
    </div>
</section>

<article class="page__career">
    <nav class="page__filter">
        <ul class="page__filter__list">
            <li><a href="#"><?php _e('Everywhere', THEME_DOMAIN_LANGUAGE); ?></a></li>
            <li><a href="#"><?php _e('Bucharest', THEME_DOMAIN_LANGUAGE); ?></a></li>
            <li><a href="#"><?php _e('Budapest', THEME_DOMAIN_LANGUAGE); ?></a></li>
            <li><a href="#"><?php _e('Amsterdam', THEME_DOMAIN_LANGUAGE); ?></a></li>
            <li><a href="#"><?php _e('Seattle', THEME_DOMAIN_LANGUAGE); ?></a></li>
        </ul>
    </nav>
    <div class="page__header">
        <?php echo $post_content; ?>
    </div>
</article>

<?php if ($queryObject->have_posts()): ?>
    <section class="jobs">
        <div class="jobs__list">
            <?php while ($queryObject->have_posts()) {
                $queryObject->the_post();
                get_template_part( 'templates/jobs-loop' );
            } ?>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>

<?php
get_template_part('templates/contact');

get_footer();
