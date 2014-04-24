<?php get_header(); ?>

	<section class="col-md-8 main-content-page" role="main">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article>
				
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				
				<section class="entry-content">
						
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } /* The Featured Image */?> 
						
						<?php the_content(); /* The Content or Excerpt */?>

						<?php 
								/* Put Other Page Custom Field Calls Here. 

								Ex. <?php the_field('my-field-name'); ?> */ 

						?>

				</section>
			
			</article>
		<?php endwhile; endif; ?>
	
	</section>


	<div class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>


<?php get_footer(); ?>