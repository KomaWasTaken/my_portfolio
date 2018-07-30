$(function() {
    var projects = $("#projects");
    $(window).on('scroll', (function() { 
        var span = $("#span-projects"); 
        var projectsTop = projects.offset().top;  
        var projscroll = $(window).scrollTop();
        console.log(scroll);
        if (projscroll >= projectsTop) {
            span.removeClass("absolute");
            span.addClass("fixed");
            span.addClass('top-0');
        } else{
            span.removeClass("fixed");
            span.addClass("absolute");
            span.removeClass('top-0');
        }
    }));
  
});