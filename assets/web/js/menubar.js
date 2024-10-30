"use strict";

const dropdownContent = document.querySelector(".dropdown");
const chevron = document.getElementById("chevron");

function showMenu() {
  dropdownContent.classList.toggle("active");
  chevron.classList.toggle("rotate");
}

window.onclick = (event) => {
  if (!event.target.matches(".dropdown-button")) {
    dropdownContent.classList.remove("active");
    chevron.classList.remove("rotate");
  }
};
