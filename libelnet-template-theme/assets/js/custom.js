// ==========================================================
//  DOCUMENT ON READY (REPLACES WINDOW.ONLOAD), ACCES JQUERY WITH '$'
// ==========================================================
jQuery(document).ready(function( $ ) {
    // Theme functions
    PreventDropDownClosing();

    // Own Javascript

});


// ==========================================================
//  THEME RELATED JAVASCRIPT
// ==========================================================

/**
 * Function that toggles the font awesome icon of the mobile nav
 * @param {Element} element The button containing a font awesome icon
 */
const toggleNavIcon = (element) => {
    let icon = jQuery(element).find('.fas');

    jQuery(icon).toggleClass('fa-bars');
    jQuery(icon).toggleClass('fa-times')
    
}

/**
 * Function that prevents dropdowns from closing when clicking inside them
 */
const PreventDropDownClosing = () =>{
    jQuery(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
      });
}


// ==========================================================
//  CUSTOM JAVASCRIPT GOES HERE
// ==========================================================