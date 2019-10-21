
 // Main slide
 
var slideIndex = Math.floor((Math.random()*5)+1);
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3500); // Change image every 2 seconds
}


// Fixed header -------- NOT WORKING!!!!!!! Build javascript function
jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 40) {
        jQuery("#banner").addClass("darkHeader");
        jQuery(".brandimg").css({"margin-left":"3vw","padding":"0","margin-bottom":"7vh","width":"38%"});
    } else {
        jQuery("#banner").removeClass("darkHeader");
        jQuery(".brandimg").css({"margin-left":"0","padding":"30px","margin-bottom":"auto","width":"80%"});
    }

    if (scroll >= 1000) {
        jQuery(".sticky").css({"top":"100px"});
    } else if (scroll <= 100) {
      jQuery(".sticky").css({"top":"188px"});
    }
}); 



// Selected Aside Menu Item

jQuery(document).ready(function(){
      jQuery("ul.flex-column").children().click(function(){
        jQuery(this).siblings().children().css({"background-color": "black", "color": "#a9a8b4"});
        jQuery(this).children().css({"background-color": "#f8f9fa", "color": "black"});
      });
    });
