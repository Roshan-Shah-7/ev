<?php
$post_meta = get_post_meta( get_the_ID(), 'themetechmount_clients_details' , true );
if( !empty($post_meta['clienturl']) ){
	?>
<span class="preyantechnosys-box preyantechnosys-box-client preyantechnosys-client-box-view-boxed-border-logo ">
	
	<a class="tm-client-logo-link" target="_blank" href="<?php echo esc_url($post_meta['clienturl']); ?>">
	<?php echo preyantechnosys_wp_kses(preyantechnosys_featured_image()); ?></a>
	<a class="tm-client-logo-hover" target="_blank" href="<?php echo esc_url($post_meta['clienturl']); ?>">
	<?php echo preyantechnosys_wp_kses(preyantechnosys_featured_image()); ?></a>
</span>
<?php } else { ?>
<span class="preyantechnosys-box preyantechnosys-box-client preyantechnosys-client-box-view-boxed-border-logo ">
	<?php echo preyantechnosys_wp_kses(preyantechnosys_featured_image()); ?>	
	<span class="preyantechnosys-item-thumbnail-hover">
	<span class="preyantechnosys-item-thumbnail-inner">
		<?php echo the_post_thumbnail('full'); ?>
	</span>
	</span>	
</span>
<?php } ?>




