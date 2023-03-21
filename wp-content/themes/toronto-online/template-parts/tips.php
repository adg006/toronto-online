<div class="blog-tips">
	<h2>Tips To Travel To Toronto</h2>
	<?php
		$args = array(
			'posts_per_page' => 2,
			'category_name' => 'tips-for-travel',
			'order' => 'DESC',
			'orderby' => 'date'
		);
		$travelTips = new WP_Query($args);
	?>
	<ul>
		<?php while($travelTips->have_posts()): $travelTips->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium-blog'); ?></a><!----- DISPLAYING FEATURE IMAGE OF THE POST ----->
				<h3><?php the_title(); ?></h3><!----- DISPLAYING TITLE OF THE POST ----->
				<?php the_excerpt(); ?><!----- DISPLAYING CONTENT OF THE POST ----->
				<a class="read-more "href="<?php the_permalink(); ?>">continue reading</a>
			</li>
		<?php endwhile; wp_reset_postdata(); ?>
	</ul>
</div><!--.blog-tips-->