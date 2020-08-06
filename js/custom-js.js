/*---------/open model on page load-----------*/
window.onload = function() {
	document.getElementById('button').onclick = function() {
	document.getElementById('modalOverlay').style.display = 'none'
	};
};

//*------------header----------------*/
$(function() {
    "use strict";
    var window_width = $(window).width();
    var openIndex;
    // Search class for focus
    $('.header-search-input').focus(
      function() {
        $(this).parent('div').addClass('header-search-wrapper-focus');
      }).blur(
      function() {
        $(this).parent('div').removeClass('header-search-wrapper-focus');
      });
    // Notification, Profile & Settings Dropdown
    $('.profile-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false,
      hover: true,
      gutter: 0,
      belowOrigin: true,
      alignment: 'right',
      stopPropagation: false
    });
  });
  
//preloader
$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})

$(".button-collapse").sideNav();
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});
// CAROUSEL
$(document).ready(function(){
  $('.carousel').carousel(
  {
    dist: 0,
    padding: 0,
    fullWidth: true,
    indicators: true,
    duration: 100,
  }
  );
});
autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}
/*-------------select form---------*/
$(document).ready(function() {
    $('select').material_select();
});
/*-------------collapsible---------------*/
$(document).ready(function(){
    $('.collapsible').collapsible();
});

//-------------same page linking anchor scroll------------------//
$(document).ready(function(){
  $("#js-anchor-link").on('click', function(event) {
    event.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 1500, function(){
      window.location.hash = hash;
    });
  });
});

//-------------textBlink------------------//
$('.blink').each(function() {
    var elem = $(this);
    setInterval(function() {
        if (elem.css('visibility') == 'hidden') {
            elem.css('visibility', 'visible');
        } else {
            elem.css('visibility', 'hidden');
        }    
    }, 500);
});

//date time picker
$('#date').bootstrapMaterialDatePicker({
  format : 'DD/MM/YYYY',
  minDate : new Date(),
  weekStart : 0, 
  time: false
});