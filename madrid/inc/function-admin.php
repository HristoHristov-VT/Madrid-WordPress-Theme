<?php

/*
	
@package madridtheme
	
	========================
		ADMIN PAGE
	========================
*/

function madrid_add_admin_page() {
	//Generate Madrid Admin Page
	add_menu_page( 'Madrid Theme Options', 'Madrid', 'manage_options', 'alecaddd_madrid', 'madrid_theme_create_page', get_template_directory_uri() . '/img/madrid-icon.png', 110 );
	
    //Generate Madrid Admin Sub Page
    add_submenu_page( 'alecaddd_madrid', 'Madrid Theme Options', 'General', 'manage_options', 'alecaddd_madrid', 'madrid_theme_create_page' );
	add_submenu_page( 'alecaddd_madrid', 'Madrid CSS Options', 'Custom CSS', 'manage_options', 'alecaddd_madrid_css', 'madrid_theme_settings_page');

}
add_action( 'admin_menu', 'madrid_add_admin_page' );

//Activate custom settings
	add_action( 'admin_init', 'madrid_custom_settings' );

    function madrid_custom_settings() {
	register_setting( 'madrid-settings-group', 'first_name' );
	add_settings_section( 'madrid-sidebar-options', 'Sidebar Option', 'madrid_sidebar_options', 'alecaddd_madrid');
	add_settings_field( 'sidebar-name', 'First Name', 'madrid_sidebar_name', 'alecaddd_madrid', 'madrid-sidebar-options');
}


function madrid_theme_create_page() {
	require_once( get_template_directory() . '/inc/templates/madrid-admin.php' );
}

function madrid_theme_settings_page() {
	echo '<h1>Madrid Custom CSS</h1>';  
}