<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}

/**
 *  Steps Box
*/
 
class Fixter_Marqueebox_Widget extends Widget_Base{

	public function get_name() {
		return 'prt_marqueebox_element';
	}

	public function get_title() {
		return esc_attr__( 'Marquee Box', 'fixter' );
	}

	public function get_icon() {
		return 'eicon-call-to-action';
	}

	public function get_categories() {
		return [ 'anomica_category' ];
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
				'label'			=> esc_attr__( 'Select Box Style', 'fixter' ),
				'description'	=> esc_attr__( 'Select Box style.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'label_block'	=> true,
				'options' => [
					'style1'	=> esc_attr( 'Style 1' ),					
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
				'default' => esc_attr( 'solid' ),
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
				],
				'default' => esc_attr( 'icon' ),
				'condition' => [
                    'style' => 'style2',
                ]
			]
		);
		
		$repeater->add_control(
			'icon',
			[
				'label' => __( 'Icon', 'fixter' ),
				'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'icon_type' => 'icon',
					'style' => 'style2',
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
                    'style' => 'style2',
                ]
			]
		);
		
		$repeater->add_control(
			'btn_link',
			[
				'label' => esc_attr__( 'Button Link', 'fixter' ),
				'type' => Controls_Manager::URL,
				'label_block' => true,
				'condition' => [
                    'style' => 'style2',
                ]
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
						'smalltext'	=> esc_attr__( 'This is small description', 'fixter' ),
					],
					[
						'label'		=> esc_attr__( 'This is second box', 'fixter' ),
						'smalltext'	=> esc_attr__( 'This is small description', 'fixter' ),
					],
				],
				'title_field' => '{{{ label }}}',
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'appearance_section',
			[
				'label' => esc_attr__( 'Box Design', 'fixter' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
	
		$this->add_control(
			'column',
			[
				'label'			=> esc_attr__( 'Select Column', 'fixter' ),
				'description'	=> esc_attr__( 'Select column.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'label_block'	=> true,
				'default'		=> 'three',
				'options'		=> [
					'one'				=> esc_attr__( 'One Column', 'fixter' ),
					'two'				=> esc_attr__( 'Two Column', 'fixter' ),
					'three'				=> esc_attr__( 'Three Column', 'fixter' ),
					'four'				=> esc_attr__( 'Four Column', 'fixter' ),
					'five'				=> esc_attr__( 'Five Column', 'fixter' ),
					'six'				=> esc_attr__( 'Six Column', 'fixter' ),
				],
			]
		);
		
		$this->add_control(
			'view-type',
			[
				'label'			=> esc_attr__( 'Box View', 'fixter' ),
				'description'	=> esc_attr__( 'Select box view. Show as normal row and column or show with carousel effect.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'label_block'	=> true,
				'default'		=> 'default',
				'options'		=> [
					'default'	=> esc_attr__( 'Row and Column', 'fixter' ),
					'carousel'	=> esc_attr__( 'Carousel effect', 'fixter' ),
				]
			]
		);

		$this->add_control(
			'carousel_options',
			[
				'label' => esc_attr__( 'Carousel Settings', 'fixter' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'view-type' => 'carousel',
				]
			]
		);

		$this->add_control(
			'prt-autoplayspeed',
			[
				'label'			=> esc_attr__( 'Carousel: autoplaySpeed', 'fixter' ),
				'description'	=> esc_attr__( 'Carousel Effect: Slide/Fade animation speed.', 'fixter' ),
				'type'			=> Controls_Manager::TEXT,
				'default'		=> '4500',
				'condition'		=> [
					'view-type'		=> 'carousel',
				]
			]
		);
		
		$this->add_control(
			'prt-loop',
			[
				'label'			=> esc_attr__( 'Carousel: Loop Item', 'fixter' ),
				'description'	=> esc_attr__( 'Carousel Effect: Infinite loop sliding.', 'fixter' ),
				'type'			=> Controls_Manager::SELECT,
				'default'		=> '0',
				'options'		=> [
					'1'				=> esc_attr__( 'Yes', 'fixter' ),
					'0'				=> esc_attr__( 'No', 'fixter' ),
				],
				'condition'		=> [
					'view-type'		=> 'carousel',
				]
			]
		);
		$this->add_control(
			'prt-speed',
			[
				'label'			=> esc_attr__( 'Carousel: Speed', 'fixter' ),
				'description'	=> esc_attr__( 'Carousel Effect: Slide/Fade speed.', 'fixter' ),
				'type'			=> Controls_Manager::TEXT,
				'default'		=> '4500',
				'condition'		=> [
					'view-type'		=> 'carousel',
				]
			]
		);

		$this->add_control(
			'prt-autoplay',
			[
				'label'			=> esc_attr__( 'Carousel: Autoplay', 'fixter' ),
				'description'	=> esc_attr__( 'Carousel Effect: Enable/disable Autoplay', 'fixter' ),
				'type'			=> Controls_Manager::SELECT,
				'default'		=> '0',
				'options'		=> [
					'1'				=> esc_attr__( 'Yes', 'fixter' ),
					'0'				=> esc_attr__( 'No', 'fixter' ),
				],
				'condition'		=> [
					'view-type'		=> 'carousel',
				]
			]
		);
		$this->add_control(
			'prt-rtl',
			[
				'label'			=> esc_attr__( 'Carousel: RTL', 'fixter' ),
				'description'	=> esc_attr__( 'Carousel Effect: RTL sliding.', 'fixter' ),
				'type'			=> Controls_Manager::SELECT,
				'default'		=> 'false',
				'options'		=> [
					'true'				=> esc_attr__( 'True', 'fixter' ),
					'false'				=> esc_attr__( 'False', 'fixter' ),
				],
				'condition'		=> [
					'view-type'		=> 'carousel',
				]
			]
		);
		$this->add_control(
			'prt-cssease',
			[
				'label'			=> esc_attr__( 'Carousel: cssEase', 'fixter' ),
				'description'	=> esc_attr__( 'Carousel Effect: cssEase sliding.', 'fixter' ),
				'type'			=> Controls_Manager::SELECT,
				'default'		=> 'none',
				'options'		=> [
					'linear'				=> esc_attr__( 'Linear', 'fixter' ),
					'ease'				=> esc_attr__( 'Ease', 'fixter' ),
					'none'				=> esc_attr__( 'None', 'fixter' ),
				],
				'condition'		=> [
					'view-type'		=> 'carousel',
				]
			]
		);
		$this->add_control(
			'carousel_slidestoscroll',
			[
				'label'			=> esc_attr__( 'Carousel: slidesToScroll', 'fixter' ),
				'description'	=> esc_attr__( '# of slides to scroll', 'fixter' ),
				'type'			=> Controls_Manager::SELECT,
				'options'		=> [
					'1'				=> esc_attr__( '1 Slide', 'fixter' ),
					'column'		=> esc_attr__( 'Same as column', 'fixter' ),
				],
				'default'		=> '1',
				'condition'		=> [
					'view-type'		=> 'carousel',
				]
			]
		);
		
		$this->add_control(
			'prt-centermode',
			[
				'label'			=> esc_attr__( 'Carousel: centerMode', 'fixter' ),
				'description'	=> esc_attr__( 'Enables centered view with partial prev/next slides. Use with odd numbered slidesToShow counts.', 'fixter' ),
				'type'			=> Controls_Manager::SELECT,
				'default'		=> '0',
				'options'		=> [
					'1'				=> esc_attr__( 'Yes', 'fixter' ),
					'0'				=> esc_attr__( 'No', 'fixter' ),
				],
				'condition'		=> [
					'view-type'		=> 'carousel',
				]
			]
		);
		$this->add_control(
			'prt-centerpadding',
			[
				'label'			=> esc_attr__( 'CenterMode: Padding', 'fixter' ),
				'description'	=> esc_attr__( 'Carousel Mode: Padding', 'fixter' ),
				'type'			=> Controls_Manager::TEXT,
				'default'		=> '800',
				'condition'		=> [
					'view-type'		=> 'carousel',
				]
			]
		);

		$this->add_control(
			'carousel_nav',
			[
				'label'			=> esc_attr__( 'Carousel: Next/Prev Arrows', 'fixter' ),
				'description'	=> esc_attr__( 'Carousel Effect: Show dots navigation.', 'fixter' ),
				'type'			=> Controls_Manager::SELECT,
				'default'		=> '0',
				'options'		=> [
					'1'				=> esc_attr__( 'Yes', 'fixter' ),
					'0'				=> esc_attr__( 'No', 'fixter' ),
				],
				'condition'		=> [
					'view-type'		=> 'carousel',
				]
			]
		);

		$this->add_control(
			'carousel_arrowtype',
			[
				'label'			=> esc_attr__( 'Carousel:Button Type', 'fixter' ),
				'description'	=> esc_attr__( 'Carousel button type.', 'fixter' ),
				'type'			=> Controls_Manager::SELECT,
				'options'		=> [
					'square'			=> esc_attr__( 'Square', 'fixter' ),
					'round'				=> esc_attr__( 'Round', 'fixter' ),
				],
				'default'		=> 'square',
				'condition'		=> [
					'view-type'		=> 'carousel',
					'carousel_nav'		=> '1',
				]
			]
		);
		
		$this->add_control(
			'carousel_dots',
			[
				'label'			=> esc_attr__( 'Carousel: dots', 'fixter' ),
				'description'	=> esc_attr__( 'Carousel Effect: Show dots navigation.', 'fixter' ),
				'type'			=> Controls_Manager::SELECT,
				'options'		=> [
					'1'				=> esc_attr__( 'Yes', 'fixter' ),
					'0'				=> esc_attr__( 'No', 'fixter' ),
				],
				'default'		=> '0',
				'condition'		=> [
					'view-type'		=> 'carousel',
				]
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
		$link_html = '';
		$image_html	= $button_html ='' ;

		$start_div = ttm_element_container( array(
			'position'	=> 'start',
			'cpt'		=> 'marqueebox',
			'data'		=> $settings
		) );

		echo preyantechnosys_wp_kses($start_div);
		
		?>

		<?php
			prt_heading_subheading($settings, true);
		?>

		<div class="preyantechnosys-boxes-row-wrapper prt-marqueebox-wrapper prt-marqueebox-<?php echo esc_attr($style); ?>">
		<?php
			$col_start_div	= '';
			$col_end_div	= '';
			$boxClass = 'prt-box-col-wrapper ';
			
			if( !empty($boxes) ){
				switch( $settings['column'] ){
					case 'one':
						$col_start_div	= '<div class="'. $boxClass .' col-lg-12 col-sm-12 col-md-12 col-xs-12">';
						$col_end_div	= '</div>';
						break;

					case 'two':
						$col_start_div	= '<div class="'. $boxClass .' col-lg-6 col-sm-6 col-md-6 col-xs-12">';
						$col_end_div	= '</div>';
						break;

					case 'three':
						$col_start_div	= '<div class="'. $boxClass .' col-lg-4 col-sm-6 col-md-4 col-xs-12">';
						$col_end_div	= '</div>';
						break;

					case 'four':
						$col_start_div	= '<div class="'. $boxClass .' col-lg-3 col-sm-6 col-md-3 col-xs-12">';
						$col_end_div	= '</div>';
						break;

					case 'five':
						$col_start_div	= '<div class="'. $boxClass .' col-lg-20percent col-sm-4 col-md-4 col-xs-12">';
						$col_end_div	= '</div>';
						break;
						
					case 'six':
						$col_start_div	= '<div class="'. $boxClass .' col-lg-2 col-sm-4 col-md-4 col-xs-12">';
						$col_end_div	= '</div>';
						break;
				}
			} ?>
		<?php


		foreach( $settings['boxes'] as $box ){

			$smalltext_html	= ( !empty($box['smalltext']) ) ? '<div class="prt-marqueebox-description">'.esc_html($box['smalltext']).'</div>' : '' ;
			$label_html		= ( !empty($box['label']) ) ? '<h4>'.esc_html($box['label']).'</h4>' : '' ;
			$sublabel_html		= ( !empty($box['sublabel']) ) ? '<h5>'.esc_html($box['sublabel']).'</h5>' : '' ;
			
			if( !empty($box['btn_title']) && !empty($box['btn_link']['url']) ){
				$button_html = '<div class="prt-box-Button-link"><h6>' . prt_link_render($box['btn_link'], 'start' ) . preyantechnosys_wp_kses($box['btn_title']) . prt_link_render($box['btn_link'], 'end' ) . '</h6></div>';
			}
			
				$icon = '';
				if( !empty($box['icon_type']) ){

						$icon       = ( !empty($box['icon']['value']) ) ? '<i class="prt_icon_element-icon ' . $box['icon']['value'] . '"></i>' : '';
						$icon_type_class = 'icon';

						wp_enqueue_style( 'elementor-icons-'.$box['icon']['library']);
					
				}
					
			if( file_exists( locate_template( '/template-parts/marqueebox/marqueebox-'.esc_attr($style).'.php', false, false ) ) ){		
			
					$return .= $col_start_div;
					ob_start();
					$r = include( locate_template( '/template-parts/marqueebox/marqueebox-'.esc_attr($style).'.php', false, false ) );
					$return .= ob_get_contents();
					ob_end_clean();

					$return .= $col_end_div;
					
			}		
					
				
		}		
		echo preyantechnosys_wp_kses($return);
		
		
		?>

		</div>
		<?php

			$end_div = ttm_element_container( array(
				'position'	=> 'end',
				'cpt'		=> 'marqueebox',
				'data'		=> $settings
			) );
			echo preyantechnosys_wp_kses($end_div); 

	}

}
// Register widget
Plugin::instance()->widgets_manager->register( new Fixter_Marqueebox_Widget() );