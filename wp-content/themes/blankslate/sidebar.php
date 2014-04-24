
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<div id="primary" class="widget-area">

			<ul class="xoxo">
				<?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</ul>

			<!--<div class="list-group-item">
				<img class="paizo" src="<?php bloginfo('stylesheet_directory'); ?>/Images/paizo.png">
			</div>-->

		</div>
	<?php endif; ?>
