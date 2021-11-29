$(function () {
  $(window).on('load scroll resize', function () {
    let winWidth = $(window).innerWidth();

    if (winWidth >= 1200) {
      $(`header>.headerWrap>nav`).removeClass('navPostion');
    }
    if (winWidth < 1200) {
      $(`header>.headerWrap>nav`).addClass('navPostion');
    }
  });
  $('#hb').click(function () {
    let place = $("nav").css("right");
    if (place < "0px") {
      $("nav").animate({
        right: 0,
      }, 1200, 'easeInBounce')
    } else {
      $("nav").animate({
        right: "-30%",
      }, 1200, 'easeOutBounce')
    }
  });
});