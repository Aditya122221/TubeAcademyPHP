<?php include "../Functionality/Authentication.php";
session_start();
if (isset($_SESSION["user"])) {
    header("Location: ./home");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Login.css">
    <title>Log In | TubeAcademy</title>
</head>

<body>
    <div class="LI-logger">
        <div class="LI-container">
            <div class="LI-socialLogin">
                <header>
                    <a href="./home"><img class="LI-looggo" src="../Images/Logo.png" alt="Logo" /></a>
                </header>
                <!-- <h3>Login using social media account to get quick access</h3>
                <button class="LI-facebookButton">Continue with Facebook</button>
                <button class="LI-googleButton">Continue with Google</button>
                <button class="LI-appleButton">Continue with Apple</button> -->
            </div>

            <div class="LI-loginForm">
                <h2>Login to your account</h2>
                <p>Don’t have an account? <a class="LI-signer" href="./signup">Sign up for free!</a></p>
                <div id="c"><?php echo $check ?></div>
                <div id="d"><?php echo $cor ?></div>

                <!-- --------------------------Log In Form----------------------- -->
                <form name="loginForm" class=" LI-formm" method="post">
                    <input type="text" name="p_number" placeholder="Enter Phone Number" required class="LI-phoneNumberInput" />
                    <input type="password" name="password" placeholder="Enter Password" required class="LI-passwordInput" />
                    <button name="login" class="LI-loginButton">Log In</button>
                </form>
                <button onclick="showForgotForm()" class="LI-forgotPassword">Forgot Password</button>
            </div>
        </div>
    </div>

    <!-- ----------------------------Script--------------------------------- -->

    <script>
        var c = document.querySelector("#c");
        var d = document.querySelector("#d");

        if (c.innerHTML.length <= 0) {
            c.classList.remove("SU-alertc");
        } else {
            c.classList.add("SU-alertc");
        }

        if (d.innerHTML.length <= 0) {
            d.classList.remove("SU-alerts");
        } else {
            d.classList.add("SU-alerts");
        }
    </script>

</body>

</html>