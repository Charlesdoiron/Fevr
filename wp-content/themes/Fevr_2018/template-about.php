<?php
/*
Template Name: About
*/
?>


<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- VIDEO PREZ FULL SCREEN  -->
<!-- <div class="videoTest" style="height: 80vh">
		<iframe 
		width="100%" 
		height="100%" 
			src="https://player.vimeo.com/video/<?php the_field('video_home'); ?>?autoplay=0&title=0&byline=0&portrait=0"  
		frameborder="0" 
		webkitallowfullscreen mozallowfullscreen allowfullscreen>
		</iframe>
</div> -->
		<div class="text-center ">
			
					<h3 class="about__title">We are Fevr</h3>
					<p class="about__p">
						"360° and VR video agency located in the center of Paris, we are directors, storytellers, producers, soundesigners and animators who working together for delivering innovative and diversified aesthetic solutions to all kinds of projects and briefs. "
					</p>

		</div>
		<div class="about__slider text-right">
			<img src="http://fakeimg.pl/1100x520/" alt="">
		</div>
		<div class="about__offer">
			<h3 class="about__title text-center">What we offer</h3>
			<div class="about__offer__list-item">
				<div class="about__first-column">
					<h4 class="about__title-offer">Consulting</h4>
					<p class="about__title-p">Anticipation of your movie specificities</p>
				</div>
				<div class="about__slider text-center">
					<img src="http://fakeimg.pl/300x400/" alt="">
				</div>
				<div class="about__third-column">
					<h4 class="about__title-offer">Storytelling</h4>
					<p class="about__title-p">Writing and co-writing the script for a total and immersive experience</p>
				</div>
				
			</div>
			
		</div>
		

	
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
