<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/styles.css" />
    <title>NKAR | TEST</title>
</head>

<body>
    <div class="backgroundContainer">
        <div class="headerNavigation">
            <a class="logoutBtn" href="?action=logout">Log Out</a>
        </div>
        <div class="dashboardBody">

            <div class="welcomeTest">
                <p><?php echo "Hi ". $_SESSION["firstName"]." ". $_SESSION["lastName"].","?></p>
                <p>Thank you for joining with us. Stay tuned for amazing promotions from us.</p>
                <p class="subtext">- Team NKAR</p>
            </div>

        </div>
    </div>
</body>

</html>