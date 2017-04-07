
$(window).scroll(function() {
   var hT = $('.full-height').height(),
       wS = $(this).scrollTop();
    console.log((hT) , wS);
   if ((hT) > wS-60 ){
     $("nav.navbar").addClass("navbar-fixed-top");
   }
	 else{
		 $("nav.navbar").removeClass("navbar-fixed-top");
	 }
});
