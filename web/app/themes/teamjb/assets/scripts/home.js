var Home = (function($) {
  return function() {
    var self = this;

    self.init = function() {
      self.initSlides();
      self.initTwitter();

      // JavaScript to be fired on the home page
      /*$.ajax({
      url: '/wp-json/posts',
      type: 'GET',
      cache: false,
      contentType: false,
      processData: false,
      success: function (res) {
      console.log(res);
      }
      });*/

    };

    self.initTwitter = function() {
      $("#twitter-5372 .slides").html(self.formatTweets([{
        "created_at": "Fri Mar 06 22:07:13 +0000 2015",
        "id": 573968100850204672,
        "id_str": "573968100850204672",
        "text": "Senate President Andy Gardiner praising @FlChamber and their leadership on healthcare http:\/\/t.co\/3C33ad4376",
        "source": "\u003ca href=\"http:\/\/mobile.twitter.com\" rel=\"nofollow\"\u003eMobile Web\u003c\/a\u003e",
        "truncated": false,
        "in_reply_to_status_id": null,
        "in_reply_to_status_id_str": null,
        "in_reply_to_user_id": null,
        "in_reply_to_user_id_str": null,
        "in_reply_to_screen_name": null,
        "user": {
          "id": 19058681,
          "id_str": "19058681",
          "name": "ashton kutcher",
          "screen_name": "aplusk",
          "location": "Los Angeles, California",
          "profile_location": null,
          "description": "I make stuff, actually I make up stuff, stories mostly, collaborations of thoughts, dreams, and actions. Thats me.",
          "url": "http:\/\/t.co\/GWq9OXISNn",
          "entities": {
            "url": {
              "urls": [{
                "url": "http:\/\/t.co\/GWq9OXISNn",
                "expanded_url": "http:\/\/www.facebook.com\/Ashton",
                "display_url": "facebook.com\/Ashton",
                "indices": [0, 22]
              }]
            },
            "description": {
              "urls": []
            }
          },
          "protected": false,
          "followers_count": 16736979,
          "friends_count": 718,
          "listed_count": 78000,
          "created_at": "Fri Jan 16 07:40:06 +0000 2009",
          "favourites_count": 120,
          "utc_offset": -14400,
          "time_zone": "Eastern Time (US & Canada)",
          "geo_enabled": true,
          "verified": true,
          "statuses_count": 8660,
          "lang": "en",
          "contributors_enabled": false,
          "is_translator": false,
          "is_translation_enabled": false,
          "profile_background_color": "0A0A0A",
          "profile_background_image_url": "http:\/\/pbs.twimg.com\/profile_background_images\/663145842\/cb7wofysgbhjm6g15umz.jpeg",
          "profile_background_image_url_https": "https:\/\/pbs.twimg.com\/profile_background_images\/663145842\/cb7wofysgbhjm6g15umz.jpeg",
          "profile_background_tile": false,
          "profile_image_url": "http:\/\/pbs.twimg.com\/profile_images\/1972890789\/aplusk_logo_sm_normal.jpg",
          "profile_image_url_https": "https:\/\/pbs.twimg.com\/profile_images\/1972890789\/aplusk_logo_sm_normal.jpg",
          "profile_banner_url": "https:\/\/pbs.twimg.com\/profile_banners\/19058681\/1348011720",
          "profile_link_color": "8F000E",
          "profile_sidebar_border_color": "000000",
          "profile_sidebar_fill_color": "DDFFCC",
          "profile_text_color": "333333",
          "profile_use_background_image": true,
          "default_profile": false,
          "default_profile_image": false,
          "following": false,
          "follow_request_sent": false,
          "notifications": false
        },
        "geo": null,
        "coordinates": null,
        "place": null,
        "contributors": null,
        "retweet_count": 104,
        "favorite_count": 220,
        "entities": {
          "hashtags": [],
          "symbols": [],
          "user_mentions": [{
            "screen_name": "aplusapp",
            "name": "A+",
            "id": 296442457,
            "id_str": "296442457",
            "indices": [53, 62]
          }],
          "urls": [{
            "url": "http:\/\/t.co\/CeUyDFZYw2",
            "expanded_url": "http:\/\/aplus.com\/a\/women-words-describe-womanhood",
            "display_url": "aplus.com\/a\/women-words-\u2026",
            "indices": [63, 85]
          }]
        },
        "favorited": false,
        "retweeted": false,
        "possibly_sensitive": false,
        "lang": "en"
      },
      {
        "created_at": "Fri Mar 06 15:37:28 +0000 2015",
        "id": 573870014278692865,
        "id_str": "573870014278692865",
        "text": "Thank you @repdanayoung for taking the time to address @FlChamber members!! http:\/\/t.co\/UU2zWEpT3a",
        "source": "\u003ca href=\"http:\/\/twitter.com\" rel=\"nofollow\"\u003eTwitter Web Client\u003c\/a\u003e",
        "truncated": false,
        "in_reply_to_status_id": null,
        "in_reply_to_status_id_str": null,
        "in_reply_to_user_id": null,
        "in_reply_to_user_id_str": null,
        "in_reply_to_screen_name": null,
        "user": {
          "id": 19058681,
          "id_str": "19058681",
          "name": "ashton kutcher",
          "screen_name": "aplusk",
          "location": "Los Angeles, California",
          "profile_location": null,
          "description": "I make stuff, actually I make up stuff, stories mostly, collaborations of thoughts, dreams, and actions. Thats me.",
          "url": "http:\/\/t.co\/GWq9OXISNn",
          "entities": {
            "url": {
              "urls": [{
                "url": "http:\/\/t.co\/GWq9OXISNn",
                "expanded_url": "http:\/\/www.facebook.com\/Ashton",
                "display_url": "facebook.com\/Ashton",
                "indices": [0, 22]
              }]
            },
            "description": {
              "urls": []
            }
          },
          "protected": false,
          "followers_count": 16736979,
          "friends_count": 718,
          "listed_count": 78000,
          "created_at": "Fri Jan 16 07:40:06 +0000 2009",
          "favourites_count": 120,
          "utc_offset": -14400,
          "time_zone": "Eastern Time (US & Canada)",
          "geo_enabled": true,
          "verified": true,
          "statuses_count": 8660,
          "lang": "en",
          "contributors_enabled": false,
          "is_translator": false,
          "is_translation_enabled": false,
          "profile_background_color": "0A0A0A",
          "profile_background_image_url": "http:\/\/pbs.twimg.com\/profile_background_images\/663145842\/cb7wofysgbhjm6g15umz.jpeg",
          "profile_background_image_url_https": "https:\/\/pbs.twimg.com\/profile_background_images\/663145842\/cb7wofysgbhjm6g15umz.jpeg",
          "profile_background_tile": false,
          "profile_image_url": "http:\/\/pbs.twimg.com\/profile_images\/1972890789\/aplusk_logo_sm_normal.jpg",
          "profile_image_url_https": "https:\/\/pbs.twimg.com\/profile_images\/1972890789\/aplusk_logo_sm_normal.jpg",
          "profile_banner_url": "https:\/\/pbs.twimg.com\/profile_banners\/19058681\/1348011720",
          "profile_link_color": "8F000E",
          "profile_sidebar_border_color": "000000",
          "profile_sidebar_fill_color": "DDFFCC",
          "profile_text_color": "333333",
          "profile_use_background_image": true,
          "default_profile": false,
          "default_profile_image": false,
          "following": false,
          "follow_request_sent": false,
          "notifications": false
        },
        "geo": null,
        "coordinates": null,
        "place": null,
        "contributors": null,
        "retweet_count": 85,
        "favorite_count": 184,
        "entities": {
          "hashtags": [],
          "symbols": [],
          "user_mentions": [{
            "screen_name": "aplusapp",
            "name": "A+",
            "id": 296442457,
            "id_str": "296442457",
            "indices": [70, 79]
          }],
          "urls": [{
            "url": "http:\/\/t.co\/UU2zWEpTfY",
            "expanded_url": "http:\/\/aplus.com\/a\/marum-crater-vanutua",
            "display_url": "aplus.com\/a\/marum-crater\u2026",
            "indices": [80, 102]
          }]
        },
        "favorited": false,
        "retweeted": false,
        "possibly_sensitive": false,
        "lang": "en"
      }]));

      $(window).load(function() {
        var _slider = $("#twitter-5372");

        _slider.flexslider({
          start: function(slider) {

            _slider.find(".flex-control-nav > li > a")
              .css("border-color", '#f7f8fb')
              .hover(
                function() {
                  $(this).css("background-color", "#f7f8fb")
                },
                function() {
                  $(this).css("background-color", "transparent")
                });

            _slider.find(".flex-control-nav > li > a.flex-active")
              .css("background-color", "#f7f8fb");

            _slider.find(".flex-direction-nav > li > a")
              .css("border-color", '#f7f8fb')
              .css("color", '#f7f8fb')
              .hover(
                function() {
                  //$(this).css("background", "none")
                  $(this).css("background-color", "#f7f8fb")
                },
                function() {
                  $(this).css("background-color", "transparent")
                });

            _slider.trigger("coll.flexslider.init");
          },
          before: function(_slider) {
            _slider.find(".flex-control-nav > li > a.flex-active")
              .css("background-color", "transparent");
          },
          after: function(_slider) {
            _slider.find(".flex-control-nav > li > a.flex-active")
              .css("background-color", "#f7f8fb");

            $(window).trigger("resize");
          }
        });
      });
    };

    self.formatTweets = function(tweetdata) {
      var statusHTML = [];
      for (var i = 0; i < tweetdata.length; i++) {
        var username = tweetdata[i].user.screen_name;
        //var status = tweetdata[i].text.replace(/(((f|ht){1}tp:\/\/)[-a-zA-Z0-9@:%_\+.~#?&//=]+)/g,
        var status = tweetdata[i].text.replace(/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/g,
          function(url) {
            return '<a href="' + url + '">' + url + '</a>';
          }).replace(/\B#(\w+)/g,
          function(hash) {
            return '<a href="http://search.twitter.com/search?q=' + hash.substring(1) + '">' + hash.charAt(0) + hash.substring(1) + '</a>';
          }).replace(/\B@([_a-z0-9]+)/ig, function(reply) {
          return '<a href="http://twitter.com/' + reply.substring(1) + '">' + reply.charAt(0) + reply.substring(1) + '</a>';
        });
        statusHTML.push('<li class="tweet"><span class="text" style="color:white">' + status + '</span><small class="time" style="color:white"><a href="http://twitter.com/' + username + '/statuses/' + tweetdata[i].id_str + '">' + self.relativeTime(tweetdata[i].created_at) + '</a></small></li>');
      }

      return statusHTML.join('');
    };

    self.relativeTime = function(time_value) {
      var values = time_value.split(" ");
      time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
      var parsed_date = Date.parse(time_value);
      var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
      var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
      delta = delta + (relative_to.getTimezoneOffset() * 60);

      if (delta < 60) {
        return 'less than a minute ago';
      } else if (delta < 120) {
        return 'a minute ago';
      } else if (delta < (60 * 60)) {
        return (parseInt(delta / 60)).toString() + ' minutes ago';
      } else if (delta < (120 * 60)) {
        return 'an hour ago';
      } else if (delta < (24 * 60 * 60)) {
        return (parseInt(delta / 3600)).toString() + ' hours ago';
      } else if (delta < (48 * 60 * 60)) {
        return '1 day ago';
      } else {
        return (parseInt(delta / 86400)).toString() + ' days ago';
      }

    };

    self.initSlides = function() {
      if (typeof $.fn.layerSlider == "undefined") {
        lsShowNotice('layerslider_8', 'jquery');
      } else {
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
        })
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
        })
      }
    };

    self.hooHoo = function() {};
  };
}(jQuery));
