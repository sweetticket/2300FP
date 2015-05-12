//click functions

$(document).ready(function(){

$('#2015_item').css('display', 'block');

	$(".toggle_btn").click(function(){
		if (!$(this).parent().children("ul").hasClass('open')){
			$('.open').stop(true, true).slideToggle("slow").removeClass('open');
			$(this).parent().children("ul").addClass('open');
			$('.open').stop(true, true).slideToggle("slow");
		}else{
			$('.open').stop(true, true).slideToggle("slow").removeClass('open');
		}
	});

	$(".current_car_link").click(function(){
		$('.open').stop(true, true).slideToggle("slow").removeClass('open');
	});

	$(".car_nav_link").click(function(){
		$(".car_item").css('display', 'none');
		var id = $(this).attr('id');
		$('#' + id + '_item').css('display', 'block');
	});

});