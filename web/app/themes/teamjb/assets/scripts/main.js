/* ========================================================================
* DOM-based Routing
* Based on http://goo.gl/EUTi53 by Paul Irish
*
* Only fires on body classes that match. If a body class contains a dash,
* replace the dash with an underscore when adding it to the object below.
*
* .noConflict()
* The routing is enclosed within an anonymous function so that you can
* always reference jQuery with $, even when in .noConflict() mode.
*
* Google CDN, Latest jQuery
* To use the default WordPress version of jQuery, go to lib/config.php and
* remove or comment out: add_theme_support('jquery-cdn');
* ======================================================================== */

// Let's rename the smartResize object from our bower package to smartresize so
// we can use both (several plugins want smartresize without capital R).
$.fn.smartresize = $.fn.smartResize;  
    
(function ($) {
    
    $(document).bind('cbox_complete', function(){ 
        setTimeout($.colorbox.resize,1000);             
    });
    
    var sections = new Sections();
    var single = new Single();
 
    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function () {

            },
            finalize: function () {
                // JavaScript to be fired on all pages, after page specific JS is fired
            },
            page_sections: function () {              
              sections.init();
            },
            page_single: function () {             
              single.init();
            }
        },
        // Home page
        'home': {
            init: function () {
                var home = new Home();
                home.init();
            },
            finalize: function () {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        // Meet the team page, note the change from meet-the-team to meet_the_team.
        'meet_the_team': {
            init: function () {
                $('#cboxClose').click(function() { 
                    alert('close');
                    setTimeout($.colorbox.resize,1000);             
                });
                //var home = new Home();
                //home.init();
            }
        },
        'changing_the_weather': {
            init: function () {
                var container = document.querySelector('#client-logos');
                var iso = window.iso = new Isotope( container, {
                    /* ISOTOPE OPTIONS HERE */
                });
                var options = document.querySelector('#options');
                
                eventie.bind( options, 'click', function( event ) {
                if ( !matchesSelector( event.target, 'button' ) ) {
                  return;
                }
                // var opt = {};
                var key = event.target.parentNode.getAttribute('data-isotope-key');
                var value = event.target.getAttribute('data-isotope-value');
                
                // console.log( key, value );
                iso.options[ key ] = value;
                iso.arrange();
                });
            }
        },
        'jon_johnson': {
            init: function () {
                //var home = new Home();
                //home.init();
            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function (func, funcname, args) {
            var fire;
            var namespace = Sage;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function () {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            var isSingle = false;

            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function (i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalize');

                if (classnm == 'single'
                    || classnm == 'search'
                    || classnm == 'look_whos_talking'
                    || classnm == 'team_jb_blog') {
                  isSingle = true;
                }
            });

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');

            if (isSingle) {
              UTIL.fire('common', 'page_single');
            }
            else {
              UTIL.fire('common', 'page_sections');
            }
        }
    };

    // Load Events
    $(document).ready(UTIL.loadEvents);

})(jQuery);     // Fully reference jQuery after this point.
