<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?=get_template_directory_uri();?>/js/vendor.js"></script>
	<script type="text/javascript" src="<?=get_template_directory_uri();?>/js/app.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
</head>
<body id="<?=page_body_id();?>" <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<header id="header" role="banner">
		<div class="container">
			<a class="img fl logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png">
			</a>
			<nav class="fr db" id="menu" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</div>
	</header>
	<div id="container">