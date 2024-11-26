<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}

/**
 *  Icon Heading Box
*/
class Fixter_IconHeadingbox_Widget  extends Widget_Base{
	
	public function get_name() {
		return 'prt_icon_heading';
	}
	
	public function get_title() {
		return esc_attr__( 'Icon Box', 'fixter' );
	}

	public function get_icon() {
		return 'eicon-icon-box';
	}

	public function get_categories() {
		return [ 'fixter_category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_attr__( 'Content', 'fixter' ),
			]
		);
		
		$this->add_control(
			'view',
			[
				'label'			=> esc_attr__( 'Box Design', 'fixter' ),
				'description'	=> esc_attr__( 'Select IconBox style.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'label_block'	=> true,
				'default'		=> 'styleone',
				'prefix'		=> 'preyantechnosys-iconbox preyantechnosys-iconbox-',
				'options' => [
					'styleone'	=> esc_attr( 'Style 1' ),
					'styletwo'	=> esc_attr( 'Style 2' ),
					'stylethree'	=> esc_attr( 'Style 3' ),
					'stylefive'	=> esc_attr( 'Style 5' ),
				],
			]
		);
		
        $this->add_control(
			'icon_type',
			[
				'label' => esc_attr__( 'Icon Type', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'icon'	=> esc_attr__( 'Icon', 'fixter' ),
					'image'	=> esc_attr__( 'Image', 'fixter' ),
					'text'	=> esc_attr__( 'Text', 'fixter' ),
					'none'	=> esc_attr__( 'None', 'fixter' ),
				],
				'default' => esc_attr( 'icon' ),
			]
		);
		
        $this->add_control(
			'icon',
			[
				'label' => __( 'Icon', 'fixter' ),
				'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'icon_type' => 'icon',
                ]
            ]

		);

        $this->add_control(
			'icon_image',
			[
				'label' => __( 'Select Image for Icon', 'fixter' ),
				'description' => __( 'image will appear at icon position', 'fixter' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'icon_type' => 'image',
                ]
			]
		);
		
        $this->add_control(
			'icon_text',
			[
				'label' => esc_attr__( 'Text for Icon', 'fixter' ),
				'description' => esc_attr__( 'Text will appear at icon position', 'fixter' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_attr__( '01', 'fixter' ),
				'placeholder' => esc_attr__( 'Enter text here', 'fixter' ),
                'label_block' => true,
                'condition' => [
                    'icon_type' => 'text',
                ]
			]
		);
		$this->add_control(
			'icon_position',
			[
				'label' => esc_attr__( 'Icon Position', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'left'	=> esc_attr( 'Left' ),
					'right'	=> esc_attr( 'Right' ),
						
				],
				'default' => esc_attr( 'left' ),
                'condition' => [
                    'view' => ['styleten']
                ]
			]
		);
		$this->add_control(
			'icon_link',
			[
				'label' => esc_attr__( 'Icon Link', 'fixter' ),
				'type' => Controls_Manager::URL,
				'label_block' => true,
				'condition' => [
					'view' => ['stylethree']
				],
			]
		);
		$this->add_control(
			'icon_bgcolor',
			[
				'label' => esc_attr__( 'Icon Background Color', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'skincolor'	=> esc_attr( 'Skin color' ),
					'darkgrey'	=> esc_attr( 'Dark Color' ),
					'grey'		=> esc_attr( 'Grey Color' ),	
					'white'		=> esc_attr( 'White Color' ),
					'extra'		=> esc_attr( 'Extra Color' ),
					'none'		=> esc_attr( 'Transparent' ),
				],
				'default' => esc_attr( 'skincolor' ),
				'condition' => [
                    'view' => ['stylethree','stylesix','stylenine','styleten'],
                ]
			]
		);
		
		$this->add_control(
			'icon_shape',
			[
				'label' => esc_attr__( 'Icon shape', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'square'	=> esc_attr( 'Square' ),
					'rounded'	=> esc_attr( 'Rounded' ),
					'round'		=> esc_attr( 'Circle' ),	
					'c_outline'		=> esc_attr( 'Circle Outline' ),	
				],
				'default' => esc_attr( 'square' ),
				'condition' => [
                   'view' => ['stylethree','stylesix','stylenine','styleten'],
                ]
			]
		);
		
		$this->add_control(
			'icon_size',
			[
				'label' => esc_attr__( 'Icon Size', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'large'	=> esc_attr( 'Large' ),
					'medium'	=> esc_attr( 'Medium' ),
					'small'		=> esc_attr( 'Small' ),	
					'default'		=> esc_attr( 'Default' ),	
				],
				'default' => esc_attr( 'default' ),
			]
		);
		$this->add_control(
			'icon_color',
			[
				'label' => esc_attr__( 'Icon Color', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'skincolor'	=> esc_attr( 'Skin color' ),
					'darkgrey'	=> esc_attr( 'Dark Color' ),
					'grey'		=> esc_attr( 'Grey Color' ),	
					'white'		=> esc_attr( 'White Color' ),
					'default'	=> esc_attr( 'Default Color' ),	
				],
				'default' => esc_attr( 'skincolor' ),
				'condition' => [
                   'view' => ['styleone','styletwo','stylethree','stylefour'],
                ]
			]
		);

		$this->add_control(
			'heading',
			[
				'label' => esc_attr__( 'Heading', 'fixter' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_attr__( 'Welcome to our site', 'fixter' ),
				'placeholder' => esc_attr__( 'Enter text for heading line.', 'fixter' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'heading_link',
			[
				'label' => esc_attr__( 'Heading Link', 'fixter' ),
				'type' => Controls_Manager::URL,
				'label_block' => true,
			]
		);
		$this->add_control(
			'subheading',
			[
				'label' => esc_attr__( 'Subheading', 'fixter' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_attr__( 'This is Subtitle', 'fixter' ),
				'placeholder' => esc_attr__( 'Enter text for subheading line.', 'fixter' ),
				'label_block' => true,
				
			]
		);
		$this->add_control(
			'subheading_link',
			[
				'label' => esc_attr__( 'Subtitle Link', 'fixter' ),
				'type' => Controls_Manager::URL,
				'label_block' => true,
				
			]
		);
		$this->add_control(
			'desc',
			[
				'label' => esc_attr__( 'Description Text', 'fixter' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_attr__( 'Enter description text', 'fixter' ),
				'condition' => [
                    'view' => ['styleone','styletwo','stylethree','stylefour','stylesix','stylenine','stylefive','styleten','styleeleven','styletwelve'],
                ]
			]
		);
		$this->add_responsive_control(
			'text_align',
			[
				'label' => esc_attr__( 'Text alignment', 'fixter' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left'    => [
						'title' => esc_attr__( 'Left', 'fixter' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_attr__( 'Center', 'fixter' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_attr__( 'Right', 'fixter' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'prefix_class' => 'prt-align-',
				'selectors' => [
					'{{WRAPPER}} .prt-heading-subheading' => 'text-align: {{VALUE}};',
				],
				'dynamic' => [
					'active' => true,
				],
				'default' => 'left',
				'condition' => [
                    'view' => ['styleeleven'],
                ]
			]
		);
		$this->add_control(
			'iconbox_bg_number',
			[
				'label' => esc_attr__( 'Number Text', 'fixter' ),
				'description' => esc_attr__( 'Text will appear as number', 'fixter' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_attr__( '01', 'fixter' ),
                'label_block' => true,
				'condition' => [
					'view' => 'styleone',
				],
			]
		);
		$this->add_control(
			'btn_title',
			[
				'label' => esc_attr__( 'Button Title', 'fixter' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_attr__( 'Read More', 'fixter' ),
				'separator'		=> 'before',
				'placeholder' => esc_attr__( 'Enter button title text', 'fixter' ),
				'label_block' => true,
				'condition' => [
                    'view' => ['styleone','stylethree','styletwelve','styleeleven'],
                ]
			]
		);
		
		$this->add_control(
			'btn_link',
			[
				'label' => esc_attr__( 'Button Link', 'fixter' ),
				'type' => Controls_Manager::URL,
				'label_block' => true,
				'condition' => [
                    'view' => ['styleone','stylethree','styletwelve','styleeleven'],
                ]
			]
		);

		$this->add_control(
			'tag_options',
			[
				'label'			=> esc_attr__( 'Tags for SEO', 'fixter' ),
				'type'			=> Controls_Manager::HEADING,
				'separator'		=> 'before',
			]
		);
		$this->add_control(
			'heading_tag',
			[
				'label' => esc_attr__( 'Heading Tag', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'h1'	=> esc_attr( 'H1' ),
					'h2'	=> esc_attr( 'H2' ),
					'h3'	=> esc_attr( 'H3' ),
					'h4'	=> esc_attr( 'H4' ),
					'h5'	=> esc_attr( 'H5' ),
					'h6'	=> esc_attr( 'H6' ),
					'div'	=> esc_attr( 'DIV' ),
				],
				'default' => esc_attr( 'h2' ),
			]
		);
		$this->add_control(
			'subheading_tag',
			[
				'label' => esc_attr__( 'Subheading Tag', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'h1'	=> esc_attr( 'H1' ),
					'h2'	=> esc_attr( 'H2' ),
					'h3'	=> esc_attr( 'H3' ),
					'h4'	=> esc_attr( 'H4' ),
					'h5'	=> esc_attr( 'H5' ),
					'h6'	=> esc_attr( 'H6' ),
					'div'	=> esc_attr( 'DIV' ),
				],
				'default' => esc_attr( 'h4' ),
				'condition' => [
                    'view' => ['style11'],
                ]
			]
		);
		
		$this->add_control(
			'smallicon_link',
			[
				'label' => esc_attr__( 'URL (Link)', 'fixter' ),
				'type' => Controls_Manager::URL,
				'label_block' => true,
				'description' => esc_attr__( 'Add link to Bottom icon.', 'fixter' ),
				'condition' => [
					'view' => 'style11',
				],
			]
		);

		$this->end_controls_section();

	$this->start_controls_section(
			'style_section',
			[
				'label' => esc_attr__( 'Typo Settings', 'fixter' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'heading_title',
				[
					'label' => esc_attr__( 'Heading', 'fixter' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);

			$this->add_control(
				'heading_color',
				[
					'label' => esc_attr__( 'Color', 'fixter' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .prt-element-content-heading' => 'color: {{VALUE}};',
						'{{WRAPPER}} .prt-element-content-heading > a' => 'color: {{VALUE}};',
					]
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'heading_typography',
					'selector' => '{{WRAPPER}} .prt-custom-heading',
				]
			);
			$this->add_responsive_control(
				'heading_bottom_space',
				[
					'label' => esc_attr__( 'Spacing', 'fixter' ),
					'type' => Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .prt-custom-heading' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			$this->add_control(
				'heading_subheading',
				[
					'label' => esc_attr__( 'Sub Heading', 'fixter' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'stitle_color',
				[
					'label' => esc_attr__( 'Color', 'fixter' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .prt-element-subheading' => 'color: {{VALUE}};',
						'{{WRAPPER}} .prt-element-subheading > a' => 'color: {{VALUE}};',
					]
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'subheading_typography',
					'selector' => '{{WRAPPER}} .prt-element-subheading',
				]
			);
			$this->add_responsive_control(
				'subheading_bottom_space',
				[
					'label' => esc_attr__( 'Spacing', 'fixter' ),
					'type' => Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .prt-element-subheading' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

			$this->add_control(
				'heading_desc',
				[
					'label' => esc_attr__( 'Description', 'fixter' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);

			$this->add_control(
				'desc_color',
				[
					'label' => esc_attr__( 'Color', 'fixter' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .prt-element-content-desctxt' => 'color: {{VALUE}};',
					]
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'desc_typography',
					'selector' => '{{WRAPPER}} .prt-element-content-desctxt',
				]
			);
			$this->add_responsive_control(
				'desc_bottom_space',
				[
					'label' => esc_attr__( 'Spacing', 'fixter' ),
					'type' => Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .prt-element-content-desctxt' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		extract($settings);


		global $prt_global_iconbox_element_values;
		$prt_global_iconbox_element_values = array();
		
		$icon_html = $heading_html = $subheading_html = $content_html = $nav_html = $button_html = $icon_color_html = $icon_bgcolor_html = $icon_shape_html = $icon_size_html = $iconbox_bg_number = $icon_position_html = '';
		
		wp_enqueue_style( 'fixter-iconbox' );
		if( file_exists( locate_template( '/template-parts/iconbox/iconbox-'.esc_attr($view).'.php', false, false ) ) ){
			$icon_type_class = '';

			if( !empty($settings['icon_type']) ){

				if( $settings['icon_type']=='text' ){
					$icon_html = '<div class="prt-icon-type-text">' . $settings['icon_text'] . '</div>';
					$icon_type_class = 'text';

				} else if( $settings['icon_type']=='image' ){
					$icon_alt	= (!empty($settings['title'])) ? trim($settings['title']) : esc_attr__('Icon', 'fixter') ;
					$icon_image = '<img src="'.esc_url($settings['icon_image']['url']).'" alt="'.esc_attr($icon_alt).'" />';
					$icon_html	= '<div class="prt-icon-type-image">' . $icon_image . '</div>';
					$icon_type_class = 'image';
				} else if( $settings['icon_type']=='none' ){
					$icon_html = '';
					$icon_type_class = 'none';
				}  else {
				if($settings['icon']['library'] == 'svg' ) {
							ob_start();
							Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] );
							$icon_html = ob_get_clean();
							$icon_type_class = 'svg';
						?>
						<?php 
						}
						else {
							$icon_html       = '<div class="prt-box-icon"><i class="' . $settings['icon']['value'] . '"></i></div>';
							$icon_type_class = 'icon';

							wp_enqueue_style( 'elementor-icons-'.$settings['icon']['library']);
						}

				}

				}			

			if( !empty($settings['heading']) ) {
				$heading_tag	= ( !empty($settings['heading_tag']) ) ? $settings['heading_tag'] : 'h2' ;
				$heading_html	= '<'. preyantechnosys_wp_kses($heading_tag) . ' class="prt-custom-heading">
					'.tm_link_render($settings['heading_link'], 'start' ).'
						'.preyantechnosys_wp_kses($settings['heading']).'
					'.tm_link_render($settings['heading_link'], 'end' ).'
					</'. preyantechnosys_wp_kses($heading_tag) . '>
				';
			}

			if( !empty($settings['subheading']) ) {
				$subheading_tag	= ( !empty($settings['subheading_tag']) ) ? $settings['subheading_tag'] : 'h5' ;
				$subheading_html	= '<'. preyantechnosys_wp_kses($subheading_tag) . ' class="prt-element-subheading">
					'.tm_link_render($settings['subheading_link'], 'start' ).'
						'.preyantechnosys_wp_kses($settings['subheading']).'
					'.tm_link_render($settings['subheading_link'], 'end' ).'
					</'. preyantechnosys_wp_kses($subheading_tag) . '>
				';
			}

			if( !empty($settings['desc']) ){
				$content_html = '<div class="prt-cta3-content-wrapper">'.preyantechnosys_wp_kses($settings['desc']).'</div>';
			}
			
			if( !empty($settings['iconbox_bg_number']) ){
				$iconbox_bg_number = '<div class="prt-number-wrapper">'.preyantechnosys_wp_kses($settings['iconbox_bg_number']).'</div>';
			}
			
			if( !empty($icon_color) ){
				$icon_color_html = esc_attr($icon_color);
			}
			
			if( !empty($icon_bgcolor) ){
				$icon_bgcolor_html = esc_attr($icon_bgcolor);
			}
			
			if( !empty($icon_shape) ){
				$icon_shape_html = esc_attr($icon_shape);
			}
			
			if( !empty($icon_size) ){
				$icon_size_html = esc_attr($icon_size);
			}
			if( !empty($icon_position) ){
				$icon_position_html = esc_attr($icon_position);
			}
			
			$boxstyle	= $view;
			$mainclass	= '';

			if( !empty($settings['btn_title']) && !empty($settings['btn_link']['url']) ){
				$button_html = '<div class="prt-iocnbox-btn">' . tm_link_render($settings['btn_link'], 'start' ) . preyantechnosys_wp_kses($settings['btn_title']) . tm_link_render($settings['btn_link'], 'end' ) . '</div>';
			}
				 include( locate_template( '/template-parts/iconbox/iconbox-'.esc_attr($view).'.php', false, false ) ); 							
		}

	}
	
}
// Register widget
Plugin::instance()->widgets_manager->register( new Fixter_IconHeadingbox_Widget() );