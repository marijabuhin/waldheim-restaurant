$(function () {
	$(document).scroll(function () {
		var $nav = $(".nav");
		$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	});
});


$(document).ready(function(){
	$(".nav__link, .link").on('click', function(event) {

		if (this.hash !== "") {
		    event.preventDefault();
		    var hash = this.hash;

		    $('html, body').animate({
		       scrollTop: $(hash).offset().top
		    }, 800, function(){
		   
		    window.location.hash = hash;
			});
		} 
	});
});
