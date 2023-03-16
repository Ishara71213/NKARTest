const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const backEndErr = urlParams.get("error");

let error = document.getElementById("backEndError");
let errorContainer = document.getElementById("errorContainer");

if (backEndErr) {
  errorContainer.classList.remove("displayNone");
  switch (backEndErr) {
    case "emptyInputs":
      error.innerHTML = "complete all the input fields";
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
