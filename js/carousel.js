$(function () {
    
  $('.carousel--about').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  });

  $('.carousel--gallery').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  });

  $('.carousel--menu').owlCarousel({
    center: true,
    loop: false,
    //autoWidth:true,
    margin: 0,
    nav: true,
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

});
