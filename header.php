<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="main" class="ui internally celled grid">
	<div class="row">
		<div class="two wide column side-panel secondary-area">
			<!--<div class="title"><?php bloginfo('name'); ?></div>-->
		</div>
		<div class="twelve wide column responsive-column secondary-area">
			<?php conexus_theme_nav_menu(); ?>
		</div>
		<div class="two wide column side-panel secondary-area"></div>
	</div>

