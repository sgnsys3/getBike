window.onload = function() { updateParticipant(); }
var timer = setInterval(updateParticipant,2000);

//Start smooth scroll
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
  });
});
//End smooth scroll

$("#registerForm").submit(function (e) {
    e.preventDefault();
    insertParticipant();
});
$("#checkRegisterCodeForm").submit(function (e) {
    e.preventDefault();
    checkRegisterCode();
});
function navAdapt() {
  if($(window).scrollTop() >= 470) {
    if($(window).scrollTop() > 670) {
      $('#nav_primary').css("padding-top","1em");
      $('#nav_primary').css("background-color","rgba(0,0,0,1)");
      $('#home-nav').attr('class','hvr-underline-from-center nav-my-menu');
      $('#detail-nav').attr('class','hvr-underline-from-center nav-my-menu');
      $('#contract-nav').attr('class','hvr-underline-from-center nav-my-menu');
      $('#location-nav').attr('class','hvr-underline-from-center nav-my-menu');
      $('#schdule-nav').attr('class','hvr-underline-from-center nav-my-menu');
    }
    else {
      var mapPaddingTop = 4-(($(window).scrollTop()-470)*1.5)/100;
      var mapRGBA = ($(window).scrollTop()-470)/200;
      $('#nav_primary').css("background-color","rgba(0,0,0,"+mapRGBA+")");
      $('#nav_primary').css("padding-top",""+mapPaddingTop+"em");
    }
  }
  else {
    $('#nav_primary').css("padding-top","4em");
    $('#nav_primary').css("background-color","transparent");
    $('#home-nav').attr('class','hvr-underline-white nav-my-menu');
    $('#detail-nav').attr('class','hvr-underline-white nav-my-menu');
    $('#contract-nav').attr('class','hvr-underline-white nav-my-menu');
    $('#location-nav').attr('class','hvr-underline-white nav-my-menu');
    $('#schdule-nav').attr('class','hvr-underline-white nav-my-menu');
  }
}
$(window).bind('scroll', navAdapt);
$(document).ready(navAdapt);
