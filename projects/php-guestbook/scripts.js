var body = document.querySelector("body");

document.addEventListener("click", function (clickEvent) {
  if (clickEvent.target.matches("button")) {
    body.dataset.theme = clickEvent.target.dataset.changeTheme;
  }
});
