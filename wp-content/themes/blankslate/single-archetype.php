<?php get_header(); ?>

	<section class="col-md-8" id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!--<img class="headshot" src=<?php the_field('headshot'); ?> >-->
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
	
	<ul>
		<li><?php the_field('abilities'); ?></li>
		<li><?php the_field('abilities2'); ?></li>
		<li><?php the_field('abilities3'); ?></li>
		<li><?php the_field('abilities4'); ?></li>
		<li><?php the_field('abilities5'); ?></li>
		<li><?php the_field('abilities6'); ?></li>
	</ul>

		<?php endwhile; endif; ?>

	</section>

	<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>

<?php get_footer(); ?>