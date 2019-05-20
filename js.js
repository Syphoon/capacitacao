$(document).ready(function() {
	
  $('.pushpin').pushpin({
    offset: 0
  });
  $('.scrollspy').scrollSpy();

  $('.pushpin').each(function() {
    var $this = $(this);
    var $target = $('#' + $(this).attr('data-target'));
    $this.pushpin({
      top: $target.offset().top,
      bottom: $target.offset().top + $target.outerHeight() - $this.height()
    });
  });

});


