<article class="preyantechnosys-box preyantechnosys-box-service preyantechnosys-servicebox-styletwo <?php echo preyantechnosys_servicebox_class(); ?>">
	<div class="preyantechnosys-post-item">
		<div class="preyantechnosys-box-desc col-md-6">
			<div class="prt-featured-outer-wrapper prt-post-featured-outer-wrapper" <?php echo preyantechnosys_featured_link_image();?>>				
				<div class="prt-post-iconbox"><a href=" <?php echo get_permalink(); ?>" class="themetechmount_pf_link"><i class="prt-fixter-icon-plus-1"></i></a>
				</div>
				</div>
		</div>
		<div class="prt-servicebox-content col-md-6">		
			<?php echo preyantechnosys_box_title(); ?>		
			<?php the_excerpt(); ?>
			<?php echo preyantechnosys_box_service_smalldesc(); ?>		
			<div class="preyantechnosys-serviceboxbox-readmore">
					<?php echo preyantechnosys_servicebox_readmore_text(); ?>
			</div>			 
		</div>
	</div>
</article>