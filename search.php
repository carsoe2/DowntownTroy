<?php include("conn.php")?>

<?php
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
  if (isset($_POST['logout'])) {
    session_destroy();   // function that Destroys Session 
    header("Location: ./index.html");
  }
} catch (PDOException $e) {
  $eMessage = $e;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="icon" href="resources/downtowntroylogo.jpg">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="troy.css">
  <title> Search Results </title>
</head>

<body>
  <?php include("navbarbase.php") ?>
  <h2> Search Results</h2>
  <h3> These are the restaraunt results </h3>

  <?php
  if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    $query = $conn->prepare("SELECT * FROM `restaurants` WHERE `restaurant_name` LIKE '%$keyword%' or `restaurant_description` LIKE '%$keyword%' or `category` LIKE '%$keyword%' ");
    $query->execute();
    $r1 = $query->fetch(PDO::FETCH_ASSOC);
    if ($r1 != false) {
      echo '
      <table class="table ">
      <thead class="alert-info">
        <tr>
          <th>Restuarant Name</th>
          <th>Restuarant Description</th>
          <th>Category</th>
        </tr>
      </thead>
      <tbody>
      ';

      $query = $conn->prepare("SELECT * FROM `restaurants` WHERE `restaurant_name` LIKE '%$keyword%' or `restaurant_description` LIKE '%$keyword%' or `category` LIKE '%$keyword%' ");
      $query->execute();
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $rname = $row['restaurant_name'];
        $rdesc = $row['restaurant_description'];
        $rcat = $row['category'];
        echo "
          <tr>
          <td> $rname </td>
          <td> $rdesc </td>
          <td> $rcat </td>
          </tr>
          ";
      }
      echo '
      </tbody>
      </table>
      ';
    } else {
      echo "<h4>No Results Found</h4>";
    }
  }
  ?>

  <h3> These are the events results </h3>
  <?php
  if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    $query = $conn->prepare("SELECT * FROM `events` WHERE `event_name` LIKE '%$keyword%' or `event_description` LIKE '%$keyword%'");
    $query->execute();
    $r2 = $query->fetch(PDO::FETCH_ASSOC);
    if ($r2 != false) {
      echo '
    <table class="table">
      <thead class="alert-info">
        <tr>
          <th>Event Name</th>
          <th>Event Description</th>
        </tr>
      </thead>
      <tbody>
    ';
      $query = $conn->prepare("SELECT * FROM `events` WHERE `event_name` LIKE '%$keyword%' or `event_description` LIKE '%$keyword%'");
      $query->execute();
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $ename = $row['event_name'];
        $edesc = $row['event_description'];
        echo "
          <tr>
            <td>$ename</td>
            <td>$edesc</td>
          </tr>
        ";
      }
      echo '
      </tbody>
      </table>';
    } else {
      echo "<h4>No Results Found</h4>";
    }
  }
  ?>






<?php include('foot.php');?>