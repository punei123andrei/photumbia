

// Scroll clearHeader

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 40) {
        $("#banner").addClass("darkHeader");
        $(".brandimg").css({"margin-left":"3vw","padding":"0","margin-bottom":"7vh","width":"38%"});
    } else {
        $("#banner").removeClass("darkHeader");
        $(".brandimg").css({"margin-left":"0","padding":"30px","margin-bottom":"auto","width":"80%"});
    }

    if (scroll >= 50) {
        $(".sticky").css({"top":"100px"});;
    }
}); // End of scroll Header

      




// Slide menu


var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


// Selected

$(document).ready(function(){
      $("ul.flex-column").children().click(function(){
        $(this).siblings().children().css({"background-color": "black", "color": "#a9a8b4"});
        $(this).children().css({"background-color": "#f8f9fa", "color": "black"});
      });
    });
 

 // Add button top - function

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 500) {
        //clearHeader, not clearheader - caps H
        $(".arrow").removeClass("hide").addClass("appear");
    }  else if (scroll <= 499) {
      $(".arrow").addClass("hide").removeClass("appear");
    }
});


// This is the slideshow dont erase it

var slideIndex = 0;
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
