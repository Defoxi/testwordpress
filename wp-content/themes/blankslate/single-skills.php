<?php get_header(); ?>

	<section class="col-md-8" id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<h3><?php the_title(); ?></h3>

	<ul>
		<li><strong>Check: </strong><?php the_field('check'); ?></li><br>
		<li><strong>Action: </strong><?php the_field('action'); ?></li><br>
		<li><strong>Try Again: </strong><?php the_field('try_again'); ?></li><br>
		<li><strong>Special: </strong><?php the_field('special'); ?></li>
	</ul>

		<?php endwhile; endif; ?>

	</section>

	<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>

<?php get_footer(); ?>