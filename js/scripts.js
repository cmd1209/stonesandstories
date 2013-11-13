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
    var closepanel = $('.factbox').children('.toggle').hide();
    $('.trigger').click(function(){ 
      $('.trigger').removeClass("down").addClass("up");
      closepanel.slideUp();
      $(this).closest('.factbox').children('.toggle').slideToggle("fast");
      $(this).removeClass( "up" ).addClass( "down" );
      return false;
    });
});

$(function() {
    $('#factstoggle').click(function(){ 
      $(this).closest('.factbox').children('.toggle').slideToggle("fast");
      return false;
    });
});

$(function(){
        var stickynavtop = $('.bmenu').offset().top;
        var stage = $('#stage');         
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickynavtop ) {
                        $('.bmenu').css({position: 'fixed', top: '0px'});
                        stage.css({"padding-top":"60px"});
                } else {
                        $('.bmenu').css({position: 'static', top: '0px'});
                        stage.css({"padding-top":"0px"});
                }
        });
});