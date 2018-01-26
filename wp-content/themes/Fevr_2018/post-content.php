<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

<!-- VIDEO 360 FULL SCREEN  -->
<div class="videoTest" style="height: 80vh">
		
		<iframe 
		width="100%" 
		height="100%" 
		src="https://player.vimeo.com/video/<?php the_field('lien_video'); ?>?autoplay=1&title=0&byline=0&portrait=0" 
		frameborder="0" 
		webkitallowfullscreen mozallowfullscreen allowfullscreen>
		</iframe>
</div>

<!-- END OF VIDEO -->
	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title title__video__post">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<!-- MAKING OF FULL WIDTH -->
	<?php if ( have_rows('making_of') ): ?>
    <?php while ( have_rows('making_of') ): the_row(); ?>
      <div class="one-col">
        <div class="img-container">
          <img src="<?php the_sub_field('making_off_img_full'); ?>" />
        </div>
      </div>
  <?php endwhile; ?>
  <?php endif; ?>

<!-- MAKING OF HALF WIDTH -->
  	<?php if ( have_rows('making-off_image_moitie_ecran') ): ?>
    <?php while ( have_rows('making-off_image_moitie_ecran') ): the_row(); ?>
      <div class="two-col">
        <div class="img-container">
          <img src="<?php the_sub_field('image-moitie-ecran'); ?>" />
        </div>
        <div class="img-container">
          <img src="<?php the_sub_field('image-moitie-ecran-2'); ?>" />
        </div>
      </div>
  <?php endwhile; ?>
  <?php endif; ?>

	

</article><!-- #post-## -->
