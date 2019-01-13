$(window).on('load', function() {
      $('#page-loader').fadeOut('slow', function() {
        $(this).remove();
    });  
});

$(document).ready(function(){
   // Home slider responsive 
   setInterval(function(){
      
      if ($(".boy-sec").hasClass("selected")){
          console.log("selected");
          $(".boy-sec").addClass("not-selected");
          $(".boy-sec").removeClass("selected");        
      }else{
          console.log("not-selected");
          $(".boy-sec").addClass("selected");
          $(".boy-sec").removeClass("not-selected");
      }
      
      if ($(".girl-sec").hasClass("selected")){
         $(".girl-sec").addClass("not-selected");
         $(".girl-sec").removeClass("selected");        
      }else{
          $(".girl-sec").addClass("selected");
          $(".girl-sec").removeClass("not-selected");
      }
      
      
   },4000);
  
   
  $(".faq-title > a").on('click', function(){
    $('.faq-title > a.active').removeClass("active");
    $(this).addClass("active")
  });
  
 $('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".lnr-chevron-down").removeClass("lnr-chevron-down").addClass("lnr-chevron-up");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".lnr-chevron-up").removeClass("lnr-chevron-up").addClass("lnr-chevron-down");
});

  
$(function(){
    $('ul.main-nav > li > a, .promo-link').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 0
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
 /* Scroll to top */
    $(window).scroll(function() {
        if ($(this).scrollTop() > 4500) {
            $('.scroll_top').fadeIn();
        } else {
            $('.scroll_top').fadeOut();
        }
    });

$('.scroll_top').click(function() {
    $("html, body").animate({
        scrollTop: 0
    }, 600);
    return false;
});
    
$('.promo-link').mouseenter(function(){
    $(this).parent().addClass('active');
});
      
$('.promo-btn > .get-start-btn').mouseleave(function(){
    $('.promo-btn').removeClass('active');
});
    
$('.try-now').mouseenter(function(){
    $(this).parent().addClass('active');
});
      
$('.try-category').mouseleave(function(){
    $('.try-btn-group').removeClass('active');
});
    
if($(window).width()>767){
$('#home').parallax("50%", 0.5); 
$('#promo1').parallax("50%", 0.5); 
$('#promo2').parallax("50%", 0.5); 
$('#promo3').parallax("50%", 0.5); 
$('#promo4').parallax("50%", 0.5); 
  
}  
var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  }
);
wow.init();
    
}); 
    

    
})



