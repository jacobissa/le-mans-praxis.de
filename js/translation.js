/**
 * language translation
 */

const default_lang_code = "de";
let lang_code;
let translations = {};

function getLanguage() {
  if (localStorage.getItem("lang") !== null) {
    return localStorage.getItem("lang");
  }
  var lang_user = navigator.language || navigator.userLanguage;
  if (lang_user !== null) {
    if (lang_user.includes("de")) {
      return "de";
    } else if (lang_user.includes("en")) {
      return "en";
    } else if (lang_user.includes("ar")) {
      return "ar";
    }
  }
  return default_lang_code;
}

function translatePage() {
  $(document.documentElement).attr("dir", fixDirection(lang_code));
  $(document.documentElement).attr("lang", lang_code);

  $("#my-btn-translate span").removeClass(
    "bi bi-translate fs-4 fi fi-de fi-gb fi-ae"
  );
  $("#my-btn-translate span").addClass(translations["flag"]);

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
    $("#my-btn-floating-top").removeClass("end-0");
    $("#my-btn-floating-top").addClass("start-0");
    $("#my-header .dropdown-menu").removeClass("dropdown-menu-end");
    return "rtl";
  } else {
    $("#my-btn-floating-top").addClass("end-0");
    $("#my-btn-floating-top").removeClass("start-0");
    $("#my-header .dropdown-menu").addClass("dropdown-menu-end");
    return "ltr";
  }
}

$(document).ready(function () {
  setLanguage(getLanguage());
});
