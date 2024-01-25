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
    if (isset($_POST['signin'])) {	
        if (strlen($uname) > 0) {	
            //check to see if user exists	
            $query = $conn->query("SELECT * FROM `users` WHERE `uname`='$uname';");	
            $row = $query->fetch(PDO::FETCH_ASSOC);	
            if ($row != false) {	
                $uComp = $row['uname'];	
                $pComp = $row['pword'];	
                if ($uname == $row['uname'] && password_verify($p1, $row['pword'])) {	
                    //correct login, redirect to home page	
                    $_SESSION['uname']=$uname;	
                    if (isset($_SESSION['uname'])) {	
                        header("Location: ./direct.php");	

                    } else {	
                        $eMessage = "Session not set!";	
                    }	
                } else {	
                    if (($uname != $row['uname'])) {	
                        $eMessage = "One or more fields are incorrect!";	
                    } else {	
                        $eMessage = "One or more fields are incorrect!";	
                    }	
                }	
            } else {	
                $eMessage = "One or more fields are incorrect!";	
            }	
        } else {	
            $eMessage = "Please fill out all fields!";	
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
        <h2 class="h2Form">Log In</h2>
        <div id="errorMessage">	
            <?php	
            if (isset($eMessage) && strlen($eMessage) > 0) {	
                echo "<h2>$eMessage</h2>";	
            }	
            ?>	
        </div>

        <form class="loginContent formlogin" action="./login.php" method="POST">


        <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter your username">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" id="pword" name="pword" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-primary formsubmit" name="signin">Log In</button>

        </form>
    </section>



    <?php include('foot.php');?>