# shuffle-elements
Shuffles elements on the page either on load, on click or at set intervals.

## Sample shortcode
[shuffleelements parent=".ngg-caption-view-wrapper" children=".ngg-gallery-thumbnail-box" delay="1000" fade_speed="200" button_text="clicky!"  on_load="yes" aria_label="Shuffle images"]

## Shortcode options
+ **parent**: Uses [jQuery CSS selectors](https://www.w3schools.com/jquery/jquery_ref_selectors.asp). This is the element wrapping the items you want to shuffle.
+ **children**: Uses [jQuery CSS selectors](https://www.w3schools.com/jquery/jquery_ref_selectors.asp). These are the items you want to shuffle.
+ **delay**: This is the amount of time to wait before shuffling. Setting this, makes the shuffle auto-play. In milliseconds.
+ **fade_speed**: This is the amoung of time it takes for the images to fade in and fade out. In millisecounds. Default is 500.
+ **button_text**: This is the text of the button. If this is not set, the button will not appear.
+ **aria_label**: This is the [aria label](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-label) for the button. This is optional.
+ **on_load**: If set to _yes_, it will shuffle on page load. Default is _yes_.

## Notes
+ Time in milliseconds for example, 1 second is _1000_ and 1 minute is _60000_
+ The button has a class _se_2s8w_button_ so you can style it how you see fit.
