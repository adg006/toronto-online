		</div><!-----.container----->
	</div><!-----#page----->
	<footer class="site-footer" role="contactinfo">
		<nav id="footer-navigation" class="footer-navigation container" role="navigation">
			<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
		</nav><!-----#site-navigation .main-navigation----->
		<hr>
		<div class="copyright">
			<p>Toronto Online <?php echo date('Y'); ?></p>
		</div>
		<?php wp_footer(); ?>	
	</footer>
</body>
</html>