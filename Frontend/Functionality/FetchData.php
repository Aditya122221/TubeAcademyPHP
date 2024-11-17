<?php
$f_name = $l_name = $p_number = $email = $address =  "";

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "tube_academy";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM user_register";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $f_name = $row["f_name"];
        $l_name = $row["l_name"];
        $p_number = $row["p_number"];
        $email = $row["email"];
        $address = $row["address"];
    }
}

if (isset($_POST["change"])) {
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $color = "color:transparent";

    $sql = "UPDATE user_register SET f_name='$f_name', l_name='$l_name', email='$email', address='$address' WHERE p_number='$p_number'";

    if (mysqli_query($conn, $sql)) {
        echo "<div style=" . $color . ">Record updated successfully</div>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
