$(function() {
	"use strict";

    if ($('.similar-products').length) {
        var viewedSlider = $('.similar-products');

        viewedSlider.owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 6000,
            nav: false,
            dots: false,
            responsive:{
                0:{
                    items:1 // Display 1 item on screens less than 576px wide
                },
                576:{
                    items:2 // Display 2 items on screens 576px wide and above
                },
                768:{
                    items:3 // Display 3 items on screens 768px wide and above
                },
                992:{
                    items:4 // Display 4 items on screens 992px wide and above
                },
                1200:{
                    items:5 // Display 5 items on screens 1200px wide and above
                }
            }
        });


        if ($('.owl_prev_item').length) {
            var prev = $('.owl_prev_item');
            prev.on('click', function () {
                viewedSlider.trigger('prev.owl.carousel');
            });
        }

        if ($('.owl_next_item').length) {
            var next = $('.owl_next_item');
            next.on('click', function () {
                viewedSlider.trigger('next.owl.carousel');
            });
        }
    }




    $('.product-gallery').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        nav:false,
        dots: false,
        thumbs: true,
        thumbsPrerendered: true,
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
        })














});
