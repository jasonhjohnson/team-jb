var Scroll = (function($) {
  return function() {
    var self = this;

    self.pos = 0;
    self.max = 0;
    self.min = 0;

    var _container = $('#skrollr-body'),
      _sb = $('.js-coll-scrollbar'),
      _sbc = $('.js-coll-scrollbar-content');

    var $wndw = $(window);

    self.init = function() {
      // scrollbar
      _sbc.height(_container.height());

      _sb.perfectScrollbar({
        wheelSpeed: 0,
        minScrollbarLength: 20,
        suppressScrollX: true
      });

      // events
      $wndw.load(self.onWLoad);
      $wndw.smartResize(self.resize);
      $wndw.on('coll.container.update', self.resize);
      $wndw.on('coll.lightbox.on', self.disableEvents)
      $wndw.on('coll.lightbox.off', self.enableEvents)

      // enable
      self.enableEvents();
    };

  };
}(jQuery));
