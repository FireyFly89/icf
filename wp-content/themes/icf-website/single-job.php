<?php
/* Template Name: Job */

get_header();
the_post();

$post_title = get_the_title();
$post_content = get_the_content();
?>

<article class="job">
    <div class="job__header">
        <a href="<?php echo home_url('/career'); ?>" class="job__back btn--cta"><?php _e('Back To Jobs', THEME_DOMAIN_LANGUAGE); ?></a>
        <h1 class="job__title heading-2"><?php echo $post_title; ?></h1>
        <a href="#apply_form" class="job__apply btn--more"><?php _e('Apply Now', THEME_DOMAIN_LANGUAGE); ?></a>
        <span class="job__location"><?php _e('In Budapest, Hungary', THEME_DOMAIN_LANGUAGE); ?></span>
        <div class="job__details">
            <div class="job__details__item">
                <img src="<?php echo get_static_image('senior.svg') ?>" alt="<?php _e('Senior', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
                <?php _e('Senior', THEME_DOMAIN_LANGUAGE); ?>
            </div>
            <div class="job__details__item">
                <img src="<?php echo get_static_image('full-time.svg') ?>" alt="<?php _e('Full Time', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
                <?php _e('Full Time', THEME_DOMAIN_LANGUAGE); ?>
            </div>
        </div>
    </div>
    <div class="job__content">
        <?php echo $post_content; ?>
    </div>
</article>

<section class="contact" id="apply_form">
    <div class="contact__wrap">
        <div class="section__header">
            <h4 class="section__category"><?php _e('Application', THEME_DOMAIN_LANGUAGE); ?></h4>
            <h2 class="section__title"><?php _e("Fill out the Application Form", THEME_DOMAIN_LANGUAGE); ?></h2>
        </div>
        <div class="contact__form">
            <?php echo do_shortcode('[contact-form-7 id="215" title="Job Apply Form"]'); ?>
            <div class="contact__form__extra">
                <p><?php _e('If you provide sensitive personal data to us, this constitutes explicit consent for us to process such data. You may revoke consent at any time clicking <a href="#">here</a>.', THEME_DOMAIN_LANGUAGE); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
