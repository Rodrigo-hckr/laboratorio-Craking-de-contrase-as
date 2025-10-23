<?php
$conn = mysqli_connect("localhost", "root", "", "laboratorio");
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
