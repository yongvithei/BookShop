$(function() {
    "use strict";


    $('.new-arrivals').owlCarousel({
        loop:true,
        margin:14,
        responsiveClass:true,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1 // Display 1 item on screens less than 576px wide
            },
            576:{
                items:1 // Display 1 item on screens 576px wide and above
            },
            768:{
                items:2 // Display 2 items on screens 768px wide and above
            },
            992:{
                items:3 // Display 3 items on screens 992px wide and above
            },
            1200:{
                items:4 // Display 4 items on screens 1200px wide and above
            }
        }
    });





    $('.browse-category').owlCarousel({
			loop:true,
			margin:10,
			responsiveClass:true,
			nav:false,
			dots: false,
			responsive:{
					0:{
						items:1
					},
					576:{
						items:3
					},
					768:{
						items:4
					},
					1366:{
						items:5
					},
					1400:{
						items:6
					}
				 },
			})


			$('.latest-news').owlCarousel({
				loop:true,
				margin:10,
				responsiveClass:true,
				nav:false,
				dots: false,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					1024:{
						items:3
					 },
					1366:{
						items:4
					 }
				  }
				})


				$('.brands-shops').owlCarousel({
					loop:true,
					margin:0,
					responsiveClass:true,
					nav:false,
					autoplay:true,
					autoplayTimeout:5000,
					dots: false,
					responsive:{
						0:{
							items:1
						},
						600:{
							items:2
						},
						1024:{
							items:3
						 },
						1366:{
							items:5
						 }
					  }
					})


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
