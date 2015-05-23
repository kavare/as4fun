$(function() {
  $('.footable').footable().bind('footable_filtering', function (e) {
    var selected = $('.footable-filter').find(':selected').text();
    if (selected && selected.length > 0) {
      e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
      e.clear = !e.filter;
    }
  });

  $('.footable-filter').change(function (e) {
    e.preventDefault();
    $('.footable').trigger('footable_filter', {filter: $('#filter').val()});
  });
});