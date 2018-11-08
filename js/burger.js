$(function () {

  $('.burger').on('click', function(){
    $('.burger').toggleClass('burger--active');
    $(".nav--burger").animate({height: 'toggle'});
  });

});
