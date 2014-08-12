jQuery(document).ready(function($){


/*MENUCONTROLLER*/
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
// var navbarHeight = $('body > header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('body > header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('body > header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}
	
/*SUPERSLIDES*/
$('#slides').superslides({
    play: 8000,
	animation: 'fade',
	animation_speed: 'normal',
    pagination: false
});
	
/*MIXITUP PORTFOLIO*/
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('.work-grid').mixitup({
					targetSelector: '.item',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('.work-grid .item').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 140, 'easeInQuad');
						$(this).find('img').stop().animate({top: -20}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -100}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
	});	
		
/*MOUSETRACKER*/
$("body").mousemove(function(event){       
    var mouseX = event.pageX / $(window).width();

    if (mouseX < 0.8) {
        $('a.next').stop().animate({
            opacity: 0
        }, 100, "linear");
    } else {
        $('a.next').stop().animate({
            opacity: 1
        }, 100, "linear");
    };
    
    if (mouseX < 0.2) {
        $('a.prev').stop().animate({
            opacity: 1
        }, 100, "linear");
    } else {
        $('a.prev').stop().animate({
            opacity: 0
        }, 100, "linear");
    };
    event.stopPropagation();
});

});