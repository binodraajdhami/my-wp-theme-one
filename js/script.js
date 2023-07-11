$(document).ready(function () {
    $('#banner-slider').owlCarousel({
        loop: true,
        nav: true,
        autoPlay: true,
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
});