(function($) {
  $(function() {
    var asNinjaForm = asNinjaForm || {};

    asNinjaForm = {
      init: function() {
        asNinjaForm.showOtherInput('.with-friends', '.friends-num-wrap');
        asNinjaForm.addSendingIcon('.ninja-forms-form-wrap');
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
          $('.ninja-forms-form .submit-btn').addClass('active');
          $('.ninja-loading').show();
        });

        $('.ninja-forms-form').on('submitResponse', function(e, response) {

          // NOTICE: this is the response object returned by ninja-form
          // var success = response.success;
          // var errors = response.errors;
          // success ? alert(success['success_msg-成功訊息']) : alert(errors['required-general'].msg);

          $('.ninja-loading').hide();
          $('.ninja-forms-form .submit-btn').removeClass('active');
        });
      },

      addSendingIcon: function(element) {
        var path = location.origin + '/wp-content/themes/afterschool/assets/img/loader/poi.gif';
        $(element).append('<img src="' + path + '" alt="form sending" class="ninja-loading">');
        $('.ninja-loading').hide();
      }
    };

    asNinjaForm.init();
  });
})(jQuery);