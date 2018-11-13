
$(function () {

  $('.burger').on('click', function(){
    $('.burger').addClass('burger--active');
  	$(".nav--burger").animate({height: 'toggle'});
  });

  $( '.nav--burger a' ).on("click", function(){
  	$('.burger').removeClass('burger--active');
    $(".nav--burger").animate({height: 'toggle'});
  });

});
