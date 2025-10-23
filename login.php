<?php
include("db.php");

$user = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE username = '$user' AND password = '$pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    header("Location: success.php");
} else {
    header("Location: error.php");
}
?>
