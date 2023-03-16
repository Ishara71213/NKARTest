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
            <div class="backEndError displayNone" id="errorContainer">
                <img src="../img/error.svg" alt="errorlogo" width="15px" />
                <p id="backEndError"></p>
            </div>
            <div class="slPageLogo">Sign Up</div>
            <form class="slPageForm" method="post" enctype="multipart/form-data">
                <div class="slPageInput-Wrapper">
                    <div class="slPageInputs">
                        <div class="labelPlaceholder">
                            <label for="firstName" class="slLable">First name</label>
                        </div>
                        <input type="text" id="firstName" name="firstName" onkeyup="firstNameCheck.errorTriger();" />
                        <p id="errFirstNamee" class="formValidationErr"></p>
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
                        <div class="passwordVisibleBtn" id="visibleIcon">
                            <img class="eyeIcon" src="../img/eye.svg" alt="visibleBtn" width="16px"
                                onclick="togleVisibility()" />
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
                    <div id="addImageBtn" class="fileUploadContainer" onclick="fileUpload()">
                        <img id="addImage" class="addImage" src="../img/addImage.svg" alt="addImage" width="16px" />
                        <p class="" id="addImageText">Add your image</p>
                        <input id="addImageInput" class="fileUpload" type="file" name=" userimage" />
                    </div>
                    <button type="submit" class="btn" name="submit">Sign Up</button>
                    <p class="slPage-SignInLink">
                        Already Have a account?
                        <span><a href="?action=login">Sign In</a></span>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script src="./../script/errorHandler.js"></script>
    <script src="./../script/formElementHandle.js"></script>
</body>

</html>