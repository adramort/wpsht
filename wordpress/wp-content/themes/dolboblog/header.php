<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo('name') ?> - <?php bloginfo('description') ?></title>
<?php wp_head(); ?>
<?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
</head>
<body <?php body_class(); ?> >
    <div class="wrapper">
        <header class="header">
            
            <div class="header-wrap">
                <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) { ?>
                    <div class="logo"><?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();} ?> </div>
                <?php } ?>

                <div class="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php bloginfo('name'); ?></a></div>
                <div class="slogan"><?php bloginfo('description'); ?></div>
            </div>
            <nav class="header-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?>
            </nav>
        </header>
        <section class="content">
        
        <?php get_sidebar(); ?>
        
        <div class="content-inner">