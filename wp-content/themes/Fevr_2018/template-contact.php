<?php
/*
Template Name: Contact
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
        <div id="primary" class="content-area" >
            <main id="main" class="site-main contact__main" role="main" style="padding: 0">
                <div class="contact__container">
                    <div class="form__container">
                        <div class="adress">
                          <div class="fr">
                            <?php the_field('adress_fr') ?>
                           
                            </div>
                          <div class="us"><?php the_field('adress_us') ?></div>
                        </div>
                        <div class="select_form">
                          <button id="tab_contact" class="active">Contact</button>
                          <button id="tab_job">Job</button>
                        </div>
                        <div id="contact_form" class="show">
                          <?php echo do_shortcode('[contact-form-7 id="6134" title="Formulaire de contact 1"]');?>
                        </div>
                        <div id="job_form" class="hide">
                          <?php echo do_shortcode('[contact-form-7 id="6140" title="Formulaire de contact job"]');?>
                        </div>
                    </div>
                    <div class="map__container" id="map__container">
                        <div id="map"></div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <!-- Map -->
                        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/initializeMap.js"></script>
                        <!-- Animation Map -->
                        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/animationMap.js"></script>
                        <!-- Api -->
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8vG4FmdukMdSNAc7EHoov6FcZYZgcL2E&callback=initMap" async defer>
                        </script>
                    </div>
                </div>
            </main>
            <!-- .site-main -->
        </div>
        <!-- .content-area -->
<?php get_footer(); ?>