<?php get_header(); ?>

<?php get_template_part('template-parts/slider'); ?>

<div class="what-to-visit">
	<?php dynamic_sidebar('front-page-widget'); ?>
</div><!--.what-to-visit-->

<div class="bottom-front-page">
	
	<?php get_template_part('template-parts/aboutus'); ?>

	<?php get_template_part('template-parts/tips'); ?>

</div><!--.bottom-front-page-->

<?php get_footer(); ?>