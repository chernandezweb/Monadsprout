<?php
/**
 * Template Name: blog
 *
 * @package WordPress
 * @subpackage Monad
 * @since Monad
 */

get_header(); ?>

<?php if(ICL_LANGUAGE_CODE=='fr'){?>
<div id="blocH1"> <h1 id="aProposH1">Blog</h1></div>
<?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<div id="blocH1"> <h1 id="aProposH1">Blog</h1></div>
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<div id="blocH1"> <h1 id="aProposH1">בלוג</h1></div>
<?php }?>


		
		<div id="opacityVideo">
		<div id="mainImg">

		</div>
		</div>



<section class="pages">

	<?php $i=0 ?>

     <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 2 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); 

 ?>
 
<?php $i++ ?>

        <div class="blogg">
        <div class="wr">
		<img class="photoo" src="<?php the_field('image'); ?>" alt=""/>
			<h2 <?php if($i<=2){ echo "id='blog$i' "; } ?> class="titre2">
				<?php the_field('titre'); ?>
				<span >
					<br><?php the_field('date'); ?>
				</span>
			</h2>
			<p class="bloggp">
			<?php the_field('article'); ?>
			</p>

		<div class="beau">
		</div>

<?php endwhile; wp_reset_query(); ?>


			



	</section>
	</div
	</div>











<?php get_footer(); ?>