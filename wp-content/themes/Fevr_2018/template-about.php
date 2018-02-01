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


	<div id="primary" class="content-area ">
		<main id="main" class="site-main" role="main">
			<div class="text-center ">
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
					<p class="about__p">
						360° and VR Video Agency located in central Paris. We are directors, storytellers, producers, sound designers and animators who are working together to deliver innovative and diversified aesthetic solutions for all kinds of projects and briefs.
					</p>

		</div>
					<div class="about__slider-mask"></div>
		<div class="about__slider">

			<div class="slider"><?php echo do_shortcode('[smartslider3 slider=2]'); ?></div>
		</div>
		<div class="about__offer">
			<h3 class="about__title text-center">What we offer</h3>
			<div class="about__offer__list-item">
				<div class="about__first-column">
					<div class="about__list-1">
							<div class="about__row">
								<div>
									<h4 class="about__offer-title">Consulting</h4>
								<p class="about__offer-p">Anticipating the film industry's specificities / specific requirements</p>
								</div>
								<div>
								<h4 class="about__offer-title">Storytelling</h4>
								<p class="about__offer-p">Creating and writing the perfect script for an immersive experience</p>
								</div>
							</div>
						<div class="about__row">
							<div>
									<h4 class="about__offer-title">Shooting</h4>
								<p class="about__offer-p">Shooting with our RED solutions, Drone Alta 8, or RIG multi-camera DSLR Video 360</p>
							</div>
							<div>		
								<h4 class="about__offer-title">Video Editing</h4>
								<p class="about__offer-p">Editing the film for its final form (+stitching for any 360° videos)</p>
							</div>
						</div>
							<div class="about__row">
							<div>
									<h4 class="about__offer-title">Motion Design</h4>
								<p class="about__offer-p">Subtitles and FX in 2D and 3D, with a 16/9 format or 360 video</p>
							</div>
							<div>		
								<h4 class="about__offer-title">Sound Design</h4>
								<p class="about__offer-p">Improving overall immersion experience thanks to spacial sound and sound design</p>
							</div>
						</div>
</div>
				</div>
	
				<div class="about__second-column">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/pictos/mantis.png" alt="">
				</div>
				
			</div>
			<div class="about__devices">
				<div class="about__devices-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/pictos/fevr_vr.png" alt="">
				</div>
				<div class="about__devices-desc">
					<p>Videos available on all devices</p>
					<div class="devices__picto">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/pictos/Vr_picto.svg" alt="">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/pictos/Responsive_picto.svg" alt="">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/pictos/Youtube_picto.svg" alt="">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/pictos/Fb_picto.svg" alt="">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/pictos/Vimeo_picto.svg" alt="">
					</div>
				</div>
			</div>
			<div class="about__clients">
				<h3 class="about__title text-center">Our clients</h3>
				<div class="clients__logos">			
		<!-- LOOP LOGOS -->
		<div class="logos__container">
		<?php if ( have_rows('logos') ): ?>
	    <?php while ( have_rows('logos') ): the_row(); ?>
	     <img class="clients__logo" src="<?php the_sub_field('Img-logo'); ?>" /> 
	  	 <?php endwhile; ?>
	  <?php endif; ?>
	  </div>
				</div>
			</div>
			
		</div>
		

	
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
