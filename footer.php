	<div class="clear"></div>
	</div><!--.container-->
	<div id="footer">
	<!-- Nav corners -->
	<div class="nav-shadow-unified-bottom"></div>
	<footer>
			<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?><!--Wigitized Footer--><?php endif ?>
<!-- 			<p><a href="#main"><?php _e('Top'); ?></a></p> -->
			<p>&copy; <?php echo date("Y") ?> <a href="http://www.unicamp.org/" title="<?php bloginfo('description'); ?>">UCLA UniCamp</a>. <?php _e('All Rights Reserved.'); ?></p>
	</footer></div><!--#footer-->
</div><!--#main-->
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
</body>
</html>