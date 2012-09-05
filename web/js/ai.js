$(document).ready(function() {
	
	//page scrolling
	
	$(".time-link").click(function(){
			$('html, body').animate({scrollTop: $("#block2").offset().top}, 1000);
	});
	
	$(".adaptideas-link").click(function(){
			$('html, body').animate({scrollTop: $("#block1").offset().top}, 1000);
	});

});
	
// analytics
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9998191-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

//slider
$(window).load(function() {
         $('#featured').orbit();
});