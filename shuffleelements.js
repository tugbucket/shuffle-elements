(function($) {
	function shuffle_2s8w(){
		var parent = $(".se_2s8w").data("separent");
		var c = $(".se_2s8w").data("sechildren");
		var fadespeed = $(".se_2s8w").data("sefadespeed");
		var divs = $(parent).children(c);
		divs.each(function(i){
			$(this).addClass('se_item_2s8w').fadeOut(fadespeed);
		});
		$.when($(divs), [])
			.done(function (data, apples) {
			$.each(data, function (k, v) {
				setTimeout(function () {
					apples.push(v);
					if (apples.length === data.length) {
						$(apples).appendTo(parent);
						setTimeout(function(){
							showShuffle_2s8w();
						}, 250);
					};
				}, 1 + Math.floor(Math.random() * 50));
			});
		});
	}
	function showShuffle_2s8w(){
		var fadespeed = $(".se_2s8w").data("sefadespeed");
		$('.se_item_2s8w').each(function(i){
			$(this).fadeIn(fadespeed*i);
		});
	}
	$(document).ready(function() {
		var delay = $(".se_2s8w").data("sedelay");
		var onload = $(".se_2s8w").data("seonload");
		if(onload == "yes"){
			shuffle_2s8w();
		}
		if(delay != ""){
			setInterval(function(){
				shuffle_2s8w();
			}, delay);
		}
		$('.se_2s8w_button').on('click', function(e){
			e.preventDefault();
			shuffle_2s8w();
		});
	});
})(jQuery);
