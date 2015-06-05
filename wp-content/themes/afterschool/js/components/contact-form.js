(function($) {
  $(function() {
    var asWpcf7 = asWpcf7 || {};

    asWpcf7 = {
      selector: {
        widget: $('.wpcf7'),
        submitBtn: $('.wpcf7-submit')
      },

      timer: null,

      initEventHandler: function() {
        asWpcf7.selector.widget.on('invalid.wpcf7 spam.wpcf7 mailsent.wpcf7 mailfailed.wpcf7', function(e) {
          clearTimeout(asWpcf7.timer);
          asWpcf7.hideWpcf7Message();
        });

        asWpcf7.selector.widget.on('submit.wpcf7', function(e) {

        });

        asWpcf7.selector.submitBtn.on('click', function() {

        });
      },

      hideWpcf7Message: function() {
        asWpcf7.timer = setTimeout(function() {
          $('.wpcf7-response-output').slideUp(400);
        }, 5000);
      }
    };

    asWpcf7.initEventHandler();
  });
})(jQuery);