<?php
$f_nameError = $l_nameError = $p_numberError = $passwordError = $cpasswordError = "";
$succ = $dub =  "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $f_name = $_POST['fName'];
    $l_name = $_POST['lName'];
    $p_number = $_POST['pNumber'];
    $password = $_POST['password'];
    $cpassword = $_POST['cPassword'];
    $isPassable = true;

    if (!preg_match("/^[a-zA-Z]+$/", $f_name)) {
        $f_nameError = "Name should only contain letters";
        $isPassable = false;
    } else if (strlen($f_name) < 3) {
        $f_nameError = "Name length should be greater than or equal to 3";
        $isPassable = false;
    }

    if (!preg_match("/^[a-zA-Z]*$/", $l_name)) {
        $l_nameError = "Name should only contain letters";
        $isPassable = false;
    } else if (strlen($l_name) < 3) {
        $l_nameError = "Name length should be greater than or equal to 3";
        $isPassable = false;
    }

    if (preg_match("/^[a-zA-Z]*$/", $p_number)) {
        $p_numberError = "Phone number should only contain numbers";
        $isPassable = false;
    }

    if (strlen($password) < 8) {
        $passwordError = "Password should be at least 8 characters long";
        $isPassable = false;
    } else if (!specialChar($password)) {
        $passwordError = "Password should contain at least one special character";
        $isPassable = false;
    } else if (!number($password)) {
        $passwordError = "Password should contain at least one digit";
        $isPassable = false;
    } else if (!upperCase($password)) {
        $passwordError = "Password should contain at least one uppercase letter";
        $isPassable = false;
    } else if (!lowerCase($password)) {
        $passwordError = "Password should contain at least one lowercase letter";
        $isPassable = false;
    }

    if (!($cpassword === $password)) {
        $cpasswordError = "Passwords did not matched";
        $isPassable = false;
    }

    //----------------------------------MYSQL--------------------------------------

    if ($isPassable) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $hostName = "localhost";
        $dbUser = "root";
        $dbPassword = "";
        $dbName = "tube_academy";
        $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sqll = "SELECT * FROM user_register WHERE p_number = '$p_number'";
        $result = mysqli_query($conn, $sqll);
        if (mysqli_num_rows($result) > 0) {
            $dub = "User already exists";
        }

        $sql = "INSERT INTO user_register (f_name, l_name, p_number, password) VALUES (?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        $preparestmt = mysqli_stmt_prepare($stmt, $sql);
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $f_name, $l_name, $p_number, $password_hash);
            mysqli_stmt_execute($stmt);
            $succ = "Registeration successful.";
        } else {
            die("Something went wrong");
        }
    }
}

//-----------------------------Validation Function-----------------------------------

function specialChar($data)
{
    for ($i = 0; $i < strlen($data); $i++) {
        if (!preg_match('/[^a-zA-Z0-9\s]/', $data[$i])) return true;
    }
    return false;
}

function number($data)
{
    for ($i = 0; $i < strlen($data); $i++) {
        if (preg_match('/^[0-9]/', $data[$i])) return true;
    }
    return false;
}

function upperCase($data)
{
    for ($i = 0; $i < strlen($data); $i++) {
        if (preg_match('/^[A-Z]/', $data[$i])) return true;
    }
    return false;
}

function lowerCase($data)
{
    for ($i = 0; $i < strlen($data); $i++) {
        if (preg_match('/^[a-z]/', $data[$i])) return true;
    }
    return false;
}
