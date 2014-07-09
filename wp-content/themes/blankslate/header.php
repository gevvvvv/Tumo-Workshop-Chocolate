<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<header id="header" role="banner">
		<div class="container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home">
						<!--<?php echo esc_html( get_bloginfo( 'name' ) ); ?>-->
						<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png">
			</a>
			<nav id="menu" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</div>
	</header>
	<div id="container">