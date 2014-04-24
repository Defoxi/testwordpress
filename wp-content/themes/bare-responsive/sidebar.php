			<aside id="sidebar" role="complementary">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
				<div class="widget">
					<h3>Search</h3>
					<?php get_search_form(); ?>
				</div>
				
				<div class="widget">
					<h3 class="wtitle">Pages</h3>
					<ul>
						<?php wp_list_pages('title_li='); ?>
					</ul>
				</div>
				
				<div class="widget">
					<h3 class="wtitle">Categories</h3>
					<ul>
						<?php wp_list_categories('title_li='); ?>
					</ul>
				</div>
				
				<div class="widget">
					<h3 class="title">Archives</h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</div>
				
				<div class="widget">
					<h3 class="title">Meta</h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</div>
			<?php endif; ?>
			</aside>