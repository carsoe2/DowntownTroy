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

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6 text-right">
                     <a class="btn btn-primary mb-3 mr-1 btn-lg" href="#carouselExampleIndicators2" role="button"
                        data-bs-slide="prev">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 btn-lg" href="#carouselExampleIndicators2" role="button"
                        data-bs-slide="next">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <a href="./restaurants/Snowman.php">
                                            <div class="card">
                                                <img class="img-fluid" alt="Snowman ice cream"
                                                    src="resources/TroyPhotos/snowman.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Snowman</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>


                                    <div class="col-md-4 mb-3">
                                        <a href="./restaurants/nighthawks.php">
                                            <div class="card">
                                                <img class="img-fluid" alt="Nighthawks"
                                                    src="resources/TroyPhotos/nighthawks.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Nighthawks</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>


                                    <div class="col-md-4 mb-3">
                                        <a href="./restaurants/slidindirty.php">
                                            <div class="card">
                                                <img class="img-fluid" alt="Sliding Dirty"
                                                    src="resources/TroyPhotos/slidingdirty.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Sliding Dirty</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <a href="./restaurants/bardAndBaker.php">
                                            <div class="card">
                                                <img class="img-fluid" alt="Bard &amp; Baker"
                                                    src="resources/TroyPhotos/bard&baker.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Bard &amp; Baker</h4>
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="./restaurants/dinobbq.php">
                                            <div class="card">
                                                <img class="img-fluid" alt="Dinosaur BBQ"
                                                    src="resources/TroyPhotos/dinosaurbbq.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Dinosaur BBQ</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="./restaurants/littlepecks.php">
                                            <div class="card">
                                                <img class="img-fluid" alt="Little Pecks"
                                                    src="resources/TroyPhotos/littlepecks.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Little Pecks</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <a href="./restaurants/luckycorner.php">
                                            <div class="card">
                                                <img class="img-fluid" alt="Lucky Corner"
                                                    src="resources/TroyPhotos/luckycorner.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Lucky Corner</h4>
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="./restaurants/manorys.php">
                                            <div class="card">
                                                <img class="img-fluid" alt="Manorys" src="resources/TroyPhotos/Manorys.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Manorys</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <p class="littletext"> Is your business missing from this page? Click here to go to the verify your business form on our About Us Page to be feature on this page and get a business account!  <button class="btn" onclick="window.location='./aboutus.php'">Click here</a></button>
			</p>

    <section class="pb-5">
        <div class="container overflow-hidden border rounded customcolor">
            <div class="events-link h3 p-4 pb-2 text-light">
                <a href="events.html">Upcoming Events</a>
            </div>
            <div class="row m-3 p-3 border rounded bg-white">
                <div class="h4 m-3 mb-0 p-0">
                    <a href="#" class="link-dark disabled">Farmers Market - Every Saturday from 9am to 2pm</a>
                </div>
                <div class="p-3 ">
                    Buy fresh produce and enjoy different products from different small business around Troy!!!
                </div>
            </div>
            <div class="row m-3 p-3 border rounded bg-white">
                <div class="h4 m-3 mb-0 p-0">
                    <a href="#" class="link-dark disabled">Shirley's Bakery - October 32, 2022</a>
                </div>
                <div class="p-3 ">
                    Come and enjoy a free cookie at Shirley's Bakery. All you have to do is show an employee your RPI
                    student ID!!!
                </div>
            </div>
            <div class="row m-3 p-3 border rounded bg-white">
                <div class="h4 m-3 mb-0 p-0">
                    <a href="#" class="link-dark disabled">Shirley's Record Store - October 13, 2022</a>
                </div>
                <div class="p-3 ">
                    Come and Listen to Behind The Set with everyone at Shirley's Record Store. You will get a coupon to
                    buy 2 records and get 1 for free!!!!
                </div>
            </div>
        </div>

    </section>




    <?php include('foot.php');?>