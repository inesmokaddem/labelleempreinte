$(function() {
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').addClass('active');
    $('.vertical-nav').show();
    /* Add disablescroll when sidebar open */
  });
  $('#close-btn').on('click', function() {
    $('#sidebar, #content').removeClass('active');
    $('.vertical-nav').hide();
  });
});
