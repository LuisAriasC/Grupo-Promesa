$('.clients-carousel').owlCarousel({
    loop: true,
    center: true,
    items: 4,
    margin: 0,
    autoplay: true,
    dots: true,
    aytoplayTimeout: 5000,
    smartSpeed: 500,
    responsiveClass: true,
    // nav: true
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000: {
            items:3
        }
    }
});