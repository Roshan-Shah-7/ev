<?php

/**
 * Add group in Elementor editor
 */
if( !function_exists('tm_elements_manager') ){
function tm_elements_manager() {
	\Elementor\Plugin::$instance->elements_manager->add_category( 
		'fixter_category',
		[
			'title' => esc_attr__( 'Fixter Special Elements', 'fixter' ),
			'icon' => 'fa fa-plug',
		],
		1 // tab position
	);
}
}
add_action( 'elementor/init', 'tm_elements_manager' );

if( !function_exists('tm_elements_manager_team') ){
function tm_elements_manager_team() {
	\Elementor\Plugin::$instance->elements_manager->add_category( 
		'ttmmedical_team_category',
		[
			'title' => esc_attr__( 'Fixter Team Details Page Elements', 'fixter' ),
			'icon' => 'fa fa-plug',
		],
		1 // tab position
	);
}
}
add_action( 'elementor/init', 'tm_elements_manager_team' );


define( 'WEBIZZY_ICON_URL',  get_template_directory( __FILE__ )  ); 

/**
 * Adding custom theme icons
 */
 
if( !function_exists('prt_elementor_add_custom_icons_tab') ){
function prt_elementor_add_custom_icons_tab( $icons_tabs = array() ) {

	if( defined('WEBIZZY_ICON_URL') ){

		$prt_fixter_icons_array = array(
			'profit',
			'cash-flow',	
			'target',
			'statistics',
			'flexible',
			'email',
			'arrow-right',
			'profit-1',
			'brain',
			'cooperation',
			'international-business',
			'consultation',
			'workflow',
			'leadership',
			'optimization',
			'owner',
			'consultant',
			'handshake',
			'customer',
			'quote',
			'creative-cloud',
			'spring',
			'metaverse',
			'group',
			'intersection',
			'stars',
			
			
		);
		
		$icons_tabs['kw_fixter'] = array(
			'name'          => 'kw_fixter',
			'label'         => esc_html__( 'Fixter Special Icons', 'fixter' ),
			'labelIcon'     => 'kw_fixter flaticon-workspace',
			'prefix'        => 'flaticon-',
			'displayPrefix' => 'kw_fixter',
			'url'           => wp_enqueue_style( 'preyantechnosys-fixter-extra-icons', get_template_directory_uri() . '/assets/preyantechnosys-fixter-extra-icons/font/flaticon_bussiness_new.css' ),
			'icons'         => $prt_fixter_icons_array,
			'ver'           => '1.0.0',
		);
		
	}
	
	
	return $icons_tabs;
}
}
add_filter( 'elementor/icons_manager/additional_tabs', 'prt_elementor_add_custom_icons_tab' );


/**
 *  Add preview js for Elementor
 */
function tm_elementor_preview_scripts(){
	if ( defined('ELEMENTOR_VERSION') && \Elementor\Plugin::$instance->preview->is_preview_mode() ) {
		wp_enqueue_script(  'fixter-elementor-preview', get_template_directory_uri() . '/inc/elementor-preview.js' );

	wp_enqueue_style( 'fixter-iconbox', get_template_directory_uri() . '/css/iconbox.css' );
	wp_enqueue_style( 'fixter-fidbox', get_template_directory_uri() . '/css/fidbox.css' );
	wp_enqueue_style( 'fixter-service', get_template_directory_uri() . '/css/service.css' );
	wp_enqueue_style( 'fixter-testimonial', get_template_directory_uri() . '/css/testimonial.css' );
	wp_enqueue_style( 'fixter-blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_style( 'fixter-team', get_template_directory_uri() . '/css/team.css' );
	wp_enqueue_style( 'fixter-portfolio', get_template_directory_uri() . '/css/portfolio.css' );
	wp_enqueue_style( 'fixter-stepbox', get_template_directory_uri() . '/css/stepbox.css' );
	wp_enqueue_style( 'fixter-showcase', get_template_directory_uri() . '/css/showcase.css' );
	wp_enqueue_style( 'fixter-client', get_template_directory_uri() . '/css/client.css' );
	wp_enqueue_style( 'fixter-tab', get_template_directory_uri() . '/css/tab.css' );
	wp_enqueue_style( 'fixter-pricingtable', get_template_directory_uri() . '/css/pricingtable.css' );

	}
}
add_action( 'wp_enqueue_scripts', 'tm_elementor_preview_scripts' );

function tm_elementor_enqueue_base_scripts(){
	wp_enqueue_script(  'fixter-functions', get_template_directory_uri() . '/js/functions.js' );
	wp_enqueue_script(  'fixter-elementor-main', get_template_directory_uri() . '/inc/elementor-main.js' );
}
add_action('elementor/editor/before_enqueue_scripts', 'tm_elementor_enqueue_base_scripts');


/**
 * Creating element widgets now*/
 
add_action( 'elementor/widgets/register', 'tm_elementor_register_widgets',1,1 );
function tm_elementor_register_widgets() {

    if ( defined( 'ELEMENTOR_PATH' ) && class_exists('Elementor\Widget_Base') ) {

        require_once( get_template_directory() . '/inc/elementor/heading-subheading.php' );
		require_once( get_template_directory() . '/inc/elementor/icon-heading.php' );
		require_once( get_template_directory() . '/inc/elementor/fid.php' );
		require_once( get_template_directory() . '/inc/elementor/prt-service.php' );
		require_once( get_template_directory() . '/inc/elementor/prt-testimonial.php' );
		require_once( get_template_directory() . '/inc/elementor/prt-blog.php' );
		require_once( get_template_directory() . '/inc/elementor/prt-team.php' );
		require_once( get_template_directory() . '/inc/elementor/team-img.php' );
        require_once( get_template_directory() . '/inc/elementor/team-nameinfo.php' );
		require_once( get_template_directory() . '/inc/elementor/prt-client.php' );
		require_once( get_template_directory() . '/inc/elementor/reel-video.php' );
		require_once( get_template_directory() . '/inc/elementor/prt-portfolio.php' );
		require_once( get_template_directory() . '/inc/elementor/prt-masonry-portfolio.php' );
		require_once( get_template_directory() . '/inc/elementor/pricing-table.php' );
		require_once( get_template_directory() . '/inc/elementor/static-box.php' );
		require_once( get_template_directory() . '/inc/elementor/static-box2.php' );
		require_once( get_template_directory() . '/inc/elementor/prt-tabs.php' );
		require_once( get_template_directory() . '/inc/elementor/prt-roundbox.php' );
		require_once( get_template_directory() . '/inc/elementor/scrolling-text.php' );
		require_once( get_template_directory() . '/inc/elementor/marque-box.php' );
		require_once( get_template_directory() . '/inc/elementor/marquee-box.php' );
		
		
		
    }
}

if( !function_exists('tm_link_render') ){
function tm_link_render( $value=array(), $type='start' ) {
	if( !empty($value) && is_array($value) && !empty($value['url']) ){
		if( $type=='start' ){
			$target		= $value['is_external'] ? ' target="_blank"' : '';
			$nofollow	= $value['nofollow'] ? ' rel="nofollow"' : '';
			return preyantechnosys_wp_kses( '<a href="' . $value['url'] . '"' . $target . $nofollow . '><span>' ); 
		} else {
			return preyantechnosys_wp_kses( '</span></a>' ); 
		}
	}
}
}

/***Themetechmount Iconbox Element code***/

if( !function_exists('preyantechnosys_iconbox_ele') ){
function preyantechnosys_iconbox_ele( $settings, $echo=false ){
	$return = '';
	
	if( !empty($settings['icon_type']) ){

		switch( $settings['icon_type'] ){

			case 'icon':
				if( !empty($ttm_data['icon']['value']) ){
					$return = '<i class="'.esc_attr( $settings['icon']['value'] ).'"></i>';

				}
				break;

			case 'image':
				if( !empty($settings['icon_image']['url']) ){
					$return = '<img src="'.esc_attr( $settings['icon_image']['url'] ).'" />';
				}
			break;

			case 'text':
				if( !empty($settings['icon_text']) ){
					$return = '<div class="prt-iheading-icontext">'.esc_attr($settings['icon_text']).'</div>';
				}
				break;

		}

	}
	if( !empty($return) ){
		$return = preyantechnosys_wp_kses('<div class="prt-iheading-icon prt-iheading-icon-type-'.esc_attr($settings['icon_type']).'">'.$return.'</div>');
	}

	if( $echo == true ){
		echo preyantechnosys_wp_kses($return);
	} else {
		return preyantechnosys_wp_kses($return);
	}

}
}

/**
 *  Heading Sub Heading Element.
 */

if( !function_exists('prt_heading_subheading') ){
function prt_heading_subheading( $settings = array(), $echo = false ){

	// Reverse heading class
	$reverse_class = '';
	if( !empty($settings['reverse_heading']) && $settings['reverse_heading']=='yes' ){
		$reverse_class = 'prt-reverse-heading-yes';
	}
	
	// desc heading class
	$desc = '';
	if( !empty($settings['desc'] )){
		$desc = 'prt-content-with-desc';
	}
	
	$heading_style = '';
	
	$return = '<div class="prt-element-heading-content-wrapper ' . preyantechnosys_wp_kses($settings['text_align']) . '-align '.esc_attr($reverse_class).' prt-seperator-'. preyantechnosys_wp_kses($settings['heading_sep']) .' '.esc_attr($desc).' prt-heading-style-'. preyantechnosys_wp_kses($settings['heading_style']) .' ">';
	
	$heading = '';
	
	// icon
	$return .= preyantechnosys_iconbox_ele($settings);
	
	$return .= preyantechnosys_wp_kses('<div class="prt-content-header">');
	
	// Heading
	if( !empty($settings['heading']) ) {
		$heading_tag = ( !empty($settings['heading_tag']) ) ? $settings['heading_tag'] : 'h2' ;

		$heading .= '<'. preyantechnosys_wp_kses($heading_tag) . ' class="prt-element-content-heading">
				'.preyantechnosys_wp_kses($settings['heading']).'
			</'. preyantechnosys_wp_kses($heading_tag) . '>
		';
	}

	// reverse before heading
	if( empty($settings['reverse_heading']) && !empty($heading) ){
		$return .= preyantechnosys_wp_kses($heading);
	}

	// subheading
	if( !empty($settings['subheading']) ) {
		$subheading_tag	= ( !empty($settings['subheading_tag']) ) ? $settings['subheading_tag'] : 'h4' ;
		$subheading		= '<'. preyantechnosys_wp_kses($subheading_tag) . ' class="prt-element-subheading">
				'.preyantechnosys_wp_kses($settings['subheading']).'
			</'. preyantechnosys_wp_kses($subheading_tag) . '>
		';
		$return .= preyantechnosys_wp_kses($subheading);
	}

	// Heading after sub-title
	if( !empty($settings['reverse_heading']) && !empty($heading) ){
		$return .= preyantechnosys_wp_kses($heading);
	}
	$return .= preyantechnosys_wp_kses('</div>');
	if( !empty($settings['desc']) ){
		$desc = '<div class="prt-element-content-desctxt">'.preyantechnosys_wp_kses($settings['desc']).'</div>';
		$return .= preyantechnosys_wp_kses($desc);
	}
	// closing div
	$return .= preyantechnosys_wp_kses('</div>');

	// final output
	if( $echo == true ){
		echo preyantechnosys_wp_kses($return);
	} else {
		return preyantechnosys_wp_kses($return);
	}

}
}

add_action('elementor/element/section/section_layout/before_section_start', 'tm_elementor_section_options', 10);
if( !function_exists('tm_elementor_section_options') ){
function tm_elementor_section_options( $element ){

	$element->start_controls_section(
		'tm_element_section_title',
		[
			'label' => __('Fixter Special Options', 'fixter'),
			'tab' => Elementor\Controls_Manager::TAB_LAYOUT,
		]
	);
	
	$element->add_control(
		'tm_break_col',
		[
			'label'			=> esc_html__( 'Break Column in Ipad Screen', 'fixter' ),
			'description'	=> esc_html__( 'Pre-defined Break Column', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SELECT,
			'default'		=> 'no',
			'prefix_class'	=> 'prt-column-break-ipad-',
			'options' => [
				'no' 			=> __( 'No', 'fixter' ),
				'yes'		=> __( 'Yes', 'fixter' ),
			],
		]
	);

	$element->add_control(
		'prt-extended-column',
		[
			'label'			=> esc_attr__( 'Exapand Column Background', 'fixter' ),
			'description'	=> esc_attr__( 'Exapand Column BG to left or right. This will expand the Background image/color visibility to border of the browser border.', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SELECT,
			'label_block'	=> true,
			'hide_in_inner' => true,
			'default'		=> 'none',
			'prefix_class'	=> 'prt-col-stretched-',
			'options'		=> [
				'none' 			=> __( 'No expand (default)', 'fixter' ),
				'left'		=> __( 'Exapand Column background to left', 'fixter' ),
				'right'		=> __( 'Exapand Column background to right', 'fixter' ),	
				'both'		=> __( 'Exapand Column background to both', 'fixter' ),				
			],
		]
	);


	$element->add_control(
		'prt-strech-content-left',
		[
			'label'			=> esc_attr__( 'Also stretch left content too?', 'fixter' ),
			'description'	=> esc_attr__( 'Also stretch left content too?', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SWITCHER,
			'prefix_class'	=> 'prt-left-col-stretched-content-',
			'hide_in_inner' => true,
			'label_on'		=> esc_attr__( 'Yes', 'fixter' ),
			'label_off'		=> esc_attr__( 'No', 'fixter' ),
			'return_value'	=> 'yes',
			'default'		=> '',
			'condition'		=> [
				'prt-extended-column' => array('left', 'both'),
			]
		]
	);
	$element->add_control(
		'prt-strech-content-right',
		[
			'label'			=> esc_attr__( 'Also stretch right content too?', 'fixter' ),
			'description'	=> esc_attr__( 'Also stretch right content too?', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SWITCHER,
			'prefix_class'	=> 'prt-right-col-stretched-content-',
			'hide_in_inner' => true,
			'label_on'		=> esc_attr__( 'Yes', 'fixter' ),
			'label_off'		=> esc_attr__( 'No', 'fixter' ),
			'return_value'	=> 'yes',
			'default'		=> '',
			'condition'		=> [
				'prt-extended-column' => array('right', 'both'),
			]
		]
	);
	
	
	$element->add_control(
		'prt-left-margin',
		[
			'label'			=> esc_html__( 'Left Content Area Margin', 'fixter' ),
			'description'	=> esc_html__( 'This is useful if you like to overlap columns on each other.', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::DIMENSIONS,
			'separator'		=> 'before',
			'selectors' => [
				'{{WRAPPER}} .prt-stretched-div.prt-stretched-left' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		]
	);

	$element->add_control(
		'prt-right-margin',
		[
			'label'			=> esc_html__( 'Right Content Area Margin', 'fixter' ),
			'description'	=> esc_html__( 'This is useful if you like to overlap columns on each other.', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::DIMENSIONS,
			'selectors' => [
				'{{WRAPPER}} .prt-stretched-div.prt-stretched-right' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		]
	);

	$element->add_control(
		'tm_bg_color',
		[
			'label'			=> esc_html__( 'Background Color', 'fixter' ),
			'description'	=> esc_html__( 'Select Background Color. If you select color and also select background Video or background Image than the color will be overlay with some opacity', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SELECT,
			'default'		=> '',
			'separator'		=> 'before',
			'prefix_class'	=> 'prt-bgcolor-',
			"weight"      => 1,
			'options'		=> [
				'' 		=> esc_attr__( 'Transparent (From Design Options tab)', 'fixter' ),
				'darkgrey'		=> esc_attr__( 'Dark grey color as background color', 'fixter' ),
				'grey'			=> esc_attr__( 'Grey color as background color', 'fixter' ),
				'white'	        => esc_attr__( 'White color as background color', 'fixter' ),
				'skincolor'  	=> esc_attr__( 'Skincolor color as background color', 'fixter' ),
				'gradient'		=> esc_attr__( 'Gradient color as background color', 'fixter' ),
				
			],
		]
	);

	$element->add_control(
		'tm_text_color',
		[
			'label'			=> esc_html__( 'Section Text Color', 'fixter' ),
			'description'	=> esc_html__( 'Pre-defined Text Color in this Section (ROW)', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SELECT,
			'default'		=> '',
			'prefix_class'	=> 'prt-textcolor-',
			'options' => [
				'' 			=> __( 'Default', 'fixter' ),
				'white'		=> __( 'White Color', 'fixter' ),
				'dark'		=> __( 'Dark Color', 'fixter' ),
				'skincolor'	=> __( 'Skin Color', 'fixter' ),
			],
		]
	);

	$element->end_controls_section();
}
}


/**
 * Elementor column options
 */
add_action('elementor/element/column/layout/before_section_start', 'tm_elementor_column_options', 10);
if( !function_exists('tm_elementor_column_options') ){
function tm_elementor_column_options( $element ){

	$element->start_controls_section(
		'tm_element_section_title',
		[
			'label' => __('Fixter Special Options', 'fixter'),
			'tab' => Elementor\Controls_Manager::TAB_LAYOUT,
		]
	);

	$element->add_control(
		'tm_bg_color',
		[
			'label'			=> esc_html__( 'Column Background Color', 'fixter' ),
			'description'	=> esc_html__( 'Pre-defined Background Color for this Column', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SELECT,
			'default'		=> '',
			'prefix_class'	=> 'prt-bgcolor-yes prt-col-bgcolor-',
			"weight"      => 1,
			'options'		=> [
				'' 			=> esc_attr__( 'Transparent (From Design Options tab)', 'fixter' ),
				'darkgrey'		=> esc_attr__( 'Dark grey color as background color', 'fixter' ),
				'grey'			=> esc_attr__( 'Grey color as background color', 'fixter' ),
				'white'	        => esc_attr__( 'White color as background color', 'fixter' ),
				'skincolor'  	=> esc_attr__( 'Skincolor color as background color', 'fixter' ),
				'gradient'		=> esc_attr__( 'Gradient color as background color', 'fixter' ),
				
			],
		]
	);

	$element->add_control(
		'tm_text_color',
		[
			'label'			=> esc_html__( 'Column Text Color', 'fixter' ),
			'description'	=> esc_html__( 'Pre-defined Text Color in this Column', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SELECT,
			'default'		=> '',
			'prefix_class'	=> 'prt-textcolor-',
			'options' => [
				'' 			=> __( 'Default', 'fixter' ),
				'white'		=> __( 'White Color', 'fixter' ),
				'dark'		=> __( 'Dark Color', 'fixter' ),
				'skincolor'	=> __( 'Skin Color', 'fixter' ),
			],
		]
	);

	$element->end_controls_section();
}
}



/**
 * Elementor button options
 */
add_action('elementor/element/button/section_button/before_section_start', 'tm_elementor_button_options', 10);
if( !function_exists('tm_elementor_button_options') ){
function tm_elementor_button_options( $element ){

	$element->start_controls_section(
		'tm_element_section_title',
		[
			'label' => __('Fixter Special Options', 'fixter'),
			'tab' => Elementor\Controls_Manager::TAB_CONTENT,
		]
	);
		
	$element->add_control(
		'color',
		[
			'label'			=> esc_html__( 'Button Color', 'fixter' ),
			'description'	=> esc_html__( 'Pre-defined Color for Button', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SELECT,
			'default'		=> 'skincolor',
			'label_block'	=> true,
			'prefix_class'	=> 'prt-btn-color-',
			'options' => [
				'darkgrey'		=> esc_attr__( 'Dark Grey', 'fixter' ),
				'grey'			=> esc_attr__( 'Grey Color', 'fixter' ),
				'white'	        => esc_attr__( 'White Color', 'fixter' ),
				'skincolor'  	=> esc_attr__( 'Skin Color', 'fixter' ),
				'gradient'		=> esc_attr__( 'Gradient Color', 'fixter' ),
			],
		]
	);
	$element->add_control(
		'style',
		[
			'label'			=> esc_html__( 'Select Button Style', 'fixter' ),
			'description'	=> esc_html__( 'Button style', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SELECT,
			'default'		=> 'flat',
			'label_block'	=> true,
			'prefix_class'	=> 'prt-btn-style-',
			'options' => [
				'flat' 			=> esc_attr__( 'Flat', 'fixter' ),
				'outline'		=> esc_attr__( 'Outline', 'fixter' ),
				'text'			=> esc_attr__( 'Simple text', 'fixter' ),
				'top-border'			=> esc_attr__( 'Top Border', 'fixter' ),
			],
		]
	);
	
	$element->add_control(
		'shape',
		[
			'label'			=> esc_attr__( 'Select button shape.', 'fixter' ),
			'description'	=> esc_attr__( 'Select button shape.', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SELECT,
			'label_block'	=> true,
			'prefix_class'	=> 'prt-btn-shape-',
			'default'		=> 'square',
			'options' => [
				'square' 		=> esc_attr__( 'Square', 'fixter' ),
				'rounded'		=> esc_attr__( 'Rounded', 'fixter' ),
				'round'			=> esc_attr__( 'Round', 'fixter' ),
			],
		]

	);
	
	$element->add_control(
			'icon-pos',
			[
				'label' => __( 'Icon Position', 'fixter' ),
				'type' => Elementor\Controls_Manager::SELECT,
				'label_block'	=> true,
				'prefix_class'	=> 'prt-icon-align-',
				'default' => 'left',
				'options' => [
					'left'  => __( 'Before', 'fixter' ),
					'right' => __( 'After', 'fixter' ),
				],
				'condition' => [
					'selected_icon[value]!' => '',
				],
			]
		);
		
		
	$element->end_controls_section();
}
}
	
/* enable builder for custom cpt */

if( !function_exists('tm_elementor_enable_cpt_support') ){
function tm_elementor_enable_cpt_support() {

	$cpt_support  = array( 'page', 'post', 'tm_portfolio', 'tm_service', 'tm_team_member' );
	update_option( 'elementor_cpt_support', $cpt_support  );

}
}
add_action( 'after_switch_theme', 'tm_elementor_enable_cpt_support' );


/**
 * Elementor image options
 */
add_action('elementor/element/image/section_image/after_section_end', 'tm_elementor_image_options', 10);
if( !function_exists('tm_elementor_image_options') ){
function tm_elementor_image_options( $element ){

	$element->start_controls_section(
		'tm_element_section_title',
		[
			'label' => __('Bismount Special Options', 'fixter'),
			'tab' => Elementor\Controls_Manager::TAB_CONTENT,
		]
	);
		
	$element->add_control(
		'tm-reveal-effects',
		[
			'label'			=> esc_html__( 'Reveal Effect', 'fixter' ),
			'description'	=> esc_html__( 'Set animation for image', 'fixter' ),
			'type' => Elementor\Controls_Manager::SWITCHER,
			'label_on' => esc_attr__( 'Yes', 'fixter' ),
			'label_off' => esc_attr__( 'No', 'fixter' ),
			'return_value' => 'yes',
			'prefix_class'	=> 'tm-reveal-effects-',
			'default' => '',
		]
	);
	$element->add_control(
		'tm-img-animation-style',
		[
			'label'			=> esc_html__( 'Animation Style', 'fixter' ),
			'type'			=> Elementor\Controls_Manager::SELECT,
			'default'		=> 'lr',
			'label_block'	=> true,
			'prefix_class'	=> 'tm-reveal-direction-',
			'options' => [
				'lr' 		=> esc_attr__( 'Left to Right', 'fixter' ),
				'rl' 		=> esc_attr__( 'Right to Left', 'fixter' ),
				'bt' 		=> esc_attr__( 'Bottom to Top', 'fixter' ),
				'tb' 		=> esc_attr__( 'Top to Bottom', 'fixter' ),
			],
			'condition' => [
					'tm-reveal-effects' => 'yes',
				],
		]
	);
				
	$element->end_controls_section();
}
}