<?php get_header(); ?>
		<div id="content" class="wrapper">
			<?php get_sidebar(); ?>
			
			<div id="main" class="post">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
					<header class="posthead">
						<h2 class="bigger"><?php the_title(); ?></h2>
					</header>

					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>
				
				<?php edit_post_link( "Admin Edit", '<p class="editlink">', '</span>' ); ?>
			</div> <!-- /#main -->
			
			
		</div> <!-- /#content -->
		
		<br style="clear:both;">

		<?php get_sidebar( 'responsive' ); ?>
<?php get_footer(); ?>