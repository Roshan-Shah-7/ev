<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}

/**
 *  Fact & Digit Widget.
*/
 
class Fixter_Fidbox_Widget extends Widget_Base{

	public function get_name() {
		return 'tm_fid_element';
	}

	public function get_title() {
		return esc_attr__( 'Facts in digits', 'fixter' );
	}

	public function get_icon() {
		return 'eicon-counter';
	}

	public function get_categories() {
		return [ 'fixter_category' ];
	}

	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);
		wp_enqueue_script( 'waypoints' );
		wp_enqueue_script( 'numinate' );
		wp_enqueue_script( 'jquery-circle-progress' );
	}  
	
	protected function register_controls() {

		$this->start_controls_section(
			'data_section',
			[
				'label' => esc_attr__( 'Content', 'fixter' ),
			]
        );
		
		
		$this->add_control(
			'view',
			[
				'label'			=> esc_attr__( 'Design', 'fixter' ),
				'description'	=> esc_attr__( 'Select box design.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'label_block'	=> true,
				'thumb_width'	=> '110px',
				'default'		=> 'topicon',
				'options' => [
					'topicon'	=> esc_attr( 'Top Icon' ),
					'lefticon'	=> esc_attr( 'Left Icon' ),
					'righticon'	=> esc_attr( 'Right Icon' ),
					'circle-progress'	=> esc_attr( 'Circle Progress Style' ),					
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
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
                ],
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
			'title',
			[
				'label' => esc_attr__( 'Header ', 'fixter' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_attr__( 'Title Text. ', 'fixter' ),
				'placeholder' => esc_attr__( 'Enter text for the title. ', 'fixter' ),
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
				'label_block' => true,
				]
		);
		

		$this->add_control(
			'digit',
			[
				'label' => esc_attr__( 'Rotating Number', 'fixter' ),
				'description' => esc_attr__( 'Enter rotating number digit here.', 'fixter' ),
				'separator' => 'before',
				'type' => Controls_Manager::NUMBER,
				'default' => '50',
			]
		);

		$this->add_control(
			'interval',
			[
				'label' => esc_attr__( 'Rotating digit Interval', 'fixter' ),
				'description' => esc_attr__( 'Enter rotating interval number here.', 'fixter' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '5',
			]
		);

		$this->add_control(
			'before',
			[
				'label' => esc_attr__( 'Text Before Number', 'fixter' ),
				'description' => esc_attr__( 'Enter text which appear just before the rotating numbers.', 'fixter' ),
				'separator' => 'before',
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => '',
			]
		);

		$this->add_control(
			'beforetextstyle',
			[
				'label' => esc_attr__( 'Text Style', 'fixter' ),
				'description' => esc_attr__('Select text style for the before text.', 'fixter'),
				'type' => Controls_Manager::SELECT,
				'default' => 'sup',
				'options' => [
					'sup'		=> esc_attr__( 'Superscript', 'fixter' ),
					'sub'		=> esc_attr__( 'Subscript', 'fixter' ),
					'span'		=> esc_attr__( 'Normal', 'fixter' ),
				]
			]
		);

		$this->add_control(
			'after',
			[
				'label' => esc_attr__( 'Text After Number', 'fixter' ),
				'description' => esc_attr__( 'Enter text which appear just after the rotating numbers.', 'fixter' ),
				'type' => Controls_Manager::TEXT,
				'separator' => 'before',
				'dynamic' => [
					'active' => true,
				],
				'default' => '',
			]
		);

		$this->add_control(
			'aftertextstyle',
			[
				'label' => esc_attr__( 'Text Style', 'fixter' ),
				'description' => esc_attr__('Select text style for the after text.', 'fixter'),
				'type' => Controls_Manager::SELECT,
				'default' => 'sup',
				'options' => [
					'sup'		=> esc_attr__( 'Superscript', 'fixter' ),
					'sub'		=> esc_attr__( 'Subscript', 'fixter' ),
					'span'		=> esc_attr__( 'Normal', 'fixter' ),
				]
			]
		);
		
		$this->add_control(
			'circle_fill_color',
			[
				'label' => esc_attr__( 'Circle fill color', 'fixter' ),
				'description'	=> esc_attr__( 'Select circle fill color..', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'skincolor',
				'options' => [
					'skincolor'		=> esc_attr__( 'Skincolor', 'fixter' ),
					'20292f'		=> esc_attr__( 'Dark Grey', 'fixter' ),
					'#fff'			=> esc_attr__( 'White', 'fixter' ),
				],
				'condition' => [
					'view' => 'circle-progress',
				],
			]
		);
		$this->add_control(
			'circle_empty_color',
			[
				'label' => esc_attr__( 'Circle empty color', 'fixter' ),
				'description'	=> esc_attr__( 'Select circle empty color..', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'default' => '20292f',
				'options' => [
					'skincolor'		=> esc_attr__( 'Skincolor', 'fixter' ),
					'20292f'		=> esc_attr__( 'Dark Grey', 'fixter' ),
					'#fff'		=> esc_attr__( 'White', 'fixter' ),
				],
				'condition' => [
					'view' => 'circle-progress',
				],
			]
		);
		

		$this->end_controls_section();

	}

	protected function render() {

		$settings	= $this->get_settings_for_display();
		extract($settings);
		
		global $tm_global_fid_element_values;
		$tm_global_fid_element_values = array();
		
		$tm_global_fid_element_values['circle_fill_color']  = $circle_fill_color;
		$tm_global_fid_element_values['circle_empty_color']  = $circle_empty_color;

		$return = $icon = '';

		$lefticoncode  = '';
		$righticoncode = '';
		$bgtitle = '';
		wp_enqueue_style( 'fixter-fidbox' );
		
		if( $settings['icon_type']=='image' ){
					$icon_alt	= (!empty($settings['title'])) ? trim($settings['title']) : esc_attr__('Icon', 'fixter') ;
					$icon_image = '<img src="'.esc_url($settings['icon_image']['url']).'" alt="'.esc_attr($icon_alt).'" />';
					$lefticoncode	= '<div class="prt-icon-type-image">' . $icon_image . '</div>';
					$icon_type_class = 'image';
		} 
		else if( $settings['icon_type']=='none' ){ 
			$lefticoncode = '<div class="prt-fid-icon-wrapper"></div>';
		}
		else { 
			$lefticoncode = '<div class="prt-fid-icon-wrapper"><i class="' . esc_attr($settings['icon']['value']) . '"></i></div>';
		} 
		$class         = array();
		$class_icon         = 'prt-fid-without-icon';
		if( !empty($settings['icon_type']=='image') ){ 
			$class_icon = 'prt-fid-with-icon';	
			
		} 
		if( !empty($settings['icon_type']=='icon') ){ 
			$class_icon = 'prt-fid-with-icon';	
			
		} 
		if( !empty($settings['icon_type']=='none') ){ 
			$class_icon = 'prt-fid-without-icon';	
			
		} 		// if( $add_icon=='true' )
		
		// icon exists class
		$class[] = $class_icon;
		
		if( !empty($view) ){
			$class[] = 'prt-fid-view-'.$view;
		}
	if( !empty($settings['bgtitle']) ){
				$bgtitle = '<div class="prt-bgtext-wrapper">'.preyantechnosys_wp_kses($settings['bgtitle']).'</div>';
			}
			
		$before_text = '';
		$after_text  = '';
		
		if( trim($before)!='' ){
			if( $beforetextstyle=='sup' || $beforetextstyle=='sub' || $beforetextstyle=='span' ){
				$before_text = '<'.$beforetextstyle.'>'.trim($before).'</'.$beforetextstyle.'>';
			}
		}
		
		if( trim($after)!='' ){
			if( $aftertextstyle=='sup' || $aftertextstyle=='sub' || $aftertextstyle=='span' ){
				$after_text = '<'.$aftertextstyle.'>'.trim($after).'</'.$aftertextstyle.'>';
			}
		}
			$view_class=implode(' ', $class);

		if( file_exists( locate_template( '/template-parts/fidbox/fidbox-'.esc_attr($view).'.php', false, false ) ) ){

			ob_start();
			include( locate_template( '/template-parts/fidbox/fidbox-'.esc_attr($view).'.php', false, false ) );
			$return .= ob_get_contents();
			ob_end_clean();

		}
		
		echo preyantechnosys_wp_kses($return);

	}

	

}
// Register widget
Plugin::instance()->widgets_manager->register( new Fixter_Fidbox_Widget() );