<?php


function ogbbblog_setup() {

	/* Hem yazilara hem de sayfalara resim ozelligi kazandirir.*/
	add_theme_support('post-thumbnails');
	add_image_size ('ogbbblog-post-img', 285, 180, true);
	add_image_size ('ogbbblog-post-img-single', 700, 438, true);
	/*Hem yazilara hem de sayfalara resim ozelligi kazandirir.*/


	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );


	/*Ozel logo*/
	add_theme_support( 'custom-logo', array(
		'width'       => 190,
		'height'      => 90,
		'flex-height' => true,
        'flex-width'  => true,
	) );
	/*Ozel logo*/

	load_theme_textdomain( 'ogbbblog', get_template_directory() . '/languages' );

	//Menu ozelligi*/
	register_nav_menus( array(
		'menu'    => __( 'Menu', 'ogbbblog' ),
		
	) );

	/*Ozel Arkaplan*/
	add_theme_support( 'custom-background', apply_filters( 'ogbbblog_custom_background_args', array(
		'default-color'  		=> 'ffffff',
		'default-image' 		=> get_parent_theme_file_uri ('images/bg.png'),
		'default-repeat' 		=> 'repeat',
		'default-attachment'    => 'fixed',
	) ) );

}
add_action( 'after_setup_theme', 'ogbbblog_setup' );
/*Tema setup dosyasi*/


if ( ! isset( $content_width ) ) $content_width = 700;
	


add_action( 'widgets_init', 'ogbbblog_widgets_init' );
function ogbbblog_widgets_init() {
    register_sidebar( array(
    'name' =>__('Widget','ogbbblog'),
    'id' => 'sidebar',
    'description' => '',
    'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
    ) );
}




/* Yorum cevaplama*/
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
// Yorum cevaplama



/*font ve still sabitleme*/
function ogbbblog_scripts() {
	wp_enqueue_style( 'ogbbblog-oswald', 'https://fonts.googleapis.com/css?family=Oswald:300' );
	wp_enqueue_style( 'ogbbblog-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'ogbbblog_scripts' );



?>