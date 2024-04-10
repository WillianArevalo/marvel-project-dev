document.addEventListener("DOMContentLoaded", function () {
  const btnSearch = document.getElementById("button-search");
  const inputSearch = document.getElementById("input-search");
  const navbar = document.getElementById("navbar-mobile");
  const btnMenu = document.getElementById("btn-hamburger");
  const btnClose = document.getElementById("btn-close");
  const overlay = document.getElementById("overlay");
  const body = document.getElementById("body");

  btnMenu.addEventListener("click", function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
    body.classList.toggle("active");
  });

  btnClose.addEventListener("click", function () {
    navbar.classList.remove("active");
    overlay.classList.remove("active");
    body.classList.remove("active");
  });
});
