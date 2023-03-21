<?php
	/*
		Template Name: No Sidebar
	*/
?>

<?php get_header(); ?>

<?php if(has_post_thumbnail()){ ?>
	<div class="featured">
		<?php the_post_thumbnail('featured'); ?><!----- DISPLAYING FEATURE IMAGE OF THE PAGE ----->
		<h2><?php the_title(); ?></h2><!----- DISPLAYING TITLE OF THE PAGE ----->
	</div><!-----.featured----->
<?php } else { ?>
	<h2 class="noimage"><?php the_title(); ?></h2><!----- DISPLAYING TITLE OF THE PAGE ----->
<?php } ?>

<div id="primary" class="primary no-sidebar post-<?php the_ID(); ?>"><!----- DISPLAYING ID OF THE PAGE AS A CLASS ----->
	<?php while(have_posts()): the_post(); ?>
		<?php the_content(); ?><!----- DISPLAYING CONTENT OF THE PAGE ----->
	<?php endwhile; ?>
</div><!-----#primary .primary----->

<?php get_footer(); ?>