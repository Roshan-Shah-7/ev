<?php $preyantechnosys_header_menuarea_height = preyantechnosys_header_menuarea_height(); 
?>
.headerlogo,
.prt-header-icon, 
.prt-header-text-area,
.site-header .preyantechnosys-fbar-btn{
    height: <?php echo esc_attr($header_height); ?>px;
    line-height: <?php echo esc_attr($header_height); ?>px !important;
}
.prt-header-icon.prt-header-social-box a.prt-social-btn-link i,
.prt-header-icons .prt-header-search-link a, 
.prt-header-icons .prt-header-wc-cart-link a {
	color: rgba( <?php echo preyantechnosys_hex2rgb($mainMenuFontColor); ?> , 1) ;
}
.is_stuck .prt-header-icon.prt-header-social-box a.prt-social-btn-link i,
 
.is_stuck .prt-header-icons .prt-header-wc-cart-link a {
	color: rgba( <?php echo preyantechnosys_hex2rgb($stickymainmenufontcolor); ?> , 1) ;
}
@keyframes menu_sticky {
	0%   {margin-top:-120px;opacity: 0;}
	50%  {margin-top: -64px;opacity: 0;}
	100% {margin-top: 0;opacity: 1;}
}
/**
* Responsive Menu
* ----------------------------------------------------------------------------
*/
@media (max-width: <?php echo esc_attr($breakpoint); ?>px){
	/* Responsive Header bg color */
	<?php if( !empty($responsive_header_bg_custom_color) ) : ?>
	#masthead #site-header.site-header.prt-bgcolor-custom{
		background-color: <?php echo esc_attr($responsive_header_bg_custom_color); ?> !important;
	}
	<?php endif; ?>	
	/*** Header Section ***/
	.site-header-main.prt-wrap{
		margin:0 10px 0 15px;
		width: auto;
		display: block;
		padding-left: 0;
	}
	
.prt-header-style-infostack .site-header-main.prt-wrap{
		margin:0 0;
	}	
	.prt-header-style-infostack .container-customfull {
    margin: 0 15px;
}
.prt-mmmenu-override-yes.prt-bgcolor-darkgrey #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal, 
       .prt-bgcolor-darkgrey #site-header-menu #site-navigation div.nav-menu > ul{
        	background-color: var(--prt-secondarycolor);
        }   
	.site-header-main.prt-wrap .prt-wrap-cell {
		display: block;		
	}	
    .prt-header-icon{
        padding-right: 0px;
        padding-left: 10px;
        position: relative;
    } 
	.prt-header-icon.prt-header-wc-cart-link{
    	float: right;
    }  
	.prt-header-icon.prt-header-social-box,
	.prt-header-icon.prt-header-search-link{
    	float: left;
    } 
	.prt-header-style-classic #site-header-menu #site-navigation div.nav-menu > ul > li:hover > a, .prt-header-style-classic #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > a, .prt-header-style-classic #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a, .prt-header-style-classic #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_ancestor > a, .prt-header-style-classic #site-header-menu #site-navigation div.nav-menu > ul > li:hover > i, .prt-header-style-classic #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > i, .prt-header-style-classic #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > i, .prt-header-style-classic #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_ancestor > i {
		background-color: transparent;
	}
	.prt-header-style-classic-highlight .prt-header-text-area,
	.prt-header-icon.prt-header-social-box{
    	display: none;
    } 
    .site-title{
        width: inherit;
    }  
	.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget .prt-box-megamenu {
    display: none;
}
#site-header-menu #site-navigation .prt-header-icon a, #site-header-menu #site-navigation .preyantechnosys-fbar-btn a {
    font-size: 18px !important;
    padding-left: 0;
    line-height: 26px;
}
.prt-header-style-classic-two .prt-header-icons .prt-header-search-link a i:before {
	font-weight: 700;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget .prt-box-megamenu {
    padding: 20px 15px 0;
    position: relative;
    height: 150px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-menu-instablock .mega-sub-menu > li.mega-menu-item-type-widget #sb_instagram .sbi_header_text {
    display: inline-block;
    vertical-align: top;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-menu-instablock .mega-sub-menu > li.mega-menu-item-type-widget #sb_instagram svg.sbi_new_logo {
    margin-top: -22px;
    color: #ff0000;
	margin-left: 0 !important;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-menu-instablock .mega-sub-menu > li.mega-menu-item-type-widget:last-child div#sbi_images {
    padding-top: 0 !important;
}
header .mega-menu-instablock #sb_instagram .sb_instagram_header .sbi_header_text.sbi_no_bio h3 {
    padding: 0 0 0 35px !important;
    margin: 0 !important;
    float: none;
    clear: unset;
	color: var(--body-fonts-color);
	transition: all 0.5s ease;
}
	div.prt-titlebar-wrapper {
	    background-attachment: scroll !important;	
	}
	.prt-pageslider-yes .headerlogo .standardlogo {
		display: inline-block;
	}
	.prt-pageslider-yes .headerlogo .borderlogo {
		display: none;
	}
	.site-header-main.prt-wrap.container-fullwide{
		margin: 0 15px 0 20px;
	}
	.prt-header-style-classic.prt-header-overlay .site-header-main.prt-wrap.container-fullwide{
		margin:0 0px 0 15px;
	}
	#site-header-menu #site-navigation div.nav-menu > ul > li > i {
		display: none;
	}
	
    /*** Navigation ***/
    .main-navigation {
    	clear: both;
    }    
   	.site-branding,
    #site-header-menu #site-navigation li.mega-menu-megamenu > ul.mega-sub-menu,
    #site-header-menu #site-navigation div.mega-menu-wrap,
	.menu-prt-main-menu-container,
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-flyout ul.mega-sub-menu,
	#site-header-menu {
		float: none;	
    }
    /*** Responsive Menu ***/    
    .righticon{
        position: absolute;
        right: 0px;
        z-index: 33;
        top: 8px;
        display: block;
    }    
	.righticon i{
		font-size:20px;
		cursor:pointer;
        display:block;
        line-height: 0px;
	} 
    /*** Default menu box ***/ 
     
	.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal,
     #site-header-menu #site-navigation div.nav-menu > ul {
		position: absolute;
		padding: 10px 20px;
		left: auto;
		right: 0;
		box-shadow: rgb(0 0 0 / 12%) 3px 3px 15px;
		border-top: 0;
		background-color: <?php echo esc_attr($dropmenu_background['color']); ?>;
		z-index: 100;
		width: 350px;
		top: <?php echo esc_attr($header_height); ?>px; 
		transition: all 0.5s ease;
		transform: translateX(105%);
	}
	.preyantechnosys-maxmegamenu-active .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal,
    .preyantechnosys-maxmegamenu-active #site-header-menu #site-navigation div.nav-menu > ul{
		position: absolute;
		padding: 10px 20px;
		left: auto;
		right: -15px;
		box-shadow: rgb(0 0 0 / 12%) 3px 3px 15px;
		border-top: 0;
		background-color: <?php echo esc_attr($dropmenu_background_responsive['color']); ?>;
		z-index: 100;
		width: 350px;
		top: <?php echo esc_attr($header_height); ?>px; 
		transition: all 0.5s ease;
		transform: translateX(105%);		
    } 
	.preyantechnosys-maxmegamenu-active.mega-menu-preyantechnosys-main-menu-mobile-open .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal , .prt-mmmenu-override-yes #site-header-menu #site-navigation.main-navigation.toggled-on #menu-main-menu,  #site-header-menu #site-navigation.main-navigation.toggled-on div.nav-menu > ul{
		transition: all 0.5s ease;
		transform: translateX(0);
		-webkit-transition-delay: 600ms;
		-moz-transition-delay: 600ms;
		-ms-transition-delay: 600ms;
		-o-transition-delay: 600ms;
		transition-delay: 600ms;
	}
	.mega-menu-preyantechnosys-main-menu-mobile-open .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle {
		z-index: 99;
	}
	.main-navigation:before, .preyantechnosys-maxmegamenu-active:before {
		content: '';
		position: fixed;
		left: 0;
		top: 0;
		width: 0;
		height: 100%;
		z-index: 99;
		background: rgba( <?php echo preyantechnosys_hex2rgb($dropmenu_background['color']); ?>,0.90);
		-webkit-transform: translateX(-101%);
		-ms-transform: translateX(-101%);
		transform: translateX(-101%);
		transition: all 900ms ease;
		-moz-transition: all 900ms ease;
		-webkit-transition: all 900ms ease;
		-ms-transition: all 900ms ease;
		-o-transition: all 900ms ease;
		-webkit-transition-delay: 300ms;
		-moz-transition-delay: 300ms;
		-ms-transition-delay: 300ms;
		-o-transition-delay: 300ms;
		transition-delay: 300ms;
	}
	.preyantechnosys-maxmegamenu-active:before, .main-navigation:before {
		background: rgba( <?php echo preyantechnosys_hex2rgb($dropmenu_background_responsive['color']); ?>,0.90);
	}
	.mega-menu-preyantechnosys-main-menu-mobile-open:before, .main-navigation.toggled-on:before {
		opacity: 1;
		width: 100%;
		visibility: visible;
		transition: all 900ms ease;
		-moz-transition: all 900ms ease;
		-webkit-transition: all 900ms ease;
		-ms-transition: all 900ms ease;
		-o-transition: all 900ms ease;
		-webkit-transform: translateX(0%);
		-ms-transform: translateX(0%);
		transform: translateX(0%);
	}
	.preyantechnosys-maxmegamenu-active #mega-menu-wrap-preyantechnosys-main-menu .mega-menu-toggle + #mega-menu-preyantechnosys-main-menu {
		display: block;
	}
	.headerlogo img{
		max-height: <?php echo esc_attr($logoMobMaxHeight); ?>px;
	}
    <?php if($headerbg_color=='custom' && !empty($headerbg_customcolor['rgba']) ) : ?>
       	#site-header-menu #site-navigation div.nav-menu > ul,
        #site-header-menu #site-navigation .mega-menu-wrap .mega-menu{
            background-color: <?php  echo esc_attr($headerbg_customcolor['rgba']); ?>;
        } 
	<?php endif; ?>
    <?php if( !empty($dropmenu_background['color']) ): ?>
    	.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal, 
        #site-header-menu #site-navigation div.nav-menu > ul{
        	background-color: <?php echo esc_attr($dropmenu_background['color']); ?>;
        }    
    <?php endif; ?>   
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal, 
        #site-header-menu #site-navigation div.nav-menu > ul{
        	background-color: <?php echo esc_attr($dropmenu_background_responsive['color']); ?>;
        } 	
    #site-header-menu #site-navigation div.nav-menu > ul,
    #site-header-menu #site-navigation div.nav-menu > ul ul {
        overflow: hidden;
        max-height: 0px;
    }
	
	#site-header-menu #site-navigation div.nav-menu > ul ul ul{
    	max-height: none;
    }    
	#site-header-menu #site-navigation div.nav-menu > ul ul {
		padding-left:15px;
	}
    #site-header-menu #site-navigation div.nav-menu > ul > li{
    	position: relative;
        text-align: left;
    }    
    #site-header-menu #site-navigation.toggled-on div.nav-menu > ul{       
        display: block;
        max-height: 10000px;       
    }
    #site-header-menu #site-navigation.toggled-on div.nav-menu > ul ul.open {
    	max-height: 10000px;
    }   
    #site-header-menu #site-navigation div.mega-menu-wrap{
    	position: inherit;
    }   
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal, 
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-flyout ul.mega-sub-menu{
    	width: 100%;
    }   
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-toggle-on > a, 
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item:hover > a,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item a {
    	background: none !important;
    }
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item{
    	float: none;
    }
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li{
    	width: 100% !important;
        padding-bottom: 0px;
    }
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-flyout ul.mega-sub-menu{
    	padding-left:15px;        
    }
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item ul.mega-sub-menu a {
    	padding-left: 0px;
    }
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal ul.mega-sub-menu a,
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li ul.mega-sub-menu,
    #site-header-menu #site-navigation div.nav-menu > ul ul{
    	background-color: transparent !important;
    }
    #site-header-menu #site-navigation div.nav-menu > ul > li a,    
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li a{
        display: block;
        padding: 15px 0px;        
        text-decoration: none;
        line-height: 18px;
        height: auto;
        line-height: 18px !important;
    }     
    #site-header-menu #site-navigation div.nav-menu > ul ul a, 
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item a {
        margin: 0;
        display: block;
        padding: 10px 15px 10px 0px;
    }
    #site-header-menu #site-navigation div.nav-menu > ul > li li a:before,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item li.mega-menu-item a:before{
        font-family: "FontAwesome";
        font-style: normal;
        font-weight: normal;
        display: inline-block;
        text-decoration: inherit;
        margin-right: .2em;
        text-align: center;
        opacity: .8;
        font-variant: normal;
        text-transform: none;
        font-size: 13px;
        content: "\f105";
        margin-right: 8px;
        display: none;
    }         
    .prt-mmmenu-override-yes .mega-sub-menu {
     	display: none !important;
    }
    .mega-sub-menu.open, 
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li .mega-sub-menu .mega-sub-menu {
    	display: block !important;
    }
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li  {
        padding: 0px;
        padding-left: 0px;
    }  
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title{
    	margin-top: 15px;
		padding-bottom: 10px;
		padding-left: 0;
		padding-right: 0;
    }
	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item.widget_media_image {
		margin-top: 15px;
	}
	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item.widget_media_gallery {
		margin-top: 10px;
	}
	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu:first-child > ul.mega-sub-menu > li.mega-menu-item.widget_media_image, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-instablock > ul.mega-sub-menu > li.mega-menu-item.widget_media_image {
		margin-top: 0;
	}
	.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-item > a ,
	#site-header-menu #site-navigation div.nav-menu > ul > li > a{
		font-size: <?php echo esc_attr(ceil($mainMenuFontsize)+2); ?>px;
	}
	
	#site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title {
		font-size: <?php echo esc_attr(ceil($mainMenuFontsize)); ?>px;
	}
	.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget div {
    padding-left: 15px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget.widget_media_gallery  div {
    padding-left: 0;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-menu-instablock .mega-sub-menu > li.mega-menu-item-type-widget:last-child div {
    padding-left: 0 !important;
}
	#mega-menu-wrap-preyantechnosys-main-menu #mega-menu-preyantechnosys-main-menu > li.mega-menu-megamenu > ul.mega-sub-menu {
    padding: 10px 15px;
}
	.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget div .gallery-item {
    padding-left: 0;
}
.preyantechnosys-maxmegamenu-active #mega-menu-preyantechnosys-main-menu > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item h4.mega-block-title, #mega-menu-wrap-preyantechnosys-main-menu #mega-menu-preyantechnosys-main-menu > li.mega-menu-megamenu > ul.mega-sub-menu li.mega-menu-column > ul.mega-sub-menu > li.mega-menu-item h4.mega-block-title {
	color: rgba( <?php echo preyantechnosys_hex2rgb($dropmenu_text_responsive_color); ?>,1) !important;
    padding: 5px 0 0 0;
}
.preyantechnosys-maxmegamenu-active .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-item > a , .righticon i,#site-header-menu #site-navigation div.nav-menu > ul > li > a , #site-header-menu #site-navigation div.nav-menu > ul > li a , .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item-has-children a, #site-header-menu #site-navigation div.nav-menu > ul ul > li.menu-item-has-children> a {
	color: <?php echo esc_attr($dropmenu_text_responsive_color); ?> !important;
 } 
	
.preyantechnosys-maxmegamenu-active .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a,
#site-header-menu #site-navigation div.nav-menu > ul ul a, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > ul.mega-sub-menu > li.mega-menu-item > a {
	color: rgba( <?php echo preyantechnosys_hex2rgb($dropmenu_text_responsive_color); ?>,0.6);
 }
 #site-header-menu #site-navigation div.nav-menu > ul ul a,#site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item ul.mega-sub-menu a, #site-header-menu #site-navigation div.nav-menu > ul li.menu-item-has-children > ul li li a {
	color: rgba( <?php echo preyantechnosys_hex2rgb($dropmenu_text_responsive_color); ?>,0.6) !important;
 }
  #site-header-menu #site-navigation div.nav-menu > ul ul a:hover,#site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item ul.mega-sub-menu a:hover, #site-header-menu #site-navigation div.nav-menu > ul li.menu-item-has-children > ul li li a:hover {
  color: <?php echo esc_attr($skincolor); ?> !important;
  }
.preyantechnosys-maxmegamenu-active .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget div #sb_instagram h3 {
    color: <?php echo esc_attr($dropmenu_text_responsive_color); ?>;
    padding-top: 0!important;
}
.preyantechnosys-maxmegamenu-active.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget div .sbi_header_hashtag_icon , .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a.mega-menu-link {
	color: <?php echo esc_attr($dropmenu_text_responsive_color); ?>;
}
	#site-header-menu #site-navigation div.nav-menu > ul li, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li {
    border-bottom: 0 !important;
}
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item:first-child > h4.mega-block-title{
    	margin-top: 0px;
    }      
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item{
   		position: relative;
    }
    #site-header-menu #site-navigation div.nav-menu > ul > li a, 
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li a{
    	display: inline-block;
    } 
	#mega-menu-wrap-preyantechnosys-main-menu #mega-menu-preyantechnosys-main-menu li.mega-menu-item-has-children > a.mega-menu-link > span.mega-indicator {
		display: none;
	}
    /*** Defaultmenu ***/
    .prt-mmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li > a:hover,   
    .prt-mmenu-active-color-skin .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a:hover,
    .prt-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul  ul > li > a:hover, 
    .prt-dmenu-active-color-skin #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li > a:hover{
    	color: <?php echo esc_attr($skincolor); ?>;
    } 
   <?php if( $dropmenu_active_link_color=='custom' && !empty($dropmenu_active_link_custom_color) ){ ?>
    /* Dropdown Menu Active Link Color -------------------------------- */   
    .prt-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_item > a, 
    .prt-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.current-menu-item > a,    
    .prt-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-current-menu-item > a {
        color: <?php echo esc_attr($skincolor); ?>;
    }
    <?php } ?>
    <?php if( $mainmenu_active_link_color=='custom' && !empty($mainmenu_active_link_custom_color) ){ ?>
     /* Main Menu Active Link Color --------------------------------*/        
    .prt-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li > a:hover,   
    .prt-mmenu-active-color-custom .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a:hover{
        color: <?php echo esc_attr($mainmenu_active_link_custom_color); ?>;
     }
    <?php } ?> 
	<?php if( $dropmenu_active_link_color=='custom' && !empty($dropmenu_active_link_custom_color) ){ ?>      
    .prt-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul  ul > li > a:hover, 
    .prt-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li > a:hover{
        color: <?php echo esc_attr($skincolor); ?>;
    }    
    <?php } ?>    
    <?php if( !empty($dropdownmenufont['color']) ): ?>
    #site-header-menu #site-navigation div.nav-menu > ul > li > a,     
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-item > a,    
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget,
    .righticon i  {
    	color: rgba( <?php echo preyantechnosys_hex2rgb($dropdownmenufont['color']); ?> , 1);
    } 
    #site-header-menu #site-navigation div.nav-menu > ul li,
  	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li {
    	border-bottom: 0 solid rgba( <?php echo preyantechnosys_hex2rgb($dropdownmenufont['color']); ?> , 0.15);
    }  
    #site-header-menu #site-navigation div.nav-menu > ul li:last-child,
  	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li:last-child{
    	border-bottom: none;
    }     
    <?php endif; ?>    
	/* Dynamic main menu color applying to responsive menu link text */   
    #site-header-menu #site-navigation .mega-menu-toggle .mega-toggle-block-1 .mega-toggle-label-open,
    #site-header-menu #site-navigation .mega-menu-toggle .mega-toggle-block-1 .mega-toggle-label .mega-toggle-label-closed{
        display: none;
    }    
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1{
        margin-top: 5px
    }
    #site-header-menu #site-navigation .mega-menu-toggle .mega-toggle-blocks-right{
        height:28px;
    }
    .menu-toggle i,     
    .prt-header-icons a{
		color: rgba( <?php echo preyantechnosys_hex2rgb($mainMenuFontColor); ?> , 1) ;
	}            
    .menu-toggle span,
    .menu-toggle span:after,
    .menu-toggle span:before{
    	background-color: rgba( <?php echo preyantechnosys_hex2rgb($mainMenuFontColor); ?> , 1) ;
    }	
    #site-header-menu #site-navigation div.nav-menu > ul{
        padding-right: 15px;
        padding-left: 15px;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul ul{
    	list-style: none;
    }	
    .prt-header-icons{
        position: absolute;
        top: 0;
        float: none;
        right: 50px;
        margin-right: 0px;
    }   
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu.open, 
    #site-header-menu #site-navigation div.nav-menu > ul > li ul{       
        display: block !important;
        height: auto !important; 
		width: 100%;
    }    
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu{
        opacity: 1;   
    }    
	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-flyout ul.mega-sub-menu ul.mega-sub-menu,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu, 
    #site-header-menu #site-navigation div.nav-menu > ul > li ul{
        background-image: none !important;      
    }   
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu{
    	margin-top: 0;
    }      
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu, 
    #site-header-menu #site-navigation div.nav-menu > ul > li ul,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a.mega-menu-link{
    	background: none;
        background-image: none;
    }    
    .prt-header-overlay .prt-titlebar-wrapper .prt-titlebar-inner-wrapper{
    	padding-top: 0px;
    }  
    #site-header-menu #site-navigation .menu-toggle,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle {
        top: <?php echo esc_attr(ceil($header_height/2)-20); ?>px;
        display: block;
        position: absolute; 
        right:0px;     
		left: auto;		
        width: 40px;       
        background: none;
        z-index: 99;
        outline: none;
        padding: 0;
        line-height: normal;
    }    
	#site-header-menu #site-navigation .prt-header-icon a, #site-header-menu #site-navigation .preyantechnosys-fbar-btn a {
    font-size: 18px;
}
    .prt-header-invert #site-header-menu #site-navigation .menu-toggle,
    .prt-header-invert .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle {
        right: 0; 
        left: auto;
    }    
    .prt-header-invert .prt-header-icons {
        left: 0;
        right: auto;
    }    
    #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-right{
        float: none;
    }    
    #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1 {
        display: inline-block;
		width: 28px;
        height: 2px;
        background: #182333;
        border-radius:0px;
        transition: 0.3s;
        position: relative;
    }
    #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:before,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before {
        top: 8px;
    }
    #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:after,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after {
        top: -8px;
    }    
    #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:before, 
    #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:after,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after {
        display: inline-block;
		width:28px;
		height: 2px;
        background: #033b4a;
        border-radius:0px;
        transition: 0.3s;
        position: absolute;
        left: 0;
        content: '';
        -webkit-transform-origin: 0.28571rem center;
        transform-origin: 0.28571rem center;
        margin: 0;
    }
    #site-header-menu #site-navigation.toggled-on .menu-toggle .prt-fixter-icon-bars,     
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1 {
        background: transparent;
    }    
    #site-header-menu #site-navigation.toggled-on .menu-toggle .prt-fixter-icon-bars:before,
    #site-header-menu #site-navigation.toggled-on .menu-toggle .prt-fixter-icon-bars:after,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1:before, 
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1:after {
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        top: 0;
        width:26px;
    }    
    #site-header-menu #site-navigation.toggled-on .menu-toggle .prt-fixter-icon-bars:before,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1:before {
        -webkit-transform: rotate3d(0, 0, 1, 45deg);
        transform: rotate3d(0, 0, 1, 45deg);
    }
    #site-header-menu #site-navigation.toggled-on .menu-toggle .prt-fixter-icon-bars:after,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1:after {
        -webkit-transform: rotate3d(0, 0, 1, -45deg);
        transform: rotate3d(0, 0, 1, -45deg);
    }   
    /*** Responsive icon color( If custom header background color ) ***/      
    /* White color */ 
	.site-header.prt-bgcolor-darkgrey #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:before,
	.site-header.prt-bgcolor-darkgrey #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:after,
	.site-header.prt-bgcolor-darkgrey .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before,
	.site-header.prt-bgcolor-darkgrey .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,
	.site-header.prt-bgcolor-darkgrey #site-header-menu #site-navigation:not(.toggled-on) .menu-toggle .prt-fixter-icon-bars,
    .site-header.prt-bgcolor-skincolor .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .site-header.prt-bgcolor-skincolor .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .site-header.prt-bgcolor-skincolor .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,  
    .site-header.prt-bgcolor-darkgrey .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .site-header.prt-bgcolor-darkgrey .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .site-header.prt-bgcolor-darkgrey .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,      
	.prt-responsive-icon-white.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .prt-responsive-icon-white.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .prt-responsive-icon-white.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,
    .prt-responsive-icon-white #site-header-menu #site-navigation:not(.toggled-on) .menu-toggle .prt-fixter-icon-bars,
    .prt-responsive-icon-white #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:before, 
    .prt-responsive-icon-white #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:after{
         background-color: #ffffff;
    }
    .site-header.prt-bgcolor-skincolor .menu-toggle i, 
    .site-header.prt-bgcolor-skincolor .prt-header-icons a,
    .site-header.prt-bgcolor-darkgrey .menu-toggle i, 
    .site-header.prt-bgcolor-darkgrey .prt-header-icons a,     
    .prt-responsive-icon-white .menu-toggle i, 
    .prt-responsive-icon-white .prt-header-icons a {
    	color: #ffffff;
    }      
    /* Dark color */  
    .site-header.prt-bgcolor-white #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars,
    .site-header.prt-bgcolor-white #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:before,
    .site-header.prt-bgcolor-white #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:after,     
    .site-header.prt-bgcolor-grey.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .site-header.prt-bgcolor-grey.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .site-header.prt-bgcolor-grey.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,         
    .prt-bgcolor-white.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .prt-bgcolor-white.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .prt-bgcolor-white.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,        
	.prt-responsive-icon-dark.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .prt-responsive-icon-dark.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .prt-responsive-icon-dark.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,
    .prt-responsive-icon-dark #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars,
    .prt-responsive-icon-dark #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:before, 
    .prt-responsive-icon-dark #site-header-menu #site-navigation .menu-toggle .prt-fixter-icon-bars:after{
         background-color:<?php echo esc_attr($blackish_buttoncolor); ?>;
    }      
    .site-header.prt-bgcolor-grey .menu-toggle i, 
    .site-header.prt-bgcolor-grey .prt-header-icons a,  
    .site-header.prt-bgcolor-white .menu-toggle i, 
    .prt-responsive-icon-dark .menu-toggle i, 
    .prt-responsive-icon-dark .prt-header-icons a {
    	color:<?php echo esc_attr($blackish_buttoncolor); ?>;
    }      
    .prt-responsive-icon-white #site-header-menu #site-navigation.toggled-on .menu-toggle .prt-fixter-icon-bars,
    .prt-responsive-icon-dark #site-header-menu #site-navigation.toggled-on .menu-toggle .prt-fixter-icon-bars,
    .site-header.prt-bgcolor-white #site-header-menu #site-navigation.toggled-on .menu-toggle .prt-fixter-icon-bars,
    .site-header.prt-bgcolor-darkgrey #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1,
    .site-header.prt-bgcolor-skincolor #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1,
    .site-header.prt-bgcolor-white.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1,
    .site-header.prt-bgcolor-grey.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1,
    .prt-responsive-icon-dark.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1,
    .prt-responsive-icon-white.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1{
    	background-color: transparent;
    } 
    /* Display None */

        
    /* prt-header-style-infostack */     
    .prt-header-style-infostack .prt-header-icon.prt-header-btn-w,
    .prt-header-style-infostack .prt-header-widgets-wrapper{
    	display: none;    
    }  
	
	body.preyantechnosys-page-full-width.prt-titlebar-bcrumb-bottom #content .site-main .entry-content > .wpb_row:first-child {
		margin-top: -82px;
	}
    .prt-header-style-infostack.prt-header-overlay .prt-stickable-header-w{        
        top: 0;
    }
    .prt-header-style-infostack .prt-header-top-wrapper .col-sm-4.col-md-3,
    .prt-header-style-infostack .kw-phone{
        display: none;
    }
    .prt-header-style-infostack .site-header-menu{
        display: block;
        position: static;
        top: 0;
        width: 100%;
    }
    .prt-header-style-infostack .prt-header-top-wrapper .col-sm-4.col-md-6{
        padding-left: 0;
    }
    .prt-header-style-infostack .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal, 
    .prt-header-style-infostack #site-header-menu #site-navigation div.nav-menu > ul {
        top: 100%;
    }
	.prt-header-style-infostack .site-header-menu {
		left: 0;
	}
    #site-header-menu #site-navigation .menu-toggle,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle {
        top: <?php echo esc_attr(ceil($header_height/2)-16); ?>px;
    }	
	.prt-titlebar-wrapper.prt-breadcrumb-on-bottom .prt-titlebar-main > .container .prt-titlebar-main-inner .entry-title-wrapper,
	.prt-header-style-infostack .prt-titlebar-wrapper.prt-breadcrumb-on-bottom .prt-titlebar-main > .container .prt-titlebar-main-inner .entry-title-wrapper {
	    margin-top: -40px;	
	}
	/* sticky footer bottom margin */	
	body .site-content-wrapper {
		margin-bottom: 0px !important;
	}
	.prt-titlebar-align-left .entry-title-wrapper .entry-title {
		padding-left: 0px;
	}
	.prt-header-style-infostack .prt-top-info-con {
		display:none;
	}
	<?php if( $mainmenu_active_link_color=='custom' && !empty($mainmenu_active_link_custom_color) ){ ?>
		<?php if( !empty($dropmenu_background['color']) && $dropmenu_background['color']=='#ffffff' && $mainmenu_active_link_color=='custom' && $mainmenu_active_link_custom_color=='#ffffff' ): ?>
		/* Main Menu Active Link Color --------------------------------*/                
		.prt-header-style-infostack .prt-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > a, 
		.prt-header-style-infostack .prt-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a, 
		.prt-header-style-infostack .prt-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_ancestor > a, 
		.prt-header-style-infostack .prt-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_parent > a,          
		.prt-header-style-infostack .prt-mmenu-active-color-custom  #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > a,       
		.prt-header-style-infostack .prt-mmenu-active-color-custom  .prt-mmmenu-override-yes #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a, 
		.prt-header-style-infostack .prt-mmenu-active-color-custom  .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-item > a,    
		.prt-header-style-infostack .prt-mmenu-active-color-custom  .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-ancestor > a {
			color: <?php echo esc_attr($skincolor); ?>;
		}
		.prt-header-style-infostack .prt-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li > a:hover,
		.prt-header-style-infostack .prt-mmenu-active-color-custom .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a:hover {
			color: <?php echo esc_attr($skincolor); ?>;
		}
		<?php endif; ?> 
	<?php } ?>
	.prt-header-style-infostack #site-header-menu .container {
       width: auto;
		display: block;
	}
	#mega-menu-wrap-prt-main-menu #mega-menu-prt-main-menu li.mega-menu-item-has-children.mega-toggle-on > a.mega-menu-link > span.mega-indicator {
		display: none;
	}
	#mega-menu-wrap-preyantechnosys-main-menu #mega-menu-preyantechnosys-main-menu li.mega-menu-item-has-children > a.mega-menu-link > span.mega-indicator:after,
	#mega-menu-wrap-prt-main-menu #mega-menu-prt-main-menu li.mega-menu-item-has-children.mega-toggle-on > a.mega-menu-link > span.mega-indicator:after {
		content:unset;
	}
	.k_flying_searchform_wrapper {
		position: absolute;
		width: 100%;
		z-index: 33;
	}
	.prt-header-style-infostack .prt-box-wrapper .site-header>.container.prt-container-for-header{
		width:unset;
		padding: 0;
	}
	.prt-header-text-area {
		display: none;
	}
	.prt-header-style-classic-three .site-header-main.prt-wrap.container-fullwide {
		margin: 0 0px 0 15px;
	}
	.prt-header-style-classic-three .site-header-main.container-fullwide {
		padding-left: 0;
		padding-right: 0;
	}
	.prt-header-style-classic .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a {
		margin:0px !important;
	}
	#site-header-menu #site-navigation div.nav-menu > ul > li > a {
		padding: 10px 10px 10px 10px !important;
	}
	#mega-menu-wrap-preyantechnosys-main-menu #mega-menu-preyantechnosys-main-menu > li.mega-menu-flyout ul.mega-sub-menu {
		padding: 5px 25px;
	}
	#mega-menu-wrap-preyantechnosys-main-menu .mega-menu-toggle .mega-toggle-blocks-right .mega-toggle-block {
		margin-right: 0;
	}
	#mega-menu-wrap-preyantechnosys-main-menu .mega-menu-toggle .mega-toggle-block-0 .mega-toggle-animated-box {
		width: 32px;
	}
}
@media (min-width: <?php echo esc_attr($breakpoint); ?>px) {
    header #site-header-menu #site-navigation{
        height: <?php echo esc_attr($header_height); ?>px;
        line-height: <?php echo esc_attr($header_height); ?>px !important;
    }
	/* Header full */
    .prt-header-overlay .prt-stickable-header-w{
        position: absolute;
        z-index: 21;
        width: 100%;
        box-shadow: none;
        -khtml-box-shadow: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        -ms-box-shadow: none;
        -o-box-shadow: none;
    } 
	.site-header-main.container-full {
		padding: 0 50px;
	}
	.prt-stickable-header.is_stuck{    	 
        box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.06);
    }
    .prt-stickable-header{
        z-index: 12;      
    }
	.prt-header-icon, 
	.prt-header-icons, 
	.prt-header-overlay .prt-header-icons:before,
    .preyantechnosys-fbar-btn,
	.prt-header-text-area,
   	.prt-header-icons .preyantechnosys-fbar-btn a i,
	.headerlogo,  
	#site-header-menu #site-navigation div.nav-menu > ul > li > a, 
	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a {
        transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -webkit-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
    }
    .prt-header-icon{       
        position: relative;
    }
	.prt-header-text-area, 
    #site-header-menu #site-navigation .nav-menu,  
    #site-header-menu, 
    .prt-header-icons, 
    .prt-header-icon,
    #site-header-menu #site-navigation .mega-menu-wrap, 
    .menu-prt-main-menu-container{
    	float: right;
    }
	.navbar{
        vertical-align: top;
    }
    .menu-toggle {
        display: none;
        z-index: 10;	
    }
    .menu-toggle i{
        color:#fff;
        font-size:28px;
    }
    .toggled-on li, 
    .toggled-on .children {
        display: block;
    }		
    #site-header-menu #site-navigation div.mega-menu-wrap{
        clear: none;
        position: inherit;
    }
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal{
        position: static !important;       
    }
    #site-header-menu #site-navigation .nav-menu-wrapper > ul {
        margin: 0;
        padding: 0; 
    }
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li > a{
    	background: none;
    } 
	#site-header-menu #site-navigation div.nav-menu > ul{
    	margin: 0px;
		position: relative;
    }   
	.k_flying_searchform_wrapper {
        top: auto;
        position: absolute;
        width: 100%;
        left: 0;
        right: 0;
        z-index: 11;
    }
	.prt-header-style-infostack .k_flying_searchform_wrapper {
		max-width: 1140px;
		left: 0;
		right: 0;
		margin-left: auto;
		margin-right: auto;
	}	
	.prt-header-style-infostack .prt-stickable-header:not(.is_stuck) .k_flying_searchform_wrapper {
		top:<?php echo (preyantechnosys_header_menuarea_height()); ?>px;	
	}
	.prt-header-style-infostack .prt-stickable-header:not(.is_stuck) .k_flying_searchform_wrapper .container {
		width: 1140px;
	}
	.prt-header-style-infostack .prt-stickable-header.is_stuck .k_flying_searchform_wrapper {
		width: 100%;
		max-width: 100%;
	}
    #site-header-menu #site-navigation div.nav-menu > ul > li,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item{
        height: <?php echo esc_attr($header_height); ?>px;
        line-height: <?php echo esc_attr($header_height); ?>px !important;
    }  
    #site-header-menu #site-navigation div.nav-menu > ul > li {
        margin: 0 0px 0 0;
        display: inline-block;
        position: relative;
		vertical-align: top;
    }   	
    #site-header-menu #site-navigation div.nav-menu > ul > li > a,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a{
    	display: inline-block;	
        margin: 0px;
        padding: 0px 0 0px 0;
		margin: 0 20px 0 20px;
        text-decoration: none;
        position: relative;
        z-index: 1;       
        height: <?php echo esc_attr($header_height); ?>px;
        line-height: <?php echo esc_attr($header_height); ?>px !important;        
    }
	
	    
	.prt-header-style-classic #site-header-menu #site-navigation div.nav-menu > ul > li > a,
    .prt-header-style-classic .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a{
		padding: 0px 0 0px 0 !important ;
		margin: 0 15px;
	}	
	.prt-header-style-classic-two #site-header-menu #site-navigation div.nav-menu > ul > li > a,
    .prt-header-style-classic-two .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a{
		padding: 0px 12px 0px 12px;
		margin: 0;
		background: transparent !important;
	}
	
.prt-header-style-classic .header-info-widget .header-widget-main .header-icon {
    padding: 0 16px 0 0;
    font-size: 40px;
    color: var(--prt-secondarycolor);
}	
.prt-header-style-classic .header-info-widget .header-widget-main .header-icon i {
    display: inline-block;
    vertical-align: top;
    padding-top: <?php echo esc_attr(ceil($header_height/2)-20); ?>px;
	line-height: normal;
}
.prt-header-style-classic .header-info-widget .header-widget-main {
	display: flex;
    padding-right: 40px;
    margin-right: 27px;
    border-right: 1px solid var(--prt-bordercolor);
}
.prt-header-style-classic-two .header-info-widget .header-widget-main {
    border: 0;
    margin: 0;
    padding: 0;
}
.prt-header-style-classic .prt-header-text-area .header-info-widget a {
    border: 1px solid var(--prt-whitecolor);
    background: transparent;
    border-radius: 30px;
    position: relative;
    background-color: var(--prt-secondarycolor);
    line-height: 1;
    padding: 15px 30px;
	color: #fff;
    font-family: var(--special-element-fontfamily);
	transition: all 0.3s ease 0s;
}
.prt-header-style-classic .prt-header-text-area .header-info-widget a:hover {
	background-color: var(--prt-skincolor);
}
.prt-header-style-classic .header-info-widget .header-widget-main .header-content {
    line-height: initial;
	margin-top: <?php echo esc_attr(ceil($header_height/2)-25); ?>px;
}
.prt-header-style-classic .prt-header-text-area .header-info-widget a.prt-vc_general.prt-vc_btn3 {
    font-weight: var(--special-element-fontweight);
    transition: all .5s ease;
}
    #site-header-menu #site-navigation div.nav-menu > ul > li:hover > a:before,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item:hover > a:before{
		opacity: 1;
    }	
	
	
	.prt-header-text-area {
		padding-left: 33px;
		position: relative;
		z-index: 1;
	}
	.prt-header-text-area .header-info-widget {
		vertical-align: middle;
		display: inline-flex;
		text-align: left;
	}
	.prt-header-text-area .header-info-widget h2 {
		font-size:20px;
		line-height:28px;
		margin-bottom:3px;
		font-weight:500;
		color: <?php echo esc_attr($skincolor); ?>;
	}
	.prt-header-text-area .header-info-widget h3 {
		font-size: var(--body-font-size);
		line-height: var(--body-line-height);
		color: var(--prt-secondarycolor);
		margin-bottom: 0px;
	}
	.prt-header-text-area .header-info-widget .header-content a {
    font-size: 13px;
	transition: all .3s ease;
}
	.prt-bgcolor-skincolor .prt-header-text-area .header-info-widget h2,
	.prt-bgcolor-darkgrey .prt-header-text-area .header-info-widget h3,
	.prt-bgcolor-skincolor .prt-header-text-area .header-info-widget h3 {
		color:#fff;
	}
	.prt-header-text-area div.header-info-widget:nth-child(2){
		padding-left:62px;
	}
	
	.preyantechnosys-fullwide .prt-header-style-classic .prt-header-text-area{
		padding-right: 0;
	}
	#site-header-menu #site-navigation div.nav-menu > ul > li>ul.sub-menu:before {
		content: '';
		display: inline-block;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 0 12px 11px;
		border-color: transparent transparent #fff;
		position: absolute;
		top: -11px;
		left: 25px;
		filter: drop-shadow(0px 6px 16px rgba(0,0,0,.08));
	}
	.preyantechnosys-fullwide .prt-header-style-classic-two .prt-header-text-area {
    padding-right: 40px;
	padding-left: 40px;
    background-color: var(--prt-skincolor);
}
	.preyantechnosys-fullwide .prt-header-style-classic .prt-header-icons .prt-header-wc-cart-link a,
	.preyantechnosys-fullwide .prt-header-style-classic .prt-header-icons .prt-header-search-link a {
		display: inline-block;
		border-radius: 0px;
		font-size: 20px !important;
		transition: all .2s ease-in-out;
		-moz-transition: all .2s ease-in-out;
		-webkit-transition: all .2s ease-in-out;
		-o-transition: all .2s ease-in-out;
		vertical-align: unset;
	}
	.preyantechnosys-fullwide .prt-header-style-classic-two .prt-header-icons .prt-header-search-link a {
		background-color: var(--prt-greycolor);
		color: <?php echo esc_attr($secondarycolor); ?>;
		font-size: 15px !important;
		border-left: 1px solid var(--prt-bordercolor);
	}
	.preyantechnosys-fullwide .prt-header-style-classic-two .prt-header-icons .prt-header-search-link a i:before{
		font-weight: 700;
	}
	.preyantechnosys-fullwide .prt-header-style-classic .prt-search-overlay{
		right: 10px;	
		border-top-color: #fff;
		-webkit-box-shadow: 0px 0px 13px 0px rgba(43, 52, 59, 0.25);
		-moz-box-shadow: 0px 0px 13px 0px rgba(43, 52, 59, 0.25);
		box-shadow: 0px 0px 13px 0px rgba(43, 52, 59, 0.25);
	}
	.preyantechnosys-fullwide .prt-header-style-classic .prt-search-overlay .w-search-form-row:before{
		border-left: 12px solid transparent;
		border-right: 12px solid transparent;
		border-bottom: 12px solid #fff;
		top: -15px;
	}
	
    /*** Defaultmenu ***/ 
    .prt-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li:hover > a,
    .prt-dmenu-active-color-skin .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal ul.mega-sub-menu li:hover > a,    
    .prt-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li:hover > a,
    .prt-mmenu-active-color-skin .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item li:hover > a{
        color: <?php echo esc_attr($skincolor); ?> ;
    }
	.prt-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_item > a, 
	.prt-dmenu-active-color-skin #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.current-menu-item > a,
	.prt-dmenu-active-color-skin #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-current-menu-item > a {
		background-color: transparent;	
	}	
	<?php if( $mainmenu_active_link_color=='custom' && !empty($mainmenu_active_link_custom_color) ){ ?>
    	.prt-mmenu-active-color-custom .site-header .social-icons li > a:hover, 
        .prt-mmenu-active-color-custom .prt-header-icons .prt-header-search-link a:hover, 
        .prt-mmenu-active-color-custom .prt-header-icons .prt-header-wc-cart-link a:hover,        
        .prt-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li:hover > a,
    	.prt-mmenu-active-color-custom .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item:hover > a{
        	color: <?php echo esc_attr($mainmenu_active_link_custom_color); ?> ;
        }        
		.prt-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li > a:before,
		.prt-mmenu-active-color-custom .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a:before{
			background-color: <?php echo esc_attr($mainmenu_active_link_custom_color); ?> ;
        } 
			
    <?php } ?>
	<?php if( $dropmenu_active_link_color=='custom' && !empty($dropmenu_active_link_custom_color) ){ ?>        
    /* Dropdown Menu Active Link Color -------------------------------- */ 
	.prt-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li:hover > a,  
    .prt-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item:hover > a, 
    .prt-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li:hover > a,
    .prt-dmenu-active-color-custom .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal ul.mega-sub-menu li:hover > a, 				
    .prt-mmenu-active-color-custom .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item li:hover > a{
        color: <?php echo esc_attr($dropmenu_active_link_custom_color); ?>;
    }
	body #site-header-menu #site-navigation div.nav-menu > ul ul li > a:before, 
	body .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li > a:before {
		background-color: <?php echo esc_attr($dropmenu_active_link_custom_color); ?>;
	}
    <?php } ?>   
  	
    .is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li > a,
    .is_stuck.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a,
	 #site-header-menu.is_stuck #site-navigation div.nav-menu > ul > li > a,
    .prt-mmmenu-override-yes #site-header-menu .is_stuck #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a,
    #site-header-menu.is_stuck #site-navigation div.nav-menu > ul > li > a,
    .prt-mmmenu-override-yes #site-header-menu.is_stuck #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a{
    	color: <?php echo esc_attr($stickymainmenufontcolor); ?>;
    }  
	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal ul.mega-sub-menu li:hover > a,
	#site-header-menu #site-navigation div.nav-menu > ul ul li:hover > a,    
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item:hover > a{
        background: #fff;
    }
	 .prt-dmenu-active-color-skin .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal ul.mega-sub-menu li:hover > a,
	.prt-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul ul li:hover > a,    
    .prt-dmenu-active-color-skin .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item:hover > a{
       background-color: transparent;
    }

	.prt-header-style-infostack .prt-header-menu-bg-color-skincolor .prt-header-icons .prt-header-search-link a,  
	.prt-header-style-infostack .prt-header-menu-bg-color-skincolor .prt-header-icons .prt-header-wc-cart-link a,
	.prt-header-style-infostack .prt-header-menu-bg-color-darkgrey .prt-header-icons .prt-header-search-link a,  
	.prt-header-style-infostack .prt-header-menu-bg-color-darkgrey .prt-header-icons .prt-header-wc-cart-link a{
		border-color: rgba( <?php echo preyantechnosys_hex2rgb($mainMenuFontColor); ?> , 0.70);
		background-color: transparent;
	}
    .site-header .social-icons li > a:hover,
    .prt-header-icons .prt-header-wc-cart-link a:hover,
    .prt-header-icons .prt-header-search-link a:hover{
    	color: <?php echo esc_attr($skincolor); ?>;
    }
	.prt-header-style-infostack .prt-header-menu-bg-color-skincolor .prt-header-icons .prt-header-search-link a:hover,  
	.prt-header-style-infostack .prt-header-menu-bg-color-skincolor .prt-header-icons .prt-header-wc-cart-link a:hover,
	.prt-header-style-infostack .prt-header-menu-bg-color-darkgrey .prt-header-icons .prt-header-search-link a:hover,  
	.prt-header-style-infostack .prt-header-menu-bg-color-darkgrey .prt-header-icons .prt-header-wc-cart-link a:hover {
		border-color: rgba( <?php echo preyantechnosys_hex2rgb($mainMenuFontColor); ?> , 1) ;
	}
	.prt-header-style-infostack .prt-header-menu-bg-color-skincolor .prt-header-wc-cart-link a span.number-cart{
		background-color:#fff;
		color: <?php echo esc_attr($skincolor); ?> ;
	}
	.prt-header-style-infostack .site-header .prt-header-menu-bg-color-darkgrey .prt-header-wc-cart-link a:hover span.number-cart,
	.prt-header-style-infostack .site-header .prt-sticky-bgcolor-darkgrey.is_stuck .prt-header-wc-cart-link a:hover span.number-cart{
		color:#fff;
		background-color:<?php echo esc_attr($skincolor); ?> ;
	}
	.prt-header-style-infostack .kw-phone{
		position: static;
		right: -1px;
		top: 0;
		font-size: 14px;
		color: #fff;
		padding: 0px 0px 0px 8px;
		height: 60px;
		line-height: 60px;
		float: right;
	}	
	.prt-header-style-infostack .site-branding .headerlogo:before {
    content: '';
    height: 30px;
    width: 1px;
    display: block;
    position: absolute;
    background: var(--prt-secondarycolor);
	opacity: 13%;
    right: 0;
    left: auto;
    top: 0;
    bottom: 0;
    margin: auto 0;
}
.prt-header-style-infostack .site-branding .headerlogo {
    padding-right: 35px;
    margin-right: 20px;
    position: relative;
}
    /*** Sub Navigation Section ***/
	.prt-header-style-infostack .prt-topbar-content .prt-align-right {
		position: relative;
	}
	.prt-header-style-infostack .prt-topbar-content .prt-col-wrapper-bg-layer.prt-bg-layer {
		background-color: var(--prt-skincolor);
		margin-right: -500px;
		position: absolute;
		right: 0;
		left: auto;
		height: 80px;
	}
	.prt-header-style-infostack .prt-topbar-content .prt-wrap-cell .top-contact li:before {
    left: 0;
}
	.prt-header-style-infostack .preyantechnosys-topbar-wrapper.container-full {
		padding-left: 100px;
		padding-right: 100px;
	    height: <?php echo esc_attr(ceil($header_height/2)+30); ?>px;
	}
	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item:not(.mega-menu-megamenu) ul.mega-sub-menu,
    #site-header-menu #site-navigation div.nav-menu > ul > li ul{
		box-shadow: 0 3px 25px 0px rgba(43, 52, 59, 0.10), 0 0 0 rgba(43, 52, 59, 0.10) inset;
    }
    header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.last ul.sub-menu,
    header#masthead #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.last ul.mega-sub-menu,
    header#masthead #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.mega-last ul.mega-sub-menu{
        left: auto;
        right: 0px !important;
    }
	.prt-headerstyle-classic-highlight header#masthead .prt-header-menu-position-left #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.lastsecond ul.mega-sub-menu ul.mega-sub-menu,
    .prt-headerstyle-classic-highlight header#masthead .prt-header-menu-position-left #site-header-menu #site-navigation div.nav-menu > ul li.lastsecond ul.sub-menu ul.sub-menu {
		left:100%;
	}
	header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.last ul.sub-menu ul.sub-menu, 
	header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.lastsecond ul.sub-menu ul.sub-menu,
	header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.lastthird ul.sub-menu ul.sub-menu,
	header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.lastfourth ul.sub-menu ul.sub-menu, 	 	
	header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.last ul.children ul.children, 
	header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.lastsecond ul.children ul.children,
	header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.lastthird ul.children ul.children,
	header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.lastfourth ul.children ul.children,
	header#masthead #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.lastsecond ul.mega-sub-menu ul.mega-sub-menu,
	header#masthead #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.last ul.mega-sub-menu ul.mega-sub-menu,
	header#masthead #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.mega-last ul.mega-sub-menu ul.mega-sub-menu{
    	left: -100%;
    }            
    #site-header-menu #site-navigation div.nav-menu > ul ul {
        width: 250px;
        padding:0px 15px;
    }       
    #site-header-menu #site-navigation div.nav-menu > ul ul li > a,    
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item > a,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu .mega-sub-menu a {
        margin: 0;
        display: block;
        padding: 12px 0px 13px 0px;
        position: relative;
    }	
	.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget .sbi_photo_wrap a {
		display: block;
	}
	#site-header-menu #site-navigation div.nav-menu > ul ul li > a,    
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li > a{
       -webkit-transition: all .3s linear;
		transition: all .3s linear;
        border-bottom: 0 solid rgb(0,0,0,.09);
    }
	 
	#mega-menu-wrap-preyantechnosys-main-menu #mega-menu-preyantechnosys-main-menu li.mega-menu-item-has-children > a.mega-menu-link > span.mega-indicator:after,
    #site-header-menu #site-navigation div.nav-menu > ul > li i:before {
		transition: transform .5s cubic-bezier(.19,1,.22,1);
	}
	#mega-menu-wrap-preyantechnosys-main-menu #mega-menu-preyantechnosys-main-menu li.mega-toggle-on.mega-menu-item-has-children > a.mega-menu-link > span.mega-indicator:after, #site-header-menu #site-navigation div.nav-menu > ul > li:hover i:before {
		transform: rotate(-180deg);
	}
	#site-header-menu #site-navigation div.nav-menu > ul > li:hover i:before {
		text-align:left;
	}
	
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item{
        padding: 0px 15px;
		overflow: hidden;
    }
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item:last-child{
    	border-right: none;
    }          
    #site-header-menu #site-navigation div.nav-menu > ul li:hover > ul {
        visibility: visible;
        opacity: 1;
        filter: alpha(opacity=100);
        top: 100%;
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
		filter: drop-shadow(0px 1px 10px rgba(0,0,0,.08));
    } 
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-flyout ul.mega-sub-menu ul.mega-sub-menu,
	#site-header-menu #site-navigation div.nav-menu > ul li > ul ul  {
        border-left: 0;
        left: 100%;
		top: 0px!important;      
    }
	#site-header-menu #site-navigation div.nav-menu > ul li > ul ul,
	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-flyout ul.mega-sub-menu ul.mega-sub-menu {
		left:calc(100% + 25px);
	}
    #site-header-menu #site-navigation ul ul li {
    	position: relative;
		list-style: none;
		padding:0 0px;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul ul {
    	text-align: left;
        position: absolute;
        visibility: hidden;
        display: block;
        opacity: 0; 
        line-height: 14px;        
        margin: 0;
        list-style: none;
        left: 0;        
        border-radius:0px;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
        background-clip: padding-box;
        transition: all .5s ease;
        z-index: 99;
         -webkit-transition: all 0.2s ease-out;
        transition: all 0.5s ease-out;
        -moz-transition: all 0.5s ease-out;
        -ms-transition: all 0.5s ease-out;
        -webkit-box-shadow: 0px 4px 4px 1px rgb(0 0 0 / 20%);
        box-shadow: 0px 4px 4px 1px rgb(0 0 0 / 20%);
        -webkit-transform: rotateX(-90deg);
        transform: rotateX(-90deg);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
		padding: 15px 25px;
    }
	
	.prt-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li:last-child a {
		border-bottom: none;
	}
	
	
	.prt-headerstyle-classic-overlay #site-header-menu #site-navigation div.nav-menu ul ul.sub-menu li a {
		padding: 13px 0;
	}
	#mega-menu-wrap-preyantechnosys-main-menu #mega-menu-preyantechnosys-main-menu li.mega-menu-item a.mega-menu-link:before,
	.prt-mmmenu-override-yes #mega-menu-wrap-prt-main-menu #mega-menu-prt-main-menu li.mega-menu-item a.mega-menu-link:before {
		vertical-align: unset;
	}
	.prt-mmmenu-override-yes #site-header-menu #mega-menu-preyantechnosys-main-menu>li.mega-menu-item-has-children > a.mega-menu-link > span.mega-indicator:after{
		font-size: 16px;
		margin-left: 0;
		margin-top: 0px;
		opacity: 0.8;
		content: '\f107';
		font-family: 'prt-fixter-icons';
    }
	#mega-menu-wrap-preyantechnosys-main-menu #mega-menu-preyantechnosys-main-menu li.mega-menu-item-has-children li.mega-menu-item-has-children > a.mega-menu-link > span.mega-indicator::after {
    margin-top: 1px;
}
	
    /*** Sep Section ***/
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal>li.mega-menu-megamenu>ul.mega-sub-menu li.mega-menu-item:nth-child(odd):after {
        content: ' ';
        display: block;
        width: 30px;
        height: 1000px;
        right: 0px;
        top: 0;
        position: absolute;
        border-right: 1px solid var(--prt-bordercolor);
    } 
	.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title,
    #site-header-menu #site-navigation div.nav-menu ul ul > li,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li:not(.mega-menu-megamenu) ul.mega-sub-menu > li,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu ul.mega-sub-menu .mega-menu-item li {
    	border-bottom: 0 solid transparent;
    }
	 #site-header-menu #site-navigation div.nav-menu ul ul > li:last-child, 
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li:not(.mega-menu-megamenu) ul.mega-sub-menu > li:last-child{
        border-bottom: none !important;
    }
	 .prt-dmenu-sep-grey .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title,
    .prt-dmenu-sep-grey #site-header-menu #site-navigation div.nav-menu ul ul > li,
    .prt-dmenu-sep-grey .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li:not(.mega-menu-megamenu) ul.mega-sub-menu > li,
    .prt-dmenu-sep-grey .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu ul.mega-sub-menu .mega-menu-item li {
        border-bottom-color: rgba(0, 0, 0, 0.08);
    }
    .prt-dmenu-sep-grey .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal>li.mega-menu-megamenu>ul.mega-sub-menu li.mega-menu-item:after {
        border-right-color: #f5f5f5;
    } 
    .prt-dmenu-sep-white .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal>li.mega-menu-megamenu>ul.mega-sub-menu li.mega-menu-item:after {
        border-right-color: rgba(255,255,255,0.10);
    } 
	.prt-dmenu-sep-white .prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title,
    .prt-dmenu-sep-white #site-header-menu #site-navigation div.nav-menu ul ul > li,
    .prt-dmenu-sep-white .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li:not(.mega-menu-megamenu) ul.mega-sub-menu > li,
    .prt-dmenu-sep-white .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu ul.mega-sub-menu .mega-menu-item li {
        border-bottom-color: rgba(255, 255, 255, 0.10);
    }
    /*** Sticky Header Height ***/ 
    header .prt-header-highlight-logo .is_stuck #site-header-menu,
    header .is_stuck #site-header-menu #site-navigation,    
    .is_stuck .headerlogo,
    .is_stuck .preyantechnosys-fbar-btn,  
    .is_stuck .prt-header-icon,
    .is_stuck .prt-header-text-area,
    .is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li,
    .is_stuck.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li,    
    .is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li > a, 
    .is_stuck.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a{
        height: <?php echo esc_attr($header_height_sticky); ?>px ;
        line-height: <?php echo esc_attr($header_height_sticky); ?>px !important;
    }

	.site-header.prt-bgcolor-white .prt-header-icons .prt-header-wc-cart-link a:before{
		background-color:rgba(0,0,0,0.08);
	}

	
    /*** Sub Navigation menu ***/ 
    #site-header-menu #site-navigation div.nav-menu > ul > li > ul,
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li > ul.mega-sub-menu{
        top: auto; 
		right: 0;
		left: 0;
		margin-top: 0;
		border-top: 0 solid <?php echo esc_attr($skincolor); ?>;
		border-radius: 20px;
    }  
	#site-header-menu #site-navigation div.nav-menu > ul > li li a {
		position: relative;		
	}
	#site-header-menu #site-navigation div.nav-menu > ul > li a:before,
	#site-header-menu #site-navigation div.nav-menu > ul > li > ul.sub-menu a:before {
		position: absolute;
		content: '';
		left: 0;
		bottom: 6px;
		background-color: var(--prt-skincolor);
		height: 1px;
		width: 0%;
		transition: all .3s ease 0s;		
	}	
	#site-header-menu #site-navigation div.nav-menu > ul > li a:before {
		bottom: 28px;		
	}
	.prt-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-ancestor > a:before,
	#site-header-menu #site-navigation div.nav-menu > ul > li > ul.sub-menu li.current-menu-item a:before,
	#site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-item  a:before,
	#site-header-menu #site-navigation div.nav-menu > ul > li > ul.sub-menu li:hover > a:before {
		width: 100%;
	}	
	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-main-demos ul.mega-sub-menu li.widget_media_image  > a {
		padding: 0;
	}
.preyantechnosys-linkeffect-border .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-main-demos ul.mega-sub-menu li.widget_media_image > a:before, .preyantechnosys-linkeffect-border #site-header-menu #site-navigation div.nav-menu > ul > li > ul.sub-menu a:before, .preyantechnosys-linkeffect-border .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu .mega-sub-menu a:before,
.preyantechnosys-linkeffect-border .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item > a:before {
	content: '';
    width: 0;
	display: block;
    height: 1px;
    bottom: 6px!important;
    position: absolute;
    left: auto;
    right: 0;
    -webkit-transition: width .6s cubic-bezier(.25,.8,.25,1) 0s;
    transition: width .6s cubic-bezier(.25,.8,.25,1) 0s;
}
<?php if( $dropmenu_active_link_color=='skin' && !empty($dropmenu_active_link_custom_color) ){ ?>
.preyantechnosys-linkeffect-border .prt-dmenu-active-color-skin .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-main-demos ul.mega-sub-menu li.widget_media_image > a:before, .preyantechnosys-linkeffect-border .prt-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li > ul.sub-menu a:before, .preyantechnosys-linkeffect-border .prt-dmenu-active-color-skin .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu .mega-sub-menu a:before, .preyantechnosys-linkeffect-border .prt-dmenu-active-color-skin .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item > a:before  {
	background: <?php echo esc_attr($skincolor);?>
}
<?php } ?>
<?php if( $dropmenu_active_link_color=='custom' && !empty($dropmenu_active_link_custom_color) ){ ?>
.preyantechnosys-linkeffect-border .prt-mmenu-active-color-custom .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-main-demos ul.mega-sub-menu li.widget_media_image > a:before, .preyantechnosys-linkeffect-border .prt-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li > ul.sub-menu a:before, .preyantechnosys-linkeffect-border .prt-mmenu-active-color-custom .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu .mega-sub-menu a:before, .preyantechnosys-linkeffect-border .prt-mmenu-active-color-custom .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item > a:before  {
	background: <?php echo esc_attr($dropmenu_active_link_custom_color);?>
}
<?php } ?>
.preyantechnosys-linkeffect-border .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-main-demos ul.mega-sub-menu li.widget_media_image > a:before, .preyantechnosys-linkeffect-border #site-header-menu #site-navigation div.nav-menu > ul > li > ul.sub-menu li:hover > a:before, .preyantechnosys-linkeffect-border .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu .mega-sub-menu a:hover:before, .preyantechnosys-linkeffect-border .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item > a:hover:before {
    width: 100%;
    left: 0;
    right: auto;
    margin: 0;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item .mega-main-demosul.mega-sub-menu li.widget_media_image > a {
	border: none;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-main-demos > ul.mega-sub-menu > li.mega-menu-item.widget_media_image {
    padding: 0 15px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget .prt-box-megamenu {
    padding: 20px 15px 0;
    position: relative;
	height: 150px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget .prt-box-iconbox {
    position: absolute;
    top: 43%;
    left: 45px;
    right: 45px;
    display: flex;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget .prt-featured-mega-wrapper {
    padding-top: 10px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget .prt-box-desc {
    padding-left: 70px;
	color: var(--body-fonts-color);
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget .prt-box-desc p {
	color: var(--body-fonts-color);
	line-height: var(--body-line-height);
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget .prt-box-desc a {
    display: inline-block;
    font-weight: var(--button-font-weight);
    color: var(--prt-secondarycolor);
	padding: 0;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-main-demos > ul.mega-sub-menu > li.mega-menu-item.widget_media_image .mega-block-title {
    color:#fff;
    background: var(--prt-secondarycolor);
    text-align: center;
    padding: 7px 5px;
    text-transform: capitalize;
    font-size: 13px;
    position: absolute;
    bottom: -50px;
    left: 15px;
    right: 15px;
    z-index: 2;
	opacity: 0;
	transition: all 0.5s ease;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-main-demos > ul.mega-sub-menu > li.mega-menu-item.widget_media_image:hover .mega-block-title {
    bottom: 0;
	opacity: 1;
	transition: all 0.5s ease;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-main-demos ul.mega-sub-menu li.widget_media_image > a:after {
    content: '\e801';
    display: block;
    font-family: 'prt-fixter-icons';
    height: 30px;
    width: 30px;
    line-height: 30px;
    text-align: center;
    background: var(--prt-skincolor);
    border-radius: 50%;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 1;
	transition: all 0.5s ease;
	transform: scale(0);
	font-size: 13px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.widget_media_image:hover > a:after {
    transition: all 0.5s ease;
	transform: scale(1);
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal>li.mega-menu-megamenu>ul.mega-sub-menu li.mega-menu-item.widget_nav_menu:after {
    border-color: var(--prt-bordercolor);
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal>li.mega-menu-megamenu>ul.mega-sub-menu li.mega-menu-item.widget_nav_menu:last-child:after {
    border-color: transparent;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-withoutpadding > ul.mega-sub-menu {
    padding: 0;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-main-demos > ul.mega-sub-menu {
    padding: 30px 15px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-instablock > ul.mega-sub-menu > li.mega-menu-item.widget_media_gallery, .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-instablock > ul.mega-sub-menu > li.mega-menu-item.widget_media_image {
    padding-top: 35px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-withoutpadding.mega-menu-instablock > ul.mega-sub-menu > li.mega-menu-item.widget_nav_menu:nth-child(2):after {
    border: 0;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item.widget_media_gallery .gallery-item:last-child {
    padding-bottom: 0;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item.widget_media_gallery .gallery-item {
    padding-bottom: 10px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-menu-instablock 
 .mega-sub-menu > li.mega-menu-item-type-widget #sb_instagram {
    padding: 0 25px;
	padding-bottom: 35px !important;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-menu-instablock .mega-sub-menu > li.mega-menu-item-type-widget #sb_instagram .sb_instagram_header.sbi_medium .sbi_header_text h3 {
    margin: 0 !important;
    padding: 0 !important;
    clear: unset !important;
    float: none;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-menu-instablock .mega-sub-menu > li.mega-menu-item-type-widget #sb_instagram .sbi_header_text {
    display: inline-block;
    vertical-align: top;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-menu-instablock .mega-sub-menu > li.mega-menu-item-type-widget #sb_instagram .sbi_header_img {
    display: inline-block;
    vertical-align: top;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-menu-instablock .mega-sub-menu > li.mega-menu-item-type-widget #sb_instagram svg.sbi_new_logo {
    margin: -1px 7px 0 0;
    color: #ff0000;
}
header .mega-menu-instablock #sb_instagram .sb_instagram_header .sbi_header_text.sbi_no_bio h3 {
    padding: 0 0 0 35px !important;
    margin: 0 !important;
    float: none;
    clear: unset;
	color: var(--body-fonts-color);
	transition: all 0.5s ease;
}
header .mega-menu-instablock #sb_instagram .sb_instagram_header .sbi_header_link:hover .sbi_header_text.sbi_no_bio h3 {
	color: var(--prt-secondarycolor);
	transition: all 0.5s ease;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget #sbi_images {
    margin: 0 -5px;
	padding: 0 !important;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget #sb_instagram.sbi_col_5 #sbi_images .sbi_item {
    width: 14%;
	padding-right: 15px !important;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget .sbi_photo_wrap {
    overflow: hidden;
    border-radius: 5px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget div.sb_instagram_header {
    padding: 0 !important;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu .mega-sub-menu a.sbi_header_link {
    padding: 0 0 0 0;
    display: inline-block;
    vertical-align: top;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-instablock > ul.mega-sub-menu > li.mega-menu-item.widget_media_image {
    padding-right: 10px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-instablock > ul.mega-sub-menu > li.mega-menu-item.widget_media_gallery {
    width: 15.3%;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-instablock > ul.mega-sub-menu > li.mega-menu-item:last-child:before {
    content: '';
    display: block;
    height: 1px;
    width: 50%;
    background: var(--prt-bordercolor);
    position: absolute;
    top: 0;
    bottom: auto;
    left: 0;
    right: auto;
    z-index: -1;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-instablock > ul.mega-sub-menu > li.mega-menu-item:last-child {
    margin-top: -1px;
	padding-top: 20px;
}
	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu{
        padding: 15px;
        margin: 0px auto;
        width: calc(100% - 75%);  
		box-shadow: 0 2px 10px 0px rgb(0 0 0 / 8%), 0 0 0 rgb(0 0 0 / 8%) inset;		
	}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-fullwidth > ul.mega-sub-menu {
    width: 100%;
} 
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-fullwidth > ul.mega-sub-menu li:last-child {
    padding-right: 25px;
}
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-customwidth > ul.mega-sub-menu {
    width: calc(100% - 41%);
} 
.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-menu-withoutpadding > ul.mega-sub-menu > li.mega-menu-item.widget_nav_menu {
    padding: 25px 0 20px;
}  
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item:last-child:after {
    	border-right: none;
    }  
    /*** Sticky Sub Navigation menu ***/
    .is_stuck  #site-header-menu #site-navigation div.nav-menu > ul > li > ul, 
    .is_stuck.prt-mmmenu-override-yes  #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li > ul.mega-sub-menu{
        top: <?php echo esc_attr($header_height_sticky); ?>px;
    } 
    /*** Header height ***/
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle + label{
        top: <?php echo esc_attr(ceil($header_height/2)); ?>px;
    }  
    .site-header-main.container-fullwide{
    	padding-left: 60px;
        padding-right: 60px;
    }    
	.prt-header-overlay .site-header-main.container-fullwide {
		padding-left: 60px;
	}
	/*** Header Icon border ***/
	.prt-header-icons{	
		position: relative;
        height: <?php echo esc_attr($header_height); ?>px;
		padding-left:17px;
    }       
	.is_stuck .prt-header-icons{	
		border-left-color: rgba( <?php echo preyantechnosys_hex2rgb($stickymainmenufontcolor); ?> , 0.15) ;
        height: <?php echo esc_attr($header_height_sticky); ?>px;
    }
	.preyantechnosys-fullwide .prt-header-style-classic .is_stuck .prt-header-icons .prt-header-search-link a{
		height: <?php echo esc_attr($header_height_sticky); ?>px;
		line-height: <?php echo esc_attr($header_height_sticky); ?>px;
	}
	.prt-header-overlay .prt-header-icons{
		float:right;
	}
	.prt-header-overlay .prt-header-icons:before {
		display: block;

		position: absolute;
		height: 43px;
		width: 1px;
		right: auto;
		left: 0;
		top: 0;
		bottom: 0;
		margin: auto;
		background-color: rgba( 255,255,255 ,0.13);
	}

	.prt-header-overlay .prt-header-menu-position-right .prt-header-icons {
		margin-left: 10px;
	}
	.prt-header-icons:before {
		display: block;

		position: absolute;
		height: 30px;
		width: 1px;
		right: -15px;
		top: 50%;
		margin-top: -14px;
		background-color: rgba( <?php echo preyantechnosys_hex2rgb($mainMenuFontColor); ?> ,0.20) ;
	}
	.is_stuck .prt-header-icons:before {
		background-color: rgba( <?php echo preyantechnosys_hex2rgb($stickymainmenufontcolor); ?> ,0.09) ;	
	}
	/*** Mega menu widget calendar ***/
	#site-header-menu #site-navigation .mega-menu-item-type-widget.widget_calendar caption {
		padding: 0px;
	}
	#site-header-menu #site-navigation .mega-menu-item-type-widget.widget_calendar .calendar_wrap {
		padding-top:10px;
	} 
    /*** Overlay Header ***/    
    .prt-header-overlay .prt-stickable-header-w{
    	background-color: transparent;
    }
    .prt-header-overlay .site-header-menu.prt-bgcolor-grey, 
    .prt-header-overlay .site-header.prt-bgcolor-grey{
    	background-color: rgba(235, 235, 235, 0.38);
    }   
    .prt-header-overlay .site-header-menu.prt-bgcolor-white,
    .prt-header-overlay .site-header.prt-bgcolor-white{
    	background-color: rgba(255, 255, 255, 0.05);
    }
    .prt-header-overlay .site-header-menu.prt-bgcolor-skincolor,
    .prt-header-overlay .site-header.prt-bgcolor-skincolor{
    	background-color: rgba( <?php echo preyantechnosys_hex2rgb($skincolor); ?> , 0.30);
    }    
    .prt-header-overlay .site-header-menu.prt-sticky-bgcolor-darkgrey.is_stuck{
    	background-color: #151515;
    }    
    .prt-header-overlay .site-header-menu.prt-sticky-bgcolor-grey.is_stuck{
    	background-color: #f5f5f5;
    }
    .prt-header-overlay .site-header-menu.prt-sticky-bgcolor-white.is_stuck{
    	background-color: #fff;
    }
    .prt-header-overlay .site-header-menu.prt-sticky-bgcolor-skincolor.is_stuck{
    	background-color: rgba( <?php echo preyantechnosys_hex2rgb($skincolor); ?> , 1);
    } 	
	.prt-topbar-content .prt-wrap-cell .preyantechnosys-social-links-wrapper:before {
    opacity: 0;
}
.prt-header-overlay.prt-header-style-classic2 .site-branding {
    float: left;
}
.prt-header-overlay.prt-header-style-classic2 #site-header.prt-bgcolor-darkgrey {
	background-color: rgba( <?php echo preyantechnosys_hex2rgb($secondarycolor); ?> , 0.60) ;
}
.prt-header-overlay.prt-header-style-classic2 #site-header.is_stuck.prt-bgcolor-darkgrey {
    background-color: var(--prt-secondarycolor);
}
	
	.prt-header-style-infostack .prt-header-icons:before {
		content:unset;
	}
    /*** ThemetechMount Center Menu ***/ 	
	.prt-header-menu-position-center #site-header-menu{
		float: none;
	}
	.prt-header-menu-position-center #site-header-menu #site-navigation{
		text-align: center;
		width: 100%;
	}    
    .prt-header-menu-position-center #site-header-menu  #site-navigation .nav-menu,
	.prt-header-menu-position-center.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap {		
		float: none;
		right: 0;
		left: 0;
		text-align: center;  		
	}	
	.prt-header-menu-position-center.prt-mmmenu-override-yes  #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal {
		position: static !important;
		display: inline-block;
	}
	.prt-header-menu-position-center .site-header-menu.prt-wrap-cell{
		display: block;
	}
	.prt-header-menu-position-center .headerlogo, 
	.prt-header-menu-position-center .prt-header-icon{
		position: relative;
		z-index: 2;
	}
	/*** ThemetechMount Left Menu ***/ 	
	.prt-header-menu-position-left #site-header-menu{
		float: none;
		display: block;
    }
    .prt-header-menu-position-left #site-header-menu #site-navigation .nav-menu,
	.prt-header-menu-position-left #site-header-menu #site-navigation div.mega-menu-wrap {
		float: left;
	}
	.prt-header-menu-position-left .site-branding{	
		padding-right: 5px;
	}	
	/*** ThemetechMount Dropdown widht narrow ***/ 	
	.site-header-main.container-full #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu{		
		max-width: 1200px;
		right: 0;
		left: -15px;
		margin: 0px auto;
	}
	/* Header Social link */ 
    .site-header .preyantechnosys-social-links-wrapper{
    	float: right;
    }
	.prt-header-overlay .site-header .preyantechnosys-social-links-wrapper{
    	float: left;
    }
	
    .site-header .social-icons {
        padding-top: 0;
        padding-bottom: 0;
    }
    
	#site-header-menu #site-navigation div.mega-menu-wrap > ul > li:last-child:after,
    #site-header-menu #site-navigation div.nav-menu > ul > li:last-child:after{
        display: none;
    }
	.prt-header-style-classic-highlight .prt-header-icons::before,
	.prt-header-style-infostack .kw-phone .prt-header-icons:last-child:after {
		content:none;
	}	  
    .prt-header-style-infostack #site-header-menu #site-navigation div.nav-menu > ul > li:hover > a:before,
    .prt-header-style-infostack .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item:hover > a:before{
        width: 15px;
        opacity:1;
    }  
	.prt-header-style-infostack .prt-top-info-con > .header-widget:after {
		content: "";
		height: 50px;
		width: 1px;
		background-color: rgba(0, 0, 0, 0.06);
		display: block;
		position: absolute;
		right: 0px;
		top: 30px;
	}
	.prt-header-style-infostack .prt-top-info-con > .header-widget:last-child:after {
		content:none;
	}
	.prt-header-style-infostack .prt-titlebar-wrapper.prt-breadcrumb-on-bottom .prt-titlebar-main > .container .prt-titlebar-main-inner .entry-title-wrapper {
	    margin-top: -14px;	
	}
	.prt-header-style-infostack .prt-header-menu-bg-color-custom .prt-header-icons .prt-header-search-link a,
	.prt-header-style-infostack .prt-sticky-bgcolor-custom .prt-header-icons .prt-header-search-link a,
	.prt-header-style-infostack .prt-sticky-bgcolor-custom .prt-header-icons .prt-header-wc-cart-link a,
	.prt-header-style-infostack .prt-header-menu-bg-color-custom .prt-header-icons .prt-header-wc-cart-link a {
		color: rgba(2,13,38,1);
	}
    /* Right to Left Dropdown menu */          
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-align-bottom-right ul.mega-sub-menu li > a:before {
        content: '\E83A';    
        left: auto;
        right: -14px;   
        -webkit-transition: right .2s ease-in-out;
        -moz-transition: right .2s ease-in-out;
        transition: right .2s ease-in-out;
	}    
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-menu-megamenu.mega-align-bottom-right ul.mega-sub-menu li.menu-item > a{
    	text-align: right;
    }    
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-align-bottom-right > ul.mega-sub-menu li.mega-menu-item:after {
        right: auto;
        left: 12px;
        position: absolute;
        border-right: none;
        border-left: 1px solid rgba(255,255,255,0.08);
    }  
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-align-bottom-right > ul.mega-sub-menu > li.mega-menu-item > h4.mega-block-title {
        text-align: right;
    }    
   .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-align-bottom-right > ul.mega-sub-menu > li.mega-menu-item:first-child:after {
    	border-left: none;
	}    
	.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-flyout ul.mega-sub-menu ul.mega-sub-menu{
        background-image: none !important;      
    }    
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-menu-megamenu.mega-align-bottom-right ul.mega-sub-menu li.menu-item:hover > a,    
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-align-bottom-right ul.mega-sub-menu li.mega-menu-item:hover > a {
    	padding-left: 0px;
        padding-right: 20px;
	}
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-align-bottom-right ul.mega-sub-menu li:hover > a:before {
        left: auto;
        right: 0px;
	}    
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-align-bottom-right ul.mega-sub-menu > li.mega-menu-item-type-widget div.textwidget{
        padding-left: 15px;
        text-align: right;
    }    
    /* Header sticky animation */  
    .site-header.is_stuck {
        position: fixed;
        width:100%;
        top:0;    
        z-index: 999;
        margin:0;
        animation-name: menu_sticky;
        -webkit-box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.17);
        -moz-box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.17);
        box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.17);
        padding: 0;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul > li ul li.page_item_has_children > a:after, 
    #site-header-menu #site-navigation div.nav-menu > ul > li ul li.menu-item-has-children > a:after{
		font-family: "FontAwesome";
		font-style: normal;
		font-weight: normal;
		display: inline-block;
		text-decoration: inherit;
		text-align: center;
		opacity: 1;
		font-variant: normal;
		text-transform: none;
		font-size: 16px;
		content: "\f105";
		position: absolute;
		background-color: transparent;
		right: -7px;
		left: auto;
		top: 14px;
		margin: 0;
    }    
    .prt-header-icons .preyantechnosys-fbar-btn,
    .prt-header-icons .prt-header-icon{
        margin-left: 7px;
    }
	.prt-header-icons .prt-header-icon.prt-header-wc-cart-link {
		padding-left:15px;
	}
	.prt-header-style-infostack .kw-phone .prt-header-icons .prt-header-wc-cart-link {
		margin-right: 0px;
		margin-left: 15px;
		padding-left: 10px;
		border-left: 1px solid rgba( <?php echo preyantechnosys_hex2rgb($mainMenuFontColor); ?> , 0.07);
	}
	.prt-header-style-infostack .is_stuck .kw-phone .prt-header-icons .prt-header-wc-cart-link {
		border-color: rgba( <?php echo preyantechnosys_hex2rgb($stickymainmenufontcolor); ?> , 0.07);
	}
     /*** Tm-Header-Invert ***/ 
    .prt-header-style-classic.prt-header-invert .container-fullwide #site-header-menu{
        margin-left:20px;
    }
    .prt-header-invert .site-header-main.container-fullwide{
        padding-right: 30px;
        padding-left: 0px;
    }     
    .prt-header-invert #site-header-menu{
        float: left;
    }
    .prt-header-invert .site-branding{
        float:right;    
    } 
    .prt-header-invert .prt-header-icons {        
        float: left;
        border-left: none;
        padding-right: 0px;
        padding-left: 0px;
        margin-left: 0px;
        margin-right: 0px;
    }
    .prt-header-invert .site-header .preyantechnosys-social-links-wrapper{
        padding-right: 0;
        padding-left: 0px;
    } 
    .prt-header-invert .prt-header-search-link,
    .prt-header-invert .prt-header-wc-cart-link{
        float: left;
        padding-left: 0;        
    }
    .prt-header-invert #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal {        
        text-align: right;
    }    
    .prt-header-invert #site-header-menu #site-navigation div.nav-menu > ul > li, 
    .prt-header-invert #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item {
        float: right;      
    }    
    .prt-header-invert .prt-header-top-wrapper.container-fullwide{
        padding-right: 15px;
    }
    .prt-header-invert .prt-header-icon, 
    .prt-header-invert .preyantechnosys-fbar-btn {
        margin-right: 20px;
        margin-left: 0px;
    }
    .prt-header-style-infostack.prt-header-invert .prt-header-widgets-wrapper {
        float: left;
    }    
    .prt-header-style-infostack.prt-header-invert .prt-header-widgets-wrapper .header-widget {
        padding-right: 24px;
        padding-left: 0;
    }    
    .prt-header-style-infostack.prt-header-invert .preyantechnosys-fbar-btn{        
        border-left: 1px solid rgba( <?php echo preyantechnosys_hex2rgb($mainMenuFontColor); ?> , 0.09) ;
        left: 0;
        float: left;
    }   
    .prt-header-style-infostack.prt-header-invert .prt-header-icon, 
    .prt-header-style-infostack.prt-header-invert .preyantechnosys-fbar-btn {
        margin-right: 0px;
        margin-left: 0px;
    }
    .prt-header-style-infostack:not(.prt-header-invert) .prt-header-top-wrapper.container-fullwide{
        padding-left: 15px;
        padding-right: 15px;
    }       
    .prt-header-style-classic .prt-header-highlight-logo .headerlogo{
        position: relative;
    }
    .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item-has-children > a.mega-menu-link:after{
        font-size: 10px;
		margin-left: 3px;
		margin-top: 3px;
		margin-top: 3px;
		opacity: 0.3;
    }
	.prt-header-style-infostack .site-header.is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li, 
    .prt-header-style-infostack .site-header.is_stuck .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap    ul.mega-menu.mega-menu-horizontal > li.mega-menu-item,      
    .prt-header-style-infostack .site-header.is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li > a, 
    .prt-header-style-infostack .site-header.is_stuck .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a,
    .prt-header-style-infostack .site-header.is_stuck .kw-phone .prt-header-icon, 
    .prt-header-style-infostack .site-header.is_stuck .kw-phone .prt-header-icons,	
     header.prt-header-style-infostack .site-header.is_stuck #site-header-menu #site-navigation,
    .prt-header-style-infostack .site-header.is_stuck .kw-phone .preyantechnosys-fbar-btn,
	.prt-header-style-infostack .site-header.is_stuck .headerlogo {
		 height: <?php echo esc_attr($header_height_sticky); ?>px ;
        line-height: <?php echo esc_attr($header_height_sticky); ?>px !important;
	}

		
	.prt-titlebar-wrapper.prt-breadcrumb-on-bottom .prt-titlebar .entry-title-wrapper {
		margin-top: -50px;
	}
	#site-header-menu #site-navigation .prt-header-icon a.prt-social-btn-link {
		font-size: 18px;
	}
	#site-header-menu #site-navigation .prt-header-icon.prt-header-social-box {
	    width: 50px;
		text-align: center;
	}
	#site-header-menu #site-navigation div.nav-menu > ul > li i {
		position: relative;
		font-size: 13px;
		transition: all 500ms ease;
		display: inline-block;
		top: 0;
		right: 20px;
	}
	#site-header-menu #site-navigation div.nav-menu > ul > li i:before {
		margin: 0;
		text-align: right;
	}
	/*** Themetechmount Classic Box ***/
	.prt-header-style-classic-box .site-header:not(.is_stuck) .container{
        padding: 0;       
    }
	.prt-header-style-classic-box .site-header:not(.is_stuck) .site-branding{
        padding-left: 20px;
    }  
    .prt-header-style-classic-box .site-header:not(.is_stuck) #site-header-menu{
        padding-right: 20px;
    }
    .prt-header-style-classic-box.prt-header-invert #site-header-menu{
        padding-left: 20px;
        padding-right: 0px;
    }
    .prt-header-style-classic-box.prt-header-overlay .site-header:not(.is_stuck){
    	background-color: transparent !important;
    }    
    .prt-header-style-classic-box.prt-header-overlay .site-header:not(.is_stuck) .container-fullwide{
        margin: 30px;
    }    
    .preyantechnosys-fullwide .prt-header-style-classic-box.prt-header-overlay .site-header .site-branding{
    	padding-left: 20px;
    }
    .preyantechnosys-fullwide .prt-header-style-classic-box.prt-header-overlay .site-header .site-header-menu{
    	padding-right: 20px;
    } 
	.prt-header-style-classic-box.prt-header-overlay .preyantechnosys-topbar-wrapper {
		padding:4px 0px 47px;
	}
	.prt-header-style-classic-box.prt-header-overlay .site-header:not(.is_stuck) > .prt-container-for-header {
		box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);	
	}
	.prt-header-style-classic-box.prt-header-overlay .prt-stickable-header-w {
	  top: <?php echo esc_html( ($header_height/2) + 9 ); ?>px;
	}
	.prt-header-style-classic-box.prt-header-overlay .prt-titlebar-wrapper .prt-titlebar-inner-wrapper .prt-titlebar-main{
		padding-top:<?php echo esc_html( ($header_height/2) + 9 ); ?>px;
	}
	.prt-header-menu-position-center #site-header-menu #site-navigation div.nav-menu > ul,
	.prt-header-menu-position-center.prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal {
		position: static !important;
		display: inline-block;
	}	
	.prt-header-style-classic-box.prt-header-overlay .prt-header-icons {
		float: right;
	}
	.prt-header-style-classic-box.prt-header-overlay .prt-header-text-area {
		padding-left: 10px;
	}
	.prt-header-style-classic-box .prt-container-for-topbar {
		padding: 0;
	}
	.site-header .preyantechnosys-social-links-wrapper {    
		padding-left: 13px;
	}
	
	.prt-menu-border {
		padding-right: 30px;
	}
	.prt-menu-border:after {
		display: block;
		content: "";
		position: absolute;
		height: 28px;
		width: 1px;
		right: 12px;
		top: 50%;
		margin-top: -14px;
		background-color: rgba( 255,255,255 ,0.09);
	}
	.prt-headerstyle-classic-overlay .prt-header-button {
		display: inline-block;
	}
	.prt-headerstyle-classic-overlay span.prt-text-white i,
	.prt-headerstyle-classic-overlay span.prt-text-white {
		color: #fff;
	}
	.prt-headerstyle-classic-overlay .prt-header-overlay .site-header-main.container-fullwide {
		padding-left: 100px;
		padding-right: 100px;
		margin-top: 30px;
	}
	.prt-headerstyle-classic-overlay .site-header-main-inner {
		border: 1px solid rgb(255 255 255 / 16%);
		padding: 0 20px 0 45px;
	}
	.prt-headerstyle-classic-overlay .prt-text-slider {
		writing-mode: vertical-rl;
		transform: rotate(180deg);
	}
	.prt-headerstyle-classic-overlay .flotingbar-title p {
		color: rgba(255,255,255,.6);
	}
	.prt-headerstyle-classic-overlay .prt-detailss span a {
		color: #fff !important;
		font-size: 14px;
		line-height: 24px;
	}
	.prt-headerstyle-classic-overlay .prt-detailss ul li {
		color: rgba(255,255,255,.50);
		font-size: 16px;
		line-height: 26px;
	}
	.prt-headerstyle-classic-overlay .side.bg-base-dark {
		padding-top: 30px;
	}
	.prt-headerstyle-classic-overlay .flotingbar-img {
		padding-bottom: 50px;
	}
	.prt-headerstyle-classic-overlay .prt-detailss {
		padding: 28px 0 130px 0;
	}
	.prt-headerstyle-classic-overlay span.prt-add {
		color: #fff;
	}
	.prt-headerstyle-classic-overlay .flotingbar-title h2 {
		font-size: 26px;
		line-height: 40px;
		margin-bottom: 25px;
		font-weight: 600;
	}
	.prt-headerstyle-classic-overlay .site-title:before {
		content: '';
		position: absolute;
		width: 1px;
		height: 100%;
		top: 0;
		right: -46px;
		background-color: rgb(255 255 255 / 16%);
	}
	.prt-header-style-classic.prt-header-overlay #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a,
.prt-header-style-classic.prt-header-overlay .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item:hover > a	{
    background: transparent;
}
	.prt-headerstyle-classic-overlay .home-link {
		background-color: var(--prt-skincolor-bg);
	}
	.prt-headerstyle-classic-overlay .prt-header-overlay .prt-bgcolor-darkgrey .preyantechnosys-topbar-inner {
		border-bottom: 0 solid transparent !important;
	}
	.prt-headerstyle-classic-overlay .headerlogo.preyantechnosys-logotype-image {
		display: flex;
	}
	.prt-headerstyle-classic-overlay .prt-topbar i {
		color: var(--prt-skincolor-text);
	}
	.prt-headerstyle-classic-overlay span.prt-text-white {
		padding-left: 10px;
	}
	.prt-headerstyle-classic-overlay .header-info-widget .top-contact li,
	.prt-headerstyle-classic-overlay ul.top-contact li {
		font-size: 14px;
		color: rgba(255 ,255, 255 , 0.50);
	}
	.prt-headerstyle-classic-overlay .top-contact i {
		color: var(--prt-skincolor-text);
	}
	.prt-headerstyle-classic-overlay .top-contact span.prt-text-white-right {
		color: #fff;
		font-weight: 600;
		padding-right: 9px;
	}
	.prt-headerstyle-classic-overlay li.prt-text-white {
		color: #fff !important;
	}
	.prt-headerstyle-classic-overlay .top-contact ul {
		margin: 26px 0 16px 0;
	}
	.prt-headerstyle-toplogo .prt-header-menu-position-left #site-header-menu #site-navigation .nav-menu {
		float: none;
		right: 0;
		left: 0;
		text-align: center;
	}
	.prt-headerstyle-classic-overlay ul.polylang_langswitcher {
		position: absolute;
		top: 100%;
		left: auto;
		right: 0;
		z-index: 1000;
		display: none;
		float: left;
		min-width: max-content;
		padding: 15px 20px;
		margin: 2px 0 0;
		font-size: 14px;
		text-align: left;
		list-style: none;
		background-color: #ffffff;
		-webkit-background-clip: padding-box;
		background-clip: padding-box;
		-webkit-box-shadow: 0px 0px 5px 0px rgb(0 0 0 / 10%);
		-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
		box-shadow: 0px 0px 5px 0px rgb(0 0 0 / 10%);
	}
	.prt-headerstyle-classic-overlay .prt-topbar-content .language-title {
		cursor: pointer;
		padding-left: 30px;
	}
	.prt-headerstyle-classic-overlay ul.polylang_langswitcher a {
		color: var(--body-fonts-color);
	}
	.prt-headerstyle-classic-overlay #site-header-menu #site-navigation div.nav-menu > ul li:hover > ul {
		top: 100%;
	}
		
	.prt-header-style-classic .prt-bgcolor-darkgrey #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a, .prt-header-style-classic .prt-bgcolor-darkgrey #site-header-menu #site-navigation div.nav-menu > ul > li:hover > a, .prt-header-style-classic #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > a {
    background: transparent;
	}
	.preyantechnosys-fullwide #site-header-menu #site-navigation div.nav-menu > ul li:nth-last-child(4) > ul ul {
		right: calc(100% + 20px);
		left: auto;
	}
	header#masthead #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.lastsecond ul.mega-sub-menu ul.mega-sub-menu {
		left: -128%;
	}
	.preyantechnosys-fullwide .prt-header-style-classic.prt-header-overlay .prt-header-text-area {
		padding: 0;
		padding-left: 24px;
		padding-right: 0;
	}
	.prt-headerstyle-classic-overlay .prt-whatsbox-image a.prt-wp-num {
		display: inline-block;
		color: var(--prt-whitecolor);
		padding-left: 10px;
	}
	.prt-headerstyle-classic-overlay .prt-whatsbox-image {
		display: flex;
		font-family: var(--special-element-fontfamily);
		font-weight: var(--special-element-fontweight);
		font-size: 12px;
	}
	.prt-headerstyle-classic-overlay .prt-wp-title {
		color: var(--prt-whitecolor);
		text-transform: uppercase;
		margin-right: 10px;
	}
	.preyantechnosys-header-borderbottom .site-header {
		border-bottom: 1px solid rgba(255,255,255,0.25);
	}
	.preyantechnosys-header-borderbottom .site-header.is_stuck {
		border: 0;
	}
	.prt-headerstyle-classic-overlay .prt-header-menu-position-left #site-header-menu #site-navigation div.nav-menu > ul,
	.prt-headerstyle-classic-overlay #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal {
		margin-left: 30px;
	}
	.prt-headerstyle-classic-overlay .prt-whatsbox-image img {
		max-width: 100%;
		max-height: 21px;
	}
	.prt-headerstyle-classic-overlay .site-description {
		display: none;
		font-size: var(--body-font-size);
		line-height: inherit;
		margin: 0;
		color: rgba(255,255,255,0.59);
		width: 100%;
		margin-left: 35px;
		font-family: var(--body-font-family);
		position: relative;
	}
	.prt-headerstyle-classic-overlay .headerlogo.preyantechnosys-logotype-text {
		display: flex;
	}
	.prt-headerstyle-classic-overlay .site-description:before {
		content: '';
		height: 35px;
		width: 1px;
		background: rgba(255,255,255,0.22);
		position: absolute;
		left: -15px;
		display: block;
		right: auto;
		top: 0;
		bottom: 0;
		margin: auto 0;
	}
	.prt-header-style-classic.prt-header-overlay #site-header-menu #site-navigation div.nav-menu > ul > li:hover > a {
		background: transparent;
	}
	.prt-headerstyle-classic-overlay .tm-whatsbox-image a.prt-wp-num {
		display: inline-block;
		color: var(--prt-whitecolor);
		padding-left: 10px;
	}
	
	.hitarea {
		cursor: pointer;
		float: right;
		height: 20px;
		position: absolute;
		right: 15px;
		top: 0;
		width: 20px;
		z-index: 7;
		text-align: center;
		padding: 0 1px;
		line-height: 20px;
		color: #ffffff;
	}
	#floatingbar-widgets .menu-main-menu-container .expandable-hitarea:before {
		content:"\f078";
		font-family: "FontAwesome";
		right: 0;
		font-size: 16px;
		color: #ffffff;
	}
	#floatingbar-widgets .collapsable-hitarea:before {
		font-family: 'FontAwesome';
		content:"\f077";
		font-size: 16px;
		color: #ffffff;
	}
	.prt-header-overlay .prt-header-icons .prt-header-search-link:before {
		display: block;
		content: "";
		position: absolute;
		height: 43px;
		width: 1px;
		right: auto;
		left: -20px;
		top: 0;
		bottom: 0;
		margin: auto;
		background-color: rgba( 255,255,255 ,0.13);
	}
	.prt-header-style-infostack .prt-top-info-con,
	.prt-header-style-toplogo .headerlogo,
	.prt-header-style-toplogo .info-widget,
	.prt-header-style-toplogo .headerlogo,
	.prt-header-style-infostack .prt-top-info-con > ul:not(.social-icons),
	.prt-header-style-infostack .headerlogo {
	    height: <?php echo esc_attr($header_height); ?>px;
	    line-height: <?php echo esc_attr($header_height); ?>px !important;
	}
	.prt-header-style-toplogo .headerlogo{
		display:inline-block;
	}
	.prt-header-style-toplogo .site-header,
	.prt-header-style-infostack .prtstickable-header-w {
	    position: absolute;
	    z-index: 21;
	    width: 100%;
	    box-shadow: none;
	    -khtml-box-shadow: none;
	    -webkit-box-shadow: none;
	    -moz-box-shadow: none;
	    -ms-box-shadow: none;
	    -o-box-shadow: none;
	}
	.prt-header-overlay.prt-header-style-toplogo .prt-stickable-header-w {
    position: static;
    }
    .themetechmount-topbar-wrapper.container-full {
	    padding-left: 80px;
	    padding-right: 80px;
	}
	.prt-header-style-toplogo .prt-header-top-wrapper .col-sm-4 {
	    padding: 0;
	}





    .prt-headerstyle-centerlogo-overlay .site-header-menu {
        float:none;
    }
    .prt-headerstyle-centerlogo-overlay .site-branding {
        position: absolute;
        top: 0;
        width: 100%;
        left: 0;
    }
    .prt-headerstyle-centerlogo-overlay .site-header:not(.is_stuck):after {
        position: absolute;
        bottom: 0;
        left: 0;
        content: unset;
        height: 1px;
        width: 100%;
        background-color: rgba(255,255,255,0.30);
    }
    .prt-headerstyle-centerlogo-overlay .site-header {
    	border-bottom: 1px solid rgba(255 , 255 , 255 , 0.20);
	}    
    .prt-headerstyle-centerlogo-overlay img.preyantechnosys-logo-img.stickylogo {
        width: 100%;
    }

.prt-headerstyle-centerlogo-overlay .site-header .prt-header-detail:after {
    content: '';
    position: absolute;
    height: 30px;
    width: 1px;
    top: 0;
    right: 0;
    left: auto;
    bottom: 0;
    margin: auto;
    background-color: rgba(255, 255, 255, 0.2);
}

.prt-headerstyle-centerlogo-overlay .site-title:after {
    position: absolute;
    content: "";
    background: rgb(255 255 255 / 31%);
    width: 1px;
    height: 100%;
    left: -25%;
    right: 0;
    margin: 0 auto;
}
.prt-headerstyle-centerlogo-overlay .site-title:before {
    position: absolute;
    content: "";
    background: rgb(255 255 255 / 31%);
    width: 1px;
    height: 100%;
    left: 0;
    right: -25%;
    margin: 0 auto;
}
.prt-headerstyle-centerlogo-overlay #site-header-menu #site-navigation .nav-menu {
    padding-right: 105px !important;
}
.prt-headerstyle-centerlogo-overlay .prt-header-menu-position-left .site-branding {
    padding-right: 0;
}
.prt-headerstyle-centerlogo-overlay span.prt-header-detail {
    font-size: 15px;
    color: rgb(255 255 255 / 80%);
    position: relative;
    padding-right: 22px;
}
.prt-headerstyle-centerlogo-overlay span.prt-header-detail a {
    color: #fff;
    font-weight: 500;
    position: relative;
    display: inline-block;
    line-height: normal;
    transition: all 0.5s ease-in-out;
}
.prt-headerstyle-centerlogo-overlay span.prt-header-detail a:hover {
    color: var(--prt-skincolor);
}
.prt-headerstyle-centerlogo-overlay span.prt-header-detail a:after {
    position: absolute;
    content: "";
    width: 100%;
    height: 1px;
    display: block;
    transition: all 0.5s ease-in-out;
    background-repeat: no-repeat;
    background: linear-gradient(to right, var(--prt-skincolor) 50%, #ffffff 50%);
    background-size: 200% 100%;
    background-position: 100% 50%;
}
.prt-headerstyle-centerlogo-overlay .site-header .preyantechnosys-social-links-wrapper {
    float: right !important;
    padding-left: 20px;
}
.prt-headerstyle-centerlogo-overlay .prt-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu {
    margin: 0;
    left: 60px;
  }
  .prt-header-style-centerlogo .headerlogo .site-title {
	    display: flex;
	    justify-content: center;
	    align-items: center;
	}
}