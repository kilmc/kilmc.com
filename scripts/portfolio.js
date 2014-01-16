$(document).ready(function() {
  
  var titoUnslider = $('.tito-slides').unslider({speed: 500, delay: false, fluid: true, dots: true});
  
  $('.tito-arrow').click(function() {
      var fn = this.className.split(' ')[1];
      titoUnslider.data('unslider')[fn]();
  });

  var ullUnslider = $('.ull-slides').unslider({ speed: 500, delay: false, fluid: true, dots: true});
  
  $('.ull-arrow').click(function() {
      var fn = this.className.split(' ')[1];
      ullUnslider.data('unslider')[fn]();
  });

  var hundredUnslider = $('.hundred-slides').unslider({speed: 500, delay: false, fluid: true, dots: true});
  
  $('.hundred-arrow').click(function() {
      var fn = this.className.split(' ')[1];
      hundredUnslider.data('unslider')[fn]();
  });

  var personalUnslider = $('.personal-slides').unslider({speed: 500, delay: false, fluid: true, dots: true});
  
  $('.personal-arrow').click(function() {
      var fn = this.className.split(' ')[1];
      personalUnslider.data('unslider')[fn]();
  });

  var battlequotesUnslider = $('.battlequotes-slides').unslider({speed: 500, delay: false, fluid: true, dots: true});
  
  $('.battlequotes-arrow').click(function() {
      var fn = this.className.split(' ')[1];
      battlequotesUnslider.data('unslider')[fn]();
  });

});