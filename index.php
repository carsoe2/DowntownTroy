<?php include("conn.php")?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="troy.css">
    <link rel="icon" href="resources/downtowntroylogo.jpg">
    
    <title>Downtown Troy</title>
</head>

<body>

    <?php include("navbarbase.php")?>

      <section class =backimg>
        <img src="resources/TroyPhotos/marketphoto.png" width="100%" height="70%"> </a>

        <div class= explore>
         <a class="exploredown" href="#MoreInfo">  <img class=arrowdown alt="down arrow" src="resources/downarrow.png"> </a>
        </div>

      </section>


      <a id="MoreInfo"></a>
      <section class =welcome>
        <h2> Welcome to </h2>
        <h1> Downtown Troy </h1>
      </section>

      <div class="m-4">
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
              <div class="card text-center">
                <img class="card-img-top" src="resources/TroyPhotos/restaurants.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Dining</h5>
                        <p class="card-text">Explore the many restaurants in Downtown Troy that have a variety of cuisines.</p>
                        <a href="dining.php" class="btn btn-primary" >Know more</a>
                    </div>
                </div>
              
            </div>
            <div class="col">
                <div class="card text-center">
                  <img class="card-img-top" src="resources/TroyPhotos/events.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                        <p class="card-text">Attend many of the events that occur all throughout Downtown Troy.</p>
                        <a href="events.php" class="btn btn-primary">Know more</a>
                    </div>
                </div>
            </div>
            <div class="col">
               <div class="card text-center">
                <img class="card-img-top" src="resources/TroyPhotos/more.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">About Us</h5>
                        <p class="card-text">Learn more about the creators of the Downtown Troy Website</p>
                        <a href="aboutus.php" class="btn btn-primary">Know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php include('foot.php'); ?>

