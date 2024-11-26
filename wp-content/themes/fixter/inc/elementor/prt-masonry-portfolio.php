<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}

/**
 *  Blog Box
*/

class Invess_Masonry_Portfoliobox_Widget extends Widget_Base{

	public function get_name() {
		return 'prt_masonry_project_element';
	}

	public function get_title() {
		return esc_attr__( 'Masonry Portfolio Box Element', 'fixter' );
	}
	
	public function get_icon() {
		return 'eicon-gallery-grid';
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
				'label'			=> esc_attr__( 'Select Portfolio Style', 'fixter' ),
				'description'	=> esc_attr__( 'Select Portfolio style.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'label_block'	=> true,
				'options' => [
					'style1'	=> esc_attr( 'PortfolioBox Style 1' ),
				],
				'default' => esc_attr( 'style1' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'data_section',
			[
				'label' => esc_attr__( 'Box Design', 'fixter' ),
			]
		);
		
		
		
		$this->add_control(
			'show',
			[
				'label' => esc_attr__( 'Post to show', 'fixter' ),
				'description' => esc_attr__( 'How many item you want to show.', 'fixter' ),
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
			'allword',
			[
				'label' => esc_attr__( 'Replace ALL word', 'fixter' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_attr__( 'All', 'fixter' ),
				'placeholder' => esc_attr__( 'Replace ALL word in sortable group links. Default is ALL word.', 'fixter' ),
				'label_block' => true,
				'condition' => [
					'sortable' => 'yes',
				],
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
					'three'				=> esc_attr__( 'Three Column', 'fixter' ),
					'four'				=> esc_attr__( 'Four Column', 'fixter' ),
					'five'				=> esc_attr__( 'Five Column', 'fixter' ),
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
				]
			]
		);


		$this->end_controls_section();

	}

	protected function render() {

		$settings	= $this->get_settings_for_display();
		extract($settings);

		$start_div = ttm_element_container( array(
			'position'	=> 'start',
			'cpt'		=> 'portfolio',
			'data'		=> $settings
		) );

		echo preyantechnosys_wp_kses($start_div);

		$args = array(
			'post_type'				=> 'tm_portfolio',
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
					'taxonomy' => 'tm_portfolio_category',
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

			<div class="preyantechnosys-box-heading-wrapper">
				<?php
				if( function_exists('preyantechnosys_get_filterbutton') ){
					$sortable_category_html = preyantechnosys_get_filterbutton( $settings, 'prt_portfolio_category' );
					echo  preyantechnosys_wp_kses($sortable_category_html);
				}
				?>
			</div>

			<div class="preyantechnosys-boxes-row-wrapper row multi-columns-row prt-box-masnory">

			<?php
			$x = 1;
		
			while ( $posts->have_posts() ) {
				$return = '';
				$posts->the_post();

			global $tm_global_sc_loop_count;
			$tm_global_sc_loop_count = $x;
			
				if( file_exists( locate_template( '/template-parts/portfoliobox-masonry/portfoliobox-'.esc_attr($style).'.php', false, false ) ) ){

					$return .= ttm_element_block_container( array(
						'position'	=> 'start',
						'column'	=> $column,
						'cpt'		=> 'portfolio',
						'taxonomy'	=> 'tm_portfolio_category',
						'style'		=> $style,
					) );
					wp_enqueue_style( 'fixter-portfolio' );
					ob_start();
					$r = include( locate_template( '/template-parts/portfoliobox-masonry/portfoliobox-'.esc_attr($style).'.php', false, false ) );
					$return .= ob_get_contents();
					ob_end_clean();

					$return .= ttm_element_block_container( array(
						'position'	=> 'end',
					) );

				}

				echo trim($return);
				$x++;
			}
			?>

			</div>

			<?php
		}

	    wp_reset_postdata();
		
		$end_div = ttm_element_container( array(
			'position'	=> 'end',
			'cpt'		=> 'portfolio',
			'data'		=> $settings
		) );
		echo preyantechnosys_wp_kses($end_div);
	}

	protected function _content_template() {}
	

	
	
}
// Register widget
Plugin::instance()->widgets_manager->register( new Invess_Masonry_Portfoliobox_Widget() );