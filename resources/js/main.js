$(function () {
  // menu
  $("#menu_btn").click(function () {
    $("#menu").slideToggle();
  });

  // question slide
  $(".question").each(function () {
    $(this).click(function () {
      $(this).children(".answer").slideToggle();
    });
  });

  // back to top button
  var topBtn = $("#page_top");
  topBtn.hide();
  //スクロールが500に達したらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  //スルスルっとスクロールでトップへもどる
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });

  // sp menu
  $(".hamburger").click(function () {
    $(".menu_sp").removeClass("hidden");
    $(".menu_sp").addClass("active");
  });

  $(".close_btn").click(function () {
    $(".menu_sp").addClass("hidden");
    $(".menu_sp").removeClass("active");
  });

  // logout
    $('#logout_btn').click(function(){
      $('#logout_form').submit();
    })
});
