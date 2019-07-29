

// function headerColor() {

//   var header = document.querySelector('#header');

//   $(window).on('scroll', function(el) {
//     var color = $(el).attr('data-background-color');
//     $('#header').addClass('pos-fix');
//     $('#header').css('background-color', '#000');
//   })
// }

// headerColor();




const burger = document.querySelector('#navigationToggle');

function animateMenu(){
  burger.classList.toggle('open');
}

burger.addEventListener('click', animateMenu);

var menu = document.querySelector('#navigationToggle');

function openMenu() {

  $('#navigationMenu').toggleClass('menu_open slide-in-top');

}

menu.addEventListener('click', openMenu);



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

$(window).ready(svgAttr);




function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 1000);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

function setEntrance() {
  $("body").addClass("fade-in");
}

onReady(function() {
  setVisible('#body', true);
  setEntrance();
  setVisible('#loader', false);
});


