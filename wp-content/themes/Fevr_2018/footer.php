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

		<div class="fr__adress">
		<p>4 rue de Jarente<br>
		75004 Paris<br>
		paris@fevr.tv<br>
		+33(0)1 85 08 51 51</p> 
		</div>
		<div class="us__adress">
			<p>350 Lincoln Road <br>
			Miami Beach FL 33139 <br>
			miami@fevr.tv<br>
+1 305-930-8807</p>
		</div>
	</div>

	<div class="footer__socials">
		<i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
		<i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
		<i class="fa fa-vimeo fa-lg" aria-hidden="true"></i>
		<div class="footer__credits">
			<p>© Fevr 2018</p>
			<p>Crédits</p>
		</div>
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
