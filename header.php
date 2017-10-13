<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gina_Marie
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php get_bloginfo("name") ?></title>

	<!-- SANITIZE -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sanitize.css/2.0.0/sanitize.min.css"/>

	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

	<!-- CORE BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

	<!-- MAILCHIMP STYLES -->
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'gina-marie' ); ?></a>

	<!-- NAVBAR -->
	<nav class="container">
		<div class="row">
			<div class="col-md-5 sm-text-center text-left">
				<a href="<?php echo get_home_url(); ?>">
					<img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/text_logo.png" alt="Gina Marie Logo">
				</a>
			</div><!--.col-->
			<div class="col-md-7 sm-text-center text-right">
				<?php wp_nav_menu( array(
					'menu' => 'Main Menu',
					'menu_class' => 'main-menu'
				)); ?>
			</div><!--.col-->
		</div><!--.row-->
	</nav><!--.container-->

	<div id="content" class="site-content">
