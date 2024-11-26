<?php if( preyantechnosys_header_slider_show() ) : ?>
	<div class="preyantechnosys-slider-wrapper">
		<?php echo preyantechnosys_header_slider(); ?>
		<?php preyantechnosys_slider_quicktext(); ?>
		<?php preyantechnosys_slider_quicktext2(); ?>
		<?php if ( is_active_sidebar( 'slider-menu-widget' ) ) : ?>
			<div class="prt-slider-vertical-menu">
				<?php dynamic_sidebar( 'slider-menu-widget' ); ?>
			</div><!-- .widget-area -->
			<?php endif; ?>
	</div>
<?php endif;  ?>







