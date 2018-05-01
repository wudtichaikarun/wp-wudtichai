<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wudtichai
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

  <title><?php bloginfo( 'name' ); ?></title>

	<!-- Bootstrap core Css -->
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
	
	<!-- Custom CSS -->
	<!-- <link rel="stylesheet" href="assets/css/custom.css"> -->
	<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/main.css"> -->

	<!-- FontAwesome Icons -->
	<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>;/assets/css/font-awesome/css/font-awesome.min.css"> -->

	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700" >

	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- [if lt IE 9]
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	[endif] -->
</head>

<body <?php body_class(); ?>>

<!-- LOADER SPINNER -->
<div class="loader">
	<div class="loader__spinner"></div>
</div>
			
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ichr_v1' ); ?></a> -->

	<!-- SECTION HEADER -->
	<header id="header">
		<!-- BANNER -->
		<div class="banner">
			<div class="row">
				<div class="banner-logo">
					<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
				</div>

				<div class="banner-text">
					<div class="banner-text__name"><?php bloginfo( 'name' ); ?></div>
					<div class="banner-text__title"><?php bloginfo( 'description' ); ?></div>
				</div>

				<div class="banner-feature">
					<!-- <div class="banner-feature__view">change web view</div> -->

					<div class="banner-feature__search">
						<div class="banner-feature__search--box">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>


	</header>
	
	<!-- MENU  NAVIGATION-->
	<section id="navigation">
		<div class="row">
			<div class="nav-container">

				<!-- logo -->
				<!-- <div class="brand">
					<a href="#!">Logo</a>
				</div> -->

				<!-- hamberger -->
				<div class="menu">
					<div class="menu-toggle">
						<div class="hamburger"></div>
					</div>
				</div>

				<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
				<!-- navbar-collapse by +++ WORDPRESS +++ -->
				<?php
					wp_nav_menu( array(
						'menu_location' => 'primary',
						'container' => 'nav',
						'container_class' => 'nav',
						'menu_class' => 'menu-main'
					));
				?>

			</div>
		</div>
	</section>

	<div class="delimiter-long"></div>
