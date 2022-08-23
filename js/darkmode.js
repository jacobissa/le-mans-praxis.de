/**
 * dark mode
 */

let dark_mode = isDarkMode();

$("#my-btn-darkmode").click(function () {
  performDarkMode(!dark_mode);
});

function performDarkMode(new_dark_mode) {
  dark_mode = new_dark_mode;
  localStorage.setItem("dark", new_dark_mode);
  if (new_dark_mode === true) {
    $("html meta[name='theme-color']").attr("content", "var(--bs-secondary)");
    $("body").addClass("bg-dark text-light");
    $("#my-header").addClass("bg-secondary");
    $("#my-header").removeClass("bg-light");
    $("#my-header button").addClass("text-light");
    $("#my-header button").removeClass("text-dark");
    $("#my-content-team .card").addClass("border-secondary");
    $("#my-content-team .card-body").addClass("bg-secondary");
    $("#my-btn-darkmode span.bi").addClass("bi-sun");
    $("#my-btn-darkmode span.bi").removeClass("bi-moon");
    $("#my-btn-floating-top").addClass("text-light");
    $("#my-btn-floating-top").removeClass("text-dark");
    $("#my-header .dropdown-menu").addClass("dropdown-menu-dark");
  } else {
    $("html meta[name='theme-color']").attr("content", "var(--bs-light)");
    $("body").removeClass("bg-dark text-light");
    $("#my-header").removeClass("bg-secondary");
    $("#my-header").addClass("bg-light");
    $("#my-header button").removeClass("text-light");
    $("#my-header button").addClass("text-dark");
    $("#my-content-team .card").removeClass("border-secondary");
    $("#my-content-team .card-body").removeClass("bg-secondary");
    $("#my-btn-darkmode span.bi").removeClass("bi-sun");
    $("#my-btn-darkmode span.bi").addClass("bi-moon");
    $("#my-btn-floating-top").removeClass("text-light");
    $("#my-btn-floating-top").addClass("text-dark");
    $("#my-header .dropdown-menu").removeClass("dropdown-menu-dark");
  }
}

function isDarkMode() {
  if (localStorage.getItem("dark") !== null) {
    return localStorage.getItem("dark") === "true";
  } else if (window.matchMedia) {
    return window.matchMedia("(prefers-color-scheme: dark)").matches;
  } else {
    return false;
  }
}

window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", (event) => {
  if (dark_mode !== event.matches) {
    performDarkMode(event.matches);
  }
});

$(document).ready(function () {
  performDarkMode(dark_mode);
});
