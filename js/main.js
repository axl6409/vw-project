/**
 * This was built using the scrollie jQuery Plugin
 * https://github.com/Funsella/jquery-scrollie
 */


$(document).ready(function () {

  $('#hero').css('background-color','white');
  $('p, h1').css('color','black');

});


$( window ).ready(function() {
  
    var wHeight = $(window).height();

    $('.slide')
      .height(wHeight)
      .scrollie({
        scrollOffset : -50,
        scrollingInView : function(elem) {
                   
          var bgColor = elem.data('background');
          
          $('body').css('background-color', bgColor);
          $('#hero').css('background-color', 'transparent');
          $('p, h1').css('color','white');
          
        }
      });

  });