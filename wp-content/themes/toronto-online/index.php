<?php get_header(); ?>

<div id="primary" class="primary post-<?php the_ID(); ?>"><!----- DISPLAYING ID OF THE PAGE AS A CLASS ----->
	<?php while(have_posts()): the_post(); ?>
		<article>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium-blog'); ?></a><!----- DISPLAYING FEATURE IMAGE OF THE POST ----->
			<div class="content-post">
				<h2><?php the_title(); ?></h2><!----- DISPLAYING TITLE OF THE POST ----->
				<div class="category"><?php the_category(' '); ?></div><!----- DISPLAYING CATEGORY OF THE POST ----->
				<?php the_excerpt(); ?><!----- DISPLAYING CONTENT OF THE POST ----->
			</div><!--.content-post-->
		</article>
	<?php endwhile; ?>
</div><!-----#primary .primary----->

<?php get_sidebar(); ?>
<?php get_footer(); ?>