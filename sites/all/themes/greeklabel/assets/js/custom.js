$(document).ready(function(){

$('.clients-logo').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
		arrows:false
      }
    }
	]

});
	
;


$(function() {
  $.scrollify({
	section : ".fullheight",
	 scrollbars:false,
  });
});

	  
// animate anchor on click
$('a[href*="#"]').on('click', function (e) {
	e.preventDefault();

	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top
	}, 10, 'linear');
});



});

	
	
	