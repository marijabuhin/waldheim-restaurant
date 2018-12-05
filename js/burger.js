
$(function () {

  $('.burger').on('click', function(){
    $('.burger').toggleClass('burger--active');
  	$(".nav--burger").animate({height: 'toggle'});
  });

  $( '.nav--burger a' ).on("click", function(){
  	$('.burger').removeClass('burger--active');
    $(".nav--burger").animate({height: 'toggle'});
  });

});
