<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.


// Get current theme name and vesion
$tm_theme = wp_get_theme();
$tm_theme_name = $tm_theme->get( 'Name' );
$tm_theme_ver  = $tm_theme->get( 'Version' );


// Getting all theme options again if variable is not defined
global $fixter_theme_options;
if( empty($fixter_theme_options) || !is_array($fixter_theme_options) ){
	if( function_exists('preyantechnosys_load_default_theme_options') ){
		preyantechnosys_load_default_theme_options();
	} else {
		$fixter_theme_options = get_option('fixter_theme_options');
	}
}

// variables
$team_member_title          = ( !empty($fixter_theme_options['team_type_title']) ) ? esc_attr($fixter_theme_options['team_type_title']) : esc_attr__('Team Members', 'fixter') ;
$team_member_title_singular = ( !empty($fixter_theme_options['team_type_title_singular']) ) ? esc_attr($fixter_theme_options['team_type_title_singular']) : esc_attr__('Team Member', 'fixter') ;
$team_group_title           = ( !empty($fixter_theme_options['team_group_title']) ) ? esc_attr($fixter_theme_options['team_group_title']) : esc_attr__('Team Groups', 'fixter') ;
$team_group_title_singular  = ( !empty($fixter_theme_options['team_group_title_singular']) ) ? esc_attr($fixter_theme_options['team_group_title_singular']) : esc_attr__('Team Group', 'fixter') ;

$pf_title               = ( !empty($fixter_theme_options['pf_type_title']) ) ? esc_attr($fixter_theme_options['pf_type_title']) : esc_attr__('Portfolio', 'fixter') ;
$pf_title_singular      = ( !empty($fixter_theme_options['pf_type_title_singular']) ) ? esc_attr($fixter_theme_options['pf_type_title_singular']) : esc_attr__('Portfolio', 'fixter') ;
$pf_cat_title           = ( !empty($fixter_theme_options['pf_cat_title']) ) ? esc_attr($fixter_theme_options['pf_cat_title']) : esc_attr__('Portfolio Categories', 'fixter') ;
$pf_cat_title_singular  = ( !empty($fixter_theme_options['pf_cat_title_singular']) ) ? esc_attr($fixter_theme_options['pf_cat_title_singular']) : esc_attr__('Portfolio Category', 'fixter') ;

$service_title           = ( !empty($fixter_theme_options['service_type_title']) ) ? esc_attr($fixter_theme_options['service_type_title']) : esc_attr__('Service', 'fixter') ;
$service_title_singular      = ( !empty($fixter_theme_options['service_type_title_singular']) ) ? esc_attr($fixter_theme_options['service_type_title_singular']) : esc_attr__('Service', 'fixter') ;
$service_cat_title           = ( !empty($fixter_theme_options['service_cat_title']) ) ? esc_attr($fixter_theme_options['service_cat_title']) : esc_attr__('Service Categories', 'fixter') ;
$service_cat_title_singular  = ( !empty($fixter_theme_options['service_cat_title_singular']) ) ? esc_attr($fixter_theme_options['service_cat_title_singular']) : esc_attr__('Service Category', 'fixter') ;




/**
 *  FRAMEWORK SETTINGS
 */
$tm_framework_settings = array(
	'menu_title' 	  => esc_attr__('Fixter Options', 'fixter'),
	'menu_type'  	  => 'menu',
	'menu_slug'  	  => 'preyantechnosys-theme-options',
	'ajax_save'  	  => true,
	'show_reset_all'  => false,
	'framework_title' => esc_attr($tm_theme_name).'  <small>'.esc_attr($tm_theme_ver).'</small>',
	'menu_position'   => 2, // See below comment for proper number
	/*
	Default: bottom of menu structure #Default: bottom of menu structure
	2 – Dashboard
	4 – Separator
	5 – Posts
	10 – Media
	15 – Links
	20 – Pages
	25 – Comments
	59 – Separator
	60 – Appearance
	65 – Plugins
	70 – Users
	75 – Tools
	80 – Settings
	99 – Separator
	For the Network Admin menu, the values are different: #For the Network Admin menu, the values are different:
	2 – Dashboard
	4 – Separator
	5 – Sites
	10 – Users
	15 – Themes
	20 – Plugins
	25 – Settings
	30 – Updates
	99 – Separator
	*/
);



/**
 *  FRAMEWORK OPTIONS
 */
$tm_framework_options = array();


// Layout Settings
$tm_framework_options[] = array(
	'name'   => 'layout_settings', // like ID
	'title'  => esc_attr__('Layout Settings', 'fixter'),
	'icon'   => 'fa fa-square-o',
	'fields' => array( // begin: fields
		
		array(
			'type'    	=> 'heading',
			'content'		=> esc_attr__('Specify theme pages layout, the skin coloring and background', 	'fixter'),
        ),
		array(
			'id'         => 'skincolor',
			'type'       => 'color_picker',
			'title'      => esc_attr__( 'Select Skin Color', 'fixter' ),
			'default'    => '#0075ff',	
		),
		array(
			'id'         => 'skincolortwo',
			'type'       => 'color_picker',
			'title'      => esc_attr__( 'Secondary Skin Color', 'fixter' ),
			'default'    => '#ffd405',	
		),
		array(
			'id'         => 'secondarycolor',
			'type'       => 'color_picker',
			'title'      => esc_attr__( 'Select Primary Dark BG Color', 'fixter' ),
			'default'    => '#121212',	
		),
		array(
			'id'         => 'secondary-greycolor',
			'type'       => 'color_picker',
			'title'      => esc_attr__( 'Select Primary Grey BG Color', 'fixter' ),
			'default'    => '#f1f6fa',	
		),
		array(
			'id'         => 'border_color',
			'type'       => 'color_picker',
			'title'      => esc_attr__( 'Global Border  Color', 'fixter' ),
			'default'    => '#DFDFDF',	
		),
		array(
			'id'        => 'layout',
			'type'      => 'radio',
			'title'     => esc_attr__('Pages Layout', 'fixter'), 
			'options'  	=> array(
							'wide'     => esc_attr__('Wide', 'fixter'),
							'boxed'    => esc_attr__('Boxed', 'fixter'),
							'framed'   => esc_attr__('Framed', 'fixter'),
							'rounded'  => esc_attr__('Rounded', 'fixter'),
							'fullwide' => esc_attr__('Full Wide', 'fixter'),
						),
			'default'   => 'fullwide',
			'after'   	=> '<small>'.esc_attr__('Specify the layout for the pages', 'fixter').'</small>',
        ),
		array(
			'id'        => 'full_wide_elements',
			'type'      => 'checkbox',
			'title'     => esc_attr__('Select Elements for Full Wide View (in above option)', 'fixter'),
			'options'   => array(
					'floatingbar' => esc_attr__('Floating Bar', 'fixter'),
					'topbar'      => esc_attr__('Topbar', 'fixter'),
					'header'      => esc_attr__('Header', 'fixter'),
					'content'     => esc_attr__('Content Area', 'fixter'),
					'footer'      => esc_attr__('Footer', 'fixter'),
					),
			'default'    => array( 'header' ),
			'after'    	 => '<small>'.esc_attr__('Select elements that you want to show in full-wide view', 'fixter').'</small>',
			'dependency' => array( 'layout_fullwide', '==', 'true' ),
		),
		
		array(
			'type'      	=> 'heading',
			'content'     	=> esc_attr__('Background Settings', 'fixter'),
			'after'  		=> '<small>'.esc_attr__('Set below background options. Background settings will be applied to Boxed layout only', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'global_background',
			'type'   		=> 'preyantechnosys_background',
			'title' 		=> esc_attr__('Body Background Properties', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Set background for main body. This is for main outer body background. For "Boxed" layout only.', 'fixter').'</div>',
			'default'		=> array(
			'color'			=> '#ffffff',
			),
			'output'        => 'body',
        ),
		array(
			'id'     		=> 'inner_background',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Content Area Background Properties', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Set background for content area', 'fixter').'</div>',
			'default' 		=> array(
				'color' 	=> '#ffffff',
			),
			'output'        => 'body #main,.preyantechnosys-sticky-footer .site-content-wrapper',
        ),	
		
		array(
			'type'        => 'heading',
			'content'     => esc_attr__('Pre-loader Image', 'fixter'),
			'after'  		=> '<small>'.esc_attr__('Select pre-loader image for the site. This will work on desktop, mobile and tablet devices', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'preloader_show',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Show Pre-loader animation', 'fixter'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted cs-text-desc">' . esc_attr__('Show or hide pre-loader animation.', 'fixter') . '</div>',
		),
		array(
			'id'          => 'loaderimg',
			'type'        => 'image_select',
			'title'       => esc_attr__('Page-loader Image', 'fixter'), 
			'options'     => array(
					''   	=> get_template_directory_uri() . '/images/loader-none.gif',
					'1'   	=> get_template_directory_uri() . '/images/loader1.gif',
					'2'   	=> get_template_directory_uri() . '/images/loader2.gif',
					'3'   	=> get_template_directory_uri() . '/images/loader3.gif',
					'4'   	=> get_template_directory_uri() . '/images/loader4.gif',
					'5'   	=> get_template_directory_uri() . '/images/loader5.gif',
					'6'   	=> get_template_directory_uri() . '/images/loader6.gif',
					'7'   	=> get_template_directory_uri() . '/images/loader7.gif',
					'8'   	=> get_template_directory_uri() . '/images/loader8.gif',
					'9'   	=> get_template_directory_uri() . '/images/loader9.gif',
					'10'   	=> get_template_directory_uri() . '/images/loader10.gif',
					'11'   	=> get_template_directory_uri() . '/images/loader11.gif',
					'12'   	=> get_template_directory_uri() . '/images/loader12.gif',
					'13'   	=> get_template_directory_uri() . '/images/loader13.gif',
					'14'   	=> get_template_directory_uri() . '/images/loader14.gif',
					'15'   	=> get_template_directory_uri() . '/images/loader15.gif',
					'16'   	=> get_template_directory_uri() . '/images/loader16.gif',
					'17'   	=> get_template_directory_uri() . '/images/loader17.gif',
					'18'   	=> get_template_directory_uri() . '/images/loader18.gif',
					'custom'=> get_template_directory_uri() . '/images/loader-custom.gif',
				),
			'radio'       => true,
			'default'     => '',
			'after'   	  => '<div class="cs-text-muted">' . esc_attr__('Please select site pre-loader image.', 'fixter') . '<br/><br/><em><strong>' . esc_attr__( 'NOTE:', 'fixter' ) . '</strong> ' . esc_attr__( 'Please note that if you uploaded pre-loader image (in below option) than this pre-defined loader image will be ignored.', 'fixter' ) . '</em></div>',
			'dependency' => array( 'preloader_show', '==', 'true' ),
        ),
		array(
			'id'       		=> 'loaderimage_custom',
			'type'      	=> 'image',
			'title'    		=> esc_attr__('Upload Page-loader Image', 'fixter'),
			'add_title' 	=> 'Select/Upload Page-loader image',
			'after'  		=> '<div class="cs-text-muted">' . esc_attr__('Custom page-loader image that you want to show. You can create animated GIF image from your logo from Animizer website.', 'fixter') . ' <a href="'. esc_url('http://animizer.net/en/animate-static-image') .'" target="_blank">' . esc_attr__('Click here to go to Anmizer website.', 'fixter') . '</a><br/><br/><em><strong>' . esc_attr__('NOTE:', 'fixter') . '</strong>' . esc_attr__('Please note that if you selected image here than the pre-defined loader image (in above option) will be ignored.', 'fixter') . '</em></div>',
			'dependency'    => array( 'loaderimg_custom', '==', 'true' ),
        ),
		array(
			'type'      => 'heading',
			'content'   => esc_attr__('One Page Website', 'fixter'),
			'after'  	=> '<small>'.esc_attr__('Options for One Page website', 'fixter').'</small>',
		),
		array(
			'id'      	=> 'one_page_site',
			'type'    	=> 'switcher',
			'title'   	=> esc_attr__('One Page Site', 'fixter'),
			'default' 	=> false,
			'label'   	=> '<br><div class="cs-text-muted">'.esc_attr__('Set this option "ON" if your site is one page website', 'fixter').' <a target="_blank" href="#">'.esc_attr__('Click here to know more about how to setup one-page site.', 'fixter').'</a></div>',
        ),
		
	),
	
);


// hide_demo_content_option
$hide_demo_content_option = false;
if( isset($fixter_theme_options['hide_demo_content_option']) ){
	$hide_demo_content_option = $fixter_theme_options['hide_demo_content_option'];
}

if( $hide_demo_content_option == true ){
	// Removing one click demo setup option
	$tm_framework_options_inner = $tm_framework_options[0];
	foreach( $tm_framework_options_inner['fields'] as $index => $option ){
		if( !empty($option['type']) && $option['type'] == 'preyantechnosys_one_click_demo_content' ){
			unset($tm_framework_options[0]['fields'][$index]);
		}
	}
}

// Font Settings
$tm_framework_options[] = array(
	'name'   => 'font_settings', // like ID
	'title'  => esc_attr__('Font Settings', 'fixter'),
	'icon'   => 'fa fa-text-height',
	'fields' => array( // begin: fields
		array(
			'type'    	=> 'heading',
			'content'	=> esc_attr__('Font Settings', 'fixter'),
			'after'  	=> '<small>'.esc_attr__('General Element Fonts', 'fixter').'</small>',
        ),
		array(
			'id'             => 'general_font',
			'type'           => 'preyantechnosys_typography', 
			'title'          => esc_attr__('General Font', 'fixter'),
			'chosen'         => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'backup-family'  => true, // Select a backup non-google font in addition to a google font
			'font-size'      => true,
			'color'          => true,
			'variant'        => true, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-align'     => false,  // This is still not available
			'text-transform' => true,
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => true,
			'output'         => 'body,.elementor-widget-text-editor,.elementor-widget-icon-list .elementor-icon-list-item,.elementor-widget-accordion .elementor-accordion .elementor-tab-content,.elementor-widget-tabs .elementor-tab-content', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px - Currently not working
			'subtitle'       => esc_attr__('Select font family, size etc. for H2 heading tag.', 'fixter'),
			'default'        => array (
				'family'			=> 'Satoshi',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'font-size'			=> '17',
				'line-height'		=> '30',
				'letter-spacing'	=> '0',
				'color'				=> '#24272f',
				'all-varients'		=> 'on',
				'font'				=> 'google',
			),
		),
		
		array(
			'id'         => 'blackish_buttoncolor',
			'type'       => 'color_picker',
			'title'      => esc_attr__( 'Global Dark Text Color', 'fixter' ),
			'default'    => '#121212',	
		),
		array(
			'id'        => 'link-color',
			'type'      => 'radio',
			'title'     => esc_attr__('Select Link Color', 'fixter'), 
			'options'  	=> array(
				'default'   => esc_attr__('Dark color as normal color and Skin color as hover color', 'fixter'),
				'darkhover' => esc_attr__('Skin color as normal color and Dark color as hover color', 'fixter'),
				'custom'    => esc_attr__('Custom color (select below)', 'fixter'),
				
			),
			'default'   => 'custom',
			'std'       => 'default',
			'after'   	=> '<div class="cs-text-muted">' . esc_attr__('Select normal link color effect. This will change normal text link color and hover color', 'fixter') . '</div>',
        ),
		array(
			'id'         => 'link-color-regular',
			'type'       => 'color_picker',
			'title'      => esc_attr__( 'Links Color Option (Regular)', 'fixter' ),
			'default'    => '#121212',
			'dependency' => array( 'link-color_custom', '==', 'true' ),
        ),
		array(
			'id'         => 'link-color-hover',
			'type'       => 'color_picker',
			'title'      => esc_attr__( 'Links Color Option (Hover)', 'fixter' ),
			'default'    => '#416bf5',
			'dependency' => array( 'link-color_custom', '==', 'true' ),
        ),
		array(
			'id'             => 'h1_heading_font',
			'type'           => 'preyantechnosys_typography', 
			'title'          => esc_attr__('H1 Heading Font', 'fixter'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => 'h1', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica sans-serif',
				'variant'			=> '400',
				'font-size'			=> '38',
				'line-height'		=> '44',
				'letter-spacing'	=> '0',
				'color'				=> '#121212',
				'font'				=> 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for H1 heading tag.', 'fixter').'</div>',
		),
		array(
			'id'          => 'h2_heading_font',
			'type'        => 'preyantechnosys_typography', 
			'title'       => esc_attr__('H2 Heading Font', 'fixter'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'      => 'h2', // An array of CSS selectors to apply this font style to dynamically
			'units'       => 'px', // Defaults to px
			'default'     => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> '400',
				'font-size'			=> '34',
				'line-height'		=> '46',
				'letter-spacing'	=> '0',
				'color'				=> '#121212',
				'font'				=> 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for H2 heading tag.', 'fixter').'</div>',
		),
		array(
			'id'          => 'h3_heading_font',
			'type'        => 'preyantechnosys_typography',
			'chosen'      => false,
			'title'       => esc_attr__('H3 Heading Font', 'fixter'),
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => 'h3, h3.prt-element-content-heading', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> '500',
				'font-size'			=> '26',
				'line-height'		=> '34',
				'letter-spacing'	=> '0',
				'color'				=> '#121212',
				'font'				=> 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for H3 heading tag.', 'fixter').'</div>',
		),
		array(
			'id'          => 'h4_heading_font',
			'type'        => 'preyantechnosys_typography', 
			'title'       => esc_attr__('H4 Heading Font', 'fixter'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'      => 'h4,.preyantechnosys-box-blog .preyantechnosys-box-content h4,.preyantechnosys-box-service .preyantechnosys-box-title h4,h4.prt-element-content-heading', // An array of CSS selectors to apply this font style to dynamically
			'units'       => 'px', // Defaults to px
			'default'     => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> '500',
				'font-size'			=> '24',
				'line-height'		=> '32',
				'letter-spacing'	=> '0',
				'color'				=> '#121212',
				'font'				=> 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for H4 heading tag.', 'fixter').'</div>',
		),
		array(
			'id'          => 'h5_heading_font',
			'type'        => 'preyantechnosys_typography', 
			'title'       => esc_attr__('H5 Heading Font', 'fixter'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'      => 'h5,h5.prt-element-content-heading', // An array of CSS selectors to apply this font style to dynamically
			'units'       => 'px', // Defaults to px
			'default'     => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> '500',
				'font-size'			=> '20',
				'line-height'		=> '28',
				'letter-spacing'	=> '0',
				'color'				=> '#121212',
				'font'				=> 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for H5 heading tag.', 'fixter').'</div>',
		),
		
		array(
			'id'          => 'h6_heading_font',
			'type'        => 'preyantechnosys_typography', 
			'title'       => esc_attr__('H6 Heading Font', 'fixter'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'      => 'h6,h6.prt-element-content-heading', // An array of CSS selectors to apply this font style to dynamically
			'units'       => 'px', // Defaults to px
			'default'     => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> '500',
				'font-size'			=> '18',
				'line-height'		=> '21',
				'letter-spacing'	=> '0',
				'color'				=> '#121212',
				'font'				=> 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for H6 heading tag.', 'fixter').'</div>',
		),
		
		
		
		array(
			'type'        => 'heading',
			'content'     => esc_attr__('Heading and Subheading Font Settings', 'fixter'),
			'after'  	  => '<small>'.esc_attr__('Select font settings for Heading and subheading of different title elements like Blog Box, Portfolio Box etc', 'fixter').'</small>',
		),
		
		array(
			'id'          => 'heading_font',
			'type'        => 'preyantechnosys_typography', 
			'title'       => esc_attr__('Heading Font', 'fixter'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => '.prt-element-content-heading', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'font-size'			=> '68',
				'line-height'		=> '106',
				'text-transform'	=> 'none',
				'letter-spacing'	=> '0',
				'color'				=> '#121212',
				'font'				=> 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for heading title', 'fixter').'</div>',
		),
		array(
			'id'     		 => 'resposive_heading_font',
			'type'   		 => 'number',
			'title'          => esc_attr__( 'Mobile Heading Font', 'fixter' ),
			'default'       => '42',
        ),
		array(
			'id'          => 'subheading_font',
			'type'        => 'preyantechnosys_typography', 
			'title'       => esc_attr__('Subheading Font', 'fixter'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,							
			'output'         => '.prt-element-heading-content-wrapper .prt-element-subheading', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'font-size'			=> '15',
				'line-height'		=> '26',
				'text-transform'	=> 'none',
				'letter-spacing'	=> '0',
				'color'				=> '#121212',
				'font'				=> 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for heading title', 'fixter').'</div>',
		),
		array(
			'id'          => 'content_font',
			'type'        => 'preyantechnosys_typography', 
			'title'       => esc_attr__('Content Font', 'fixter'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => '.prt-element-content-desctxt', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Satoshi',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'font-size'			=> '17',
				'line-height'		=> '30',
				'letter-spacing'	=> '0',
				'color'				=> '#24272f',
				'font'				=> 'google',
			),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for content', 'fixter').'</div>',
		),
		array(
			'type'        => 'heading',
			'content'     => esc_attr__('Specific Element Fonts', 'fixter'),
			'after'  	  => '<small>'.esc_attr__('Select Font for specific elements', 'fixter').'</small>',
		),
		array(
			'id'          => 'widget_font',
			'type'        => 'preyantechnosys_typography', 
			'title'       => esc_attr__('Widget Title Font', 'fixter'),
			'chosen'      => false,
			'text-align'  => false,
			'google'      => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup' => true, // Select a backup non-google font in addition to a google font
			'subsets'     => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => 'body .widget .widget-title, body .widget .widgettitle, #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title, .portfolio-description h2, .preyantechnosys-portfolio-details h2, .preyantechnosys-portfolio-related h2', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'font-size'			=> '20',
				'line-height'		=> '28',
				'letter-spacing'	=> '0',
				'color'				=> '#121212',
				'font'				=> 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for widget title', 'fixter').'</div>',
		),
		
		array(
			'id'             => 'element_title',
			'type'           => 'preyantechnosys_typography', 
			'title'          => esc_attr__('Element Title Font', 'fixter'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => false,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => false, // Defaults to false
			'color'          => false,
			'all-varients'   => false,
			'output'         => '.elementor-widget-progress .elementor-title,.elementor-widget-accordion .elementor-accordion .elementor-accordion-title,.elementor-widget-tabs .elementor-tab-title, .elementor-widget-tabs .elementor-tab-title a', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'		=> 'Magnita',
				'backup-family'	=> 'Arial, Helvetica, sans-serif',
				'variant'		=> 'regular',
				'font-size'		=> '18',
				'font'			=> 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_attr__('This fonts will be applied to Tab title, Accordion Title and Progress Bar title text', 'fixter').'</div>',
		),	
	)
);


// Floating Bar Settings
$tm_framework_options[] = array(
	'name'   => 'floatingbar_settings', // like ID
	'title'  => esc_attr__('Floating Bar Settings', 'fixter'),
	'icon'   => 'fa fa-arrow-circle-o-up',
	'fields' => array( // begin: fields
		array(
			'type'    		=> 'heading',
			'content'		=> esc_attr__('Floating Bar Settings', 'fixter'),
        ),
		array(
			'id'     		=> 'fbar_show',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Show Floating Bar', 'fixter'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Show or hide Floating Bar', 'fixter').'</div>',
        ),
		array(
			'id'      => 'fbar-position',
			'type'    => 'radio',
			'title'   => esc_attr__('Floating bar position', 'fixter'),
			'options' => array(
				'default' => esc_attr__('Top','fixter'),
				'right'   => esc_attr__('Right', 'fixter'),
			),
			'default'    => 'right',
			'after'      => '<div class="cs-text-muted"><br>'.esc_attr__('Position for Floating bar', 'fixter').'</div>',
			'dependency' => array( 'fbar_show', '==', 'true' ),
        ),
		
		array(
			'id'            => 'fbar_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Floating Bar Background Color', 'fixter'),
			'options'  		=> array(
				'darkgrey'    => esc_attr__('Dark grey', 'fixter'),
				'grey'        => esc_attr__('Grey', 'fixter'),
				'white'       => esc_attr__('White', 'fixter'),
				'skincolor'   => esc_attr__('Skincolor', 'fixter'),
				'custom'      => esc_attr__('Custom Color', 'fixter'),
			),
			'default'       => 'darkgrey',
			'dependency' 	=> array( 'fbar_show', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined color for Floating Bar background color', 'fixter').'</div>',
        ),
		array(
			'id'      		=> 'fbar_background',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Floating Bar Background Properties', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Set background for Floating bar. You can set color or image and also set other background related properties', 'fixter').'</div>',
			'color'			=> true,
			'dependency' 	=> array( 'fbar_show', '==', 'true' ),
			'default'		=> array(
				'image'			=> get_template_directory_uri() . '/images/floatingbar-bg.jpg',
				'repeat'		=> 'no-repeat',
				'position'		=> 'left top',
				'attachment'	=> 'scroll',
				'color'			=> '#000000',
				'size'		  	=> 'cover',
			),
			'output' 	        => '.preyantechnosys-fbar-box-w',
			'output_bglayer'    => true,  // apply color to bglayer class div inside this , default: true
			'color_dropdown_id' => 'fbar_bg_color',   // color dropdown to decide which color
			
        ),
		array(
			'id'            => 'fbar_text_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Floating Bar Text Color', 'fixter'),
			'options' 		=> array(
				'white'			=> esc_attr__('White', 'fixter'),
				'darkgrey'		=> esc_attr__('Dark', 'fixter'),
				'custom'		=> esc_attr__('Custom color', 'fixter'),
							),
			'default'		=> 'white',
			'dependency' 	=> array( 'fbar_show', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select "Dark" color if you are going to select light color in above option', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'fbar_text_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Floating Bar Custom Color for text', 'fixter' ),
			'default'		 => '#ffffff',
			'dependency'  	 => array( 'fbar_show|fbar_text_color', '==|==', 'true|custom' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom background color for Floating Bar', 'fixter').'</div>',
        ),
		
		array(
			'type'    	=> 'heading',
			'content'	=> esc_attr__('Floating Bar Open/Close Button Settings', 'fixter'),
			'after'		=> '<small>' . esc_attr__('Settings for Floating Bar Open/Close Button', 'fixter') . '</small>',
			
        ),
		array(
			'id'      => 'fbar_handler_icon',
			'type'    => 'textarea',
			'title'   => esc_attr__('Open Link Icon', 'fixter' ),
			'default' => '<i class="prt-fixter-icon-menu"></i>',
			'dependency' => array( 'fbar_show', '==', 'true' ),
        ),
		array(
			'id'      => 'fbar_handler_icon_close',
			'type'    => 'textarea',
			'title'   => esc_attr__('Close Link Icon', 'fixter' ),
			'default' => '<i class="prt-fixter-icon-close"></i>',
			'dependency' => array( 'fbar_show', '==', 'true' ),
        ),
		array(
			'id'      => 'fbar-icon-position',
			'type'    => 'radio',
			'title'   => esc_attr__('Floating bar icon position', 'fixter'),
			'options' => array(
				'left' => esc_attr__('Left','fixter'),
				'right'   => esc_attr__('Right', 'fixter'),
			),
			'default'    => 'left',
			'after'      => '<div class="cs-text-muted"><br>'.esc_attr__('Position for Floating bar icon', 'fixter').'</div>',
			'dependency' => array( 'fbar_show', '==', 'true' ),
        ),
		array(
			'id'            => 'fbar_icon_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Floating Bar Open/Close Icon Color', 'fixter'),
			'options' 		=> array(
					'dark'       => esc_attr__('Dark grey', 'fixter'),
					'grey'       => esc_attr__('Grey', 'fixter'),
					'white'      => esc_attr__('White', 'fixter'),
					'skincolor'  => esc_attr__('Skincolor', 'fixter'),
			),
			'default'		=> 'skincolor',
			'dependency' 	=> array( 'fbar_show', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select "Dark" color if you are going to select light color in above option.', 'fixter').'</div>',
        ),
		
		array(
			'id'            => 'fbar_btn_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Floating Bar Open/Close Button Background Color', 'fixter'),
			'options' 		=> array(
					'dark'       => esc_attr__('Dark grey', 'fixter'),
					'grey'       => esc_attr__('Grey', 'fixter'),
					'white'      => esc_attr__('White', 'fixter'),
					'skincolor'  => esc_attr__('Skincolor', 'fixter'),
					'custom'	 => esc_attr__('Custom color', 'fixter'),
			),
			'default'		=> 'dark',
			'dependency' 	=> array( 'fbar_show', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select "Dark" color if you are going to select light color in above option.', 'fixter').'</div>',
        ),
		
		array(
			'id'     		 => 'fbar_btn_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Floating Bar Open/Close Button Custom Background Color', 'fixter' ),
			'default'		 => '#1e73be',
			'output' 	        => '.preyantechnosys-fbar-btn-link',
			'dependency'  	 => array( 'fbar_show|fbar_btn_bg_color', '==|==', 'true|custom' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom background color for Floating Bar Button', 'fixter').'</div>',
        ),

		array(
			'type'    	 => 'heading',
			'content'	 => esc_attr__('Floating Bar Widget Settings', 'fixter'),
			'after'		 => '<small>' . esc_attr__('Settings for Floating Bar Widgets', 'fixter') . '</small>',
			'dependency' => array( 'fbar_show|fbar-position_default', '==|==', 'true|true' ),
        ),
		array(
			'id'			=> 'fbar_widget_column_layout',
			'type' 			=> 'image_select',//preyantechnosys_pre_color_packages
			'title'			=> esc_attr__('Floating Bar Widget Columns', 'fixter'),
			'options'      	=> array(
					'12'      => get_template_directory_uri() . '/inc/images/footer_col_12.png',
					'6_6'     => get_template_directory_uri() . '/inc/images/footer_col_6_6.png',
					'4_4_4'   => get_template_directory_uri() . '/inc/images/footer_col_4_4_4.png',
					'3_3_3_3' => get_template_directory_uri() . '/inc/images/footer_col_3_3_3_3.png',
					'8_4'     => get_template_directory_uri() . '/inc/images/footer_col_8_4.png',
					'4_8'     => get_template_directory_uri() . '/inc/images/footer_col_4_8.png',
					'6_3_3'   => get_template_directory_uri() . '/inc/images/footer_col_6_3_3.png',
					'3_3_6'   => get_template_directory_uri() . '/inc/images/footer_col_3_3_6.png',
					'8_2_2'   => get_template_directory_uri() . '/inc/images/footer_col_8_2_2.png',
					'2_2_8'   => get_template_directory_uri() . '/inc/images/footer_col_2_2_8.png',
					'6_2_2_2' => get_template_directory_uri() . '/inc/images/footer_col_6_2_2_2.png',
					'2_2_2_6' => get_template_directory_uri() . '/inc/images/footer_col_2_2_2_6.png',
			),
			'default'		=> '6_6',
			'dependency' 	=> array( 'fbar_show|fbar-position_default', '==|==', 'true|true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select Floating Bar Column layout View for widgets.', 'fixter').'</div>',
        ),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Hide Floating Bar in Small Devices', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Hide Floating Bar in small devices like mobile, tablet etc.', 'fixter').'</small>',
			'dependency'     => array('fbar_show','==','true'),
		),
		array(
			'id'       => 'floatingbar-breakpoint',
			'type'     => 'radio',
			'title'    => esc_attr__('Show/Hide Floating Bar in Responsive Mode', 'fixter'), 
			'subtitle' => esc_attr__('Change options for responsive behaviour of Floating Bar.', 'fixter'),
			'options'  => array(
				'all'      => esc_attr__('Show in all devices','fixter'),
				'1200'     => esc_attr__('Show only on large devices','fixter').' <small>'.esc_attr__('show only on desktops (>1200px)', 'fixter').'</small>',
				'992'      => esc_attr__('Show only on medium and large devices','fixter').' <small>'.esc_attr__('show only on desktops and Tablets (>992px)', 'fixter').'</small>',
				'768'      => esc_attr__('Show on some small, medium and large devices','fixter').' <small>'.esc_attr__('show only on mobile and Tablets (>768px)', 'fixter').'</small>',
				'custom'   => esc_attr__('Custom (select pixel below)', 'fixter'),
			),
			'dependency' => array('fbar_show','==','true'),
			'default'    => '1200'
		),
		array(
			'id'            => 'floatingbar-breakpoint-custom',
			'type'          => 'number',
			'title'         => esc_attr__( 'Custom screen size to hide Floating Bar (in pixel)', 'fixter' ),
			'subtitle'      => esc_attr__( 'Select after how many pixels the Floating Bar will be hidden.', 'fixter' ),
			'after'         => esc_attr(' px'),
			'default'       => '1200',
			'dependency' 	=> array( 'fbar_show|floatingbar-breakpoint_custom', '==|==', 'true|true' ),
		),
		
		
	)
);


// Topbar Settings
$tm_framework_options[] = array(
	'name'   => 'topbar_settings', // like ID
	'title'  => esc_attr__('Topbar Settings', 'fixter'),
	'icon'   => 'fa fa-tasks',
	'fields' => array( // begin: fields
		array(
			'type'    		=> 'heading',
			'content'		=> esc_attr__('Topbar settings', 'fixter'),
        ),
		array(
			'id'     		=> 'show_topbar',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Show Topbar', 'fixter'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Show or hide Topbar', 'fixter').'</div>',
        ),
		array(
			'id'            => 'topbar_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Topbar Background Color', 'fixter'),
			'options'  		=> array(
								'darkgrey'   => esc_attr__('Dark grey', 'fixter'),
								'grey'       => esc_attr__('Grey', 'fixter'),
								'white'      => esc_attr__('White', 'fixter'),
								'skincolor'  => esc_attr__('Skincolor', 'fixter'),
								'gradient'   => esc_attr__('Gradient Color', 'fixter'),
								'custom'     => esc_attr__('Custom Color', 'fixter'),
							),
			'default'       => 'darkgrey',
			'dependency' 	=> array( 'show_topbar', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined color for Topbar background color', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'topbar_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Topbar Custom Background Color', 'fixter' ),
			'default'		 => 'rgba(0,0,0,0)',
			'dependency'  	 => array( 'show_topbar|topbar_bg_color', '==|==', 'true|custom' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom background color for Topbar', 'fixter').'</div>',
        ),
		array(
			'id'            => 'topbar_text_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Topbar Text Color', 'fixter'),
			'options'  => array(
							'white'     => esc_attr__('White', 'fixter'),
							'dark'      => esc_attr__('Dark', 'fixter'),
							'skincolor' => esc_attr__('Skin Color', 'fixter'),
							'custom'    => esc_attr__('Custom color', 'fixter'),
						),
			'default'       => 'white',
			'dependency' 	=> array( 'show_topbar', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select "Dark" color if you are going to select light color in above option', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'topbar_text_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Topbar Custom Color for text', 'fixter' ),
			'default'		 => 'rgba(0, 0, 255, 0.25)',
			'dependency'  	 => array( 'show_topbar|topbar_text_color', '==|==', 'true|custom' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom color for Topbar Text', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'topbar_text_fontsize',
			'type'   		=> 'number',
			'title'         => esc_attr__('Topbar Text Size', 'fixter' ),
			'default'		=> '14',
			'dependency' 	=> array( 'show_topbar', '==', 'true' ),
        ),
		array(
			'id'        	=> 'topbar_border_on_bottom',
			'type'      	=> 'checkbox',
			'title'     	=> esc_attr__('Show Border at Bottom of Topabar', 'fixter'),
			'label'     	=> esc_attr__('YES', 'fixter'),
			'default'   	=> false,
			'dependency' 	=> array( 'show_topbar', '==', 'true' ),
			'after'    		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select Yes if you want border at bottom of topbar)', 'fixter').'</div>',
		),
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Topbar Content Options', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Content for Topbar', 'fixter').'</small>',
			'dependency' 	 => array( 'show_topbar', '==', 'true' ),
		),
		array(
			'id'       		 => 'topbar_left_text',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Topbar Left Content', 'fixter'),
			'shortcode'		 => true,
			'dependency' 	 => array( 'show_topbar', '==', 'true' ),
			'desc'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear on Left side of Topbar area', 'fixter').'</div>',
			'default'        => '<ul class="top-contact"><li><span class="prt-skincolor">Loctaion : </span>envanto hq 24 fifth, australia</li><li><span class="prt-skincolor">Email : </span><a href="mailto:info@example.com">info@example.com</a></li></ul>',
        ),
		array(
			'id'       		 => 'topbar_right_text',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Topbar Right Content', 'fixter'),
			'shortcode'		 => true,
			'dependency' 	 => array( 'show_topbar', '==', 'true' ),
			'desc'  	 	 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear on Right side of Topbar area', 'fixter').'</div>',
			'after'  	 	 => '<div class="cs-text-muted"><br>'.esc_attr__('HTML tags and shortcodes are allowed', 'fixter') . sprintf( esc_attr__('%1$s Click here to know more %2$s about shortcode description','fixter') , '<a href="'. esc_url('https://preyantechnosys.com/wordpress/fixter/documentation/shortcodes.html') .'" target="_blank">' , '</a>'  ).'</div>',
			'default'  => '<ul class="top-contact"><li><span class="prt-skincolor">Talk To Expert : </span><a href="tel:1234567890">+01 (143) 456 7899</a></li>[prt-social-links]</ul>',
        ),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Hide Topbar Bar in Small Devices', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Hide Topbar Bar in small devices like mobile, tablet etc.', 'fixter').'</small>',
			'dependency'     => array('show_topbar','==','true'),
		),
		array(
			'id'       => 'topbar-breakpoint',
			'type'     => 'radio',
			'title'    => esc_attr__('Show/Hide Topbar Bar in Responsive Mode', 'fixter'), 
			'subtitle' => esc_attr__('Change options for responsive behaviour of Topbar Bar.', 'fixter'),
			'options'  => array(
				'all'      => esc_attr__('Show in all devices','fixter'),
				'1200'     => esc_attr__('Show only on large devices','fixter').' <small>'.esc_attr__('show only on desktops (>1200px)', 'fixter').'</small>',
				'992'      => esc_attr__('Show only on medium and large devices','fixter').' <small>'.esc_attr__('show only on desktops and Tablets (>992px)', 'fixter').'</small>',
				'768'      => esc_attr__('Show on some small, medium and large devices','fixter').' <small>'.esc_attr__('show only on mobile and Tablets (>768px)', 'fixter').'</small>',
				'custom'   => esc_attr__('Custom (select pixel below)', 'fixter'),
			),
			'dependency' => array('show_topbar','==','true'),
			'default'    => '1200'
		),
		array(
			'id'            => 'topbar-breakpoint-custom',
			'type'          => 'number',
			'title'         => esc_attr__( 'Custom screen size to hide Topbar (in pixel)', 'fixter' ),
			'subtitle'      => esc_attr__( 'Select after how many pixels the Topbar will be hidden.', 'fixter' ),
			'after'         => esc_attr(' px'),
			'default'       => '1200',
			'dependency' 	=> array( 'show_topbar|topbar-breakpoint_custom', '==|==', 'true|true' ),
		),
		
		
	)
);


// Titlebar Settings
$tm_framework_options[] = array(
	'name'   => 'titlebar_settings', // like ID
	'title'  => esc_attr__('Titlebar Settings', 'fixter'),
	'icon'   => 'fa fa-align-justify',
	'fields' => array( // begin: fields
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Titlebar Background Options', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Background options for Titlebar area', 'fixter').'</small>',
		),
		array(
			'id'            => 'titlebar_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Titlebar Background Color', 'fixter'),
			'options'  => array(
							'darkgrey'   => esc_attr__('Dark grey', 'fixter'),
							'grey'       => esc_attr__('Grey', 'fixter'),
							'white'      => esc_attr__('White', 'fixter'),
							'skincolor'  => esc_attr__('Skincolor', 'fixter'),
							'gradient'   => esc_attr__('Gradient Color', 'fixter'),
							'custom'     => esc_attr__('Custom Color', 'fixter'),
			),
			'default'       => 'grey',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined color for Titlebar background color', 'fixter').'</div>',
        ),
		array(
			'id'      		=> 'titlebar_background',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Titlebar Background Image', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Set background for Title bar. You can set color or image and also set other background related properties', 'fixter').'</div>',
			'color'			=> true,
			'default'		=> array(
				'repeat'		=> 'no-repeat',
				'position'		=> 'center center',
				'attachment'	=> 'scroll',
				'size'			=> 'cover',
				'color'			=> 'rgba(17,24,30,0.01)',
			),
			'output' 	    => 'div.prt-titlebar-wrapper',
			'output_bglayer'    => true,  // apply color to bglayer class div inside this , default: true
			'color_dropdown_id' => 'titlebar_bg_color',   // color dropdown to decide which color
        ),
		array(
			'id'            => 'titlebar_style',
			'type'          => 'select',
			'title'         =>  esc_attr__('Titlebar Style', 'fixter'),
			'options'  => array(
							'default'      => esc_attr__('Default', 'fixter'),
			),
			'default'       => 'default',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select styles for Titlebar', 'fixter').'</div>',
        ),
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Titlebar Font Settings', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Font Settings for different elements in Titlebar area', 'fixter').'</small>',
		),
		array(
			'id'            => 'titlebar_text_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Titlebar Text Color', 'fixter'),
			'options'  => array(
							'white'  => esc_attr__('White', 'fixter'),
							'dark'   => esc_attr__('Dark', 'fixter'),
							'custom' => esc_attr__('Custom Color', 'fixter'),
						),
			'default'       => 'dark',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select "Dark" color if you are going to select light color in above option', 'fixter').'</div>',
        ),
		array(
			'id'             => 'titlebar_heading_font',
			'type'           => 'preyantechnosys_typography', 
			'title'          => esc_attr__('Heading Font', 'fixter'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '.prt-titlebar h1.entry-title, .prt-titlebar-textcolor-custom .prt-titlebar-main .entry-title', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'font-size'			=> '56',
				'line-height'		=> '66',
				'text-transform'	=> 'none',
				'color'				=> '#000000',
				'font'				=> 'google',
			),
			'after'			=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for heading in Titlebar', 'fixter').'</div>',
		),
		array(
			'id'             => 'titlebar_subheading_font',
			'type'           => 'preyantechnosys_typography', 
			'title'          => esc_attr__('Sub-heading Font', 'fixter'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '.prt-titlebar .entry-subtitle, .prt-titlebar-textcolor-custom .prt-titlebar-main .entry-subtitle', // An array of CSS selectors to apply this font style to dynamically
			'units'			 => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'font-size'			=> '16',
				'line-height'		=> '22',
				'letter-spacing'	=> '0',
				'color'				=> '#000000',
				'font'				=> 'google',
			),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for sub-heading in Titlebar', 'fixter').'</div>',
		),
		array(
			'id'             => 'titlebar_breadcrumb_font',
			'type'           => 'preyantechnosys_typography', 
			'title'          => esc_attr__('Breadcrumb Font', 'fixter'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '.prt-titlebar .breadcrumb-wrapper, .prt-titlebar .breadcrumb-wrapper a', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'text-transform'	=> 'capitalize',
				'font-size'			=> '13',
				'line-height'		=> '23',
				'letter-spacing'	=> '0',
				'color'				=> '#000000',
				'font'				=> 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_attr__('Select font family, size etc. for breadcrumbs in Titlebar', 'fixter').'</div>',
		),
		
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Titlebar Content Options', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Content options for Titlebar area', 'fixter').'</small>',
		),
		array(
			'id'            => 'titlebar_view',
			'type'          => 'select',
			'title'         =>  esc_attr__('Titlebar Text Align', 'fixter'),
			'options'       => array(
							'default'  => esc_attr__('All Center (default)', 'fixter'),
							'left'     => esc_attr__('Title Left / Breadcrumb Right', 'fixter'),
							'right'    => esc_attr__('Title Right / Breadcrumb Left', 'fixter'),
							'allleft'  => esc_attr__('All Left', 'fixter'),
							'allright' => esc_attr__('All Right', 'fixter'),
			),
			'default'       => 'default',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select text align in Titlebar', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'titlebar_height',
			'type'   		 => 'number',
			'title'          => esc_attr__( 'Titlebar Height', 'fixter' ),
			'after'  	  	 => ' px<br><div class="cs-text-muted">'.esc_attr__('Set height of the Titlebar. In pixel only', 'fixter').'</div>',
			'default'		 => '250',
        ),
		array(
			'id'        	=> 'breadcrumb_on_bottom',
			'type'      	=> 'checkbox',
			'title'     	=> esc_attr__('Show Breadcrumb on bottom of Titlebar area', 'fixter'),
			'label'     	=> esc_attr__('YES', 'fixter'),
			'default'   	=> false,
			'dependency'  	=> array( 'titlebar_view', 'any', 'default,allleft,allright' ),//Multiple dependency
			'after'    		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select this option if you like to show breadcrumbs on bottom of Titlebar area. This option will only work when Titlebar Text Align option above is set to (All Center, All Left or All Right)', 'fixter').'</div>',
		),
		array(
			'id'        	=> 'breadcrumb_border_bottom',
			'type'      	=> 'checkbox',
			'title'     	=> esc_attr__('Show Breadcrumb border bottom of Titlebar', 'fixter'),
			'label'     	=> esc_attr__('YES', 'fixter'),
			'default'   	=> true,
			'after'    		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select this option if you like to show breadcrumbs border bottom of Titlebar', 'fixter').'</div>',
		),
		array(
			'id'            => 'breadcum_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Breadcrumb Background Color', 'fixter'),
			'options'  => array(
							'darkgrey'   => esc_attr__('Dark grey', 'fixter'),
							'grey'       => esc_attr__('Grey', 'fixter'),
							'white'      => esc_attr__('White', 'fixter'),
							'skincolor'  => esc_attr__('Skincolor', 'fixter'),
							'custom'     => esc_attr__('Custom Color', 'fixter'),
			),
			'default'       => 'custom',
			'dependency' 	=> array( 'breadcrumb_on_bottom', '==|==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined color for breadcrumb background color', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'breadcrumb_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Breadcrumb Custom Background Color', 'fixter' ),
			'default'		 => 'rgba(0,0,0,0.50)',
			'dependency'  	 => array( 'breadcrumb_on_bottom|breadcum_bg_color', '==|==', 'true|custom' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom background color for Breadcrumb', 'fixter').'</div>',
        ),
		array(
			'id'            => 'titlebar_hide_breadcrumb',
			'type'          => 'select',
			'title'         =>  esc_attr__('Hide Breadcrumb', 'fixter'),
			'options'  => array(
							'no'   => esc_attr__('NO, show the breadcrumb', 'fixter'),
							'yes'  => esc_attr__('YES, Hide the Breadcrumb', 'fixter'),
			),
			'default'       => 'yes',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('You can show or hide the breadcrumb', 'fixter').'</div>',
		),
		
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Titlebar Extra Options', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Change settings for some extra options in Titlebar', 'fixter').'</small>',
		),
		array(
			'id'      => 'adv_tbar_catarc',
			'type'    => 'text',
			'title'   => esc_attr__('Post Category "Category Archives:" Label Text', 'fixter'),
			'default' => esc_attr__('Category Archives: ', 'fixter'),
		),
		array(
			'id'      => 'adv_tbar_tagarc',
			'type'    => 'text',
			'title'   => esc_attr__('Post Tag "Tag Archives:" Label Text', 'fixter'),
			'default' => esc_attr__('Tag Archives: ', 'fixter'),
		),
		array(
			'id'      => 'adv_tbar_postclassified',
			'type'    => 'text',
			'title'   => esc_attr__('Post Taxonomy "Posts classified under:" Label Text', 'fixter'),
			'default' => esc_attr__('Posts classified under: ', 'fixter'),
		),
		array(
			'id'      => 'adv_tbar_authorarc',
			'type'    => 'text',
			'title'   => esc_attr__('Post Author "Author Archives:" Label Text', 'fixter'),
			'default' => esc_attr__('Author Archives: ', 'fixter'),
		),

	)
);


// Header Settings
$tm_framework_options[] = array(
	'name'   => 'header_settings', // like ID
	'title'  => esc_attr__('Header Settings', 'fixter'),
	'icon'   => 'fa fa-arrow-up',
	'fields' => array( // begin: fields
	
		array(
			'type'    		=> 'heading',
			'content'		=> esc_attr__('Header Settings', 'fixter'),
        ),
		array(
			'id'     		 => 'header_height',
			'type'   		 => 'number',
			'title'          => esc_attr__('Header Height (in pixel)', 'fixter' ),
			'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_attr__('You can set height of header area from here', 'fixter').'</div>',
			'default'		 => '90',
        ),
		array(
			'id'            => 'header_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Header Background Color', 'fixter'),
			'options'  => array(
							'darkgrey'   => esc_attr__('Dark grey', 'fixter'),
							'grey'       => esc_attr__('Grey', 'fixter'),
							'white'      => esc_attr__('White', 'fixter'),
							'skincolor'  => esc_attr__('Skincolor', 'fixter'),
							'custom'     => esc_attr__('Custom Color', 'fixter'),
			),
			'default'       => 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined color for Header background color', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'header_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Header Custom Background Color', 'fixter' ),
			'default'		 => 'rgba(0,0,0,0.01)',
			'dependency'  	 => array( 'header_bg_color', '==', 'custom' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom background color for Header', 'fixter').'</div>',
        ),
		array(
			'id'      		=> 'vertical_header_background',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Header Background Properties', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Set background for Header. You can set color or image and also set other background related properties', 'fixter').'</div>',
			'dependency'  	=> array( 'header_style', 'any', 'classic-vertical' ),
			'default'		=> array(
				'image'			=> '',
				'size'			=> 'cover',
				'color'			=> 'rgba(26,34,39,0.73)',
			),
			'output' 	    => '.prt-header-style-classic-vertical .site-header',
        ),
		array(
			'id'     		 => 'responsive_header_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Responsive Header Custom Background Color', 'fixter' ),
			'default'		 => '#000000',
			'dependency'  	 => array( 'header_bg_color', '==', 'custom' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom background color for Header in responsive mode only. Like Mobile, tablet etc small screen devices.', 'fixter').'</div>',
        ),
		array(
			'id'            => 'header_responsive_icon_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Header Responsive Icon Color', 'fixter'),
			'options'  => array(
							'dark'   => esc_attr__('Dark', 'fixter'),
							'white'  => esc_attr__('White', 'fixter'),
			),
			'default'       => 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select color for responsive menu icon, cart icon, search icon. This is becuase PHP code cannot understand if you selected dark or light color as background. Will work in responsive only.', 'fixter').'</div>',
			'dependency'    => array( 'header_bg_color', '==', 'custom' ),//Multiple dependency
        ),
		array(
          'id'      	 	 => 'logotype',
          'type'     		 => 'radio',
          'title'    		 => esc_attr__('Logo type', 'fixter'), 
          'options' 		 => array( 
								'text' => esc_attr__('Logo as Text', 'fixter'), 
								'image' => esc_attr__('Logo as Image', 'fixter') 
							),
          'default'  		 => 'image',
          'after'  			 => '<div class="cs-text-muted"><br>'.esc_attr__('Specify the type of logo. It can Text or Image', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'logotext',
			'type'    		 => 'text',
			'title'   		 => esc_attr__('Logo Text', 'fixter'),
			'default' 		 => 'Paintio',
			'dependency'  	 => array( 'logotype_text', '==', 'true' ),
			'after'  			 => '<div class="cs-text-muted"><br>'.esc_attr__('Enter the text to be used instead of the logo image', 'fixter').'</div>',
		),
		array(
			'id'             => 'logo_font',
			'type'           => 'preyantechnosys_typography', 
			'title'          => esc_attr__('Logo Font', 'fixter'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '.headerlogo a.home-link', // An array of CSS selectors to apply this font style to dynamically
			'default'        => array(
				'family'		 => 'Magnita',
				'backup-family'	 => 'Arial, Helvetica, sans-serif',
				'variant'		 => 'regular',
				'font-size'		 => '26',
				'line-height'	 => '27',
				'letter-spacing' => '0',
				'color'			 => '#121212',
				'font'			 => 'google',
			),
			'dependency'  	=> array( 'logotype_text', '==', 'true' ),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_attr__('This will be applied to logo text only. Select Logo font-style and size', 'fixter').'</div>',
		),
		
		array(
			'id'       		 => 'logoimg',
			'type'     		 => 'preyantechnosys_image',
			'title'    		 => esc_attr__('Logo Image', 'fixter'),
			'dependency'  	 => array( 'logotype_image', '==', 'true' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Upload image that will be used as logo for the site ', 'fixter') . sprintf(__('%1$sNOTE:%2$s Upload image that will be used as logo for the site', 'fixter'),'<strong>', '</strong>').'</div>',
			'add_title'		 => esc_attr__('Upload Site Logo','fixter'),
			'default'		 => array(
					'thumb-url'	=> get_template_directory_uri() . '/images/logo.png',
					'full-url'	=> get_template_directory_uri() . '/images/logo.png',
			),
        ),
		array(
			'id'     		 => 'logo_max_height',
			'type'   		 => 'number',
			'title'          => esc_attr__('Logo Max Height', 'fixter' ),
			'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_attr__('If you feel your logo looks small than increase this and adjust it', 'fixter').'</div>',
			'default'		 => '45',
			'dependency'  	 => array( 'logotype_image', '==', 'true' ),
        ),
		array(
			'id'     		 => 'logo_mob_max_height',
			'type'   		 => 'number',
			'title'          => esc_attr__('Logo Max Height For Mobile Screen', 'fixter' ),
			'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_attr__('If you feel your logo looks small than increase this and adjust it', 'fixter').'</div>',
			'default'		 => '40',
			'dependency'  	 => array( 'logotype_image', '==', 'true' ),
        ),
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Sticky Header', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Options for sticky header', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'sticky_header',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Enable Sticky Header', 'fixter'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Select ON if you want the sticky header on page scroll', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'header_height_sticky',
			'type'   		 => 'number',
			'title'          => esc_attr__('Sticky Header Height (in pixel)', 'fixter' ),
			'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_attr__('You can set height of header area when it becomes sticky', 'fixter').'</div>',
			'default'		 => '90',
			'dependency'     => array( 'sticky_header', '==', 'true' ),
        ),
		array(
			'id'            => 'sticky_header_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Sticky Header Background Color', 'fixter'),
			'options'  => array(
							'darkgrey'   => esc_attr__('Dark grey', 'fixter'),
							'grey'       => esc_attr__('Grey', 'fixter'),
							'white'      => esc_attr__('White', 'fixter'),
							'skincolor'  => esc_attr__('Skincolor', 'fixter'),
							'custom'     => esc_attr__('Custom Color', 'fixter'),
			),
			'default'       => 'darkgrey',
			'dependency'    => array( 'sticky_header', '==', 'true' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined color for Sticky Header background color', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'sticky_header_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Sticky Header Custom Background Color', 'fixter' ),
			'default'		 => 'rgba(21,21,21,0.96)',
			'dependency'  	 => array( 'sticky_header_bg_color|sticky_header', '==|==', 'custom|true' ),//Multiple dependency
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom background color for Sticky Header', 'fixter').'</div>',
        ),
		array(
			'id'       		 => 'logoimg_sticky',
			'type'     		 => 'preyantechnosys_image',
			'title'    		 => esc_attr__('Logo Image for Sticky Header', 'fixter'),
			'dependency'  	 => array( 'sticky_header|logotype_image', '==|==', 'true|true' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Upload image that will be used as logo for sticky header', 'fixter').'</div>',
			'add_title'		 => esc_attr__('Upload Sticky Logo','fixter'),
		),
		array(
			'id'     		 => 'logo_max_height_sticky',
			'type'   		 => 'number',
			'title'          => esc_attr__('Logo Max Height when Sticky Header', 'fixter' ),
			'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_attr__('Set logo when the header is sticky', 'fixter').'</div>',
			'default'		 => '45',
			'dependency'     => array( 'sticky_header', '==', 'true' ),
        ),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Search Button in Header', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Option to show or hide search button in header area', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'header_search',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Show Search Button', 'fixter'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Set this option "ON" to show search button in header. The icon will be at the right side (after menu)', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'search_input',
			'type'    		 => 'text',
			'title'   		 => esc_attr__('Search Form Input Word', 'fixter'),
			'default' 		 => esc_attr__('Type Word Then Enter..', 'fixter'),
			'after'  			 => '<div class="cs-text-muted"><br>'.esc_attr__('Write the search form input word here. <br> Default: "WRITE SEARCH WORD..."', 'fixter').'</div>',
			'dependency'     => array( 'header_search', '==', 'true' ),
		),
		array(
			'id'     		 => 'searchform_title',
			'type'    		 => 'text',
			'title'   		 => esc_attr__('Search Form Title', 'fixter'),
			'default' 		 => '',
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Write the title for search form. Default: "Hi, How Can We Help You?"', 'fixter').'</div>',
			'dependency'     => array( 'header_search', '==', 'true' ),
		),
		array(
			'id'      			=> 'header_search_bgall',
			'type'    			=> 'preyantechnosys_background',
			'title'  			=> esc_attr__('Search Form Background', 'fixter' ),
			'after'  			=> '<div class="cs-text-muted"><br>'.esc_attr__('Set Header Search Form background', 'fixter').'</div>',
			'default'			=> array(
				'repeat'			=> 'no-repeat',
				'position'			=> 'center center',
				'attachment'		=> 'fixed',
				'size'				=> 'cover',
				'color'			=> 'rgba(35,35,35,0.95)',
			),
			'output'			=> '.prt-search-overlay',
			'dependency'     => array( 'header_search', '==', 'true' ),
        ),
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Header Style', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Options to change header style', 'fixter').'</small>',
		),
		array(
			'id'			=> 'headerstyle',
			'type' 			=> 'image_select',//preyantechnosys_pre_color_packages
			'title'			=> esc_attr__('Select Header Style', 'fixter'),
			'desc'     		=> esc_attr__('Please select header style', 'fixter'),
			'wrap_class'    => 'prt-header-style',
			'options'      	=> array(
				'classic'		=> get_template_directory_uri() . '/inc/images/header-classic.png',
				'classic-overlay'		=> get_template_directory_uri() . '/inc/images/header-classic-overlay.png',
				
			),
			'default'		=> 'classic',
			'attributes' 	=> array(
			'data-depend-id' => 'header_style'
			),
			'radio' 		=> true,//This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
        ),
		array(
			'type'    		=> 'heading',
			'content'		=> esc_attr__('Special options for selected header', 'fixter'),
			'dependency'  	 => array( 'header_style', 'any', 'classic,classic-two,classic-overlay,classic-rtl,classic-overlay-rtl,classic-overlay2,classic-overlay3,infostack,infostack-rtl,classic-box-overlay,toplogo,classic-three' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
			'after'  	  	 => '<small>'.esc_attr__('These options will appear for selected header style only.', 'fixter').'</small>',
        ),
		array(
			'id'       		 => 'header_text',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Header Text Area', 'fixter'),
			'shortcode'		 => true,
			 // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear before Search/Cart icon in header area. This option will work for currently selected header style only', 'fixter').'</div>',
			'default'        => '',
        ),
		array(
			'id'            => 'header_menu_position',
			'type'          => 'select',
			'title'         =>  esc_attr__('Header Menu Position', 'fixter'),
			'options'  		=> array(
								'left'		=> esc_attr__('Left Align', 'fixter'),
								'right'		=> esc_attr__('Right Align', 'fixter'),
								'center'	=> esc_attr__('Center Align', 'fixter'),
							),
			'default'       => 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select Menu Position. This option will work for currently selected header style only ', 'fixter').'</div>',
        ),
		
		array(
			'id'       		 => 'header_slider_lefttext',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Contact Details For Slider', 'fixter'),
			'shortcode'		 => true,
			'dependency'  	 => array( 'header_style', 'any', 'classic-overlay','classic4-overlay' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear left side of slider', 'fixter').'</div>',
			'default'        => '',
        ),	
		array(
			'id'       		 => 'header_slider_righttext',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Contact Details For Right Slider', 'fixter'),
			'shortcode'		 => true,
			'dependency'  	 => array( 'header_style', 'any', 'classic-overlay','classic4-overlay' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear left side of slider', 'fixter').'</div>',
			'default'        => '',
        ),	
		array(
			'id'        	=> 'header_border_bottom',
			'type'      	=> 'checkbox',
			'title'     	=> esc_attr__('Show Border at Bottom of Header', 'fixter'),
			'label'     	=> esc_attr__('YES', 'fixter'),
			'default'   	=> false,
			'dependency' 	=> array( 'header_style', 'any', 'classic-overlay,classic-overlay2' ),
			'after'    		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select Yes if you want border at bottom of header)', 'fixter').'</div>',
		),
		array(
			'id'       		 => 'header_left_text',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Header Left Content', 'fixter'),
			'shortcode'		 => true,
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear on Left side of logo', 'fixter').'</div>',
			'default'        => '<p>Social Info:</p><h2>[prt-social-links]</h2>',
			'dependency'  	 => array( 'header_style', 'any' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
		),
		array(
			'id'       		 => 'header_right_text',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Header Right Content', 'fixter'),
			'shortcode'		 => true,
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear on Right side of logo', 'fixter').'</div>',
			'default'        => '<p>Time:</p><h2>Mon - Fri: 8.00am - 7.00pm</h2>',
			'dependency'  	 => array( 'header_style', 'any' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
		),
		
		array(
			'id'       		 => 'header_left_text',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Header Left Content', 'fixter'),
			'shortcode'		 => true,
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear on Left side of logo', 'fixter').'</div>',
			'default'        => '<p>24/7 Emergency Care</p><h2>123 456 7890</h2>',
			'dependency'  	 => array( 'header_style', 'any', 'toplogo' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
		),
		array(
			'id'       		 => 'header_right_text',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Header Right Content', 'fixter'),
			'shortcode'		 => true,
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear on Right side of logo', 'fixter').'</div>',
			'default'        => '<p>Request an</p><h2>Appointment</h2>',
			'dependency'  	 => array( 'header_style', 'any', 'toplogo' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
		),		
		array(
			'id'       		 => 'infostack_column_one',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('InfoStack First Column Content', 'fixter'),
			'shortcode'		 => true,
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear on first column', 'fixter').'</div>',
			'default'        => '<div class="header-icon"> <div class="icon"><i class="kw_fixter flaticon-phone-call"></i></div></div><div class="header-content"><h3>Telephone</h3><h5>+123 795 9841</h5></div>',
			'dependency'  	 => array( 'header_style', 'any', 'infostack-rtl,infostack-overlay,infostack-overlay-rtl' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
		),
		array(
			'id'       		 => 'infostack_column_two',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('InfoStack Second Column Content', 'fixter'),
			'shortcode'		 => true,
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear on second column', 'fixter').'</div>',
			'default'        => '<div class="header-icon"> <div class="icon"><i class="kw_fixter flaticon-envelope"></i></div></div><div class="header-content"><h3>Email Address</h3><h5>info@example.com</h5></div>',
			'dependency'  	 => array( 'header_style', 'any', 'infostack-rtl' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
		),
		array(
			'id'       		 => 'infostack_column_three',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('InfoStack Third Column Content', 'fixter'),
			'shortcode'		 => true,
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear on third column', 'fixter').'</div>',
			'default'        => '<div class="header-icon"> <div class="icon"><i class="kw_fixter flaticon-placeholder"></i></div></div><div class="header-content"><h3>Office Address</h3><h5> 23 Belfast ave, Florida</h5></div>',
			'dependency'  	 => array( 'header_style', 'any', 'infostack-rtl' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
		),
		array(
			'id'       		 => 'infostack_phone_text',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('InfoStack Right Content', 'fixter'),
			'shortcode'		 => true,
			'desc'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('This content will appear after menu', 'fixter').'</div>',
			'default'        => '<a href="#">GET QUOTE</a>',
			'dependency'  	 => array( 'header_style', 'any', 'infostack,infostack-rtl' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
		),
		
		
		
		array(
			'type'    		=> 'notice',
			'class'   		=> 'info',
			'content'		=> '<p><strong>' . esc_attr__('Change widget content of the header', 'fixter') . '</strong> <br> ' . esc_attr__('You can change widgets content in the header area from Widgets section. Just go to "Appearance > Widgets" and modify widgets under "InfoStack header widgets" position.', 'fixter') . '</p>',
			'dependency'  	 => array( 'header_style', 'any', 'infostack,infostack-rtl' ), // This dependency was not working normally so had to define radio to it with attributes id more on this link https://github.com/Codestar/codestar-framework/issues/52
        ),
		array(
			'id'            => 'header_widget_text_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Header Widget Text Color', 'fixter'),
			'options'  => array(
							'dark'   => esc_attr__('Dark', 'fixter'),
							'white'  => esc_attr__('White', 'fixter'),
			),
			'default'       => 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select color for Widgets text for Overlay header style. This is because the background is transparent so you should set it.', 'fixter').'</div>',
			'dependency'    => array( 'header_bg_color|header_style', '==|any', 'custom|infostack-overlay,infostack-overlay-rtl' ),//Multiple dependency
        ),
		array(
			'id'     		 => 'header_menuarea_height',
			'type'    		 => 'number',
			'title'   		 => esc_attr__('Menu area height', 'fixter'),
			'default' 		 => '60',
			'after'          => esc_attr(' px'),
			'attributes'     => array(
			'min'       	 => 40,
			),
			'subtitle'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Height for menu area only', 'fixter').'</div>',
			'dependency'     => array( 'header_style', 'any', 'infostack,infostack-rtl' ),
		),
		
			
		array(
			'id'            => 'header_menu_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Header Menu Background Color', 'fixter'),
			'options'  		=> array(
								'darkgrey'   => esc_attr__('Dark grey', 'fixter'),
								'grey'       => esc_attr__('Grey', 'fixter'),
								'white'      => esc_attr__('White', 'fixter'),
								'skincolor'  => esc_attr__('Skincolor', 'fixter'),
								'custom'     => esc_attr__('Custom Color', 'fixter'),
							),
			'default'       => 'darkgrey',
			'dependency'	=> array( 'header_style', 'any', 'infostack,infostack-rtl' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined background color for Menu area in header', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'header_menu_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Header Menu Background Custom Background Color', 'fixter' ),
			'default'		 => 'rgba(0,0,0,0.31)',
			'dependency'  	 => array( 'header_menu_bg_color|header_style', '==|any', 'custom|infostack,infostack-rtl' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom background color for Header Menu area', 'fixter').'</div>',
        ),
        array(
			'id'            => 'sticky_header_menu_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Sticky Header Menu Background Color', 'fixter'),
			'options'  		=> array(
								'darkgrey'   => esc_attr__('Dark grey', 'fixter'),
								'grey'       => esc_attr__('Grey', 'fixter'),
								'white'      => esc_attr__('White', 'fixter'),
								'skincolor'  => esc_attr__('Skincolor', 'fixter'),
								'custom'     => esc_attr__('Custom Color', 'fixter'),
							),
			'default'       => 'darkgrey',
			'dependency'	=> array( 'header_style', 'any', 'infostack,infostack-rtl' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined background color for Menu area in header when header is sticky', 'fixter').'</div>',
        ),
		array(
			'id'     		 => 'sticky_header_menu_bg_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Sticky Header Menu Background Custom Background Color', 'fixter' ),
			'default'		 => 'rgba(129,215,66,0.7)',
			'dependency'  	 => array( 'sticky_header_menu_bg_color|header_style', '==|any', 'custom|infostack,infostack-rtl' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom background color for Header Menu area when header is sticky', 'fixter').'</div>',
        ),
			
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Logo SEO', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Options for Logo SEO', 'fixter').'</small>',
		),
		array(
			'id'      		=> 'logoseo',
			'type'   		=> 'radio',
			'title'   		=> esc_attr__('Logo Tag for SEO', 'fixter'),
			'options' 		=> array(
								'h1homeonly' => esc_attr__('H1 for home, SPAN on other pages', 'fixter'),
								'allh1'      => esc_attr__('H1 tag everywhere', 'fixter'),
							),
			'default'		=> 'h1homeonly',
			'after'  	  	=> '<div class="cs-text-muted"><br>'.esc_attr__('Select logo tag for SEO purpose', 'fixter').'</div>',
        ),
	
		
	)
);


// Menu Settings
$tm_framework_options[] = array(
	'name'   => 'menu_settings', // like ID
	'title'  => esc_attr__('Menu Settings', 'fixter'),
	'icon'   => 'fa fa-bars',
	'fields' => array( // begin: fields
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Menu Settings', 'fixter'),
			'after'  	  	=> '<small>'.esc_attr__('Responsive Menu Breakpoint: Change Options for responsive menu.', 'fixter').'</small>',
		),
		array(
			'id'      		=> 'menu_breakpoint',
			'type'   		=> 'radio',
			'title'   		=> esc_attr__('Responsive Menu Breakpoint', 'fixter'),
			'options'  		=> array(
								'1200'   => esc_attr__('Large devices','fixter').' <small>'.esc_attr__('Desktops (>1200px)', 'fixter').'</small>',
								'992'    => esc_attr__('Medium devices','fixter').' <small>'.esc_attr__('Desktops and Tablets (>992px)', 'fixter').'</small>',
								'768'    => esc_attr__('Small devices','fixter').' <small>'.esc_attr__('Mobile and Tablets (>768px)', 'fixter').'</small>',
								'custom' => esc_attr__('Custom (select pixel below)', 'fixter'),
						),
			'default'		=> '1200',
			'after'  	  	=> '<div class="cs-text-muted"><br>'.esc_attr__('Change options for responsive menu breakpoint', 'fixter').'</div>',
        ),
		
		array(
			'id'     		=> 'megamenu-override',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Override Max Mega Menu Style', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('We need to override some of the Max mega Menu plugin\'s settings to match with our theme. If you like to use the default vanilla look of Max Mega Menu than turn this option off.', 'fixter').'</div>',
        ),
		
		array(
			'id'     		 => 'menu_breakpoint-custom',
			'type'   		 => 'number',
			'title'          => esc_attr__('Custom Breakpoint for Menu (in pixel)', 'fixter' ),
			'dependency'  	 => array( 'menu_breakpoint_custom', '==', 'true' ),
			'default'		 => '1200',
			'after'  	  	 => '<div class="cs-text-muted"><br>'.esc_attr__('Select after how many pixels the menu will become responsive', 'fixter').'</div>',
        ),
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Main Menu Options', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Options for main menu in header', 'fixter').'</small>',
		),
		array(
			'id'             => 'mainmenufont',
			'type'           => 'preyantechnosys_typography', 
			'title'          => esc_attr__('Main Menu Font', 'fixter'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '#site-header-menu #site-navigation div.nav-menu > ul > li > a, .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-item > a', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'text-transform'	=> 'none',
				'font-size'			=> '16',
				'line-height'		=> '26',
				'letter-spacing'	=> '0',
				'color'				=> '#121212',
				'font'				=> 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_attr__('Select main menu font, color and size', 'fixter').'</div>',
		),
		
		
		
		array(
			'id'     		 => 'stickymainmenufontcolor',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Main Menu Font Color for Sticky Header', 'fixter' ),
			'default'		 => '#121212',
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Main menu font color when the header becomes sticky', 'fixter').'</div>',
        ),
		array(
			'id'           	=> 'mainmenu_active_link_color',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Main Menu Active Link Color', 'fixter'),
			'options'  		=> array(
				'skin'			=> esc_attr__('Skin color (default)', 'fixter'),
				'custom'		=> esc_attr__('Custom color (select below)', 'fixter'),
			),
			'default'      	=> 'skin',
			'after'  		=> '<div class="cs-text-muted"><br>
									<strong>' . esc_attr__('Tips:', 'fixter') . '</strong>
									<ul>
										<li>' . esc_attr__('"Skin color (default):" Skin color for active link color.', 'fixter') . '</li>
										<li>' . esc_attr__('"Custom color:" Custom color for active link color. Useful if you like to use any color for active link color.', 'fixter') . '</li>
									</ul>
								</div>',
        ),
		array(
			'id'     		 => 'mainmenu_active_link_custom_color',
			'type'   		 => 'color_picker',
			'title'  		 => esc_attr__('Main Menu Active Link Custom Color', 'fixter' ),
			'default'		 => '#ffffff',
			'dependency'  	 => array( 'mainmenu_active_link_color', '==', 'custom' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom color for main menu active active link', 'fixter').'</div>',
        ),
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Drop Down Menu Options', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Options for drop down menu in header', 'fixter').'</small>',
		),
		array(
			'id'             => 'dropdownmenufont',
			'type'           => 'preyantechnosys_typography', 
			'title'          => esc_attr__('Dropdown Menu Font', 'fixter'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => 'ul.nav-menu li ul li a, div.nav-menu > ul li ul li a, .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a, .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a:hover, .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a:focus, .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a.mega-menu-link, .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a.mega-menu-link:hover, .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a.mega-menu-link:focus, .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget,#site-header-menu #site-navigation div.nav-menu li ul.sub-menu >li > ul > li >a', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'font-size'			=> '14',
				'line-height'		=> '19',
				'letter-spacing'	=> '0',
				'text-transform'	=> 'none',
				'color'				=> '#121212',
				'font'				=> 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_attr__('Select dropdown menu font, color and size', 'fixter').'</div>',
		),
		
		
		array(
			'id'           	=> 'dropmenu_active_link_color',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Dropdown Menu Active Link Color', 'fixter'),
			'options'  		=> array(
				'skin'			=> esc_attr__('Skin color (default)', 'fixter'),
				'custom'		=> esc_attr__('Custom color (select below)', 'fixter'),
			),
			'default'      	=> 'skin',
			'after'  		=> '<div class="cs-text-muted"><br>' . '<strong>' . esc_attr__('Tips:', 'fixter') . '</strong>' . '<ul><li>' . esc_attr__('"Skin color (default):" Skin color for active link color.', 'fixter') . '</li><li>' . esc_attr__('"Custom color:" Custom color for active link color. Useful if you like to use any color for active link color.', 'fixter') . '</li></ul></div>',
        ),
		array(
			'id'     		=> 'dropmenu_active_link_custom_color',
			'type'   		=> 'color_picker',
			'title'  		=> esc_attr__('Dropdown Menu Active Link Custom Color', 'fixter' ),
			'default'		=> '#000000',
			'dependency'  	=> array( 'dropmenu_active_link_color', '==', 'custom' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Custom color for dropdown menu active menu text', 'fixter').'</div>',
        ),
		array(
			'id'      		=> 'dropmenu_background',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Dropdown Menu Background Properties (for all dropdown menus)', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Set background for dropdown menu. This will be applied to all dropdown menus. You can set common style here.', 'fixter').'</div>',
			'default'		=> array(
				'image'			=> '',
				'repeat'		=> 'no-repeat',
				'position'		=> 'center top',
				'size'			=> 'cover',
				'color'			=> '#ffffff',
			),
			'output' 	    => '.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu, #site-header-menu #site-navigation div.nav-menu > ul > li ul',
        ),
		array(
			'id'      		=> 'dropmenu_background_responsive',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Dropdown Menu Background Properties in Responsive', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Set background for dropdown menu. This will be applied to all dropdown menus. You can set common style here.', 'fixter').'</div>',
			'default'		=> array(
				'image'			=> '',
				'repeat'		=> 'no-repeat',
				'position'		=> 'center top',
				'size'			=> 'cover',
				'color'			=> '#000000',
			),
			'output' 	    => '.mega-menu-preyantechnosys-main-menu-mobile-open .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu,.mega-menu-preyantechnosys-main-menu-mobile-open  #site-header-menu #site-navigation div.nav-menu > ul > li ul',
        ),
		array(
			'id'     		=> 'dropmenu_text_responsive_color',
			'type'   		=> 'color_picker',
			'title'  		=> esc_attr__('Dropdown Menu Link Custom Color', 'fixter' ),
			'default'		=> '#ffffff',
			'dependency'  	=> array( 'dropmenu_active_link_color', '==', 'custom' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Custom color for dropdown menu  menu text', 'fixter').'</div>',
        ),
		array(
			'id'      		=> 'dropdown_menu_separator',
			'type'   		=> 'radio',
			'title'   		=> esc_attr__('Separator line between dropdown menu links', 'fixter'),
			'options'  		=> array(
								'grey'  => esc_attr__('Grey color as border color (default)', 'fixter'),
								'white' => esc_attr__('White color as border color (for dark background color)', 'fixter'),
								'no'    => esc_attr__('No separator border', 'fixter'),
							),
			'default'		=> 'no',
			'after'  	  	=> '<div class="cs-text-muted"><br> <strong>' . esc_attr__('Tips:', 'fixter') . '</strong>
								<ul>
									<li>' . esc_attr__('"Grey color as border color (default):" This is default border view.', 'fixter') . '</li>
									<li>' . esc_attr__('"White color:" Select this option if you are going to select dark background color (for dropdown menu)', 'fixter') . '</li>
									<li>' . esc_attr__('"No separator border:" Completely remove border. This will make your menu totally flat', 'fixter') . '</li>
								</ul></div>',
        ),
		array(
			'id'             => 'megamenu_widget_title',
			'type'           => 'preyantechnosys_typography', 
			'title'          => esc_attr__('MegaMenu Widget Title Font', 'fixter'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'line-height'    => true,
			'text-transform' => true,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'color'          => true,
			'all-varients'   => false,
			'output'         => '#site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'font-size'			=> '16',
				'line-height'		=> '20',
				'letter-spacing'	=> '0',
				'color'				=> '#ffffff',
				'font'				=> 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_attr__('Font settings for mega menu widget title. NOTE: This will work only if you installed "Max Mega Menu" plugin and also activated in the main (primary) menu', 'fixter').'</div>',
		),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => '',
			'after'  	  	 => '<strong>'.esc_attr__('Individual Drop Down Menu Options', 'fixter').'</strong>',
		),
		array(
			'id'      		=> 'dropmenu_background_1',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('First dropdown menu background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_attr__('Set background for first dropdown menu.', 'fixter') . '</div>',
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(1) ul, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(1) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(1) ul:before, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(1) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_2',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Second dropdown menu background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_attr__('Set background for second dropdown menu.', 'fixter') . '</div>',
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(2) ul, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(2) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(2) ul:before, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(2) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_3',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Third dropdown menu background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_attr__('Set background for third dropdown menu.', 'fixter') . '</div>',
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(3) ul, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(3) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(3) ul:before, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(3) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_4',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Fourth dropdown menu background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_attr__('Set background for fourth dropdown menu.', 'fixter') . '</div>',
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(4) ul, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(4) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(4) ul:before, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(4) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_5',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Fifth dropdown menu background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_attr__('Set background for fifth dropdown menu.', 'fixter') . '</div>',
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(5) ul, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(5) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(5) ul:before, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(5) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_6',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Sixth dropdown menu background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_attr__('Set background for sixth dropdown menu.', 'fixter') . '</div>',
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(6) ul, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(6) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(6) ul:before, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(6) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_7',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Seventh dropdown menu background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_attr__('Set background for seventh dropdown menu.', 'fixter') . '</div>',
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(7) ul, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(7) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(7) ul:before, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(7) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_8',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Eighth dropdown menu background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_attr__('Set background for eighth dropdown menu.', 'fixter') . '</div>',
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(8) ul, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(8) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(8) ul:before, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(8) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_9',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Ninth dropdown menu background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_attr__('Set background for ninth dropdown menu.', 'fixter') . '</div>',
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(9) ul, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(9) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(9) ul:before, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(9) ul.mega-sub-menu:before',
        ),
		array(
			'id'      		=> 'dropmenu_background_10',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Tenth dropdown menu background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>' . esc_attr__('Set background for tenth dropdown menu.', 'fixter') . '</div>',
			'output' 	    => '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(10) ul, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(10) ul.mega-sub-menu',
			'bg_layer_class'	=> '#site-header-menu #site-navigation div.nav-menu > ul > li:nth-child(10) ul:before, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:nth-child(10) ul.mega-sub-menu:before',
        ),
		
	)
);

// Footer Settings
$tm_framework_options[] = array(
	'name'   => 'footer_settings', // like ID
	'title'  => esc_attr__('Footer Settings', 'fixter'),
	'icon'   => 'fa fa-arrow-down',
	'fields' => array( // begin: fields
		array(
			'type'			=> 'heading',
			'content'    	=> esc_attr__('Sticky Footer', 'fixter'),
			'after'  	  	=> '<small>'.esc_attr__('Make footer sticky and visible on scrolling at bottom', 'fixter').'</small>',
        ),
		array(
			'id'     		=> 'stickyfooter',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Sticky Footer', 'fixter'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Set this option "ON" to enable sticky footer on scrolling at bottom', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'socialbar_show',
			'type'   		=> 'switcher',
			'title'   		=> esc_html__('Show Social Bar', 'fixter'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted">'.esc_html__('Show or hide Social Bar in footer. This will show big social icons. You can manage social links from "Social Links" section.', 'fixter').'</div>',
        ),
		// Footer Call To Action Box 
				array(
					'type'       	 => 'heading',
					'content'    	 => esc_attr__('Footer Call To Action Box', 'fixter'),
					'after'  	  	 => '<small>'.esc_attr__('Modify Title, SUb Title, icon, button link, button title etc in footer Call To Action Box here.', 'fixter').'</small>',
				),
				array(
					'id'     		=> 'footer_cta_box',
					'type'   		=> 'switcher',
					'title'   		=> esc_attr__('Show Footer Call To Action', 'fixter'),
					'default' 		=> false,
					'label'  		=> '<div class="cs-text-muted cs-text-desc">'.esc_attr__('Set this option "ON" to enable call to action box in footer', 'fixter').'</div>',
				),
				array(
					'id'			=> 'footer_cta_column_layout',
					'type' 			=> 'image_select',//preyantechnosys_pre_color_packages
					'title'			=> esc_attr__('Footer CTA Columns', 'fixter'),
					'options'      	=> array(
							'12'      => get_template_directory_uri() . '/inc/images/footer_col_12.png',
							'6_6'     => get_template_directory_uri() . '/inc/images/footer_col_6_6.png',
							'4_4_4'   => get_template_directory_uri() . '/inc/images/footer_col_4_4_4.png',
					),
					'default'		=> '6_6',
					'dependency' 	=> array( 'footer_cta_box', '==', 'true' ),
					'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select Footer CTA Column layout.', 'fixter').'</div>',
				),
				array(
					'id'     		=> 'footer_cta_box_column1',
					'type'    		=> 'textarea',
					'default' 		=> '',
					'shortcode'		=> true,
					'title'   		=> esc_attr__('CTA First Column Content', 'fixter'),
					'after'  		=> '<div class="cs-text-muted cs-text-desc">' . esc_attr__('This content will appear on first column', 'fixter') . '</div>',
					'dependency' 	=> array( 'footer_cta_box', '==', 'true' ),
				),
				array(
					'id'     		=> 'footer_cta_box_column2',
					'type'    		=> 'textarea',
					'shortcode'		 => true,
					'title'   		=> esc_attr__('CTA Second Column Content', 'fixter'),
					'after'  		=> '<div class="cs-text-muted cs-text-desc">' . esc_attr__('This content will appear on second column', 'fixter') . '</div>',
					'dependency' 	=> array( 'footer_cta_box', '==', 'true' ),
				),
				array(
					'id'     		=> 'footer_cta_box_column3',
					'type'    		=> 'textarea',
					'shortcode'		 => true,
					'title'   		=> esc_attr__('CTA Third Column Content', 'fixter'),
					'after'  		=> '<div class="cs-text-muted cs-text-desc">' . esc_attr__('This content will appear on third column', 'fixter') . '</div>',
					'dependency' 	=> array( 'footer_cta_box', '==', 'true' ),
				),
				array(
					'id'            => 'footer_cta_bg_color',
					'type'          => 'select',
					'title'         =>  esc_attr__('Footer CTA Background Color', 'fixter'),
					'options'  		=> array(
										'darkgrey'   => esc_attr__('Dark grey', 'fixter'),
										'grey'       => esc_attr__('Grey', 'fixter'),
										'white'      => esc_attr__('White', 'fixter'),
										'skincolor'  => esc_attr__('Skincolor', 'fixter'),
										'custom'     => esc_attr__('Custom Color', 'fixter'),
									),
					'default'       => 'skincolor',
					'dependency' 	=> array( 'footer_cta_box', '==', 'true' ),
					'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined color for Footer CTA background color', 'fixter').'</div>',
				),
				array(
					'id'     		 => 'footer_cta_bg_custom_color',
					'type'   		 => 'color_picker',
					'title'  		 => esc_attr__('Footer CTA Custom Background Color', 'fixter' ),
					'default'		 => 'grey',
					'dependency'  	 => array( 'footer_cta_box|footer_cta_bg_color', '==|==', 'true|custom' ),//Multiple dependency
					'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Custom background color for Footer CTA', 'fixter').'</div>',
				),
				array(
					'id'            => 'footer_cta_text_color',
					'type'          => 'select',
					'title'         =>  esc_attr__('Footer CTA Text Color', 'fixter'),
					'options'  => array(
									'white'     => esc_attr__('White', 'fixter'),
									'dark'      => esc_attr__('Dark', 'fixter'),
									'skincolor' => esc_attr__('Skin Color', 'fixter'),
								),
					'default'       => 'white',
					'dependency' 	=> array( 'footer_cta_box', '==', 'true' ),
					'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select "Dark" color if you are going to select light color in above option', 'fixter').'</div>',
				),
		// Footer common background
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Footer Background (full footer elements)', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('This background property will apply to full footer area. You can add', 'fixter').'</small>',
		),
		array(
			'id'            => 'full_footer_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Footer Background Color (all area)', 'fixter'),
			'options'		=> array(
				'transparent' => esc_attr__('Transparent', 'fixter'),
				'darkgrey'    => esc_attr__('Dark grey', 'fixter'),
				'grey'        => esc_attr__('Grey', 'fixter'),
				'white'       => esc_attr__('White', 'fixter'),
				'skincolor'   => esc_attr__('Skincolor', 'fixter'),
				'gradient'   => esc_attr__('Gradient Color', 'fixter'),
				'custom'      => esc_attr__('Custom Color', 'fixter'),
			),
			'default'       => 'darkgrey',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined color for Footer background color', 'fixter').'</div>',
        ),
		array(
			'id'      		 => 'full_footer_bg_all',
			'type'    		 => 'preyantechnosys_background',
			'title'  		 => esc_attr__('Footer Background (all area)', 'fixter' ),
			'after'  		 => '<div class="cs-text-muted"><br>'.esc_attr__('Footer background image', 'fixter').'</div>',
			'default'		 => array(
				'repeat'		=> 'no-repeat',
				'position'		=> 'center center',
				'attachment'	=> 'scroll',
				'size'			=> 'cover',
			),
			'output' 	     => '.footer',
			'output_bglayer' => true,  // apply color to bglayer class div inside this , default: true
			'color_dropdown_id' => 'full_footer_bg_color',   // color dropdown to decide which color
        ),
		
		array(
			'id'            => 'footer_style',
			'type'          => 'select',
			'title'         =>  esc_attr__('Footer Style', 'fixter'),
			'options'		=> array(
				'default' => esc_attr__('Default', 'fixter'),
			),
			'default'       => 'default',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select style for Footer', 'fixter').'</div>',
        ),
		
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('First Footer Widget Area', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Options to change settings for footer widget area', 'fixter').'</small>',
		),
		array(
			'id'			=> 'first_footer_column_layout',
			'type' 			=> 'image_select',//preyantechnosys_pre_color_packages
			'title'			=> esc_attr__('Footer Widget Columns', 'fixter'),
			'options'      	=> array(
					'12'      => get_template_directory_uri() . '/inc/images/footer_col_12.png',
					'6_6'     => get_template_directory_uri() . '/inc/images/footer_col_6_6.png',
					'4_4_4'   => get_template_directory_uri() . '/inc/images/footer_col_4_4_4.png',
					'3_3_3_3' => get_template_directory_uri() . '/inc/images/footer_col_3_3_3_3.png',
					'8_4'     => get_template_directory_uri() . '/inc/images/footer_col_8_4.png',
					'4_8'     => get_template_directory_uri() . '/inc/images/footer_col_4_8.png',
					'6_3_3'   => get_template_directory_uri() . '/inc/images/footer_col_6_3_3.png',
					'3_3_6'   => get_template_directory_uri() . '/inc/images/footer_col_3_3_6.png',
					'5_2_5'   => get_template_directory_uri() . '/inc/images/footer_col_5_2_5.png',
					'2_2_8'   => get_template_directory_uri() . '/inc/images/footer_col_2_2_8.png',
					'6_2_2_2' => get_template_directory_uri() . '/inc/images/footer_col_6_2_2_2.png',
					'2_2_2_6' => get_template_directory_uri() . '/inc/images/footer_col_2_2_2_6.png',
					'4_2_2_4' => get_template_directory_uri() . '/inc/images/footer_col_3_3_3_3.png',
					'4_2_3_3' => get_template_directory_uri() . '/inc/images/footer_col_4_2_3_3.png',
			),
			'default'		=> '6_6',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select Footer Column layout View for widgets.', 'fixter').'</div>',
        ),
		
		array(
			'id'            => 'first_footer_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Footer Background Color', 'fixter'),
			'options'  => array(
				'transparent' => esc_attr__('Transparent', 'fixter'),
				'darkgrey'    => esc_attr__('Dark grey', 'fixter'),
				'grey'        => esc_attr__('Grey', 'fixter'),
				'white'       => esc_attr__('White', 'fixter'),
				'skincolor'   => esc_attr__('Skincolor', 'fixter'),
				'gradient'   => esc_attr__('Gradient Color', 'fixter'),
				'custom'      => esc_attr__('Custom Color', 'fixter'),
			),
			'default'       => 'transparent',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined color for Footer background color', 'fixter').'</div>',
        ),
		array(
			'id'      			=> 'first_footer_bg_all',
			'type'    			=> 'preyantechnosys_background',
			'title'  			=> esc_attr__('Footer Background', 'fixter' ),
			'after'  			=> '<div class="cs-text-muted"><br>'.esc_attr__('Footer background image', 'fixter').'</div>',
			'default'			=> array(
				'repeat'			=> 'no-repeat',
				'position'			=> 'center bottom',
				'attachment'		=> 'scroll',
				'size'				=> 'cover',
				'color'				=> '#252d32',
			),
			'output'			=> '.first-footer',
			'output_bglayer'    => true,  // apply color to bglayer class div inside this , default: true
			'color_dropdown_id' => 'first_footer_bg_color',   // color dropdown to decide which color
        ),
		array(
			'id'           	=> 'first_footer_text_color',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Text Color', 'fixter'),
			'options'  		=> array(
								'white'  => esc_attr__('White', 'fixter'),
								'dark'   => esc_attr__('Dark', 'fixter'),
							),
			'default'      	=> 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select "Dark" color if you are going to select light color in above option', 'fixter').'</div>',
        ),
		array(
			'id'           	=> 'first_footer_widget_seperator',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Border Separator Between Widget', 'fixter'),
			'options'  		=> array(
								'no'  	=> esc_attr__('No', 'fixter'),
								'yes'   => esc_attr__('Yes', 'fixter'),
							),
			'default'      	=> 'no',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select "Yes" if you want to set border separator between widget', 'fixter').'</div>',
        ),
		
		// Second Footer Widget Area
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Second Footer Widget Area', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Options to change settings for second footer widget area', 'fixter').'</small>',
		),
		array(
			'id'			=> 'second_footer_column_layout',
			'type' 			=> 'image_select',//preyantechnosys_pre_color_packages
			'title'			=> esc_attr__('Footer Widget Columns', 'fixter'),
			'options'      	=> array(
					'12'      => get_template_directory_uri() . '/inc/images/footer_col_12.png',
					'6_6'     => get_template_directory_uri() . '/inc/images/footer_col_6_6.png',
					'4_4_4'   => get_template_directory_uri() . '/inc/images/footer_col_4_4_4.png',
					'3_3_3_3' => get_template_directory_uri() . '/inc/images/footer_col_3_3_3_3.png',
					'8_4'     => get_template_directory_uri() . '/inc/images/footer_col_8_4.png',
					'4_8'     => get_template_directory_uri() . '/inc/images/footer_col_4_8.png',
					'6_3_3'   => get_template_directory_uri() . '/inc/images/footer_col_6_3_3.png',
					'3_3_6'   => get_template_directory_uri() . '/inc/images/footer_col_3_3_6.png',
					'3_4_3_2' => get_template_directory_uri() . '/inc/images/footer_col_3_4_3_2.png',
					'2_2_8'   => get_template_directory_uri() . '/inc/images/footer_col_2_2_8.png',
					'6_2_2_2' => get_template_directory_uri() . '/inc/images/footer_col_6_2_2_2.png',
					'2_2_2_6' => get_template_directory_uri() . '/inc/images/footer_col_2_2_2_6.png',
					'3_6_3'   => get_template_directory_uri() . '/inc/images/footer_col_3_6_3.png',
					'2_2_4_4' => get_template_directory_uri() . '/inc/images/footer_col_3_3_3_3.png',
					'3_2_2_5' => get_template_directory_uri() . '/inc/images/footer_col_6_2_2_2.png',
					'3_9'     => get_template_directory_uri() . '/inc/images/footer_col_4_8.png',
					'4_4_4_4'   => get_template_directory_uri() . '/inc/images/footer_col_4_4_4.png',
			),
			'default'		=> '2_2_4_4',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select Footer Column layout View for widgets.', 'fixter').'</div>',
        ),
		array(
			'id'            => 'second_footer_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Footer Background Color', 'fixter'),
			'options'  => array(
							'transparent' => esc_attr__('Transparent', 'fixter'),
							'darkgrey'    => esc_attr__('Dark grey', 'fixter'),
							'grey'        => esc_attr__('Grey', 'fixter'),
							'white'       => esc_attr__('White', 'fixter'),
							'skincolor'   => esc_attr__('Skincolor', 'fixter'),
							'gradient'   => esc_attr__('Gradient Color', 'fixter'),
							'custom'      => esc_attr__('Custom Color', 'fixter'),
			),
			'default'       => 'transparent',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined color for Footer background color', 'fixter').'</div>',
        ),
		array(
			'id'      		=> 'second_footer_bg_all',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Footer Background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Footer background image', 'fixter').'</div>',
			'default'		=> array(
				'repeat'		=> 'no-repeat',
				'position'		=> 'center center',
				'attachment'	=> 'scroll',
				'size'			=> 'auto',
				'color'			=> '#f5f8fa',
			),
			'output' 	    => '.second-footer',
			'output_bglayer'    => true,  // apply color to bglayer class div inside this , default: true
			'color_dropdown_id' => 'second_footer_bg_color',   // color dropdown to decide which color
        ),
		array(
			'id'           	=> 'second_footer_text_color',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Text Color', 'fixter'),
			'options'  		=> array(
				'white'  		=> esc_attr__('White', 'fixter'),
				'dark'   		=> esc_attr__('Dark', 'fixter'),
			),
			'default'      	=> 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select "Dark" color if you are going to select light color in above option', 'fixter').'</div>',
        ),
		array(
			'id'        	=> 'secondary_footer_border',
			'type'      	=> 'checkbox',
			'title'     	=> esc_attr__('Show Footer border of Secondary footer', 'fixter'),
			'label'     	=> esc_attr__('YES', 'fixter'),
			'default'   	=> false,
			'after'    		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select this option if you like to show Footer border top of Secondary footer', 'fixter').'</div>',
		),
		array(
			'id'           	=> 'second_footer_widget_seperator',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Border Separator Between Widget', 'fixter'),
			'options'  		=> array(
								'no'  	=> esc_attr__('No', 'fixter'),
								'yes'   => esc_attr__('Yes', 'fixter'),
							),
			'default'      	=> 'no',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select "Yes" if you want to set border separator between widget', 'fixter').'</div>',
        ),

		// Footer border betweeen Widget border Area
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Border Between Footer First And Second Footer Widget Area', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('This option will add Horizontal border between First and Second Footer Widget Area', 'fixter').'</small>',
		),
		array(
			'id'           	=> 'border_between_footerwidget_area',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Border', 'fixter'),
			'options'  		=> array(
				'none'			=> esc_attr__('None', 'fixter'),
				'white'			=> esc_attr__('White', 'fixter'),
				'dark'			=> esc_attr__('Dark', 'fixter'),
			),
			'default'      	=> 'none',
        ),
		// Footer Text Area
		
		// Footer Text Area
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Footer Text Area', 'fixter'),
			'after'  	  	 => '<small>'.esc_attr__('Options to change settings for footer text area. This contains copyright info', 'fixter').'</small>',
		),
		array(
			'id'            => 'bottom_footer_bg_color',
			'type'          => 'select',
			'title'         =>  esc_attr__('Footer Background Color', 'fixter'),
			'options'  => array(
							'transparent' => esc_attr__('Transparent', 'fixter'),
							'darkgrey'    => esc_attr__('Dark grey', 'fixter'),
							'grey'        => esc_attr__('Grey', 'fixter'),
							'white'       => esc_attr__('White', 'fixter'),
							'skincolor'   => esc_attr__('Skincolor', 'fixter'),
							'gradient'   => esc_attr__('Gradient Color', 'fixter'),
							'custom'      => esc_attr__('Custom Color', 'fixter'),
			),
			'default'       => 'transparent',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select predefined color for Footer background color', 'fixter').'</div>',
        ),
		array(
			'id'      		=> 'bottom_footer_bg_all',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Footer Background', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Footer background image', 'fixter').'</div>',
			'default'		=> array(
				'repeat'		=> 'no-repeat',
				'position'		=> 'center center',
				'attachment'	=> 'fixed',
				'color'			=> '#161616',
			),
			'output' 	    => '.site-footer .bottom-footer-text',
			'output_bglayer'    => true,  // apply color to bglayer class div inside this , default: true
			'color_dropdown_id' => 'bottom_footer_bg_color',   // color dropdown to decide which color
        ),
		array(
			'id'           	=> 'bottom_footer_text_color',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Text Color', 'fixter'),
			'options'  		=> array(
				'white'			=> esc_attr__('White', 'fixter'),
				'dark'			=> esc_attr__('Dark', 'fixter'),
			),
			'default'      	=> 'white',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select "Dark" color if you are going to select light color in above option', 'fixter').'</div>',
        ),
		array(
          'id'      		=> 'footer_copyright_left',
          'type'    		=> 'wysiwyg',
          'title'  			=>  esc_attr__('Footer Text Left', 'fixter'),
		  'after'  			=> '<div class="cs-text-muted"><br>'. esc_attr__('You can use the following shortcodes in your footer text:', 'fixter')
		  . '<br>   <code>[prt-site-url]</code> <code>[prt-site-title]</code> <code>[prt-site-tagline]</code> <code>[prt-current-year]</code> <code>[prt-footermenu]</code> <br><br> '
		  . sprintf( esc_attr__('%1$s Click here to know more%2$s  about details for each shortcode.','fixter') , '<a href="'. esc_url('https://preyantechnosys.com/wordpress/fixter/documentation/shortcodes.html') .'" target="_blank">' , '</a>'  ) .'</div>',
		  'default'         => preyantechnosys_wp_kses('Copyright &copy; 2023 <a href="' . site_url() . '">' . get_bloginfo('name') . '</a>. All rights reserved.'),
        ),
		array(
          'id'       		=> 'footer_copyright_right',
          'type'     		=> 'wysiwyg',
          'title'   		=>  esc_attr__('Footer Text Right', 'fixter'),
		  'after'  			=> '<div class="cs-text-muted"><br>'. esc_attr__('You can use the following shortcodes in your footer text:', 'fixter')
		  . '<br>   <code>[prt-site-url]</code> <code>[prt-site-title]</code> <code>[prt-site-tagline]</code> <code>[prt-current-year]</code> <code>[prt-footermenu]</code> <br><br> '
		  . sprintf( esc_attr__('%1$s Click here to know more%2$s about details for each shortcode.','fixter') , '<a href="'. esc_url('https://preyantechnosys.com/wordpress/fixter/documentation/shortcodes.html') .'" target="_blank">' , '</a>'  ) .'</div>',
        ),
		array(
			'id'           	=> 'border_above_copyright_area',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Border Above Copyright Text', 'fixter'),
			'options'  		=> array(
				'none'		=> esc_attr__('None', 'fixter'),
				'white'		=> esc_attr__('White', 'fixter'),
				'dark'		=> esc_attr__('Dark', 'fixter'),
			),
			'default'      	=> 'none',
        ),
	)
);


// Button Settings
$tm_framework_options[] = array(
	'name'   => 'button_settings', // like ID
	'title'  => esc_attr__('Button Settings', 'fixter'),
	'icon'   => 'fa fa-square-o',
	'fields' => array( // begin: fields
		array(
			'type'			=> 'heading',
			'content'    	=> esc_attr__('Global Button Settings', 'fixter'),
			'after'  	  	=> '<small>'.esc_attr__('Make footer sticky and visible on scrolling at bottom', 'fixter').'</small>',
        ),
		array(
			'id'             => 'button_font',
			'type'           => 'preyantechnosys_typography', 
			'title'          => esc_attr__('Button Font', 'fixter'),
			'chosen'         => false,
			'text-align'     => false,
			'google'         => true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'    => true, // Select a backup non-google font in addition to a google font
			'subsets'        => false, // Only appears if google is true and subsets not set to false
			'font-size'      => false,
			'line-height'    => false,
			'text-transform' => true,
			'color'          => false,
			'word-spacing'   => false, // Defaults to false
			'letter-spacing' => true, // Defaults to false
			'all-varients'   => false,
			'output'         => '.elementor-element.elementor-widget-button .elementor-button,
			.main-holder .site-content ul.products li.product .add_to_wishlist, .main-holder .site-content ul.products li.product .yith-wcwl-wishlistexistsbrowse a[rel="nofollow"], .woocommerce button.button, .woocommerce-page button.button, input,.woocommerce-page a.button, .button, .wpb_button, button, .woocommerce input.button, .woocommerce-page input.button, .tp-button.big, .woocommerce #content input.button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce-page #content input.button, .woocommerce-page #respond input#submit, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .preyantechnosys-post-readmore a,.preyantechnosys-box-service .preyantechnosys-serviceboxbox-readmore a,.post.preyantechnosys-box-blog-classic .preyantechnosys-blogbox-footer-readmore a,.single-tm_portfolio .nav-links a,.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .main-holder .site .woocommerce-cart-form__contents button, .main-holder .site .woocommerce-cart-form__contents button.button:disabled[disabled], .main-holder .site table.cart .coupon button,.preyantechnosys-box-blog .preyantechnosys-blogbox-footer-readmore a,.preyantechnosys-iconbox-styleseven .preyantechnosys-serviceboxbox-readmore a,.preyantechnosys-portfoliobox-style2 .prt-project-readmore-btn a,a.prt-button-bold', // An array of CSS selectors to apply this font style to dynamically
			'units'          => 'px', // Defaults to px
			'default'        => array(
				'family'			=> 'Magnita',
				'backup-family'		=> 'Arial, Helvetica, sans-serif',
				'variant'			=> 'regular',
				'letter-spacing'	=> '0',
				'text-transform'	=> 'none',
				'font'				=> 'google',
			),
			'after'  	=> '<div class="cs-text-muted"><br>'.esc_attr__('This fonts will be applied to all buttons in this site', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'button_topbottom_padding',
			'type'   		=> 'number',
			'title'         => esc_attr__('Medium Button Top Bottom Padding', 'fixter' ),
			'default'		=> '17',
        ),
		array(
			'id'     		=> 'medium_button_fontsize',
			'type'   		=> 'number',
			'title'         => esc_attr__('Medium Button Font Size', 'fixter' ),
			'default'		=> '17',
        ),
		array(
			'id'        => 'button_shape',
			'type'      => 'radio',
			'title'     => esc_attr__('Global Buttons Shape', 'fixter'), 
			'options'  	=> array(
							'square'     => esc_attr__('Square', 'fixter'),
							'round'   	 => esc_attr__('Round', 'fixter'),
						),
			'default'   => 'round',
			'after'   	=> '<small>'.esc_attr__('Select the shape for Buttons', 'fixter').'</small>',
        ),
		array(
			'id'        => 'button_link_hover',
			'type'      => 'radio',
			'title'     => esc_attr__('Global Link Hover', 'fixter'), 
			'options'  	=> array(
							'simple'     => esc_attr__('Simple', 'fixter'),
							'border'   	 => esc_attr__('Border', 'fixter'),
						),
			'default'   => 'simple',
			'after'   	=> '<small>'.esc_attr__('Select the shape for Buttons', 'fixter').'</small>',
        ),
		array(
			'id'        => 'skincolor_button_textcolor',
			'type'      => 'radio',
			'title'     => esc_attr__('Skin Color Button Text Color', 'fixter'), 
			'options'  	=> array(
							'default'    => esc_attr__('Default', 'fixter'),
							'dark'   	 => esc_attr__('Dark', 'fixter'),
						),
			'default'   => 'default',
			'after'   	=> '<small>'.esc_attr__('Select text color for skincolor button', 'fixter').'</small>',
        ),
	)
);

// Blog Settings
$tm_framework_options[] = array(
	'name'   => 'blog_settings', // like ID
	'title'  => esc_attr__('Blog Settings', 'fixter'),
	'icon'   => 'fa fa-pencil',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Blog Settings', 'fixter'),
			'after'  		=> '<small>'.esc_attr__('Settings for Blog section', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'blog_text_limit',
			'type'   		=> 'number',
			'title'         => esc_attr__('Blog Excerpt Limit (in words)', 'fixter' ),
			'default'		=> '160',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . esc_attr__('Set limit for small description. Select how many words you like to show.', 'fixter') . '<br><strong>' . esc_attr__('TIP:', 'fixter') . '</strong> ' . esc_attr__('Select "0" (zero) to show excerpt or content before READ MORE break.', 'fixter') . '</div>',
        ),
		array(
			'id'     		=> 'blogclassic_show_comment_number',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Show "Total Comment" with icon', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Show or hide Total Comment with icon. You can hide it if you don\'t want to show it.', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'blog_readmore_text',
			'type'    		=> 'text',
			'title'   		=> esc_attr__('"Read More" Link Text', 'fixter'),
			'default' 		=> esc_attr__('Read more', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Text for the Read More link on the Blog page', 'fixter').'</div>',
		),
		
		array(
			'id'           	=> 'blog_view',
			'type'         	=> 'image_select',
			'title'        	=>  esc_attr__('Blog view', 'fixter'),
			'options'  		=> array(
				'classic'			=> get_template_directory_uri() . '/inc/images/classic-view.png',
				'box'				=> get_template_directory_uri() . '/inc/images/box-view.png',
			),
			'default'      	=> 'classic',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select blog view. The default view is classic list view. Also we have total three differnt look for classic view. Select them in this option and see your BLOG page. For "Box view", you can select two, three or four columns box view too.', 'fixter').'</div>',
			
        ),
								
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Blogbox Settings', 'fixter'),
			'after'  		=> '<small>'.esc_attr__('Blog box style view settings. This is because you selected "BOX VIEW" in above option.', 'fixter').'</small>',
		),
		array(
			'id'           	=> 'blogbox_column',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Blog box column', 'fixter'),
			'options'  		=> array(
				'one'			=> esc_attr__('One Column View', 'fixter'),
				'two'			=> esc_attr__('Two Column view', 'fixter'),
				'three'			=> esc_attr__('Three Column view (default)', 'fixter'),
				'four'			=> esc_attr__('Four Column view', 'fixter'),
			),
			'default'      	=> 'one',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select blog view. The default view is classic list view. You can select two, three or four column blog view from here', 'fixter').'</div>',
			'dependency'    => array( 'blog_view_box', '==', 'true' ),
        ),
		array(
			'id'           	=> 'blogbox_view',
			'type'         	=> 'image_select',
			'title'        	=>  esc_attr__('Blog box template', 'fixter'),
			'options'  		=> array(
				'style2'		=> get_template_directory_uri() . '/inc/images/blogbox-style-two.png',
			),
			'default'      	=> 'style2',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select blog view. The default view is classic list view. You can select two, three or four column blog view from here', 'fixter').'</div>',
			'dependency'    => array( 'blog_view_box', '==', 'true' ),
        ),
		array(
			'id'     		=> 'blogbox_text_limit',
			'type'   		=> 'number',
			'title'         => esc_attr__('Blogbox Excerpt Limit (in words)', 'fixter' ),
			'default'		=> '90',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . esc_attr__('Set limit for small description. Select how many words you like to show.', 'fixter') . '<br><strong>' . esc_attr__('TIP:', 'fixter') . '</strong> ' . esc_attr__('Select "0" (zero) to show excerpt or content before READ MORE break.', 'fixter') . '</div>',
        ),		
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Blog Single Settings', 'fixter'),
			'after'  		=> '<small>'.esc_attr__('Settings for single view of blog post.', 'fixter').'</small>',
		),
		array(
			'id'            => 'blog_details_style',
			'type'          => 'select',
			'title'         =>  esc_attr__('Details Page Style', 'fixter'),
			'options'		=> array(
				'default'   => esc_attr__('Default Style', 'fixter'),
				'style1'    => esc_attr__('Style 1', 'fixter'),
				
			),
			'default'       => 'default',
		),		
		array(
			'id'     		=> 'singlepage_hide_titlebar',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Hide the Titlebar On Post Details Page', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('If you want to show or hide titlebar in post details page', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'post_social_share_title',
			'type'    		=> 'text',
			'title'   		=> esc_attr__('Social Share Title', 'fixter'),
			'default' 		=> '',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('This text will appear in the social share box as title', 'fixter').'</div>',
			'dependency'    => array( 'portfolio_show_social_share', '==', 'true' ),
		),
		array(
			'id'        => 'post_social_share_services',
			'type'      => 'checkbox',
			'title'     => esc_attr__('Select Social Share Service', 'fixter'),
			'options'   => array(
					'facebook'    => esc_attr__('Facebook', 'fixter'),
					'twitter'     => esc_attr__('Twitter', 'fixter'),
					'gplus'       => esc_attr__('Google Plus', 'fixter'),
					'pinterest'   => esc_attr__('Pinterest', 'fixter'),
					'linkedin'    => esc_attr__('LinkedIn', 'fixter'),
					'stumbleupon' => esc_attr__('Stumbleupon', 'fixter'),
					'tumblr'      => esc_attr__('Tumblr', 'fixter'),
					'reddit'      => esc_attr__('Reddit', 'fixter'),
					'digg'        => esc_attr__('Digg', 'fixter'),
			),
			'after'    	 => '<div class="cs-text-muted"><br>'.esc_attr__('The selected social service icon will be visible on single Post so user can share on social sites.', 'fixter').'</div>',
		),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Blog Classic Meta Settings', 'fixter'),
			'after'  		=> '<small>'.esc_attr__('Settings for meta data for Blog classic view.', 'fixter').'</small>',
		),
		array(
			'id'      => 'blogclassic_meta_list',
			'type'    => 'sorter',
			'title'   => esc_attr__('Classic Blog - Meta Details','fixter'),
			'after'   => '<div class="cs-text-muted"><br>'.esc_attr__('Select which data you like to show in post meta details', 'fixter').'</div>',
			'default' => array(
				'enabled' => array(
					'author'	=> esc_attr__('Author', 'fixter'),
					'comment'   => esc_attr__('Comments', 'fixter'),	
					'date'		=> esc_attr__('Date', 'fixter'),
					),
				'disabled' => array(	
					'tag'		=> esc_attr__('Tags', 'fixter'),
					'cat'       => esc_attr__('Categories', 'fixter'),					
				),
			),
			'enabled_title'  => esc_attr__('Active Meta Details', 'fixter'),
			'disabled_title' => esc_attr__('Hidden Meta Details', 'fixter'),
		),
		array(
			'id'     		=> 'blogclassic_meta_dateformat',
			'type'    		=> 'text',
			'title'   		=> esc_attr__('Date Meta - format', 'fixter'),
			'default' 		=> '',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Set date format.', 'fixter'). ' <a href="' . esc_url('https://codex.wordpress.org/Formatting_Date_and_Time') . '" target="_blank">' . esc_attr__('Documentation on date and time formatting.', 'fixter') . '</a></div>',
		),
		array(
			'id'     		=> 'blogclassic_meta_taglink',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Tag list - Add link?', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Add link in tags', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'blogclassic_meta_catlink',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Category list - Add link?', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Add link in categories', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'blogclassic_meta_authorlink',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Author Name - Add link?', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Add link in author name', 'fixter').'</div>',
        ),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Blogbox Settings', 'fixter'),
			'after'  		=> '<small>'.esc_attr__('Settings for Blogbox (Visual Composer element)', 'fixter').'</small>',
		),
		array(
			'id'      => 'blogbox_meta_list',
			'type'    => 'sorter',
			'title'   => esc_attr__('Classic Blog - Meta Details','fixter'),
			'after'   => '<div class="cs-text-muted"><br>'.esc_attr__('Select which data you like to show in post meta details', 'fixter').'</div>',
			'default' => array(
				'enabled' => array(						
					'cat'    	=> esc_attr__('Categories', 'fixter'),
					'date'    	=> esc_attr__('Date', 'fixter'),
				),
				'disabled' => array(					
					'tag'  		=> esc_attr__('Tags', 'fixter'),	
					'comment' 	=> esc_attr__('Comments', 'fixter'),		
					'author'	=> esc_attr__('Author', 'fixter'),							
				),
			),
			'enabled_title'  => esc_attr__('Active Meta Details', 'fixter'),
			'disabled_title' => esc_attr__('Hidden Meta Details', 'fixter'),
		),
		array(
			'id'     		=> 'blogbox_meta_dateformat',
			'type'    		=> 'text',
			'title'   		=> esc_attr__('Date Meta - format', 'fixter'),
			'default' 		=> '',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Set date format.', 'fixter'). ' <a href="https://codex.wordpress.org/Formatting_Date_and_Time" target="_blank">' . esc_attr__('Documentation on date and time formatting.', 'fixter') . '</a></div>',
		),
		array(
			'id'     		=> 'blogbox_meta_taglink',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Tag list - Add link?', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Add link in tags', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'blogbox_meta_catlink',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Category list - Add link?', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Add link in categories', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'blogbox_meta_authorlink',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Author Name - Add link?', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Add link in author name', 'fixter').'</div>',
        ),
		
	)
);



// Portfolio Settings
$tm_framework_options[] = array(
	'name'   => 'portfolio_settings', // like ID
	'title'  => sprintf( esc_attr__('%s Settings', 'fixter'), $pf_title_singular ),
	'icon'   => 'fa fa-th-large',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr__('Single %s Settings', 'fixter'), $pf_title_singular ),
			'after'  		=> '<small>' . sprintf( esc_attr__('Options to change settings for single %s', 'fixter'), $pf_title_singular ) . '</small>',
		),
		array(
			'id'     		=> 'portfolio_project_details',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('%s Details Box Title', 'fixter'), $pf_title_singular ),
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Title for the list styled "%1$s Details" area. (For single %1$s only)', 'fixter'), $pf_title_singular ) . '</div>',
		),
		array(
			'id'      		=> 'portfolio_viewstyle',
			'type'   		=> 'radio',
			'title'   		=> sprintf( esc_attr__('Single %s View Style', 'fixter'), $pf_title_singular ),
			'options' 		=> array( 
				'left'			=> esc_attr__('Left image and right content (default)', 'fixter'),
				'style2' 	=> esc_attr__('Left image and right content Style2', 'fixter'),
				'top'			=> esc_attr__('Top image and bottom content', 'fixter'),
				'full'			=> esc_attr__('No image and full-width content (without details box)', 'fixter'),
				'full-withimg'  => esc_attr__('Top image and full-width content (without details box)', 'fixter'),
			),
			'default'		=> 'left',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Select view for single %s', 'fixter'), $pf_title_singular ) . '</div>',
        ),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr__('Related %1$s (on single %2$s) Settings', 'fixter'), $pf_title, $pf_title_singular ),
			'after'  		=> '<small>' . sprintf( esc_attr__('Options to change settings for related %1$s section on single %2$s page.', 'fixter'), $pf_title, $pf_title_singular ) . '</small>',
		),
		array(
			'id'     		=> 'portfolio_show_related',
			'type'   		=> 'switcher',
			'title'   		=> sprintf( esc_attr__('Show Related %s', 'fixter'), $pf_title ),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">' . sprintf( esc_attr__('Select ON to show related %1$s on single %2$s page', 'fixter'), $pf_title, $pf_title_singular ) . '</div>',
        ),
		array(
			'id'     		=> 'portfolio_related_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Related %s Title', 'fixter'), $pf_title ),
			'default' 		=> esc_attr__('Related Projects', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Title for the Releated %1$s area. (For single %2$s only)', 'fixter'), $pf_title, $pf_title_singular ) . '</div>',
			'dependency'    => array( 'portfolio_show_related', '==', 'true' ),
		),
		array(
			'id'       		 => 'related_workdesc_text',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Related Work Description', 'fixter'),
			'shortcode'		 => true,
			'dependency'    => array( 'portfolio_show_related', '==', 'true' ),
			'default'        => '',
        ),
		array(
			'id'           	=> 'portfolio_related_view',
			'type'         	=> 'image_select',
			'title'        	=> sprintf( esc_attr__('Related %s Boxes template', 'fixter'), $pf_title ),
			'options'  		=> array(
				'style1'			=> get_template_directory_uri() . '/inc/images/portfolio-style1.png',
			),
			'default'      	=> 'style1',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Select column to show in Related %s area.', 'fixter'), $pf_title ) . '</div>',
			'dependency'    => array( 'portfolio_show_related', '==', 'true' ),
			'radio'      	=> true,
        ),
		array(
			'id'           	=> 'portfolio_related_column',
			'type'         	=> 'select',
			'title'        	=> esc_attr__('Select column', 'fixter'),
			'options'  => array(
					'two'     => esc_attr__('Two column', 'fixter'),
					'three'   => esc_attr__('Three column', 'fixter'),
					'four'    => esc_attr__('Four column', 'fixter'),
					'five'    => esc_attr__('Five column', 'fixter'),
					'six'     => esc_attr__('Six column', 'fixter'),
				),
			//'class'        	=> 'chosen',
			'default'      	=> 'three',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Select column to show in Related %s area.', 'fixter'), $pf_title ) . '</div>',
			'dependency'    => array( 'portfolio_show_related', '==', 'true' ),
        ),
		array(
			'id'     		=> 'portfolio_related_show',
			'type'   		=> 'number',
			'title'         => sprintf( esc_attr__('Show %s', 'fixter'), $pf_title ),
			'default'		=> '3',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('How many %2$s Boxes you like to show in Related %1$s area.', 'fixter'), $pf_title, $pf_title_singular ) . '</div>',
			'dependency'    => array( 'portfolio_show_related', '==', 'true' ),
        ),
		array(
			'id'       		 => 'related_workdesc_cta',
			'type'     		 => 'textarea',
			'title'    		 => sprintf( esc_attr__('Single %s CTA Text', 'fixter'), $pf_title ),
			'shortcode'		 => true,
			'default'        => '',
        ),
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr__('Single %s List Details Settings', 'fixter'), $pf_title_singular ),
			'after'  		=> '<small>' . sprintf( esc_attr__('Options to change each line of list details for single %1$s. Here you can select how many lines will be appear in the details of a single %1$s', 'fixter'), $pf_title_singular ) . '</small>',
		),
		array(
			'id'              => 'pf_details_line',
			'type'            => 'group',
			'title'           => esc_attr__('Line Details', 'fixter'),
			'info'            => sprintf( esc_attr__('This will be added a new line in DETAILS box on single %s view.', 'fixter'), $pf_title_singular ),
			'button_title'    => esc_attr__('Add New Line', 'fixter'),
			'accordion_title' => esc_attr__('Details for the line', 'fixter'),
			
			'default'		 =>  array (
				array (
					'pf_details_line_title' => 'Project',
					'data' => 'custom',
				),
				array (
					'pf_details_line_title' => ' Category',
					'data' => 'custom',
				),
				array (
					'pf_details_line_title' => '  Clients',
					'data' => 'custom',
				),				
			),



			'fields'          => array(
				array(
					'id'     		=> 'pf_details_line_title',
					'type'    		=> 'text',
					'title'   		=> esc_attr__('Line Title', 'fixter'),
					'default' 		=> esc_attr__('Location', 'fixter'),
					'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Title for the first line of the details in single %s', 'fixter'), $pf_title_singular ) . '<br> ' . esc_attr__('Leave this field empty to remove the line.', 'fixter').'</div>',
				),
				
				array(
					'id'      		=> 'data',
					'type'   		=> 'select',
					'title'   		=> esc_attr__('Line Input Type', 'fixter'),
					'options' 		=> array(
							'custom'        => esc_attr__('Custom text (single line)', 'fixter'),
							'multiline'     => esc_attr__('Custom text with multiline', 'fixter'),
							'date'          => sprintf( esc_attr__('Show date of the %s', 'fixter'), $pf_title_singular ),
							'category'      => sprintf( esc_attr__('Show Category (without link) of the %s', 'fixter'), $pf_title_singular ),
							'category_link' => sprintf( esc_attr__('Show Category (with link) of the %s', 'fixter'), $pf_title_singular ),
							'tag'           => sprintf( esc_attr__('Show Tags (without link) of the %s', 'fixter'), $pf_title_singular ),
							'tag_link'      => sprintf( esc_attr__('Show Tags (with link) of the %s', 'fixter'), $pf_title_singular ),
					),
					'default'		=> 'custom',
					'after'  	  	=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Select view for single %s', 'fixter'), $pf_title_singular ) . '</div>',
				),
			)
        ),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr__('Select social sharing service for single %s', 'fixter'), $pf_title_singular ),
			'after'  		=> '<small>' . sprintf( esc_attr__('Select social service so site visitors can share the single %s on different social services', 'fixter'), $pf_title_singular ) . '</small>',
		),
		array(
			'id'     		=> 'portfolio_show_social_share',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Show Social Share box', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Show or hide social share box.', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'portfolio_social_share_title',
			'type'    		=> 'text',
			'title'   		=> esc_attr__('Social Share Title', 'fixter'),
			'default' 		=> esc_attr__('Share', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('This text will appear in the social share box as title', 'fixter').'</div>',
			'dependency'    => array( 'portfolio_show_social_share', '==', 'true' ),
		),
		array(
			'id'        => 'portfolio_social_share_services',
			'type'      => 'checkbox',
			'title'     => esc_attr__('Select Social Share Service', 'fixter'),
			'options'   => array(
					'facebook'    => esc_attr__('Facebook', 'fixter'),
					'twitter'     => esc_attr__('Twitter', 'fixter'),
					'gplus'       => esc_attr__('Google Plus', 'fixter'),
					'pinterest'   => esc_attr__('Pinterest', 'fixter'),
					'linkedin'    => esc_attr__('LinkedIn', 'fixter'),
					'stumbleupon' => esc_attr__('Stumbleupon', 'fixter'),
					'tumblr'      => esc_attr__('Tumblr', 'fixter'),
					'reddit'      => esc_attr__('Reddit', 'fixter'),
					'digg'        => esc_attr__('Digg', 'fixter'),
			),
			'after'    	 => '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('The selected social service icon will be visible on single %s so user can share on social sites.', 'fixter'), $pf_title_singular ) . '</div>',
			'dependency' => array( 'portfolio_show_social_share', '==', 'true' ),
		),		
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr__('%s Settings', 'fixter'), $pf_cat_title ),
			'after'  		=> '<small>' . sprintf( esc_attr__('Settings for %s', 'fixter'), $pf_cat_title ) . '</small>',
		),
		array(
			'id'           	=> 'pfcat_view',
			'type'         	=> 'image_select',
			'title'        	=> sprintf( esc_attr__('%s Boxes template', 'fixter'), $pf_title_singular ),
			'options'       => preyantechnosys_global_portfolio_template_list(),
			'options'  		=> array(
				'style1'			=> get_template_directory_uri() . '/inc/images/portfolio-style1.png',
			),
			'default'      	=> 'style1',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Select %1$s Box view on single %2$s page.', 'fixter'), $pf_title_singular, $pf_cat_title_singular ) . '</div>',
			'radio'      	=> true,
        ),
		array(
			'id'           	=> 'pfcat_column',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Select column', 'fixter'),
			'options'  => array(
					'two'     => esc_attr__('Two column', 'fixter'),
					'three'   => esc_attr__('Three column', 'fixter'),
					'four'    => esc_attr__('Four column', 'fixter'),
					'five'    => esc_attr__('Five column', 'fixter'),
					'six'     => esc_attr__('Six column', 'fixter'),
				),
			'default'      	=> 'three',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Select column to show on %s page.', 'fixter'), $pf_cat_title_singular ) . '</div>',
        ),
		array(
			'id'     		=> 'pfcat_show',
			'type'   		=> 'number',
			'title'         => sprintf( esc_attr__('%s to show', 'fixter' ), $pf_title_singular ),
			'default'		=> '9',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('How many %1$s you like to show on %2$s page', 'fixter'), $pf_title_singular, $pf_cat_title_singular ) . '</div>',
        ),
	)
);


// Team Member Settings
$tm_framework_options[] = array(
	'name'   => 'team_member_settings', // like ID
	'title'  => sprintf( esc_attr__('%s Settings', 'fixter'), $team_member_title_singular ),
	'icon'   => 'fa fa-users',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr_x('%s\'s Extra Details Settings', 'Team Member', 'fixter'), $team_member_title_singular ),
			'after'  		=> '<small>'.sprintf( esc_attr_x('You can fill this extra details and the details will be available on single %s page only. This will be shown as LIST with title and value design.', 'Team Member', 'fixter'), $team_member_title_singular ) . '</small>',
		),
		array(
			'id'              => 'team_extra_details_lines',
			'type'            => 'group',
			'title'           => esc_attr__('Line Details', 'fixter'),
			'info'            => sprintf( esc_attr_x('This will be added a new line in DETAILS box on single %s.', 'Team Member', 'fixter'), $team_member_title_singular ),
			'button_title'    => esc_attr__('Add New Line', 'fixter'),
			'accordion_title' => esc_attr__('Details for the line', 'fixter'),
			'fields'          => array(
				array(
					'id'     		=> 'team_extra_details_line_title',
					'type'    		=> 'text',
					'title'   		=> esc_attr__('Line Title', 'fixter'),
					'default' 		=> esc_attr__('Experiance', 'fixter'),
					'after'  		=> '<div class="cs-text-muted"><br>'. sprintf( esc_attr_x('Title for the first line in the DETAILS box in single %s', 'Team Member', 'fixter'), $team_member_title_singular ) . '<br> ' . esc_attr__('Leave this field empty to remove the line.', 'fixter').'</div>',
				),
				
				array(
					'id'      		=> 'data',
					'type'   		=> 'radio',
					'title'   		=> esc_attr__('Line Data Type', 'fixter'),
					'options' 		=> array(
							'custom'  => esc_attr__('Custom text (add anything)', 'fixter'),
							'url'     => esc_attr__('URL link', 'fixter'),
							'email'   => esc_attr__('Email address', 'fixter'),
							'phone'   => esc_attr__('Phone number', 'fixter'),
					),
					'default'		=> 'custom',
					'after'  	  	=> '<div class="cs-text-muted"><br>'.sprintf( esc_attr_x('Select view for single %s', 'Team Member', 'fixter'), $team_member_title_singular ).'</div>',
				),
			),
			'default' =>   array (
				array (
					'team_extra_details_line_title' => 'Address ',
					'data' => 'custom',
				),
				array (
					'team_extra_details_line_title' => 'Experience ',
					'data' => 'custom',
				),
				),
			
        ),
		
		
		
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr__('%s Settings', 'fixter'), $team_group_title_singular),
			'after'  		=> '<small>' . sprintf( esc_attr__('Settings for %s page', 'fixter'), $team_group_title_singular) . '</small>',
		),
		array(
			'id'           	=> 'teamcat_view',
			'type'         	=> 'image_select',
			'title'        	=> sprintf( esc_attr__('%s Boxes template', 'fixter'), $team_member_title_singular ),
			'options'  		=> array(
				'style2'			=> get_template_directory_uri() . '/inc/images/teambox-style2.png',
			),
			'default'      	=> 'style2',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Select %1$s\'s Box view on %2$s page.', 'fixter'), $team_member_title_singular, $team_group_title_singular ) . '</div>',
			'radio'      	=> true,
        ),
		array(
			'id'           	=> 'teamcat_column',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Select column', 'fixter'),
			'options'  => array(
					'two'   => esc_attr__('Two column', 'fixter'),
					'three' => esc_attr__('Three column', 'fixter'),
					'four'  => esc_attr__('Four column', 'fixter'),
				),
			'default'      	=> 'three',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf(esc_attr__('Select column to show %s', 'fixter'), $team_member_title ) . '</div>',
        ),
		array(
			'id'     		=> 'teamcat_show',
			'type'   		=> 'number',
			'title'         => sprintf( esc_attr__('%s to Show', 'fixter' ), $team_member_title  ),
			'default'		=> '9',
			'after'  	  	=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('How many %s you like to show on category page', 'fixter'), $team_member_title  ) . '</div>',
        ),
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr__('Single %s Settings', 'fixter'), $team_member_title_singular ),
			'after'  		=> '<small>' . sprintf( esc_attr__('Options to change settings for single %s', 'fixter'), $team_member_title_singular ) . '</small>',
		),
		array(
			'id'     		=> 'teammember_detailsbox_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('%s Details Box Title', 'fixter'), $team_member_title_singular ),
			'default' 		=> esc_attr__('Personal Information', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Title for the Member "%1$s Details" area. (For single %1$s only)', 'fixter'), $team_member_title_singular ) . '</div>',
		),
		array(
			'id'     		=> 'team_readmore_text',
			'type'    		=> 'text',
			'title'   		=> esc_attr__('"Read More" Link Text', 'fixter'),
			'default' 		=> esc_attr__('Read More', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Text for the More Details link on the Teambox', 'fixter').'</div>',
		),
		
	)
);


// Service CPT Settings
$tm_framework_options[] = array(
	'name'   => 'service_settings', // like ID
	'title'  => sprintf( esc_attr__('%s Settings', 'fixter'), $service_title_singular ),
	'icon'   => 'fa fa-gear',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr__('%s Settings', 'fixter'), $service_cat_title ),
			'after'  		=> '<small>' . sprintf( esc_attr__('Settings for %s', 'fixter'), $service_cat_title ) . '</small>',
		),
		array(
			'id'           	=> 'services_cat_view',
			'type'         	=> 'image_select',
			'title'        	=> sprintf( esc_attr__('%s Boxes template', 'fixter'), $service_title_singular ),
			'options'  		=> array(
				'styleone'			=> get_template_directory_uri() . '/inc/images/service-view-style1.png',
				'styletwo'			=> get_template_directory_uri() . '/inc/images/service-view-style2.png',
			),
			'default'      	=> 'styletwo',
			'after'  		=> '<div class="cs-text-muted cs-text-desc"><br>' . sprintf( esc_attr__('Select %1$s Box view on single %2$s page.', 'fixter'), $service_title_singular, $service_cat_title_singular ) . '</div>',
			'radio'      	=> true,
        ),
		array(
			'id'           	=> 'services_cat_column',
			'type'         	=> 'select',
			'title'        	=>  esc_attr__('Select column', 'fixter'),
			'options'  => array(
				'two'     => esc_attr__('Two column', 'fixter'),
				'three'   => esc_attr__('Three column', 'fixter'),
				'four'    => esc_attr__('Four column', 'fixter'),
				'five'    => esc_attr__('Five column', 'fixter'),
				'six'     => esc_attr__('Six column', 'fixter'),
			),
			'default'      	=> 'two',
			'after'  		=> '<div class="cs-text-muted cs-text-desc"><br>' . sprintf( esc_attr__('Select column to show on %s page.', 'fixter'), $service_cat_title_singular ) . '</div>',
        ),
		array(
			'id'     		=> 'services_cat_show',
			'type'   		=> 'number',
			'title'         => sprintf( esc_attr__('%s to show', 'fixter' ), $service_title_singular ),
			'default'		=> '9',
			'after'  	  	=> '<div class="cs-text-muted cs-text-desc"><br>' . sprintf( esc_attr__('How many %1$s you like to show on %2$s page', 'fixter'), $service_title_singular, $service_cat_title_singular ) . '</div>',
        ),
		array(
			'id'     		=> 'service_readmore_text',
			'type'    		=> 'text',
			'title'   		=> esc_attr__('"Read More" Link Text', 'fixter'),
			'default' 		=> esc_attr__('Read more', 'fixter'),
			'after'  		=> '<div class="cs-text-muted cs-text-desc"><br>'.esc_attr__('Text for the More Details link on the Servicebox', 'fixter').'</div>',
		),
	)
);



// Creating Client Groups array 
$client_groups = array();
if( isset($fixter_theme_options['client_groups']) && is_array($fixter_theme_options['client_groups']) ){

foreach( $fixter_theme_options['client_groups'] as $key => $val ){

	$name = $val['client_group_name'];
	$slug = str_replace(' ', '_', strtolower($name));
	$client_groups[$slug] = $name;
}

}




// Error 404 Page Settings
$tm_framework_options[] = array(
	'name'   => 'error404_page_settings', // like ID
	'title'  => esc_attr__('Error 404 Page Settings', 'fixter'),
	'icon'   => 'fa fa-exclamation-triangle',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Error 404 Page Settings', 'fixter'),
			'after'  		=> '<small>'.esc_attr__('Settings that determine how the error page will be looking', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'error404_iamgebox_text',
			'type'    		=> 'textarea',
			'title'   		=> esc_attr__('Top Description text', 'fixter'),
			'shortcode'		 => true,
			'default' 		=> '<h2>404</h2>',
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This text will be shown top of Big heading.', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'error404_big_text',
			'type'    		=> 'textarea',
			'title'   		=> esc_attr__('Big heading text', 'fixter'),
			'default' 		=> esc_attr__('Oops! It looks like you are lost!', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This text will be shown with big font size below icon', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'error404_medium_text',
			'type'    		=> 'text',
			'title'   		=> esc_attr__('Description text', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This file may have been moved or deleted. Be sure to check your spelling', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'error404_search',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Show Search Form', 'fixter'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Set this option "YES" to show search form on the 404 page', 'fixter').'</div>',
        ),
		array(
			'id'      		=> 'error404_page_background',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Content area background for 404 page only', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted cs-text-desc"><br>'.esc_attr__('Set background for 404 page content area only.', 'fixter').'</div>',
			'default'		=> array(
				'image'			=> get_template_directory_uri() . '/images/404-bg.png',
				'repeat'		=> 'no-repeat',
				'position'		=> 'center center',
				'size'			=> 'cover',
				'attachment'	=> 'fixed',
				'color'			=> '#000000',
			),
			'output' 	    => 'body.error404',
		),	
		
	)
);


// Search Page Settings
$tm_framework_options[] = array(
	'name'   => 'search_page_settings', // like ID
	'title'  => esc_attr__('Search Page Settings', 'fixter'),
	'icon'   => 'fa fa-search',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Search Page Settings', 'fixter'),
		),
		array(
			'id'       		 => 'searchnoresult',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Content of the search page if no results found', 'fixter'),
			'shortcode'		 => true,
			'after'  	     => '<div class="cs-text-muted"><br>'. esc_attr__('Specify the content of the page that will be displayed if while search no results found', 'fixter') . '<br> ' . esc_attr__('HTML tags and shortcodes are allowed', 'fixter').'</div>',
			'default'  		 => preyantechnosys_wp_kses( urldecode('%3Ch3%3ENothing+found%3C%2Fh3%3E%3Cp%3ESorry%2C+but+nothing+matched+your+search+terms.+Please+try+again+with+some+different+keywords.%3C%2Fp%3E') ),
        ),
		
	)
);


// Sidebar Settings
$tm_framework_options[] = array(
	'name'   => 'sidebar_settings', // like ID
	'title'  => esc_attr__('Sidebar Settings', 'fixter'),
	'icon'   => 'fa fa-pause',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Sidebar Settings', 'fixter'),
		),
		array(
			'id'              => 'custom_sidebars',
			'type'            => 'group',
			'title'           => esc_attr__('Custom Sidebars', 'fixter'),
			'info'            => esc_attr__('Specify the custom sidebars that can be used in the pages for a widgets', 'fixter'),
			'button_title'    => esc_attr__('Add New Sidebar', 'fixter'),
			'accordion_title' => esc_attr__('Custom Sidebar Properties', 'fixter'),
			'fields'          => array(
					array(
						'id'     		=> 'custom_sidebar',
						'type'    		=> 'text',
						'title'   		=> esc_attr__('Custom Sidebar Name', 'fixter'),
						'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('Write custom sidebar name here', 'fixter').'</div>',
					),

			)
        ),
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Sidebar Position', 'fixter'),
			'after'  		=> '<small>'.esc_attr__('Select sidebar position for different sections', 'fixter').'</small>',
		),
		array(
			'id'           	=> 'sidebar_post',
			'type'        	=> 'image_select',
			'title'       	=> esc_attr__('Blog Post/Category Sidebar', 'fixter'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select one of layouts for blog post. Also for Category, Tag and Archive view too. Technically, related to all blog post view.', 'fixter').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_page',
			'type'        	=> 'image_select',
			'title'       	=> esc_attr__('Standard Pages Sidebar', 'fixter'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select one of layouts for standard pages', 'fixter').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_team_member',
			'type'        	=> 'image_select',
			'title'       	=> esc_attr__('Team member Sidebar', 'fixter'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'no',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select one of layouts for Team Member single and Team Member Group.', 'fixter').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_team_member_group',
			'type'        	=> 'image_select',
			'title'       	=> esc_attr__('Team member Group Sidebar', 'fixter'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'left',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select one of layouts for Team Member single and Team Member Group.', 'fixter').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_portfolio',
			'type'        	=> 'image_select',
			'title'       	=> sprintf( esc_attr__('%s Sidebar', 'fixter'), $pf_title_singular ),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'no',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Select one of layouts for %s single pages.', 'fixter'), $pf_title_singular ) . '</div>',
        ),
		array(
			'id'           	=> 'sidebar_portfolio_category',
			'type'        	=> 'image_select',
			'title'       	=> sprintf( esc_attr__('%s Sidebar', 'fixter'), $pf_cat_title_singular ),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'left',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Select one of layouts for %s view.', 'fixter'), $pf_cat_title_singular ) . '</div>',
        ),
				array(
			'id'           	=> 'sidebar_service',
			'type'        	=> 'image_select',
			'title'       	=> sprintf( esc_attr__('%s Sidebar', 'fixter'), $service_title_singular ),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'left',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Select one of layouts for %s single pages.', 'fixter'), $service_title_singular ) . '</div>',
        ),
		array(
			'id'           	=> 'sidebar_service_category',
			'type'        	=> 'image_select',
			'title'       	=> sprintf( esc_attr__('%s Sidebar', 'fixter'), $service_cat_title_singular ),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'left',
			'after'  		=> '<div class="cs-text-muted"><br>' . sprintf( esc_attr__('Select one of layouts for %s view.', 'fixter'), $service_cat_title_singular ) . '</div>',
        ),
		
		array(
			'id'           	=> 'sidebar_search',
			'type'        	=> 'image_select',
			'title'       	=> esc_attr__('Search Page Sidebar', 'fixter'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'no',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select one of layouts for search page', 'fixter').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_woocommerce',
			'type'        	=> 'image_select',
			'title'       	=> esc_attr__('WooCommerce Sidebar', 'fixter'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select sidebar position for WooCommerce Shop', 'fixter').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_singlepage_woocommerce',
			'type'        	=> 'image_select',
			'title'       	=> esc_attr__('WooCommerce Single Product page', 'fixter'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select sidebar position for Single Product page', 'fixter').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_bbpress',
			'type'        	=> 'image_select',
			'title'       	=> esc_attr__('BBPress Sidebar', 'fixter'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select sidebar position for BBPress pages', 'fixter').'</div>',
        ),
		array(
			'id'           	=> 'sidebar_events',
			'type'        	=> 'image_select',
			'title'       	=> esc_attr__('Events Sidebar', 'fixter'),
			'options'     	=> array(
				'no'          => get_template_directory_uri() . '/inc/images/layout_no_side.png',
				'left'        => get_template_directory_uri() . '/inc/images/layout_left.png',
				'right'       => get_template_directory_uri() . '/inc/images/layout_right.png',
				'both'        => get_template_directory_uri() . '/inc/images/layout_both.png',
				'bothleft'    => get_template_directory_uri() . '/inc/images/layout_left_both.png',
				'bothright'   => get_template_directory_uri() . '/inc/images/layout_right_both.png',
			),
			'radio'       	=> true,
			'default'      	=> 'right',
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select sidebar position for Events pages.', 'fixter') . ' ' . sprintf( esc_attr__('This is valid for %s plugin only','fixter') , '<a href="'. esc_url('https://wordpress.org/plugins/the-events-calendar/') .'" target="_blank">' . esc_attr__('The Events Calendar', 'fixter').'</a>' ).'</div>',
        ),
	)
);


// Getting social list
$global_social_list = preyantechnosys_shared_social_list();
	
// social service list
$sociallist = array_merge(
	$global_social_list,
	array('rss'     => 'Rss Feed')
);

// Social Links
$tm_framework_options[] = array(
	'name'   => 'social_links', // like ID
	'title'  => esc_attr__('Social Links', 'fixter'),
	'icon'   => 'fa fa-share-square-o',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Social Links', 'fixter'),
			'after'			=> '<small>' . sprintf(__('You can use %1$s[prt-social-links]%2$s shortcode to show social links.', 'fixter'), '<code>' , '</code>' ) . '</small>',
		),
		array(
			'id'              => 'social_icons_list',
			'type'            => 'group',
			'title'           => esc_attr__('Social Links', 'fixter'),
			'info'            => esc_attr__('Add your social services here. Also you can reorder the Social Links as per your choice. Just drag and drop items to reorder as per your choice', 'fixter'),
			'button_title'    => esc_attr__('Add New Social Service', 'fixter'),
			'accordion_title' => esc_attr__('Social Service Properties', 'fixter'),
			'fields'          => array(
					array(
						'id'            => 'social_service_name',
						'type'          => 'select',
						'title'         =>  esc_attr__('Social Service', 'fixter'),
						'options'  		=> $sociallist,
						'default'       => 'twitter',
						'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Select Social icon from here', 'fixter').'</div>',
					),
					array(
						'id'     		=> 'social_service_link',
						'type'    		=> 'text',
						'title'   		=> esc_attr__('Link to Social icon selected above', 'fixter'),
						'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('Paste URL only', 'fixter').'</div>',
						'dependency' 	=> array( 'social_service_name', '!=', 'rss' ),
					),

			),
			'default' => array (
				
				array (
					'social_service_name' => 'facebook',
					'social_service_link' => '#',
				),
				array (
					'social_service_name' => 'twitter',
					'social_service_link' => '#',
				),
				array (
					'social_service_name' => 'flickr',
					'social_service_link' => '#',
				),
				array (
					'social_service_name' => 'linkedin',
					'social_service_link' => '',
				),
				
			),
        ),
		
		
		
	),	
);

// WooCommerce Settings
$tm_framework_options[] = array(
	'name'   => 'woocommerce_settings', // like ID
	'title'  => esc_attr__('WooCommerce Settings', 'fixter'),
	'icon'   => 'fa fa-shopping-cart',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('WooCommerce Settings', 'fixter'),
			'after'  		=> '<small>'. esc_attr__('Setup for WooCommerce shop section. Please make sure you installed WooCommerce plugin', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'wc-header-icon',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Show Cart Icon in Header', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Select "On" to show the cart icon in header. Select "OFF" to hide the cart icon.', 'fixter') . ' <br><br> ' . '<strong>' . esc_attr__('NOTE:','fixter') . '</strong> ' . esc_attr__('Please note that if you haven\'t installed "WooCommerce" plugin than the icon will not appear even if you selected "ON" in this option.', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'woocommerce-column', 
			'type'   		=> 'radio',
			'title'  		=> esc_attr__('WooCommerce Product List Column', 'fixter'),
			'options'  		=> array(
								'1' => esc_attr__('One Column', 'fixter'),
								'2' => esc_attr__('Two Columns', 'fixter'),
								'3' => esc_attr__('Three Columns', 'fixter'),
								'4' => esc_attr__('Four Columns', 'fixter'),
							),
			'default'  		 => '3',
			'after'   		 => '<div class="cs-text-muted">'.esc_attr__('Select how many column you want to show for product list view', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'woocommerce-product-per-page',
			'type'   		=> 'number',
			'title'         => esc_attr__('Products Per Page', 'fixter' ),
			'default'		=> '9',
			'after'  	  	=> '<div class="cs-text-muted"><br>'.esc_attr__('Select how many product you want to show on SHOP page', 'fixter').'</div>',
        ),
		array(
			'id'       => 'show-hot-label',
			'type'     => 'switcher',
			'title'    => esc_attr__( 'Show Hot Label ', 'fixter' ),
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Set this option "ON" to show hot label on product box', 'fixter').'</div>',
			'default'  => true,
		),
		array(
			'id'       		=> 'hot-label-text',
			'type'     		=> 'text',
			'title'    		=> esc_attr__( 'Hot Label Text', 'fixter' ),
			'default'  		=> esc_attr__( 'Hot', 'fixter' ),
			'dependency' 	=> array( 'show-hot-label', '==', true ),	
		),
		array(
			'id'      => 'show-sale-label',
			'type'    => 'switcher',
			'title'   => esc_attr__( 'Show Sale Label', 'fixter' ),
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Set this option "ON" to show sale label on product box', 'fixter').'</div>',
			'default' => true,
		),
		array(
			'id'       => 'product_sale_lebtype',
			'type'     => 'select',
			'title'    =>  esc_attr__('Select Sale label type', 'fixter'),
			'options'  => array(
							'text'  	   => esc_attr__('Text', 'fixter'),
							'percentage'   => esc_attr__('Percentage', 'fixter'),
						),
			'default'  => 'text',
			'dependency' => array( 'show-sale-label', '==', true ),	
		),
		array(
			'id'       => 'sale-label-text',
			'type'     => 'text',
			'title'    => esc_attr__( 'Sale Text', 'fixter' ),
			'default'  => esc_attr__( 'Sale', 'fixter' ),
			'dependency'  	 => array( 'product_sale_lebtype|show-sale-label', '==|==', 'text|true' ),//Multiple dependency			
		),
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Single Product Page Settings', 'fixter'),
			'after'  		=> '<small>'. esc_attr__('Options for Single product page', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'wc-single-show-related',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Show Related Products', 'fixter'),
			'default' 		=> true,
			'label'  		=> '<div class="cs-text-muted">'.esc_attr__('Select "ON" to show Related Products below the product description on single page', 'fixter').'</div>',
        ),
		array(
			'id'     		=> 'wc-single-related-column', 
			'type'   		=> 'radio',
			'title'  		=> esc_attr__('Column for Related Products', 'fixter'),
			'options'  		=> array(
								'1' => esc_attr__('One Column', 'fixter'),
								'2' => esc_attr__('Two Columns', 'fixter'),
								'3' => esc_attr__('Three Columns', 'fixter'),
								'4' => esc_attr__('Four Columns', 'fixter'),
							),
			'default'  		 => '3',
			'after'   		 => '<div class="cs-text-muted">'.esc_attr__('Select how many column you want to show for product list of related products', 'fixter').'</div>',
			'dependency'     => array( 'wc-single-show-related', '==', 'true' ),
        ),
		array(
			'id'     		=> 'wc-single-related-count',
			'type'   		=> 'number',
			'title'         => esc_attr__('Related Products Show', 'fixter' ),
			'default'		=> '3',
			'after'  	  	=> '<div class="cs-text-muted"><br>'.esc_attr__('Select how many products you want to show in the Related prodcuts area on single product page', 'fixter').'</div>',
			'dependency'    => array( 'wc-single-show-related', '==', 'true' ),
        ),
	)
);


// Under Construction
$tm_framework_options[] = array(
	'name'   => 'under_construction', // like ID
	'title'  => esc_attr__('Under Construction', 'fixter'),
	'icon'   => 'fa fa-send',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Under Construction', 'fixter'),
			'after'  		=> '<small>'. esc_attr__('You can set your site in Under Construciton mode during development of your site. Please note that only logged in users like admin can view the site when this mode is activated', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'uconstruction',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Show Under Construciton Message', 'fixter'),
			'default' 		=> false,
			'label'  		=> esc_attr__('You can acitvate this during development of your site. So site visitor will see Under Construction message.', 'fixter'). '<br>' . esc_attr__('Please note that admin (when logged in) can view live site and not Under Construction message.', 'fixter'),
        ),
		array(
			'id'     		=> 'uconstruction_title',
			'type'    		=> 'text',
			'title'   		=> esc_attr__('Title for Under Construction page', 'fixter'),
			'default'  		=> esc_attr__('This site is Under Construction', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('Write TITLE for the Under Construction page', 'fixter').'</div>',
			'dependency'	=> array('uconstruction','==','true'),
		),
		array(
			'id'       		 => 'uconstruction_html',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('Page Content', 'fixter'),
			'shortcode'		 => true,
			'dependency'	 => array('uconstruction','==','true'),
			'default' 		 => preyantechnosys_wp_kses( urldecode('%3Cdiv+class%3D%22un-main-page-content%22%3E%0D%0A%3Cdiv+class%3D%22un-page-content%22%3E%0D%0A%3Cdiv%3E%5Bprt-logo%5D%3C%2Fdiv%3E%0D%0A%3Cdiv+class%3D%22sepline%22%3E%3C%2Fdiv%3E%0D%0A%3Ch1+class%3D%22heading%22%3EUNDER+CONSTRUCTION%3C%2Fh1%3E%0D%0A%3Ch4+class%3D%22subheading%22%3ESomething+awesome+this+way+comes.+Stay+tuned%21%3C%2Fh4%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E') ),
			'after'  		 => '<div class="cs-text-muted"><br>'. esc_attr__('Write your HTML code for Under Construction page body content', 'fixter').'</div>',
        ),
		array(
			'id'      		=> 'uconstruction_background',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Background Properties', 'fixter' ),
			'dependency'	 => array('uconstruction','==','true'),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Set background options. This is for main body background', 'fixter').'</div>',
			'default'		=> array(
				'repeat'		=> 'no-repeat',
				'position'		=> 'center top',
				'attachment'	=> 'scroll',
				'size'			=> 'cover',
				'color'			=> '#fbfbfb',
			),
			'output'      	=> '.uconstruction_background',
        ),
		array(
			'id'       		 => 'uconstruction_css_code',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('CSS Code for Under Construction page', 'fixter'),
			'after'  		 => '<div class="cs-text-muted"><br>'. esc_attr__('Write your custom CSS code here', 'fixter').'</div>',
			'dependency'	 => array('uconstruction','==','true'),
			'default' 		 => urldecode('%40import+url%28%22https%3A%2F%2Ffonts.googleapis.com%2Fcss%3Ffamily%3DOpen%2BSans%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C700%2C700i%22%29%3B%0D%0Abody%7B%0D%0Apadding%3A+0%3B%0D%0Amargin%3A+0%3B%0D%0A%7D+%0D%0A.heading%2C+.subheading%7B+%0D%0Afont-family%3A+%22%22Open+Sans%22%2C+Arial%2C+Helvetica%2C+sans-serif%3B%0D%0A%7D+%0D%0A.heading%7B%0D%0Afont-size%3A+60px%3B%0D%0Aline-height%3A+65px%3B+%0D%0Aletter-spacing%3A+1px%3B%0D%0Amargin%3A+0%3B%0D%0Amargin-bottom%3A%0D%0A0px%3B+margin-bottom%3A+18px%3B%0D%0Afont-weight%3A+600%3B%0D%0Aletter-spacing%3A+2px%3B%0D%0Acolor%3A+%23283d58%3B%0D%0A+%7D+%0D%0A.subheading%7B%0D%0Afont-size%3A+23px%3B%0D%0Aline-height%3A+30px%3B%0D%0Acolor%3A+%23828c96%3B%0D%0Aletter-spacing%3A+1px%3B%0D%0Amargin%3A+0%3B%0D%0Afont-weight%3A+normal%3B%0D%0A%7D+%0D%0A.un-main-page-content%7B+%0D%0Aposition%3A+absolute%3B%0D%0Aleft%3A+50%25%3B%0D%0Atop%3A+45%25%3B%0D%0A-khtml-transform%3A+translateX%28-50%25%29+translateY%28-50%25%29%3B%0D%0A-moz-transform%3A+translateX%28-50%25%29+translateY%28-50%25%29%3B+%0D%0A-ms-transform%3A+translateX%28-50%25%29+translateY%28-50%25%29%3B%0D%0A-o-transform%3A+translateX%28-50%25%29+translateY%28-50%25%29%3B%0D%0Atransform%3A+translateX%28-50%25%29+translateY%28-50%25%29%3B%0D%0A+%7D%0D%0A.prt-sc-logo%7B+%0D%0Amargin-bottom%3A+40px%3B%0D%0Adisplay%3A+inline-block%3B%0D%0A%7D'),
        ),
		
		
	)
);

// Login Page Settings
$tm_framework_options[] = array(
	'name'   => 'login_page_settings', // like ID
	'title'  => esc_attr__('Login Page Settings', 'fixter'),
	'icon'   => 'fa fa-lock',
	'fields' => array( // begin: fields
		array(
			'type'       	 => 'heading',
			'content'    	 => esc_attr__('Login Page Settings', 'fixter'),
		),
		array(
			'id'      		=> 'login_background',
			'type'    		=> 'preyantechnosys_background',
			'title'  		=> esc_attr__('Background Properties', 'fixter' ),
			'after'  		=> '<div class="cs-text-muted"><br>'.esc_attr__('Specify the type of background object', 'fixter').'</div>',
			'default'		=> array(
				'repeat'		=> 'no-repeat',
				'position'		=> 'right bottom',
				'attachment'	=> 'scroll',
				'size'			=> 'cover',
				'color'			=> '#f1f6fa',
			),
			'output'   		=> '.loginpage',
        ),
	)
);


// Seperator
$tm_framework_options[] = array(
	'name'   => 'tm_seperator_1',
	'title'  => esc_attr__('Advanced', 'fixter'),
	'icon'   => 'fa fa-ellipsis-h'
);

$cssfile = (is_multisite()) ? 'php' : 'css' ;



// Advanced Settings
$tm_framework_options[] = array(
	'name'   => 'advanced_settings', // like ID
	'title'  => esc_attr__('Advanced Settings', 'fixter'),
	'icon'   => 'fa fa-wrench',
	'fields' => array( // begin: fields
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr__('Custom Post Type : %s (Portfolio) Settings', 'fixter'), $pf_title_singular ),
			'after'  		=> '<small>'. esc_attr__('Advanced settings for Portfolio custom post type', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'pf_type_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Title for %s (Portfolio) Post Type', 'fixter'), $pf_title_singular ),
			'default'  		=> esc_attr__('Portfolio', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the Title for Portfolio post type section', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'pf_type_title_singular',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Singular title for %s (Portfolio) Post Type', 'fixter'), $pf_title_singular ),
			'default'  		=> esc_attr__('Portfolio', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the Title for Portfolio post type section. Only for singular title.', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'pf_type_slug',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('URL Slug for %s (Portfolio) Post Type', 'fixter'), $pf_title_singular ),
			'default'  		=> esc_attr('portfolio'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the URL slug for Portfolio post type section', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'pf_cat_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Title for %s (Portfolio Category) List', 'fixter'), $pf_cat_title_singular ),
			'default'  		=> esc_attr__('Portfolio Categories', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('Title for Portfolio Category list for group page. This will appear at left sidebar', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'pf_cat_title_singular',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Singular Title for %s (Portfolio Category) List', 'fixter'), $pf_cat_title_singular ),
			'default'  		=> esc_attr__('Portfolio Category', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('Title for Portfolio Category list for group page. This will appear at left sidebar', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'pf_cat_slug',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('URL Slug for %s (Portfolio Category) Link', 'fixter'), $pf_cat_title_singular ),
			'default'  		=> esc_attr__('portfolio-category', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the URL slug for Portfolio Category link', 'fixter').'</div>',
		),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr__('Custom Post Type : %s (Service) Settings', 'fixter'), $service_title_singular ),
			'after'  		=> '<small>'. esc_attr__('Advanced settings for Service custom post type', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'service_type_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Title for %s (Service) Post Type', 'fixter'), $service_title_singular ),
			'default'  		=> esc_attr__('Service', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the Title for Service post type section', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'service_type_title_singular',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Singular title for %s (Service) Post Type', 'fixter'), $service_title_singular ),
			'default'  		=> esc_attr__('Service', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the Title for Service post type section. Only for singular title.', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'service_type_slug',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('URL Slug for %s (Service) Post Type', 'fixter'), $service_title_singular ),
			'default'  		=> esc_attr('service'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the URL slug for Service post type section', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'service_cat_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Title for %s (Service Category) List', 'fixter'), $service_cat_title_singular ),
			'default'  		=> esc_attr__('Service Categories', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('Title for Service Category list for group page. This will appear at left sidebar', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'service_cat_title_singular',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Singular Title for %s (Service Category) List', 'fixter'), $service_cat_title_singular ),
			'default'  		=> esc_attr__('Service Category', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('Title for Service Category list for group page. This will appear at left sidebar', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'service_cat_slug',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('URL Slug for %s (Service Category) Link', 'fixter'), $service_cat_title_singular ),
			'default'  		=> esc_attr__('service-category', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the URL slug for Service Category link', 'fixter').'</div>',
		),
		
		
		array(
			'type'       	=> 'heading',
			'content'    	=> sprintf( esc_attr__('Custom Post Type : %s (Team member) Settings', 'fixter'), $team_member_title_singular ),
			'after'  		=> '<small>'. esc_attr__('Advanced settings for Team Member custom post type', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'team_type_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Title for %s (Team Member) Post Type', 'fixter'), $team_member_title_singular ),
			'default'  		=> esc_attr__('Team Members', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the Title for Team Member post type section', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'team_type_title_singular',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Singular title for %s (Team Member) Post Type', 'fixter'), $team_member_title_singular ),
			'default'  		=> esc_attr__('Team Member', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the Title for Team Member post type section. Only for singular title.', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'team_type_slug',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('URL Slug for %s (Team Member) Post Type', 'fixter'), $team_member_title_singular ),
			'default'  		=> esc_attr__('team-member', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the URL slug for Team Member post type section', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'team_group_title',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Title for %s (Team Group) List', 'fixter'), $team_group_title_singular ),
			'default'  		=> esc_attr__('Team Groups', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('Title for Team Group list for group page. This will appear at left sidebar', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'team_group_title_singular',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('Singular Title for %s (Team Group) List', 'fixter'), $team_group_title_singular ),
			'default'  		=> esc_attr__('Team Group', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('Title for Team Group list for group page. This will appear at left sidebar', 'fixter').'</div>',
		),
		array(
			'id'     		=> 'team_group_slug',
			'type'    		=> 'text',
			'title'   		=> sprintf( esc_attr__('URL Slug for %s (Team Group) Link', 'fixter'), $team_group_title_singular ),
			'default'  		=> esc_attr__('team-group', 'fixter'),
			'after'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will change the URL slug for Team Group link', 'fixter').'</div>',
		),
		
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Minify Options', 'fixter'),
			'after'  		=> '<small>'. esc_attr__('Options to minify HTML/JS/CSS files', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'minify',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Minify JS and CSS files', 'fixter'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('This will generate MIN version of all CSS and JS files. This will help you to lower the page load time. You can use this if the Theme Options are not working', 'fixter').'</div>',
        ),
		
		// Thumb Image Size Options
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Box Image Size Options', 'fixter'),
			'after'  		=> '<small>'. esc_attr__('Set Image size for Portfolio, Team Member and Blog boxes.', 'fixter').'</small>',
		),
		array(
			'id'     	=> 'img-size-blog',
			'type'    	=> 'preyantechnosys_dimensions',
			'title'  	=> esc_attr__( 'Blog Box - Thumb image size', 'fixter' ),
			'desc'      => esc_attr__( 'Set width and height of the Blog Box image in Visual Composer element (on frontend site)', 'fixter' ),
			'after'     => '<p><a href="'. esc_url('http://www.davidtan.org/wordpress-hard-crop-vs-soft-crop-difference-comparison-example/') .'" target="_blank">'. esc_attr__('Click here to know more about hard crop.', 'fixter') . '</a></p><p>' . esc_attr__('After changing these settings you may need to %1$s regenerate your thumbnails %2$s.', 'fixter') . ' <a href="'. esc_url('http://wordpress.org/extend/plugins/regenerate-thumbnails/') .'" target="_blank">' . esc_attr__('You can use "Regenerate Thumbnails" plugin.', 'fixter') . '</a></p>',
			'default' 	=> array(
				'width'		=> '1170',
				'height'	=> '550',
				'crop'		=> 'yes',
			),
        ),
		
		array(
			'id'     	=> 'img-size-blog-left',
			'type'    	=> 'preyantechnosys_dimensions',
			'title'  	=> esc_attr__( 'Blog Box - Thumb image size  (For Left Image and Right Content Only)', 'fixter' ),
			'desc'      => esc_attr__( 'Set width and height of the Blog Box image in Visual Composer element (on frontend site)', 'fixter' ),
			'after'     => '<p><a href="'. esc_url('http://www.davidtan.org/wordpress-hard-crop-vs-soft-crop-difference-comparison-example/') .'" target="_blank">'. esc_attr__('Click here to know more about hard crop.', 'fixter') . '</a></p><p>' . esc_attr__('After changing these settings you may need to %1$s regenerate your thumbnails %2$s.', 'fixter') . ' <a href="'. esc_url('http://wordpress.org/extend/plugins/regenerate-thumbnails/') .'" target="_blank">' . esc_attr__('You can use "Regenerate Thumbnails" plugin.', 'fixter') . '</a></p>',
			'default' 	=> array(
				'width'		=> '520',
				'height'	=> '300',
				'crop'		=> 'no',
			),
        ),
		
		array(
			'id'     	=> 'img-size-blog-top',
			'type'    	=> 'preyantechnosys_dimensions',
			'title'  	=> esc_attr__( 'Blog Box - Thumb image size  (For Top Image Bottom Content Content Only)', 'fixter' ),
			'desc'      => esc_attr__( 'Set width and height of the Blog Box image in Visual Composer element (on frontend site)', 'fixter' ),
			'after'     => '<p><a href="'. esc_url('http://www.davidtan.org/wordpress-hard-crop-vs-soft-crop-difference-comparison-example/') .'" target="_blank">'. esc_attr__('Click here to know more about hard crop.', 'fixter') . '</a></p><p>' . esc_attr__('After changing these settings you may need to %1$s regenerate your thumbnails %2$s.', 'fixter') . ' <a href="'. esc_url('http://wordpress.org/extend/plugins/regenerate-thumbnails/') .'" target="_blank">' . esc_attr__('You can use "Regenerate Thumbnails" plugin.', 'fixter') . '</a></p>',
			'default' 	=> array(
				'width'		=> '650',
				'height'	=> '510',
				'crop'		=> 'yes',
			),
        ),
		
		array(
			'id'     	=> 'img-size-portfolio',
			'type'    	=> 'preyantechnosys_dimensions',
			'title'  	=> sprintf( esc_attr__( '%s (Portfolio) Box - Thumb image size', 'fixter' ), $pf_title_singular ),
			'desc'      => esc_attr__( 'Set width and height of the Portfolio Box image in Visual Composer element (on frontend site)', 'fixter' ),
			'after'     => '<p><a href="'. esc_url('http://www.davidtan.org/wordpress-hard-crop-vs-soft-crop-difference-comparison-example/') .'" target="_blank">'. esc_attr__('Click here to know more about hard crop.', 'fixter') . '</a></p><p>' . esc_attr__('After changing these settings you may need to %1$s regenerate your thumbnails %2$s.', 'fixter') . ' <a href="'. esc_url('http://wordpress.org/extend/plugins/regenerate-thumbnails/') .'" target="_blank">' . esc_attr__('You can use "Regenerate Thumbnails" plugin.', 'fixter') . '</a></p>',
			'default' 	=> array(
				'width'		=> '610',
				'height'	=> '750',
				'crop'		=> 'yes',
			),
        ),
		array(
			'id'     	=> 'img-size-team-member',
			'type'    	=> 'preyantechnosys_dimensions',
			'title'  	=> sprintf( esc_attr__( '%s (Team Member) Box - Thumb image size', 'fixter' ), $team_member_title_singular ),
			'desc'      => esc_attr__( 'Set width and height of the Portfolio Box image in Visual Composer element (on frontend site)', 'fixter' ),
			'after'     => '<p><a href="'. esc_url('http://www.davidtan.org/wordpress-hard-crop-vs-soft-crop-difference-comparison-example/') .'" target="_blank">'. esc_attr__('Click here to know more about hard crop.', 'fixter') . '</a></p><p>' . esc_attr__('After changing these settings you may need to %1$s regenerate your thumbnails %2$s.', 'fixter') . ' <a href="'. esc_url('http://wordpress.org/extend/plugins/regenerate-thumbnails/') .'" target="_blank">' . esc_attr__('You can use "Regenerate Thumbnails" plugin.', 'fixter') . '</a></p>',
			'default' 	=> array(
				'width'		=> '450',
				'height'	=> '450',
				'crop'		=> 'yes',
			),
        ),
		
		/* Icon library selector - Only selected libraries will be loaded in VC element */
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Enabled Icon Library', 'fixter'),
			'after'  		=> '<small>'. esc_attr__('Select icon library that you like to load in Visual Composer elements like "ThemetechMount Icon", "ThemetechMount Call to Action", "ThemetechMount Service Box" etc.', 'fixter').'</small>',
		),
		array(
			'id'        => 'icon_library',
			'type'      => 'checkbox',
			'title'     => esc_attr__('Select icon library to load', 'fixter'),
			'options'   => array(
					'linecons'       => esc_attr__( 'Linecons', 'fixter' ),
					'themify'        => esc_attr__( 'Themify icons', 'fixter' ),
					'kw_fixter'        => esc_attr__( 'Fixter icons', 'fixter' ),
			),
			'default'   => array( 'linecons', 'themify', 'kw_fixter' ),
			'after'    	=> '<small>'.esc_attr__('Select icon library that you want to load. This will reduce load time of Visual Composer elements. But you can see only selected libraries in the icon dropdown.', 'fixter').'</small>',
		),
		
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Show or hide Demo Content Setup option', 'fixter'),
			'after'  		=> '<small>'. esc_attr__('Show or hide "Demo Content Setup" option under "Layout Settings" tab', 'fixter').'</small>',
		),
		array(
			'id'     		=> 'hide_demo_content_option',
			'type'   		=> 'switcher',
			'title'   		=> esc_attr__('Hide "Demo Content Setup" option', 'fixter'),
			'default' 		=> false,
			'label'  		=> '<div class="cs-text-muted"><br>'. esc_attr__('Show or hide "Demo Content Setup" option under "Layout Settings" tab', 'fixter').'</div>',
        ),
		
		
	)
);


// Custom Code
$tm_framework_options[] = array(
	'name'   => 'custom_code', // like ID
	'title'  => esc_attr__('Custom Code', 'fixter'),
	'icon'   => 'fa fa-pencil-square-o',
	'fields' => array( // begin: fields
		
		// Custom Code
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Custom Code', 'fixter'),
			'after'  		=> '<small>'. esc_attr__('Add custom JS and CSS code', 'fixter').'</small>',
		),
		array(
			'id'       		 => 'custom_css_code',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('CSS Code', 'fixter'),
			'after'  		 => '<div class="cs-text-muted"><br>'. esc_attr__('Add custom CSS code here. This code will be appear at bottom of the dynamic css file so you can override any existing style', 'fixter').'</div>',
        ),
		array(
			'id'       => 'custom_js_code',
			'type'     => 'wysiwyg',
			'title'    => esc_attr__('JS Code', 'fixter'),
			'settings' => array(
				'textarea_rows' => 5,
				'tinymce'       => false,
				'media_buttons' => false,
				'quicktags'     => false,
			),
			'after'    => '<div class="cs-text-muted"><br>'. esc_attr__('Paste your JS code here', 'fixter').'</div>',
		),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Custom HTML Code', 'fixter'),
			'after'  		=> '<small>'. sprintf(__('Custom HTML Code for different areas. You can paste <strong>Google Analytics</strong> or any tracking code here', 'fixter'),'<strong>', '</strong>').'</small>',
		),
		array(
			'id'       => 'customhtml_head',
			'type'     => 'wysiwyg',
			'title'    => esc_attr__('Custom Code for &lt;head&gt; tag', 'fixter'),
			'settings' => array(
				'textarea_rows' => 5,
				'tinymce'       => false,
				'media_buttons' => false,
				'quicktags'     => false,
			),
			'after'    => '<div class="cs-text-muted"><br>'. esc_attr__('This code will appear in &lt;head&gt; tag. You can add your custom tracking code here', 'fixter').'</div>',
		),
		array(
			'id'       => 'customhtml_bodystart',
			'type'     => 'wysiwyg',
			'title'    => esc_attr__('Custom Code after &lt;body&gt; tag', 'fixter'),
			'settings' => array(
				'textarea_rows' => 5,
				'tinymce'       => false,
				'media_buttons' => false,
				'quicktags'     => false,
			),
			'after'    => '<div class="cs-text-muted"><br>'. esc_attr__('This code will appear after &lt;body&gt; tag. You can add your custom tracking code here', 'fixter').'</div>',
		),
		array(
			'id'       => 'customhtml_bodyend',
			'type'     => 'wysiwyg',
			'title'    => esc_attr__('Custom Code before &lt;/body&gt; tag', 'fixter'),
			'settings' => array(
				'textarea_rows' => 5,
				'tinymce'       => false,
				'media_buttons' => false,
				'quicktags'     => false,
			),
			'after'    => '<div class="cs-text-muted"><br>'. esc_attr__('This code will appear before &lt;/body&gt; tag. You can add your custom tracking code here', 'fixter').'</div>',
		),
		
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Custom Code for Login page', 'fixter'),
			'after'  		=> '<small>'. esc_attr__('Custom Code for Login pLogin page only. This will effect only login page and not effect any other pages or admin section', 'fixter').'</small>',
		),
		array(
			'id'       		 => 'login_custom_css_code',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('CSS Code for Login Page', 'fixter'),
			'after'  		 => '<div class="cs-text-muted"><br>'. esc_attr__('Write your custom CSS code here', 'fixter').'</div>',
        ),
		array(
			'type'       	=> 'heading',
			'content'    	=> esc_attr__('Advanced Custom CSS Code Option', 'fixter'),
		),
		array(
			'id'       		 => 'custom_css_code_top',
			'type'     		 => 'textarea',
			'title'    		 =>  esc_attr__('CSS Code (at top of the file)', 'fixter'),
			'after'  		 => '<div class="cs-text-muted"><br>'. esc_attr__('Add custom CSS code here. This code will be appear at top of the css code. specially for "@import" style tag.', 'fixter').'</div>',
        ),
		
		
	)
);


// Backup
$tm_framework_options[]   = array(
	'name'     => 'backup_section',
	'title'    => esc_attr__('Backup / Restore', 'fixter'),
	'icon'     => 'fa fa-shield',
	'fields'   => array(
		array(
			'type'    => 'notice',
			'class'   => 'warning',
			'content' => esc_attr__('You can save your current options. Download a Backup and Import', 'fixter'),
		),
		array(
			'type'    => 'backup',
		),
	)
);