<?php
include "../Functionality/FormValidation.php";
session_start();
if (isset($_SESSION["user"])) {
    header("Location: ./home");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/Signup.css">
    <title>Signup | TubeAcademy</title>
</head>

<body>
    <div class="SU-sigern">
        <div class="SU-container">
            <div class="SU-illustration">
                <a href="./home"><img class="SU-logoType" src="../Images/Logo.png" alt="Illustration" /></a>
            </div>
            <div class="SU-formContainer">
                <h2 class="SU-h2">Create Account</h2>
                <div id="c"><?php echo $succ ?></div>
                <div id="d"><?php echo $dub ?></div>
                <form method="post" class="SU-form" action="./signup">
                    <label class="SU-label" for="fName">First Name:</label>
                    <span class="SU-eeror" id="fNameError">
                        <?php echo $f_nameError ?>
                    </span>
                    <input type="text" id="first-name" name="fName" required class="SU-inputField" />

                    <label class="SU-label" for="lName">Last Name:</label>
                    <span class="SU-eeror" id="lNameError">
                        <?php echo $l_nameError ?>
                    </span>
                    <input type="text" id="last-name" name="lName" required class="SU-inputField" />

                    <label class="SU-label" for="pNumber">Phone Number:</label>
                    <span class="SU-eeror" id="pNumberError">
                        <?php echo $p_numberError ?>
                    </span>
                    <input type="text" id="phone" name="pNumber" required class="SU-inputField" minlength="10" maxlength="10" />

                    <label class="SU-label" for="password">Password:</label>
                    <span class="SU-eeror" id="passwordError">
                        <?php echo $passwordError ?>
                    </span>
                    <input type="password" id="password" name="password" required class="SU-inputField" />

                    <label class="SU-label" for="cPassword">Confirm Password:</label>
                    <span class="SU-eeror" id="cPasswordError">
                        <?php echo $cpasswordError ?>
                    </span>
                    <input type="password" id="confirm-password" name="cPassword" required class="SU-inputField" />

                    <button name="submit" class="SU-button" type="submit">Sign Up</button>
                </form>
                <p class="SU-p">Already have an account? <a class="SU-a" href="./login">Log In</a></p>
            </div>
        </div>
    </div>

    <!-- ---------------------------Script------------------------------------ -->

    <script>
        var c = document.querySelector("#c");
        var d = document.querySelector("#d");

        if (c.innerHTML.length > 0) {
            c.classList.add("SU-alerts")
        } else {
            c.classList.remove("SU-alerts")
        }

        if (d.innerHTML.length > 0) {
            d.classList.add("SU-alertc")
        } else {
            d.classList.remove("SU-alertc")
        }

        //SU-alerts/c
    </script>

</body>

</html>