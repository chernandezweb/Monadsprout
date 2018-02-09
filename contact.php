<?php
/**
 * Template Name: Contactez-nous
 *
 * @package WordPress
 * @subpackage Monad
 * @since Monad
 */

get_header(); ?>

                     
    <?php if(ICL_LANGUAGE_CODE=='en'){?>
 <div id="blocH1"> <h1 id="aProposH1">Contact us</h1></div>
<?php }
if(ICL_LANGUAGE_CODE=='fr'){?>
 <div id="blocH1"> <h1 id="aProposH1">Contactez-nous</h1></div>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<div id="blocH1"> <h1 id="aProposH1">איש קשר</h1></div>
<?php }?>                 
                     
                     
                     
                     
                     
                     
                     
                     

<div id="opacityVideo">
<div id="mainImg">

</div>
</div>

<div id="mission">

    <?php if(ICL_LANGUAGE_CODE=='en'){?>
<h1> Send us a message </h1>
<?php }
if(ICL_LANGUAGE_CODE=='fr'){?>
 <h1> Envoyez nous un message </h1>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
 <h1> שלח לנו הודעה </h1>
<?php }?>      


<?php the_field("contactez-nous") ?>



</div>

<div id="carte">


   <?php if(ICL_LANGUAGE_CODE=='en'){?>
<h1> Where are we ? </h1>
<?php }
if(ICL_LANGUAGE_CODE=='fr'){?>
<h1> Où sommes-nous ? </h1>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
 <h1> או אנחנו? </h1>
<?php }?>      



<?php echo do_shortcode("[huge_it_maps id='1']"); ?>




</div>



<?php get_footer(); ?>