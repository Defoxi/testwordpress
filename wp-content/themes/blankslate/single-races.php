<?php get_header(); ?>

	<section class="col-md-8" id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<img class="headshot" src=<?php the_field('headshot'); ?> >
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>

	<ul>
		<li><strong>Ability Bonus: </strong><?php the_field('ability_bonus'); ?></li><br>
		<li><strong>Size: </strong><?php the_field('size'); ?></li><br>
		<li><strong>Speed: </strong><?php the_field('speed'); ?></li><br>
		<li><strong>Language: </strong><?php the_field('language'); ?></li><br>
		<li><?php the_field('special'); ?></li>
		<li><?php the_field('special2'); ?></li>
		<li><?php the_field('special3'); ?></li>
		<li><?php the_field('special4'); ?></li>
		<li><?php the_field('special5'); ?></li>

	</ul>

		<?php endwhile; endif; ?>

	</section>

	<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>

<?php get_footer(); ?>