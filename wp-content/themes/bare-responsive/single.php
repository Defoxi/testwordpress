<?php get_header(); ?>
		<div id="content" class="wrapper">
			<?php get_sidebar(); ?>
			
			<div id="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="post" role="article">
					<header class="posthead">
						<h2 class="bigger"><?php the_title(); ?></h2>
						<span class="meta">
							<i>Published <time datetime="<?php echo the_time('Y-m-j'); ?>"><?php echo the_time(get_option('date_format')); ?></time> by <?php the_author_posts_link(); ?>.</i>
							<i>Filed under <a href="#" rel="category"><?php the_category(', '); ?></a>. Total of <a href="<?php comments_link(); ?> "><?php comments_number( 'no comments', '1 comment', '% comments' ); ?></a> in the discussion.<?php edit_post_link('Admin Edit', ' ', '.'); ?></i>
						</span>
					</header>
					
					<section class="post-content clearfix">
						<?php the_content(); ?>
					</section>
					
					<?php // uncomment for tags the_tags('<p class="tags"><span>Post Tags:</span> ', ', ', '</p>'); ?>
					
					<?php comments_template(); ?>
				</article><!-- /.post -->
				<?php endwhile; ?>
				
				<?php else : ?>
					<article id="post-not-found" class="post">
						<header class="posthead">
					  	<h2>Whoops! Looks like we can't find this post.</h2>
					  </header>
					  
					  <section class="post-content">
					  	<p>It seems like this post is missing somewhere. Double-check the URL or try navigating back via the website menu links.</p>
					  </section>
					</article>
				<?php endif; ?>
			</div> <!-- /#main -->
			
		</div> <!-- /#content -->
		
		<br style="clear:both;">

		<?php get_sidebar( 'responsive' ); ?>
<?php get_footer(); ?>