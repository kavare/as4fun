(function($) {
  $(function() {
    var asWpcf7 = asWpcf7 || {};

    asWpcf7 = {
      selector: {
        widget: $('.wpcf7'),
        submitBtn: $('.wpcf7-submit')
      },

      timer: null,

      init: function() {
        this.bindEventHandler();
        this.replaceAjaxLoader();
      },

      bindEventHandler: function() {
        this.selector.widget.on('invalid.wpcf7 spam.wpcf7 mailsent.wpcf7 mailfailed.wpcf7', function(e) {
          asWpcf7.selector.widget.removeClass('loading');
          clearTimeout(asWpcf7.timer);
          asWpcf7.hideWpcf7Message();
        });

        this.selector.widget.on('submit.wpcf7', function(e) {

        });

        this.selector.submitBtn.on('click', function() {
          asWpcf7.selector.widget.addClass('loading');
          asWpcf7.replaceAjaxLoader();
        });
      },

      hideWpcf7Message: function() {
        this.timer = setTimeout(function() {
          $('.wpcf7-response-output').slideUp(400);
        }, 5000);
      },

      replaceAjaxLoader: function() {
        var path = location.origin + '/wp-content/themes/afterschool/assets/img/loader/comment.gif';
        $('.wpcf7 .ajax-loader').attr('src', path);
      }
    };

    asWpcf7.init();
  });
})(jQuery);