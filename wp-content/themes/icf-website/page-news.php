<?php
/* Template Name: News */

get_header();

$query = array(
    'post_type' => 'post',
    'ignore_sticky_posts' => 1,
    'posts_per_page' => 6
);
$queryObject = new WP_Query($query);
?>

<div class="page__news">
    <?php if ($queryObject->have_posts()): ?>
    <section class="latest-posts">
        <div class="section__header">
            <h2 class="section__title"><?php _e('Latest Posts', THEME_DOMAIN_LANGUAGE); ?></h2>
        </div>
        <div class="latest-posts__list">
            <?php while ($queryObject->have_posts()) {
                $queryObject->the_post();
                get_template_part( 'templates/posts-loop' );
            } ?>
        </div>
        <div class="latest-posts__more">
            <a href="<?php echo home_url('/news'); ?>" class="btn--more"><?php _e('More News', THEME_DOMAIN_LANGUAGE); ?></a>
        </div>
    </section>
    <?php endif; wp_reset_postdata(); ?>
</div>

<?php
get_template_part('templates/contact');

get_footer();
