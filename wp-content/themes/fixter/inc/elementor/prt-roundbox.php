<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}

/**
 *  Icon Heading Box
*/
class Invess_Roundbox_Widget  extends Widget_Base{
	
	public function get_name() {
		return 'tm_roundbox';
	}
	
	public function get_title() {
		return esc_attr__( 'Round Box', 'fixter' );
	}

	public function get_icon() {
		return 'eicon-flip-box';
	}

	public function get_categories() {
		return [ 'fixter_category' ];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_attr__( 'Content', 'fixter' ),
			]
		);
		

		$this->add_control (
			'ttm_circle_animation',
			[
				'label' => esc_attr__( 'Border Color', 'fixter' ),
				'description' => esc_attr__( 'show circle box border border color.', 'fixter' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
					'selectors' => [
						'{{WRAPPER}} .ttm-circle-animation' => 'border-color: {{VALUE}};',
					],
			]
		);


		$this->add_control (
		'ttm_circle_1',
		[
			'label' => esc_attr__( 'circle-1', 'fixter' ),
			'description' => esc_attr__( 'show circle-1 background color.', 'fixter' ),
			'type' => \Elementor\Controls_Manager::COLOR,
			'default' => '',
				'selectors' => [
					'{{WRAPPER}} .ttm-circle-animation span.ttm-circle-1:before' => 'background-color: {{VALUE}};',
				],
		]
	);

	$this->add_control (
			'ttm_circle_2',
			[
				'label' => esc_attr__( 'circle-2', 'fixter' ),
				'description' => esc_attr__( 'show circle-2 background color.', 'fixter' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
					'selectors' => [
						'{{WRAPPER}} .ttm-circle-animation span.ttm-circle-2:after' => 'background-color: {{VALUE}};',
					],
			]
		);

		$this->add_responsive_control(
			'tmhis_font_size2',
			[
				'label' => esc_html__( 'Circle Size', 'fixter' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 800,
				],
				'range' => [
					'px' => [
						'min' => 100,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .ttm-circle-animation' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		
		

		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		extract($settings);
	?>
	<div class="ttm-round-animation-circle">
	<div class="ttm-circle-animation ">
		<span class="ttm-circle-1"></span>
		<span class="ttm-circle-2"></span>
	</div>
</div>
	<?php

	}

	protected function _content_template() {}
	
}
// Register widget
Plugin::instance()->widgets_manager->register( new Invess_Roundbox_Widget() );

