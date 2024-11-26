<?php
/*
 *
 *  Single Team member - Default
 *
 */

?>

<div class="prt-team-member-single-content-wrapper prt-team-member-view-default ">
	<div class="prt-team-member-single-content row">
		<div class="prt-team-member-single-content-wrapper col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="tm-team-member-content">
				<?php echo preyantechnosys_team_member_content(); ?>
			</div>
		</div>
	</div>
</div>


<?php edit_post_link( esc_attr__( 'Edit', 'fixter' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>