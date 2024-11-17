<?php
$check = $cor =  "";
if (isset($_POST["login"])) {
    $p_number = $_POST["p_number"];
    $password = $_POST["password"];

    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "tube_academy";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM user_register WHERE p_number = '$p_number'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user) {
        if (password_verify($password, $user["password"])) {
            $cor = "Login successfully";
            session_start();
            $_SESSION["user"] = $p_number;
            header("Location: home.php");
            die();
        } else {
            $check = "Invalid password";
        }
    } else {
        $check = "User does not exist";
    }
}
