
<li class="prt_listimgbox_wrap <?php if($count == 1) { echo 'active'; } ?> border_<?php echo esc_attr($boxborder_html)?>">
		<?php echo preyantechnosys_wp_kses($label_html); ?>
		<div class="preyantechnosys-listimgbox-heading">
			<?php echo preyantechnosys_wp_kses($sublabel_html); ?>
			<?php echo preyantechnosys_wp_kses($smalltext_html); ?>
		</div>
		<div class="award_picture">
			<div class="overlay-bg"></div>
			<?php echo preyantechnosys_wp_kses( $icon_image ); 	?>
		</div>
		<div class="prt-listbox-icon"><?php echo preyantechnosys_wp_kses( $button_html ); 	?></div>
</li>

