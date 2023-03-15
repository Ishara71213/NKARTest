const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const backEndErr = urlParams.get("error");

let error = document.getElementById("backEndError");
let errorContainer = document.getElementById("errorContainer");

if (backEndErr) {
  errorContainer.classList.remove("displayNone");
  switch (backEndErr) {
    case "passwordNotMatching":
      error.innerHTML = "passwords not matching";
      break;
    case "emptyInputs":
      error.innerHTML = "complete all the input fields";
      break;
    case "passwordNotMatching":
      error.innerHTML = "Passwords not matching";
      break;
    case "passwordNotMatching":
      error.innerHTML = "Passwords not matching";
      break;
    case "emailAlreadyExists":
      error.innerHTML = "Email is already exist";
      break;
    case "invalidEmail":
      error.innerHTML = "Invalid email";
      break;
    case "invalidEmailPwCom":
      error.innerHTML = "Invalid email and password combination";
      break;
    default:
      error.innerHTML = "";
  }
} else {
  errorContainer.classList.add("displayNone");
}

let firstName = document.getElementById("firstName");
let inputError = document.getElementById("errFirstName");
let singlton = false;

firstName.onblur = function () {
  singlton = true;
  checkFirstName();
};

function checkFirstName() {
  if (firstName.value.length < 5 && singlton) {
    inputError.classList.remove("displayNone");
    inputError.innerHTML = "**Name must be longer than 5 letters";
  } else {
    inputError.classList.add("displayNone");
  }
}
