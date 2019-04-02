window.onload = function () {
var swiper = new Swiper('.swiper-container', {
  pagination: '.swiper-pagination',
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflow: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows : true
  },
  autoplay: {
          delay: 2000,
          disableOnInteraction: false,
      },
  loop: true
});
};


function FBactive(){
  if ( $('.facebook-box-icon').hasClass('active-fb-box')){
    $('.facebook-box-icon').removeClass('active-fb-box');
    $('.facebook-box').removeClass('active-fb-box2');
  }
  else{
    $('.facebook-box-icon').addClass('active-fb-box');
    $('.facebook-box').addClass('active-fb-box2');
  }
};

$(document).ready(function(){
  if ( $('.facebook-box-icon').hasClass('active-fb-box')){
    document.getElementById("facebook-box").style.left = "300px";
    document.getElementById("lang").style.transition = "0.7s";
    }
    else{
      document.getElementById("facebook-box").style.left = "-300px";
      document.getElementById("lang").style.transition = "0.7s";
    }
});