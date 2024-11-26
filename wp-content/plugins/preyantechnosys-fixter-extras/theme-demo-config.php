<?php

if ( ! function_exists( 'ocdi_import_files' ) ) {
  function ocdi_import_files() {
    return array(
      array(
        'import_file_name'             => 'Demo1',
        'categories'                   => array( 'Demo1 Site' ),
        'local_import_file'            => plugin_dir_path( __FILE__ ) . 'demo-content/demo.xml',
        'import_preview_image_url'     => plugin_dir_url( __FILE__ ) . 'demo-content/images/layout-demo1.png',
        'preview_url'                  => 'https://www.themetechmount.com/fixter/',
        'has_slider'                   => true,
      ),
    );
  }
}
add_filter( 'ocdi/import_files', 'ocdi_import_files' );

// Automatically assign "Front page", "Posts page" and menu locations after the importer is done
// Import Revolution Slider if plugin is active
if ( ! function_exists( 'fixter_demo_after_import' ) ) {
  function fixter_demo_after_import($selected_import) {
  	// Assign menus to their locations.
  	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer menu', 'nav_menu' );
    $topbar_menu = get_term_by( 'name', 'Topbar menu', 'nav_menu' );

  	set_theme_mod( 'nav_menu_locations', array(
  		'preyantechnosys-main-menu' => $main_menu->term_id,
        'preyantechnosys-footer-menu' => $footer_menu->term_id,
  		)
  	);
	
	// Import custom configuration
	$content = file_get_contents($selected_import["local_import_file"] );
		
	if ( false !== strpos( $content, '<wp:theme_custom>' ) ) {
		preg_match('|<wp:theme_custom>(.*?)</wp:theme_custom>|is', $content, $config);
		if ($config && is_array($config) && count($config) > 1){
			$config = unserialize(base64_decode($config[1]));
			if (is_array($config)){
				$configs = array(
						'page_for_posts',
						'show_on_front',
						'page_on_front',
						'posts_per_page',
						'sidebars_widgets',
					);
				foreach ($configs as $item){
					if (isset($config[$item])){
						if( $item=='page_for_posts' || $item=='page_on_front' ){
							$page = get_page_by_title( $config[$item] );
							if( isset($page->ID) ){
								$config[$item] = $page->ID;
							}
						}
						update_option($item, $config[$item]);
					}
				}
				if (isset($config['sidebars_widgets'])){
					$sidebars = $config['sidebars_widgets'];
					update_option('sidebars_widgets', $sidebars);
					// read config
					$sidebars_config = array();
					if (isset($config['sidebars_config'])){
						$sidebars_config = $config['sidebars_config'];
						if (is_array($sidebars_config)){
							foreach ($sidebars_config as $name => $widget){
								update_option('widget_'.$name, $widget);
							}
						}
					}
				}						
			}
		}
	}
			
    // Configure permalinks
    global $wp_rewrite;
  	$wp_rewrite->set_permalink_structure( '/%postname%/' );
    flush_rewrite_rules();

    // Import Slider Revolution
    if ( class_exists( 'RevSlider' ) ) {
		
		// List of slider backup ZIP that we will import
			$slider_array	= array(
				plugin_dir_path( __FILE__ ) . 'demo-content/sliders/mainslider.zip',
				plugin_dir_path( __FILE__ ) . 'demo-content/sliders/mainslider-two.zip',
				plugin_dir_path( __FILE__ ) . 'demo-content/sliders/mainslider-home3.zip',
			);

        $slider = new RevSlider();

        foreach($slider_array as $filepath){
          $slider->importSliderFromPost(true,true,$filepath);
        }

        echo ' Slider processed';
    }
	
	
	/**** Breacrumb NavXT related changes ****/
	$breadcrumb_navxt_settings						= array();
	$breadcrumb_navxt_settings['hseparator']		= ' &gt; ';  // General > Breadcrumb Separator
	$breadcrumb_navxt_settings['Hhome_template']	= '<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to %title%." href="%link%" class="%type%" bcn-aria-current><span property="name">%htitle%</span></a><meta property="position" content="%position%"></span>';  // General > Home Template
	$breadcrumb_navxt_settings['Hhome_template_no_anchor']	= '<span property="itemListElement" typeof="ListItem"><span property="name" class="%type%">%htitle%</span><meta property="url" content="%link%"><meta property="position" content="%position%"></span>';  // General > Home Template
	
	// Getting existing settings
	$bcn_options    = get_option('bcn_options');
	if( !empty($bcn_options) && is_array($bcn_options) ){
		// options already exists... so merging changes with existing options
		$breadcrumb_navxt_settings = array_merge($bcn_options, $breadcrumb_navxt_settings);
	}
	update_option( 'bcn_options', $breadcrumb_navxt_settings );

	/**** START - Edit "Hello World" post and change *****/
	$hello_world_post = get_post(1);
	if( !empty($hello_world_post) ){
		$newDate = array(
			'ID'		=> '1',
			'post_date'	=> "2014-12-10 0:0:0" // [ Y-m-d H:i:s ]
		);
		
		wp_update_post($newDate);
	}
	
	
  }
}
add_action( 'ocdi/after_import', 'fixter_demo_after_import' );

function fixter_demo_before_import( $selected_import ) {
	
	$theme_options = array();
	
	$theme_options['Demo1']	= 'eNrtPWuT20Zy31Wl_zCmKhervNzFk69d86zIukclthRrXUkq5WINwSEJLwjgXDBwKZ5qf1D-Rn5ZuueFGRDE7uq0jniJVvKSMz09Pd09Pd09DZhOvPFg8rGcjFwnvfImTqMsyYreZTkZTnovHGcYLpf4zfWM7mqXKYjlchE4IYcIXDCCRVm6oMXewuJ6-MNhxgZMf1UwG3DpLgdLqqabZ8WCFTML4vs_4A9-G0x6Cd1n2wq_jCa95TZJdvGC8dHy-wwbZixhG5ZWZe-STtzJx3jiiOFrRgF_7_IOBlww7lWSzWkym9PoZlVk23SB8EPkTDjpxRu64qidSU_SwpvihdEIOAuWM1oZbUBJnpVxFWep0erCb1pVNFojZUYH8jD-qzkTTG7ziP8RVMOEcZoCj06IaNCAJEPGx5uViXxUtwOJs2hbVtnGBFwwjVgxWCzIaJnh_BQp-shXsKSbONnL2d7TKivXMR_kgxoBb7Z5vwbxYKpXRUyTM_JcJ5bcsiqO6BkpaVr2S5h-KdHcUoAR6xxcIo9W24QWStEr9qHqVwWMWWaFSSYsD6nrK4ZcMNXukI9yYYFxyvprFq_WlezzHYUxYVXFin6Z0yhOOWdggNPGTC_whp7elDRJ-kiq0HCOVEgtEJRIGa-ybJUwLgEPSJ1cJ8CVuFxcz-bbqsrSY9vV4TTf9HU_YKolw2Wmu_sGixpoBhbcOrtlGipwB_OlsB-wzrU7w10JDNAyHreJ-Ae6SuOKfjFcIvZHx0UcBI8Xcc27o1Lk7PJOlF1BB7sGT8cu_zTZ5Q06DMgTaldwouzq0C7fezp2hVwnyi7nOLu80dOxa3Ca7HI7TL3nPg27POGsnhyvBsd4BcS5ztMYes9Dkkv0X29ZQ8XEAeMpb6Pczk9TBcMOFRw8mQpC2FaBl9nNq_87zvdxXsFYCDxXrPr_g-A-tYJ1y_B8VsUVttLJ4HSOgc6FLee06JtxNDCoUDxVXDCz-arOcMAaFrS4wbyIslECpju8HwOZ66rKy8nFxW63O6_WwNGKQZwOQ6rzKNtcXCzjDyC1i13el7v4ggOVF_O45FAXHFt5sYQgvALBXCLt89X5r_nqYZkDYFGa9evvn55C4GokI8SmSjn8j_YhOHNQajULoXW3jishJs8C4XHrrDUvITJAHHZN00XCilkcCcp9WMlVTKKEluW3vbyo-oplfQTpw0K2venVRTzlU_otaGZRkpWcXCJ_3I1MXDBqbDyPhZLgnSY_-UZcXFaWloip1PKa6Ty9wHmVWkoXCKXj1AcNmBaWuWzozwV71cTS2AHYdpPO6qwc8GIwG2hJmJpVMHqTZ7HQAZjV9RxuQ7zxMcB-nXcw4HHxVZbfs5FwegOqsSrcigXM9rVzxn9eKnbJIR0KFjSAGpg9V2Mm8NcLQ_h97oV8BkzDmIPRkJgGJlCpEwmE8uaQYkUw-mqbKFUCGL6zaVSB-iTx9AoMdGoqWq0M03_JooqCXCKRCbm6QLgpS2_BKmZk_RfiBWQZL6v1GaGwmoImMb26QIT3IH2zoXFSY7yiZF2w5bc9bK6ySZwus-_YB7rJE4YWqTdttlxcXdCpmOlim0wbMuB2U6_eDcNPX_01TW7IdUbefMhZUbVQXFyxBPwdPwgHw9HY6U2_cVxc8rUb-C8JNBFoG2tS_5PjzlwiOHf6mOEqf2khvkPbgxaYI4qO6PCEbKo6wOjzYmzCfKaU8D2GHTdPBLacFUT8-lvNPC6C7xl3eOYFZz5syHPHfSlsfmAssKz2CZNrWLAl3SbVARPsrWtaOteAOskgIOxICg0-IQhQR2tXaGWx_1SDpw6-ed7T8w03-lwiKrab-Ynxze_gm_8kfMN1a77dxmzXsttDax8b-QUv1CbWYLm8U5xnFTex84krbauA2W4s22rddngDG1OLIzGwHYnzUPgSlvzXeCVZ45HU7lmplkMXt7MKISNa0VwiUjbtNa3YKiv25FURreNbVk7IwYiKrtQImPKarhrA6J1qYLDiFT8h42XMForOd9BakrqdwAHCCjnXyBhOt9U6K9R0wMFXvKFJnq_uWWeWxoy19yZ7TbY3fXgD5D6O85NCyArOFtwTyUwN_1LuSO89-bzBmQ9cJ98Y1jP0xcnn-zKrleq0VjtH7K2FRkLCGqPtQMHkNr-EXWXVPleUav6oLumCwTzvKHgrcSbtBXb-_VxcqwTOk-Q7hoJP_Oqbwr7_yFwnE7oWYEJq5EhiqzUYh_62SDjvg08I8Lc53qeXF57j-Reuc4ET9x2374bOB_h3novVyFIJNdVw8PmmElPIWJ3rx4Z-sO1AECrNF_3ZvAXGUeGSZUnAAYyjm70EGoXKWojm2X12ZdwG2TQveke6Z-Kvcz4evNSqIUSpCWlKtFY9S5q1ATEZz1tl_rrBK3ulXqjrcRiY3_UsTvNtpVZ_DVuX_BuccuR6zVLyBl3y83NlK8UI3Boq3VZbrrHmr8Q7X9Ek-RKCB8wzxB_Y4rF21A_PxF-QWvhS52bFKs3wQRx3kTIHkg062nRg0qtFfGvlbaq0NyU6ZnzYlpExan9bXvSmYFj-sSQVRqMYT8J_YIppQ9UxuzQzWTZQHGscjmUS4y9MEii6pUA8vwnEg-kGlKsLouxEQ1ww7LnKp15wMSRvNqxYsTTak9e0YFcX-fRq7U0hVFaBsXN1AQ3KIVAHjxW6-wLfT-wvW1ZWhKYKzaucR78oc40FGYFpghK4dqPyS1kqaryGQ1sqYjqeKkPJGD2iqc673exmKu1GlgmtRHZtDYj7Eao8z78Jccj_Hk4jTR_Arv3pNUsYHw-U-9ASTr9BrgzHIRmPAhdaw6kt3oNVyZI6d-R91lWx9JYlWc4evyaRz3m1WIDjUOp1HSZt7KV5bUuDLVwiRDYOPq_IEhqxdZZgFd-j1_d2uYwjdrBAAnL7XCeWLCkq5y07I39cMKsSL2inDLns69wcJqeUYXjRm_7xzTX515_fXr_Bba78bLk5ZOq0O4dt2ALYd9Q-HQdOm8noSoYOD0Hvc6t96VYPm4fmfZP5wdERzVxcqaPyPt4YTtrwbDBA__elNNF4JJYsUwfE2l1nG5alib4oEXiPZdrQHm3YilwiVB8PjYKXior4D3ncGH4kCYeA4PVcIvDfT9Ljie7hfSV5k2NHbl8wXlNgMzghMUrBfKqVu8McLtcp_xhw9w0PzLEosnyR7U5QgB01Te74aQQo-fVgmbQDd8an6KrpYb9VxtrRTmeV5Z_jVtKobvad1gUZ0feJrc24cbXWxk8sI6dwbGP79aYTpr9kOS1oJY0-Lkfl45V91oeiKgg4fRP7CdmEmofHd6jbrmzul_cQgI5uj5DsnR7J_umRHJweyeHpkTw4PZKHp0fy6PRIHn_BJHtHjhLnC6aZH4xZhc8IVvTe8qMacp59kNCumVwnOwbkPQTIb6RSTaDV8aosdLIboA2H2ajvQL0ygDuSBo58_lFCd9UYjg5Av5Cs78P9VKUQbi2cI8UhnN1xUVZquV1K4zZgTS6in8cdQ3BmJb1cXOoN-N-QlepK-293-b3QW-BzMjKIt9bUoXPN5UsvHvx91uLvD9WDwEclARDezJsFs0Df7FgD7hEH7oGDAV-sah97bjZcXI7wgWhp7ez1HJeFf7D2TmH49cPWc1btGEvlMDkKk46S3lRm3z0-BDXuEeI4GPBl3y8dkYk7wB8tE3tRHfvDMN5Zvhe3XCK6hjdcMH7-938RvEB95KVSTxYhwjR9HjH_gmnmc_IqSQifpCQQprPili3O8U5ww8iGLhjZxdWa5HjvlaVkvlwn7-BAoCm5hinSrNyXzdNO06xL2NWRONTaQ-cZTwUo0BbFQdUQzxzrYoEvr96_O1LvrPOSa8OqTqEYOV0sJAL9OIpIOC9iLDeqeXH41Iqn8ZVrqksyZIpM1i2Jfp5r0w9W401vjFc06szTPoeaD5duanWjpGqeZCuhy0m8ifUjW-KuwXcFgLw1BdqyHQh9w5_iSLebORIhK6tGEhfWO22yor4kgZ37E7QRbJTfOaBR5mXeygaiu_a3JElKq7y6X2HAZaMX4PUMQhDAXlddjKRoXbCKxklZ-xAKk6syWlg6NRNlvygZXFxW4zYdmX4Ihdswjhh_E0Wg3kSBDhiN2DzLbnqXMWcb1vrC_uQGK554QuyrPNmW-N2X1TggctChVIccpkzAVlBYY8k3mIcbDHCylM4TttCFCkCjqOKSi3ylvyD3hUClVX0tvpW6jFYYNfj4Pf94XCccy7jUM_BJsYCPriTkNV2VUmwRrZQplnVtMXLl7k6ak-ZKcD7co1ZQ4QUtkDAdMkZf7bTBwOwWTNuMgjEmmDusVeg-9qrFH1nnQ3noH-Vhp4COyfVOenTWKtpZ6zSgmmxt9jdZ2pzlkJ14S5pnRbXMkjib5UX2K4sqtfcawVQNh5tb78tAhC7KotZQ3FwiFSyBpS1MkmoI2Xm4b_GJDdm3y4qbBSujWbOgwmvD1DQ7rlLRQ9DagmH1qrodb0eLS5GHj6-vSZsERuKgVBxDzi61GcN0tDY4rlJOXFxoA6hmhlFuOqm1lTZKYu_QND0EHapnwl9Q0o3NfxA29CDeV7SoCKpuN8bgYRiBcd-zMl6l4Ch2IZTmqaFoponX2jaywFqPChDTezFGkJAvYRe16xGeb6K7XXfq4Ya-jHXtMaObGehwQS0GlNJS4TGk2DQ-Cm2JU1ZNkE7mu4_CimLlj-SAokSMdEsB-YEY2xjm1e6dXDA4wjIDxQHThqJvw9CZUQRz36FZNTeSSzvq4PwgHRyXR7zi_J-ZdI8k3aoCaNyAs_wdBdREdrACVwPc73uh5WFFkRWBE8xiulkx5SYpRmGBFnRa5V16xDxe1eVdQOPbLC-_XCJ_rkgCLk1JkviGEQjqCag6NJXVV8qOaQzSF27a2cBcMMnxpVD33BAPvc9QuwqTqdJYO_7EOpChuIf_X812NZ-DDVRZZwriLJUTjwqAZU4_ZtUawg-yRK6JKqd8-j4riv0ZgViApLIfzv9ozRYoqIIIfASI3ZTn5F3CaMlIVewJXdE4FaFjmUEkuYiXS4YhPrlheziOFuU51vPpAtV4wdSjBgcPQJv9UoBW_7ju5ztMbEY7ixS2wsxQR_LmY7JDkx5pmW1sgxYI3F38IGx56lYBy43WgOAJGxviKDILFHlvEWayYpdl3PErogOO8ayPwgIyTRjfNB0jzEXM5zma9AMQgzR2qzxMCwIZKw44rMortV8cWkcLX4Q8ByU3UrpRB0odAbVCCseRm7cX9tnSgdaMoh6G1XtcMFZMVCRxdPNgpP7DOFCHc51oRa7b8Gy6sS6KeD6fyxP2XmKlOdlFfbMy04jlDV3q1-eS9k0bEODUL7ZR1YdDva-2uDqguF7BodVfZ1U_oXOW6HmwOlI19vXBMun9KauVFkeWNGH2UDxU5KQz7J0lbK6eZZH5Ho1BD9ZTBPj2kkSfiMAFsYv6fLZmOBGYELKzjVwnfjvcVl4aSDCUzRZ3T1VcMPExZmiUp4Hplut1XFwSTPER-P0zPpFFXhvAyhOxMayrjYiNQt8uu92mfayf4zKpi2KfP2vAtHWLZCMWY_5cIoph7VEly3m4MdWda9cswsVE2PTnH79_8xN5_fbH99c__fz6-s9vf4RzyeXAgUakny7twWkFpzg_pOiO8WOnQnbs6J6AqjE4oSAc2JNqm7LFV4AqQFRq_rpiN2jy53Trzeb4o-9t7VVFJXiEmXgP6tgHQr-LN3iakW2RfK3dI55vPBe5S5rHJXeOYOjvRYb127c5S795T1M8VZwz-BefBfAhwA8D-DDAD0P4XDD_4t7Ly-fP5tli__H5M5nunBAH2ja0WMWp-HxHnj87lzI9I-e1gD9CBy-mElNPSK-HsxOcvXdGupK8DbQfJVwi5OGEDJz8A1wwGNVY0BZCG4ywk7sT4nJQk1xc8bkvkriT588QGbEbiTviw_icOzWDg6Ob-D0OyIU4IS-8kb8IR9BAOPUGK6wFeP7hAnzHwjTyRtF4cPmQBVlUppjwSRT72uwBSkVp8YTQeQmWrWJ8piUgCJ1_gM-gzxMShPixf4Pmps6mTwj_iObu37_uA_jLuuE_RAOO2mR_fdwYgoPKR8-TPXbEI8HJHfCR38NE3DpcIvsa2hII0S3iMk8oqHmccsnOkyy6QUnoN6VmMOo3M06e9OQ-4_3xcog_-gnufDnDM9jKLr2zHHCvAcS9V3VR04R2Degy2a4kTN4Cg4GxnhV9A42I2NlYmR3S8BYBeLAeDNyrlIUcpihxzbxP33T3sUe5XTY_8K1pdQThDdvgLIrsAW5zgKKlbm-CWYxBwiS6JlsGLUNs3gwOxu7rZw3rkZo9dbvNnFCmUWzOoByvoZn8wOO60kpoHWEOCsUYYyaDbPbwS2po7deBJX_bDgLyXDDSzk1xnH_E9lKFnk1Qmw7HHGMtUgzRdDiSDh214q6JNyt-DKB9qB8WDvmb5aq1yke4Q6enXmZuvPsgDNVFZVQIl0O9YuBOyNvC3hdhaMsUiMprncF3mjPIaFW-TN2egPs97fgHYfsK3IeuwNj4R2ZwW2cYDDtm4I93qRksJWmfI2hfRdApB3xWLuJ3t_OCFnsjG6sCQizhKM1LwTXbxMu9fqZa1YoZLp-LQdgLXg0gYzgs6SOiJaW38Yqi7Vwn4Bafw1fR-7tVdUm2ifidxPiXEnBGCPypnVwwHrzEt-gEYMfRg-z5M7XpJH2_1uQZVxSiE70G_miYJv4Kg9JGBcQxd9VT_uo_bzfztXBYd8D_70A_L8FZvQzhH7pk4KZejuDf2HF-XCcJ_7bc0byHq_pWJGDLNWMQ6KjDwqAPfdsSrxwamd8GCEsXjaskcZa3iMm43Gr0zmSQUB_mwn9vlFwn5EB3Jh7q5anfOVcbV1xciYtsackrT0THWL6qzQJ2RSA9E6-gUs0YsaqXpYmyDoyV9AtTHHX9V78K5aDf9RtP_Zkd1kPmJkb1HH7zFS2OyhZyjKIeRbcHKqdxsLqgWalpLlD_Tyh0NRKfVYNwV0en0Pg7W9QbXFwUDMblR6546nt-SUtoZLLthRvbWKbZrMtPvxHeqWH4vFxcnHJbUFPMyVxcsE02U69qzfJ60N3_XDCC_zGg';
					
									
	if ( !function_exists( 'prt_cs_decode_string' ) ) {
		function prt_cs_decode_string( $string ) {
			
			// decode the encrypted theme opitons
			$options = unserialize( gzuncompress( stripslashes( call_user_func( 'base'. '64' .'_decode', rtrim( strtr( $string, '-_', '+/' ), '=' ) ) ) ) );
	
			
			// changing image path with client website url so image will be fetched from client server directly
				$demo_domains = array(
									'https://themetechmount.com/fixter',
								);
				
				// getting current site URL
				$current_url = get_site_url() . '/';
				
			foreach( $options as $key=>$val ){
					if( !empty($val) && is_string($val) ){
						if( substr($val,0,7) == 'http://' ){
							$val = str_replace( $demo_domains, $current_url, $val );
							$options[$key] = $val;
						}
					}
				}
		
			return $options;
		}
	}
					
		$new_options = prt_cs_decode_string( $theme_options[$selected_import['import_file_name']] );
		
		update_option('fixter_theme_options', $new_options);
	
	
}
add_action( 'ocdi/before_content_import', 'fixter_demo_before_import' );


// Disable generation of smaller images (thumbnails) during the content import
add_filter( 'ocdi/regenerate_thumbnails_in_content_import', '__return_true' );

// Disable the branding notice
add_filter( 'ocdi/disable_pt_branding', '__return_true' );
?>