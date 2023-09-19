<?php
$icf_theme_version = "0.1.0";

if (!function_exists('load_scripts')) {
	function load_scripts()
	{
		global $icf_theme_version;

		// Load main stylesheet
		wp_enqueue_style('style', get_stylesheet_uri(), [], $icf_theme_version);
		//wp_enqueue_style('fontawesome', "https://use.fontawesome.com/releases/v5.7.2/css/all.css");
		wp_enqueue_style('slick CSS', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

		//wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/5273c16679.js', [], $icf_theme_version, true);
		//wp_enqueue_script('jquery-cookie', 'https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js', ['jquery'], $icf_theme_version, true);
		wp_enqueue_script('slick JS', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], $icf_theme_version, true);

		// Load main javascript
		wp_enqueue_script('main', (get_template_directory_uri() . '/assets/scripts/main.js'), ['jquery'], $icf_theme_version, false);

		// Localize useful variables, making them avaialable in javascript file (by handle name)
		wp_localize_script('main', 'resolutions', [
			'hd' => 1600,
			'hdReady' => 1366,
			'large' => 1200,
			'medium' => 992,
			'small' => 768,
			'extraSmall' => 480,
			'old' => 375,
		]);
	}

	add_action('wp_enqueue_scripts', 'load_scripts');
}

// Set-up the theme
function theme_supports()
{
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('post-formats');

	register_nav_menus([
		'header_section' => __('Header section'),
		'footer_quick_links_section' => __('Footer Quick Links section'),
        'footer_locations_section' => __('Footer Locations section'),
        'footer_bottom_section' => __('Footer Bottom section'),
	]);
}

add_action('after_setup_theme', 'theme_supports');

// Utility function to dump more readable data
function pre_dump($data)
{
	echo "<pre style='position: relative;'>";
	var_dump($data);
	echo "</pre>";
}

function is_url_internal($url)
{
	$internal_url = $_SERVER['HTTP_HOST'];

	if (strpos($url, $internal_url) !== false) {
		return true;
	}

	return false;
}

// Retrieves a single-level menu structure
function get_named_menu($elem_name, $parent_class)
{
	$menu_elems = wp_get_nav_menu_items($elem_name);

	if (!$menu_elems) {
		return false;
	}

	$result = "";

	foreach ($menu_elems as $menu_elem) {
		$target = is_url_internal($menu_elem->url) ? '' : '_blank';
		$result .= sprintf('<li class="%s__elem"><a href="%s" target="%s">%s</a></li>', $parent_class, $menu_elem->url, $target, __($menu_elem->title));
	}

	return $result;
}

// Retrieves a multi-level menu structure (2 level only for now)
function get_named_menu_hierarchically($elem_name, $parent_class)
{
	$menu_elems = wp_get_nav_menu_items($elem_name);

	if (!$menu_elems) {
		return false;
	}

	$sub_menu_name = "sub_menu";
	$sorted_menu_elems = [];

	// Menu order automatically gets sorted by wordpress, so we don't need to manually ensure sorting
	foreach ($menu_elems as $menu_elem) {
		if ($menu_elem->post_status !== "publish") {
			continue;
		}

		$current_data = [
			"id" => $menu_elem->ID,
			"url" => $menu_elem->url,
			"title" => $menu_elem->title,
		];

		if ($menu_elem->menu_item_parent != 0) {
			$sorted_menu_elems[$menu_elem->menu_item_parent][$sub_menu_name][$menu_elem->ID] = $current_data;
			continue;
		}

		$sorted_menu_elems[$menu_elem->ID] = $current_data;
	}

	$result = "";
	$fontawesome_icon_list = json_decode(file_get_contents(get_template_directory() . '/assets/data/fontawesome.json'));

	foreach ($sorted_menu_elems as $sorted_menu_elem) {
		$selected_icon = get_post_meta($sorted_menu_elem["id"], '_menu_item_icon', true);
		$result .= sprintf('<div class="%s__elem__main__wrapper">', $parent_class);

		if (!empty($selected_icon)) {
			foreach ($fontawesome_icon_list as $icon_family => $icons) {
				foreach ($icons as $icon_name => $icon_entity) {
					if ($selected_icon == $icon_name) {
						$selected_icon = ($icon_family == "brands" ? "fab" : "fa") . " fa-" . $selected_icon;
						break 2;
					}
				}
			}

			$result .= sprintf('<i class="%s"></i>', $selected_icon);
		}

		$result .= sprintf('<span class="%s__elem__main">%s</span>', $parent_class, __($sorted_menu_elem['title']));

		if (!empty($sorted_menu_elem[$sub_menu_name])) {
			$result .= iterate_sub_menu($sorted_menu_elem[$sub_menu_name], $parent_class);
		}

		$result .= '</div>';
	}

	return $result;
}

// This function is used solely for iterating over sub menus, thus it is only a support function for (get_named_menu_hierarchically())
function iterate_sub_menu($menu_elems, $parent_class)
{
	$result = sprintf('<ul class="%s__elem__sub__wrapper">', $parent_class);

	foreach ($menu_elems as $menu_elem) {
		$target = is_url_internal($menu_elem['url']) ? '' : '_blank';
		$result .= sprintf('<li class="%s__elem__sub"><a href="%s" target="%s">%s</a></li>', $parent_class, $menu_elem['url'], $target, __($menu_elem['title']));
	}

	$result .= "</ul>";
	return $result;
}

// Retrieves a logo from the static images, adds 'bloginfo' as alt
function get_logo($elem_name, $image_name, $alt = "")
{
	if (empty($alt)) {
		$alt = get_bloginfo();
	}

	return sprintf('<img class="%s__logo" src="%s" alt="%s" />', $elem_name, get_static_image($image_name), $alt);
}

// Retrieves a static image from custom asset path
function get_static_image($image_name)
{
	return get_template_directory_uri() . "/assets/images/" . $image_name;
}

/**
 * Returns a single image URL to an AJAX request by given media ID
 */
function get_media_src()
{
	check_ajax_referer('admin_nonce', 'security_nonce');

	if (empty($media_id = $_POST['media_field_id'])) {
		wp_die('Unknown media field id!');
	}

	$media_src = wp_get_attachment_image_url($media_id, 'thumbnail');

	if (!empty($media_src)) {
		wp_die(json_encode($media_src));
	}

	wp_die('Could not find media!');
}

function get_children_pages($parent_id)
{
	return new WP_Query([
		'post_type' => 'page',
		'posts_per_page' => -1,
		'post_status' => 'publish',
		'post_parent' => $parent_id,
		'order' => 'DESC',
		'orderby' => 'post_date'
	]);
}

function safe_get_serialized_custom_tags(int $id, string $post_meta) {
	$data = get_post_meta($id, $post_meta, true);

	if (empty($data)) {
		return [];
	}

	if (is_array($tags = unserialize($data))) {
		return $tags;
	}

	return [];
}

function safe_get_page_id_by_template($page_template)
{
	$page_details = get_pages([
		'post_type' => 'page',
		'meta_key' => '_wp_page_template',
		'hierarchical' => 0,
		'meta_value' => $page_template,
	]);

	if (!empty($page_details) && array_key_exists(0, $page_details) && property_exists($page_details[0], "ID")) {
		return $page_details[0]->ID;
	}

	return false;
}

add_filter('excerpt_length', function ($length) {
	return 10;
}, 999);
