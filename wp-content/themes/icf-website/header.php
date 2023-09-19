<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="canonical" href="<?php echo home_url($wp->request); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="header__wrap">
		<div class="header__logo">
			<a href="<?php echo home_url("/"); ?>">
				<img src="<?php echo get_static_image("icf-logo.svg"); ?>" alt="svg" class="svg">
			</a>
		</div>
		<?php wp_nav_menu([
			'theme_location'    => 'header_section',
			'container_class'   => 'header__navigation',
			'menu'              => 'Header',
			'menu_class'        => 'header__navigation',
			'items_wrap'        => '<ul class="header__navigation__list" id="%1$s" class="%2$s">%3$s</ul>',

		]); ?>
		<button class="header__navigation__button">
			<span></span><span></span><span></span>
		</button>
	</div>
</header>
