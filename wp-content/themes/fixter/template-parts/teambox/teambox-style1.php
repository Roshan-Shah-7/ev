<article class="preyantechnosys-box preyantechnosys-box-team preyantechnosys-teambox-style1">
	<div class="preyantechnosys-post-item">
		<div class="preyantechnosys-content-inner">
			<div class="preyantechnosys-team-image-box">
				<?php echo preyantechnosys_wp_kses(preyantechnosys_featured_image('preyantechnosys-img-team-member')); ?> 
								<div class="prt-title">
					<ul class="elementor-icon-list-items marquebox-list">
						<?php 
							$i = 1;
							for ($i = 1; $i <= 5; $i++) {		
							?>
						<li class="elementor-icon-list-item ">
							<span class="marque-text"><?php echo the_title(); ?></span>
						</li>
						<?php } ?>
					</ul>	
				</div>	
			</div>
		</div>
		<div class="preyantechnosys-box-content">			
			<div class="prt-position">	
			<?php echo preyantechnosys_box_title(); ?>
			<span><?php echo preyantechnosys_get_meta( 'preyantechnosys_team_member_details', 'tm_team_info' , 'team_details_line_position' ); ?></span>				
			</div>												
		</div>										
	</div>		
</article>
 