<?php get_header(); ?>
			<div id="content">
				<div id="leftmenu">
				<?php get_sidebar(); ?>
				</div>
				<div id="maincontent">
					<div class="contain">
						<img class="stretchmainimg" alt="golfgirl" src="http://golfgirl.blott.com.au/wp-content/themes/iblott/images/main_header.jpg" />



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
	<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	
	
							<img class="ballfooter" alt="golfgirl" src="http://golfgirl.blott.com.au/wp-content/themes/iblott/images/bottom_hole.jpg" />
						<div class="contentfade"></div>
					</div>
				</div>
<?php get_footer(); ?>

