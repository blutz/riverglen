<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ( is_category() ) {
		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?></title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/unicamp_favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
	<?php /* Remove the Less Framework CSS line to not include the CSS Reset, basic styles/positioning, and Less Framework itself */?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/normalize.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/functions.js"></script>
</head>

<body <?php body_class(); ?>>
<!-- Facebook Like Button Script -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=72296391616";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook Like button Script -->

<div class="none">
	<p><a href="#content"><?php _e('Skip to Content'); ?></a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
</div><!--.none-->
<div id="main"><!-- this encompasses the entire Web site -->
	<div id="header"><header>
		<div class="container">
			<div id="title">
					<h1 id="logo"><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
					<h2 id="tagline"><?php bloginfo('description'); ?></h2>
			</div><!--#title-->
			<div id="header-image" class="container">
				<img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" />
			</div><!--#header-image-->
			<div id="nav-primary" class="nav"><nav>
				<?php 
					// Main navigation menu	
					wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			
				<form id="head_search" method="get" action="/">
					<input type="text" placeholder="Search" name="s" value="<?php the_search_query(); ?>"></input>
				</form>
			</nav>
			<!-- Nav corners -->
<!-- 			<div class="nav_leftcorner"></div><div class="nav_rightcorner"></div><div id="nav_shadow"></div> -->
			<div class="nav-shadow-unified"></div>
			</div><!--#nav-primary-->
			<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?><!-- Wigitized Header --><?php endif ?>
			<div class="clear"></div>
		</div><!--.container-->
	</header></div><!--#header-->
	<div class="container" id="site-container">