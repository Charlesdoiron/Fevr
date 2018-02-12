<?php
/*
Template Name: Footer
*/
?>

	</div>

</div>

<?php wp_footer(); ?>

<div class="footer">
	<div class="footer__logo">
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
	<div class="footer__adress">
		<p><?php the_field('test') ?></p> 
		<div class="french__adress">
<?php the_field('adress_fr') ?>
		</div>
		<div class="us__adress">
			<p><?php the_field('adress_us') ?></p>
		</div>
	</div>

	<div class="footer__socials">
		<i class="fa fa-facebook" aria-hidden="true"></i>
		<i class="fa fa-instagram" aria-hidden="true"></i>
		<i class="fa fa-vimeo" aria-hidden="true"></i>
				<p><?php the_field('copyright') ?></p>
		<p><?php the_field('credits') ?></p>
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
