$(function() {
    var header = $(".navbar");
    var links = $(".links");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled_nav");
            links.addClass("scrolled_links")
        } else {
            header.removeClass("scrolled_nav");
            links.removeClass("scrolled_links")
        }
    });
  
});