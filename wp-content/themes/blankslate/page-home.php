<?php 
/*
			Template Name: Home Page
*/
/*
Change the name of this template above, and save a copy of this file in   wp-content/themes/blankslate
You want to save a copy so you dont lose this one :)
*/
?>


<?php get_header(); ?>

	<section class="col-md-8 page-single" role="main">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article>
				
				<section class="entry-content">
						
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } /* The Featured Image */?> 

						<?php the_content(); ?>
						
						<?php the_field('featured_content'); ?><br>

						<?php the_field('grid1'); ?><br>

						<?php the_field('grid_2'); ?>

						<?php 
								/* Put Other Page Custom Field Calls Here. 

								Ex. <?php the_field('my-field-name'); ?> */ 

						?>

				</section>
			
			</article>
		<?php endwhile; endif; ?>
	
	</section>


	<aside class="col-md-4 theSidebar" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>


<?php get_footer(); ?>

<!--- <img src="<?php bloginfo('stylesheet_directory'); ?>/Images/d20c.jpg"> -->