<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}

/**
 *  Steps Box
*/
 
class Fixter_Stepsbox_Widget extends Widget_Base{

	public function get_name() {
		return 'tm_staticbox_element';
	}

	public function get_title() {
		return esc_attr__( 'Step Box', 'fixter' );
	}

	public function get_icon() {
		return ' eicon-menu-toggle';
	}

	public function get_categories() {
		return [ 'fixter_category' ];
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
				'label'			=> esc_attr__( 'Select StepBox Style', 'fixter' ),
				'description'	=> esc_attr__( 'Select StepBox style.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'label_block'	=> true,
				'options' => [
					'style1'	=> esc_attr( 'Style 1' ),
					'style2'	=> esc_attr( 'Style 2' ),

				],
				'default' => esc_attr( 'style1' ),
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
				'default' => esc_attr__( 'Our Services', 'fixter' ),
				'placeholder' => esc_attr__( 'Enter text for heading line.', 'fixter' ),
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
				'default' => esc_attr__( '', 'fixter' ),
				'placeholder' => esc_attr__( 'Enter text for subheading line.', 'fixter' ),
				'label_block' => true,
			]
		);
		
		$this->add_control(
			'reverse_heading',
			[
				'label' => esc_attr__( 'Reverse heading order', 'fixter' ),
				'description' => esc_attr__( 'Show sub-heading before heading.', 'fixter' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_attr__( 'Yes', 'fixter' ),
				'label_off' => esc_attr__( 'No', 'fixter' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);
		
		$this->add_control(
			'desc',
			[
				'label' => esc_attr__( 'Description', 'fixter' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => esc_attr__( 'Enter description text', 'fixter' ),
			]
		);
		
		$this->add_control(
			'heading_sep',
			[
				'label' => esc_attr__( 'Seperator', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'none'	=> esc_attr( 'None' ),
					'solid'	=> esc_attr( 'Solid' ),
                    'subheading_bottom_border'	=> esc_attr( 'Style 1' ),
				],
				'default' => esc_attr( 'none' ),
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
			]
		);
		
		$this->add_control(
			'heading_style',
			[
				'label'			=> esc_attr__( 'Heading Style', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'vertical'	=> esc_attr( 'Vertical (Default)' ),
					'horizontal'	=> esc_attr( 'Horizontal' ),
				],
				'default' => esc_attr( 'vertical' ),
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
			'icon_type',
			[
				'label' => esc_attr__( 'Icon Type', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'icon'	=> esc_attr__( 'Icon', 'fixter' ),
					'image'	=> esc_attr__( 'Image', 'fixter' ),
					'text'	=> esc_attr__( 'Text', 'fixter' ),
				],
				'default' => esc_attr( 'icon' ),
			]
		);
		
		$repeater->add_control(
			'icon',
			[
				'label' => __( 'Icon', 'fixter' ),
				'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'icon_type' => 'icon',
                ]
            ]

		);
		
		 $repeater->add_control(
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
		
		$repeater->add_control(
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
		
		$repeater->add_control(
			'label_link_url',
			[
				'label' => esc_attr__( 'Title Link URL', 'fixter' ),
				'description' => esc_attr__( 'Add title link URL here.', 'fixter' ),
				'type' => Controls_Manager::URL,
				'show_label' => true,
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => false,
					'nofollow' => false,
				],
			]
		);
		
		$repeater->add_control(
			'smalltext',
			[
				'label' => esc_attr__( 'Box Content', 'fixter' ),
				'default' => esc_attr__( 'Box Content', 'fixter' ),
				'placeholder' => esc_attr__( 'Box Content', 'fixter' ),
				'type' => Controls_Manager::TEXTAREA,
				'show_label' => true,
			]
		);
		
		$repeater->add_control(
			'process_number',
			[
				'label' => esc_attr__( 'Number', 'fixter' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'description' => esc_attr__( 'Like 01, 02).', 'fixter' ),
				'placeholder' => esc_attr__( '01', 'fixter' ),
				'label_block' => true,
				'separator' => 'before',
				
			]
		);

		$repeater->add_control(
			'link_text',
			[
				'label' => esc_attr__( 'Link Text', 'fixter' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'description' => esc_attr__( 'Like READ MORE text. This text will appear as link (fill link URL in below option).', 'fixter' ),
				'placeholder' => esc_attr__( 'READ MORE', 'fixter' ),
				'label_block' => true,
				'separator' => 'before',
			]
		);
		
		$repeater->add_control(
			'link_url',
			[
				'label' => esc_attr__( 'Link URL', 'fixter' ),
				'description' => esc_attr__( 'Add link URL here.', 'fixter' ),
				'type' => Controls_Manager::URL,
				'show_label' => true,
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => false,
					'nofollow' => false,
				],
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
						'image'		=> get_template_directory_uri() . '/images/placeholder.png',
						'label'		=> esc_attr__( 'This is first box', 'fixter' ),
						'smalltext'	=> esc_attr__( 'This is small description', 'fixter' ),
					],
					[
						'image'		=> get_template_directory_uri() . '/images/placeholder.png',
						'label'		=> esc_attr__( 'This is second box', 'fixter' ),
						'smalltext'	=> esc_attr__( 'This is small description', 'fixter' ),
					],
				],
				'title_field' => '{{{ label }}}',
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
					'selector' => '{{WRAPPER}} .prt-element-content-heading',
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
						'{{WRAPPER}} .prt-element-content-heading' => 'margin-bottom: {{SIZE}}{{UNIT}};',
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

		$settings	= $this->get_settings_for_display();
		extract($settings);
		$return = '';
		$label_html = '';
		$image_html		= '' ;
		wp_enqueue_style( 'fixter-stepbox' );
		?>

		<?php
			prt_heading_subheading($settings, true);
		?>

		<div class="preyantechnosys-stepboxes-wrapper prt-staticbox-<?php echo esc_attr($style); ?> row multi-columns-row">

		<?php
			$col_start_div	= '';
			$col_end_div	= '';
			if( !empty($boxes) ){
				switch( count($boxes) ){
					case 1:
						$col_start_div	= '<div class="prt-stepbox col-md-12">';
						$col_end_div	= '</div>';
						break;

					case 2:
						$col_start_div	= '<div class="prt-stepbox col-md-6">';
						$col_end_div	= '</div>';
						break;

					case 3:
						$col_start_div	= '<div class="prt-stepbox col-md-4">';
						$col_end_div	= '</div>';
						break;

					case 4:
						$col_start_div	= '<div class="prt-stepbox col-md-3">';
						$col_end_div	= '</div>';
						break;

					case 5:
						$col_start_div	= '<div class="prt-stepbox col-md-20percent">';
						$col_end_div	= '</div>';
						break;
				}
			} ?>

		<?php

		foreach( $settings['boxes'] as $box ){

			$smalltext_html	= ( !empty($box['smalltext']) ) ? '<div class="preyantechnosys-static-box-desc">'.esc_html($box['smalltext']).'</div>' : '' ;
			
			if( !empty($box['label']) && isset($box['label_link_url']['url']) && !empty($box['label_link_url']['url']) ){
				$text = $box['label'];
				$label_html = '<div class="prt-box-title"><h4><a class="prt-staticbox-more-link prt-more-button" href="' . esc_url( $box['label_link_url']['url'] ) . '">' . esc_attr( $text ) . '</a></h4></div>' ;
			}
			
			else {
			
			$label_html		= ( !empty($box['label']) ) ? '<div class="prt-box-title"><h4>'.esc_html($box['label']).'</h4></div>' : '' ;
			}
		
					$icon = '';
					if( !empty($box['icon_type']) ){

						if( $box['icon_type']=='text' ){
							$icon = '<div class="prt-stepbox-main-icon"><div class="prt-ptable-icon-wrapper prt-ptable-icon-type-text">' . $box['icon_text'] . '</div></div>';
							$icon_type_class = 'text';

						} else if($box['icon_type']=='image' ){
							$icon_image = '<img src="'.esc_url($box['icon_image']['url']).'" alt="'.esc_attr($box['label']).'" />';
							$icon = '<div class="prt-stepbox-imagebox"><div class="prt-ptable-icon-type-image">' . $icon_image . '</div></div>';
							$icon_type_class = 'image';
						} else if( $box['icon_type']=='none' ){
							$icon = '';
							$icon_type_class = 'none';
						} else {
							$icon       = ( !empty($box['icon']['value']) ) ? '<div class="prt-stepbox-main-icon"><div class="prt-ptable-icon-wrapper"><i class="' . $box['icon']['value'] . '"></i></div></div>' : '';
							$icon_type_class = 'icon';

							wp_enqueue_style( 'elementor-icons-'.$box['icon']['library']);
						}
					}

			$link_html = '';
			if( !empty($box['link_text']) && isset($box['link_url']['url']) && !empty($box['link_url']['url']) ){
				$text = $box['link_text'];
				$link_html = '<a class="prt-staticbox-more-link prt-more-button" href="' . esc_url( $box['link_url']['url'] ) . esc_attr( $text ) . '" target="' . ( (!empty($box['link_url']['is_external']) && $box['link_url']['is_external']==true) ? '_blank' : '_self' ) . '">' . esc_attr( $text ) . '</a>' ;
			}
			
			
			
			$process_number = '';
				if( !empty($box['process_number'])){
					$process_number = '<div class="process-num"><span class="number">' . $box['process_number'] . '</span></div>';

				}
					$return .= $col_start_div;
					ob_start();
					include( get_template_directory() . '/template-parts/stepbox/stepbox-'.esc_attr($style).'.php' );
					$return .= ob_get_contents();
					ob_end_clean();
					$return .= $col_end_div;

		}		
		
		echo preyantechnosys_wp_kses($return);
		
		?>

		</div>

	    <?php
	}

	

}
// Register widget
Plugin::instance()->widgets_manager->register( new Fixter_Stepsbox_Widget() );