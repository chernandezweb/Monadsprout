<?php get_header(); ?>



<video autoplay loop muted poster="screenshot.jpg" id="background">
    <source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
</video>


<div id="mission">
    <h2>Notre Mission</h2>
    <p>Nous souhaitons fournir à la ville les meilleurs aliments qui soient et les plus nutritifs, et, de surcroît,
        créer une culture de santé et de bien-être. Nous avons la conviction que la nourriture peut être médicinale et
        qu’elle est la source de notre bien-être. C’est pourquoi nous offrons des ateliers, sommes généreux de notre
        savoir et partageons nos inspirations constamment.</p>
</div>

<div id="pousseVedette" style="background-image: url('<?php the_field('nos-pousses'); ?>');">

    <h2>Nos pousses</h2>
    <a href="#">Voir plus</a>
</div>

<div id="services">
<h2>Nos services</h2>
    <div id="servicesDiv">
        <div class="marginServices">
            <div class="servicesImages" id="ateliers">

            </div>
            <p>Ateliers</p>
        </div>
        <div class="marginServices">
            <div class="servicesImages" id="conferences">

            </div>
            <p>Conférences</p>
        </div>
        <div>
            <div class="servicesImages" id="livraison">

            </div>
            <p>Livraison</p>
        </div>
    </div>
    <a href="#">Voir plus</a>
</div>

<div id="recettes" style="background-image: url('<?php the_field('recettes'); ?>');">

    <h2>Recettes</h2>
    <a href="#">Voir plus</a>
</div>

<div id="nouvellesBlog">
    <h2>Nouvelles de notre blog</h2>
    <h4>Rejoignez-nous!</h4>

    <div id="apercuBlog">
        <div id="blog1">
            <div class="image" style="background-image: url('<?php the_field('image-blog1'); ?>');">
                
            </div>
                <div class="texte">
                    <h3>Retour à l'école</h3>
                    <p>Huic Arabia est conserta, ex alio latere Nabataeis contigua; opima varietate conmerciorum castrisque oppleta validis et castellis, quae ad repellendos gentium vicinarum excursus sollicitudo pervigil veterum per oportunos saltus erexit et cautos. haec quoque civitates habet inter oppida .</p>
                    <a href="#">Voir plus</a>
                </div>
        </div>

        <div id="blog2">
            <div class="image" style="background-image: url('<?php the_field('image-blog2'); ?>');">

            </div>
            <div class="texte">
                <h3>L'amour des pousses</h3>
                <p> Huic Arabia est conserta, ex alio latere Nabataeis contigua; opima varietate conmerciorum castrisque oppleta validis et castellis, quae ad repellendos gentium vicinarum excursus sollicitudo pervigil veterum per oportunos saltus erexit et cautos. haec quoque civitates habet inter oppida .</p>
                <a href="#">Voir plus</a>
            </div>
        </div>
    </div>

    <a href="#" id="plus"> <img src="<?php bloginfo('template_directory'); ?>/images/accueil/iconPlus.png" alt="plus"></a>
</div>

<div id="infolettre">

    <h2>S'inscrire à l'infolettre</h2>

    <div>
    <input id="email" type="email" placeholder="Adresse courriel" name="email">
    <input id="submit" type="submit" name="submit" value="Envoyer">
    </div>

</div>

<?php get_footer(); ?>