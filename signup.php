<?php
session_start();
$servername = "localhost";
$db = "RTAN";
$user = "phpmyadmin";
$pass = "fuYj23K36g@7";
$uname = $_POST['uname'];
$len = strlen($_POST['pword']);
$p1 = $_POST['pword'];
$p2 = $_POST['pword2'];
$pword = password_hash($_POST['pword'], PASSWORD_DEFAULT);
$pword2 = password_hash($_POST['pword2'], PASSWORD_DEFAULT);
$roles = 4;

$conn;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", "$user", "$pass");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['create'])) {
        if ($len >= 13 && $p1 === $p2) {
            //check to make sure user does not exist yet
            $query = $conn->query("SELECT * FROM `users` WHERE `uname`='{$uname}';");
            if ($query->fetchColumn() == 0) {
                if(isset($roles)) {
                    $created = date('Y-m-d H:i:s', time());
                    $stmt = $conn->prepare("INSERT INTO `users` (`uname`,`pword`,`roles`,`created`) VALUES (?,?,?,?)");
                    $stmt->execute([$uname, $pword, $roles, $created]);
                    //successful account creation, redirect to home page
                    $_SESSION['uname']=$uname;
                    if (isset($_SESSION['uname'])) {
                        header("Location: ./direct.php");
                    } else {
                        $eMessage = "Session not set!";
                    }
                } else {
                    $eMessage = "Please select a role";
                }
            } else {
                $eMessage = "Username already exists";
            }
        } else if ($len < 13) {
            $eMessage = "Password must be 13 or more characters!";
        } else if ($pword != $pword2) {
            $eMessage = "Passwords must match!";
        } else {
            $eMessage = "Fill out all fields!";
        }
    }
} catch (PDOException $e) {
    $eMessage = $e;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="troy.css">
    <link rel="icon" href="resources/downtowntroylogo.jpg">
    <title>Downtown Troy</title>
</head>

<body>

<?php include("navbarbase.php")?>
    <section class="loginContent">
        <h2 class="h2Form">Sign Up</h2>
        <div id="errorMessage">
            <?php
            if (isset($eMessage) && strlen($eMessage) > 0) {
                echo "<h2>$eMessage</h2>";
            }
            ?>
        </div>
        <form class="loginContent formlogin" action="./signup.php" method="POST">

        <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter your username">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" id="pword" name="pword" placeholder="Enter your Password (13 or more characters)">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Repeat Password</label>
            <input type="password" class="form-control" id="pword2" name="pword2" placeholder="Enter your Password again">
        </div>

            <button type="submit" class="btn btn-primary formsubmit" name="create">Create Account</button>

        </form>
    </section>



    <?php include('foot.php');?>