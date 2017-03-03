$(document).ready(function() {
	var animeTime = 500;
	
	$(".someDiv").on("click", function(e){
		var modal=$("#modalDiv");
		var vus=$(".content-fg2").height();
		var shir=$(".content-fg2").width();
		$("#modalDiv").height(vus);
		$("#modalDiv").width(shir);
		modal.css('background-image', $(e.target).css('background-image'));
		modal.show(animeTime);
	});
	
	$("#modalDiv").on("click", function(){
		$(this).hide(animeTime);
	});
		
	/* Проба
	var vus=$(".content-fg2").height();
	var shir=$(".content-fg2").width();
	$(".ps1").click(function(){
	  $(".ps1").animate({
		height:vus,
		width:shir-6,
	  }, 1500 );
	  $(".ps2").remove();
	  $(".ps3").remove();
	  $(".ps4").remove();
	  $(".ps5").remove();
	  $(".ps6").remove();
	});
	if($(".content-fg2").height()==vus) {
		$(".ps1").click(function(){
		  $(".ps1").animate({
			height:'200',
			width:'200',
		  }, 1500 );
		});
	}*/
});