(function($) {
  $(function() {
    $('.wpcf7').on('invalid.wpcf7', function(e) {
      console.log('invalid');
    });

    $('.wpcf7').on('spam.wpcf7', function(e) {
      console.log('spam');
    });

    $('.wpcf7').on('mailsent.wpcf7', function(e) {
      console.log('mailsent');
    });

    $('.wpcf7').on('mailfailed.wpcf7', function(e) {
      console.log('mailfailed');
    });

    $('.wpcf7').on('submit.wpcf7', function(e) {
      console.log('submit');
    });
  });
})(jQuery);