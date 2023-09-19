<?php
/* Template Name: About Us */

get_header();

$featured_img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
$post_title = get_the_title();
?>

<section class="hero--page">
    <div class="hero__overlay">
        <img src="<?php echo $featured_img_url; ?>" alt="hero image">
    </div>
    <div class="hero__content">
        <span class="hero__title"><?php echo $post_title; ?></span>
        <p><?php _e('Technology runs through our veins as the primary life source of all we produce at ICF. Built into our DNA is a profound appreciation for the value of building great products through superior engineering and relentless focus on adding value to our customers.', THEME_DOMAIN_LANGUAGE); ?></p>
        <a href="<?php echo home_url('/career'); ?>" class="btn--primary">
            <?php _e('Join Our Team', THEME_DOMAIN_LANGUAGE); ?>
        </a>
    </div>
</section>

<section class="about-us">
    <div class="about-us__header">
        <h2 class="heading-2"><?php _e('People come first for us', THEME_DOMAIN_LANGUAGE); ?></h2>
        <p><strong><?php _e('This strategy has paid off well, today we are the world leader in live streaming technology - powering some of the biggest websites online - and we are still just getting started.', THEME_DOMAIN_LANGUAGE); ?></strong></p>
        <p><?php _e('As much as we love technology and work tirelessly to make ours the best, technology does not come first for us - people do. Unity is one of our core values because solidarity throughout the organisation is imperative if we are to accomplish our ever-ambitious goals. We put a premium on decency and respect, and look for people who are willing to set unbridled personal ambition aside when the time calls for it, to promote the efforts of their teammates.', THEME_DOMAIN_LANGUAGE); ?></p>
    </div>
    <div class="about-us__timeline">
        <div class="about-us__timeline__item">
            <span class="about-us__timeline__year">1997</span>
            <h4 class="about-us__timeline__title"><?php _e("ICF's parent company born", THEME_DOMAIN_LANGUAGE); ?></h4>
            <div class="about-us__timeline__img">
                <img src="<?php echo get_static_image('document.svg') ?>" alt="<?php _e("ICF's parent company born", THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <span class="about-us__timeline__indicator"></span>
        </div>
        <div class="about-us__timeline__item">
            <span class="about-us__timeline__year">1999</span>
            <h4 class="about-us__timeline__title"><?php _e("19 employees", THEME_DOMAIN_LANGUAGE); ?></h4>
            <div class="about-us__timeline__img">
                <img src="<?php echo get_static_image('19+.svg') ?>" alt="<?php _e("19 employees", THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <span class="about-us__timeline__indicator"></span>
        </div>
        <div class="about-us__timeline__item">
            <span class="about-us__timeline__year">2002</span>
            <h4 class="about-us__timeline__title"><?php _e("New Seattle office purchased", THEME_DOMAIN_LANGUAGE); ?></h4>
            <div class="about-us__timeline__img">
                <img src="<?php echo get_static_image('seattle.svg') ?>" alt="<?php _e("New Seattle office purchased", THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <span class="about-us__timeline__indicator"></span>
        </div>
        <div class="about-us__timeline__item">
            <span class="about-us__timeline__year">2010</span>
            <h4 class="about-us__timeline__title"><?php _e("70 employees", THEME_DOMAIN_LANGUAGE); ?></h4>
            <div class="about-us__timeline__img">
                <img src="<?php echo get_static_image('70+.svg') ?>" alt="<?php _e("70 employees", THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <span class="about-us__timeline__indicator"></span>
        </div>
        <div class="about-us__timeline__item">
            <span class="about-us__timeline__year">2010</span>
            <h4 class="about-us__timeline__title"><?php _e("10 million registered users worldwide", THEME_DOMAIN_LANGUAGE); ?></h4>
            <div class="about-us__timeline__img">
                <img src="<?php echo get_static_image('users.svg') ?>" alt="<?php _e("10 million registered users worldwide", THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <span class="about-us__timeline__indicator"></span>
        </div>
        <div class="about-us__timeline__item">
            <span class="about-us__timeline__year">2015</span>
            <h4 class="about-us__timeline__title"><?php _e("Opening Dutch operations", THEME_DOMAIN_LANGUAGE); ?></h4>
            <div class="about-us__timeline__img">
                <img src="<?php echo get_static_image('dutch.svg') ?>" alt="<?php _e("Opening Dutch operations", THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <span class="about-us__timeline__indicator"></span>
        </div>
        <div class="about-us__timeline__item">
            <span class="about-us__timeline__year">2016</span>
            <h4 class="about-us__timeline__title"><?php _e("300+ employees", THEME_DOMAIN_LANGUAGE); ?></h4>
            <div class="about-us__timeline__img">
                <img src="<?php echo get_static_image('300+.svg') ?>" alt="<?php _e("300+ employees", THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <span class="about-us__timeline__indicator"></span>
        </div>
        <div class="about-us__timeline__item">
            <span class="about-us__timeline__year">2017</span>
            <h4 class="about-us__timeline__title"><?php _e("Opening Romanian operations", THEME_DOMAIN_LANGUAGE); ?></h4>
            <div class="about-us__timeline__img">
                <img src="<?php echo get_static_image('romanian.svg') ?>" alt="<?php _e("Opening Romanian operations", THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <span class="about-us__timeline__indicator"></span>
        </div>
        <div class="about-us__timeline__item">
            <span class="about-us__timeline__year">2019</span>
            <h4 class="about-us__timeline__title"><?php _e("Opening Hungarian operations", THEME_DOMAIN_LANGUAGE); ?></h4>
            <div class="about-us__timeline__img">
                <img src="<?php echo get_static_image('hungary.svg') ?>" alt="<?php _e("Opening Hungarian operations", THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <span class="about-us__timeline__indicator"></span>
        </div>
    </div>
</section>

<?php
get_template_part('templates/contact');

get_footer();
