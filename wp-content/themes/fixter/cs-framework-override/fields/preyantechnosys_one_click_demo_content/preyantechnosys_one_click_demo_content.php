<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Padding
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_preyantechnosys_one_click_demo_content extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output(){

    echo wp_kses( $this->element_before(),
		array(
			'div' => array(
				'class' => array(),
				'id'    => array(),
			),
			'a' => array(
				'href'  => array(),
				'title' => array(),
				'class' => array()
			),
			'br'     => array(),
			'em'     => array(),
			'strong' => array(),
			'span'   => array(
				'class'  => array(),
			),
			'ol'     => array(),
			'ul'     => array(
				'class'  => array(),
			),
			'li'     => array(
				'class'  => array(),
			),
		)
	);

	$value        = $this->element_value();
   
   
   
   wp_enqueue_style(
		'preyantechnosys-one-click-demo-setup',
		get_template_directory_uri() . '/cs-framework-override/fields/preyantechnosys_one_click_demo_content/preyantechnosys_one_click_demo_content.css',
		time(),
		true
	);
   wp_enqueue_script(
		'preyantechnosys-one-click-demo-setup',
		get_template_directory_uri() . '/cs-framework-override/fields/preyantechnosys_one_click_demo_content/preyantechnosys_one_click_demo_content.js',
		array( 'jquery' ),
		time(),
		true
	);
   
   
   
   
   
	// CONTENT START
	$error           = array();
	$button_disabled = "";
	
	// checking if "Fixter Demo Content Setup" plugin is installed
	if( class_exists('preyantechnosys_fixter_one_click_demo_setup') ){
		$button_disabled = "";
	} else {
		$button_disabled = "disabled";
		$error[]         = esc_attr__('The "Fixter Demo Content Setup" plugin is not installed or activated. This plugin is required to Import Demo Content.', 'fixter');
	}
	
	// checking if "Contact Form 7" plugin is installed
	if( !defined('WPCF7_VERSION') ){
		$button_disabled = "disabled";
		$error[]         = esc_attr__('The "Contact Form 7" plugin is not installed or activated. This plugin is required to Import Demo Content. So please install it.', 'fixter');
	}
	
	
	
	?>

	<div class="preyantechnosys-one-click-demo-content-wrapper">
		
		<?php if( !empty($_GET['tmdemosuccess']) && $_GET['tmdemosuccess']=='yes' ) : ?>
		<div class="prt-demo-setup-success-message">
			<i class="fa fa-check"></i> &nbsp; 
			<?php esc_attr_e('Demo setup done successfully! Now you can start to edit your site', 'fixter'); ?>
		</div>
		<?php endif; ?>
		
		<input type="button" class="button button-primary" id="preyantechnosys_one_click_demo_content_btn" value="Demo Content Setup" />
		
		
		<div id="import-demo-data-results-wrapper" style="display:none;">
		
			<?php if( count($error)>0 ){ ?>
			
			
				<div class="alert-info prt-one-click-error-message">
					<h4><?php esc_attr_e( 'Please correct the errors given below:', 'fixter' ) ?></h4>
					<ul>
					<?php
					foreach( $error as $line ){
						echo '<li>' . sprintf( esc_attr__('%s ', 'fixter' ) , $line ) . '</li>';
					}
					?>
					</ul>
					<a href="<?php echo esc_url( admin_url( 'themes.php?page=tgmpa-install-plugins' ) ) ?>"><?php esc_attr_e('Click here to install the plugin(s)', 'fixter' ); ?></a> &nbsp; 
					<a href="#" class="prt-one-click-error-close"><?php esc_attr_e('Close', 'fixter' ); ?></a>
				</div>
			
			
			<?php } else { ?>
			
			
				<?php
				if( function_exists('preyantechnosys_fixter_one_click_html') ){
					preyantechnosys_fixter_one_click_html();
				}
				?>
			
		
			
			
			<?php }; ?>
			
		</div>
		
	<div class="clear"></div>
	
	</div><!-- .preyantechnosys-one-click-demo-content-wrapper -->
		
   <?php
   
   // CONTENT END
   
   
	
	
	
	
	
	
    echo wp_kses( $this->element_after(),
		array(
			'div' => array(
				'class' => array(),
				'id'    => array(),
			),
			'a' => array(
				'href'  => array(),
				'title' => array(),
				'class' => array()
			),
			'br'     => array(),
			'em'     => array(),
			'strong' => array(),
			'span'   => array(
				'class'  => array(),
			),
			'ol'     => array(),
			'ul'     => array(
				'class'  => array(),
			),
			'li'     => array(
				'class'  => array(),
			),
		)
	);

  }

}