<?php
$featured_img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'medium');
$post_title = get_the_title();
$post_excerpt = get_the_excerpt();
?>

<article class="latest-posts__item">
    <div class="latest-posts__img">
        <a href="<?php echo get_permalink(); ?>">
            <img src="<?php echo $featured_img_url; ?>" alt="<?php echo $post_title; ?>">
        </a>
    </div>
    <div class="latest-posts__content">
        <h3 class="latest-posts__title"><a href="<?php echo get_permalink(); ?>"><?php echo $post_title; ?></a></h3>
        <p class="latest-posts__text"><?php echo $post_excerpt; ?></p>
        <a href="<?php echo get_permalink(); ?>" class="btn--cta"><?php _e('Read', THEME_DOMAIN_LANGUAGE); ?></a>
    </div>
</article>
