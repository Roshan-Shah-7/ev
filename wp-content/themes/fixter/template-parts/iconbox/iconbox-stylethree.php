<?php
	// Getting data of the  Facts in Digits box
	global $prt_global_iconbox_element_values;
	if( is_array($prt_global_iconbox_element_values) ) :
?>

<div class="preyantechnosys-iconbox preyantechnosys-iconbox-<?php echo esc_attr($boxstyle); ?><?php echo esc_attr($mainclass); ?> preyantechnosys-iconcolor-<?php echo esc_attr($icon_color_html); ?> preyantechnosys-iconsize-<?php echo esc_attr($icon_size_html); ?>">
<div class="preyantechnosys-iconbox-inner">
		<div class="prt-iconbox-wrapper">			
			<div class="preyantechnosys-iconbox-icon prt-wrap-cell">
				<?php echo preyantechnosys_wp_kses( $icon_html ); ?>
			</div>
			<div class="themetechmount-iconbox-heading prt-wrap-cell">
				<?php echo preyantechnosys_wp_kses($heading_html); ?>						
			</div>			
		</div>
	</div>	
</div>
<?php
	endif;
	$prt_global_iconbox_element_values = '';
?>