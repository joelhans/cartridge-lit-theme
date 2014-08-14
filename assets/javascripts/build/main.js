(function() {
  jQuery(function($) {
    $('.nav-fiction').hover(function() {
      return $('.nav-dropdown-fiction').show();
    }, function() {
      return $('.nav-dropdown-fiction').hide();
    });
    $('.nav-poetry').hover(function() {
      return $('.nav-dropdown-poetry').show();
    }, function() {
      return $('.nav-dropdown-poetry').hide();
    });
    return $('.nav-non-fiction').hover(function() {
      return $('.nav-dropdown-non-fiction').show();
    }, function() {
      return $('.nav-dropdown-non-fiction').hide();
    });
  });

}).call(this);
