// DOM Ready
$(function(){if(!Modernizr.svg){var e=document.getElementsByTagName("img"),t=/.*\.svg$/;for(var n=0;n!=e.length;++n)e[n].src.match(t)&&(e[n].src=e[n].src.slice(0,-3)+"png")}});$(function(){var e=$("#overlay"),t=$("#videotarget");t.click(function(){e.fadeIn(200)});e.click(function(){e.fadeOut(200)})});$(function(){$(".trigger").click(function(){$(this).closest(".factbox").children(".toggle").slideToggle("fast");$(this).toggleClass("active");return!1})});$(function(){$("#factstoggle").click(function(){$(this).closest(".factbox").children(".toggle").slideToggle("fast");return!1})});$(function(){var e=$(".navigation").offset().top,t=$("#stage"),n=$(".atmosphere");$(window).scroll(function(){if($(window).scrollTop()>e){$(".navigation").css({position:"fixed",top:"0px"});n.fadeOut();t.css({"padding-top":"50px"})}else{$(".navigation").css({position:"static",top:"0px"});t.css({"padding-top":"0px"});n.fadeIn()}})});$(function(){$(".maincontent").height()>1e3&&$(".option1").show();alert($(".maincontent").height())});