var btnContinue = document.querySelector(".continue");
var sectionImageUser = document.querySelector(".image-user");
var sectionFormUser = document.querySelector(".form-user");
var sectionImage = document.querySelector(".image");
var sectionForm = document.querySelector(".form");
var headingForm = document.querySelector(".form-heading");
var headingFormUser = document.querySelector(".form-user-heading");
var topMenu = document.querySelector(".navbar-primary");
var downArrow = document.querySelector(".menu .icon--arrow");
var menuLink = document.querySelector(".menu h2");
//var state = document.querySelectorAll(".state span");
var credentials = document.querySelector(".passwords-modal");
var passwords = document.querySelector(".passwords");

/*   if(state.forEach.innerHTML.indexOf("PROGRAMMING") !== -1) {
    state.style.display = "none";
} */

function toUser() {
  sectionForm.classList.add("none");
  sectionImage.classList.add("none");
  sectionFormUser.classList.remove("none");
  sectionImageUser.classList.remove("none");
}

function closeCredentials() {
  passwords.style.display = "none";
}

function toggleTopNav() {
  topMenuStatus = topMenu.style.display;
  if (topMenuStatus == "block") {
    topMenu.style.display = "none";
    downArrow.classList.remove("rotated");
  } else {
    topMenu.style.display = "block";
    downArrow.classList.add("rotated");
  }
}

window.onclick = function (eventOne) {
  if ((eventOne.target !== topMenu) & (eventOne.target !== menuLink)) {
    topMenu.style.display = "none";
    downArrow.classList.remove("rotated");
  }
};

window.onclick = function (eventTwo) {
  if (eventTwo.target !== credentials) {
    passwords.style.display = "none";
  }
};
