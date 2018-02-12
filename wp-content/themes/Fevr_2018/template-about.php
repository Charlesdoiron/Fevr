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
<?php the_field('about_intro')?>
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
									<div class="about__row">
											<?php if ( have_rows('about_offres') ): ?>
	    									<?php while ( have_rows('about_offres') ): the_row(); ?>
	    										<div class="offer">
	    										<h4 class="about__offer-title"><?php the_sub_field('offre_title'); ?></h4>
													<p class="about__offer-p"><?php the_sub_field('offre_text'); ?></p>
												</div>
	  										<?php endwhile; ?>
	  									<?php endif; ?>
	  										</div>	
			</div>
				<div class="about__second-column">
					<img src="<?php the_field('about_img'); ?>" alt="">
				</div>
		</div>
	</div>
			<div class="about__devices">
				<div class="about__devices-img">
					<img src="<?php the_field('about_img-2'); ?>" alt="">
				</div>
				<div class="about__devices-desc">
					<p><?php the_field('quote_device')?></p>
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

