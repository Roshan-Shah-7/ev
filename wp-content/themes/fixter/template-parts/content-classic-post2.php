<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Fixter
 * @since Fixter 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( preyantechnosys_sanitize_html_classes(preyantechnosys_postlayout_class()) ); ?> >				
	
	<div class="prt-blog-classic-box-content">	
		<?php
		if( 'quote' != get_post_format() && 'link' != get_post_format() ) : ?>			
		<?php endif; ?>	
		<?php if( !is_single() ) : ?>
		<header class="entry-header">
				<?php if( 'aside' != get_post_format() && 'quote' != get_post_format() && 'link' != get_post_format() ) : ?>
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<?php endif; ?>
		</header><!-- .entry-header -->
		<?php endif; ?>	
	<?php if( 'quote' != get_post_format() ) : ?>
		<div class="entry-content">
			
			<?php if( !is_single() ) : ?>
			
				<div class="preyantechnosys-box-desc-text"><?php echo preyantechnosys_blogbox_description(); ?></div>
			<?php endif; ?>
		
			<?php

			the_content( sprintf(
				esc_attr__( 'Read More %s', 'fixter' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			?>

			<div class="preyantechnosys-blogbox-footer-readmore">
				<?php echo preyantechnosys_blogbox_readmore(); ?>
			</div>	
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
	
	<?php endif; ?>	
	<?php
		if( is_single() ){
		$social_links = '';
		if( function_exists('preyantechnosys_fixter_cs_framework_init') ){	
			$social_links = preyantechnosys_social_share_links('post');
		}
		$tags_list = get_the_tag_list( '', esc_attr_x( ' ', 'Used between list items, there is a space after the comma.', 'fixter' ) );
		if( !empty($social_links) || !empty($tags_list) ){
	?>
		<div class="preyantechnosys-blogbox-sharebox">	
				<?php echo preyantechnosys_social_share_box('post'); ?>	
				<?php
					if( !empty($tags_list) ) : ?>	
						<div class="tm_tag_lists"><span class="themetechmount-tags-links-title"><?php echo esc_attr__( 'Tags:', 'fixter' );?> </span><span class="preyantechnosys-tags-links"> <?php echo preyantechnosys_wp_kses($tags_list); ?></span></div>
					<?php endif; ?>		
		</div>	
		<?php } }	?>	
	<?php
	// Author bio.
	if ( is_single() && get_the_author_meta( 'description' ) ) :
		get_template_part( 'template-parts/author-bio', 'customized' );
	endif;
	?>	
	</div>
</article><!-- #post-## -->
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( is_single() && ( comments_open() || get_comments_number() ) ) : ?>
		<div class="prt-blog-classic-box-comment">
			<?php comments_template(); ?>
		</div><!-- .prt-blog-classic-box-comment -->
	<?php endif; ?>