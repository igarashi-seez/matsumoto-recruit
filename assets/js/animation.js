
$(function(){
if($.cookie("access") == undefined) {
var date = new Date();
date.setTime( date.getTime() + ( 86400 )); // 60秒*60分*24時間=86400秒
$.cookie( "access", "seconds", { expires: date });
    window.onload = function() {
        setTimeout(function (){
            $("#loading").addClass("animateActive");
            setTimeout(function (){
                $("#loading").addClass("removeLoading");
                $(".l-home-wrapper").addClass("animateActive");
                setTimeout(function (){
                    $("#loading").hide();
                    setTimeout(function (){
                        $("#loading2").addClass("animateActive");
                    }, 1000);
                }, 2000);
            }, 3000);
        }, 100);
    };
} else {
    $(".l-home-wrapper").css("transition","none");
    $("#loading").hide();
    $(".l-home-wrapper").addClass("animateActive");
    setTimeout(function (){
        $("#loading2").addClass("animateActive");
    }, 1000);
}
});



