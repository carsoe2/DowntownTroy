<?php
session_start();
$servername = "localhost";
$db = "RTAN";
$user = "phpmyadmin";
$pass = "fuYj23K36g@7";
$uname = $_POST['uname'];
$len = strlen($_POST['pword']);
$p1 = $_POST['pword'];

$conn;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", "$user", "$pass");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $eMessage = $e;
}
?>