<?php
namespace Elementor; 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly	
}

/**
 *  Tab Box
*/

class Fixter_tabbox_Widget extends Widget_Base{

	public function get_name() {
		return 'tm_tabbox_element';
	}

	public function get_title() {
		return esc_attr__( 'Tab', 'fixter' );
	}

	public function get_icon() {
		return 'eicon-nav-menu';
	}

	public function get_categories() {
		return [ 'fixter_category' ];
	}

	public function get_keywords() {
		return [ 'tabs', 'accordion', 'toggle' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_attr__( 'Tabs', 'fixter' ),
			]
		);
		
		$this->add_control(
			'style',
			[
				'label'			=> esc_attr__( 'Select Tab Style', 'fixter' ),
				'description'	=> esc_attr__( 'Select Tab style.', 'fixter' ),
				'type' => Controls_Manager::SELECT,
				'label_block'	=> true,
				'options' => [
					'style1'	=> esc_attr( 'Style 1' ),
				],
				'default' => esc_attr( 'style1' ),
			]
		);
		

		$repeater = new Repeater();

		$repeater->add_control(
			'tab_icon',
			[
				'label' => esc_attr__( 'Icon', 'fixter' ),
				'type' => Controls_Manager::ICONS,
				'fa4compatibility' => 'icon',
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'fa-solid',
				],
			]
		);

		$repeater->add_control(
			'tab_title',
			[
				'label' => esc_attr__( 'Title & Description', 'fixter' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_attr__( 'Title', 'fixter' ),
				'placeholder' => esc_attr__( 'Tab Title', 'fixter' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'tabs_content_type',
			[
				'label' => esc_html__('Content Type', 'fixter'),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'content' => esc_html__('Content', 'fixter'),
					'template' => esc_html__('Saved Templates', 'fixter'),
				],
				'default' => 'content',
			]
        );
		
		$repeater->add_control(
			'tab_content',
			[
				'label' => esc_attr__( 'Content', 'fixter' ),
				'default' => esc_attr__( 'Tab Content', 'fixter' ),
				'placeholder' => esc_attr__( 'Content', 'fixter' ),
				'type' => Controls_Manager::WYSIWYG,
				'show_label' => false,
				'condition' => [
                    'tabs_content_type' => 'content',
                ]
			]
		);

		$repeater->add_control(
			'tabscontent_templates',
			[
				'label' => esc_html__('Choose Template', 'fixter'),
				'type' => Controls_Manager::SELECT,
				'options' => $this->select_templates(),
				'condition' => [
					'tabs_content_type' => 'template',
				],
			]
        );

		$this->add_control(
			'tabs',
			[
				'label' => esc_attr__( 'Tabs Items', 'fixter' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'tab_title' => esc_attr__( 'Tab #1', 'fixter' ),
						'tab_content' => esc_attr__( 'We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers, and growing overall sales. Give us a call.', 'fixter' ),
					],
					[
						'tab_title' => esc_attr__( 'Tab #2', 'fixter' ),
						'tab_content' => esc_attr__( 'We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers, and growing overall sales. Give us a call.', 'fixter' ),
					],
				],
				'title_field' => '{{{ tab_title }}}',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		wp_enqueue_style( 'fixter-tab' );
		?>

		<div class="prt-elementor-tabs prt-tab-<?php echo esc_attr($settings['style']); ?>">
			<?php if ( $settings['tabs'] ) : ?>
			<ul class="elementor-tabs-wrapper">
				<?php $i = 1; foreach ( $settings['tabs'] as $tabs ) { ?>
					<?php
					$active_tab = ( $i==1 ) ? 'prt-tab-active' : '' ;
					$icon_html = '';
					if( !empty($tabs['tab_icon']['value']) ){
						$icon_html = '<i class="' . esc_attr($tabs['tab_icon']['value']) . '" aria-hidden="true"></i> ';
						wp_enqueue_style( 'elementor-icons-'.$tabs['tab_icon']['library']);
					}
					?>
				<li class="prt-elementor-tab-title <?php echo esc_attr($active_tab); ?>" data-prt-tab="<?php echo esc_attr($i); ?>"><?php echo preyantechnosys_wp_kses($icon_html); ?><span><?php echo esc_html($tabs['tab_title']); ?></span></li>
				<?php $i++; } ?>
			</ul>

			<div class="tmtabs-content-wrapper">
				<?php $j = 1; foreach ( $settings['tabs'] as $tabs ) { ?>
					<?php $active_class = ( $j==1 ) ? 'prt-tab-active' : '' ; ?>
					<div class="prt-tab-content prt-tab-content-<?php echo esc_attr($j); ?> <?php echo esc_attr($active_class); ?>">
						<?php
						$icon_html = ''; // icon
						if( !empty($tabs['tab_icon']['value']) ){
							$icon_html = '<i class="' . esc_attr($tabs['tab_icon']['value']) . '" aria-hidden="true"></i> ';
							wp_enqueue_style( 'elementor-icons-'.$tabs['tab_icon']['library']);
						}
						?>
						<div class="prt-tab-content-title" data-prt-tab="<?php echo esc_attr($j); ?>"><?php echo preyantechnosys_wp_kses($icon_html); ?><?php echo esc_html($tabs['tab_title']); ?></div>
						<div class="elementor-tab-content">
						
							<?php 
							
							if ( $tabs['tabs_content_type'] == 'content' ) {
								echo preyantechnosys_wp_kses($tabs['tab_content']);
							}
							else {						
								$id = $tabs['tabscontent_templates'];
								$tm_frontend = new Frontend;
								echo preyantechnosys_wp_kses($tm_frontend->get_builder_content_for_display( $id, false ));
							}
							?>
						</div>
					</div>
				<?php $j++; } ?>
			</div>

			<?php endif; ?>
	    </div>

	    <?php
	}

	protected function select_templates() {
	  	 $templates = get_posts([
                'post_type' => 'elementor_library',
                'posts_per_page' => -1,
                'post_status' => 'publish',
            ]);

	
			if (!empty($templates) && !is_wp_error($templates)) {

                foreach ($templates as $template) {
                    $options[$template->ID]= $template->post_title;
                }


                update_option('temp_count', $options);


                return $options;
				
				
            }
	}
	
	protected function content_template() {}
}

// Register widget
Plugin::instance()->widgets_manager->register( new Fixter_tabbox_Widget() );