<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div>

</div>

<?php wp_footer(); ?>

<div class="footer">
	<div class="footer__socials">
		<i class="fa fa-facebook" aria-hidden="true"></i>
		<i class="fa fa-instagram" aria-hidden="true"></i>
		<i class="fa fa-vimeo" aria-hidden="true"></i>
	</div>
	<div class="footer__logo">
		<img src="http://localhost:8888/wp-content/uploads/2018/01/logoBlack.png" alt="">
		<p><?php the_field('copyright') ?></p>
		<p><?php the_field('credits') ?></p>
	</div>
	<div class="footer__adress">
		<div class="french__adress">
			<p><?php the_field('french__adress') ?></p>
		</div>
		<div class="us__adress">
			<p><?php the_field('us__adress') ?></p>
		</div>
	</div>
</div>
<script>
	
	const footer = document.querySelector('.footer')

	if(document.querySelector('body').classList.contains('page-template-template-about')){
   const script= document.createElement('script');
   script.type= 'text/javascript';
   script.src= "<?php echo get_stylesheet_directory_uri(); ?>/js/animationAbout.js";
   footer.appendChild(script);
 }



	else if(document.querySelector('body').classList.contains('home')){
   const script= document.createElement('script');
   script.type= 'text/javascript';
   script.src= "<?php echo get_stylesheet_directory_uri(); ?>/js/animationHome.js";
   footer.appendChild(script);
 }
	
	else if(document.querySelector('body').classList.contains('post-template-default')){
   const script= document.createElement('script');
   script.type= 'text/javascript';
   script.src= "<?php echo get_stylesheet_directory_uri(); ?>/js/animationInsideProject.js";
   footer.appendChild(script);
	}



</script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/stickyHeader.js"></script> 


</body>
</html>
