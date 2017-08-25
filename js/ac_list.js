$(function(){
	$('.accordion_ul ul').hide();
		$('.accordion_ul p').click(function(e){
		$(this).toggleClass("active");
		$(this).next("ul").slideToggle();
	});
});

$(function(){
	$('.accordion_dl dd').hide();
	$('.accordion_dl dt').click(function(){
		$(this).toggleClass("active");   
		$(this).siblings("dt").removeClass("active");
		$(this).next("dd").slideToggle();
		$(this).next("dd").siblings("dd").slideUp();
	});
});
