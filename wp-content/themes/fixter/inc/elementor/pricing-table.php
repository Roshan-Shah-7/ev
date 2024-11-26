<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}

/**
 *  ThemetechMount Price Table
*/

class Fixter_Pricetable_Widget extends Widget_Base{

	public function get_name() {
		return 'tm_ptable_element';
	}

	public function get_title() {
		return esc_attr__( 'Pricing Table', 'fixter' );
	}

	public function get_icon() {
		return 'eicon-price-table';
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
				'label'			=> esc_attr__( 'Select Pricetable Style', 'fixter' ),
				'description'	=> esc_attr__( 'Select Pricetable style.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'label_block'	=> true,
				'options' => [
						'style-1' => esc_attr( 'Style 1' ),	                        
					],
				'default' => esc_attr( 'style-1' ),
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
				'default' => esc_attr__( 'Enter Your Heading', 'fixter' ),
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
            'pricing_col_style',
            [
                'label' => esc_attr__( 'Pricing Table Style ', 'fixter' ),
            ]
        );
		$this->add_control(
			'pricing_table_style',
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
		$this->end_controls_section();
        $this->start_controls_section(
            'highlight_col_section',
            [
                'label' => esc_attr__( 'Featured Column', 'fixter' ),
            ]
        );
        $this->add_control(
			'highlight_col',
			[
				'label' => esc_attr__( 'Featured Column', 'fixter' ),
				'description' => esc_attr__( 'Select whith column will be with featured style.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'1'	=> esc_attr__( 'First Column', 'fixter' ),
                    '2'	=> esc_attr__( 'Second Column', 'fixter' ),
					'3'	=> esc_attr__( 'Third Column', 'fixter' ),
					'4'	=> esc_attr__( 'Fourth Column', 'fixter' ),
					'5'	=> esc_attr__( 'Fifth Column', 'fixter' ),
				],
				'default' => esc_attr( '2' ),
			]
		);
		$this->add_control(
			'highlight_text',
			[
				'label' => esc_attr__( 'Feature Column Heading', 'fixter' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_attr__( 'Featured', 'fixter' ),
				'placeholder' => esc_attr__( 'Enter text used as main heading for feature column. Some HTML tags are allowed.', 'fixter' ),
				'label_block' => true,
			]
		);

		$this->end_controls_section();

		for( $x=1; $x<=5; $x++ ){

			$this->start_controls_section(
				$x.'_col_section',
				[
					'label' => sprintf( esc_attr__( '%1$s Column in Pricing Table', 'fixter' ) , tm_ordinal($x) ) ,
				]
			);

			$this->add_control(
				$x.'_icon_type',
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
			
			$this->add_control(
				$x.'_icon',
				[
					'label' => __( 'Icon', 'fixter' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-star',
						'library' => 'solid',
					],
					'condition' => [
						$x.'_icon_type' => 'icon',
					]
				]

			);
			
			$this->add_control(
				$x.'_icon_image',
				[
					'label' => __( 'Select Image for Icon', 'fixter' ),
					'description' => __( 'image will appear at icon position', 'fixter' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'condition' => [
						$x.'_icon_type' => 'image',
					]
				]
			);
			
			$this->add_control(
				$x.'_icon_text',
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
						$x.'_icon_type' => 'text',
					]
				]
			);
			$this->add_control(
				$x.'_plans',
				[
					'label'         => esc_attr__( 'Pricing Plan', 'fixter' ),
					'type'          => Controls_Manager::TEXT,
					'description'   => esc_attr__( 'Describe Plans', 'fixter' ),
					'separator'     => 'after',
					'label_block'   => true,
				]
			);
			$this->add_control(
				$x.'_heading',
				[
					'label'         => esc_attr__( 'Heading', 'fixter' ),
					'type'          => Controls_Manager::TEXT,
					'description'   => esc_attr__( 'Enter text used as main heading. This will be plan title like "Basic", "Pro" etc.', 'fixter' ),
					'separator'     => 'after',
					'label_block'   => true,
				]
			);
			$this->add_control(
				$x.'_desc',
				[
					'label'         => esc_attr__( 'Description', 'fixter' ),
					'type'          => Controls_Manager::TEXT,
					'description'   => esc_attr__( 'Enter text used as main Description.', 'fixter' ),
					'separator'     => 'after',
					'label_block'   => true,
				]
			);

			$this->add_control(
				$x.'_price',
				[
					'label'         => esc_attr__( 'Price', 'fixter' ),
					'type'          => Controls_Manager::TEXT,
					'description'   => esc_attr__( 'Enter Price.', 'fixter' ),
				]
			);
			
			$this->add_control(
				$x.'_cur_symbol',
				[
					'label'         => esc_attr__( 'Currency symbol', 'fixter' ),
					'type'          => Controls_Manager::TEXT,
					'description'   => esc_attr__( 'Enter currency symbol', 'fixter' ),
				]
			);
			
			$this->add_control(
				$x.'_cur_symbol_position',
				[
					'label'			=> esc_html__( 'Currency Symbol position', 'fixter' ),
					'description'	=> esc_html__( 'Select currency position.', 'fixter' ),
					'type'			=> Controls_Manager::SELECT,
					'default'		=> 'after',
					'options' => [
						'after'		=> __( 'After Price', 'fixter' ),
						'before'	=> __( 'Before Price', 'fixter' ),
					],
				]
			);
			$this->add_control(
				$x.'_price_frequency',
				[
					'label'         => esc_attr__( 'Price Frequency', 'fixter' ),
					'type'          => Controls_Manager::TEXT,
					'description'   => esc_attr__( 'Enter currency frequency like "Monthly", "Yearly" or "Weekly" etc.', 'fixter' ),
					'separator'     => 'after',
				]
			);
			
			$this->add_control(
				$x.'_btn_text',
				[
					'label'         => esc_attr__( 'Button Text', 'fixter' ),
					'type'          => Controls_Manager::TEXT,
					'description'   => esc_attr__( 'Like "Read More" or "Buy Now".', 'fixter' ),
				]
			);
			
			$this->add_control(
				$x.'_btn_link',
				[
					'label'         => esc_attr__( 'Button Link', 'fixter' ),
					'type'          => Controls_Manager::URL,
					'description'   => esc_attr__( 'Set link for button', 'fixter' ),
					'separator'     => 'after',
				]
			);
			
			$this->add_control(
				$x.'_highlight_icon',
				[
					'label'         => esc_attr__( 'Highlight Icon', 'fixter' ),
					'type'          => Controls_Manager::TEXT,
					'description'   => esc_attr__( 'Set i tag code for highlight', 'fixter' ),
					'separator'     => 'after',
					  'condition' => [
						'style' => 'style-4',
					]
				]
			);
			

			$repeater = new Repeater();

			$repeater->add_control(
				'text',
				[
					'label' => __( 'Line Label', 'fixter' ),
					'type' => Controls_Manager::TEXT,
					'label_block' => true,
				]
			);
			
			$repeater->add_control(
				'icon',
				[
					'label'     => __( 'Icon', 'fixter' ),
					'type'      => Controls_Manager::ICONS,
					'default'   => [
						'value'     => 'fas fa-check',
						'library'   => 'solid',
					],
				]

			);

			$this->add_control(
				$x.'_lines',
				[
					'label'			=> esc_attr__( 'Each Line (Features)', 'fixter' ),
					'description'	=> esc_attr__( 'Enter features that will be shown in spearate lines.', 'fixter' ),
					'type'			=> Controls_Manager::REPEATER,
					'fields'		=> $repeater->get_controls(),
					'default'		=> [
						[
							'text'		=> esc_attr__( 'This is label one', 'fixter' ),
							'icon'	    => [
								'value'     => 'fas fa-check',
								'library'   => 'solid',
							]
						],
						[
							'text'		=> esc_attr__( 'This is label two', 'fixter' ),
							'icon'	    => [
								'value'     => 'fas fa-check',
								'library'   => 'solid',
							]
						],
						[
							'text'		=> esc_attr__( 'This is label three', 'fixter' ),
							'icon'	    => [
								'value'     => 'fas fa-check',
								'library'   => 'solid',
							]
						],
					],
					'title_field' => '{{{ text }}}',
				]
			);
			$this->add_control(
				$x.'_lines_second',
				[
					'label'			=> esc_attr__( 'Each Line (Features) - Column 2', 'fixter' ),
					'description'	=> esc_attr__( 'Enter features that will be shown in spearate lines.', 'fixter' ),
					'type'			=> Controls_Manager::REPEATER,
					'fields'		=> $repeater->get_controls(),
					'default'		=> [
						[
							'text'		=> esc_attr__( 'This is label one', 'fixter' ),
							'icon'	    => [
								'value'     => 'fas fa-check',
								'library'   => 'solid',
							]
						],
						[
							'text'		=> esc_attr__( 'This is label two', 'fixter' ),
							'icon'	    => [
								'value'     => 'fas fa-check',
								'library'   => 'solid',
							]
						],
						[
							'text'		=> esc_attr__( 'This is label three', 'fixter' ),
							'icon'	    => [
								'value'     => 'fas fa-check',
								'library'   => 'solid',
							]
						],
					],
					'title_field' => '{{{ text }}}',
					'condition' => [
						'pricing_table_style' => 'horizontal',
					]
				]
			);
			$this->add_control(
				$x.'_lines_third',
				[
					'label'			=> esc_attr__( 'Each Line (Features) - Column 3', 'fixter' ),
					'description'	=> esc_attr__( 'Enter features that will be shown in spearate lines.', 'fixter' ),
					'type'			=> Controls_Manager::REPEATER,
					'fields'		=> $repeater->get_controls(),
					'default'		=> [
						[
							'text'		=> esc_attr__( 'This is label one', 'fixter' ),
							'icon'	    => [
								'value'     => 'fas fa-check',
								'library'   => 'solid',
							]
						],
						[
							'text'		=> esc_attr__( 'This is label two', 'fixter' ),
							'icon'	    => [
								'value'     => 'fas fa-check',
								'library'   => 'solid',
							]
						],
						[
							'text'		=> esc_attr__( 'This is label three', 'fixter' ),
							'icon'	    => [
								'value'     => 'fas fa-check',
								'library'   => 'solid',
							]
						],
					],
					'title_field' => '{{{ text }}}',
					'condition' => [
						'pricing_table_style' => 'horizontal',
					]
				]
			);
			$this->end_controls_section();

		}

	}

	protected function render() {

		$settings	= $this->get_settings_for_display();
		extract($settings);
		$return = '';
		wp_enqueue_style( 'fixter-pricingtable' );
		?>
		<?php prt_heading_subheading($settings, true); ?>
		<div class="preyantechnosys-ptables-w prt-ptablebox prt-ptablebox-<?php echo esc_attr($style); ?> <?php echo esc_attr($pricing_table_style); ?>">

			<?php
			$columns = array();
			for ($x = 0; $x <= 5; $x++) {
				if( !empty( $settings[$x.'_heading'] ) ){
					$columns[$x] = $x;
				}
			}

			$col_start_div	= '';
			$col_end_div	= '';
			if( !empty($columns) ){
				switch( count($columns) ){
					case 1:
						$col_start_div	= '<div class="tprt-pricetable-column-w prt-ptable-col col-md-12">';
						$col_end_div	= '</div>';
						break;

					case 2:
						$col_start_div	= '<div class="tprt-pricetable-column-w prt-ptable-col col-md-6">';
						$col_end_div	= '</div>';
						break;

					case 3:
						$col_start_div	= '<div class="tprt-pricetable-column-w prt-ptable-col col-md-4">';
						$col_end_div	= '</div>';
						break;

					case 4:
						$col_start_div	= '<div class="tprt-pricetable-column-w prt-ptable-col col-md-3">';
						$col_end_div	= '</div>';
						break;

					case 5:
						$col_start_div	= '<div class="tprt-pricetable-column-w prt-ptable-col col-md-20percent">';
						$col_end_div	= '</div>';
						break;
				}
			}

			if( !empty($columns) ){

				$return .= '<div class="prt-ptable-cols row multi-columns-row">';

				foreach( $columns as $col => $highlight_col ){

					$icon = '';
					if( !empty($settings[$col.'_icon_type']) ){

						if( $settings[$col.'_icon_type']=='text' ){
							$icon = '<div class="prt-ptablebox-main-icon"><div class="prt-ptable-icon-wrapper prt-ptable-icon-type-text">' . $settings[$col.'_icon_text'] . '</div></div>';
							$icon_type_class = 'text';

						} else if( $settings[$col.'_icon_type']=='image' ){
							$icon_image = '<img src="'.esc_url($settings[$col.'_icon_image']['url']).'" alt="'.esc_attr($settings[$col.'_heading']).'" />';
							$icon = '<div class="prt-ptablebox-main-icon"><div class="prt-ptable-icon-wrapper prt-ptable-icon-type-image">' . $icon_image . '</div></div>';
							$icon_type_class = 'image';
						} else if( $settings[$col.'_icon_type']=='none' ){
							$icon = '';
							$icon_type_class = 'none';
						} else {

							$icon       = ( !empty($settings[$col.'_icon']['value']) ) ? '<div class="prt-ptablebox-main-icon"><div class="prt-ptable-icon-wrapper"><i class="' . $settings[$col.'_icon']['value'] . '"></i></div></div>' : '';
							$icon_type_class = 'icon';

							wp_enqueue_style( 'elementor-icons-'.$settings[$col.'_icon']['library']);
						}
					}

					$featured = '';
					if( $settings['highlight_col'] == $col ){
						$col_start_div = str_replace( 'class="', 'class="prt-ptablebox-featured-col ', $col_start_div );
						$featured = ( !empty($settings['highlight_text']) ) ? '<div class="tprt-featured-title">'.$settings['highlight_text'].'</div>' : '' ;
					} else {
						$col_start_div = str_replace( 'class="prt-ptablebox-featured-col ', 'class="', $col_start_div );
					}

					$heading = ( !empty($settings[$col.'_heading']) ) ? '<div class="prt-ptablebox-title"><h4>'.$settings[$col.'_heading'].'</h4></div>' : '' ;
					$plans = ( !empty($settings[$col.'_plans']) ) ? '<div class="prt-ptablebox-plans"><span>'.$settings[$col.'_plans'].'</span></div>' : '' ;
					$desc = ( !empty($settings[$col.'_desc']) ) ? '<div class="prt-ptablebox-description"><span>'.$settings[$col.'_desc'].'</span></div>' : '' ;

					$currency_symbol = ( !empty($settings[$col.'_cur_symbol']) ) ? '<div class="prt-ptablebox-cur-symbol">'.$settings[$col.'_cur_symbol'].'</div>' : '' ;

					$frequency = ( !empty($settings[$col.'_price_frequency']) ) ? '<div class="prt-ptablebox-frequency">'.$settings[$col.'_price_frequency'].'</div>' : '' ;
				
					$highlight_icon = ( !empty($settings[$col.'_highlight_icon']) ) ? '<div class="prt-hicon">'.$settings[$col.'_highlight_icon'].'</div>' : '' ;
				
					$price = ( !empty($settings[$col.'_price']) ) ? '<div class="prt-ptablebox-price">'.$settings[$col.'_price'].'</div>' : '' ;
					
					$price = ( !empty($settings[$col.'_cur_symbol_position']) && $settings[$col.'_cur_symbol_position']=='before' ) ? $currency_symbol.' '.$price : $price.' '.$currency_symbol ;

					$lines_html = '';
					$lines2_html = '';
					$lines3_html = '';
					$values     = (array) $settings[$col.'_lines'];
					if( is_array($values) && count($values)>0 ){
						foreach ( $values as $data ) {

							$list_icon = '';
							if( !empty($data['icon']['value']) ){
								$list_icon = '<i class="' . $data['icon']['value'] . '"></i> ';
								wp_enqueue_style( 'elementor-icons-'.$data['icon']['library']);
							}
							$lines_html .= isset( $data['text'] ) ? '<li class="prt-ptable-line">'.$list_icon.$data['text'].'</li>' : '';
						}
					}
					$scol_values     = (array) $settings[$col.'_lines_second'];
					if( is_array($scol_values) && count($scol_values)>0 ){
						foreach ( $scol_values as $data ) {

							$list_icon = '<i class="fa fa-check"></i> ';
							if( !empty($data['icon']['value']) ){
								$list_icon = '<i class="' . $data['icon']['value'] . '"></i> ';
								wp_enqueue_style( 'elementor-icons-'.$data['icon']['library']);
							}
							$lines2_html .= isset( $data['text'] ) ? '<li class="prt-ptable-line">'.$list_icon.$data['text'].'</li>' : '';
						}
					}
					$tcol_values     = (array) $settings[$col.'_lines_third'];
					if( is_array($tcol_values) && count($tcol_values)>0 ){
						foreach ( $tcol_values as $data ) {

							$list_icon = '<i class="fa fa-check"></i> ';
							if( !empty($data['icon']['value']) ){
								$list_icon = '<i class="' . $data['icon']['value'] . '"></i> ';
								wp_enqueue_style( 'elementor-icons-'.$data['icon']['library']);
							}
							$lines3_html .= isset( $data['text'] ) ? '<li class="prt-ptable-line">'.$list_icon.$data['text'].'</li>' : '';
						}
					}

					$button = '';
					if( !empty($settings[$col.'_btn_text']) && !empty($settings[$col.'_btn_link']['url']) ){
						$button = '<div class="prt-ptable-btn">' . tm_link_render($settings[$col.'_btn_link'], 'start' ) . preyantechnosys_wp_kses($settings[$col.'_btn_text']) . tm_link_render($settings[$col.'_btn_link'], 'end' ) . '</div>';
					}

					$return .= $col_start_div;
					ob_start();
					include( get_template_directory() . '/template-parts/pricetable/pricetable-'.esc_attr($style).'.php' );
					$return .= ob_get_contents();
					ob_end_clean();
					$return .= $col_end_div;
				}

				$return .= '</div>';

			}

			echo preyantechnosys_wp_kses($return);
			?>

		</div>

		<?php

	}

	

	
}
// Register widget
Plugin::instance()->widgets_manager->register( new Fixter_Pricetable_Widget() );