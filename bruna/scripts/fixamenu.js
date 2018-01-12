jQuery("document").ready(function($){
    
    var nav = $('.menu-site');
    
    $(window).scroll(function () {
        if ($(this).scrollTop() &gt; 100) {
            nav.addClass(".menu-fixo");
        } else {
            nav.removeClass(".menu-fixo");
        }
    });
 
});