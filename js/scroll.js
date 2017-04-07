$(window).scroll(function() {
   var hT = $('.full-height').offset().top,
       hH = $('.full-height').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
    console.log((hT-wH) , wS);
   if (wS > (hT+hH-wH)){
     $("nav.navbar").addClass("navbar-fixed-top");
   }
});
