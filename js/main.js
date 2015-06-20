
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
    
});


$(document).on("click", "#menu-icon", function(e) {
    e.preventDefault();
    $("#menu-list").toggle();
});


function productsInserted() {
    console.log( 'productsInserted' );
}
