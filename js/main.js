// funkcja onload dla sliderka JS1
function swiper() {
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

// Ladowanie intro jQ1
document.addEventListener('DOMContentLoaded', function(){
  var welcomeSection = $('.welcome-section'),
      enterButton = welcomeSection.find('.enter-button');

      setTimeout(function(){ 
        welcomeSection.removeClass('content-hidden'); }, 700);

        enterButton.on('click', function(e){
          e.preventDefault();
          welcomeSection.addClass('content-hidden').fadeOut();
          $('.facebook-box-icon').removeClass('display');
          $('.container').removeClass('display');
      });
}, false);


// funkcje do fb boxa jQ2
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

document.addEventListener('DOMContentLoaded', function(){
  if ( $('.facebook-box-icon').hasClass('active-fb-box')){
    document.getElementById("facebook-box").style.left = "300px";
    document.getElementById("lang").style.transition = "0.7s";
    }
    else{
      document.getElementById("facebook-box").style.left = "-300px";
      document.getElementById("lang").style.transition = "0.7s";
    }
});

// funkcje do show players JS2

function hasClass(el, className)
{
    if (el.classList)
        return el.classList.contains(className);
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}

function addClass(el, className)
{
    if (el.classList)
        el.classList.add(className)
    else if (!hasClass(el, className))
        el.className += " " + className;
}

function removeClass(el, className)
{
    if (el.classList)
        el.classList.remove(className)
    else if (hasClass(el, className))
    {
        var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
        el.className = el.className.replace(reg, ' ');
    }
}

function showCSGO(){
  var el = document.getElementById('tem1')
  if (hasClass(el, 'display-team')){
    removeClass(el, 'display-team')
  }
  else{
    addClass(el, 'display-team')
  }
}

function showLOL(){
  var el = document.getElementById('tem3')
  if (hasClass(el, 'display-team')){
    removeClass(el, 'display-team')
  }
  else{
    addClass(el, 'display-team')
  }
}

function showFIFA(){
  var el = document.getElementById('tem2')
  if (hasClass(el, 'display-team')){
    removeClass(el, 'display-team')
  }
  else{
    addClass(el, 'display-team')
  }
}

function showHS(){
  var el = document.getElementById('tem4')
  if (hasClass(el, 'display-team')){
    removeClass(el, 'display-team')
  }
  else{
    addClass(el, 'display-team')
  }
}

// TIME JS3

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('time').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}


//// VALIDATION ////
function validateForm() {
  var x1 = document.forms["dane"]["imie"].value;
  if (x1 == "") {
  $("#imie").focus()
  $("#imie").css('border', '2px solid red');
      return false;
  }
else{
  $("#imie").css('border', '1px solid #CCCCCC');
}

var x2 = document.forms["dane"]["mails"].value;
if (x2 == "") {
$("#mails").focus()
$("#mails").css('border', '2px solid red');
    return false;
}
else{
$("#mails").css('border', '1px solid #CCCCCC');
}

var x3 = document.forms["dane"]["temat"].value;
if (x3 == "") {
$("#temat").focus()
$("#temat").css('border', '2px solid red');
    return false;
}
else{
$("#temat").css('border', '1px solid #CCCCCC');
}

var x4 = document.forms["dane"]["tesc"].value;
if (x4 == "") {
$("#tesc").focus()
$("#tesc").css('border', '2px solid red');
    return false;
}
else{
$("#tesc").css('border', '1px solid #CCCCCC');
}

      return true;

}

/////////// AJAX

document.addEventListener('DOMContentLoaded', function(){
  $("#button-ajax").click(function(){
    $.ajax({url: "demo_test.txt", success: function(result){
      $("#div1").html(result);
    }});
  });
});