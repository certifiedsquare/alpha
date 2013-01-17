


//Uncomment to use
//jQuery(document).ready(function($){
    
    // Fix vertical rhythm for editor-inserted images
    // Uses baseline.js script in plugins.js
    $('img, img.aligncenter, img.alignnone, .aligncenter img, .gallery-item img')
        .baseline(24)
        .attr('height','')
        .attr('width','')
    ; 

	console.log("test");

});

