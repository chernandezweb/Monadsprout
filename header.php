<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta property="og:title" content="Monad Sprouts">
    <meta property="og:url" content="http://www.abenoit.dectim.ca/monadsprouts">
    <meta property="og:image" content="">
    <meta property="og:description" content="Monad Sprouts Montréal">

    <meta name="description" content="Monad Sprouts Montréal">
    <meta name="keywords" content="Monad,Sprouts,Montréal,green,vegan,life,healthy">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/logo_monad.png">
    
    
    <title>Monad | Sprouts Montréal</title>


    <script src="<?php bloginfo('template_directory'); ?>/jQuery/jquery-3.1.1.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/jQuery/monadsprout.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
     

   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/reset.css">
   
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/membre.css" />
     <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/blog.css" />
     <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fonts/font-awesome-4.2.0/css/font-awesome.css">
   
   <?php if(ICL_LANGUAGE_CODE=='fr'){?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/footer.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menushan.css" />
<?php }
if(ICL_LANGUAGE_CODE=='en'){?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/footer.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menushan.css" />
<?php } 
if(ICL_LANGUAGE_CODE=='he'){?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/footerRTL.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menushan-he.css" />
<?php }?>

     <?php wp_head(); ?>
    
</head>






<div id="menuShan">


    <ul id="mainmenu">
        <li id="logo"><a href=""><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a></li>
        
        
        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '')); ?>
        
        
        
 
    </ul>




    <div id="menuburger">
        <a id="burgerbutton" href=""><img  src="<?php bloginfo('template_directory'); ?>/images/hamburgerMENU.png" alt="menuHamburger"></a>
        <a id="burgerclose" href=""><img  src="<?php bloginfo('template_directory'); ?>/images/close.png" alt="menuHamburger"></a>
    </div>

    <ul id="menumobile">
         <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '')); ?>
    </ul>




</div>

<ul id="langues">
<?php do_action('icl_language_selector');?>
    <!--<li><a href="#">En</a></li>
    <li><a href="#">Fr</a></li>>-->
</ul>