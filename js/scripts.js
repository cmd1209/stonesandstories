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
      $(this).toggleClass("active");
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
        var stickynavtop = $('.navigation').offset().top;
        var stage = $('#stage');
        var atmosphere = $('.atmosphere');         
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickynavtop ) {
                        $('.navigation').css({position: 'fixed', top: '0px'});
                        atmosphere.fadeOut();
                        stage.css({"padding-top":"50px"});
                } else {
                        $('.navigation').css({position: 'static', top: '0px'});
                        stage.css({"padding-top":"0px"});
                        atmosphere.fadeIn();
                }
        });
});

$(function(){
    if ($(".maincontent").height() > 1200) {
        $(".option2").fadeIn(200);
    } else {
        $(".option2").hide(100);
    }
});


 $(window).resize(function(){
    if ($(".maincontent").height() > 1200) {
        $(".option2").fadeIn(200);
    } else {
        $(".option2").hide(100);
    }
 });

 $(function(){
    if ($(".maincontent").height() > 1600) {
        $(".option1").fadeIn(200);
    } else {
        $(".option1").hide(100);
    }
});


 $(window).resize(function(){
    if ($(".maincontent").height() > 1600) {
        $(".option1").fadeIn(200);
    } else {
        $(".option1").hide(100);
    }
 });