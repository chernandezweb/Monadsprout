<?php
/**
 * Template Name: Accueil
 *
 * @package WordPress
 * @subpackage Monad
 * @since Monad
 */
?>

<style>
 #ContenuBlocAnimation {
      position: absolute;
      top:50%;
      left:50%;
      transform: translate(-50%, -50%);
      display: block; 
      width: 300px;
      height: 350px;
      z-index: 9999;
    }
    
    #wrapScreen{
      position: fixed;
    }
    
    
    #vaseobj {
      position: absolute;
      top:0;
      bottom: 20px;
      left: 0;
      z-index: 9999;

	}
    #plantobj {
      position: absolute;
      bottom: 30px;
      margin-left: 80px;
      margin-right: 80px;

      -moz-transform: scale(0, 0);
      -webkit-transform: scale(0, 0);
      transform: scale(0, 0);

      -moz-transition: all 1.5s ease;
      -webkit-transition: all 1.5s ease;
      transition: all 1.5s ease;
      z-index: 9999;

	}
    #texteAnimationLogo{
         position: absolute;
         top: 0;
         bottom: 20px;
         left: 0;
	 z-index: 9999;

	}
    #plantobj.grow {
      -moz-transform: scale(2.1, 2.1);
      -webkit-transform: scale(2.1, 2.1);
      transform: scale(2.1, 2.1);
      bottom: 90px;
}

.layerAnimation{
			width: 100%;
			height: 100%;
			display: block;
			position: absolute;
			z-index: 100;
			background-color: white;
			margin: 0;
			padding: 0;
		}

 
 </style>
 <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/logo_monad.png">
 
 
 <body class="BackgroundAnimationColor">
 
<div class="layerAnimation"></div>

<div id="ContenuBlocAnimation">

    <object data="<?php echo get_template_directory_uri(); ?>/images/MONAD_Plante.svg" id="plantobj" type="image/svg+xml">
		</object>

		<object data="<?php echo get_template_directory_uri(); ?>/images/MONAD_Cercle.svg" id="vaseobj" type="image/svg+xml">
		</object>

	<object data="<?php echo get_template_directory_uri(); ?>/images/MONAD_Texte.svg" id="texteAnimationLogo" type="image/svg+xml">
	</object>


</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<script>
	//FADE IN PAGE
    (function($) {

        $.fn.pagefade = function(fadein, fadeout) {

            this.css("display", "none");

            this.fadeIn(fadein);

            $("a").click(function(event) {

                event.preventDefault();

                linkLocation = this.href;

                this.fadeOut(fadeout, redirectPage);

            });
            function redirectPage() {

                window.location.disabled= linkLocation;

            }
            return this;
        };

    }(jQuery));

    function getSubDocument(embedding_element) {
  if (embedding_element.contentDocument) {
    return embedding_element.contentDocument;
  }
  else {
    var subdoc = null;
    try {
      subdoc = embedding_element.getSVGDocument();
    } catch(e) {}
    return subdoc;
  }
}


//FADE IN PAGE
    $(document).ready(function() {

    //FADE IN DE QUEL ELEMENT 	//apres cb de temps | durée du fade
        $("#ContenuBlocAnimation").pagefade(1500, 2000);



    });




window.onload = function () {

	//FADEOUT
	setTimeout(function () {

		//FadeOut de l'animation
		$("#ContenuBlocAnimation").fadeOut("slow", function () {

			//retire la classe "general" qui cachait le reste de la page
			$(".layerAnimation").removeClass("layerAnimation");


		});
		//Temps de l'animation avant le FADEOUT
	}, 3500);


	var vaseobj = document.getElementById('vaseobj');
	var vasedoc = getSubDocument(vaseobj);
	var vs = vasedoc.getElementById('vase');


	var plantobj = document.getElementById('plantobj');
	var texteobj = document.getElementById('texteAnimationLogo');

	function commencer() {
		plantobj.className = "grow";
		
	}

	setTimeout(commencer, 1000);

};
</script>



</body>

<?php get_header(); ?>


<video autoplay loop muted poster="" id="background" >
    <source src="http://monadsprout.com/wp-content/themes/Monad/sprout.mp4" type="video/mp4">
    
</video>
<div id='wrapScreen' >
</div>
<div id='bgMobile' style="background-image: url('<?php the_field('bgMobile'); ?>');">
</div>
<h1 id='quote'><?php the_field('quote');?></h1>

    <a href="#mission" class="down-btn page-scroll">
        <span class="fa fa-angle-down"></span>
    </a>

<div id="mission">
    <h2><?php the_field('titre-notre-mission');?></h2>
    <?php the_field('notre-mission');?>
</div>


<div id="services">



<?php
if(ICL_LANGUAGE_CODE==he){?>

    <h2>השירותים שלנו</h2>
    <?php
}
if(ICL_LANGUAGE_CODE==fr){?>

    <h2>Nos services</h2>
    <?php
}
if(ICL_LANGUAGE_CODE==en){?>

    <h2>Our services</h2>
    <?php
}?>










    <div id="servicesDiv">





    <div class="marginServices">
<?php
if(ICL_LANGUAGE_CODE==he){?>

    <div class="servicesImages" id="ateliers" style="background-image: url('<?php the_field('image-service3'); ?>');">

    </div>
    <p>  <?php the_field('service3');?></p>
    <?php
}
elseif (ICL_LANGUAGE_CODE==fr || en){?>

    <div class="servicesImages" id="ateliers" style="background-image: url('<?php the_field('image-service1'); ?>');">

    </div>
    <p>  <?php the_field('service1');?></p>

    <?php
}?>
    </div>









    <div class="marginServices">

        <div class="servicesImages" id="conferences" style="background-image: url('<?php the_field('image-service2'); ?>');">

        </div>
        <p><?php the_field('service2');?></p>
    </div>








    <div class="marginServices">
<?php
if(ICL_LANGUAGE_CODE==he){?>

    <div class="servicesImages" id="ateliers" style="background-image: url('<?php the_field('image-service1'); ?>');"></div>

    <p>  <?php the_field('service1');?></p>


    <?php
}
elseif(ICL_LANGUAGE_CODE==fr || en){?>

    <div class="servicesImages" id="ateliers" style="background-image: url('<?php the_field('image-service3'); ?>');"></div>

    <p>  <?php the_field('service3');?></p>


    <?php
}?>

    </div>

    </div>






<?php
if(ICL_LANGUAGE_CODE==he){?>

    <a href="https://monadsprout.com/services-2/?lang=he">ראה עוד</a>
    <?php
}
if(ICL_LANGUAGE_CODE==fr){?>

    <a href="https://monadsprout.com/services/">Voir plus</a>
    <?php
}
if(ICL_LANGUAGE_CODE==en){?>

    <a href="https://monadsprout.com/services/?lang=en">Read more</a>
    <?php
}?>

</div>


<div id="recettes" style="background-image: url('<?php the_field('recettes'); ?>');">

    <h2><?php the_field('titre-recettes');?></h2>
    
    
    
        <?php
 if(ICL_LANGUAGE_CODE==he){?>
                             
                              <a href="https://monadsprout.com/recettes/?lang=he">ראה עוד</a>
                              <?php
                              }
                   if(ICL_LANGUAGE_CODE==fr){?>
                              
                              <a href="https://monadsprout.com/recettes/">Voir plus</a>
                              <?php
                     }
                     if(ICL_LANGUAGE_CODE==en){?>
                              
                              <a href="https://monadsprout.com/recettes/?lang=en">Read more</a>
                              <?php
                     }?>
    
    
</div>

<div id="evenements" class="pageServicesSection pageServicesBG1">
    <h2><?php the_field('titre-events'); ?></h2>
    <div class="wrapperServices">
            
            <div id="structureEvenements">

<?php $loop = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="blocEvenement">
                    <div class="EvenementsBG"><?php the_field('eventdate'); ?></div>
                    <div id="event1" class="EvenementsBG2" style="background-image: url('<?php the_field('eventimage'); ?>');"><?php the_field('eventname'); ?></div>
                </div>

<?php endwhile; wp_reset_query(); ?>

            </div>

        </div>
    </div>


<div id="sinscrire">
                     
            <h2><?php the_field('titre-infolettre'); ?></h2>

            <?php the_field('texte-infolettre'); ?>

<?php if(is_active_sidebar('header')){ dynamic_sidebar( 'header' );} ?>


</div>

<?php get_footer(); ?>