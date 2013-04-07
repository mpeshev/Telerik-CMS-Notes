<?php

$sidebar_args = array(
		'id' => 'left-sidebar',
		'name' => 'Main Sidebar'		
		);

register_sidebar( $sidebar_args );

register_nav_menu('top-site-menu', "This is my top site menu");

add_action( 'wp_enqueue_scripts', 'tlr_enqueue_scripts' );

function tlr_enqueue_scripts() {
	wp_enqueue_script( 'jquery' );
}