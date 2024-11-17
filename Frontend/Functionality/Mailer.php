<?php
$suc = $unsuc = "";

if (isset($_POST["send"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $userMessage = $_POST["message"];
    $date = date('Y-m-d');
    date_default_timezone_set("Asia/Kolkata");
    $time = date('h:i:sa');

    if (!preg_match("/^[a-z A-Z]+$/", $name) || strlen($name) < 3) {
        $unsuc = "Name is not a valid name";
    } else {
        $hostName = "localhost";
        $dbUser = "root";
        $dbPassword = "";
        $dbName = "tube_academy";
        $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO email_from_client (full_name, email, message, date, time) VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        $preparestmt = mysqli_stmt_prepare($stmt, $sql);
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $userMessage, $date, $time);
            mysqli_stmt_execute($stmt);
            $suc = "Email sent";
        } else {
            $unsucc = "Something went wrong";
            die("Something went wrong");
        }
    }
}
