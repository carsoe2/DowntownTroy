<?php
	session_start();
	$servername = "localhost";
	$db = "RTAN";
	$user = "phpmyadmin";
	$pass = "fuYj23K36g@7";

	$conn;
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$db", "$user", "$pass");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="troy.css">
	<link rel="icon" href="resources/downtowntroylogo.jpg">
	<title>Downtown Troy</title>
</head>

<body>

	<?php include("navbarbase.php")?>

	<div class="event-table">
		<div class="h3 text-center mb-3">
			Upcoming Events in Troy
		</div>

		<div class="container text-center">
			

			<br>
			<div class="row row-light">
				<div class="col p-3"> Event name </div>
				<div class="col p-3"> Date </div>
				<div class="col p-3"> Location </div>
				<div class="col p-3"> Description </div>
			</div>
			<?php 
				$a=1;
				$stmt = $conn->prepare("SELECT * FROM events WHERE DATEDIFF(event_date, CURRENT_DATE) > -21 ORDER BY event_date;");

				$stmt->execute();	
				$events = $stmt->fetchALL();
				
				foreach($events as $event) {
					
			?>
			<div class="row row-dark">
				<div class="col p-3">
					<?php echo $event['event_name']; ?>
				</div>
				<div class="col p-3">
					<?php echo $event['event_date_string']; ?>
				</div>
				<div class="col p-3">
					<?php echo $event['location']; ?>
				</div>
				<div class="col p-3">
					<?php echo $event['event_description']; ?>
				</div>
			</div>
			<?php 
				}
			?>
		</div>
		
	</div>
	<p class="littletext"> Do you see an event that isn't on here? Business accounts can add an event from their profile page! <button class="btn" onclick="window.location='./direct.php'">Profile Page</a></button>
			</p>

	<?php include('foot.php');?>