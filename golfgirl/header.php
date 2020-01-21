<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
		<meta name="Rating" content="General" />
		<meta name="Robots" content="All" />
		<meta name="Revisit-After" content="7 days" />
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
		<meta name="DESCRIPTION" content="golfgirl provides a modern range of golf clothing and accessories. Everything from caps, skirts, gloves, tees to balls and even a unique driving range bag." />
		<meta name="KEYWORDS" content="golfgirl, golf clothing, caps, skirts, gloves, tees, balls, driving range bag, golf swing, golf clubs, sportswear, sport, golf courses, fashion, driving, tee off, golf tips, golf swing, putting, Australia" />
		<link rel="stylesheet" href="http://golfgirl.blott.com.au/wp-content/themes/iblott/style.css" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<style type="text/css" media="screen">
		
		<?php
		// Checks to see whether it needs a sidebar or not
		if ( !$withcomments && !is_single() ) {
		?>
			#page { background: #ffffff repeat-y top; border: none; }
		<?php } else { // No sidebar ?>
			#page { }
		<?php } ?>
		
		</style>
		<?php wp_head(); ?>
	</head>
	<body>
	
		<div id="container">
			<div id="header">
				<div class="topbanner"><a href="/"><img alt="golfgirl" src="http://golfgirl.blott.com.au/wp-content/themes/iblott/images/logo_header.jpg" /></a></div>
				<div class="toplinks">
					<ul id="toplinks">
						<li class="myacc"><a href="/">My Account</a></li>
						<li class="buggycart"><a href="/">Buggy Contents</a></li>
						<li class="checkout"><a href="/">Checkout</a></li>
					</ul>
				</div>
			</div>
			<div id="border"></div>