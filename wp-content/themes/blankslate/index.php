<?php get_header(); ?>

<section class="col-md-8 main-content-blog" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php comments_template(); ?>
	<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>

<aside class="col-md-4" role="complementary">
		
	<?php get_sidebar(); ?>
	
</aside>

<?php get_footer(); ?>