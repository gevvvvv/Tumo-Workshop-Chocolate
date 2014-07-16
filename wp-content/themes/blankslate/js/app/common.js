app.common = {
	init: function(){
		function footer(){
			var ww = parseInt($(window).height(), "px");
			var hw = parseInt($("#header").height(), "px") + parseInt($("#header").css("padding-bottom"), "px") + parseInt($("#header").css("padding-top"), "px");
			var fw = parseInt($("#footer").height(), "px") + parseInt($("#footer").css("padding-top"), "px");
			$("#container").css("min-height", function(){
				return ww - (hw + fw )+ "px";
			});
		}
		footer();
		$(window).resize(function(){footer();});
	},
    finalize: function(){

    }
};