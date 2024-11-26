<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

$fixter_theme_options		   = get_option('fixter_theme_options');
$pf_cat_title_singular     = ( !empty($fixter_theme_options['pf_cat_title_singular']) ) ? esc_attr($fixter_theme_options['pf_cat_title_singular']) : esc_attr__('Portfolio Category', 'fixter') ;
$team_group_title_singular = ( !empty($fixter_theme_options['team_group_title_singular']) ) ? esc_attr($fixter_theme_options['team_group_title_singular']) : esc_attr__('Team Group', 'fixter') ;



// Taxonomy Options
$tm_taxonomy_options     = array();


// For Portfolio Category
$tm_taxonomy_options[]   = array(
	'id'       => 'tm_taxonomy_options',
	'taxonomy' => 'tm_portfolio_category', // category, post_tag or your custom taxonomy name
	'fields'   => array(
		array(
			'id'            => 'tax_featured_image',
			'type'          => 'upload',
			'title' => esc_attr__('Featured Image URL', 'fixter'),
			'after' => '<p>' . sprintf( esc_attr__('Paste featured image URL for this %s. Please upload the image first from media section.', 'fixter'), $pf_cat_title_singular ) . '</p>',
			'settings'      => array(
				'upload_type'  => 'image',
				'button_title' => esc_attr__('Upload', 'fixter'),
				'frame_title'  => esc_attr__('Select an image', 'fixter'),
				'insert_title' => esc_attr__('Use this image', 'fixter'),
			),
		),
	),
);

// For Team Group
$tm_taxonomy_options[]   = array(
	'id'       => 'tm_taxonomy_options',
	'taxonomy' => 'tm_team_group', // category, post_tag or your custom taxonomy name
	'fields'   => array(
		array(
			'id'            => 'tax_featured_image',
			'type'          => 'upload',
			'title' => esc_attr__('Featured Image URL', 'fixter'),
			'after' => '<p>' . sprintf( esc_attr__('Paste featured image URL for this %s. Please upload the image first from media section.', 'fixter'), $pf_cat_title_singular ) . '</p>',
			'settings'      => array(
				'upload_type'  => 'image',
				'button_title' => esc_attr__('Upload', 'fixter'),
				'frame_title'  => esc_attr__('Select an image', 'fixter'),
				'insert_title' => esc_attr__('Use this image', 'fixter'),
			),
		),
	),
);
