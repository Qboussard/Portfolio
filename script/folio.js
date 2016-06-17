$( document ).ready(function() {

    var sizefull = "1000px";
    // if($( window ).width() > "1250"){
    //     sizefull = "750px"
    // }
    $(".folio img").click(function(){
        $(".folio").slideToggle( "fast" );
        var id = $(this).attr("id");
        id = "#"+id+"_full";
        $(id).slideToggle( "fast" );
        $(".content_page_folio").css("width",sizefull);
        console.log(id);
        if(id == "#materialFolio_full"){
            $(".materialVid").trigger('play');
        }
        else{
            $(".materialVid").trigger('pause');
        }
    });
    $(".returnGallerie").click(function(){
        $(".materialVid").trigger('pause');
    });

    $(".returnGallerie").click(function(){
        $(".full").hide();
        $(".folio").slideToggle( "fast" );
        $(".content_page_folio").css("width","1000px");
    });
});
