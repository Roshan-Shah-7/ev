<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}

/**
 *  Client Box
*/

class Fixter_Clientbox_Widget extends Widget_Base{

	public function get_name() {
		return 'tm_client_element';
	}

	public function get_title() {
		return esc_attr__( 'Client Logo Box', 'fixter' );
	}

	public function get_icon() {
		return 'far fa-user';
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
				'label'			=> esc_attr__( 'Select Client View Style', 'fixter' ),
				'description'	=> esc_attr__( 'Select Client View style.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'label_block'	=> true,
				'options' => [
					'simple-logo'		=> esc_attr( 'Simple Logo view' ),
					'separator-logo'	=> esc_attr( 'Logo with Separator view' ),
					'boxed-logo'		=> esc_attr( 'Boxed view' ),
				],
				'default' => esc_attr( 'simple-logo' ),
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
				'default' => esc_attr__( '', 'fixter' ),
				'placeholder' => esc_attr__( 'Enter text for heading text.', 'fixter' ),
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
				'placeholder' => esc_attr__( 'Enter text for subheading text.', 'fixter' ),
				'label_block' => true,
			]
		);
		
		$this->add_control(
			'reverse_heading',
			[
				'label' => esc_attr__( 'Reverse Heading Order', 'fixter' ),
				'description' => esc_attr__( 'Show sub-heding before heading', 'fixter' ),
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
				'placeholder' => esc_attr__( 'Type your description text', 'fixter' ),
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
				'label' => esc_attr__( 'Alignment', 'fixter' ),
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
				'label' => esc_attr__( 'Data Design', 'fixter' ),
			]
		);
		
		$this->add_control(
			'from_category',
			[
				'label' => esc_attr__( 'From Category ?', 'fixter' ),
				'type' => Controls_Manager::SELECT2,
				'options' => $this->select_category(),
				'multiple' => true,
				'label_block'	=> true,
				'placeholder' => esc_attr__( 'All Categories', 'fixter' ),
			]
		);
		
		$this->add_control(
			'show',
			[
				'label' => esc_attr__( 'Post to show', 'fixter' ),
				'description' => esc_attr__( 'How many Post you want to show.', 'fixter' ),
				'separator' => 'before',
				'type' => Controls_Manager::NUMBER,
				'default' => '3',
			]
		);
		
		$this->add_control(
			'sortable',
			[
				'label' => esc_attr__( 'Show Sortable Category Links', 'fixter' ),
				'description' => esc_attr__( 'Show sortable category links above items so user can sort by just single click.', 'fixter' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_attr__( 'Yes', 'fixter' ),
				'label_off' => esc_attr__( 'No', 'fixter' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);

		$this->add_control(
			'order',
			[
				'label' => esc_attr__( 'Order', 'fixter' ),
				'description' => esc_attr__( 'Designates the ascending or descending order.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'separator' => 'before',
				'default' => 'DESC',
				'options' => [
					'ASC'		=> esc_attr__( 'Ascending order (1, 2, 3; a, b, c)', 'fixter' ),
					'DESC'		=> esc_attr__( 'Descending order (3, 2, 1; c, b, a)', 'fixter' ),
				]
			]
		);
		
		$this->add_control(
			'orderby',
			[
				'label' => esc_attr__( 'Order By', 'fixter' ),
				'description' => esc_attr__( ' Sort retrieved posts by parameter.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'none'		=> esc_attr__( 'No order', 'fixter' ),
					'ID'		=> esc_attr__( 'ID', 'fixter' ),
					'title'		=> esc_attr__( 'Title', 'fixter' ),
					'date'		=> esc_attr__( 'Date', 'fixter' ),
					'rand'		=> esc_attr__( 'Random', 'fixter' ),
				]
			]
		);
		
		$this->add_control(
			'gap',
			[
				'label' => esc_attr__( 'Box Gap', 'fixter' ),
				'description' => esc_attr__( 'Gap between each Post box.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'default' => '30px',
				'options' => [
					'0px'		=> esc_attr__( 'No Gap (0px)', 'fixter' ),
					'5px'		=> esc_attr__( '5px', 'fixter' ),
					'10px'		=> esc_attr__( '10px', 'fixter' ),
					'15px'		=> esc_attr__( '15px', 'fixter' ),
					'20px'		=> esc_attr__( '20px', 'fixter' ),
					'25px'		=> esc_attr__( '25px', 'fixter' ),
					'30px'		=> esc_attr__( '30px', 'fixter' ),
					'35px'		=> esc_attr__( '35px', 'fixter' ),
					'40px'		=> esc_attr__( '40px', 'fixter' ),
					'45px'		=> esc_attr__( '45px', 'fixter' ),
					'50px'		=> esc_attr__( '50px', 'fixter' ),
				]
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
					'seven'				=> esc_attr__( 'Seven Column', 'fixter' ),
					'eight'				=> esc_attr__( 'Eight Column', 'fixter' ),
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
				'default'		=> '0',
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

		$start_div = ttm_element_container( array(
			'position'	=> 'start',
			'cpt'		=> 'client',
			'data'		=> $settings
		) );

		echo preyantechnosys_wp_kses($start_div);

		$args = array(
			'post_type'				=> 'tm_client',
			'posts_per_page'		=> $show,
			'ignore_sticky_posts'	=> true,
		);

		if( !empty($orderby) && $orderby!='none' ){
			$args['orderby'] = $orderby;
			if( !empty($order) ){
				$args['order'] = $order;
			}
		}

		if( !empty($from_category) ){
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'tm_client_group',
					'field'    => 'slug',
					'terms'    => $from_category,
				),
			);
		};

		$posts = new \WP_Query( $args );
		
		$headingclass= '';
		if( empty($settings['heading']) ){
			$headingclass = 'prt-boxwithout-heading';
		}

		if ( $posts->have_posts() ) {
			?>

			<div class="preyantechnosys-box-heading-wrapper <?php echo preyantechnosys_wp_kses($headingclass); ?>">
				<?php prt_heading_subheading($settings, true); ?>
				<?php
				if( function_exists('sortable_category') ){
					$sortable_category_html = sortable_category( $settings, 'tm_client_group' );
					echo  preyantechnosys_wp_kses($sortable_category_html);
				}
				?>
			</div>

			<div class="preyantechnosys-boxes-row-wrapper row multi-columns-row">

			<?php
			while ( $posts->have_posts() ) {
				$return = '';
				$posts->the_post();
				
				if( file_exists( locate_template( '/template-parts/clientbox/clientbox-'.esc_attr($style).'.php', false, false ) ) ){

					$return .= ttm_element_block_container( array(
						'position'	=> 'start',
						'column'	=> $column,
						'cpt'		=> 'client',
						'taxonomy'	=> 'tm_client_group',
						'style'		=> $style,
					) );
					wp_enqueue_style( 'fixter-client' );
					ob_start();
					$r = include( locate_template( '/template-parts/clientbox/clientbox-'.esc_attr($style).'.php', false, false ) );
					$return .= ob_get_contents();
					ob_end_clean();

					$return .= ttm_element_block_container( array(
						'position'	=> 'end',
					) );

				}

				echo preyantechnosys_wp_kses($return);

			}
			?>

			</div>

			<?php
		}
		
		wp_reset_postdata();

		$end_div = ttm_element_container( array(
			'position'	=> 'end',
			'cpt'		=> 'client',
			'data'		=> $settings
		) );
		echo preyantechnosys_wp_kses($end_div);
	}

	

	protected function select_category() {
	  	$category = get_terms( array( 'taxonomy' => 'tm_client_group', 'hide_empty' => false ) );
	  	$cat = array();
	  	foreach( $category as $item ) {
			$cat_count = get_category( $item );

	     	if( $item ) {
	        	$cat[$item->slug] = $item->name . ' ('.$cat_count->count.')';
	     	}
	  	}
	  	return $cat;
	}

	
}
// Register widget
Plugin::instance()->widgets_manager->register( new Fixter_Clientbox_Widget() );