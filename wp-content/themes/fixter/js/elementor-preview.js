 jQuery( window ).on( 'elementor/frontend/init', function() {
	if (typeof themetechmount_carousel !== "function"){ return; }

	elementorFrontend.hooks.addAction( 'frontend/element_ready/tm_project_element.default', function($scope, $){ themetechmount_carousel(); });
	elementorFrontend.hooks.addAction( 'frontend/element_ready/tm_team_element.default', function($scope, $){ themetechmount_carousel(); });
	elementorFrontend.hooks.addAction( 'frontend/element_ready/tm_service_element.default', function($scope, $){ themetechmount_carousel(); });
	elementorFrontend.hooks.addAction( 'frontend/element_ready/tm_blog_element.default', function($scope, $){ themetechmount_carousel(); });
	elementorFrontend.hooks.addAction( 'frontend/element_ready/tm_testimonial_element.default', function($scope, $){ themetechmount_carousel(); });
} );  


(function (jQuery) {
    "use strict";
    jQuery(document).ready(function () {
        callScrollingText();
    });

})(jQuery);

function callScrollingText(){
    if (jQuery(window).width() > 992) {
        var s = skrollr.init({ forceHeight: false });
        var attr = jQuery('html').attr('style');
        if (typeof attr !== 'undefined') {
            jQuery('html').attr('style', 'overflow: auto;');
        }
        setTimeout(function () {
            skrollr.get().refresh();
        }, 500);
    }
}