/**
 * Created by Shan on 2017-02-15.
 */
$(document).ready(function(){

    $(".sub-menu").hide();

    $("#mainmenu").on("mouseover", function(){
        $(".sub-menu").show().css({
            display: "flex",
            "justify-content": "start"
        });

    }).on("mouseout", function(){
        $(".sub-menu").hide();
    });




    /**********************************************************************************/
    /**********Bouton Hamburger qui fait apparaître le menu mobile**************/
    /**********************************************************************************/
    var pull = $('#burgerbutton');
    var close = $('#burgerclose');
    var menu = $('#menumobile');

    $(menu).hide();


    $(pull).on('click', function (e) {
        e.preventDefault();
        menu.slideToggle();
        $(pull).hide();
        $(close).show();
        
    });

    $(close).on('click', function (e) {
        e.preventDefault();
        menu.slideToggle();
        $(pull).show();
        $(close).hide();
        

    });

    /*var clickOnLi = $('nav li a');

     var largeur = $(window).width();
     if(largeur <= 1400) {
     $(clickOnLi).on('click', function (e) {
     e.preventDefault();
     menu.slideToggle();
     });
     }*/

    $(window).resize(function () {
        var w = $(window).width();
        if (w < 100) {
            $(menu).hide();
        }
    });


});