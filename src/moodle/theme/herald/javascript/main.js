jQuery(document).ready(function($) {

    
    /* ======= Twitter Bootstrap hover dropdown ======= */
    
    // apply dropdownHover to all elements with the data-hover="dropdown" attribute
    $('li.dropdown>[data-toggle="dropdown"]').dropdownHover();
    
    /* ======= Fixed header when scrolled ======= */   
   
    $(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#topbar').addClass('navbar-fixed-top');
         }
         else {
             $('#topbar').removeClass('navbar-fixed-top');
         }
    });  
    
    /* ======= jQuery FitVids - Responsive Video ======= */
    /* Ref: https://github.com/davatron5000/FitVids.js/blob/master/README.md */
    
    $(".video-container").fitVids();   
    

});


