<?php 



show_admin_bar( false );
function register_my_menu() {
  register_nav_menu('main_nav',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' ); 



function register_custom_menu() {

register_nav_menu('menu_mobile', __('Menu mobile'));
}

add_filter('acf/settings/default_language', 'my_acf_settings_default_language');
 
function my_acf_settings_default_language( $language ) {
 
    return 'fr';
    
}

add_filter('acf/settings/current_language', 'my_acf_settings_current_language');
 
function my_acf_settings_current_language( $language ) {
 
    return 'en';
    
}

function enable_fancy_editor() {
	return true;
}
add_filter('pss_fancy_editor', 'enable_fancy_editor'); 

// ---------------------------------------- ZONE DE WIDGET --------------------------------------------------


  register_sidebar( array(
'name' => __( 'header', 'appliance' ),
'id' => 'header',
'description' => __( 'Widget de Header', 'appliance'),
'before_widget' => '<div id="header_persus">',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => '',
) );





