<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options       = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$options[]     = array(
  'title'      => 'ThemetechMount Special Shortcodes',
  'shortcodes' => array(
	
	//Site Tagline
	array(
		'name'      => 'prt-site-tagline',
		'title'     => esc_attr__('Site Tagline', 'fixter'),
		'fields'    => array(
			array(
				'type'    => 'content',
				'content' => esc_attr__('This shortcode will show the Site Tagline. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode. ', 'fixter'),
			),
      ),
    ),
	// Site Title
	array(
		'name'      => 'prt-site-title',
		'title'     => esc_attr__('Site Title', 'fixter'),
		'fields'    => array(

			array(
				'type'    => 'content',
				'content' => esc_attr__('This shortcode will show the Site Title. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode.', 'fixter'),
			),

      ),
    ),
	// Site URL
	array(
		'name'      => 'prt-site-url',
		'title'     => esc_attr__('Site URL', 'fixter'),
		'fields'    => array(

			array(
				'type'    => 'content',
				'content' => esc_attr__('This shortcode will show the Site URL. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode.', 'fixter'),
			),

      ),
    ),
	// Site LOGO
	array(
		'name'      => 'prt-logo',
		'title'     => esc_attr__('Site Logo', 'fixter'),
		'fields'    => array(

			array(
				'type'    => 'content',
				'content' => esc_attr__('This shortcode will show the Site Logo. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode.', 'fixter'),
			),

      ),
    ),
	// Current Year
	array(
		'name'      => 'prt-current-year',
		'title'     => esc_attr__('Current Year', 'fixter'),
		'fields'    => array(

			array(
				'type'    => 'content',
				'content' => esc_attr__('This shortcode will show the Current Year. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode.', 'fixter'),
			),

      ),
    ),
	// Footer Menu
	array(
		'name'      => 'prt-footermenu',
		'title'     => esc_attr__('Footer Menu', 'fixter'),
		'fields'    => array(

			array(
				'type'    => 'content',
				'content' => esc_attr__('This shortcode will show the Footer Menu. There are no options for this shortcode. So just click Insert Shortcode button below to add this shortcode.', 'fixter'),
			),

      ),
    ),
	// Skin Color
	array(
		'name'      => 'prt-skincolor',
		'title'     => esc_attr__('Skin Color', 'fixter'),
		'fields'    => array(

			array(
				'type'   	 => 'content',
				'content'	 => esc_attr__('This shortcode will show the Text in Skin Color', 'fixter'),
			),
			 array(
				'id'         => 'content',
				'type'       => 'text',
				'title'      => esc_attr__('Skin Color Text', 'fixter'),
				'after'   	 => '<div class="cs-text-muted"><br>'.esc_attr__('The content is this box will be shown in Skin Color', 'fixter').'</div>', 
			),

      ),
    ),
	// Dropcaps
	array(
		'name'      => 'prt-dropcap',
		'title'     => esc_attr__('Dropcap', 'fixter'),
		'fields'    => array(
			array(
				'type'   	 => 'content',
				'content'	 => esc_attr__('This will show text in dropcap style.', 'fixter'),
			),
			array(
				'id'        	=> 'style',
				'title'     	=> esc_attr__('Style', 'fixter'),
				'type'      	=> 'image_select',
				'options'    	=> array(
									''        => get_template_directory_uri() .'/inc/images/dropcap1.png',
									'square'  => get_template_directory_uri() .'/inc/images/dropcap2.png',
									'rounded' => get_template_directory_uri() .'/inc/images/dropcap3.png',
									'round'   => get_template_directory_uri() .'/inc/images/dropcap4.png',
								),
				'default'     	=> ''
			),
			array(
				'id'         	=> 'bgcolor',
				'type'       	=> 'select',
				'title'     	=> esc_attr__('Background Color', 'fixter'),
				'options'    	=> array(
									'white' 	    => esc_attr__('White', 'fixter'),
									'skincolor'     => esc_attr__('Skin Color', 'fixter'),
									'grey' 			=> esc_attr__('Grey', 'fixter'),
									'dark' 		    => esc_attr__('Dark', 'fixter'),
								),
				'class'         => 'chosen',
				'default'     	=> 'skincolor'
			),
			array(
				'id'         	=> 'color',
				'type'       	=> 'select',
				'title'     	=> esc_attr__('Color', 'fixter'),
				'options'    	=> array(
									'skincolor'     => esc_attr__('Skin Color', 'fixter'),
									'white' 	    => esc_attr__('White', 'fixter'),
									'grey' 			=> esc_attr__('Grey', 'fixter'),
									'dark' 		    => esc_attr__('Dark', 'fixter'),
								),
				'class'         => 'chosen',
				'default'     	=> 'skincolor'
			),
			 array(
				'id'         	=> 'content',
				'type'      	=> 'text',
				'title'     	=> esc_attr__('Text', 'fixter'),
				'after'   	 	=> '<div class="cs-text-muted"><br>'.esc_attr__('The Letter in this box will be shown Dropcapped', 'fixter').'</div>', 
			),

      ),
    ),
	
	
 
  ),
);



CSFramework_Shortcode_Manager::instance( $options );
