// custom scripts
$(window).scroll(function () {
  if ($(this).scrollTop() > 10) {
    $('.logo').addClass('trans');
  } else {
    $('.logo').removeClass('trans');
  }
});