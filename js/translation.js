/**
 * switch language
 */
var langData = null;

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
