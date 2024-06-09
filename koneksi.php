<?php
$host = "localhost";
$user = "root";
$pass = "dyah1112$";
$db   = "mydiary2";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Database error!");
}
?>