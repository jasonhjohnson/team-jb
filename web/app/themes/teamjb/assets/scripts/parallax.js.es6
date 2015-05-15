export class Parallax {
    constructor() {
        console.log('Parallax initialized.'); 
        this.$window = $(window);         
        this.$content = $('#skrollr-body');
        this.isMobile = $('body').hasClass('coll-mobile') ? true : false; 
        this._item;
        this._content;        
        this._slideH;
    }
    
    run() {
        let _self = this;
        
        // compute sliders ar
        $('.js-coll-parallax > .coll-flexslider').each(function () {
            var _this = $(this);
            var _ar = _this.find('img').first().attr('width') / _this.find('img').first().attr('height')
            _this.attr('data-coll-ar', _ar);
            
            // listen for the layerslier init event
            _this.on('coll.flexslider.init', function () {
                _self.manageFS($(this));
            });
        });
        
        $('.js-coll-parallax > .coll-layerslider > .ls-wp-container').each(function () {
            var _this = $(this);
            var _ar = _this.width() / _this.height();
            _this.parent().attr('data-coll-ar', _ar);

            // listen for the layerslier init event
            _this.on('coll.layerslider.init', function () {
                _self.manageLS($(this));
            });
        });

        // compute videos ar
        $('.js-coll-parallax .coll-bg-video > iframe').each(function () {
            var _this = $(this);
            var _ar = _this.attr('width') / _this.attr('height');
            _this.parent().attr('data-coll-ar', _ar);
        });

        // mobile phone bug
        if (_self.isMobile)  {
            $('.coll-section-background').addClass('js-coll-parallax');
        } 
        
        // select all the backgrounds
        _self._content = {};
        _self._content.image = $('.js-coll-parallax .coll-bg-image');
        _self._content.slider = $('.js-coll-parallax .coll-bg-slider');
        _self._content.video = $('.js-coll-parallax .coll-bg-video');

        // select all the parallax bgs
        _self._item = $('.js-coll-parallax');

        // select sliding header
        _self._slideH = $('.js-coll-header-slide');
        
        // events        
        _self.$window.load(function () {
            _self.resize();
        });
        _self.$window.smartResize(_self.resize);
        // _self.$window.resize(_this.resize);

        // manage bg videos
        _self.manageY(_self._content.video.find('iframe[src*="youtube"]'));
        _self.manageV(_self._content.video.find('iframe[src*="vimeo"]'));
    }
    
    addData() {
        let _self = this;
        
        // remove all data attributes
        _self.removeAttrs(_self._item, '^(data-)');
        
        _self._item.each(function () {
            var _this = $(this);
            var _ot = _this.parent().offset().top - _self.$content.offset().top;
        
            _self.addAttr(_this, _ot - _self.$window.height(), -_self.$window.height() / 2);
            if (_this.parent().height() > _self.$window.height()) {
                _self.addAttr(_this, _ot, 0);
                _self.addAttr(_this, _ot + _this.parent().height() - _self.$window.height(), _this.parent().height() - _self.$window.height());
            }            
            _self.addAttr(_this, _ot + _this.parent().height(), _this.parent().height() - _self.$window.height() / 2);
        });
        
        if (_self._slideH) {
            _self.removeAttrs(_self._slideH, '^(data-)');
            _self.addAttr(_self._slideH, _self.$window.height() - _self._slideH.height() - 10, -200);
            _self.addAttr(_self._slideH, _self.$window.height() - _self._slideH.height(), 0);
        }
    }
    
    addAttr(item, nData, nValue) {
        let _self = this;
        
        var _data = 'data-' + Math.round(nData);
        //var _value = 'top:' + nValue + 'px';
        var _value = 'transform: translate(0px, ' + nValue + 'px);';
        item.attr(_data, _value);
    }
    
    resize() {
        let _self = this;      
        
        //_self.$window = $(window); 
        
        var _war = _self.$window.width() / _self.$window.height();

        // resize bg container
        _self._item.height(_self.$window.height());

        // resize images
        _self._content.image.css('height', function () {
            var _this = $(this);
            var _ar = _this.data('coll-ar');
            var _h;
            
            if (_ar < _war) {
                _this.width(_self.$window.width());
                _h = _this.width() / _ar;
            }
            else {
                _this.width(_ar * _self.$window.height());
                _h = _self.$window.height();

            }

            _this.css('left', (_self.$window.width() - _this.width()) / 2);

            return  _h;
        });

        // resize sliders
        _self._content.slider.css('height', function () {
            var _this = $(this);
            var _ar = _this.data('coll-ar');
            var _h;

            if (_ar < _war) {
                _this.width(_self.$window.width());
                _h = _this.width() / _ar;
                _this.css('top', (_self.$window.height() - _h) / 2);
            }
            else {
                _this.width(_ar * _self.$window.height());
                _h = _self.$window.height();
                _this.css('top', 0);
            }

            _this.css('left', (_self.$window.width() - _this.width()) / 2);

            // manage ls
            if (_this.hasClass('coll-layerslider')) {
                _self.manageLS(_this.find('.ls-container'));
            }
            
            // manage fs
            if (_this.hasClass('coll-flexslider')) {
                _self.manageFS(_this);
            }

            return  _h;
        });

        // resize videos
        _self._content.video.css('height', function () {
            var _this = $(this);
            var _ar = _this.data('coll-ar');
            var _h;

            if (_ar < _war) {
                _this.width(_self.$window.width());
                _h = _this.width() / _ar;
            }
            else {
                _this.width(_ar * _self.$window.height());
                _h = _self.$window.height();
            }

            _this.css('left', (_self.$window.width() - _this.width()) / 2);

            return _h;
        });

        _self.addData();
    }
    
    manageLS(slider) {
        let _self = this;
        
        var _offsetH = -parseInt(slider.parent().css('left')),
            _offsetV = -parseInt(slider.parent().css('top')),
            _prev = slider.find('.ls-nav-prev'),
            _next = slider.find('.ls-nav-next'),
            _timer = slider.find('.ls-circle-timer'),
            _bottomNav = slider.find('.ls-bottom-nav-wrapper');

        _prev.css('left', 50 + _offsetH);
        _next.css('right', 50 + _offsetH);
        _timer.css('bottom', 32 + _offsetV);
        _bottomNav.css('bottom', 10 + _offsetV);
    }
    
    manageFS(slider) {
        let _self = this;
        
        var _offsetH = -parseInt(slider.css('left')),
            _offsetV = -parseInt(slider.css('top')),
            _prev = slider.find('.flex-prev'),
            _next = slider.find('.flex-next'),
            _bottomNav = slider.find('.flex-control-nav');

        _prev.css('left', 50 + _offsetH);
        _next.css('right', 50 + _offsetH);
        _bottomNav.css('bottom', 40 + _offsetV);
    }
    
    manageY(iframe) {
        let _self = this;
        
        // Inject YouTube API script
        var tag = document.createElement('script');
        tag.src = "//www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        
        // players ready
        _self.$window[0].onYouTubeIframeAPIReady = function () {
            iframe.each(function () {
                var _iframe = $(this),
                    _muteButton = _iframe.closest('.coll-section-background').find('.js-coll-video-sound');  
        
                var player = new YT.Player($(this).attr('id'), {
                    events: {
                        // call this function when player is ready to use
                        'onReady': function () {
                            //player.mute();
                            var _sound = true
                            // mute on start
                            if (_iframe.parent().hasClass('coll-to-mute')) {
                                player.mute();
                                _sound = !_sound;
                            }
                            // manage mute button
                            if (_muteButton.length > 0) {
                                var _icon = _muteButton.find('.fa');
                                // move to section
                                _muteButton.closest('.coll-page-section').append(_muteButton.parent());
                                // display
                                if (_sound) {
                                    _icon.addClass('fa-volume-up');
                                } else {
                                    _icon.addClass('fa-volume-off');
                                }
        
                                //control
                                _muteButton.on('click', function () {
                                    if (_sound) {
                                        player.mute();
        
                                        _sound = !_sound;
                                        _icon.removeClass('fa-volume-up').addClass('fa-volume-off');
                                    } else {
                                        player.unMute();
        
                                        _sound = !_sound;
                                        _icon.removeClass('fa-volume-off').addClass('fa-volume-up');
                                    }
                                });
                            }
                        },
                        'onStateChange' : function(e){
                            if (e.data == 0){
                                player.seekTo(0);
                            }
                        }        
                    }
                });
            });
        }; 
    }
    
    manageV(iframe) {
        let _self = this;
        
        iframe.each(function () {
            var _iframe = $(this),
                _muteButton = _iframe.closest('.coll-section-background').find('.js-coll-video-sound'),
                _url = "http:" + _iframe.attr('src').split('?')[0];

            // load after load
            _iframe.data('coll-src', _iframe.attr('src'));
            _iframe.attr('src', '');
            
            _self.$window.load(function () {
                _iframe.attr('src', _iframe.data('coll-src'));
            });

            // sound
            if (window.addEventListener) {
                window.addEventListener('message', onMessageReceived, false);
            }
            else {
                window.attachEvent('onmessage', onMessageReceived, false);
            }

            function onMessageReceived(e) {
                var data = JSON.parse(e.data);

                switch (data.event) {
                    case 'ready':
                        var _sound = true;
                        
                        // mute on start
                        if (_iframe.parent().hasClass('coll-to-mute')) {
                            var data = { method: 'setVolume', value: '0' };
                            _iframe[0].contentWindow.postMessage(JSON.stringify(data), _url);
                            _sound = !_sound;
                        }
                        // manage mute button
                        if (_muteButton.length > 0) {
                            var _icon = _muteButton.find('.fa');
                            // move to section
                            _muteButton.closest('.coll-page-section').append(_muteButton.parent())
                            // display
                            if (_sound) {
                                _icon.addClass('fa-volume-up');
                            } else {
                                _icon.addClass('fa-volume-off');
                            }

                            //control
                            _muteButton.on('click', function () {
                                if (_sound) {
                                    var data = { method: 'setVolume', value: '0' };
                                    _iframe[0].contentWindow.postMessage(JSON.stringify(data), _url);

                                    _sound = !_sound;
                                    _icon.removeClass('fa-volume-up').addClass('fa-volume-off');
                                } else {
                                    var data = { method: 'setVolume', value: '1' };
                                    _iframe[0].contentWindow.postMessage(JSON.stringify(data), _url);

                                    _sound = !_sound;
                                    _icon.removeClass('fa-volume-off').addClass('fa-volume-up');
                                }
                            });
                        }

                        break;
                }
            }
        });
    }
    
    removeAttrs (item, regex) {
        var regex = new RegExp(regex, "g");
        return item.each(function () {
            var _this = $(this);
            for (var i = this.attributes.length - 1; i >= 0; i--) {
                var attrib = this.attributes[i];
                if (attrib && attrib.name.search(regex) >= 0) {
                    _this.removeAttr(attrib.name);
                }
            }
            ; // end for
        });
    }
}