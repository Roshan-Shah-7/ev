<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}


class TTMbusiness_Teambox_Widget extends Widget_Base{

	public function get_name() {
		return 'tm_team-img';
	}

	public function get_title() {
		return esc_attr__( 'Team Member Image Box', 'fixter' );
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
			<div class="preyantechnosys-team-img">
					<?php echo preyantechnosys_get_featured_media(); ?>				
				</div>
		<?php
	}


}
// Register widget
Plugin::instance()->widgets_manager->register( new TTMbusiness_Teambox_Widget() );