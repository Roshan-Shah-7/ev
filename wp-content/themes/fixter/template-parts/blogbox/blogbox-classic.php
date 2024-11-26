<article <?php post_class( preyantechnosys_blog_classic_extra_class() ); ?>>
		<div class="prt-featured-outer-wrapper prt-post-featured-outer-wrapper">
		<?php echo preyantechnosys_get_featured_media( '', 'preyantechnosys-img-blog' ); // Featured content?>	
	</div>
	
<?php
$tm_box_exclass = '';
$blog_readmore_text = preyantechnosys_get_option('blog_readmore_text');
if( strpos(get_the_content(), '"more-link"')!==false && get_post_format()!='quote' && get_post_format()!='link' ) {
	$tm_box_exclass="prt-boxwith-morebutton";
}
?>	

	<div class="prt-blog-classic-box-content <?php echo preyantechnosys_sanitize_html_classes($tm_box_exclass); ?>">

		<div class="entry-content">
			<div class="preyantechnosys-box-desc-text">
			<?php echo fixter_entry_meta(); ?>
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
				<?php 	
					if ( !empty( get_the_content() ) ){ 
				?>
					<div class="preyantechnosys-blogbox-footer-readmore">
					<?php echo preyantechnosys_blogclassic_readmore(); ?>
				</div>
				<?php } ?>
			</div>	
			<div class="preyantechnosys-box-border"></div>			
			<div class="clear clr"></div>		
			<?php
			// pagination if any
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_attr__( 'Pages:', 'fixter' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</div><!-- .entry-content -->
		
	</div>
	
</article>