
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
    
    $('.toffee-slider').slick({
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
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
