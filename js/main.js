/**
 * This was built using the scrollie jQuery Plugin
 * https://github.com/Funsella/jquery-scrollie
 */


$(document).ready(function () {

  $('#hero').css('background-color','white');
  $('p, h1').css('color','black');

});


// $( window ).ready(function() {

//     $('.slide')
//       .scrollie({
//         scrollOffset : -50,
//         scrollingInView : function(elem) {
                   
//           var bgColor = elem.data('background');
          
//           $('body').css('background-color', bgColor);
//           $('#hero').css('background-color', 'transparent');
          
//         }
//       });

//   });


var svgAttr = function() {
  // Needed to reset demo
  var polyEl = document.querySelector('.svg-attribute-demo polygon');
  var feTurbulenceEl = document.querySelector('feTurbulence');
  var feDisplacementMap = document.querySelector('feDisplacementMap');
  polyEl.setAttribute('points', '64 68.64 8.574 100 63.446 67.68 64 4 64.554 67.68 119.426 100');
  feTurbulenceEl.setAttribute('baseFrequency', '.05');
  feDisplacementMap.setAttribute('scale', '15');
/*DEMO*/
  anime({
    targets: ['.svg-attribute-demo polygon', 'feTurbulence', 'feDisplacementMap'],
    points: '64 128 8.574 96 8.574 32 64 0 119.426 32 119.426 96',
    baseFrequency: 0,
    scale: 1,
    loop: true,
    direction: 'alternate',
    easing: 'easeInOutExpo'
});
/*DEMO*/
}

$(window).ready(svgAttr)
