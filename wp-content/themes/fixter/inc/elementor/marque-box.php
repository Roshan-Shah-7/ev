<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}

/**
 *  Steps Box
*/
 
class Fixter_Marquebox_Widget extends Widget_Base{

	public function get_name() {
		return 'prt_marquebox_element';
	}

	public function get_title() {
		return esc_attr__( 'Marque Box', 'fixter' );
	}

	public function get_icon() {
		return ' eicon-testimonial-carousel';
	}

	public function get_categories() {
		return [ 'buxxio_category' ];
	}

	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);
	}

	protected function register_controls() {

		$this->start_controls_section(
			'heading_section',
			[
				'label' => esc_attr__( 'General', 'fixter' ),
			]
		);
		
		$this->add_control(
			'style',
			[
				'label'			=> esc_attr__( 'Select Marque Style', 'fixter' ),
				'description'	=> esc_attr__( 'Select Marque style.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'label_block'	=> true,
				'options' => [
					'style1'	=> esc_attr( 'Style 1' ),					
					'style2'	=> esc_attr( 'Style 2' ),					
				],
				'default' => esc_attr( 'style1' ),
			]
		);

		$this->end_controls_section();
	
		$this->start_controls_section(
			'data_section',
			[
				'label' => esc_attr__( 'Boxes Content', 'fixter' ),
			]
        );

		$repeater = new Repeater();

		$repeater->add_control(
			'label',
			[
				'label' => esc_attr__( 'Box Title', 'fixter' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_attr__( 'Box Title', 'fixter' ),
				'placeholder' => esc_attr__( 'Box Title', 'fixter' ),
				'label_block' => true,
			]
		);
		

        $this->add_control(
			'boxes',
			[
				'label'		=> esc_attr__( 'Boxes', 'fixter' ),
				'type'		=> Controls_Manager::REPEATER,
				'fields'	=> $repeater->get_controls(),
				'default'	=> [
					[
						'label'		=> esc_attr__( 'This is first box', 'fixter' ),
					],
					[
						'label'		=> esc_attr__( 'This is second box', 'fixter' ),
					],
				],
				'title_field' => '{{{ label }}}',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings	= $this->get_settings_for_display();
		extract($settings);
		$return = '';
		?>
		<div class="preyantechnosys-marqueboxes-wrapper prt-marquebox-<?php echo esc_attr($style); ?> row multi-columns-row">
			<ul class="elementor-icon-list-items marquebox-list">
			<?php
				$i=1;
				foreach( $settings['boxes'] as $box ){
					$label_html		= ( !empty($box['label']) ) ? '<span class="marque-text">'.esc_html($box['label']).'</span>' : '' ;
					ob_start();
					include( get_template_directory() . '/template-parts/marquebox/marquebox-'.esc_attr($style).'.php' );
					
					$return .= ob_get_contents();
					ob_end_clean();
					$i++;
					
					include( get_template_directory() . '/template-parts/marquebox/marquebox-'.esc_attr($style).'.php' ); 
					
				}		
				
				echo preyantechnosys_wp_kses($return);
			?>
			</ul>
		</div>
	    <?php
	}
}
// Register widget
Plugin::instance()->widgets_manager->register( new Fixter_Marquebox_Widget() );