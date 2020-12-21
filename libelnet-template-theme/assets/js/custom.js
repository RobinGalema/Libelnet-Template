// ==========================================================
//  DOCUMENT ON READY (REPLACES WINDOW.ONLOAD), ACCES JQUERY WITH '$'
// ==========================================================
jQuery(document).ready(function( $ ) {

});



// ==========================================================
//  CUSTOM JAVASCRIPT GOES HERE
// ==========================================================

// Place all functions using jQuery inside this function to allow the use of '$' instead of 'jQuery';
(function($){  // use $ insde here

// jQuery code
// Prevent closing from click inside dropdown
$(document).on('click', '.dropdown-menu', function (e) {
    e.stopPropagation();
  }); 

})(jQuery);


/**
 * Function that toggles the font awesome icon of the mobile nav
 * @param {Element} element The button containing a font awesome icon
 */
const toggleNavIcon = (element) => {
    let icon = jQuery(element).find('.fas');

    jQuery(icon).toggleClass('fa-bars');
    jQuery(icon).toggleClass('fa-times')
    
}

