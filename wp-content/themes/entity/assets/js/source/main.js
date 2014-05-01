(function($) {
	
	if (screen.width<=450) {
		//$('nav').attr('id', 'menu');
		$('nav#menu').mmenu();
		} else {
		//$("link[rel=stylesheet]:not(:first)").attr({href : "style.css"});
	}

	
	$('#header').click(function(e){
		e.preventDefault();
		$(this).find('img').toggleClass('menuclose menuopen');
	});
	

})(jQuery);
