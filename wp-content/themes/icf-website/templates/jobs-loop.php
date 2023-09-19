<?php
/*
 * TODO:
 * 1. Ikonokat az alapján kell kiválaztani, hogy milyen típusú az állás.
 * 2. Az álláshoz tartozó "időt" kell még valamilyen formában megadni.
 * 3. Az állás lokációját kell még valahogy megadni.
 * 4. Az álláshoz szükség van egy excerpt-re.
 */
$title = get_the_title();
$job_type = get_field( "icf_job_type");
?>

<article class="jobs__item">
    <h3 class="jobs__title">
        <a href="<?php echo get_the_permalink(); ?>"><?php echo $title; ?></a>
    </h3>
    <div class="jobs__details">
        <div class="jobs__type">
            <div class="jobs__type__icon">
                <img src="<?php echo get_static_image('senior.svg') ?>" alt="<?php echo $job_type; ?>" class="svg">
            </div>
            <?php echo $job_type; ?>
        </div>
        <div class="jobs__time">
            <div class="jobs__time__icon">
                <img src="<?php echo get_static_image('full-time.svg') ?>" alt="<?php _e('Full Time', THEME_DOMAIN_LANGUAGE); ?>" class="svg">
            </div>
            <?php _e('Full Time', THEME_DOMAIN_LANGUAGE); ?>
        </div>
        <div class="jobs__location">
            <?php _e('in Seattle, North-America, USA', THEME_DOMAIN_LANGUAGE); ?>
        </div>
    </div>
    <div class="jobs__content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aut eaque eius esse eum expedita facere impedit ipsam labore magni nam numquam optio porro provident quis saepe tempore temporibus, vitae.</p>
    </div>
    <div class="jobs__cta">
        <a href="<?php echo get_the_permalink(); ?>" class="btn--cta"><?php _e('Apply', THEME_DOMAIN_LANGUAGE); ?></a>
    </div>
</article>
