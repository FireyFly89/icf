<?php
/* Template Name: Location */

get_header();
the_post();

$post_title = get_the_title();
$post_content = get_the_content();
?>

<section class="hero--page">
    <div class="hero__map"></div>
</section>

<article class="location">
    <span class="location__headquarter"><?php _e('North-American Headquarters', THEME_DOMAIN_LANGUAGE); ?></span>
    <h1 class="heading-1"><?php echo $post_title; ?></h1>
    <div class="location__addresses">
        <span class="location__addresses__line"><?php _e('Seattle, North-America, USA', THEME_DOMAIN_LANGUAGE); ?></span>
        <span class="location__addresses__line"><?php _e('800 Stewart Street, Seattle, WA 98101', THEME_DOMAIN_LANGUAGE); ?></span>
    </div>
    <div class="location__contacts">
        <a href="#" target="_blank" rel="nofollow">
            <img src="<?php echo get_static_image('offices.svg'); ?>" alt="<?php _e('get direction', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            <?php _e('Get direction', THEME_DOMAIN_LANGUAGE); ?>
        </a>
        <a href="#" target="_blank" rel="nofollow">
            <img src="<?php echo get_static_image('email.svg'); ?>" alt="<?php _e('email', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            <?php _e('support@icftechnology.com', THEME_DOMAIN_LANGUAGE); ?>
        </a>
        <a href="#" target="_blank" rel="nofollow">
            <img src="<?php echo get_static_image('mobil.svg'); ?>" alt="<?php _e('mobil', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            <?php _e('+206-374-0374', THEME_DOMAIN_LANGUAGE); ?>
        </a>
    </div>
    <div class="location__content">
        <?php echo $post_content; ?>
    </div>
</article>

<section class="contact--light">
    <div class="contact__overlay">
        <img src="<?php echo get_static_image('footer-icf.svg') ?>" alt="<?php _e('Contact', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
    </div>
    <div class="contact__wrap">
        <div class="section__header">
            <h4 class="section__category"><?php _e('Contact', THEME_DOMAIN_LANGUAGE); ?></h4>
            <h2 class="section__title"><?php _e("Get in touch with our team in Seattle", THEME_DOMAIN_LANGUAGE); ?></h2>
        </div>
        <div class="contact__form">
            <?php echo do_shortcode('[contact-form-7 id="205" title="Location Contact"]'); ?>
        </div>
    </div>
</section>

<?php

get_template_part('templates/homepage/jobs');

get_footer();
