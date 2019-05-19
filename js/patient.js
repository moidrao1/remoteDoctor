$(document).ready(function(){
	$(".dropdown-button").dropdown();

    $('.collapsible').collapsible();

    $('.tooltipped').tooltip({delay: 5});

    $('.carousel').carousel();

	//Next slide
	$('.carousel').carousel('next');

	// Prev slide
    $('.carousel').carousel('prev');
});