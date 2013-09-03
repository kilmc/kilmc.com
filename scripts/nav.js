$(document).ready(function() {
  $(".logo").click(function() {
    $(".content-wrap").fadeToggle("fast", function() {

    });
    $(".nav-wrap").fadeToggle("fast", function() {

    });
  });
});