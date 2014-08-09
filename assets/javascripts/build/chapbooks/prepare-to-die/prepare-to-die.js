(function() {
  jQuery(function($) {
    var getRandom;
    console.log('This is Prepare to Die.');
    $(window).stellar({
      horizontalScrolling: false,
      hideDistantElements: false
    });
    return getRandom = function(min, max) {
      return Math.random() * (max - min) + min;
    };
  });

}).call(this);
