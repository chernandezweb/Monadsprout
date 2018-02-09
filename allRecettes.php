<?php
/**
 * Template Name: AllRecettes
 *
 * @package WordPress
 * @subpackage Monad
 * @since Monad
 */

get_header(); ?>


<div class="coverRecettes" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/coverRecettes.jpg');">

<?php if(ICL_LANGUAGE_CODE=='fr'){?>
<h1>Nos Recettes</h1>
<?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<h1>Our recipes</h1>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<h1>המתכונים שלנו</h1>
<?php }?>

      
    </div>

<div id="apercuBlog">

<?php $loop = new WP_Query( array( 'post_type' => 'post_recettes', 'posts_per_page' => -1 ) ); ?>
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



<?php get_footer(); ?>