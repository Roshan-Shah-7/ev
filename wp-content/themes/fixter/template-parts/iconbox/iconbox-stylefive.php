<?php
	// Getting data of the  Facts in Digits box
	global $prt_global_iconbox_element_values;
	if( is_array($prt_global_iconbox_element_values) ) :
?>

<div class="preyantechnosys-iconbox preyantechnosys-iconbox-<?php echo esc_attr($boxstyle); ?><?php echo esc_attr($mainclass); ?>">
<div class="preyantechnosys-iconbox-inner">
		<div class="prt-iconbox-wrapper">
			<div class="preyantechnosys-iconbox-icon">
				<?php echo preyantechnosys_wp_kses( $icon_html ); ?>
			</div>
			<div class="preyantechnosys-iconbox-heading">
				<?php echo preyantechnosys_wp_kses($heading_html); ?>
				<?php echo preyantechnosys_wp_kses($content_html); ?>
			</div>	
		</div>
	</div>	

</div>
<?php
	endif;
	$prt_global_iconbox_element_values = '';
?>