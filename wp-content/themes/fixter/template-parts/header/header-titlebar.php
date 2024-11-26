<?php
$titlebar_content = preyantechnosys_titlebar_content();
$title_classes = '';
	$blog_details_style = preyantechnosys_get_option('blog_details_style');
	if( !empty($blog_details_style) && is_singular('post') ) {
		$title_classes = 'prt-post-details-' . $blog_details_style . '';
	}
	
$class              = '';
$layout             = preyantechnosys_get_option('layout');
$full_wide_elements = preyantechnosys_get_option('full_wide_elements');

if( $layout=='fullwide' && is_array($full_wide_elements) && in_array('header', $full_wide_elements) ){
	$class = 'container-fullwide';
} else {
	$class = 'container';
}
if( preyantechnosys_titlebar_show() ) : ?>

	<?php if( !empty($titlebar_content) ){ ?>
	
		<div class="prt-titlebar-wrapper prt-bg <?php echo preyantechnosys_sanitize_html_classes(preyantechnosys_titlebar_classes()); ?> <?php echo preyantechnosys_wp_kses($title_classes); ?>">
			<div class="prt-titlebar-wrapper-bg-layer prt-bg-layer"></div>
			<div class="prt-titlebar entry-header">
				<div class="prt-titlebar-inner-wrapper">
					<div class="prt-titlebar-main">
						
						<div class="<?php echo preyantechnosys_wp_kses($class); ?>">
							<div class="tm-titlebar-main-inner">
						
					<?php if(preyantechnosys_get_option('blog_details_style') == 'style1' &&  is_singular('post') ) { ?>						
						
<?php } ?>	

						
<?php 

$post_id =  get_the_ID();
$author_id = get_post_field ('post_author', $post_id);
$display_name = get_the_author_meta( 'nickname' , $author_id ); 

$psingle_view = '';
$portfolio_viewstyle = preyantechnosys_get_option('portfolio_viewstyle');
$single_viewstyle = get_post_meta( get_the_ID(), 'preyantechnosys_portfolio_view', true );
if( !empty($portfolio_viewstyle) ){
		$psingle_view = $portfolio_viewstyle;
	}
	if( !empty($single_viewstyle['viewstyle']) ){
		$psingle_view = $single_viewstyle['viewstyle'];
	}
if($psingle_view == 'top' &&  is_singular('tm_portfolio') ) { 
	// Portfolio Category
	$tag_value = get_the_term_list( get_the_ID(), 'tm_portfolio_category', '', ' ', '' );
	if( !empty($tag_value) ){ ?>
		<div class="tm-pf-single-category">
			<?php echo preyantechnosys_wp_kses($tag_value); ?>
		</div>
	<?php }
} ?>
						<?php if(is_singular('post') ) { ?>	
						<div class="prt-entry-meta1"><div class="tm-avatar-wrapper">							
								<?php echo fixter_entry_meta('blogclassic');  // blog post meta details ?>
							</div>
						<?php } ?>
						<?php echo preyantechnosys_wp_kses( $titlebar_content, 'titlebar' ); ?>	
						</div>
<div class="prt-featured-outer-wrapper prt-post-featured-outer-wrapper" <?php echo preyantechnosys_featured_link_image();?>></div>								
							<?php if(preyantechnosys_get_option('blog_details_style') == 'style1' &&  is_singular('post') ) { ?>		
							 
						<?php } ?>
						 
								
							</div>
						</div>
						
					</div><!-- .prt-titlebar-main -->
				</div><!-- .prt-titlebar-inner-wrapper -->
			</div><!-- .prt-titlebar -->
		</div><!-- .prt-titlebar-wrapper -->
		
	<?php } else { ?>
	
		<hr class="prt-titlebar-border" />
	
	<?php } ?>

<?php endif;  // preyantechnosys_titlebar_show() ?>







