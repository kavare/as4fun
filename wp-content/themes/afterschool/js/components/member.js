(function($) {
  $(function() {
    var asMember = asMember || {};

    asMember = {

      init: function() {
        asMember.setRegisterError();
        asMember.registerSubmitCallback();
        asMember.addSendingIcon('#wpmem_reg form');
      },

      setRegisterError: function() {
        $('#wpmem_reg').siblings('.wpmem_msg').addClass('error');
      },

      registerSubmitCallback: function() {
        $('#wpmem_reg form').on('submit', function() {
          var $this = $(this);
          $('#wpmem_reg :submit').addClass('active').val('處理中請稍候...');
          $('.register-loading').show();
        });
      },

      addSendingIcon: function(element) {
        var path = location.origin + '/wp-content/themes/afterschool/assets/img/loader/poi.gif';
        $(element).append('<img src="' + path + '" alt="form sending" class="register-loading">');
        $('.register-loading').hide();
      }
    };

    asMember.init();
  });
})(jQuery);