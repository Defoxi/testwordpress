<?php
/*
Template Name: Home Page Yo!
*/
?>

<?php get_header(); ?>

		<div id="content" class="wrapper">
			
			<div id="main" class="post">

				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
					<style>
						body {
							background-image: url(<?php the_field('background_photo'); ?>);
							background-size: cover;
						}
					</style>
						
					<div class="home-featured-content">
						<?php the_field('featured_content'); ?>
					</div>

					

					<div class="video"><iframe src="//player.vimeo.com/video/<?php the_field('vimeo_video'); ?>" width="100%" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/82437787">Orion Beach</a> from <a href="http://vimeo.com/user5331136">Campbell Logan</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
						</div>
					


					

				<?php endwhile; // end of the loop. ?>

			</div> <!-- /#main -->
			
		</div> <!-- /#content -->

<?php get_footer(); ?>