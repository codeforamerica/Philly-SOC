<?php
add_action('init', 'register_custom_menu');
 
function register_custom_menu() {
register_nav_menu('custom_menu', __('Custom Menu'));
}

if ( function_exists('register_sidebar') )
	register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
?>