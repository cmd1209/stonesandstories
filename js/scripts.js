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
    var videotarget = $("#videotarget");

    videotarget.click(function(){
		overlay.fadeIn(200);
    });
    overlay.click(function(){
    overlay.fadeOut(200);
	});
});

$(function() {
    $('.trigger').click(function(){  
      $(this).closest('.factbox').children('.toggle').slideToggle("fast");
      return false;
    });
});

$(function(){
        var stickynavtop = $('.navigation').offset().top;
        var stickylogo = $('.stickylogo');
        var searchform = $('.wmenu').find('.search'); 
        var stage = $('#stage');         
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickynavtop ) {
                        $('.navigation').css({position: 'fixed', top: '0px'});
                        stickylogo.slideDown(200);
                        searchform.css({top: '7px', right: '7px'});
                        stage.css({"padding-top":"110px"});
                } else {
                        $('.navigation').css({position: 'static', top: '0px'});
                        stickylogo.css({display: 'none'});
                        searchform.css({top: '-35px', right: '0px'});
                        stage.css({"padding-top":"0px"});
                }
        });
});