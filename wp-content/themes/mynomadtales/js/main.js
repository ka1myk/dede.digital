// custom scripts
$(window).scroll(function () {
  if ($(this).scrollTop() > 10) {
    $('.logo').addClass('trans');
  } else {
    $('.logo').removeClass('trans');
  }

});

function autof(elem){
	var destination = $('#'+elem).offset().top;
	content_overheight_close();
	$("html,body").animate({scrollTop: destination}, 600);
}