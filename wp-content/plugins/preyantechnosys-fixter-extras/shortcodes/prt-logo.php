<?php
// [prt-logo]
if( !function_exists('preyantechnosys_sc_logo') ){
function preyantechnosys_sc_logo( $atts, $content=NULL ){
	
	
	
	$fixter_theme_options = get_option('fixter_theme_options');
	
	if( !empty($fixter_theme_options['logotype']) ){
	
		$return = '<span class="prt-sc-logo prt-sc-logo-type-'.$fixter_theme_options['logotype'].'">';
		
		if( $fixter_theme_options['logotype']=='image' ){
			if( isset($fixter_theme_options['logoimg']) && is_array($fixter_theme_options['logoimg']) ){
				
				// standard logo
				if( isset($fixter_theme_options['logoimg']['full-url']) && trim($fixter_theme_options['logoimg']['full-url'])!='' ){
					$image = $fixter_theme_options['logoimg']['full-url'];
					$return .= '<img class="preyantechnosys-logo-img standardlogo" alt="' . get_bloginfo( 'name' ) . '" src="'.$fixter_theme_options['logoimg']['full-url'].'">';
				
				} else if( isset($fixter_theme_options['logoimg']['thumb-url']) && trim($fixter_theme_options['logoimg']['thumb-url'])!='' ){
					$image = $fixter_theme_options['logoimg']['thumb-url'];
					$return .= '<img class="preyantechnosys-logo-img standardlogo" alt="' . get_bloginfo( 'name' ) . '" src="'.$fixter_theme_options['logoimg']['thumb-url'].'">';

				} else if( isset($fixter_theme_options['logoimg']['id']) && trim($fixter_theme_options['logoimg']['id'])!='' ){
					$image   = wp_get_attachment_image_src( $fixter_theme_options['logoimg']['id'], 'full' );
					$return .= '<img class="preyantechnosys-logo-img standardlogo" alt="' . get_bloginfo( 'name' ) . '" src="'.$image[0].'" width="'.$image[1].'" height="'.$image[2].'">';
					
					
				}
				
				
				// stikcy logo
				if( isset($fixter_theme_options['logoimg_sticky']) && is_array($fixter_theme_options['logoimg_sticky']) ){
					
					if( isset($fixter_theme_options['logoimg_sticky']['full-url']) && trim($fixter_theme_options['logoimg_sticky']['full-url'])!='' ){
						$sticky_image   = $fixter_theme_options['logoimg_sticky']['full-url'];
						$return .= '<img class="preyantechnosys-logo-img stickylogo" alt="' . get_bloginfo( 'name' ) . '" src="'.$fixter_theme_options['logoimg_sticky']['full-url'].'">';
					
					} else if( isset($fixter_theme_options['logoimg_sticky']['thumb-url']) && trim($fixter_theme_options['logoimg_sticky']['thumb-url'])!='' ){
						$sticky_image   = $fixter_theme_options['logoimg_sticky']['thumb-url'];
						$return .= '<img class="preyantechnosys-logo-img stickylogo" alt="' . get_bloginfo( 'name' ) . '" src="'.$fixter_theme_options['logoimg_sticky']['thumb-url'].'">';
					
					} else if( isset($fixter_theme_options['logoimg_sticky']['id']) && trim($fixter_theme_options['logoimg_sticky']['id'])!='' ){
						$sticky_image   = wp_get_attachment_image_src( $fixter_theme_options['logoimg_sticky']['id'], 'full' );
						$return .= '<img class="preyantechnosys-logo-img stickylogo" alt="' . get_bloginfo( 'name' ) . '" src="'.$sticky_image[0].'" width="'.$sticky_image[1].'" height="'.$image[2].'">';
						
					}
					
				}
				
				
			}
		} else {
			if( !empty($fixter_theme_options['logotext']) ){
				$return = $fixter_theme_options['logotext'];
			}
		}
		
		$return .= '</span>';
		
	}
	
	return $return;
}
}
add_shortcode( 'prt-logo', 'preyantechnosys_sc_logo' );