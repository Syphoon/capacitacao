$(document).ready(function() {

	// Starta ScrollSpy (identificação de id por scroll)
	$('.scrollspy').scrollSpy();
	// Animações de 'spawn' 
	AOS.init();
	// Slider
	$('.carousel.carousel-slider').carousel({
	    fullWidth: true
	});
        
	$('.modal').modal();

});

/*
	
	Change on Scroll: Background & Icon (index);

*/

$(window).scroll(function() {
    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {

		var active = $('nav').find('.active');
		if (active.attr('href') == '#css') {

			$('#logo').attr('src','img/css-3-logo-1.png');
			$('body').css('background-image',"url(img/background3.png)");
			$('#pag').attr('href','pag/css-exemplos_1.php');
			
			$('#pag').addClass('css');
			$('#pag').removeClass('jss');
			$('#pag').removeClass('js');
			// $('body').addClass('css');
			// $('body').removeClass('jss');
			// $('body').removeClass('js');



		}else if(active.attr('href') == '#js'){

			$('#logo').attr('src','img/js-logo.png');
			$('body').css('background-image',"url(img/background2.png)");
			$('#pag').attr('href','pag/js-exemplos_1.php');
			
			$('#pag').addClass('js');
			$('#pag').removeClass('css');
			$('#pag').removeClass('jss');
			// $('body').addClass('js');
			// $('body').removeClass('css');
			// $('body').removeClass('jss');



		}else if (active.attr('href') == '#jq') {
			
			$('#pag').addClass('jss');
			$('body').css('background-image',"url(img/background.jpg)");
			$('#pag').removeClass('css');
			$('#pag').removeClass('js');
			// $('body').addClass('jss');
			// $('body').removeClass('css');
			// $('body').removeClass('js');

			$('#pag').attr('href','pag/j$-exemplos_1.php');
			$('#logo').attr('src','img/jq-logo.png');

		}

    }, 25));
});


/*
	
	$ajax

*/

$('#logout').on('click',function(){

	var values = "desu";

	 $.ajax({
        url: "../php/functions.php",
        type: "POST",
        data: values,
        success: function (response) {

        	console.log("logout");

        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });

});