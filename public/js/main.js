/*
    Template Name: Makaw Premium Restaurant Template
    Description: This is a Responsive Bootstrap4 Template
    Author: SuperbTemplate
    Version: 1.0
*/
/*================================================
[  Table of contents  ]
================================================
	01. Sticky Menu
	02. Audero Smoke Effect
    03. Owl Carousel
	04. jQuery MeanMenu
	05. MagnificPopup
	06. ScrollUp
    07. Wow js
    08. Isotope & Imageload
    09. Slick Slider
    10. Datepicker
    11. Ripples js
    12. Scrolly Parallax js
    13. Video Player
    14. Hoverdir Js

======================================
[ End table content ]
======================================*/

(function ($) {
"use strict";

/*------------------------------------
    01. Sticky Menu
-------------------------------------- */
    // var windows = $(window);
    // var stick = $(".header-sticky");
    // var ul = $(".main-menu");
	// windows.on('scroll',function() {
	// 	var scroll = windows.scrollTop();
	// 	if (scroll < 245) {
	// 		stick.removeClass("sticky");
    //         ul.removeClass("sticky");
	// 	}else{
	// 		stick.addClass("sticky");
    //         ul.addClass("sticky");
	// 	}
	// });


/*------------------------------------
    02. Audero Smoke Effect
-------------------------------------- */
    $('.smoke').auderoSmokeEffect({
        imagePath: 'img/slider/smoke.png',
        speed: 6000,
        pause: 0,
        repeat: -1,
        posX: 0,
        posY: 0
    });

/*----------------------------------------
    03. Owl Carousel
---------------------------------------- */

/*----------------------------------------
    Slider Carousel
---------------------------------------- */
    $('.slider-wrapper').owlCarousel({
        loop:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 2500,
        items:1,
        nav:false,
        dots: true,
        nav:true,
        navText : ['<i class="zmdi zmdi-chevron-left"></i>','<i class="zmdi zmdi-chevron-right"></i>']
    });
/*----------------------------------------
    Testimonial Carousel
---------------------------------------- */
    $('.testimonial-carousel').owlCarousel({
        autoPlay: false,
        smartSpeed: 2000,
        fluidSpeed: true,
        dotsData:true,
        items : 1,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            768:{
                items:1
            }
        }
    });

/*------------------------------------
    04. jQuery MeanMenu
-------------------------------------- */
	$('.main-menu nav').meanmenu({
		meanScreenWidth: "991",
		meanMenuContainer: '.mobile-menu'
	});

/*-------------------------------------
    05. MagnificPopup
--------------------------------------- */
/*-------------------------
    Magnific Popup Video
-------------------------- */
     $('.video-popup').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        zoom: {
            enabled: true,
        }
    });
/*-------------------------
    Magnific Popup Image
-------------------------- */
    $('.img-popup').magnificPopup({
        type: 'image',
        gallery:{
            enabled:true
        }
    });

/*------------------------------------------
    06. ScrollUp
------------------------------------------- */
	$.scrollUp({
        scrollText: '<i class="fa fa-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

/*------------------------------------------
    07. Wow js
-------------------------------------------- */
    new WOW().init();

/*------------------------------------------
    08. Isotope & Imageload
-------------------------------------------- */
    $('.grid').imagesLoaded( function() {
        $('.menu-list').on( 'click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $(this).addClass('active').siblings().removeClass('active');
            $grid.isotope({ filter: filterValue });
        });
		var $grid = $('.grid').isotope({
            itemSelector: $grid,
            percentPosition: true,
            masonry: {
                columnWidth: $grid
            }
		});
	});

    $('.gallery').imagesLoaded( function() {
		$('.gallery-list').on( 'click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $(this).addClass('active').siblings().removeClass('active');
            $gallery.isotope({ filter: filterValue });
		});
		var $gallery = $('.gallery').isotope({
            itemSelector: '.gallery-item',
            percentPosition: true,
            layoutMode: 'fitRows',
            masonry: {
                columnWidth: '.gallery-item'
            }
		});
	});

/*----------------------------------------
	09. Slick Slider
------------------------------------------*/
    $('.product-thumbnail-slider').slick({
        autoplay: false,
        infinite: true,
        centerPadding: '0px',
        focusOnSelect: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.product-image-slider',
        arrows: false,
    });
    $('.product-image-slider').slick({
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
        autoplay: false,
        infinite: true,
        slidesToShow: 1,
        asNavFor: '.product-thumbnail-slider',
    });

    $('.service-thumbnail-slider').slick({
        autoplay: false,
        infinite: true,
        centerPadding: '0px',
        focusOnSelect: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.service-image-slider',
        arrows: false,
    });
    $('.service-image-slider').slick({
        autoplay: false,
        infinite: true,
        slidesToShow: 1,
        asNavFor: '.service-thumbnail-slider',
        arrows: false,
    });

/*-------------------------------------------
    10. Datepicker
--------------------------------------------- */
    $('.datepicker').datepicker();

/*-------------------------------------------
    11. Ripples js
--------------------------------------------- */
    $('.js-ripples').ripples({
        resolution: 512,
        dropRadius: 20,
        perturbance: 0.04
    });

/*-------------------------------------------
    12. Scrolly Parallax js
--------------------------------------------- */
    $('.parallax').scrolly({bgParallax: true});

/*------------------------------------
	13. Video Player
--------------------------------------*/
    $(".player").YTPlayer({
        showControls: false
    });

/*------------------------------------
	14. Hoverdir Js
--------------------------------------*/
   $('.gallery > div').each( function() { $(this).hoverdir(); } );

})(jQuery);

window.addEventListener('resize', function(event) {
    if(window.innerHeight <= 768 && window.innerWidth >= 1300){
        document.getElementsByClassName('single-slide fixed')[0].style.top = "-70vh";
        document.getElementsByClassName('carousel-control-next-icon')[0].style.marginTop = "100%";
        document.getElementsByClassName('carousel-control-prev-icon')[0].style.marginTop = "100%"
    };
}, true)
if(window.innerHeight <= 768 && window.innerWidth >= 1300){
    document.getElementsByClassName('single-slide fixed')[0].style.top = "-70vh";
    document.getElementsByClassName('carousel-control-next-icon')[0].style.marginTop = "100%";
    document.getElementsByClassName('carousel-control-prev-icon')[0].style.marginTop = "100%"
};