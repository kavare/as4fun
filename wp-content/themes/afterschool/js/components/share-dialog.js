(function($) {
  $(function() {
    $('.share-facebook').on('click', function(e) {
      FB.ui({
        method: 'share_open_graph',
        action_type: 'og.shares',
        action_properties: JSON.stringify({
          object: location.href,
        })
      }, function(response){});
      console.log('Share Clicked');
    });

  });
})(jQuery);