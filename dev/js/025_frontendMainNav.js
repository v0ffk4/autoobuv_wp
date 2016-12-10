function mainNav() {
	var mainNav = $('.nav-main');
	var mainNavOpenBtn = $('.main-menu-open');
	var mainNavCloseBtn = $('.main-menu-close');


	function mainNavOpen() {
		$(mainNav).addClass('active');

		var showMainNav = new TimelineMax();
		showMainNav
			.to(mainNav, 0.5, {opacity: 1, ease: Power2.easeOut })
			.to(mainNavOpenBtn, 0.5, { opacity: 0, ease: Power2.easeOut, onComplete:
			function() {
				$(mainNavOpenBtn).removeClass('active');
			}
		}, '-=0.5' )
		.set(mainNavCloseBtn, {opacity:0, onComplete:
			function() {
				$(mainNavCloseBtn).addClass('active');
			}
		}, '-=0.5')
		.to(mainNavCloseBtn, 0.5, {opacity: 1, ease: Power2.easeOut}, '-=0.5')
	}


	function mainNavClose() {

		var hideMainNavTl = new TimelineMax();
		$(mainNavOpenBtn).addClass('active');

		hideMainNavTl
			.to(mainNav, 0.5, {opacity: 0, ease: Power2.easeOut, onComplete:
				function() {
					$(mainNav).removeClass('active');
				}
			})
			.to(mainNavCloseBtn, 0.5, {opacity:0, ease: Power2.easeOut, onComplete:
				function() {
					$(mainNavCloseBtn).removeClass('active');
				}
			}, '-=0.5')
			.to(mainNavOpenBtn, 0.5, {opacity:1, ease: Power2.easeOut}, '-=0.5')

	}


	$(mainNavOpenBtn).click(function(){
		mainNavOpen();
	});
	

	$(mainNavCloseBtn).click(function(){
		mainNavClose();
	});

}