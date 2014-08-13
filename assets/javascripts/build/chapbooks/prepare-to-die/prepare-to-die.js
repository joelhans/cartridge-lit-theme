(function() {
  var webm_height;

  webm_height = null;

  jQuery(function($) {
    $(window).stellar({
      horizontalScrolling: false,
      hideDistantElements: false
    });
    $('#fleets-of-labor-made-this-marked-infrastructure').waypoint(function() {
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
    return console.log('This is Prepare to Die.');
  });

  $(window).load(function() {
    webm_height = $('.evil-does-not-webm').height();
    console.log(webm_height);
    $('.webm-gradients').css('height', webm_height);
    return $('#evil-does-not-work-like-a-network').waypoint(function() {
      console.log(this);
      return $('.evil-does-not-webm').get(0).play();
    }, {
      offset: 100,
      triggerOnce: true
    });
  });

}).call(this);
