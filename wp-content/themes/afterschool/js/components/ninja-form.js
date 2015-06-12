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
        $(document).on('submitResponse', function(e, response) {
            var errorMsg = response.errors['required-general'];
            var successMsg = response.success['success msg-成功訊息'];
            if (successMsg) {
              alert(successMsg);
              return;
            }

            alert(errorMsg);
        });
      }
    };

    asNinjaForm.init();
  });
})(jQuery);