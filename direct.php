<?php include("conn.php")?>


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

    <?php include("navbarbase.php") ?>

    <section class=welcome>
        <h2> Welcome to your </h2>
        <h1> Profile Page </h1>
    </section>

    <div class="loginContent profilepagebuttons">
        <?php
        if (isset($_SESSION['uname']) == "") {
            echo '<form action="login.php" class="loginContent"><button type="submit" class="loginButton">Log In</button></form>';
            echo '<form action="signup.php" class="loginContent"><button type="submit" class="loginButton">Sign Up</button></form>';
        } else {
            $uname = $_SESSION['uname'];
            $query = $conn->query("SELECT * FROM `users` WHERE `uname`='$uname';");
            $row = $query->fetch(PDO::FETCH_ASSOC);
            $dateCreated = $row['created'];



            echo "<h4>Account name: $uname</h4>";
            echo "<h4>Date created: $dateCreated</h4>";
            if ($row['roles'] == 2) {
                echo '<h4>Account type: Business</h4>';
                echo '<form action=./addevents.php><button type="submit">Add Event</button></form>';
                echo '<form action=./deleteevent.php><button type="submit">Delete Event</button></form>';
            } else {
                echo '<h4>Account type: Normal User</h4>';
                echo '<h4>Helpful tip: Want to edit a review?
                <br>Write another review to replace the old one!</h4>';
            }
            echo '<form action="logout.php" class="loginContent"><button type="submit" class="loginButton">Log Out</button></form>';
        }
        ?>
    </div>


    <?php include('foot.php');?>