$('#customers-testimonials').owlCarousel({
    loop: true,
    center: true,
    items: 4,
    margin: 0,
    autoplay: false,
    dots:true,
    responsiveClass: true,
    // nav: true
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
});