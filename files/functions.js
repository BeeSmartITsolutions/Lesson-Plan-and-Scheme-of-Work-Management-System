$(function() {
	$(document).on('focusin', '.field, textarea', function() {
		if(this.title==this.value) {
			this.value = '';
		}
	}).on('focusout', '.field, textarea', function(){
		if(this.value=='') {
			this.value = this.title;
		}
	});
});

$(window).load(function() {
	$('.clients-list .flexslider').flexslider({
		controlNav: false,
		directionNav: false,
		animation: 'slide',
		minItems: 6,
		maxItems: 6,
		move: 6,
		slideshowSpeed: 6000,
		itemWidth: 136
	});

	$('.slider').flexslider({
		animation: 'slide',
		directionNav: false
	});
});