<?php

function dolboblog_setup() {
	add_theme_support( 'automatic-feed-links' );
	
	add_theme_support( 'custom-logo', array(
		'width'       => 190,
		'height'      => 90,
		'flex-height' => true,
        'flex-width'  => true,
	) );


    register_nav_menus( array(
        'menu'    => __( 'Menu'),
        
    ) );
}
add_action( 'after_setup_theme', 'dolboblog_setup' );

function dolboblog_widgets_init() {
	register_sidebar( array(
		'name' =>__('Widget'),
		'id' => 'sidebar',
		'description' => '',
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebarwidget-title">',
		'after_title'   => '</h3>',
	) );
	}

    register_sidebar( array(
        'name' => __('Widget'),
        'id' => 'footer',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
    ) );

add_action( 'widgets_init', 'dolboblog_widgets_init' );
?>