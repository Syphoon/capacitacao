$(document).ready(function() {

	// Starta ScrollSpy (identificação de id por scroll)
	$('.scrollspy').scrollSpy();
	// Animações de 'spawn' 
	AOS.init();
	// Slider
	$('.carousel.carousel-slider').carousel({
	    fullWidth: true
	});
        

});

/*
	
	Change on Scroll: Background & Icon (index);

*/

$(window).scroll(function() {
    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {

		var active = $('nav').find('.active');
		if (active.attr('href') == '#css') {

			$('body').css('background-image',"url('img/background3.png')");
			$('#logo').attr('src','img/css-3-logo-1.png');
			$('#pag').attr('href','pag/css-exemplos_1.php');
			$('#pag').css('background-color','#0097a7');


		}else if(active.attr('href') == '#js'){

			$('body').css('background-image',"url('img/background2.png')");
			$('#logo').attr('src','img/js-logo.png');
			$('#pag').attr('href','pag/js-exemplos_1.php');
			$('#pag').css('background-color','#ff8a65');

		}else if (active.attr('href') == '#jq') {

			$('#pag').attr('href','pag/j$-exemplos_1.php');
			$('body').css('background-image',"url('img/background.jpg')");
			$('#logo').attr('src','img/jq-logo.png');
			$('#pag').css('background-color','#4527a0');

		}

    }, 25));
});

