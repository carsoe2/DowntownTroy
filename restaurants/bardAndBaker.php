<?php
session_start();
$servername = "localhost";
$db = "RTAN";
$user = "phpmyadmin";
$pass = "fuYj23K36g@7";
$select1 = $_POST['rating'];
$conn;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", "$user", "$pass");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['write'])) {
        if (isset($_SESSION['uname']) != "") {
            $uname = $_SESSION['uname'];
            $query = $conn->query("SELECT * FROM `users` WHERE `uname`='{$uname}';");
            $role = $query->fetch(PDO::FETCH_ASSOC);
            if ($role != 0) {
                if ($role['roles'] != 2) {
                    $curTime = time();
                    if (($curTime - strtotime($role['created'])) > 3600) { //datetime subtraction returns seconds
                        $restaurant_name = $_POST['restaurant_name'];
                        $query = $conn->query("SELECT * FROM `reviews` WHERE `uname` = '{$uname}' AND `restaurant_name` = '{$restaurant_name}';");
                        $row = $query->fetch(PDO::FETCH_ASSOC);
                        $review = $_POST['review'];
                        switch ($select1) {
                            case 1:
                                $rating = 1;
                                break;
                            case 2:
                                $rating = 2;
                                break;
                            case 3:
                                $rating = 3;
                                break;
                            case 4:
                                $rating = 4;
                                break;
                            case 5:
                                $rating = 5;
                                break;
                        }
                        if (isset($rating)) {
                            if ($row != false) {// replaces rating if one already exists
                                $id = $row['review_id'];
                                $stmt = $conn->prepare("UPDATE reviews SET restaurant_name=?,uname=?,rating=?,review=? WHERE review_id=?;");
                                $stmt->execute([$restaurant_name, $uname, $rating, $review, $id]);
                                $eMessage = "Review Updated!";
                            } else {
                                $stmt = $conn->prepare("INSERT INTO `reviews` (`restaurant_name`,`uname`,`rating`,`review`) VALUES (?,?,?,?);");
                                $stmt->execute([$restaurant_name, $uname, $rating, $review]);
                                $eMessage = "Review Sent!";
                            }
                        } else { //user did not select a rating
                            $eMessage = "Please enter a rating!";
                        }
                    } else {
                        $eMessage = "New accounts must wait one hour before writing reviews";
                    }
                } else { //business accounts cannot write reviews
                    $eMessage = "Business accounts cannot write reviews";
                }
            } else { //user has no role
                $eMessage = "Invalid Account, no role assigned";
            }
        } else { //not logged in
            header("Location: ../direct.php");
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
    <link rel="stylesheet" href="../troy.css">
    <link rel="icon" href="../resources/rtanlogo.png">

    <title>Downtown Troy</title>
    <style>
        #mapBB {
            height: 200px;
            width: 100%;
        }
    </style>
</head>

<body>
<?php include("restuarantnavbar.php")?>






    <section class="pt-5 pb-5">
        <div class="card mb-3" style="max-height: 500px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../resources/TroyPhotos/bard&baker.png" class="img-fluid rounded-start" alt="bardandbaker" style="max-height: 440px;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Bard & Baker</h5>
                        <p class="card-text">Bard & Baker Troy is the Capital District's first board game café, located
                            at 501 Broadway in the original historic Troy Record Building in downtown Troy, NY,
                            featuring over 850 titles, ranging from classics such as CLUE, Stratego & Scrabble to
                            contemporary games like Catan, Ticket to Ride & Ascension.</p>
                        <p class="card-text"><a href="https://www.bardandbaker.com/">Restaurant site</a></p>
                        <div id="mapBB"></div>
                        <p class="card-text">Price level: $$</p>
                        <p class="card-text"><small class="text-muted">Cafe</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Reviews">
        <div id="errorMessage">
            <?php
            if (isset($eMessage) && strlen($eMessage) > 0) {
                echo "<h2>$eMessage</h2>";
            }
            ?>
        </div>
        <form class="Reviews" action="./bardAndBaker.php" method="POST">
        <div class="form-group">
            <label for="restaurant_name" class="label">Restaurant Name</label>
            <input type="text" readonly class="form-control-plaintext" name="restaurant_name" id="restaurant_name" value="Bard & Baker">
            </div>
        </div>
         <div class="form-group">
            <label for="exampleFormControlSelect1">Rating</label>
            <select class="form-control" id="exampleFormControlSelect1" name="rating">
            <option>Select one</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="review">Review</label>
            <textarea class="form-control" name="review" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary formsubmit" name="write">Submit</button>
        </form>







        <section class="pb-5">
            <div class="container overflow-hidden border rounded greencolor">
                <div class="h3 p-4 pb-2">
                    Reviews (sorted by highest rating)
                </div>


                <?php
                $reviewquery = $conn->prepare("SELECT * FROM `reviews` WHERE `restaurant_name` = 'Bard & Baker' ORDER BY `rating` DESC");
                $reviewquery->execute();
                while ($row = $reviewquery->fetch(PDO::FETCH_ASSOC)) { ?>

                    <div class="row m-3 p-3 border rounded bg-white">
                        <div class="h3 m-3 mb-0 p-0"> <?php echo $row['rating'] ?>/5</div>
                        <div class="h4 m-3 mb-0 p-0">
                            <a href="#" class="link-dark disabled"><?php echo $row['review'] ?></a>
                        </div>
                        <div class="p-3 ">
                            <?php echo $row['uname'] ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </section>

    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="../downtowntroy.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7LZwsmPx-r7xMcX9aXais7oCBSgPIHEY&callback=initMapBB&v=weekly" defer></script>
</body>

</html>