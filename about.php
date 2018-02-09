<?php
/**
 * Template Name: À propos
 *
 * @package WordPress
 * @subpackage Monad
 * @since Monad
 */

get_header(); ?>


<?php
 if(ICL_LANGUAGE_CODE==en){?>
                             
                              <div id="blocH1"> <h1 id="aProposH1">About us</h1></div>
                              <?php
                              }
                   if(ICL_LANGUAGE_CODE==fr){?>
                              
                            <div id="blocH1"> <h1 id="aProposH1">À propos</h1></div>
                              <?php
                     }
                      if(ICL_LANGUAGE_CODE==he){?>
                              
                            <div id="blocH1"> <h1 id="aProposH1">אודות</h1></div>
                              <?php
                              }
                              ?>





<div id="opacityVideo">
<div id="mainImg">

</div>
</div>


<div id="mission">
    <h2><?php the_field('titre-section1');?></h2>
    
        <?php the_field('texte-section1');?>


</div>

<div id="philosophie">
    <h2><?php the_field('titre-section2');?></h2>

   
     <?php the_field('texte-section2');?>
</div>

<h2 id="notreEquipeH2"><?php the_field('titre-section3');?></h2>

<?php 
echo do_shortcode( '[tlpteam col="3" member="5" orderby="menu_order" order="ASC" layout="1"]' );

?> 
<?php 


 if(ICL_LANGUAGE_CODE==en){
                             
     echo do_shortcode( '[mpsl slider58bef74307b8f]'  ); 

}
                 
                              
if(ICL_LANGUAGE_CODE==fr){

echo do_shortcode( '[mpsl slider58af4a2c9f6e8]'  );
                              
                             
                             
                     }
                     
if(ICL_LANGUAGE_CODE==he){

echo do_shortcode( '[mpsl slider58bf0eccaf974]'  );
                              
                             
                              
                     }
                     
       
?> 


<div id="locaux">
    <div id="leftLocaux">
        <div id="infoContact">
            <ul id="ul1">
                <li>514 834 8712</li>
                <li>monadsprout@gmail.com</li>
                <li>www.monadsprout.com</li>
            </ul>

            <ul id="ul2">
                <li>10 Ave des Pins W.</li>
                <li>#412</li>
                <li>Montreal, Qc   H2W 1P9</li>
            </ul>

<?php
 if(ICL_LANGUAGE_CODE==en){?>
                             
         <a id="contactBtn" href="https://monadsprout.com/contactez-nous/?lang=en"><?php the_field('contactBtn');?></a>
   <?php
   }
   
if(ICL_LANGUAGE_CODE==fr){?>

	 <a id="contactBtn" href="https://monadsprout.com/contactez-nous/"><?php the_field('contactBtn');?></a>

 <?php
   }   
   
if(ICL_LANGUAGE_CODE==he){?>

	 <a id="contactBtn" href="https://monadsprout.com/contactez-nous/?lang=he"><?php the_field('contactBtn');?></a>

 <?php
   }    ?>                                        

       
        </div>
    </div>



    <div id="rightLocaux">
        <img src="<?php bloginfo('template_directory'); ?>/images/locaux.jpg" alt="locaux">
    </div>


</div>

<?php get_footer(); ?>