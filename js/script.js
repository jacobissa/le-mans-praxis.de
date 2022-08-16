/**
 * Email security
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
 * Dark UI
 */
$("#my-btn-darkmode").click(function () {
  $("body").toggleClass("bg-dark text-light");
  $("#my-header").toggleClass("bg-secondary bg-light");
  $("#my-header button").toggleClass("text-dark text-light");
  $("#my-content-team .card").toggleClass("border-secondary");
  $("#my-content-team .card-body").toggleClass("bg-secondary");
  $("#my-btn-darkmode span.bi").toggleClass("bi-moon bi-sun");
  $("#my-btn-top").toggleClass("text-dark text-light");
  $("#my-header .dropdown-menu").toggleClass("dropdown-menu-dark");
});

if (
  window.matchMedia &&
  window.matchMedia("(prefers-color-scheme: dark)").matches
) {
  $("#my-btn-darkmode").trigger("click");
}

/**
 * Btn click
 */
$("#my-btn-top").hide();
applyClickBtn("#my-content-home");

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

/**
 * Scroll to top
 */
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

/**
 * Switch language
 */
var langData = null;
function updateLanguageData() {
  localStorage.getItem("language") == null ? setLanguage("de") : false;
  $.ajax({
    url: "./lang/" + localStorage.getItem("language") + ".json",
    dataType: "json",
    async: false,
    dataType: "json",
    success: function (lang) {
      langData = lang;
    },
  });
}

function getLangCode() {
  var langUser = navigator.language || navigator.userLanguage;
  if (langUser.includes("en")) {
    return "en";
  } else if (langUser.includes("ar")) {
    return "ar";
  } else {
    return "de";
  }
}
var langCode = getLangCode();
setLanguage(langCode);
updateLanguage();

function setLanguage(lang) {
  langCode = lang;
  localStorage.setItem("language", lang);
  updateLanguageData();
  updateLanguage();
  document.documentElement.dir = dir(langCode);
  document.documentElement.lang = langCode;
  function dir(locale) {
    return locale === "ar" ? "rtl" : "ltr";
  }
}

function updateLanguage() {
  $("#my-btn-translate span").removeClass("fi-de fi-gb fi-ae");
  $("#my-btn-translate span").addClass(langData.flag);

  $("#my-btn-team").text(langData.team);
}
