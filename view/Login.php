<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../view/styles.css" />
    <title>NKAR | TEST</title>
</head>

<body>
    <div class="slPage-container">
        <div class="slPageForm-container">

            <div class="backEndError displayNone" id="errorContainer">
                <img src="../img/error.svg" alt="errorlogo" width="15px" />
                <p id="backEndError"></p>
            </div>

            <div class="slPageLogo mgLogoLoginPage ">Log In</div>
            <form class="slPageForm" method="post">
                <div class="slPageInput-Wrapper">

                    <div class="slPageInputs">
                        <div class="labelPlaceholder">
                            <label for="Email" class="slLable"> Email</label>
                        </div>
                        <input type="email" id="email" name="email" />
                    </div>
                    <div class="slPageInputs">
                        <div class="labelPlaceholder">
                            <label for="password" class="slLable">Password</label>
                        </div>
                        <div class="passwordVisibleBtn" id="visibleIcon">
                            <img class="eyeIcon" src="../img/eye.svg" alt="visibleBtn" width="16px"
                                onclick="togleVisibility()" />
                        </div>
                        <input type="password" id="password" name="password" autocomplete />
                    </div>
                    <button type="submit" class="btn" name="submit">Sign In</button>
                    <p class="slPage-SignInLink  forgottenPassword">
                        <span><a href="?action=signup">Forgotten password?</a></span>
                    </p>
                    <p class="slPage-SignInLink signupLinkMg">
                        Already Have a account? <span><a href="?action=signup">Sign Up</a></span>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script src="./../script/loginErrorHandler.js"></script>
    <script src="./../script/LoginFormElementhandler.js"></script>
</body>

</html>