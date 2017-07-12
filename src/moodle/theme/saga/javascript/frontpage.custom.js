$(function() {
    /* Slideshow */
    var Page = (function() {
        var $navArrows = $( '#nav-arrows' ),
        $nav = $( '#nav-dots > span' ),
        slitslider = $( '#slider' ).slitslider( {
            onBeforeChange : function( slide, pos ) {
                $nav.removeClass( 'nav-dot-current' );
                $nav.eq( pos ).addClass( 'nav-dot-current' );
            }
        }),
        init = function(){
            initEvents();
        },
        initEvents = function() {
            // add navigation events
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });
            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });

            $nav.each( function( i ) {
                $( this ).on( 'click', function( event ) {
                    var $dot = $( this );
                        if( !slitslider.isActive() ) {
                            $nav.removeClass( 'nav-dot-current' );
                            $dot.addClass( 'nav-dot-current' );
                        }
                        slitslider.jump( i + 1 );
                        return false;
                });
            });
        };
        return { init : init };
    })();
    Page.init();
    
    var nav = $('.canfix');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 33) {
            nav.addClass('menubar-fixed');
        } else {
            nav.removeClass('menubar-fixed');
        }
    });

    $(document).ready(function() {
 
      $("#featuredCoursesCarrousel").owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items : 3,
          itemsDesktop : [1000,3], 
          itemsDesktopSmall : [750,1], 
          itemsTablet: [600,1], 
          itemsMobile : false,
          stopOnHover : true,
          pagination: false,
          stopOnHover: true,
          autoPlay: false,
          mouseDrag: false
     
      });
        
      var globalIndex = 0;
      var globalItems = $('#featuredCoursesCarrousel .owl-item').size();
        
      $("#featuredCoursesNavRight").click(function(){
           $("#featuredCoursesCarrousel").trigger('owl.next');

           if(globalIndex+3<globalItems){
               var index = $('#featuredCoursesCarrousel .owl-item .item.first').parent().index();
               $('#featuredCoursesCarrousel .owl-item .item.first').removeClass('first');
               $('#featuredCoursesCarrousel .owl-item').eq(index+1).find('.item').addClass('first');
               $('#featuredCoursesCarrousel .owl-item .item.last').removeClass('last');
               $('#featuredCoursesCarrousel .owl-item').eq(index+3).find('.item').addClass('last');
               globalIndex++;
            }else{
                $('#featuredCoursesCarrousel .owl-item .item.first').removeClass('first');
                $('#featuredCoursesCarrousel .owl-item .item.last').removeClass('last');
                $('#featuredCoursesCarrousel .owl-item').eq(0).find('.item').addClass('first');
                $('#featuredCoursesCarrousel .owl-item').eq(2).find('.item').addClass('last');
                globalIndex = 0;
            }
      })

      $("#featuredCoursesNavLeft").click(function(){
            $("#featuredCoursesCarrousel").trigger('owl.prev');

           if(globalIndex==0){
                $('#featuredCoursesCarrousel .owl-item .item.first').removeClass('first');
                $('#featuredCoursesCarrousel .owl-item .item.last').removeClass('last');
                $('#featuredCoursesCarrousel .owl-item').eq(globalItems-3).find('.item').addClass('first');
                $('#featuredCoursesCarrousel .owl-item').eq(globalItems-1).find('.item').addClass('last');
                globalIndex = globalItems-3;
           }else{
               var index = $('#featuredCoursesCarrousel .owl-item .item.first').parent().index();
               $('#featuredCoursesCarrousel .owl-item .item.first').removeClass('first');
               $('#featuredCoursesCarrousel .owl-item').eq(index-1).find('.item').addClass('first');
               $('#featuredCoursesCarrousel .owl-item .item.last').removeClass('last');
               $('#featuredCoursesCarrousel .owl-item').eq(index+1).find('.item').addClass('last');
               globalIndex--;
           }
      })

    $("div#responsive_menu_button").click(function(){
          status = $("div#responsive_menu").css('display');
          if(status !== "none"){
            $("div#responsive_menu").slideUp(200,function(){
              $(this).css('display','none');
            });
          }else{
            $("div#responsive_menu").slideDown(200).css('display','block');
          }
        });

        $(window).on('resize', function(){
             var menu = $("div#responsive_menu");

           // reset width and height
           vW = $(window).width();
           vH = $(window).height();

           // closing mobile menu if width >= 768
           if (vW >= '768') {
              menu.css('display','none');
           }
       });

    });
});