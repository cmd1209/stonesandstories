// DOM Ready
$(function(){if(!Modernizr.svg){var e=document.getElementsByTagName("img"),t=/.*\.svg$/;for(var n=0;n!=e.length;++n)e[n].src.match(t)&&(e[n].src=e[n].src.slice(0,-3)+"png")}});$(function(){var e=$("#overlay"),t=$("#videotarget");t.click(function(){e.fadeIn(200)});e.click(function(){e.fadeOut(200)})});$(function(){var e=$(".factbox").children(".toggle").hide();$(".trigger").click(function(){$(".trigger").removeClass("down").addClass("up");e.slideUp();$(this).closest(".factbox").children(".toggle").slideToggle("fast");$(this).removeClass("up").addClass("down");return!1})});$(function(){$("#factstoggle").click(function(){$(this).closest(".factbox").children(".toggle").slideToggle("fast");return!1})});$(function(){var e=$(".navigation").offset().top,t=$("#stage");$(window).scroll(function(){if($(window).scrollTop()>e){$(".navigation").css({position:"fixed",top:"0px"});t.css({"padding-top":"60px"})}else{$(".navigation").css({position:"static",top:"0px"});t.css({"padding-top":"0px"})}})});