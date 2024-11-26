<?php
$imgsize = 'preyantechnosys-img-portfolio';
global $tm_global_sc_loop_count;
if( in_array( $tm_global_sc_loop_count, array( 2, 7, 12 ) ) ){
	$imgsize = 'preyantechnosys-img-masonry-big';
}
?>

<article class="preyantechnosys-box preyantechnosys-box-portfolio preyantechnosys-portfoliobox-styleone <?php echo preyantechnosys_portfoliobox_class(); ?>">
	<div class="preyantechnosys-post-item">	
		<div class="preyantechnosys-post-item-inner">
			<?php echo preyantechnosys_featured_image(esc_attr($imgsize)); ?>
			<div class="preyantechnosys-box-overlay">
				<div class="preyantechnosys-box-content">
					<div class="preyantechnosys-box-category"><div class="tm-cat">
					<?php echo preyantechnosys_portfolio_category(false); ?></div></div>				
					<?php echo preyantechnosys_box_title(); ?>
				</div>
			</div>
			<div class="tm-post-iconbox"><a href=" <?php echo get_permalink(); ?>" class="preyantechnosys_pf_link"><i class=" prt-fixter-icon-plus"></i></a></div>
		</div>		
	</div>
</article>