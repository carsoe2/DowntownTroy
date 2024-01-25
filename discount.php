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

    <h2> Discounts </h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="./resources/TroyPhotos/slidingdirty.png" class="card-img-top"
        alt="Sliding Dirty" />
      <div class="card-body">
        <h5 class="card-title">Sliding Dirty</h5>
        <p class="card-text">
        Our happy hour starts from 3:00 PM until 6:00 PM with a 50% discount on drafts, 25% off on signature cocktails, and $2 dad beer cans. So what are you waiting for? Grab a drink at Slidin’ Dirty today!
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./resources/TroyPhotos/lucasConfectionery.jpg" class="card-img-top"
        alt="Lucas Confectionery" />
      <div class="card-body">
        <h5 class="card-title">Lucas Confectionery</h5>
        <p class="card-text">
          Happy Hour everyday from 4-6pm, come try our Oyster Appetizers!
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./resources/TroyPhotos/dND.png" class="card-img-top"
        alt="Dove + Deer" />
      <div class="card-body">
        <h5 class="card-title">Dove + Deer</h5>
        <p class="card-text">
          Join us for happy hour and chill with upbeat music and food!
        </p>
      </div>
    </div>
  </div>
</div>



      <h2> Student Discounts</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="./resources/TroyPhotos/bard&baker.png" class="card-img-top"
        alt="Bard And Baker" />
      <div class="card-body">
        <h5 class="card-title">Bard & Baker</h5>
        <p class="card-text">
        10% off for all current, active students & faculty members with valid ID shown at time of purchase. Student discounts are valid for game covers, as well as all food & beverage purchases (including alcohol), Tuesday - Sunday.        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./resources/TroyPhotos/dinosaurbbq.png" class="card-img-top"
        alt="Dino BBQ" />
      <div class="card-body">
        <h5 class="card-title">Dinosaur Bar-B-Que</h5>
        <p class="card-text">10% off food only (excludes bar and retail items; only applicable to student or students not to entire check).  Available in house or to go.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./resources/TroyPhotos/littlepecks.png" class="card-img-top"
        alt="Little Pecks" />
      <div class="card-body">
        <h5 class="card-title">Little Pecks</h5>
        <p class="card-text">10% off with a valid student ID. Monday through Friday only</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./resources/TroyPhotos/theruck.png" class="card-img-top"
        alt="The Ruck" />
      <div class="card-body">
        <h5 class="card-title">The Ruck </h5>
        <p class="card-text">15% off Lunches with a valid student ID. 7 days a week.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./resources/TroyPhotos/tacolibre.png" class="card-img-top"
        alt="Taco Libre" />
      <div class="card-body">
        <h5 class="card-title">Taco Libre </h5>
        <p class="card-text"> 10% off an in-house purchase</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./resources/TroyPhotos/tarakitchen.png" class="card-img-top"
        alt="Tara Kitchen Troy" />
      <div class="card-body">
        <h5 class="card-title">Tara Kitchen Troy </h5>
        <p class="card-text">Students receive 15% off their bill at all other times with a valid student ID.</p>
      </div>
    </div>
  </div>
</div>


      <?php include('foot.php');?>