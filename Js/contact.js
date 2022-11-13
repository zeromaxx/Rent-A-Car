const contactForm = document.getElementById("contactForm");
const contactFname = document.getElementById("contact-firstname");
const contactPhonenumber = document.getElementById("contact-phonenumber");
const contactEmail = document.getElementById("contact-email");
const contactSubject = document.getElementById("contact-subject");
const contactMessage = document.getElementById("contact-message");

contactForm.addEventListener("submit", function (e) {
  if (
    contactFname.value == "" ||
    contactPhonenumber.value == "" ||
    contactEmail.value == "" ||
    contactSubject.value == "" ||
    contactMessage.value == ""
  ) {
    e.preventDefault();
    contactFname.placeholder = "Please insert a value";
    contactPhonenumber.placeholder = "Please insert a value";
    contactEmail.placeholder = "Please insert a value";
    contactSubject.placeholder = "Please insert a value";
    contactMessage.placeholder = "Please insert a value";
    contactFname.classList.add("placeholder-color");
    contactPhonenumber.classList.add("placeholder-color");
    contactEmail.classList.add("placeholder-color");
    contactSubject.classList.add("placeholder-color");
    contactMessage.classList.add("placeholder-color");
  }
});

function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.add("show");
}
