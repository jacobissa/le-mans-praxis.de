var coded = "DTbH@Hn-DT95-YfT8b5.Sn";
var key = "mSTiGfgxA4qNJOlt2c59WMDoFbu3j8Cz17pwHeRvydaBQrVh0UILZKPEYksnX6";
var shift = coded.length;
var link = "";
for (i = 0; i < coded.length; i++) {
  if (key.indexOf(coded.charAt(i)) == -1) {
    ltr = coded.charAt(i);
    link += ltr;
  } else {
    ltr = (key.indexOf(coded.charAt(i)) - shift + key.length) % key.length;
    link += key.charAt(ltr);
  }
}
document.getElementById("home-email").textContent = link;
document.getElementById("home-email").href = "mailto:" + link;
document.getElementById("privacy-email").textContent = link;
document.getElementById("impressum-email").textContent = link;

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
