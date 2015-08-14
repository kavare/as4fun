(function($) {
  $(function() {
    var asFixTopbar = asFixTopbar || {};

    asFixTopbar = {
      $topbar: $('.top-bar-container'),
      triggerLength: 0,
      isOut: false,

      init: function() {
        asFixTopbar.fixTop();
        asFixTopbar.appendClonedBar();
      },

      appendClonedBar: function() {
        asFixTopbar.$topbar.before(asFixTopbar.$topbar.clone().addClass('cloned'));
      },

      fixTop: function() {
        asFixTopbar.triggerLength = asFixTopbar.$topbar.offset().top + asFixTopbar.$topbar.height();

        $(window).on('scroll', function() {
          isOut = $(this).scrollTop() > asFixTopbar.triggerLength;
          $('body').toggleClass('is-out', isOut);
        });
      },
    };

    asFixTopbar.init();
  });
})(jQuery);