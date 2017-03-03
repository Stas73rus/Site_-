$(document).ready(function () { 
	$(".bar").click(function(){
		if($(".hideMenu").is(":visible"))
			$(".hideMenu").hide ();
		else
			$(".hideMenu").show ();	
	});
	
	window.onresize = function (e) {
		$(".hideMenu").hide();
	};
	
	
	$(".bar1").click(function(){
		if($(".hideMenu1").is(":visible"))
			$(".hideMenu1").hide ();
		else
			$(".hideMenu1").show ();	
	});
	
	window.onresize = function (e) {
		$(".hideMenu1").hide();
	};
});