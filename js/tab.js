$(function(){
$("#tab-head li").addClass("tab1");
$("#tab-head li a").eq(0).addClass("tab2");
$("#tab-head li a").click(function() {
$("#tab-body div").hide();
$($(this).attr("href")).fadeIn();/*ƒAƒjƒ[ƒVƒ‡ƒ“‚Å§Œä*/
//$($(this).attr("href")).css('display','block');/*CSS‚Å§Œä*/
$("#tab-head li a").removeClass("tab2");
$(this).addClass("tab2");
return false;
});
});
