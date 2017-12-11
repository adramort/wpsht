<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div class="wrap">
        <div id="header">
            <div id="site">
                <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) { ?>
                    <div class="logo"><?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();} ?> </div>
                <?php } ?>

                <div class="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php bloginfo('name'); ?></a></div>
                <div class="slogan"><?php bloginfo('description'); ?></div>
            </div>
            <div class="menu">
                <?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?>
            </div>
        </div>