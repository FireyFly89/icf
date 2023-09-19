<?php
/* Template Name: Our Locations */

get_header();

$post_title = get_the_title();
?>

<section class="hero--page">
    <div class="hero__map"></div>
</section>

<section class="our-locations">
    <div class="our-locations__header">
        <h1 class="heading-1"><?php echo $post_title; ?></h1>
        <p><strong><?php _e('ICF has become a global enterprise and a world market leader in live streaming technology, enjoying the collective support of its companies.', THEME_DOMAIN_LANGUAGE); ?></strong></p>
    </div>
    <div class="our-locations__list">
        <div class="our-locations__item">
            <span class="our-locations__headquarter"><?php _e('North-American Headquarters', THEME_DOMAIN_LANGUAGE); ?></span>
            <h3 class="our-locations__title">
                <a href="<?php echo home_url('/'); ?>"><?php _e('Seattle', THEME_DOMAIN_LANGUAGE); ?></a>
            </h3>
            <span class="our-locations__company"><?php _e('ICF Technology Inc.', THEME_DOMAIN_LANGUAGE); ?></span>
            <span class="our-locations__contact"><?php _e('support@icftechnology.com', THEME_DOMAIN_LANGUAGE); ?></span>
            <div class="our-locations__img">
                <img src="<?php echo get_static_image('seattle.svg'); ?>" alt="<?php _e('Seattle', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <a href="<?php echo home_url('/'); ?>" class="btn--cta"><?php _e('Learn More', THEME_DOMAIN_LANGUAGE); ?></a>
        </div>
        <div class="our-locations__item">
            <span class="our-locations__headquarter"><?php _e('European Headquarters', THEME_DOMAIN_LANGUAGE); ?></span>
            <h3 class="our-locations__title">
                <a href="<?php echo home_url('/'); ?>"><?php _e('Amsterdam', THEME_DOMAIN_LANGUAGE); ?></a>
            </h3>
            <span class="our-locations__company"><?php _e('ICF Tech EU B. V.', THEME_DOMAIN_LANGUAGE); ?></span>
            <span class="our-locations__contact"><?php _e('contact@icftech.nl', THEME_DOMAIN_LANGUAGE); ?></span>
            <div class="our-locations__img">
                <img src="<?php echo get_static_image('dutch.svg'); ?>" alt="<?php _e('Amsterdam', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <a href="<?php echo home_url('/'); ?>" class="btn--cta"><?php _e('Learn More', THEME_DOMAIN_LANGUAGE); ?></a>
        </div>
        <div class="our-locations__item">
            <h3 class="our-locations__title">
                <a href="<?php echo home_url('/'); ?>"><?php _e('Budapest', THEME_DOMAIN_LANGUAGE); ?></a>
            </h3>
            <span class="our-locations__company"><?php _e('ICF Tech Hungary Kft.', THEME_DOMAIN_LANGUAGE); ?></span>
            <span class="our-locations__contact"><?php _e('info@icftech.hu', THEME_DOMAIN_LANGUAGE); ?></span>
            <div class="our-locations__img">
                <img src="<?php echo get_static_image('hungary.svg'); ?>" alt="<?php _e('Budapest', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <a href="<?php echo home_url('/'); ?>" class="btn--cta"><?php _e('Learn More', THEME_DOMAIN_LANGUAGE); ?></a>
        </div>
        <div class="our-locations__item">
            <h3 class="our-locations__title">
                <a href="<?php echo home_url('/'); ?>"><?php _e('Bucharest', THEME_DOMAIN_LANGUAGE); ?></a>
            </h3>
            <span class="our-locations__company"><?php _e('SLS Service Center SRL.', THEME_DOMAIN_LANGUAGE); ?></span>
            <span class="our-locations__contact"><?php _e('info@slshungary.com', THEME_DOMAIN_LANGUAGE); ?></span>
            <div class="our-locations__img">
                <img src="<?php echo get_static_image('romanian.svg'); ?>" alt="<?php _e('Bucharest', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <a href="<?php echo home_url('/'); ?>" class="btn--cta"><?php _e('Learn More', THEME_DOMAIN_LANGUAGE); ?></a>
        </div>
    </div>
</section>

<?php
get_template_part('templates/homepage/jobs');
get_template_part('templates/contact');

get_footer();
