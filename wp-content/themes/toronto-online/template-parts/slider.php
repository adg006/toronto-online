<div id="slider">
	<ul class="bxslider">
		<?php 
			$args = array(
				'posts_per_page' => 4,
				'post_type' => 'post',
				'order' => 'DESC',
				'orderby' =>'date'
			);
			$slider = new WP_Query($args);
		?>
		<?php while($slider->have_posts()): $slider->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('featured'); ?><!----- DISPLAYING FEATURE IMAGE OF THE POST IN THE SLIDER ----->
				</a>
			</li>
		<?php endwhile; wp_reset_postdata(); ?>
	</ul><!--.bxslider-->
</div><!--#slider-->