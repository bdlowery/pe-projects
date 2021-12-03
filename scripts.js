document.addEventListener("click", function (click) {
  if (click.target.matches("#dark-mode-checkbox")) {
    console.log("hello");
    document.body.classList.toggle("dark-theme");

    let theme = "light";

    if (document.body.classList.contains("dark-theme")) {
      theme = "dark";
    }

    document.cookie = "theme=" + theme;
  }
});

// // Select the button
// const btn = document.querySelector(".btn-toggle");

// // Listen for a click on the button
// btn.addEventListener("click", function () {
//   // Toggle the .dark-theme class on the body
//   document.body.classList.toggle("dark-theme");

//   // Let's say the theme is equal to light
//   let theme = "light";
//   // If the body contains the .dark-theme class...
//   if (document.body.classList.contains("dark-theme")) {
//     // ...then let's make the theme dark
//     theme = "dark";
//   }
//   // Then save the choice in a cookie
//   document.cookie = "theme=" + theme;
// });
