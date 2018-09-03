// JavaScript Document
$(document).ready(function() {
	
if ( $(".gallery-style-01 .ms-slide").length < 2 ) {
	$(".gallery-style-01").addClass("hidden-thumb")
}	
	
		var slider = new MasterSlider();
		
		slider.setup('slider-gallery-01', {
			width : 850,
			autoHeight: true,
			space : 5,
			loop : true,
			view : 'basic',
		});
		
		slider.control('arrows');
		slider.control('thumblist', {autohide : false,	dir : 'h'});


});