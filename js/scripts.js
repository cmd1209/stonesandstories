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
      $(this).closest('.factbox').toggleClass("factboxactive");
      $(this).toggleClass("active");
      return false;
    });
});


$(function() {
    $('#factstoggle').click(function(){ 
      $(this).closest('.factbox').children('.toggle').slideToggle("fast");
      $(this).toggleClass("open");
      return false;
    });
});

$(function(){
  if ($('.maincontent').height() > 1320) {
    $('.option1').show();
  }
});
$(function(){
  if ($('.maincontent').height() > 950) {
    $('.option2').show();
  }
});