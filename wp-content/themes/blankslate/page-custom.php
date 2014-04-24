<?php 
/*
			Template Name: Custom Template
*/
/*
Change the name of this template above, and save a copy of this file in   wp-content/themes/blankslate
You want to save a copy so you dont lose this one :)
*/
?>


<?php get_header(); ?>

	<section class="col-md-8 page-single" role="main">
		
		<?php 
			// the query
			$the_query = new WP_Query( 'post_type=EDIT THIS' ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

			  <!-- pagination here -->

			  <!-- the loop -->
			  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			    
			  <?php endwhile; ?>
			  <!-- end of the loop -->

			  <!-- pagination here -->

			  <?php wp_reset_postdata(); ?>

			<?php else:  ?>
			  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	
	</section>


	<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>

		<img class="paizo" src="<?php the_field('paizo'); ?>">
	
	</aside>


<?php get_footer(); ?>