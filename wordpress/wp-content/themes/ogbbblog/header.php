<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div id="wrapper">
		<div id="header">
			<div id="site">

			<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) { ?>
				<div id="logo"><?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();} ?> </div>
   			<?php } ?>

				<div id="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php bloginfo('name'); ?></a></div>
				<div id="slogan"><?php bloginfo('description'); ?></div>
			</div>
			<div id="banner"></div>
		</div>
		<div id="menu">
			<?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?>
		</div>
		<div id="main">
			<div id="content">