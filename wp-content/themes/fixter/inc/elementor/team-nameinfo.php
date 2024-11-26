<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}


class TTMbusiness_Teamnamebox_Widget extends Widget_Base{

	public function get_name() {
		return 'tm_team-nameinfo';
	}

	public function get_title() {
		return esc_attr__( 'Team Member Name & Position', 'fixter' );
	}

	public function get_icon() {
		return 'eicon-bullet-list';
	}

	public function get_categories() {
		return [ 'ttmmedical_team_category' ];
	}

	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);
	}

	protected function register_controls() {
		
		$this->start_controls_section(
			'data_section',
			[
				'label' => esc_attr__( 'General ', 'fixter' ),
			]
		);

		$this->end_controls_section();
	}

	protected function render() {

		$settings	= $this->get_settings_for_display();
		extract($settings);
		$post_id = get_the_ID();
		?>
		<div class="preyantechnosys-team-data">			
			<h2><?php echo preyantechnosys_wp_kses( preyantechnosys_team_member_single_meta( 'position' ) ); ?></h2>
			<h2 class="prt-team-member-single-title"><?php the_title(); ?></h2>
			<div class="prt-short-desc">				
					<?php $return  = nl2br( get_the_excerpt() );
					echo do_shortcode($return); ?>				
				</div>
				<?php echo preyantechnosys_wp_kses( preyantechnosys_team_member_meta_details() ); ?>				
				<?php echo preyantechnosys_team_member_extra_details(); ?>
		</div>
		<div class="clear clr"></div>
		<div class="prt-team-social-link">
		<?php echo preyantechnosys_wp_kses( preyantechnosys_box_team_social_links(), 'box_team_social_links' ); ?></div>
		<?php
	}


}
// Register widget
Plugin::instance()->widgets_manager->register( new TTMbusiness_Teamnamebox_Widget() );