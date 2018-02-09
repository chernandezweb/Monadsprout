  <footer>

    <div class="F_footer_content F_clearfix">

        <div class="F_wrapper">

            <div id="F_about_us">

                <img src="<?php bloginfo('template_directory'); ?>/images/accueil/logo_monad.png" alt="">
                
                
                
                <?php
 if(ICL_LANGUAGE_CODE==en){?>
                             
                               <p>We are a team of committed people, truly involved. What we like to do is transform, we all see the abundance of opportunities and beauty that life gives us to grasp.</p>
                              <?php
                              }
                   if(ICL_LANGUAGE_CODE==fr){?>
                              
                            <p>Nous sommes une équipe de gens engagés, véritablement impliqués. Ce que nous aimons faire, c’est transformer,
                    et nous voyons toute l’abondance d’occasions et de beauté que la vie nous donne à saisir.</p>
                              <?php
                     }
                      if(ICL_LANGUAGE_CODE==he){?>
                              
                            <p>
אנחנו צוות של אנשים מחויבים באמת מעורבים. מה שאנחנו אוהבים לעשות הוא לפנות ואנחנו רואים את כל שפע ויופי של הזדמנויות שהחיים נותנים לנו לתפוס.
</p>
                              <?php
                              }
                              ?>

                

            </div>



            <div id="F_contact_us">

                <div id="F_contact_img" class="F_clearfix">
                    <a  target="blank" href="https://www.facebook.com/monadsprout/?fref=ts"><img class="F_padRightSocial" src="<?php bloginfo('template_directory'); ?>/images/accueil/facebook_logo.png" alt="Facebook"></a>
                   <a target="blank" href="https://twitter.com/monadfarms"><img class="F_padRightSocial" src="<?php bloginfo('template_directory'); ?>/images/accueil/twitter_logo.png" alt="Twitter"></a>
                    <a target="blank" href="https://plus.google.com/u/0/108798921417588125157
"><img class="F_padRightSocial" src="<?php bloginfo('template_directory'); ?>/images/accueil/google_logo.png" alt="Google+"></a>
                    <a target="blank" href="https://www.youtube.com/channel/UCruCWaqFKQEHwLM4AyJGHBQ"><img class="F_last" src="<?php bloginfo('template_directory'); ?>/images/accueil/youtube_logo.png" alt="Youtube"></a>
                </div>
                

                <p><a target="blank" href="mailto:monadsprout@gmail.com">monadsprout@gmail.com</a> </p>

               <p> <a href="tel:5148348712" >Téléphone : 514 834 8712</a>  </p>
               
               <p><a target="blank" href="https://www.google.ca/maps/place/10+Avenue+des+Pins+%23412,+Montr%C3%A9al,+QC+H2W+1P9/@45.5147757,-73.5773812,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc91a351d511299:0xdad07e1c913db1d9!8m2!3d45.5147757!4d-73.5751925">
                10 Ave des Pins W.<br> #412 Montreal, <br>Qc H2W 1P9</a></p>
                
                <hr>
                            <?php if(ICL_LANGUAGE_CODE==en){?>
                             
                               <p>FOLLOW US ON INSTAGRAM</p>
                              <?php
                              }
                              if(ICL_LANGUAGE_CODE==fr){?>
                             
                               <p>SUIVEZ NOUS SUR INSTAGRAM</p>
                              <?php
                              }?>
               
                
                <?php echo do_shortcode("[jr_instagram id='2']"); ?>

            </div>

        </div>

    </div>

    <div class="F_copyright">
        <div class="F_wrapper">
        
        <?php
 if(ICL_LANGUAGE_CODE==en){?>
                             
                               <div class="F_center"><p><a target="blank" href="https://monadsprout.com/credits/">© 2017 - Monad All Right Reserved</a></p></div>
                              <?php
                              }
                   if(ICL_LANGUAGE_CODE==fr){?>
                              
                            <div class="F_center"> <p><a target="blank" href="https://monadsprout.com/credits/">© 2017 - Monad Tous droits réservés</a></p></div>
                              <?php
                     }
                     if(ICL_LANGUAGE_CODE==he){?>
                              
                            <div class="F_center"> <p><a target="blank" href="https://monadsprout.com/credits/">2017 © - כל הזכויות שמורות Monad</a></p></div>
                              <?php
                     }
                     ?>
            

            <a href="#langues" class="page-scroll"><img src="<?php bloginfo('template_directory'); ?>/images/accueil/upArrow.png" alt="Up" width='50px'></a>
        </div>
    </div>

</footer>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jQuery/SmoothScroll.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jQuery/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>