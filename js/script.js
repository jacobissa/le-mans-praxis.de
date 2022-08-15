$(document).ready(function () {
  $("#my-btn-top").hide();
  applyClickBtn("#my-content-home");

  $("#my-btn-home, #my-btn-logo").click(function () {
    closeNavbarToggler();
    applyClickBtn("#my-content-home");
  });

  $("#my-btn-team").click(function () {
    closeNavbarToggler();
    applyClickBtn("#my-content-team");
  });

  $("#my-btn-services").click(function () {
    closeNavbarToggler();
    applyClickBtn("#my-content-services");
  });

  $("#my-btn-privacy").click(function () {
    closeNavbarToggler();
    applyClickBtn("#my-content-privacy");
  });

  $("#my-btn-imprint").click(function () {
    closeNavbarToggler();
    applyClickBtn("#my-content-imprint");
  });

  $("#my-btn-whatsapp").click(function () {
    closeNavbarToggler();
  });

  $("#my-btn-top, #my-btn-footer-top").click(function () {
    closeNavbarToggler();
    $("html, body").stop().animate({ scrollTop: 0 }, 500, "swing");
  });

  function closeNavbarToggler() {
    if (!$("#my-btn-toggler").hasClass("collapsed")) {
      $("#my-btn-toggler").trigger("click");
    }
  }

  function applyClickBtn(id) {
    $("#my-footer").hide();
    $("#my-content").children().children().hide();
    $(id).children().slideDown();
    $("#my-footer").slideDown();
  }

  $(window).scroll(function () {
    var distance =
      $("body").height() -
      $(this).scrollTop() -
      $(window).height() -
      $("#my-footer").outerHeight();

    if (distance < 0) {
      $("#my-btn-top").fadeOut("fast");
    } else if ($(this).scrollTop() > 200) {
      $("#my-btn-top").slideDown("fast");
    } else {
      $("#my-btn-top").slideUp("fast");
    }
  });
});
