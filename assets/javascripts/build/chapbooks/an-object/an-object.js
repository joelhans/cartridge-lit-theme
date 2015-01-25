(function() {
  var reader_name;

  reader_name = null;

  jQuery(function($) {
    var bg_offset, box_hover, offset, win_h;
    win_h = $(window).height();
    offset = win_h - ((win_h - 800) * 2);
    $('.an-object-background').css('top', -offset);
    bg_offset = function(push) {
      return Math.round((win_h + push) / 10) * 10;
    };
    $('.bg-ocean-beach').css('top', bg_offset(1800));
    $('.bg-beach').css('top', bg_offset(2100));
    $('.bg-snow').css('top', bg_offset(3360));
    $('.bg-snow-trans').css('top', bg_offset(2400));
    $('.bg-village-whealbrook').css('top', bg_offset(2960));
    $('.bg-forest-trans-up-one').css('top', bg_offset(4000));
    $('.bg-forest-one').css('top', bg_offset(4320));
    $('.bg-forest-trans-down-one').css('top', bg_offset(4960));
    $('.bg-village-roundbeck').css('top', bg_offset(4920));
    $('.bg-girl-one').css('top', bg_offset(5260));
    $('.bg-girl-portal-one').css('top', bg_offset(5200));
    $('.bg-forest-trans-up-two').css('top', bg_offset(7350));
    $('.bg-forest-two').css('top', bg_offset(7670));
    $('.bg-girl-two').css('top', bg_offset(7340));
    $('.bg-girl-portal-two').css('top', bg_offset(7280));
    $('.bg-girl-three').css('top', bg_offset(7830));
    $('.bg-girl-portal-three').css('top', bg_offset(7770));
    $('.bg-girl-four').css('top', bg_offset(8420));
    $('.bg-girl-portal-four').css('top', bg_offset(8360));
    $('.bg-girl-five').css('top', bg_offset(8920));
    $('.bg-girl-portal-five').css('top', bg_offset(8860));
    $('.bg-girl-six').css('top', bg_offset(9420));
    $('.bg-girl-portal-six').css('top', bg_offset(9360));
    $('.bg-forest-three').css('top', bg_offset(9460));
    $('.bg-forest-trans-down-two').css('top', bg_offset(10100));
    $('.bg-village-whealbrook-two').css('top', bg_offset(10240));
    $('.bg-snow-trans-down').css('top', bg_offset(11400));
    $('.bg-snow-trans-down-two').css('top', bg_offset(12260));
    $('.bg-grass').css('top', bg_offset(11400));
    $('.bg-grass-river').css('top', bg_offset(13600));
    $('.bg-cave').css('top', bg_offset(14900));
    $('.bg-cave-mouth').css('top', bg_offset(14900));
    $('.bg-cave-int').css('top', bg_offset(15260));
    $('.bg-fadeout').css('top', bg_offset(16000));
    $('.bg-faded').css('top', bg_offset(19000));
    $('.front-matter, .back-matter').height(win_h);
    $('.fm-keyboard-keys').children('li').addClass('interact-option');
    $('.fm-keyboard-keys-uppercase, .fm-keyboard-keys-lowercase').children().addClass('interact-option');
    box_hover = function(target) {
      var hover_box, target_pos;
      hover_box = $('.interact-hover-box');
      target_pos = target.offset();
      return hover_box.css({
        width: target.css("width"),
        height: target.css("height"),
        left: target_pos.left,
        top: target_pos.top
      });
    };
    $('.interact-option').on('mouseenter', function() {
      $('.interact-hover-box').show();
      return box_hover($(this));
    });
    $('.fm-create').click(function() {
      $('.interact-hover-box').css('transition', 'none');
      return $('.fm-create-delete, .interact-hover-box').animate({
        opacity: '0'
      }, 1000, function() {
        $('.fm-keyboard').addClass('interact-showing');
        box_hover($('.fm-keyboard-keys-uppercase').children().first());
        return $('.fm-keyboard, .interact-hover-box').animate({
          opacity: '1'
        }, 1000, function() {
          return $('.interact-hover-box').css('transition', 'all 0.2s');
        });
      });
    });
    $('.fm-keyboard ul li').click(function() {
      var keyDown, name, nameCache;
      keyDown = $(this);
      nameCache = $('.fm-textarea').html();
      if (!keyDown.is('.fm-keyboard-back, .fm-keyboard-end')) {
        name = nameCache + keyDown.html();
        $('.fm-textarea').html(name);
      }
      if (keyDown.is('.fm-keyboard-back')) {
        name = nameCache.slice(0, -1);
        return $('.fm-textarea').html(name);
      }
    });
    $('.fm-keyboard-end').click(function() {
      var nameCache;
      nameCache = $('.fm-textarea').html();
      if (nameCache === '') {
        return $('.fm-enter-name').addClass('fm-enter-name-please').html('Please enter a name.');
      } else {
        $('.fm-player-name').html($('.fm-textarea').html());
        $('.interact-hover-box').css('transition', 'none');
        return $('.fm-keyboard, .interact-hover-box').animate({
          opacity: 0
        }, 1000, function() {
          $('.fm-keyboard').hide();
          $('.fm-creating').addClass('interact-showing');
          $('.interact-hover-box').css('display', 'none');
          return $('.fm-creating, .interact-hover-box').animate({
            opacity: 1
          }, 1000, function() {
            var counter, ellipses;
            counter = 0;
            ellipses = setInterval(function() {
              var number;
              number = new Array(counter + 1).join('.');
              $('.fm-ellipsis').html(number);
              return counter++;
            }, 300);
            return setTimeout(function() {
              return $('.fm-creating').animate({
                opacity: '0'
              }, 1000, function() {
                $('.fm-title').addClass('interact-showing');
                $('.fm-title').animate({
                  opacity: '1'
                }, 1000);
                $('.content, .back-matter').fadeIn(1000);
                return clearInterval(ellipses);
              });
            }, 5000);
          });
        });
      }
    });
    return $('.bm-yes').click(function() {
      $('.interact-hover-box').css('transition', 'none');
      return $('.bm-continue, .interact-hover-box').animate({
        opacity: '0'
      }, 1000, function() {
        $('.bm-respite').addClass('interact-showing');
        return $('.bm-respite').animate({
          opacity: '1'
        }, 1000, function() {
          return setTimeout(function() {
            return $('.bm-respite').animate({
              opacity: '0'
            }, 1000, function() {
              $('.bm-acknowledgments').addClass('interact-showing');
              return $('.bm-acknowledgments').animate({
                opacity: '1'
              }, 1000);
            });
          }, 5000);
        });
      });
    });
  });

}).call(this);
