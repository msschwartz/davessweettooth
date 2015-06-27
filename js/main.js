
$(document).ready( function() {
    
    var hasTouch = 'ontouchstart' in window;
    
    if ( ! hasTouch ) {
        $('body').addClass('no-touch');
    }
        
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
        dots: true,
        responsive: [
            {
                breakpoint: 499,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    
    if (hasTouch) {
        $('.product').click( function(e) {
            e.preventDefault();
            if ( $(this).hasClass('active') ) {
                if ( ! $(e.target).hasClass('btn') ) {
                    // click was not the buy button, remove active class
                    $(this).removeClass('active');
                }
            }
            else {
                $(this).addClass('active');
            }
        });
    }
    else {
        $('.product').mouseover( function(e) {
            $(this).addClass('active');
        });
        $('.product').mouseout( function(e) {
            $(this).removeClass('active');
        });
    }
    
    initializeMap();
    
});


$(document).on("click", "#menu-icon", function(e) {
    e.preventDefault();
    if ( $('#header').hasClass('menu-active') ) {
        $('#header').removeClass('menu-active');
    }
    else {
        $('#header').addClass('menu-active');
    }
});


function initializeMap() {
    var myLatlng = new google.maps.LatLng(42.544701,-83.466909);
    var mapOptions = {
      zoom: 4,
      center: myLatlng,
      scrollwheel: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Hello World!'
    });
}
