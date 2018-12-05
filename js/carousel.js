$(function () {
    
  $('.carousel--about').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1
  });

  $('.carousel--gallery').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    items: 1
  });
  
  $('.carousel--menu').owlCarousel({
    center: true,
    loop: true,
    nav: true,
    margin: 0,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:5
      }
    }
  });
    
  $('.carousel--menu').on('translate.owl.carousel', function(e){
    idx = e.item.index;
    $(this).find('.owl-item.big').removeClass('big');
    $(this).find('.owl-item.medium').removeClass('medium medium--left medium--right');
    $(this).find('.owl-item').eq(idx).addClass('big');
    $(this).find('.owl-item').eq(idx-1).addClass('medium medium--left');
    $(this).find('.owl-item').eq(idx+1).addClass('medium medium--right');
  });

});
