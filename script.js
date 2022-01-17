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
var credentials = document.querySelector(".passwords-modal");
var passwords = document.querySelector(".passwords");
var yearsHeading = document.querySelector(".years-heading");
var monthsHeading = document.querySelector(".months-heading");
var monthsSection = document.querySelector("div.months");
var yearsSection = document.querySelector("div.years");
var inProgress = document.querySelectorAll("span");


var i;
for (i = 0; i < inProgress.length; i++) {
  if (inProgress[i].innerText == "PROGRAMMING IN PROGRESS") {
    inProgress[i].style.color = "#FF8134";
    inProgress[i].parentElement.parentElement.style.backgroundColor = "rgba(255, 129, 52, 0.1)";
  }
  
}

function displayYears() {
  monthsHeading.classList.remove("underlined");
  yearsHeading.classList.add("underlined");
  monthsSection.classList.add("none");
  yearsSection.classList.remove("none");
}

function displayMonths() {
  monthsHeading.classList.add("underlined");
  yearsHeading.classList.remove("underlined");
  monthsSection.classList.remove("none");
  yearsSection.classList.add("none");
}

function toUser() {
  sectionForm.classList.add("none");
  sectionImage.classList.add("none");
  sectionFormUser.classList.remove("none");
  sectionImageUser.classList.remove("none");
}

function closeCredentials() {
  passwords.style.display = "none";
}

function fillButton() {
  event.target.classList.toggle("fill");
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

