		<aside id="sidebar-responsive" class="wrapper" role="complementary">
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
				<div class="widget">
					<h3 class="wtitle">Blog Categories</h3>
					<ul>
						<?php wp_list_categories('title_li='); ?>
					</ul>
				</div>
				
				<div class="widget">
					<h3 class="title">Post Archives</h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</div>
		<?php endif; ?>
		</aside> <!-- /#sidebar-responsive -->