function callback() {
	
	$('#callback-link').click(function() {

		if( !$('#callback').hasClass('active') ){

			$('#callback').addClass('active');
			TweenLite.to($('.active'), 0.5, {opacity: 1, ease: Power1.easeOut});
				

		} else {

			TweenLite.to($('.active'), 0.5, {opacity: 0, ease: Power1.easeIn, onComplete:function(){
					$('#callback').removeClass('active');
				}
			});
				
		}

	})

}