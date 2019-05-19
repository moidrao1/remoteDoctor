$( document ).ready(function(){
	$(".button-collapse").sideNav({
		closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
	});
	$(".dropdown-button").dropdown();
  	$('.modal').modal();
  	$('.slider').slider();
  	$('.carousel.carousel-slider').carousel({fullWidth: true});
});



