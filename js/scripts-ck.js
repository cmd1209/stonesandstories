// DOM Ready
$(function(){if(!Modernizr.svg){var e=document.getElementsByTagName("img"),t=/.*\.svg$/;for(var n=0;n!=e.length;++n)e[n].src.match(t)&&(e[n].src=e[n].src.slice(0,-3)+"png")}});$(function(){var e=$("#overlay"),t=$("#videotarget");t.click(function(){e.fadeIn(200)});e.click(function(){e.fadeOut(200)})});$(function(){$(".trigger").click(function(){$(this).closest(".factbox").children(".toggle").slideToggle("fast");$(this).toggleClass("active");return!1})});$(function(){$("#factstoggle").click(function(){$(this).closest(".factbox").children(".toggle").slideToggle("fast");return!1})});$(function(){var e=$(".navigation").offset().top,t=$("#stage"),n=$(".atmosphere");$(window).scroll(function(){if($(window).scrollTop()>e){$(".navigation").css({position:"fixed",top:"0px"});n.fadeOut();t.css({"padding-top":"50px"})}else{$(".navigation").css({position:"static",top:"0px"});t.css({"padding-top":"0px"});n.fadeIn()}})});$(function(){$(".maincontent").height()>1200?$(".option2").fadeIn(200):$(".option2").hide(100)});$(window).resize(function(){$(".maincontent").height()>1200?$(".option2").fadeIn(200):$(".option2").hide(100)});$(function(){$(".maincontent").height()>1600?$(".option1").fadeIn(200):$(".option1").hide(100)});$(window).resize(function(){$(".maincontent").height()>1600?$(".option1").fadeIn(200):$(".option1").hide(100)});