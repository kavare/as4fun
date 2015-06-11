(function($) {
  $(function() {
    var asNinjaForm = asNinjaForm || {};

    asNinjaForm = {
      init: function() {
        asNinjaForm.showOtherInput('.with-friends', '.friends-num-wrap');
      },

      showOtherInput: function(checkbox, control) {
        var isChecked = $(checkbox).prop('checked');

        $(checkbox).on('click', function() {
          isChecked = $(this).prop('checked');
          isChecked ? $(control).fadeIn(200) : $(control).fadeOut(200);
        });
      }
    };

    asNinjaForm.init();
  });
})(jQuery);