$(function(){
    $("#menuButton").click(function(){
		$(this).toggleClass("active"); //メニューボタンの切り替え
		
		/*-- メニューの開閉 --*/
		if($(this).hasClass("active")){
			$("body").css("oveflow", "hidden");
			$("main").animate({
				"left": "-100%"
			}, 400);
			$("aside")
				.show()
				.animate({
					"left": "0%"
				}, 400);
		}else{
			$("main").animate({
				"left": 0
			}, 400);
			$("aside")
				.show()
				.animate({
					"left": "100%"
				}, 400, function(){
					$("aside").hide();
					$("body").css("oveflow", "visuble");
				});
		}
		
        return false;
    });
});
