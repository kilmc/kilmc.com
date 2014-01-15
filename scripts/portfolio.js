$(window).load(function() {
  var titoUnslider = $('.tito-slides').unslider({speed: 500, delay: false, fluid: true});
  
  $('.tito-arrow').click(function() {
      var fn = this.className.split(' ')[1];
      titoUnslider.data('unslider')[fn]();
  });

  var ullUnslider = $('.ull-slides').unslider({ 
    speed: 500, 
    delay: false, 
    fluid: true,
    complete: function() {
      if ($('li.ull-2013.active').length > 0) {
        $('.ull').addClass('y-2013');
        $('.ull').removeClass('y-2012');
      }
      else if ($('li.ull-2012.active').length > 0) {
        $('.ull').addClass('y-2012');
        $('.ull').removeClass('y-2013');
      }
      else {
        $('.ull').removeClass('y-2013');
        $('.ull').removeClass('y-2012');
      }
    }
  });
  
  $('.ull-arrow').click(function() {
      var fn = this.className.split(' ')[1];
      ullUnslider.data('unslider')[fn]();
  });

  var hundredUnslider = $('.hundred-slides').unslider({speed: 500, delay: false, fluid: true});
  
  $('.hundred-arrow').click(function() {
      var fn = this.className.split(' ')[1];
      hundredUnslider.data('unslider')[fn]();
  });

  var personalUnslider = $('.personal-slides').unslider({speed: 500, delay: false, fluid: true});
  
  $('.personal-arrow').click(function() {
      var fn = this.className.split(' ')[1];
      personalUnslider.data('unslider')[fn]();
  });

  var battlequotesUnslider = $('.battlequotes-slides').unslider({speed: 500, delay: false, fluid: true});
  
  $('.battlequotes-arrow').click(function() {
      var fn = this.className.split(' ')[1];
      battlequotesUnslider.data('unslider')[fn]();
  });

});