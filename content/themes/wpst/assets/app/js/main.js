/**
 * Title:
 *    Main Javascript
 * Description:
 *    The main Javascript file where you will write the bulk
 *    of your scripts. Make sure to include this just before
 *    the closing </body> tag.
 * Sections:
 *    $. Your Scripts
 *    $. Grunticon Loader
 */



/* $. Your Scripts - To go within the SIAF (Self invoking annonymous function)
\*----------------------------------------------------------------*/

(function($) {

      /**
     * Set variable to pool DOM only once.
     */
    var body            = $('body');

    /**
     * Setup 'CustomSelect' plugin on all Select elements
     */
    if(!$('html').hasClass('ie')) {
        $("select").each(function() {
            new CustomSelect($(this));
        });
    }

    /**
     * Mobile nav toggle
     */
    $('#mobile-nav-toggle').click(function(){
        $('body').toggleClass('is-active-nav');
        $(this).toggleClass('icon--menu-open').toggleClass('icon--menu-close');
    });


   /**
    * Toggle Gallery
    */
       $('.slideshow').slick({
           arrows: true,
           fade: true,
           appendArrows: $('.gallery__nav'),
           prevArrow: '<span class="icon icon--medium icon--prev | gallery__nav-left"></span>',
           nextArrow: '<span class="icon icon--medium icon--next | gallery__nav-right"></span>',
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 2500,
        cssEase: 'linear'
       });
   })

(jQuery);



/* $. Grunticon Load
\*----------------------------------------------------------------*/

grunticon([ "/content/themes/wpst/assets/dist/grunticon/icons.data.svg.css", "/content/themes/wpst/assets/dist/grunticon/icons.data.png.css", "/content/themes/wpst/assets/dist/grunticon/icons.fallback.css" ]);
