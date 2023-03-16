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

// let firstName = document.getElementById("firstName");
// let inputErrorfn = document.getElementById("errFirstName");
// let singltonfn = false;

// firstName.onblur = function () {
//   singltonfn = true;
//   checkFirstName();
// };

// function checkFirstName() {
//   if (firstName.value.length < 5 && singlton) {
//     inputErrorfn.classList.remove("displayNone");
//     inputErrorfn.innerHTML = "**Name must be longer than 5 letters";
//   } else {
//     inputErrorfn.classList.add("displayNone");
//   }
// }

class LiveErrCheck {
  constructor(inputElement, errMsgElement, errMsg) {
    this.elementname = inputElement;
    this.inputElement = document.getElementById(inputElement);
    this.errMsgElement = document.getElementById(errMsgElement);
    this.errMsg = errMsg;
    this.singlton = false;
  }

  errorTriger() {
    // console.log(this.inputElement.value);
    let pattern = /[a-zA-Z0-9,\.\_]/; //only letters

    switch (this.elementname) {
      case "firstName":
        pattern = /^(?=.{5})/;
        //more than 5 characters
        break;
      case "lastName":
        pattern = /^(?=.{5})/;
        //more than 5 characters
        break;
      case "email":
        pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        // email format
        break;
      case "password":
        pattern =
          /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
        // Minimum eight characters, at least one letter, one number and one special character
        break;
      case "mobilenumber":
        pattern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
        // Minimum eight characters, at least one letter, one number and one special character
        break;
    }

    var bool = !pattern.test(this.inputElement.value);
    if (bool && this.singlton) {
      this.errMsgElement.classList.remove("displayNone");
      this.errMsgElement.innerHTML = this.errMsg;
    } else {
      this.errMsgElement.classList.add("displayNone");
    }
  }
}
//first name validate
let firstNameCheck = new LiveErrCheck(
  "firstName",
  "errFirstNamee",
  "**First Name must be longer than 5 letters"
);
firstNameCheck.inputElement.onblur = function () {
  firstNameCheck.singlton = true;
  firstNameCheck.errorTriger();
};

//laast Name Validate
let lastN = new LiveErrCheck(
  "lastName",
  "errLastName",
  "**Last Name must be longer than 5 letters"
);
lastN.inputElement.onblur = function () {
  lastN.singlton = true;
  lastN.errorTriger();
};

//Email validate
let emailCheck = new LiveErrCheck(
  "email",
  "errEmail",
  "**Invalid email format"
);
emailCheck.inputElement.onblur = function () {
  emailCheck.singlton = true;
  emailCheck.errorTriger();
};

//PASSWORD validate
let passwordCheck = new LiveErrCheck(
  "password",
  "errpassword",
  "**PW must have letter and symbols and numbers "
);
passwordCheck.inputElement.onblur = function () {
  passwordCheck.singlton = true;
  passwordCheck.errorTriger();
};

// comfirmpassword validate
let confirmPWInput = document.getElementById("confirmPassword");
let confirmPWError = document.getElementById("errconfirmPassword");
let singltonCPF = false;

confirmPWInput.onblur = function () {
  singltonCPF = true;
  comfirmPasswordCheck();
};

function comfirmPasswordCheck() {
  if (
    confirmPWInput.value !== passwordCheck.inputElement.value &&
    singltonCPF
  ) {
    confirmPWError.classList.remove("displayNone");
    confirmPWError.innerHTML = "**Password not matching";
  } else {
    confirmPWError.classList.add("displayNone");
  }
}

//PASSWORD validate
let mobilenumberCheck = new LiveErrCheck(
  "mobilenumber",
  "errMobilenumber",
  "**Mobile number can have numbers only "
);
mobilenumberCheck.inputElement.onblur = function () {
  mobilenumberCheck.singlton = true;
  mobilenumberCheck.errorTriger();
};
