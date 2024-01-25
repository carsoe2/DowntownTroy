
<?php
	session_start();
	$servername = "localhost";
	$db = "RTAN";
	$user = "phpmyadmin";
	$pass = "fuYj23K36g@7";
	$userName = $_SESSION['uname'];
  	
	$conn;
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$db", "$user", "$pass");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if (isset($_POST['submit'])) {
			$query = "DELETE FROM events where event_key=$ekey";

			
			$stmt = $conn->prepare($query);

			$stmt->execute();
		
			header("Location: events.php");
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
			Your Events
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
				$stmt = $conn->prepare("SELECT * FROM events WHERE DATEDIFF(event_date, CURRENT_DATE) > -21 AND userID = $userName ORDER BY event_date;");
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
				<div class="col p-3">
					<?php echo ('<button class="btn btn-outline-success" type="submit" name="submit" onclick="$ekey=$event["event_key"]">Delete Event</button>') ?>
				</div>
			</div>
			<?php 
				}
			?>
		</div>
		
	</div>

	<?php include('foot.php');?>
