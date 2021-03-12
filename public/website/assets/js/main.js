$(function() {
  'use strict';
  $(window).on('load', function(event) {
      $('#preLoader').delay(500).fadeOut(500)
  });
  $(window).on('scroll', function(event) {
      var scroll = $(window).scrollTop();
      if (scroll < 250) {
          $('.header-menu-area').removeClass('sticky');
          $('.header-two').removeClass('sticky')
      } else {
          $('.header-menu-area').addClass('sticky');
          $('.header-two').addClass('sticky')
      }
  });
  $('.search-icon').on('click', function(e) {
      $('.search-wrap').toggleClass('search-active');
      e.preventDefault()
  });
  $('header .main-menu').meanmenu({
      meanMenuContainer: '.mobilemenu',
      meanScreenWidth: '991',
      meanRevealPosition: 'none',
      meanMenuOpen: '<i class="far fa-bars"/>',
      meanMenuClose: '<i class="far fa-times"/>',
      meanMenuCloseSize: '25px'
  });
  $('#arrive-date, #depart-date').datepicker({
      format: 'd-m-yyyy',
      autoclose: !0,
      startDate: "now"
  });

  var counter1 = $('.counter-number').countUp({
    delay: 100,
    time: 3000,
    triggerOnce: true
  });

  var stop_count = new Waypoint({
    element: document.getElementById('stop_count'),
    handler: function(direction) {
      if (direction == "up") {
        counter.reset();
      } else {
        counter.start();
      }
    },
    offset: '50%'
  });
  $('.latest-room-slider').on('initialized.owl.carousel changed.owl.carousel', function(e) {
    if (!e.namespace)  {
      return;
    }
    var carousel = e.relatedTarget;
    var num = parseInt( carousel.relative(carousel.current())) + 1;
    $('.pagingInfo')
    .html('<span class="big-num">' + '0' + num + '<span class="small">' + carousel.items().length + '</span>' + '</span> ');

  }).owlCarousel({
    margin: 30,
      nav: true,
      dots: false,
      loop: true,
      smartSpeed: 1000,
      navText : ["",""],
      rewindNav : true,
      
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1200: {
          items: 3
          
        }
      }
  });
  $(document).ready(function() {
    var owl = $('.latest-room-slider');
    owl.owlCarousel({
      margin: 30,
      nav: true,
      dots: true,
      loop: true,
      smartSpeed: 3000,
      navText : ["",""],
      rewindNav : true,
      
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1200: {
          items: 3
          
        }
      }
    })
    
  });
  $(document).ready(function() {


    var owl2 = $('.feadback-slide');
    owl2.owlCarousel({
      margin: 30,
      nav: false,
      dots: true,
      loop: true,
      navText : ["",""],
      rewindNav : true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1200: {
          items: 2
          
        }
      }
    })
    
  });

  $(document).ready(function() {
    var owl4 = $('.feedback-slider-two');
    owl4.owlCarousel({
      margin: 18,
      nav: true,
      dots: false,
      loop: true,
      navText : ["",""],
      rewindNav : true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 1
          
        }
      }
    })
    
  });
  
})

$(document).ready(function() {
var owl5 = $('.main-slider');
owl5.owlCarousel({
  // margin: 18,
  // nav: true,
  dots: false,
  loop: true,
  navText : ["",""],
  rewindNav : true,
  autoplay:true,
  autoplayTimeout:4000,
  responsive: {
    0: {
      items: 1
    },
    1000: {
      items: 1
      
    }
  }
})

});

$(document).ready(function() {
var owl6 = $('.dots-slider');
owl6.owlCarousel({
  margin: 18,
  // nav: true,
  dots: false,
  loop: true,
  navText : ["",""],
  rewindNav : true,
  autoplay:true,
  autoplayTimeout:4000,
  responsive: {
    0: {
      items: 3
    },
    1000: {
      items: 4
      
    }
  }
})

});


$(document).ready(function() {
var owl3 = $('.brands-Slide');
owl3.owlCarousel({
  center:true,
  nav: false,
  dots: false,
  loop: true,
  navText : ["",""],
  rewindNav : true,
  responsive: {
    0: {
      items: 3
    },
    600: {
      items: 4
    },
    1000: {
      items: 6
      
    }
  }
})

});

$('.back-to-top').on('click', function(e) {
e.preventDefault();
$('html, body').animate({
    scrollTop: 0
}, 1500)
});

var proQty = $('.pro-qty');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

    