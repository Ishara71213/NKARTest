<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../view/Signup.css" />
    <title>NKAR | TEST</title>
</head>

<body>
    <div class="signupPage-container">
        <div class="signupPageForm-container">
            <div class="signupPageLogo">Sign Up</div>
            <form class="signupPageForm" method="post">
                <div class="signupPageInput-Wrapper">

                    <div class="signupPageInputs">
                        <label for="Email" class="signupLable"> Email</label>
                        <input type="email" id="email" name="email" />
                    </div>
                    <div class="signupPageInputs">
                        <label for="password" class="signupLable">Password</label>
                        <input type="password" id="password" name="password" />
                    </div>
                    <button type="submit" class="btn" name="submit">Sign In</button>
                    <p class="signupPage-SignInLink">
                        Already Have a account? <span><a href="?action=signup">Sign Up</a></span>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>