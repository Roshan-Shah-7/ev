<?php if ( function_exists('max_mega_menu_is_enabled') && max_mega_menu_is_enabled('preyantechnosys-main-menu') ) : ?>

	<!-- Max Mega Menu is enabled so we are not showing our toggle menu -->
	
<?php else: ?>

<button id="menu-toggle" class="menu-toggle">
	<span class="prt-hide"><?php esc_attr_e( 'Toggle menu', 'fixter' ); ?></span><i class="prt-fixter-icon-bars"></i>
</button>

<?php endif; ?>

<?php if ( has_nav_menu( 'preyantechnosys-main-menu' ) ) : ?>
<?php wp_nav_menu( array( 'theme_location' => 'preyantechnosys-main-menu', 'menu_class' => 'nav-menu', 'container_class' => 'nav-menu' ) ); ?>
<?php endif; ?>