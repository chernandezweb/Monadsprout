<?php
/**
 * Template Name: Recettes
 *
 * @package WordPress
 * @subpackage Monad
 * @since Monad
 */

get_header(); ?>


<!--*****************    Recettes   *****************-->

<header>
    <div class="coverRecettes" style="background-image: url('<?php the_field('image-banniere'); ?>');">
      
    </div>

    <div class="sectionRecette">
        <!--<img class="imgRecette" src="?php the_field('image-recette');?>"  alt="salade"/>-->

    <div class="infoRecette">
        <h2><?php the_field('titre-recette');?></h2>
        

        <!--<div class="miniBlocInfo">
        ?php echo do_shortcode( '[star_rating themes="flat" id="'.get_the_ID().'"]' ); ?>-->
        <!--<div class="blocInfo">

        <ul class="descriptionInfo">
            
?php if(ICL_LANGUAGE_CODE=='fr'){?>
<li>préparation</li>
<li>cuisson</li>
<li>portions</li>
?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<li>preparation</li>
<li>cooking</li>
<li>portions</li>
?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<li>הכנה</li>
<li>אפייה</li>
<li>חלקים</li>
?php }?>
           
        </ul>

        <ul class="tempsInfo">
            <li>?php the_field('preparation');?></li>
            <li>?php the_field('cuisson');?></li>
            <li>?php the_field('portions');?></li>
        </ul>
	</div>-->
    </div>
    </div>
    </div>
</header>

<div class="ingredientsSection">
    <div class="titreRecettes">
<?php if(ICL_LANGUAGE_CODE=='fr'){?>
<h1>ingrédients</h1>
<?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<h1>ingredients</h1>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<h1>מרכיב</h1>
<?php }?>
    
    </div>
    <div class="contenu_ingrSect">
    <div class="leftColumnIngr">
        <div class="vinaigretteSect">

          
<?php if(ICL_LANGUAGE_CODE=='fr'){?>
<div class="titreRecettes"><h3>Vinaigrette</h3></div>
<?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<div class="titreRecettes"><h3>Vinaigrette</h3></div>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<div class="titreRecettes"><h3>רוֹטֶב</h3></div>
<?php }?>

        <ul>
            <li><?php the_field('vinaigrette1');?></li>
            <li><?php the_field('vinaigrette2');?></li>
            <li><?php the_field('vinaigrette3');?></li>
            <li><?php the_field('vinaigrette4');?></li>
            <li><?php the_field('vinaigrette5');?></li>
            <li><?php the_field('vinaigrette6');?></li>
        </ul>
    </div>

    <div class="saladeSect">
        
<?php if(ICL_LANGUAGE_CODE=='fr'){?>
<div class="titreRecettes"><h3>Salade</h3></div>
<?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<div class="titreRecettes"><h3>Salad</h3></div>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<div class="titreRecettes"><h3>סלט</h3></div>
<?php }?>
        <ul>
            <li><?php the_field('salade1');?></li>
            <li><?php the_field('salade2');?></li>
            <li><?php the_field('salade3');?></li>
            <li><?php the_field('salade4');?></li>
            <li><?php the_field('salade5');?></li>
            <li><?php the_field('salade6');?></li>
        </ul>
        </div>
    </div>
    <div class="prepSect">
        
<?php if(ICL_LANGUAGE_CODE=='fr'){?>
<div class="titreRecettes"><h3>Préparation</h3></div>
<?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<div class="titreRecettes"><h3>Preparation</h3></div>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<div class="titreRecettes"><h3>הכנה</h3></div>
<?php }?>
        <ul>
            <li><?php the_field('preparation1');?></li>

            <li><?php the_field('preparation2');?></li>

            <li><?php the_field('preparation3');?></li>

            <li><?php the_field('preparation4');?></li>

            <li><?php the_field('preparation5');?></li>

        </ul>
    </div>
    </div>
</div>


<div id="nouvellesBlog">
    
<?php if(ICL_LANGUAGE_CODE=='fr'){?>
<div class="titreRecettes"><h1>Vous pourriez aussi aimer ceci</h1></div>
<?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<div class="titreRecettes"><h1>You might also like this</h1></div>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<div class="titreRecettes"><h1>ייתכן גם אוהב את זה</h1></div>
<?php }?>


    <div id="apercuBlog">
        <?php $loop = new WP_Query( array( 'post_type' => 'post_recettes', 'posts_per_page' => 1, 'orderby' => 'rand' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="blog">
            <div class="image" style="background-image: url('<?php the_field('image'); ?>');">
             
            </div>
            <div class="texte">
                <h3><?php the_field('titre'); ?></h3>
                <?php the_field('texte'); ?>
                
<?php if(ICL_LANGUAGE_CODE=='fr'){?>
<a class="voirPlus" href="<?php the_field('lien'); ?>">Voir plus</a>
<?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<a class="voirPlus" href="<?php the_field('lien'); ?>">Read more</a>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<a class="voirPlus" href="<?php the_field('lien'); ?>">הצג יותר</a>
<?php }?>
            </div>
        </div>

<?php endwhile; wp_reset_query(); ?>
    </div>
</div>

<div id="Commentaires">
    
<?php if(ICL_LANGUAGE_CODE=='fr'){?>
<div class="titreRecettes"><h1>Commentaires</h1></div>
<?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<div class="titreRecettes"><h1>Comments</h1></div>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<div class="titreRecettes"><h1>הערות</h1></div>
<?php }?>

    <?php echo do_shortcode('[fbcomments url=""  count="off" num="3" countmsg="wonderful comments!"]'); ?>

</div>



<?php get_footer(); ?>