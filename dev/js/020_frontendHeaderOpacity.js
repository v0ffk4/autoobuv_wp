function headerOpacity() {

	$(window).scroll(function(){
	    var fromtop = $(document).scrollTop();
	    opac = fromtop/200;
	    if(opac > 0.96){
	    	opac = 0.96;
	    }
	    $('.header-bcg').css({opacity: opac});
	    $('#subheader-background').css({opacity: opac});
	});

}