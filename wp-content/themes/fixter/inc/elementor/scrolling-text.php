<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}

/**
 *  Fact & Digit Widget.
*/
 
class Bismount_Scrollingtext_Widget extends Widget_Base{

	public function get_name() {
		return 'prt_scrollingtext_element';
	}

	public function get_title() {
		return esc_attr__( 'Play Video Box', 'fixter' );
	}

	public function get_icon() {
		return 'eicon-site-title';
	}

	public function get_categories() {
		return [ 'fixter_category' ];
	}

	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);
	}  
	
	protected function register_controls() {

		$this->start_controls_section(
			'section_st',
			[
				'label' => __('Play Video Box', 'fixter'),
			]
		);
		
		
		$this->add_control(
			'stext_title',
			[
				'label' => __('Left Title', 'fixter'),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => __('Heading One', 'fixter'),
			]
		);
		
		$this->add_control(
			'stext_title1',
			[
				'label' => __('Right Title', 'fixter'),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
				'default' => __('Heading Two', 'fixter'),
			]
		);
		
		$this->add_control(
			'stext_video_code',
			[
				'label' => __('Video Code', 'fixter'),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		$this->end_controls_section();
		
		// Title Style Section
		$this->start_controls_section(
			'section_scroll_text',
			[
				'label' => __('Title', 'fixter'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'mobile_typography',
				'label' => __('Typography', 'fixter'),
				'selector' => '{{WRAPPER}} .tm-reel-title',
			]
		);

		$this->add_control(
			'sub_title_hover_color',
			[
				'label' => __('Color', 'fixter'),
				'type' => Controls_Manager::COLOR,

				'selectors' => [
					'{{WRAPPER}} .tm-reel-title' => 'color: {{VALUE}};',
				],

			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		
		$settings	= $this->get_settings_for_display();
		extract($settings);
		$return = '';
	?>
	<div class="tm-element-reel-video-style-1">
	  <div class="tm-element-inner">
	   <div class="tm-element-posts-wrapper">
			<div class="tm-reel-video-contant">
				<h2 class="tm-reel-title tm-reel-lefttitle"><?php echo preyantechnosys_wp_kses($settings['stext_title']); ?></h2>
				
				<div data-video-urls="<?php echo esc_url($settings['stext_video_code']); ?>" data-autoplay="true" data-loop="true" class="video-content w-background-video w-background-video-atom" >
				<video autoplay="" loop="" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover"><source src="<?php echo esc_url($settings['stext_video_code']); ?>" data-wf-ignore="true"></video>
				</div>
				
				<h2 class="tm-reel-title tm-reel-righttitle"><?php echo preyantechnosys_wp_kses($settings['stext_title1']); ?></h2>  
			</div>
		</div>
	 </div> 
	</div>
<?php	
	}
}
// Register widget
Plugin::instance()->widgets_manager->register( new Bismount_Scrollingtext_Widget() );