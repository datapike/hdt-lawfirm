<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HDT_Lawfirm
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<meta property="og:image" content="" />
<meta property="og:description" content=""/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.png" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.png" type="image/x-icon" />




<!-- Latest compiled and minified CSS -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css"  rel="stylesheet" >
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-theme.min.css"  rel="stylesheet" >
	
	

<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/animate.css" rel="stylesheet">
<!-- Fonts -->
<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/ionicons.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400,100,300,300italic" rel="stylesheet" type="text/css">

<script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/js/modernizr.js"></script> <!-- Modernizr -->


<!-- Custom styles for this template -->
<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/custom.css" rel="stylesheet">
<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/queries.css" rel="stylesheet">
	
<?php wp_head(); ?>
	
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site m-scene">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'hdt-lawfirm' ); ?></a>
	
	<div class="main-container logo-row">
			<!-- Logo & Contact Info -->
			<div class="row">
				<div class="col-md-6">
					<a class="navbar-brand" href="http://copyquality.com/mocksites/lawfirm/"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/logo-tagline.png" width="360px"></a>
				</div>
				<div class="col-md-6">
					<?php if( is_active_sidebar('sidebar-header') ) { ?>
					<div class="head_cont_info sidebar-header">
						<?php dynamic_sidebar('sidebar-header'); ?>
					</div>
					<div class="clear"></div>
					<?php } ?>
				</div>
			</div>
		</div>
  <!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="main-container" id="primary-menu">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hdt-lawfirm' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
		</nav><!-- #site-navigation -->
</header>

<div id="content" class="site-content">