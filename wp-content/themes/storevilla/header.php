<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Store_Villa
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storevilla_html_tag_schema(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
   wp_body_open();
} ?>

<div id="page" class="hfeed site">

	<?php do_action( 'storevilla_before_header' ); ?>

		<header id="masthead" class="site-header">
				<?php
					/**
					 * @see  storevilla_skip_links() - 0
					 * @see  storevilla_top_header() - 10
						**@see storevilla_top_nav (filter for top header navigation)
					 * @see  storevilla_button_header() - 20
					 * @see  storevilla_primary_navigation() - 30
					 */			
					do_action( 'storevilla_header' ); 
				?>
		</header><!-- #masthead -->
	
	<?php do_action( 'storevilla_after_header' ); ?>

	<div id="content" class="site-content">
	<?php if( !( is_home() || is_front_page() ) ) { ?>
		<div class="store-container clearfix">
			<div class="store-container-inner clearfix">
	<?php } 