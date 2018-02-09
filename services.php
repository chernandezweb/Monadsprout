<?php
/**
 * Template Name: Services
 *
 * @package WordPress
 * @subpackage Monad
 * @since Monad
 */

get_header(); ?>

<!--------------------------------------------------------------->
<!--Photo de couverture-->
<!--------------------------------------------------------------->
<div id="pageServicestitre">

<?php

                             
                             
 if(ICL_LANGUAGE_CODE==he){?>
                             
                              <h1 id="pageServicesH1">שירותים</h1>
                              <?php
                              }
                   if(ICL_LANGUAGE_CODE==fr){?>
                              
                             <h1 id="pageServicesH1">Services</h1>
                              <?php
                     }
                     if(ICL_LANGUAGE_CODE==en){?>
                              
                             <h1 id="pageServicesH1">Services</h1>
                              <?php
                     }?>
                   




</div>
<div id="opacityPic">
    <div id="mainImg">

    </div>
</div>

<!--------------------------------------------------------------->
<!--------------------------------------------------------------->
<!--Sections de la page-->
<!--------------------------------------------------------------->
<!--------------------------------------------------------------->
<div id="sectionServices">

    
    
    
    <!--------------------------------------------------------------->
    <!--Sections Services-->
    <!--------------------------------------------------------------->
    <div id="blockServices" class="groupeServices">
        <div class="wrapperServices">
<?php $loop = new WP_Query( array( 'post_type' => 'post_services', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="service">
            <h2><?php the_field('service-titre'); ?></h2>
             
            
            <?php the_field('service-texte'); ?>
             
            <div class="buttonbox">
                <?php if(ICL_LANGUAGE_CODE=='fr'){?>
<a class="voirPlus" href="<?php the_field('service-lien'); ?>">Réserver</a>
<?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<a class="voirPlus" href="<?php the_field('service-lien'); ?>">Book Now</a>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<a class="voirPlus" href="<?php the_field('services-lien'); ?>">להזמין עכשיו
ר</a>
<?php }?>
        </div>
        
        </div>

<?php endwhile; wp_reset_query(); ?>

        </div>
    </div>
    
    <!--------------------------------------------------------------->
    <!--Sections Infolettre-->
    <!--------------------------------------------------------------->
    <div id="sinscrire" class="pageServicesSection pageServicesBG2 imageBG">
        <div class="wrapperServices">
            <h2><?php the_field('titre-section4'); ?></h2>

            <?php the_field('texte-infolettre'); ?>
            
            <div id="champEmail">
                
<?php if(is_active_sidebar('header')){ dynamic_sidebar( 'header' );} ?>
                
            </div>
            
        </div>
    </div>
    

    
    
    


</div>



<?php get_footer(); ?>
