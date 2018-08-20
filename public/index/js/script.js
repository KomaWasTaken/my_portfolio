$(function() {
    var projects = $("#projects");
    $(window).on('scroll', (function() { 
        var span = $("#span-projects"); 
        var projectsTop = projects.offset().top;  
        var projscroll = $(window).scrollTop();
        if (projscroll >= projectsTop) {
            span.removeClass("absolute");
            span.addClass("fixed");
            span.addClass("z-index-2");
            span.addClass('top-0');
        } else{
            span.removeClass("fixed");
            span.addClass("absolute");
            span.removeClass('top-0');
        }
    }));
  
});

$(function() {

    var width = screen.width;
    if ( width > 576 )
    {
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
    }
    

    var hamburger = document.querySelector(".hamburger");
    // On click
    hamburger.addEventListener("click", function() {
      // Toggle class "is-active"
      hamburger.classList.toggle("is-active");
      hamburger.classList.toggle('color-1');
      $('#navigation').fadeToggle(500);
      $('#logo').fadeToggle(500);
    });
}); 

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

    
