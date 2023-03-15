<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../view/Signup.css" />
    <title>NKAR | SignUp</title>
</head>

<body>
    <div class="signupPage-container">
        <div class="signupPageForm-container">
            <div class="signupPageLogo">Sign Up</div>
            <form class="signupPageForm" method="post" enctype="multipart/form-data">
                <div class="signupPageInput-Wrapper">
                    <div class="signupPageInputs">
                        <label for="firstName" class="signupLable">First name</label>
                        <input type="text" id="firstName" name="firstName" />
                    </div>
                    <div class="signupPageInputs">
                        <label for="lastName" class="signupLable"> Last name</label>
                        <input type="text" id="lastName" name="lastName" />
                    </div>
                    <div class="signupPageInputs">
                        <label for="Email" class="signupLable"> Email</label>
                        <input type="email" id="email" name="email" />
                    </div>
                    <div class="signupPageInputs">
                        <label for="password" class="signupLable">Password</label>
                        <input type="password" id="password" name="password" />
                    </div>
                    <div class="signupPageInputs">
                        <label for="confirmPassword" class="signupLable">Confirm password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" />
                    </div>
                    <div class="signupPageInputs">
                        <label for="mobilenumber" class="signupLable">Mobile Number</label>
                        <input type="text" id="mobilenumber" name="mobilenumber" />
                    </div>
                    <div>
                        <input type="file" name="userimage">
                    </div>
                    <button type="submit" class="btn" name="submit">Sign Up</button>
                    <p class="signupPage-SignInLink">
                        Already Have a account? <span><a href="?action=login">Sign In</a></span>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>