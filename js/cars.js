//click functions

$(document).ready(function(){

$('#2015_item').css('display', 'block');

	$(".car_nav").click(function(){

		$(this).children("ul").stop(true, true).slideToggle("slow");
	});

	$(".car_nav_link").click(function(){
		$(".car_item").css('display', 'none');
		var id = $(this).attr('id');
		$('#' + id + '_item').css('display', 'block');
	});

});