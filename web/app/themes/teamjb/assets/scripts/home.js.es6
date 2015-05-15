export class Home {
	constructor() {
		if (typeof $.fn.layerSlider == "undefined") {
            lsShowNotice('layerslider_8', 'jquery');
        } 
        else {
            $("#layerslider_8").layerSlider({
              pauseOnHover: false,
              forceLoopNum: false,
              keybNav: false,
              touchNav: false,
              skin: 'morpheus',
              navPrevNext: false,
              hoverPrevNext: false,
              navStartStop: false,
              navButtons: false,
              showCircleTimer: false,
              thumbnailNavigation: 'disabled',
              skinsPath: 'http://themes.cubalicious.net/morpheus/wp-content/plugins/LayerSlider/static/skins/'
            });
        }

        var _slider = $("#layerslider_8");
        var _container = _slider.parent();
        
        // pause slider on scroll
        if (_container.hasClass("coll-slideshow")) {
            window.addEventListener("coll.panim.start", function() {
              _slider.layerSlider("stop");
            })
            window.addEventListener("coll.panim.end", function() {
              _slider.layerSlider("start");
            });
        } 
	}
}