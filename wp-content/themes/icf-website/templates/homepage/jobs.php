<?php
$query = array(
    'post_type' => 'job',
    'ignore_sticky_posts' => 1,
    'posts_per_page' => 3
);
$queryObject = new WP_Query($query);

if ($queryObject->have_posts()): ?>
    <section class="jobs">
        <div class="section__header">
            <h4 class="section__category"><?php _e('Jobs', THEME_DOMAIN_LANGUAGE); ?></h4>
            <h2 class="section__title"><?php _e('Work with Us', THEME_DOMAIN_LANGUAGE); ?></h2>
        </div>
        <div class="jobs__list">
            <?php while ($queryObject->have_posts()) {
                $queryObject->the_post();
                get_template_part( 'templates/jobs-loop' );
            } ?>
        </div>
        <div class="jobs__more">
            <a href="<?php echo home_url('/career'); ?>" class="btn--more"><?php _e('More Jobs', THEME_DOMAIN_LANGUAGE); ?></a>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>
