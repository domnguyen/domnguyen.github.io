
$(window).scroll(function() {
   var hT = $('.full-height').height(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
    console.log((hT-wH) , wS);
   if (wS > (hT-wH)){
     $("nav.navbar").addClass("navbar-fixed-top");
   }
	 else{
		 $("nav.navbar").removeClass("navbar-fixed-top");
	 }
});
