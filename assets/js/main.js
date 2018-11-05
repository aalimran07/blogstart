(function($) {
    "use strict";
    /* ==================== Table Of Content ====================
    1.  Script Initialization
    2.  preloaderSetup
    3.  scrollUpSetup
    4.  countrySelector
    5.  mobileMenu
    6.  catagorySlider
    7.  LatestPostSlider
    8.  blogMasonary
    ===========================================================*/
    /* ================================================
       Script Initialization
  ==================================================*/

    // Window Load Function
    $(window).on('load', function() {
        preloaderSetup();
    });
    if ($.fn.menumaker) {
        $("#cssmenu").menumaker({
            title: "Menu",
            breakpoint: 768,
            format: "multitoggle"
        });
    }
    // Document Ready Function
    $(document).ready(function() {
        scrollUpSetup();
        countrySelector();
        mobileMenu();
        catagorySlider();
        LatestPostSlider();
        blogSlider();
        blogMasonary();
        popupSetup();
    });

    // Window Resize Function
    $(window).on('resize', function() {

    });

    // Window Scroll Function
    $(window).on('scroll', function() {

    });

    // =================== preloaderSetup ===================
    function preloaderSetup() {
        $('#preloader').fadeOut('slow', function() {
            $(this).remove();
        });
    } // preloaderSetup

    // =================== scrollUpSetup ===================
    function scrollUpSetup() {
        var $mainHeaderHeight = $('.main-header').height();

        $('body').append('<span id="scrollup"><i class="fa fa-angle-double-up"></i></span>');
        // scroll function
        $(window).on('scroll', function() {
            var $scrollTop = $(window).scrollTop();
            // ScrollUp show
            if ($scrollTop >= $mainHeaderHeight) {
                $('#scrollup').addClass('scroll-show');
            } else {
                $('#scrollup').removeClass('scroll-show');
            }
        });
        // click function
        $('#scrollup').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 1111);
        });

    } // scrollUpSetup
    // =================== countrySelector ===================
    function countrySelector() {
        $(".country_selector").countrySelect({
            defaultCountry: 'us',
            responsiveDropdown: true
        });
    }

    // =================== mobileMenu ===================
    function mobileMenu() {
        $('.m-menu-btn').on('click', function() {
            $(this).children().toggleClass('active');
        })
    }

    // =================== catagorySlider ===================
    function catagorySlider() {
        $('.catagory-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2500,
            startPosition: 0,
            smartSpeed: 940,
            dots: false,
            margin: 30,
            merge: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2,
                    margin: 15
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    }

    // =================== LatestPostSlider ===================
    function LatestPostSlider() {
        $('.latest-post').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            startPosition: 2,
            smartSpeed: 1500,
            animateOut: 'fadeOut',
            animateIn: 'flipInX',
            autoplayHoverPause: true,
            margin: 15,
            responsive: {
                0: {
                    items: 1
                },
                333: {
                    items: 2
                },
                576: {
                    items: 1
                }
            }
        })
    }

    // =================== blogSlider ===================
    function blogSlider() {
        $('.slider-blog-img').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            startPosition: 0,
            smartSpeed: 1100,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    }


    // =================== blogMasonary ===================
    function blogMasonary() {
        $('.blog-grid').isotope({
            // set itemSelector so .grid-sizer is not used in layout
            itemSelector: '.single-blog',
            percentPosition: true,
            masonry: {
                // use element for option
                columnWidth: '.single-blog'
            }
        })
    }

    // =================== popupSetup ===================
    function popupSetup() {

        $("[data-fancybox]").fancybox({
            loop: true,
            thumbs: {
                autoStart: true
            }
        });

    }



})(jQuery); // End of use strict