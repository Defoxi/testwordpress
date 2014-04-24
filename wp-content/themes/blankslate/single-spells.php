<?php get_header(); ?>

	<section class="col-md-8" id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
	<ul>
		<li><strong>School: </strong><?php the_field('school'); ?></li>
		<li><strong>Level: </strong><?php the_field('level'); ?></li>
		<li><strong>Casting Time: </strong><?php the_field('casting_time'); ?></li>
		<li><strong>Components: </strong><?php the_field('components'); ?></li>
		<li><strong>Range: </strong><?php the_field('range'); ?></li>
		<li><strong>Area: </strong><?php the_field('area'); ?></li>
		<li><strong>Targets: </strong><?php the_field('targets'); ?></li>
		<li><strong>Effect: </strong><?php the_field('effect'); ?></li>
		<li><strong>Duration: </strong><?php the_field('duration'); ?></li>
		<li><strong>Saving Throw: </strong><?php the_field('saving_throw'); ?></li>
		<li><strong>Spell Resistance: </strong><?php the_field('spell_resistance'); ?></li>
	</ul>

		<?php endwhile; endif; ?>

	</section>

	<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>

<?php get_footer(); ?>