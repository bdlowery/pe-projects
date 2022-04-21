var body = document.querySelector("body");

document.addEventListener("click", function (clickEvent) {
  if (clickEvent.target.matches("button")) {
    body.dataset.theme = clickEvent.target.dataset.changeTheme;
    window.localStorage.setItem("theme", body.dataset.theme);
  }
});

if (window.localStorage.getItem("theme")) {
  body.dataset.theme = window.localStorage.getItem("theme");
}
