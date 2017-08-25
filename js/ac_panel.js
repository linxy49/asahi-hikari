    $(function(){
        $(".accordion dt").on("click", function() {
            $(this).next().slideToggle();
            $(this).toggleClass("active");
        });
    $(".accordion dt").mouseover(function(){
        $(this).addClass("over");   
    });
    $(".accordion dt").mouseout(function(){
        $(this).removeClass("over");    
    });
    });
