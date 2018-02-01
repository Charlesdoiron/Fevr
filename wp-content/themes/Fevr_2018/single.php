<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*	
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			 get_template_part( 'post-content', get_post_format() );



			 
			// Previous/next post navigation.
			// the_post_navigation( array(
			// 	'next_text' => '<span class="post__nav-next">' . __( '', 'twentyfifteen' ) . '</span> ' .
			// 		'<span class="">' . __( '', 'twentyfifteen' ) . '</span> ' .
			// 		'<span class=""></span>',
			// 	'prev_text' => '<span class="" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
			// 		'<span class="">' . __( '', 'twentyfifteen' ) . '</span> ' .
			// 		'<span class="post__nav-next"></span>',
			// ) ); 

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
