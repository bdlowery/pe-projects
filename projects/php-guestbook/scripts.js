var body = document.querySelector("body");
var localStorage = window.localStorage;

document.addEventListener("click", function (clickEvent) {
  if (clickEvent.target.matches("[data-change-theme]")) {
    setTheme(clickEvent.target.dataset.changeTheme);
    console.log(clickEvent.target.dataset.changeTheme);
  }
});

function setTheme(themeClicked) {
  body.dataset.theme = themeClicked;
  localStorage.setItem("theme", themeClicked);
}

if (!localStorage.getItem("theme")) {
  changeTheme("old");
} else {
  body.dataset.theme = localStorage.getItem("theme");
}
