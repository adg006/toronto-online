<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"><!----- ALL INFORMATION ABOUT LANGUAGE ----->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><!----- MAKING WEBSITE RESPONSIVE ----->

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/images/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/images/site.webmanifest">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page">
		<header id="mastheaad" class="site-header" role="banner">
			<div class="container">
				<a href="<?php echo home_url('/'); ?>">
					<div class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
					</div><!-----.logo----->
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
					</nav><!-----#site-navigation .main-navigation----->
				</a>
			</div><!-----.container----->
		</header><!-----#masthead .site-header----->
		<div class="container content">

