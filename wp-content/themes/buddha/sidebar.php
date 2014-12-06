		<?php $options = get_option('river_theme_options'); ?>
		<div id="sidebar"<?php if ( $options['nofixed']=='true' ) echo ' class="sidebar_fixed"'; ?>>
			<?php if ( !dynamic_sidebar('primary-widget-area') ) : ?>
			<?php endif; ?>
			<div class="meta_and_powered">
				<div class="meta">
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</div>
				<div class="widget">
					<div class="powered">
						&copy;&nbsp;<?php _e('Copyright', 'river'); ?>&nbsp;<?php echo date("Y"); ?>&nbsp;<?php bloginfo('name'); ?>
						 
					</div>
				</div>
			</div>
		</div><!-- end: #sidebar -->
	</div><!-- end: #left_wrap_bg -->
</div><!-- end: #left_wrap -->