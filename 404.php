<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>404</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">


</head>

<style>

    /*****************************************************/
    /*****	         		Reset       	         *****/
    /*****************************************************/
    * { outline:none; }

    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, font, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td {
        margin: 0; padding: 0; border: 0; outline: 0; font-size: 100%; vertical-align: baseline; background: transparent;
    }

    body {line-height: 1;}
    ol, ul {list-style: none;}
    blockquote, q {quotes: none;}
    blockquote:before, blockquote:after, q:before, q:after {content: ''; content: none;}

    table {border-collapse: collapse; border-spacing: 0; } /* tables still need 'cellspacing="0"' in the markup */

    *, *:before, *:after {
        box-sizing: border-box;
    }


 body{
     background-color:#fffdf1;
 }

 .gauche{
     float: left;
     margin-left:7%;
     width: 43%;
 }

 h1{
     color:#71c48f;
     font-family:'Montserrat', sans-serif;
     font-size: 250px;
     font-weight: 700;
     margin-top: 130px;
 }

 h2{
     color:#71c48f;
     font-family:'Montserrat', sans-serif;
     font-size: 40px;
     font-weight: 700;
     margin-top: 55px;
 }
 p{
     color:#71c48f;
     font-family:'Montserrat', sans-serif;
     font-size: 25px;
     font-weight: 700;
     margin-top: 50px;
  }

  .un{
      float: left;
      background-color:#71c48f;
      border-radius: 10px;
      height: 50px;
      width: 200px;
      margin-top: 50px;

  }


  .un a{
      color:#fffdf1;
      font-family:'Montserrat', sans-serif;
      font-size: 15px;
      font-weight: 700;
      padding-top: 18px;
      padding-left: 30%;
      float: left;

  }

    .deux{
        float: left;
        background-color:#71c48f;
        border-radius: 10px;
        height: 50px;
        width: 200px;
        margin-left: 2%;
        margin-top: 50px;

    }

.deux a{
      color:#fffdf1;
      font-family:'Montserrat', sans-serif;
      font-size: 15px;
      font-weight: 700;
      padding-top: 18px;
      padding-left: 25%;
      float: left;

    }

.droite{
     float: right;
    margin-right:7%;
    width: 43%;


}

.droite img{
    margin-top: 500px;
}


</style>

<body>

<div class="gauche">

    <h1>404</h1>

    <h2>Page not found</h2>

    <p>The page you are looking for was, removed, renamed
        or<br> might never existed.</p>

  <div class="un">
    <a href="https://monadsprout.com/">GO HOME</a>
  </div>

 <div class="deux">
   <div class="">
     <a href="https://monadsprout.com/contactez-nous/">CONTACT US</a>
   </div>

</div>

</div>

<div class="droite">

    <img src="<?php bloginfo('template_directory'); ?>/images/feuille.jpg" alt="feuille">

</div>

<footer>

</footer>

</body>
</html>