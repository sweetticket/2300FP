//click functions

$(document).ready(function(){
	$(".car_nav").click(function(){
		$(this).children("ul").stop(true, true).slideToggle("slow");

	});

});