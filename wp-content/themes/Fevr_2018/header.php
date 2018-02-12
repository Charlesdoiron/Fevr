<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
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
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<div class="fevr__logo">	
			<a href="<?php echo home_url(); ?>"><svg width="232px" height="72px" viewBox="0 0 232 72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    	<g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="700" font-family="SpecifyPERSONALExpanded-Black, Specify PERSONAL Expanded" font-style="expanded" font-size="84">
				      <g id="Artboard" transform="translate(-54.000000, -283.000000)" fill="#000">
				        <text id="fevr">
				          <tspan x="54" y="353">fevr</tspan>
				        </text>
				        </g>
				    </g>
				</svg>
			</a>
				</div>
			
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
				<?php get_sidebar(); ?>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
