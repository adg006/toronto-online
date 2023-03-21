<?php 
	/*
		Template Name: What To Visit
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

<div id="primary" class="primary  no-sidebar post-<?php the_ID(); ?>"><!----- DISPLAYING ID OF THE PAGE AS A CLASS ----->
	<?php $args = array(
			'posts_per_page' => 5,
			'category_name' => 'what-to-visit',
			'order' => 'DESC',
			'orderby' =>'date'
		); ?>

	<?php $visit = new WP_Query($args); ?>

	<ul class="blog-visit">
		<?php while($visit->have_posts()) : $visit->the_post() ; ?>
			<li>
				<div class="featured">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium-blog'); ?></a><!----- DISPLAYING FEATURE IMAGE OF THE POST ----->
					<div class="category"><?php the_category(' '); ?></div><!----- DISPLAYING CATEGORY OF THE POST ----->
				</div><!-----.featured----->
				<div class="content">
					<h2><?php the_title(); ?></h2><!----- DISPLAYING TITLE OF THE POST ----->
					<?php the_excerpt(); ?><!----- DISPLAYING CONTENT OF THE POST ----->
				</div><!-----.content----->
				<div class="post-information">
					<div class="author">By: <span><?php the_author(); ?></span></div><!----- DISPLAYING AUTHOR OF THE POST ----->
					<div class="date"><?php the_time('F j, Y'); ?></div><!----- DISPLAYING TIME OF THE POST ----->
				</div><!-----.post-information----->
			</li>
		<?php endwhile; wp_reset_postdata(); ?>
	</ul>

</div><!-----#primary .primary .no-sidebar----->

<?php get_footer(); ?>