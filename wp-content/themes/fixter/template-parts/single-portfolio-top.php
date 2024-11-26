<?php
/*
 *
 *  Single Portfolio - Top image
 *
 */

?>

<div class="prt-pf-single-content-wrapper prt-pf-view-top-image">	
	<div class="prt-pf-single-content-wrapper-innerbox">
		<div class="row">
			<div class="prt-pf-detail-box">
				<div class="preyantechnosys-pf-single-featured-area col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo preyantechnosys_box_title(); ?>
					<?php if( has_excerpt() ){ ?>
							<div class="prt-short-desc">
								<?php $return  = nl2br( get_the_excerpt() );
								echo do_shortcode($return); ?>
							</div>
						<?php } ?>
				</div><!-- .preyantechnosys-pf-single-featured-area -->	
<div class="anchor" style="height: 0px;"></div>				
				<div class="preyantechnosys-pf-single-content-area col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="preyantechnosys-pf-single-detail-box animateparallax">						
						
						<?php echo preyantechnosys_box_portfolio_viewproject_btn(); ?>
						<?php echo preyantechnosys_portfolio_detailsbox(); ?>
						<div class="prt-pf-single-content-social">
							<?php echo preyantechnosys_social_share_box('portfolio'); /* Social share */ ?>
						</div>
					</div>						
				</div><!-- .preyantechnosys-pf-single-content-area -->
			</div>			
			<div class="prt-pf-single-content-area">	
				<?php echo preyantechnosys_portfolio_description(); ?>
			</div>			
		</div>
	</div>	
	
</div>

<?php edit_post_link( esc_attr__( 'Edit', 'fixter' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

