

(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        //Menu
        $(".mobile_menu").click(function () {
            $("#menu").slideToggle(400);

        });
       

        // $('.insta_header').prependTo('.sbi_item.sbi_type_image:first-child');
        jQuery(window).resize(function () {
            var screenwidth = jQuery(window).width();
            if (screenwidth > 991) {
                jQuery("#menuArea").removeAttr("style");
            }
        });



        //       scroll_top   
        $(window).scroll(function () {
            if ($(this).scrollTop()) {
                $('#toTop').fadeIn();
                $('.header_area').addClass('stiky');
            } else {
                $('#toTop').fadeOut();
                $('.header_area').removeClass('stiky');
            }
        });

        $("#toTop").click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
        });

        //slick slider
        $('.slider_wrapper').owlCarousel({
            loop: false,
            margin: 0,
            autoPlay: true,
            autoplaySpeed: 100,
            nav: false,
            dots: true,
            responsiveClass: true,
            items: 3,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                },
                480: {
                    items: 2,
                },
                // breakpoint from 768 up
                768: {
                    items: 3,
                }
            }

        });

        // AOS scroll animation
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 50,
            delay: 100,
            duration: 400,
            easing: 'ease',
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });


    });


}(jQuery));