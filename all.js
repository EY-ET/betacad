function scrollToSection(sectionId) {
  document.getElementById(sectionId).scrollIntoView({ behavior: "smooth" });
}

function createPost() {
  alert("Create post functionality coming soon!");
}

function sendMessage() {
  const chatBox = document.querySelector(".chat-box");
  const input = document.getElementById("chat-input");
  const message = input.value.trim();
  if (message) {
    const messageElement = document.createElement("div");
    messageElement.className = "chat-message";
    messageElement.innerHTML = `<strong>You:</strong> ${message}`;
    chatBox.appendChild(messageElement);
    chatBox.scrollTop = chatBox.scrollHeight;
    input.value = "";
  }
}

function editProfile() {
  alert("Edit profile functionality coming soon!");
}

function toggleDarkMode() {
  const body = document.body;
  const header = document.querySelector("header");
  const heroSection = document.querySelector(".hero-section");
  const contentSections = document.querySelectorAll(".content-section");
  const chatBox = document.querySelector(".chat-box");

  body.classList.toggle("dark-mode");
  header.classList.toggle("dark-mode");
  heroSection.classList.toggle("dark-mode");
  contentSections.forEach(section => section.classList.toggle("dark-mode"));
  chatBox.classList.toggle("dark-mode");

  const currentMode = body.classList.contains("dark-mode") ? "Dark" : "Light";
  alert(`Switched to ${currentMode} Mode`);
}
document.addEventListener("DOMContentLoaded", function(event) {
  //Removing article link when on mobiforge
  console.log(document.referrer);
  if (
    parent !== window &&
    document.referrer.indexOf("https://mobiforge.com") === 0 &&
    document.referrer.indexOf("http://mobiforge.com") === 0
  ) {
    console.log(document.referrer);
    document.getElementById("article-link").className = "fade-out";
  }
});
