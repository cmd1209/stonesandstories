// DOM Ready
$(function(){if(!Modernizr.svg){var e=document.getElementsByTagName("img"),t=/.*\.svg$/;for(var n=0;n!=e.length;++n)e[n].src.match(t)&&(e[n].src=e[n].src.slice(0,-3)+"png")}});$(function(){var e=$("#overlay"),t=$("#videotarget");t.click(function(){e.fadeIn(200)});e.click(function(){e.fadeOut(200)})});$(function(){var e=$(".factbox").children(".toggle").hide();$(".trigger").click(function(){e.slideUp();$(".factbox").css("background-color","white");$(".trigger").removeClass("down").addClass("up");$(this).closest(".factbox").children(".toggle").slideToggle("fast");$(this).closest(".factbox").css("background-color","#e1e1e1");$(this).removeClass("up").addClass("down");return!1})});$(function(){var e=$(".navigation").offset().top,t=$(".stickylogo"),n=$(".wmenu").find(".search"),r=$("#stage");$(window).scroll(function(){if($(window).scrollTop()>e){$(".navigation").css({position:"fixed",top:"0px"});t.slideDown(200);n.css({top:"7px",right:"7px"});r.css({"padding-top":"110px"})}else{$(".navigation").css({position:"static",top:"0px"});t.css({display:"none"});n.css({top:"-35px",right:"0px"});r.css({"padding-top":"0px"})}})});$(document).ready(function(){var e=document.URL.substr(document.URL.indexOf("#")-1);alert(e)});