<?php
/*
Template Name: All People
*/
?>

<?php get_header(); ?>
		<div id="content" class="wrapper">
			<?php get_sidebar(); ?>
			
			<div id="main" class="post">

				<?php 
				$the_query = new WP_Query( 'post_type=people' ); ?>
				 
				<?php if ( $the_query->have_posts() ) : ?>
				 
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				 
				 
				<h2>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<img class="headshot" src="<?php the_field('headshot'); ?>" />
				 
				<h4><?php the_field('education_level'); ?></h4>

				<h2><?php the_field('department'); ?></h2>

				<?php endwhile; ?>
				  
				 
				<?php wp_reset_postdata(); ?>
				 
				<?php else:  ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
					
			</div> <!-- /#main -->
			
			
		</div> <!-- /#content -->
		
		<br style="clear:both;">

		<?php get_sidebar( 'responsive' ); ?>
<?php get_footer(); ?>