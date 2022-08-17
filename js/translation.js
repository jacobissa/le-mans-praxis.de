/**
 * language translation

let lang_code = "de";
let langData = null;

function updateLanguageData() {
  localStorage.getItem("lang") == null ? setLanguage("de") : false;
  $.ajax({
    url: "./lang/" + localStorage.getItem("lang") + ".json",
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
  localStorage.setItem("lang", lang);
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

  if (langCode == "ar") {
    $("#my-header .dropdown-menu").removeClass("dropdown-menu-end");
  } else {
    $("#my-header .dropdown-menu").addClass("dropdown-menu-end");
  }
}
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

async function setLocale(new_lang_code) {
  if (new_lang_code === lang_code) return;
  const new_translations = await fetchTranslationsFor(new_lang_code);
  lang_code = new_lang_code;
  translations = new_translations;
  translatePage();
}

async function fetchTranslationsFor(new_lang_code) {
  const response = await fetch("./lang/" + new_lang_code + ".json");
  return await response.json();
}

function translatePage() {
  $("[data-i18n-key]").each(function (index, element) {
    const key = $(element).attr("data-i18n-key");
    const translation = translations[key];
    $(element).text(translation);
  });
}

function setLanguage(new_lang_code) {
  setLocale(new_lang_code);
  localStorage.setItem("lang", new_lang_code);
  document.documentElement.dir = fixDirection(new_lang_code);
  document.documentElement.lang = new_lang_code;
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
