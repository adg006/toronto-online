<?php get_header(); ?>

<?php if(has_post_thumbnail()){ ?>
	<div class="featured">
		<?php the_post_thumbnail('featured'); ?><!----- DISPLAYING FEATURE IMAGE OF THE PAGE ----->
		<h2><?php the_title(); ?></h2><!----- DISPLAYING TITLE OF THE PAGE ----->
	</div><!-----.featured----->
<?php } else { ?>
	<h2 class="noimage"><?php the_title(); ?></h2><!----- DISPLAYING TITLE OF THE PAGE ----->
<?php } ?>

<div id="primary" class="primary post-<?php the_ID(); ?>"><!----- DISPLAYING ID OF THE PAGE AS A CLASS ----->
	<?php while(have_posts()): the_post(); ?>
		<article>
			<div class="written-info">
				<div class="column">
					<?php the_tags(__('Tags For This Post: ', 'Toronto Online'), ', ', '<br/>'); ?><!----- DISPLAYING TAGS OF THE POST ----->
				</div><!--.column-->
				<div class="column">
					<?php _e('Category: ', 'Toronto Online') . the_category(', '); ?><!----- DISPLAYING CATEGORY OF THE POST ----->
				</div><!--.column-->
				<div class="column">
					<?php _e('Written By: ', 'Toronto Online') . "<span>" . the_author() . "</span>"; ?><!----- DISPLAYING AUTHOR OF THE POST ----->
				</div><!--.column-->
			</div><!--.written-info-->
			<?php the_content(); ?><!----- DISPLAYING CONTENT OF THE POST ----->
			<?php comment_form(); ?><!----- DISPLAYING COMMENTS FORM OF THE POST ----->
			<div class="comment-list">
				<ol class="commentlist">
					<?php 
						$comments = get_comments(array(
							'post_id' => $post->ID,
							'status' => 'approve'
						));
						wp_list_comments(array(
							'per_page' => 10,
							'reverse_top_level' => false
						), $comments);
					?>
				</ol><!--.commentlist-->
			</div><!--.comment-list-->
		</article>
	<?php endwhile; ?>
</div><!-----#primary .primary----->

<?php get_sidebar(); ?>
<?php get_footer(); ?>