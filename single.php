<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

			<article>
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
					<p><?php if (the_tags('Tags: ', ', ', ' ')); ?></p>
				<p class="rss_feed"><a href="<?php bloginfo('rss2_url'); ?>" rel="nofollow">RSS Feed</a></p>
				<p class="rss_feed"><?php post_comments_feed_link('Comment RSS Feed'); ?></p>
				</div><!--.postMeta-->
			</article>

			<?php /* If a user fills out their bio info, it's included here */ ?>
<!--
			<div id="post-author">
				<h3><?php _e('Written by '); the_author_posts_link() ?></h3>
				<p class="gravatar"><?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '80' ); /* This avatar is the user's gravatar (http://gravatar.com) based on their administrative email address */  } ?></p>
				<div id="authorDescription">
					<?php the_author_meta('description') ?> 
					<div id="author-link">
						<p><?php _e('View all posts by: '); the_author_posts_link() ?></p>
					</div><!--#author-link-->
				</div><!--#author-description -->
			</div><!--#post-author-->
			

		</div><!-- #post-## -->

<!--
		<div class="newer-older">
			<p class="older"><?php previous_post_link('%link', '&laquo; Previous post') ?></p>
			<p class="newer"><?php next_post_link('%link', 'Next Post &raquo;') ?></p>
		</div><!--.newer-older-->

		<?php comments_template( '', true ); ?>

	<?php endwhile; /* end loop */ ?>
</div><!--#content-->
<?php get_footer(); ?>