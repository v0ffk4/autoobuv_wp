function orderFrontend() {

	//containers
	var categoryItemButton = $('.category-item button');
	var orderBackground = $('#order-background');
	var orderCloseButton = $('#order-close-btn');
	var orderContainer = $('#order-container');

	//frames
	var frame01 = $('#order-frame-01');
	var frame02 = $('#order-frame-02');
	var frames = $('.order-frame');
	var submitBtn = $('.submit-button')
	var currentFrameNumber = 0;

	//qty buttons
	var orderIncrementButton = $('#order-increment-btn');
	var orderDecrementButton = $('#order-decrement-btn');



	//show order window
	function showOrderWindow(){

		$(orderBackground).addClass('active');
		$(orderContainer).addClass('active');
		$(frames[currentFrameNumber]).addClass('active');

		var tl = new TimelineMax();

		tl
			.to( orderBackground, 0.5, { opacity: 1, ease: Power1.easeOut, })
			.set( orderContainer, { y: -40 })		
			
			.to( orderContainer, 0.5, { opacity: 1, y: 0, ease: Power1.easeOut, })

	} //show order window

	//hideOrderWindow
	function hideOrderWindow(){

		var tl = new TimelineMax();

		tl
			.to( orderContainer, 0.5, { opacity: 0, y: 40, ease: Power1.easeIn, onComplete:
				function(){
					$(orderContainer).removeClass('active');
				} 
			})
			.to( orderBackground, 0.5, { opacity: 0, ease: Power1.easeIn, onComplete:
				function(){
					$(orderBackground).removeClass('active');
					$(frames).removeClass('active');
					currentFrameNumber = 0;
				} 
			})
			.set( orderContainer, { y:0 })
	} //hideOrderWindow

	//incrementQuantity
	function incrementQuantity() {

		var orderValue = $('.order-count').val();
		$(orderDecrementButton).removeClass('button-inactive');

		if(orderValue < 12){
			orderValue++;
			$('.order-count').val(orderValue);
		} else {
			$('.order-count').val(12);
			$(orderIncrementButton).addClass('button-inactive');
		}

		return orderValue;

	} /* increment */


	//decrementQuantity
	function decrementQuantity() {

		var orderValue = $('.order-count').val();
		$(orderIncrementButton).removeClass('button-inactive');

		if(orderValue > 0){
			orderValue--;
			$('.order-count').val(orderValue);
		} else {
			$('.order-count').val(0);
			$(orderDecrementButton).addClass('button-inactive');
		}

		return orderValue;

	} /* decrement */

	//nextFrame
	function nextFrame() {
		
		var currentFrame = frames[currentFrameNumber];
		$(currentFrame).removeClass('active');
		currentFrameNumber++;
		currentFrame = frames[currentFrameNumber];
		$(currentFrame).addClass('active');

//		var hide = new TimelineMax();
//
//		hide
//			.to( currentFrame, 0.5, { opacity: 0, ease: Power1.easeIn, onComplete:
//				function(){
//					$(currentFrame).removeClass('active');
//					currentFrameNumber++;
//					currentFrame = frames[currentFrameNumber];
//				} 
//			})

		var show = new TimelineMax();

		show
			.set( currentFrame, {opacity: 0})
			.to( currentFrame, 0.5, { opacity: 1, ease: Power1.easeIn, onComplete:
				function(){
					$(currentFrame).addClass('active');
				} 
			})


	} //nextFrame

	
	//order click
	$(categoryItemButton).click(function(){
		showOrderWindow();
	});

	//close order-background
	$('#order-close-btn').click(function(){
		hideOrderWindow();
	})

	//increment
	$(orderIncrementButton).click(function(){
		incrementQuantity();
	});

	//decrement
	$(orderDecrementButton).click(function(){
		decrementQuantity();
	});

	//submit
	$(submitBtn).click(function(){
		nextFrame();
	});


}