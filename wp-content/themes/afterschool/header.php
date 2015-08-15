<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo '所有 &quot;'; single_cat_title(); echo '&quot; 類別的文章列表 | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo '所有包含 &quot;'; single_tag_title(); echo '&quot; 標籤的文章列表 | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' 列表 | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo '搜尋 &quot;'.esc_html($s).'&quot; 的結果 | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/afterschool.css" />

		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/favicon-16x16.png">
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/favicon.ico" type="image/x-icon">
		<link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() ; ?>/assets/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action('foundationPress_after_body'); ?>

	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">

	<?php do_action('foundationPress_layout_start'); ?>

	<?php get_template_part('parts/tab-bar'); ?>
	<?php get_template_part('parts/off-canvas-menu'); ?>
	<?php get_template_part('parts/top-bar'); ?>

<section class="container" role="document">
	<?php do_action('foundationPress_after_header'); ?>
	<?php
		// global $template;
		// echo basename($template, '.php');
	?>