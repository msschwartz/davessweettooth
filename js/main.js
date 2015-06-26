
$(document).ready( function() {
        
    // header hero image rotation
    $("#header .slideshow > div:gt(0)").hide();
    setInterval( function() { 
        $('#header .slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#header .slideshow');
    }, 3000);
    
    $('.pouches-slider, .mini-jars-slider').slick({
        slidesToShow: 5,
        dots: true,
        responsive: [
            {
                breakpoint: 1080,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 920,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 499,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    $('.jars-slider').slick({
        slidesToShow: 2,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    
});


$(document).on("click", "#menu-icon", function(e) {
    e.preventDefault();
    $("#menu-list").toggle();
});


function productsInserted() {
    console.log( 'productsInserted' );
}
