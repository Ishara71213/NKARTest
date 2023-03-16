let visibleBtn = document.getElementById("visibleIcon");
let passwordInput = document.getElementById("password");
let confirmPasswordInput = document.getElementById("confirmPassword");

function togleVisibility() {
  if (passwordInput.type === "text") {
    passwordInput.setAttribute("type", "password");
    confirmPasswordInput.setAttribute("type", "password");
    visibleBtn.classList.remove("visiblity");
  } else {
    passwordInput.setAttribute("type", "text");
    confirmPasswordInput.setAttribute("type", "text");
    visibleBtn.classList.add("visiblity");
  }
}
