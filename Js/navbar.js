const beginStickyNav = document.querySelector(".beginStickyNav");
const initialCoords = beginStickyNav.getBoundingClientRect();
const navbar = document.querySelector(".navbar");
const toggle = document.querySelector(".fa-solid");
const links = document.querySelector(".navbar-links-container");

window.addEventListener("scroll", function () {
  if (window.scrollY > initialCoords.top) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
});
toggle.addEventListener("click", function () {
  links.classList.toggle("reveal-link");
});
