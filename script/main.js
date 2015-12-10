$( document ).ready(function() {

    var animInAction = 0;
    size0 = "0px";
    size1 = "-"+ $( window ).width()+ "px";
    size2 = "-"+ 2* $( window ).width()+ "px";
    size3 = "-"+ 3* $( window ).width()+ "px";

    var top = $(".container").css("top");
    var widthNav = $('nav').width(); // width nav
    var currentLeft = $(".container").css("left");

    $(".container").css( "left", size1 );
    $("nav").css( "left", "-200px" );



// ACTION
    $(".fa-bars").click(function(){
        openNav();
    });
    $(".fa-times").click(function(){
        closeNav();
    });

    $(".aboutToContact").click(function(){
        animHorizontal(size0);
    });

    $(".GoHOme").click(function(){
        closeNav();
        top = $(".container").css("top");

        if(top == "0px")
        {
            animHorizontal(size1);
        }
        else {
            animVerticalUp(size1);
        }

    });
    $(".GoAbout").click(function(){

        top = $(".container").css("top");
        if(top == "0px")
        {
            animHorizontal(size2);
        }
        else {
            animVerticalUp(size2);
        }
    });
    $(".GoContact").click(function(){

        top = $(".container").css("top");
        if(top == "0px")
        {
            animHorizontal(size0);
        }
        else {
            animVerticalUp(size0);
        }
    });
    $(".GoWork").click(function(){

        animVerticalDown(size1);
    });


        $('body').keyup(function (event) {
            currentLeft = $(".container").css("left");
            var sizeScreen = parseInt($( window ).width(),10);

            if(currentLeft === "0px"){
                var LeftByArrow = "0px";
                var RightByArrow = "-" + $( window ).width() + "px";
                //console.log(LeftByArrow , RightByArrow);
            }
            else if (currentLeft === "-" + 2* sizeScreen + "px"){
                var currentLeftPX = parseInt(currentLeft.substr(1, 4),10);
                currentLeftNoPX = currentLeftPX - sizeScreen;
                var LeftByArrow = "-" + currentLeftNoPX + "px";
            }
            else{
                var currentLeftPX = parseInt(currentLeft.substr(1, 4),10);
                //console.log(currentLeftNoPX - $( window ).width());
                currentLeftNoPX = currentLeftPX - sizeScreen;
                currentRightNoPX = currentLeftPX + sizeScreen;
                var LeftByArrow = "-" + currentLeftNoPX + "px";
                var RightByArrow = "-" + currentRightNoPX + "px";
            }


        // currentLeft

          switch(event.keyCode){

              // user presses the "UP"
              case 38:
                        if(animInAction === 0){
                            animVerticalUp(size1);
                        }
                          break;

              // user presses the "DOWN" key
              case 40:
                      if(animInAction === 0){
                          animVerticalDown(size1);
                      }
                          break;

              // user presses the "LEFT" key
              case 37:
                      if(animInAction === 0){
                         animVerticalUp(LeftByArrow);
                      }
                          break;

              // user presses the "RIGHT" key
              case 39:
                      if(animInAction === 0){
                         animVerticalUp(RightByArrow);
                      }
                          break;
          }
        });



// Function moove view

    function animHorizontal(size){

        closeNav();
        animInAction = 1;
        $( ".container" ).animate({
            left: size,
        }, 500, 'easeOutCirc', function() {
            currentLeft = $(".container").css("left");
            animInAction = 0;
        });

    };

    function animVerticalDown(size){

        closeNav();
        animInAction = 1;
        var height = "-"+ $( window ).height()+"px";
        $( ".container" ).animate({
            left: size,
        }, 600, 'easeOutCirc', function() {

        });

        $( ".container" ).animate({
            top: height,
        }, 600, 'easeOutCirc', function() {
            top = $(".container").css("top");
            currentLeft = $(".container").css("left");
            animInAction = 0;
        });

    };

    function animVerticalUp(size){

        closeNav();
        animInAction = 1;
        if(top == "0px") {
            $( ".container" ).animate({
                left: size,
            }, 600, 'easeOutCirc', function() {
                currentLeft = $(".container").css("left");
                animInAction = 0;
            });
        }
        else{
            $( ".container" ).animate({
                top: "0px",
            }, 600, 'easeOutCirc', function() {

            });

            $( ".container" ).animate({
                left: size,
            }, 600, 'easeOutCirc', function() {
                top = $(".container").css("top");
                currentLeft = $(".container").css("left");
                animInAction = 0;

            });
        }



    };
    function openNav(){

        $( "nav" ).animate({
            left: "0px",
        },150);
    }
    function closeNav(){

        $( "nav" ).animate({
            left: "-200px",
        },150);
    }




    $(".use i").hover(function() {
        var info = $(this).attr("data-info");
        $('.infoUse').text(info);
      }, function() {
        $('.infoUse').text(" ");
      }
    );

});

$( window ).resize(function() {
    size0 = "0px";
    size1 = "-"+ $( window ).width()+ "px";
    size2 = "-"+ 2* $( window ).width()+ "px";
    size3 = "-"+ 3* $( window ).width()+ "px";

    var currentLeft = $(".container").css("left");


    $(".section").css( "width", $( window ).width()+ "px" );
    $(".container").css( "top", "0px" );
    $(".container").css( "left", size1 );
    // alert();
    // location.reload();


});
