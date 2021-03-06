<?php get_header(); ?>
<div id="content" class="search">

	<h1 id="search-query">Search results for <strong><?php the_search_query(); ?></strong></h1>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post-single">
				<h5><?php the_category(', ') ?></h5>
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
				<div class="post-content">
					<?php the_content(__('More'));?>
				</div>
				<div class="post-meta">
					<!-- Twitter button -->
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title();?> <?php the_permalink();?>" data-via="UCLAUnicamp">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					<!-- Facebook Button -->
					<div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true"></div>
<!-- 					<p><?php _e('Written on '); the_time('F j, Y'); _e(' at '); the_time(); _e(', by '); the_author_posts_link(); ?></p> -->
					<p class="post-time-comment"><?php the_time('F j, Y');?> &bull; <?php comments_popup_link('Comments (0)', 'Comments (1)', 'Comments (%)'); ?>
<!-- 					<p><?php if (the_tags('Tags: ', ', ', ' ')); ?></p> -->
				</div><!--.postMeta-->
			</div><!--.post-single-->
		<?php endwhile; else: ?>
		<div class="no-results">
			<h2><?php _e('No Results'); ?></h2>
			<p><?php _e('Please feel free try again!'); ?></p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--no-results-->
	<?php endif; ?>

	<div class="oldernewer">
		<p class="older"><?php next_posts_link('&laquo; Older Entries') ?></p>
		<p class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
	</div><!--.oldernewer-->
	
</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
