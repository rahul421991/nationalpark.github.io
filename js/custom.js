$(document).ready(function(){
  
  var btn = $('#upscroll');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


// scroll effect

$(window).scroll(function(){
      if ($(this).scrollTop() > 120) {
          $('.sticky').addClass('fixed');
      } else {
          $('.sticky').removeClass('fixed');
      }
});

document.onreadystatechange = function() { 
  if (document.readyState !== "complete") { 
      document.querySelector("body").style.visibility = "hidden"; 
      document.querySelector("#loader").style.visibility = "visible"; 
  } else { 
    
      document.querySelector("#loader").style.display = "none"; 
      document.querySelector("body").style.visibility = "visible"; 
  } 
}; 
 
});
