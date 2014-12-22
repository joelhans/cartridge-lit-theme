(function() {
  var reader_name;

  reader_name = null;

  jQuery(function($) {
    var box_hover, win_h;
    win_h = $(window).height();
    $('.fm-keyboard-keys').children('li').addClass('fm-option');
    $('.fm-keyboard-keys-uppercase, .fm-keyboard-keys-lowercase').children().addClass('fm-option');
    box_hover = function(target) {
      var hover_box, target_pos;
      hover_box = $('.fm-hover-box');
      target_pos = target.offset();
      return hover_box.css({
        width: target.css("width"),
        height: target.css("height"),
        left: target_pos.left,
        top: target_pos.top
      });
    };
    $('.fm-option').on('mouseenter', function() {
      return box_hover($(this));
    });
    $('.fm-create').click(function() {
      $('.fm-hover-box').css('transition', 'none');
      return $('.fm-create-delete, .fm-hover-box').animate({
        opacity: '0'
      }, 1000, function() {
        $('.fm-keyboard').addClass('fm-showing');
        box_hover($('.fm-keyboard-keys-uppercase').children().first());
        return $('.fm-keyboard, .fm-hover-box').animate({
          opacity: '1'
        }, 1000, function() {
          return $('.fm-hover-box').css('transition', 'all 0.2s');
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
    return $('.fm-keyboard-end').click(function() {
      var nameCache;
      nameCache = $('.fm-textarea').html();
      console.log(nameCache);
      if (nameCache === '') {
        return $('.fm-enter-name').addClass('fm-enter-name-please').html('Please enter a name.');
      } else {
        $('.fm-player-name').html($('.fm-textarea').html());
        $('.fm-hover-box').css('transition', 'none');
        return $('.fm-keyboard, .fm-hover-box').animate({
          opacity: 0
        }, 1000, function() {
          $('.fm-creating').addClass('fm-showing');
          $('.fm-hover-box').css('display', 'none');
          return $('.fm-creating').animate({
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
                $('.fm-title').addClass('fm-showing');
                $('.fm-title').animate({
                  opacity: '1'
                }, 1000);
                $('.content').fadeIn(1000);
                return clearInterval(ellipses);
              });
            }, 5000);
          });
        });
      }
    });
  });

}).call(this);
