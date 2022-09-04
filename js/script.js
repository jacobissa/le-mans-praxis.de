/**
 * email decryption
 */
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

/**
 * collapse navbar toggler btn
 */
$(
  "#my-btn-home, #my-btn-logo, #my-btn-team, #my-btn-services, #my-btn-privacy, #my-btn-imprint, #my-btn-whatsapp,#my-btn-floating-top, #my-btn-footer-top, #my-btn-darkmode"
).on("click", function () {
  if (!$("#my-btn-toggler").hasClass("collapsed")) {
    $("#my-btn-toggler").trigger("click");
  }
});

/**
 * btn click change content
 */
changeContent("#my-content-home");
function changeContent(id) {
  $("#my-footer").hide();
  $("#my-content").children().children().hide();
  $(id).children().slideDown();
  $("#my-footer").slideDown();
}

$("#my-btn-home, #my-btn-logo").click(function () {
  changeContent("#my-content-home");
});

$("#my-btn-team").click(function () {
  changeContent("#my-content-team");
});

$("#my-btn-services").click(function () {
  changeContent("#my-content-services");
});

$("#my-btn-privacy").click(function () {
  changeContent("#my-content-privacy");
});

$("#my-btn-imprint").click(function () {
  changeContent("#my-content-imprint");
});

/**
 * scroll to top btn
 */
$("#my-btn-floating-top").hide();
$("#my-btn-floating-top, #my-btn-footer-top").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 500);
});
$(window).scroll(function () {
  var distance = $("body").height() - $(this).scrollTop() - $(window).height() - $("#my-footer").outerHeight();

  if (distance < 0) {
    $("#my-btn-floating-top").fadeOut();
  } else if ($(this).scrollTop() > 250) {
    $("#my-btn-floating-top").fadeIn();
  } else {
    $("#my-btn-floating-top").fadeOut();
  }
});

/**
 * service worker registration
 */
if ("serviceWorker" in navigator) {
  window.addEventListener("load", function () {
    navigator.serviceWorker.register("./sw.js?v=5.0.6");
  });
}
