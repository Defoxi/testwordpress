<?php get_header(); ?>

	<section class="col-md-8" id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<h3><?php the_title(); ?></h3>

	<ul>
		<li><?php the_field('img1_info'); ?></li>
		<li><img class="char" src="<?php the_field('image1'); ?>" /></li>
		<li><?php the_field('img2_info'); ?></li>
		<li><img class="char" src="<?php the_field('image2'); ?>" /></li>
		<li><?php the_field('img3_info'); ?></li>
		<li><img class="char2" src="<?php the_field('image3'); ?>" /></li>
		<li><?php the_field('img4_info'); ?></li>
		<li><img class="char3" src="<?php the_field('image4'); ?>" /></li>
		<li><?php the_field('img5_info'); ?></li>
		<li><img class="char2" src="<?php the_field('image5'); ?>" /></li>
		<li><?php the_field('img6_info'); ?></li>
		<li><img class="char" src="<?php the_field('image6'); ?>" /></li>
	</ul>

		<?php endwhile; endif; ?>

	</section>

	<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>

<?php get_footer(); ?>