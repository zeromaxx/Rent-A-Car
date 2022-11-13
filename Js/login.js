const modal = document.querySelector(".modal-overlay");
const loginBtn = document.querySelector(".login");
const closeBtn = document.querySelector(".close-btn");
const user = document.getElementById("user");
const psw = document.getElementById("psw");
const loginform = document.getElementById("login-form");

loginBtn.addEventListener("click", function (e) {
  e.preventDefault();
  modal.classList.toggle("visible");
});
closeBtn.addEventListener("click", function () {
  modal.classList.remove("visible");
});

loginform.addEventListener("submit", function (e) {
  if (user.value == "" || psw.value == "") {
    e.preventDefault();
    user.placeholder = "Please insert a value";
    psw.placeholder = "Please insert a value";
    psw.classList.add("placeholder-color");
    user.classList.add("placeholder-color");
  } else if (user.value != "root" || psw.value != "admin123") {
    e.preventDefault();
    alert("Λυπούμαστε δεν είστε διαχειριστής της διαδικτυακής εφαρμογής");
  }

});
