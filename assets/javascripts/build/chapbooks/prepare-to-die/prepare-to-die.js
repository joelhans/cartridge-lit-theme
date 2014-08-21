(function() {
  var webm_height;

  webm_height = null;

  jQuery(function($) {
    var win_h;
    win_h = $(window).height();
    $(window).stellar({
      horizontalScrolling: false,
      hideDistantElements: false
    });
    $('.prepare-header').height(win_h);
    $('.prepare-header div').height(win_h / 3);
    $('.prepare-header div h1').fitText(0.6);
    $('.prepare-toc').waypoint(function() {
      return $('nav').slideToggle('slow');
    });
    $('.nav-toc').children().removeClass('nav-item-lit');
    $('.prepare-header, .prepare-toc, .prepare-content, .prepare-footer').waypoint(function(direction) {
      var toc_i, toc_id, toc_target, toc_top;
      toc_id = $(this).attr('id');
      toc_target = $('.nav-toc a[href$="' + toc_id + '"]');
      toc_i = $('.nav-toc a').index(toc_target);
      toc_top = -Math.abs(toc_i * 40);
      if (direction === 'down' && $('.nav-toc').is('.nav-open') === false) {
        $('.nav-toc').children().removeClass('nav-item-lit');
        $(toc_target).addClass('nav-item-lit');
        $('.nav-toc').data('toc-top-pos', toc_top);
        return $('.nav-toc').children('a').css('top', toc_top);
      } else if (direction === 'down' && $('.nav-toc').is('.nav-open') === true) {
        $('.nav-toc').children().removeClass('nav-item-lit');
        $(toc_target).addClass('nav-item-lit');
        return $('.nav-toc').data('toc-top-pos', toc_top);
      }
    }, {
      offset: 40
    }).waypoint(function(direction) {
      var toc_i, toc_id, toc_target, toc_top;
      toc_id = $(this).attr('id');
      toc_target = $('.nav-toc a[href$="' + toc_id + '"]');
      toc_i = $('.nav-toc a').index(toc_target);
      toc_top = -Math.abs(toc_i * 40);
      if (direction === 'up' && $('.nav-toc').is('.nav-open') === false) {
        $('.nav-toc').children().removeClass('nav-item-lit');
        $(toc_target).addClass('nav-item-lit');
        $('.nav-toc').data('toc-top-pos', toc_top);
        return $('.nav-toc').children('a').css('top', toc_top);
      } else if (direction === 'up' && $('.nav-toc').is('.nav-open') === true) {
        $('.nav-toc').children().removeClass('nav-item-lit');
        $(toc_target).addClass('nav-item-lit');
        return $('.nav-toc').data('toc-top-pos', toc_top);
      }
    }, {
      offset: function() {
        return -Math.abs($(this).outerHeight());
      }
    });
    $('.nav-menu').click(function() {
      var toc_top_pos;
      if ($('.nav-toc').is('.nav-open') === false) {
        $('.nav-toc').addClass('nav-open');
        return $('.nav-toc').children('a').css('top', 0);
      } else if ($('.nav-toc').is('.nav-open') === true) {
        toc_top_pos = $('.nav-toc').data('toc-top-pos');
        $('.nav-toc').removeClass('nav-open');
        return $('.nav-toc').children('a').css('top', toc_top_pos);
      }
    });
    return $('#fleets-of-labor-made-this-marked-infrastructure').waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(1)').toggleClass('fleets-show');
    }, {
      offset: 100
    }).waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(2)').toggleClass('fleets-show');
    }, {
      offset: 50
    }).waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(3)').toggleClass('fleets-show');
    }, {
      offset: 0
    }).waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(4)').toggleClass('fleets-show');
    }, {
      offset: -50
    }).waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(5)').toggleClass('fleets-show');
    }, {
      offset: -100
    }).waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(6)').toggleClass('fleets-show');
    }, {
      offset: -150
    }).waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(1)').toggleClass('fleets-show');
    }, {
      offset: -250
    }).waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(2)').toggleClass('fleets-show');
    }, {
      offset: -300
    }).waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(3)').toggleClass('fleets-show');
    }, {
      offset: -350
    }).waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(4)').toggleClass('fleets-show');
    }, {
      offset: -400
    }).waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(5)').toggleClass('fleets-show');
    }, {
      offset: -450
    }).waypoint(function() {
      return $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(6)').toggleClass('fleets-show');
    }, {
      offset: -500
    });
  });

  $(window).load(function() {
    var webm;
    webm = (720 * $(window).width()) / 1280;
    $('.webm-gradients').css('height', webm);
    return $('#evil-does-not-work-like-a-network').waypoint(function() {
      return $('.evil-does-not-webm').get(0).play();
    }, {
      offset: 100,
      triggerOnce: true
    });
  });

}).call(this);
