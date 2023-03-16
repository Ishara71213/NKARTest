<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../view/styles.css" />
    <title>NKAR | Test</title>
</head>

<body>
    <div class="slPage-container">
        <div class="slPageForm-container">
            <div class="backEndError  displayNone" id="errorContainer">
                <img src="../img/error.svg" alt="errorlogo" width="15px" />
                <p id="backEndError"></P>
            </div>
            <div class="slPageLogo">Sign Up</div>
            <form class="slPageForm" method="post" enctype="multipart/form-data">
                <div class="slPageInput-Wrapper">
                    <div class="slPageInputs">
                        <div class="labelPlaceholder">
                            <label for="firstName" class="slLable">First name</label>
                        </div>
                        <input type="text" id="firstName" name="firstName" onkeyup="firstN.errorTriger()" />
                        <p id="errFirstName" class="formValidationErr"></p>
                    </div>
                    <div class="slPageInputs">
                        <div class="labelPlaceholder">
                            <label for="lastName" class="slLable"> Last name</label>
                        </div>
                        <input type="text" id="lastName" name="lastName" onkeyup="lastN.errorTriger()" />
                        <p id="errLastName" class="formValidationErr"></p>
                    </div>
                    <div class="slPageInputs">
                        <div class="labelPlaceholder">
                            <label for="Email" class="slLable"> Email</label>
                        </div>
                        <input id="email" name="email" onkeyup="emailCheck.errorTriger()" />
                        <p id="errEmail" class="formValidationErr"></p>
                    </div>
                    <div class="slPageInputs">
                        <div class="labelPlaceholder">
                            <label for="password" class="slLable">Password</label>
                        </div>
                        <input type="password" id="password" name="password" onkeyup="passwordCheck.errorTriger()"
                            autocomplete />
                        <p id="errpassword" class="formValidationErr"></p>
                    </div>
                    <div class="slPageInputs">
                        <div class="labelPlaceholder">
                            <label for="confirmPassword" class="slLable">Confirm password</label>
                        </div>
                        <input type="password" id="confirmPassword" name="confirmPassword"
                            onkeyup="comfirmPasswordCheck()" autocomplete />
                        <p id="errconfirmPassword" class="formValidationErr"></p>
                    </div>
                    <div class="slPageInputs">
                        <div class="labelPlaceholder">
                            <label for="mobilenumber" class="slLable">Mobile Number</label>
                        </div>
                        <input type="text" id="mobilenumber" name="mobilenumber"
                            onkeyup="mobilenumberCheck.errorTriger()" />
                        <p id="errMobilenumber" class="formValidationErr"></p>
                    </div>
                    <div>
                        <input type="file" name="userimage">
                    </div>
                    <button type="submit" class="btn" name="submit">Sign Up</button>
                    <p class="slPage-SignInLink">
                        Already Have a account? <span><a href="?action=login">Sign In</a></span>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script src="./../script/formValidate.js"></script>
</body>

</html>