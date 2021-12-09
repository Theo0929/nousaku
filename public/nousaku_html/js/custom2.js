$(document).ready(function(){
	//popup
	$(".popup_bg").click(function(){
		$(".popup").stop().fadeOut();
	});
	$(".popup_close_btn").click(function(){
		$(".popup").stop().fadeOut();
	});
	$(".popup_close").click(function(){
		$(".popup").stop().fadeOut();
	});
	$(".popup_lettering_example_btn").click(function(){
		$(this).toggleClass("active");
		$(".popup_lettering_example_con").stop().slideToggle();
	});
	$("#card_textarea").on("blur keyup input",function(){
		var textnum = 300 - $(this).val().length;
		$("#card_textnum").text(textnum);
	});
	
	//buycar
	$(".buycar_bg").click(function(){
		$(".buycar").stop().fadeOut();
	});
	$(".buycar_close").click(function(){
		$(".buycar").stop().fadeOut();
	});
});

//popup
function popup(target){
	$(target).stop().fadeIn();
}

//buycar
function buycar_open(){
	$(".buycar").stop().fadeToggle();
	$(".buycar").toggleClass("active")
}