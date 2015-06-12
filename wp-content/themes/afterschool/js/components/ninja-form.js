(function($) {
  $(function() {
    var asNinjaForm = asNinjaForm || {};

    asNinjaForm = {
      init: function() {
        asNinjaForm.showOtherInput('.with-friends', '.friends-num-wrap');
        asNinjaForm.registerSubmitCallback();
      },

      showOtherInput: function(checkbox, control) {
        var isChecked = $(checkbox).prop('checked');

        $(checkbox).on('click', function() {
          isChecked = $(this).prop('checked');
          isChecked ? $(control).fadeIn(200) : $(control).fadeOut(200);
        });
      },

      registerSubmitCallback: function() {
        $('.ninja-forms-form').on('submit', function() {
          var $this = $(this);
          var path = location.origin + '/wp-content/themes/afterschool/assets/img/loader/poi.gif';

          $('.ninja-forms-form .submit-btn').addClass('active');
          $this.parent().append('<img src="' + path + '" alt="form sending" class="ninja-loading">');
        });

        $('.ninja-forms-form').on('submitResponse', function(e, response) {
            var $this = $(this);
            var success = response.success;
            var errors = response.errors;

            $('.ninja-loading').remove();
            $('.ninja-forms-form .submit-btn').removeClass('active');

            // success ? alert(success['success_msg-成功訊息']) : alert(errors['required-general'].msg);
        });
      }
    };

    asNinjaForm.init();
  });
})(jQuery);