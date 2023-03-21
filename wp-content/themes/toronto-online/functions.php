<?php

/***** ENQUEUING ALL THE STYLES & SCRIPTS *****/
add_action('wp_enqueue_scripts','toronto_online_styles');
function toronto_online_styles(){
	wp_enqueue_style('torronto-online-style', get_template_directory_uri() . '/css/toronto-online.css', array('theme-style'), '1.0');
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), '1.0');

	wp_enqueue_script('jquery');
	wp_enqueue_script('torronto-online-script', get_template_directory_uri() . '/js/toronto-online.js', array('jquery'), '1.0', true);

	wp_enqueue_style('bxslider-style', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '4.2.12');
	wp_enqueue_script('bxslider-script', get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), '4.2.12', true);
}

/***** REGISTERING MENUS *****/
add_action('init','toronto_online_menus');
function toronto_online_menus(){
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu', 'Toronto Online')
		)
	);
}

/***** REGISTERING WIDGETS *****/
add_action('widgets_init','toronto_online_widgets');
function toronto_online_widgets(){
	register_sidebar(
		array(
			'name' => __('Sidebar Testimonials'),
			'id' => 'testimonials',
			'description' => 'Testimonial Widgets',
			'before_widget' => '<aside id ="%1$s" class="widget %1$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'name' => __('Front Page Widget'),
			'id' => 'front-page-widget',
			'description' => 'Front Page Widgets',
			'before_widget' => '<div id ="%1$s" class="widget %1$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}

/***** ACTIVATING BASIC FEATURES & RESIZING IMAGES*****/
add_action('after_setup_theme','toronto_online_setups');
function toronto_online_setups(){
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_image_size('featured', 1100, 418, true);
	add_image_size('medium-blog', 358, 208, true);
};

?>