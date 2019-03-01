	// Smooth Scroll Script
	$('.test, .nav-link, .navbar-brand, .new-button').click(function() {
		var sectionTo = $(this).attr('href');
		$('html, body').animate({
		  scrollTop: $(sectionTo).offset().top
		}, 1500);
	});
	// Smooth Scroll Script


	 // Blog Carousel Script
	 $(document).ready(function() {
        $('#blog').owlCarousel({
          loop: true,
          margin: 10,
          loop: false,
          margin: 20,
          nav: true,
          dots: false,
          responsiveClass: true,
          navText : ["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 1
            },
            800: {
              items: 2
            },
            1000: {
              items: 3
            },
            1200: {
              items: 3
            }
          }
        })
    });
    // Blog Carousel Script

    // News Carousel Script
    $(document).ready(function() {
        $('#news').owlCarousel({
          loop: true,
          margin: 10,
          loop: false,
          margin: 20,
          nav: true,
          dots: false,
          responsiveClass: true,
          navText : ["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 1
            },
            800: {
              items: 2
            },
            1000: {
              items: 3
            },
            1200: {
              items: 3
            }
          }
        })
    });
    // News Carousel Script


    // Review Carousel Script
    $(document).ready(function() {
        $('#review').owlCarousel({
          loop: true,
          margin: 10,
          loop: false,
          margin: 20,
          nav: true,
          dots: false,
          responsiveClass: true,
          navText : ["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 1
            },
            800: {
              items: 1
            },
            1000: {
              items: 1
            },
            1200: {
              items: 1
            }
          }
        })
    });
    // Review Carousel Script