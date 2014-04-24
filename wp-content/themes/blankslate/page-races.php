<?php 
/*
			Template Name: Races Page Template
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
						
						<?php the_content(); /* Page Content or Excerpt */?>

				</section>
			
			</article>
		<?php endwhile; endif; ?>








		<?php 

		/************ BEGIN CUSTOM FIELDS FOR THIS POST TYPE *****************/

		// Define some options when looking for fields
		

		// Which Post Type? Find the names of your post types at http://localhost:8888/wpstarter/wp-admin/admin.php?page=cpt_sub_manage_cpt
		
		$post_type = 'Races'; // Put Post Type Name Here



		// How to Return the Results
		$args = array(
			'post_type' => $post_type,
			'orderby' => 'title',
			'order' => 'ASC',
			'posts_per_page' => -1
		);



		// Begin a new trip to the Database to get the fields


		// DONT TOUCH THESE LINES
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts()) : 
			while ( $the_query->have_posts()) : 
				$the_query->the_post();
		// DONT TOUCH THESE LINES
		?>







		<?php /********** CALL IN YOUR FIELDS HERE to Output to the Page, add class="" to the Div's *************/ ?>

			<h3>
				<a href="<?php the_permalink(); ?>"><?php the_title(); // Gets Signle Post Type Item ?> </a>
			</h3>

			<p>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } //Get Featured Image?>
				<?php the_content(); // Gets Signle Post Content  ?>
			</p>

			<div>
				<?php the_field(''); // Put Field Name Between Quotes ?>
			</div>

			<div>
				<?php the_field(''); // Put Field Name Between Quotes ?>
			</div>

			<div>
				<?php the_field(''); // Put Field Name Between Quotes ?>
			</div>

			<hr />




		<?php /********** Finish It All Up! *************/ ?>

		<?php
		    endwhile;
			endif;
		?>
	








	</section>


	<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>

		<img class="paizo" src="<?php the_field('paizo'); ?>">
	
	</aside>


<?php get_footer(); ?>