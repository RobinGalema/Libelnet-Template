// ==========================================================
//  DOCUMENT ON READY (REPLACES WINDOW.ONLOAD), ACCES JQUERY WITH '$'
// ==========================================================
jQuery(document).ready(function( $ ) {
    // Theme functions
    PreventDropDownClosing();
    InitAOS();

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

/**
 * Set-up data attributes from Gutenberg elements if present and initializes the aos library
 */
 const InitAOS = async () => {
    await SetupAnimatableObjects(".lbl-animate"); // <-- The classname for which the function will search
    AOS.init(); // Initialize AOS
}

/**
 * Checks for animatable objects from the Guthenberg Editor and applies the correct aos data attributes
 * @param {string} baseClass The class that will be used to look for animatable components, use this class in Gutenberg to indicate that an object should be animated.
 * @returns Are there any objects to animate?
 */
const SetupAnimatableObjects = (baseClass) => {
    let animatableObjects = Array.from(jQuery(baseClass));

    if (animatableObjects.length > 0) {
        animatableObjects.forEach(object => {
            object.classList.forEach(className => {
                if (className.includes("aos-")) {
                    let attribute = className.slice(4);
                    object.setAttribute("data-aos", attribute);
                }
            });
        });

        return true; // Animatable objects found and attributes added
    } else {
        return false; // No Animatable objects found
    }
}


// ==========================================================
//  CUSTOM JAVASCRIPT GOES HERE
// ==========================================================