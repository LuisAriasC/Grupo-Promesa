$('#customers-testimonials').owlCarousel({
    loop: true,
    center: true,
    items: 3,
    margin: 0,
    autoplay: true,
    dots:true,
    autoplayTimeout: 15000,
    smartSpeed: 450,
    responsiveClass: true,
    // nav: true
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 3
      }
    }
});