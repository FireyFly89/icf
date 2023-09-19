<?php
get_header();
the_post();

$post_title = get_the_title();
$post_content = get_the_content();
$post_date = get_the_date();
$featured_img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');

$query = array(
    'post_type' => 'post',
    'ignore_sticky_posts' => 1,
    'posts_per_page' => 3
);
$queryObject = new WP_Query($query);
?>

<article class="article">
    <div class="article__header">
        <a href="<?php echo home_url('/news'); ?>" class="back"><?php _e('Back To News', THEME_DOMAIN_LANGUAGE); ?></a>
        <h1 class="heading-2"><?php echo $post_title; ?></h1>
        <span class="date"><?php echo $post_date; ?></span>
    </div>
    <div class="article__content">
        <?php echo $post_content; ?>
    </div>
</article>

<?php if ($queryObject->have_posts()): ?>
    <section class="latest-posts">
        <div class="section__header">
            <h2 class="section__title"><?php _e('More News', THEME_DOMAIN_LANGUAGE); ?></h2>
        </div>
        <div class="latest-posts__list">
            <?php while ($queryObject->have_posts()) {
                $queryObject->the_post();
                get_template_part( 'templates/posts-loop' );
            } ?>
        </div>
    </section>
<?php endif; wp_reset_postdata();

get_template_part('templates/contact');

get_footer();
