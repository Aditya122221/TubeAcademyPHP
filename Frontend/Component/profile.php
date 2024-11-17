<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ./home");
}
include "../Functionality/FetchData.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- --------------------------------Icon Adder------------------------------ -->

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- ----------------------------CSS Adder----------------------------------- -->

    <link rel="stylesheet" href="../CSS/Profile.css">
    <title>Profile | TubeAcademy</title>
</head>

<body>
    <div class="P-Profile">
        <div class="P-ProfileHeader">
            <div class="P-left">
                <div class="P-left1">
                    <img src="../Images/TeamLeader.png" alt="Account Image" class="P-accountImg" />
                    <div class="P-left2">
                        <div class="P-left3"> <?php echo $f_name . ' ' . $l_name ?> </div>
                        <div class="P-left4"><?php echo $email ?></div>
                    </div>
                </div>
                <div class="P-left5">

                    <!-- ---------------------handleAccount-------------------- -->

                    <div onclick="handleAccount()" class="P-left6" id="P-initial">
                        <span class="material-symbols-outlined P-llee">
                            account_circle
                        </span>
                        <div class="P-left7">Account</div>
                    </div>

                    <!-- ----------------------HandleEdit-------------------- -->

                    <div onclick="handleEdit()" class="P-left6" id="P-next">
                        <span class="material-symbols-outlined P-llee">
                            edit
                        </span>
                        <div class="P-left9">Edit</div>
                    </div>
                    <a href="./logout.php" class="P-left10">
                        <span class="material-symbols-outlined P-llee">
                            logout
                        </span>
                        <div class="P-left11">Log Out</div>
                    </a>
                    <div class="P-bottom">
                        <a href="./home" class="P-back">Home</a>
                    </div>
                </div>
            </div>
            <div class="P-right">
                <div class="P-hSave">
                    <h1 class="P-right1">Account Info</h1>
                </div>

                <!-- --------------------Non Editable------------------------ -->

                <div class="P-right2" id="nonEditable">
                    <div class="P-right3">
                        <div class="P-right4">
                            <div class="P-right5">First Name</div>
                            <input type="text" name="firstname" class="P-right6 P-inputt" disabled value=<?php echo $f_name ?>>
                        </div>
                        <div class="P-right7">
                            <div class="P-right8">Last Name</div>
                            <input type="text" name="lasttname" class="P-right9 P-inputt" disabled value=<?php echo $l_name ?>>
                        </div>
                    </div>
                    <div class="P-right3">
                        <div class="P-right4">
                            <div class="P-right5">Email</div>
                            <input type="email" name="email" class="P-right6 P-inputt" disabled value=<?php echo $email ?>>
                        </div>
                        <div class="P-right7">
                            <div class="P-right8">Phone Number</div>
                            <input type="text" name="phoneNumber" class="P-right9 P-inputt" disabled value=<?php echo $p_number ?>>
                        </div>
                    </div>
                    <div class="P-right11">
                        <div class="P-right12">Address</div>
                        <textarea disabled class="P-right13"><?php echo $address ?></textarea>
                    </div>
                </div>

                <!-- --------------------Editable------------------------ -->

                <form method="post" action="./profile" class="P-right2" id="P-right2o">
                    <div class="P-right3">
                        <div class="P-right4">
                            <div class="P-right5">First Name</div>
                            <input type="text" name="f_name" class="P-right6 P-inputt" value=<?php echo $f_name ?>>
                        </div>
                        <div class="P-right7">
                            <div class="P-right8">Last Name</div>
                            <input type="text" name="l_name" class="P-right9 P-inputt" value=<?php echo $l_name ?>>
                        </div>
                    </div>
                    <div class="P-right3">
                        <div class="P-right4">
                            <div class="P-right5">Email</div>
                            <input type="email" name="email" class="P-right6 P-inputt" value=<?php echo $email ?>>
                        </div>
                        <div class="P-right7">
                            <div class="P-right8">Phone Number</div>
                            <input type="text" name="phoneNu" class="P-right9 P-inputt" disabled value=<?php echo $p_number ?>>
                        </div>
                    </div>
                    <div class="P-right11">
                        <div class="P-right12">Address</div>
                        <textarea name="address" class="P-right13"><?php echo $address ?></textarea>
                    </div>
                    <button name="change" onclick="handleSave()" class="P-save">Save</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../Functionality/Profile.js"></script>
</body>

</html>