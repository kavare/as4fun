(function($) {
  $(function() {
    var asGoToTop = asGoToTop || {};

    asGoToTop = {
      offset: 300,
      scroll_duration: 700,
      button: $('.go-to-top'),

      init: function() {
        asGoToTop.toggleButton();
        asGoToTop.slideUp();
      },

      toggleButton: function() {
        $(window).on('scroll', function() {
          var isShown = $(this).scrollTop() > asGoToTop.offset;
          isShown ? asGoToTop.button.addClass('is-visible') : asGoToTop.button.removeClass('is-visible');
        });
      },

      slideUp: function() {
        asGoToTop.button.on('click', function() {
          event.preventDefault();
          $('body').animate({
            scrollTop: 0
          }, asGoToTop.scroll_duration);
        });
      }
    };

    asGoToTop.init();
  });
})(jQuery);