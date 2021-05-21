$(function() {
    $('#scrollportada').on('click', function(e) {        
      e.preventDefault();   
      /*if ($('.navbar').hasClass('fixed-top')) {
        $('.navbar').removeClass('fixed-top');        
      }*/

      $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});