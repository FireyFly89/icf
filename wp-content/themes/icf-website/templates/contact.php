<section class="contact--dark">
    <div class="contact__overlay">
        <img src="<?php echo get_static_image('footer-icf.svg') ?>" alt="<?php _e('Contact', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
    </div>
    <div class="contact__wrap">
        <div class="section__header">
            <h4 class="section__category"><?php _e('Contact', THEME_DOMAIN_LANGUAGE); ?></h4>
            <h2 class="section__title"><?php _e("We'd love to hear from you", THEME_DOMAIN_LANGUAGE); ?></h2>
        </div>
        <div class="contact__form">
            <?php echo do_shortcode('[contact-form-7 id="189" title="Homepage Contact"]'); ?>
        </div>
    </div>
</section>
