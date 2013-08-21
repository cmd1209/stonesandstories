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
    var wrapper = $(".wrapper");

    filmbutton.click(function(){
		overlay.fadeIn(200);
    	filmplayer.fadeIn(300);
    	wrapper.toggleClass("blureffect");
    });
    overlay.click(function(){
    overlay.fadeOut(200);
    filmplayer.fadeOut(300);
	});
});