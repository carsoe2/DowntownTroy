<?php

echo(
    '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"> <img class=logo alt="Logo" src="../resources/downtowntroylogo.jpg"> Downtown
                Troy </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  href="../events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dining.php">Dining</a>
                    </li>
                 <li class="nav-item">
                    <a class="nav-link" href="../discount.php" >Discounts</a>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../aboutus.php">About Us</a>
                    </li>
                </ul>
                <form class="d-flex" action ="../search.php" method="POST" role="search">
                <input type="text" class="form-control searchbutton" name="keyword" placeholder="Search here..." required="required"/>
                <button class="btn btn-outline-success" type="submit" name ="search">Search</button>
              </form>
            </div>');


            if(isset($_SESSION['uname']) == "") {
                //Log in button to direct.php
                echo '<form action="../login.php" class="d-flex"><button type="submit" class="btn btn-outline-success">Log In</button></form>';
                echo '<form action="../signup.php" class="d-flex"><button type="submit" class="btn btn-outline-success">Sign Up</button></form>';
            } else {


              echo '<form action="../direct.php" class="d-flex"><button type="submit" class="btn btn-outline-success">'.$_SESSION['uname']. '\'s Profile</button></form>';
              echo '<form action="../logout.php" class="d-flex"><button type="submit" class="btn btn-outline-success">Log Out</button></form>';
            
            /*
            $unameholder=$_SESSION['uname'];
            $query = $conn->prepare("SELECT * FROM `users` WHERE `uname` = '%$unameholder%'");
            $query->execute();
            $r1 = $query->fetch(PDO::FETCH_ASSOC);
            $roles = $row['roles'];
            if ($roles == 2) {
              echo '<form action="direct.php" class="d-flex"><button type="submit" class="btn btn-outline-success">'.'Buisness Account: '.$_SESSION['uname']. '\'s Profile</button></form>';
              echo '<form action="logout.php" class="d-flex"><button type="submit" class="btn btn-outline-success">Log Out</button></form>';
            } else {
              echo '<form action="direct.php" class="d-flex"><button type="submit" class="btn btn-outline-success">'.$_SESSION['uname']. '\'s Profile</button></form>';
              echo '<form action="logout.php" class="d-flex"><button type="submit" class="btn btn-outline-success">Log Out</button></form>';
              //display username if they are a bussniess append Buisness Account: to the front
            }
            */
            }

    
    echo('
            </div>
    </nav>
    '
);


?>
