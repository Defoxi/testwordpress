<?php get_header(); ?>

	<section class="col-md-8" id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<img class="headshot" src=<?php the_field('headshot'); ?> >
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
	<ul>
		<li><strong>Alignment: </strong><?php the_field('alignment'); ?></li><br>
		<li><strong>Hit Die: </strong><?php the_field('hit_die'); ?></li><br>
		<li><strong>Starting Wealth: </strong><?php the_field('wealth'); ?></li><br>
		<li><strong>Skill Ranks: </strong><?php the_field('skill_ranks'); ?></li><br>
		<li><strong>Skills: </strong><?php the_field('skills'); ?></li><br>
		<li><strong>Weapons & Armor Proficiences: </strong><?php the_field('weapon_and_armor_prof'); ?></li>
		
	</ul>
		<?php the_field('grid') ?>
		<br>
	<ul>
		<li><?php the_field('class_abilities'); ?></li>
		<li><?php the_field('class_abilities2'); ?></li>
		<li><?php the_field('class_abilities3'); ?></li>
		<li><?php the_field('class_abilities4'); ?></li>
		<li><?php the_field('class_abilities5'); ?></li>
		<li><?php the_field('class_abilities6'); ?></li>
	</ul>

		<?php endwhile; endif; ?>

	</section>

	<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>

<?php get_footer(); ?>