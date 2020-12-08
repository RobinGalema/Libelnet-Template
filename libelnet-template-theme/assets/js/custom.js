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
 * Function that toggles the font-awesome icon of the menu button when clicked
 * @param {Element} button The button containing the font-awesome icon
 */
const ToggleMenuIcon = (button) => {

    try {
        let icon = jQuery(button).find(".fas");

        if (button.getAttribute("aria-expanded") == null || button.getAttribute("aria-expanded") == "false") {
            // Show close icon -> nav opened
            icon[0].classList.remove('fa-bars');
            icon[0].classList.add('fa-times');
            document.body.classList.add("no-scroll");
        } else if (button.getAttribute("aria-expanded") == "true") {
            // Show open icon -> nav closed
            icon[0].classList.remove('fa-times');
            icon[0].classList.add('fa-bars');
            document.body.classList.remove("no-scroll");
        }
    } catch (err) {
        throw err;
    }
}

