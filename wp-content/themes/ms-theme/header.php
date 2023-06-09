<?php
/**
 * Header template.
 *
 * @package First Bank
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title(); ?></title>
	<link rel="icon" type="image/png" href="/wp-content/assets/images/favicon-32x32.png"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-site-url="<?php echo site_url(); ?>">

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text bg-purple" href="#content">Skip to content</a> -->

	<header id="masthead" class="site-header shadow-md rounded  relative z-10" role="banner">
	</header>



	<div id="content" class="site-content">
