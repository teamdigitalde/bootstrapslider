$(".carousel").swipe({
	swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
		if (direction == 'left') $(this).carousel('next');
		if (direction == 'right') $(this).carousel('prev');
	},
	allowPageScroll:"vertical"
});
jQuery(".carousel-item").mousedown(function() {
	jQuery(this).addClass("grabbing");
});
jQuery(".carousel-item").mouseup(function() {
	jQuery(this).removeClass("grabbing");
});

$('.carousel').carousel({
    keyboard: true,
    pause: 'hover',
    wrap: true
});

$('.multiSlide').on('slide.bs.carousel', function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    if(jQuery(this).find('.carousel-inner').hasClass('two-items')) {
        var itemsPerSlide = 2;
    }
    else if(jQuery(this).find('.carousel-inner').hasClass('three-items')) {
        var itemsPerSlide = 3;
    }
    else if(jQuery(this).find('.carousel-inner').hasClass('four-items')) {
        var itemsPerSlide = 4;
    }
    else if(jQuery(this).find('.carousel-inner').hasClass('five-items')) {
        var itemsPerSlide = 5;
    }
    else if(jQuery(this).find('.carousel-inner').hasClass('six-items')) {
        var itemsPerSlide = 6;
    }
    else {
        var itemsPerSlide = 10;
    }
    var totalItems = jQuery(this).find('.carousel-item').length;

	if (idx >= totalItems-(itemsPerSlide-1)) {
		var carouselInner = jQuery(this).children('.carousel-inner');
		var it = itemsPerSlide - (totalItems - idx);
		for (var i=0; i<it; i++) {
			// append slides to end
			if (e.direction=="left") {
				$(this).find('.carousel-item').eq(i).appendTo(carouselInner);
			}
			else {
				$(this).find('.carousel-item').eq(0).appendTo(carouselInner);
			}
		}
	}
});
