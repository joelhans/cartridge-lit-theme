(function() {
  jQuery(function($) {
    return $('.clickable').click(function(ev) {
      var centX, centY, clickX, clickY, diffX, diffY, scrollX, scrollY, winX, winY;
      winY = $(window).height();
      winX = $(window).width();
      clickY = ev.pageY;
      clickX = ev.pageX;
      scrollY = $(window).scrollTop();
      scrollX = $(window).scrollLeft();
      centY = (winY / 2) + scrollY;
      centX = (winX / 2) + scrollX;
      diffY = clickY - centY;
      diffX = clickX - centX;
      return $('html, body').animate({
        scrollTop: scrollY + diffY,
        scrollLeft: scrollX + diffX
      });
    });
  });

}).call(this);
