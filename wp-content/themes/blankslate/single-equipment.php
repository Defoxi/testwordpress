<?php get_header(); ?>

	<section class="col-md-8" id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<h3><?php the_title(); ?></h3>

	<ul>
		<li><?php the_field('grid1'); ?></li><br>
		<li><?php the_field('grid2'); ?></li><br>
		<li><?php the_field('grid3'); ?></li><br>
		<li><?php the_field('grid4'); ?></li><br>
		<li><?php the_field('grid5'); ?></li><br>
		<li><?php the_field('grid6'); ?></li>

	</ul>

		<?php endwhile; endif; ?>

	</section>

	<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>

<?php get_footer(); ?>