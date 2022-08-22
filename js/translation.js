/**
 * language translation
 */

const lang_default = "de";
const lang_support = ["de", "en", "ar"];

let lang_code;
let translations = {};

function getLanguage() {
  if (localStorage.getItem("lang") !== null) {
    return localStorage.getItem("lang");
  }
  if (navigator.languages) {
    const lang_browser = new Set(navigator.languages.map((locale) => locale.split("-")[0]));
    const lang_intersection = new Set([...lang_support].filter((x) => lang_browser.has(x)));
    if (lang_intersection.size) {
      return [...lang_intersection][0];
    }
  }
  return lang_default;
}

function translatePage() {
  $(document.documentElement).attr("dir", fixDirection(lang_code));
  $(document.documentElement).attr("lang", lang_code);

  //$("#my-btn-translate span").removeClass("bi bi-translate fs-4 fi fi-de fi-us fi-ae");
  //$("#my-btn-translate span").addClass(translations["flag"]);

  $("[data-i18n-key]").each(function (index, element) {
    const key = $(element).attr("data-i18n-key");
    const translation = translations[key];
    $(element).text(translation);
  });
}

function setLanguage(new_lang_code) {
  if (new_lang_code === lang_code) return;
  $.ajax({
    url: "./lang/" + new_lang_code + ".json",
    dataType: "json",
    async: false,
    dataType: "json",
    success: function (data, textStatus, jqXHR) {
      translations = data;
      lang_code = new_lang_code;
      localStorage.setItem("lang", new_lang_code);
      translatePage();
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log("Translation failed: " + textStatus);
    },
  });
}

function fixDirection(new_lang_code) {
  if (new_lang_code === "ar") {
    $("#my-content-home .contact-start, #my-content-home .contact-end").removeClass("pe-sm-1 pe-md-2 ps-sm-1 ps-md-2");
    $("#my-content-home .contact-start").addClass("ps-sm-1 ps-md-2");
    $("#my-content-home .contact-end").addClass("pe-sm-1 pe-md-2");
    $("#my-btn-floating-top").removeClass("end-0");
    $("#my-btn-floating-top").addClass("start-0");
    $("#my-header .dropdown-menu").removeClass("dropdown-menu-end");
    $("#my-header .dropdown-menu").addClass("dropdown-menu-start");
    return "rtl";
  } else {
    $("#my-content-home .contact-start, #my-content-home .contact-end").removeClass("pe-sm-1 pe-md-2 ps-sm-1 ps-md-2");
    $("#my-content-home .contact-start").addClass("pe-sm-1 pe-md-2");
    $("#my-content-home .contact-end").addClass("ps-sm-1 ps-md-2");
    $("#my-btn-floating-top").removeClass("start-0");
    $("#my-btn-floating-top").addClass("end-0");
    $("#my-header .dropdown-menu").removeClass("dropdown-menu-start");
    $("#my-header .dropdown-menu").addClass("dropdown-menu-end");
    return "ltr";
  }
}

$(document).ready(function () {
  //setLanguage(getLanguage());
});
