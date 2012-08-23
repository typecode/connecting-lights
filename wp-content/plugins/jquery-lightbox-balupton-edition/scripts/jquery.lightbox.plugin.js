jQuery(function($) {

  //K2 fix
  
  if (typeof K2 !== "undefined") {
    function Lightbox() {
      this.updateImageList = function() {
        $.Lightbox.relify();
      }
    }
    
    var myLightbox = new Lightbox();
  }
  
  //Native Wordpress Gallery fix
  
  $(".gallery a:has(img)").lightbox();
  
  //Title fix for Lightbox descriptions
  
  $("a:not([title]):has(img)").attr("title", function(index, attr) {
		return $(this).children("img:first").attr("title");
  });
} );