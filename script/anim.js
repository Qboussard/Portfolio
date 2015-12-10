$( document ).ready(function() {

    $("#r2").click(function(){
        $("#r2d2").show();
        document.getElementById('Sound').play();
        $("#r2d2").animate({
            left:  $( window ).width()+ "px",
        },2200,function(){
            $("#r2d2").hide();
            $("#r2d2").css("left","-250px");
        });
    });

});
