$('.clients-carousel').owlCarousel({
    loop:true,
    center: true,
    items: 9,
    margin: 0,
    autoplay: true,
    dots: true,
    autoplayTimeout: 5000,
    smartSpeed: 500,
    responsiveClass:true,
    // nav: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});



