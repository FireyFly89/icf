<footer class="footer">
    <div class="footer__wrap">
        <div class="footer__logo">
            <img src="<?php echo get_static_image("icf-logo.svg"); ?>" alt="svg" class="svg">
        </div>
        <div class="footer__social-links__wrap">
            <h3 class="footer__title"><?php _e('Follow us', THEME_DOMAIN_LANGUAGE); ?></h3>
            <div class="footer__social-links">
                <a href="#" target="_blank" rel="nofollow">
                    <img src="<?php echo get_static_image('facebook.svg') ?>" alt="facebook" class="svg">
                </a>
                <a href="#" target="_blank" rel="nofollow">
                    <img src="<?php echo get_static_image('linkedin.svg') ?>" alt="linkedin" class="svg">
                </a>
                <a href="#" target="_blank" rel="nofollow">
                    <img src="<?php echo get_static_image('envelope.svg') ?>" alt="email" class="svg">
                </a>
            </div>
        </div>
        <div class="footer__quick-links">
            <h3 class="footer__title"><?php _e('Quick links', THEME_DOMAIN_LANGUAGE); ?></h3>
            <?php wp_nav_menu([
                'theme_location'    => 'footer_quick_links_section',
                'container_class'   => 'footer__navigation',
                'menu'              => 'Footer Quick Links',
                'menu_class'        => 'footer__navigation',
                'items_wrap'        => '<ul class="footer__navigation__list" id="%1$s" class="%2$s">%3$s</ul>',

            ]); ?>
        </div>
        <div class="footer__locations">
            <h3 class="footer__title"><?php _e('Locations', THEME_DOMAIN_LANGUAGE); ?></h3>
            <?php wp_nav_menu([
                'theme_location'    => 'footer_locations_section',
                'container_class'   => 'footer__navigation',
                'menu'              => 'Footer Locations',
                'menu_class'        => 'footer__navigation',
                'items_wrap'        => '<ul class="footer__navigation__list" id="%1$s" class="%2$s">%3$s</ul>',

            ]); ?>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer__bottom__wrap">
            <p class="footer__bottom__copyright"><?php _e('Copyright &copy; ICF Technology Inc.', THEME_DOMAIN_LANGUAGE); ?></p>
            <?php wp_nav_menu([
                'theme_location'    => 'footer_bottom_section',
                'container_class'   => 'footer__bottom__navigation',
                'menu'              => 'Footer Bottom',
                'menu_class'        => 'footer__bottom__navigation',
                'items_wrap'        => '<ul class="footer__bottom__navigation__list" id="%1$s" class="%2$s">%3$s</ul>',

            ]); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
