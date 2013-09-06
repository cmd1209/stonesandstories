// DOM Ready
$(function() {
	
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});

$(function() {
	var overlay = $("#overlay");
    var filmbutton = $(".filmbutton");
    var filmplayer = $(".filmplayer");

    filmbutton.click(function(){
		overlay.fadeIn(200);
    	filmplayer.fadeIn(300);
    });
    overlay.click(function(){
    overlay.fadeOut(200);
    filmplayer.fadeOut(300);
	});
});


$(function(){
        var stickynavtop = $('.navigation').offset().top;
        var stickylogo = $('.stickylogo');          
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickynavtop ) {
                        $('.navigation').css({position: 'fixed', top: '0px'});
                        stickylogo.slideDown(200);
                } else {
                        $('.navigation').css({position: 'static', top: '0px'});
                        stickylogo.css({display: 'none'});
                }
        });
});